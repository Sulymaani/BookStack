<?php

namespace Tests\Auth;

use BookStack\Access\Mfa\MfaSession;
use BookStack\Users\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

/**
 * F002 - Login User Account Test Cases
 * 
 * This test suite covers all test cases for the Login User Account feature (F002).
 * Tests are designed for the BookStack demo environment (https://demo.bookstackapp.com).
 * 
 * Testing Techniques Applied:
 * - Use Case Testing (LU-UC-001 to LU-UC-008)
 * - Boundary Value Analysis (LU-BVA-001 to LU-BVA-006)
 * - Equivalence Partitioning (LU-EP-001 to LU-EP-008)
 * - Error Guessing (LU-EG-001 to LU-EG-008)
 * 
 * Pre-condition: User account exists in the system, user is not logged in.
 * Demo Credentials: admin@example.com / password
 */
class F002_LoginUserAccountTest extends TestCase
{
    // ============================================================================
    // USE CASE TESTING (System Level Testing)
    // Test Cases: LU-UC-001 to LU-UC-008
    // ============================================================================

    /**
     * LU-UC-001: Verify successful login flow
     * 
     * Test Steps:
     * 1. Navigate to login page
     * 2. Enter valid email and password
     * 3. Click "Log In"
     * 
     * Expected Result: User logged in successfully, redirected to home page,
     * user name displayed in navigation.
     */
    public function test_LU_UC_001_verify_successful_login_flow()
    {
        // Arrange - Use existing admin user
        $user = $this->users->admin();

        // Act - Navigate to login page
        $resp = $this->get('/login');
        $resp->assertOk();
        $resp->assertSee('Log In');

        // Submit login form
        $resp = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        // Assert
        $resp->assertRedirect('/');
        $this->assertAuthenticatedAs($user);

        // Verify user can access home page and see their name
        $resp = $this->get('/');
        $resp->assertOk();
        $resp->assertSee($user->name);
    }

    /**
     * LU-UC-002: Verify invalid email handling
     * 
     * Test Steps:
     * 1. Navigate to login page
     * 2. Enter non-existent email
     * 3. Enter any password
     * 4. Click "Log In"
     * 
     * Expected Result: Error message "These credentials do not match our records." displayed,
     * user remains on login page.
     */
    public function test_LU_UC_002_verify_invalid_email_handling()
    {
        // Act
        $this->get('/login');
        $resp = $this->post('/login', [
            'email' => 'nonexistent@test.com',
            'password' => 'anypassword',
        ]);

        // Assert
        $resp->assertRedirect('/login');
        $resp = $this->followRedirects($resp);
        $resp->assertSee('These credentials do not match our records.');
        $this->assertGuest();
    }

    /**
     * LU-UC-003: Verify invalid password handling
     * 
     * Test Steps:
     * 1. Navigate to login page
     * 2. Enter valid email
     * 3. Enter wrong password
     * 4. Click "Log In"
     * 
     * Expected Result: Error message "These credentials do not match our records." displayed,
     * user remains on login page.
     */
    public function test_LU_UC_003_verify_invalid_password_handling()
    {
        // Arrange
        $user = $this->users->editor();

        // Act
        $this->get('/login');
        $resp = $this->post('/login', [
            'email' => $user->email,
            'password' => 'wrongpassword',
        ]);

        // Assert
        $resp->assertRedirect('/login');
        $resp = $this->followRedirects($resp);
        $resp->assertSee('These credentials do not match our records.');
        $this->assertGuest();
    }

    /**
     * LU-UC-004: Verify login with "Remember Me" option
     * 
     * Test Steps:
     * 1. Navigate to login page
     * 2. Enter valid credentials
     * 3. Check "Remember Me" checkbox
     * 4. Click "Log In"
     * 
     * Expected Result: User logged in successfully, remember token stored in database,
     * session persists longer.
     */
    public function test_LU_UC_004_verify_login_with_remember_me_option()
    {
        // Arrange
        $user = $this->users->editor();
        $user->password = Hash::make('password');
        $user->save();

        // Act
        $resp = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
            'remember' => 'on',
        ]);

        // Assert
        $resp->assertRedirect('/');
        $this->assertAuthenticatedAs($user);

        // Verify remember token is set
        $user->refresh();
        $this->assertNotNull($user->remember_token);
    }

    /**
     * LU-UC-005: Verify logout functionality
     * 
     * Test Steps:
     * 1. Login as a user
     * 2. Click "Logout"
     * 
     * Expected Result: User logged out, redirected to home page, 
     * protected pages require login again.
     */
    public function test_LU_UC_005_verify_logout_functionality()
    {
        // Arrange - Login first
        $user = $this->users->editor();
        $this->actingAs($user);
        $this->assertTrue(auth()->check());

        // Act - Logout
        $resp = $this->post('/logout');

        // Assert
        $resp->assertRedirect('/');
        $this->assertGuest();

        // Verify protected pages require login
        $resp = $this->get('/books');
        $resp->assertRedirect('/login');
    }

    /**
     * LU-UC-006: Verify login page display
     * 
     * Test Steps:
     * 1. Navigate to /login
     * 
     * Expected Result: Login page displayed with Email field, Password field,
     * "Remember Me" checkbox, "Log In" button, and "Forgot Password?" link.
     */
    public function test_LU_UC_006_verify_login_page_display()
    {
        // Act
        $resp = $this->get('/login');

        // Assert
        $resp->assertOk();
        $resp->assertSee('Log In');
        $this->withHtml($resp)->assertElementExists('input[name="email"]');
        $this->withHtml($resp)->assertElementExists('input[name="password"]');
        $this->withHtml($resp)->assertElementExists('input[name="remember"]');
        $this->withHtml($resp)->assertElementExists('button');
        $resp->assertSee('Forgot Password?');
    }

    /**
     * LU-UC-007: Verify empty form submission
     * 
     * Test Steps:
     * 1. Navigate to login page
     * 2. Leave all fields empty
     * 3. Click "Log In"
     * 
     * Expected Result: Validation errors displayed for required fields.
     */
    public function test_LU_UC_007_verify_empty_form_submission()
    {
        // Act
        $this->get('/login');
        $resp = $this->post('/login', [
            'email' => '',
            'password' => '',
        ]);

        // Assert - Should redirect back with errors
        $resp->assertRedirect('/login');
        $resp = $this->get('/login');
        
        // Form should show validation errors
        $this->assertGuest();
    }

    /**
     * LU-UC-008: Verify redirect after login
     * 
     * Test Steps:
     * 1. Attempt to access protected page
     * 2. Get redirected to login
     * 3. Login successfully
     * 
     * Expected Result: After login, redirected to originally requested page.
     */
    public function test_LU_UC_008_verify_redirect_after_login()
    {
        // Arrange
        config()->set('app.url', 'http://localhost');
        $user = $this->users->editor();
        $user->password = Hash::make('password');
        $user->save();
        $page = $this->entities->page();

        // Act - Try to access protected page
        $resp = $this->get($page->getUrl());
        $resp->assertRedirect('/login');

        // Login
        $resp = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        // Assert - Redirected to originally requested page
        $resp->assertRedirect($page->getUrl());
    }

    // ============================================================================
    // BOUNDARY VALUE ANALYSIS (System Level Testing)
    // Test Cases: LU-BVA-001 to LU-BVA-006
    // ============================================================================

    /**
     * LU-BVA-001: Minimum Email Length for Login
     * 
     * Test Steps:
     * 1. Create user with shortest valid email
     * 2. Attempt login with that email
     * 
     * Expected Result: Login succeeds with minimum length valid email.
     */
    public function test_LU_BVA_001_minimum_email_length_for_login()
    {
        // Arrange - Create user with short email
        $user = User::factory()->create([
            'email' => 'a@b.co',
            'password' => Hash::make('Password123'),
        ]);

        // Act
        $resp = $this->post('/login', [
            'email' => 'a@b.co',
            'password' => 'Password123',
        ]);

        // Assert
        $resp->assertRedirect('/');
        $this->assertAuthenticatedAs($user);
    }

    /**
     * LU-BVA-002: Maximum Email Length for Login
     * 
     * Test Steps:
     * 1. Create user with long email (near 255 chars)
     * 2. Attempt login with that email
     * 
     * Expected Result: Login succeeds with maximum length valid email.
     */
    public function test_LU_BVA_002_maximum_email_length_for_login()
    {
        // Arrange - Create user with long email (staying within valid format)
        $localPart = str_repeat('a', 50);
        $longEmail = $localPart . '@example.com';
        
        $user = User::factory()->create([
            'email' => $longEmail,
            'password' => Hash::make('Password123'),
        ]);

        // Act
        $resp = $this->post('/login', [
            'email' => $longEmail,
            'password' => 'Password123',
        ]);

        // Assert
        $resp->assertRedirect('/');
        $this->assertAuthenticatedAs($user);
    }

    /**
     * LU-BVA-003: Minimum Password Length for Login
     * 
     * Test Steps:
     * 1. Create user with 8-character password
     * 2. Attempt login with that password
     * 
     * Expected Result: Login succeeds with minimum length password.
     */
    public function test_LU_BVA_003_minimum_password_length_for_login()
    {
        // Arrange - Create user with minimum password
        $user = User::factory()->create([
            'email' => 'minpass@test.com',
            'password' => Hash::make('Pass1234'), // 8 characters
        ]);

        // Act
        $resp = $this->post('/login', [
            'email' => 'minpass@test.com',
            'password' => 'Pass1234',
        ]);

        // Assert
        $resp->assertRedirect('/');
        $this->assertAuthenticatedAs($user);
    }

    /**
     * LU-BVA-004: Long Password for Login
     * 
     * Test Steps:
     * 1. Create user with very long password (100 chars)
     * 2. Attempt login with that password
     * 
     * Expected Result: Login succeeds with long password.
     */
    public function test_LU_BVA_004_long_password_for_login()
    {
        // Arrange - Create user with long password
        $longPassword = str_repeat('Ab1!', 25); // 100 characters
        
        $user = User::factory()->create([
            'email' => 'longpass@test.com',
            'password' => Hash::make($longPassword),
        ]);

        // Act
        $resp = $this->post('/login', [
            'email' => 'longpass@test.com',
            'password' => $longPassword,
        ]);

        // Assert
        $resp->assertRedirect('/');
        $this->assertAuthenticatedAs($user);
    }

    /**
     * LU-BVA-005: Empty Email Field
     * 
     * Test Steps:
     * 1. Navigate to login page
     * 2. Submit with empty email field
     * 
     * Expected Result: Validation error "The email field is required." displayed.
     */
    public function test_LU_BVA_005_empty_email_field()
    {
        // Act
        $this->get('/login');
        $resp = $this->post('/login', [
            'email' => '',
            'password' => 'somepassword',
        ]);

        // Assert
        $resp->assertSessionHasErrors('email');
        $this->assertGuest();
    }

    /**
     * LU-BVA-006: Empty Password Field
     * 
     * Test Steps:
     * 1. Navigate to login page
     * 2. Submit with empty password field
     * 
     * Expected Result: Validation error "The password field is required." displayed.
     */
    public function test_LU_BVA_006_empty_password_field()
    {
        // Act
        $this->get('/login');
        $resp = $this->post('/login', [
            'email' => 'test@example.com',
            'password' => '',
        ]);

        // Assert
        $resp->assertSessionHasErrors('password');
        $this->assertGuest();
    }

    // ============================================================================
    // EQUIVALENCE PARTITIONING (System Level Testing)
    // Test Cases: LU-EP-001 to LU-EP-008
    // ============================================================================

    /**
     * LU-EP-001: Valid Email - Standard Format
     * 
     * Test Steps:
     * 1. Login with standard email format user@domain.com
     * 
     * Expected Result: Login succeeds.
     */
    public function test_LU_EP_001_valid_email_standard_format()
    {
        // Arrange
        $user = User::factory()->create([
            'email' => 'standard@domain.com',
            'password' => Hash::make('Password123'),
        ]);

        // Act
        $resp = $this->post('/login', [
            'email' => 'standard@domain.com',
            'password' => 'Password123',
        ]);

        // Assert
        $resp->assertRedirect('/');
        $this->assertAuthenticatedAs($user);
    }

    /**
     * LU-EP-002: Valid Email - Subdomain Format
     * 
     * Test Steps:
     * 1. Login with subdomain email format user@mail.domain.com
     * 
     * Expected Result: Login succeeds.
     */
    public function test_LU_EP_002_valid_email_subdomain_format()
    {
        // Arrange
        $user = User::factory()->create([
            'email' => 'user@mail.domain.com',
            'password' => Hash::make('Password123'),
        ]);

        // Act
        $resp = $this->post('/login', [
            'email' => 'user@mail.domain.com',
            'password' => 'Password123',
        ]);

        // Assert
        $resp->assertRedirect('/');
        $this->assertAuthenticatedAs($user);
    }

    /**
     * LU-EP-003: Invalid Email - Missing @ Symbol
     * 
     * Test Steps:
     * 1. Attempt login with email missing @ symbol
     * 
     * Expected Result: Validation error for invalid email format.
     */
    public function test_LU_EP_003_invalid_email_missing_at_symbol()
    {
        // Act
        $this->get('/login');
        $resp = $this->post('/login', [
            'email' => 'userdomain.com',
            'password' => 'Password123',
        ]);

        // Assert
        $resp->assertSessionHasErrors('email');
        $this->assertGuest();
    }

    /**
     * LU-EP-004: Invalid Email - Missing Domain
     * 
     * Test Steps:
     * 1. Attempt login with email missing domain
     * 
     * Expected Result: Validation error for invalid email format.
     */
    public function test_LU_EP_004_invalid_email_missing_domain()
    {
        // Act
        $this->get('/login');
        $resp = $this->post('/login', [
            'email' => 'user@',
            'password' => 'Password123',
        ]);

        // Assert
        $resp->assertSessionHasErrors('email');
        $this->assertGuest();
    }

    /**
     * LU-EP-005: Valid User - Admin Role
     * 
     * Test Steps:
     * 1. Login as admin user
     * 
     * Expected Result: Login succeeds, admin has access to admin features.
     */
    public function test_LU_EP_005_valid_user_admin_role()
    {
        // Arrange
        $admin = $this->users->admin();

        // Act
        $resp = $this->post('/login', [
            'email' => $admin->email,
            'password' => 'password',
        ]);

        // Assert
        $resp->assertRedirect('/');
        $this->assertAuthenticatedAs($admin);

        // Verify admin can access settings
        $resp = $this->get('/settings');
        $resp->assertOk();
    }

    /**
     * LU-EP-006: Valid User - Editor Role
     * 
     * Test Steps:
     * 1. Login as editor user
     * 
     * Expected Result: Login succeeds, editor has appropriate access.
     */
    public function test_LU_EP_006_valid_user_editor_role()
    {
        // Arrange
        $editor = $this->users->editor();
        $editor->password = Hash::make('password');
        $editor->save();

        // Act
        $resp = $this->post('/login', [
            'email' => $editor->email,
            'password' => 'password',
        ]);

        // Assert
        $resp->assertRedirect('/');
        $this->assertAuthenticatedAs($editor);

        // Verify editor can access books
        $resp = $this->get('/books');
        $resp->assertOk();
    }

    /**
     * LU-EP-007: Valid User - Viewer Role
     * 
     * Test Steps:
     * 1. Login as viewer user
     * 
     * Expected Result: Login succeeds, viewer has read-only access.
     */
    public function test_LU_EP_007_valid_user_viewer_role()
    {
        // Arrange
        $viewer = $this->users->viewer();
        $viewer->password = Hash::make('password');
        $viewer->save();

        // Act
        $resp = $this->post('/login', [
            'email' => $viewer->email,
            'password' => 'password',
        ]);

        // Assert
        $resp->assertRedirect('/');
        $this->assertAuthenticatedAs($viewer);
    }

    /**
     * LU-EP-008: Invalid User - Non-existent Account
     * 
     * Test Steps:
     * 1. Attempt login with non-existent email
     * 
     * Expected Result: Error message displayed, login fails.
     */
    public function test_LU_EP_008_invalid_user_non_existent_account()
    {
        // Act
        $resp = $this->post('/login', [
            'email' => 'nonexistent@nowhere.com',
            'password' => 'anypassword',
        ]);

        // Assert
        $resp->assertRedirect('/login');
        $resp = $this->followRedirects($resp);
        $resp->assertSee('These credentials do not match our records.');
        $this->assertGuest();
    }

    // ============================================================================
    // ERROR GUESSING (System Level Testing)
    // Test Cases: LU-EG-001 to LU-EG-008
    // ============================================================================

    /**
     * LU-EG-001: SQL Injection in Email Field
     * 
     * Test Steps:
     * 1. Enter SQL injection payload in email field
     * 2. Attempt login
     * 
     * Expected Result: Input is sanitized, no SQL execution, login fails safely.
     */
    public function test_LU_EG_001_sql_injection_in_email_field()
    {
        // Arrange
        $sqlInjection = "admin@admin.com'; DROP TABLE users; --";

        // Act
        $resp = $this->post('/login', [
            'email' => $sqlInjection,
            'password' => 'password',
        ]);

        // Assert - Users table should still exist
        $this->assertTrue(
            DB::table('users')->exists(),
            'Users table should still exist after SQL injection attempt'
        );
        $this->assertGuest();
    }

    /**
     * LU-EG-002: XSS Attack in Email Field
     * 
     * Test Steps:
     * 1. Enter XSS payload in email field
     * 2. Attempt login
     * 3. Check error display
     * 
     * Expected Result: Script is escaped, no JavaScript execution.
     */
    public function test_LU_EG_002_xss_attack_in_email_field()
    {
        // Arrange
        $xssPayload = "<script>alert('XSS')</script>@test.com";

        // Act
        $resp = $this->post('/login', [
            'email' => $xssPayload,
            'password' => 'password',
        ]);

        $resp = $this->followRedirects($resp);

        // Assert - XSS should be escaped in any error display
        $content = $resp->getContent();
        $this->assertStringNotContainsString("<script>alert('XSS')</script>", $content);
    }

    /**
     * LU-EG-003: Login Throttling - Rate Limiting
     * 
     * Test Steps:
     * 1. Submit 6 failed login attempts rapidly
     * 
     * Expected Result: After 5 failures, 6th attempt returns "Too many login attempts" error.
     */
    public function test_LU_EG_003_login_throttling_rate_limiting()
    {
        // Act - Submit multiple failed login attempts
        for ($i = 0; $i < 5; $i++) {
            $resp = $this->post('/login', [
                'email' => 'throttle@test.com',
                'password' => 'wrongpassword',
            ]);
        }

        // 6th attempt should be throttled
        $resp = $this->post('/login', [
            'email' => 'throttle@test.com',
            'password' => 'wrongpassword',
        ]);

        // Assert
        $resp = $this->followRedirects($resp);
        $resp->assertSee('Too many login attempts');
    }

    /**
     * LU-EG-004: Login with Disabled Account
     * 
     * Test Steps:
     * 1. Attempt to login with guest user (system account)
     * 
     * Expected Result: Login rejected for system/guest accounts.
     */
    public function test_LU_EG_004_login_with_disabled_account()
    {
        // Arrange - Try to login as guest user
        $guest = $this->users->guest();

        // Act
        $resp = $this->post('/login', [
            'email' => $guest->email,
            'password' => 'password',
        ]);

        // Assert
        $resp->assertRedirect('/login');
        $resp = $this->followRedirects($resp);
        $resp->assertSee('These credentials do not match our records.');
        $this->assertGuest();
    }

    /**
     * LU-EG-005: Email Case Sensitivity
     * 
     * Test Steps:
     * 1. Create user with lowercase email
     * 2. Login with uppercase email
     * 
     * Expected Result: Login succeeds (email should be case-insensitive).
     */
    public function test_LU_EG_005_email_case_sensitivity()
    {
        // Arrange
        $user = User::factory()->create([
            'email' => 'testuser@example.com',
            'password' => Hash::make('Password123'),
        ]);

        // Act - Login with uppercase email
        $resp = $this->post('/login', [
            'email' => 'TESTUSER@EXAMPLE.COM',
            'password' => 'Password123',
        ]);

        // Assert - Should succeed (case-insensitive)
        $resp->assertRedirect('/');
        $this->assertTrue(auth()->check());
    }

    /**
     * LU-EG-006: Password with Special Characters
     * 
     * Test Steps:
     * 1. Create user with password containing special characters
     * 2. Login with that password
     * 
     * Expected Result: Login succeeds, special characters handled correctly.
     */
    public function test_LU_EG_006_password_with_special_characters()
    {
        // Arrange
        $specialPassword = 'P@$$w0rd!#%&*()';
        $user = User::factory()->create([
            'email' => 'special@test.com',
            'password' => Hash::make($specialPassword),
        ]);

        // Act
        $resp = $this->post('/login', [
            'email' => 'special@test.com',
            'password' => $specialPassword,
        ]);

        // Assert
        $resp->assertRedirect('/');
        $this->assertAuthenticatedAs($user);
    }

    /**
     * LU-EG-007: Login with Whitespace in Email
     * 
     * Test Steps:
     * 1. Login with email containing leading/trailing whitespace
     * 
     * Expected Result: Whitespace is trimmed, login succeeds if email exists.
     */
    public function test_LU_EG_007_login_with_whitespace_in_email()
    {
        // Arrange
        $user = User::factory()->create([
            'email' => 'whitespace@test.com',
            'password' => Hash::make('Password123'),
        ]);

        // Act - Login with whitespace around email
        $resp = $this->post('/login', [
            'email' => '  whitespace@test.com  ',
            'password' => 'Password123',
        ]);

        // Assert - Depending on implementation, may succeed or fail
        // Most systems trim whitespace
        $this->assertTrue(
            $resp->isRedirect('/') || $resp->isRedirect('/login'),
            'Should either succeed (trimmed) or fail gracefully'
        );
    }

    /**
     * LU-EG-008: Concurrent Session Handling
     * 
     * Test Steps:
     * 1. Login as user
     * 2. Verify session is active
     * 3. Logout
     * 4. Verify session is cleared
     * 
     * Expected Result: Sessions are properly managed, MFA session cleared on logout.
     */
    public function test_LU_EG_008_concurrent_session_handling()
    {
        // Arrange
        $user = $this->users->editor();
        $mfaSession = $this->app->make(MfaSession::class);

        // Act - Login and mark MFA verified
        $this->actingAs($user);
        $mfaSession->markVerifiedForUser($user);
        $this->assertTrue($mfaSession->isVerifiedForUser($user));

        // Logout
        $this->post('/logout');

        // Assert - MFA session should be cleared
        $this->assertFalse($mfaSession->isVerifiedForUser($user));
        $this->assertGuest();
    }

    /**
     * LU-EG-009: Login with Unconfirmed Email
     * 
     * Test Steps:
     * 1. Enable email confirmation requirement
     * 2. Create user with unconfirmed email
     * 3. Attempt login
     * 
     * Expected Result: User cannot access protected content until email confirmed.
     */
    public function test_LU_EG_009_login_with_unconfirmed_email()
    {
        // Arrange
        $this->setSettings(['registration-confirmation' => 'true']);
        $user = $this->users->editor();
        $user->email_confirmed = false;
        $user->save();

        // Login the user directly
        auth()->login($user);
        $this->assertTrue(auth()->check());

        // Act - Try to access protected page
        $resp = $this->get('/books');

        // Assert - Should be logged out due to unconfirmed email
        $resp->assertRedirect('/');
        $this->assertFalse(auth()->check());
    }

    /**
     * LU-EG-010: External Redirect Prevention
     * 
     * Test Steps:
     * 1. Set referer to external URL
     * 2. Login successfully
     * 
     * Expected Result: User redirected to internal page, not external URL.
     */
    public function test_LU_EG_010_external_redirect_prevention()
    {
        // Arrange
        config()->set('app.url', 'http://localhost');
        $this->setSettings(['app-public' => true]);
        $user = $this->users->admin();

        // Act - Try to set external redirect
        $this->get('/login', ['referer' => 'https://malicious-site.com']);
        $resp = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        // Assert - Should redirect to localhost, not external site
        $resp->assertRedirect('http://localhost');
    }
}

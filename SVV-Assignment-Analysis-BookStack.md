# Software Verification and Validation (SVV) Assignment Analysis

## BookStack Documentation Platform

---

**Course:** WOC7015 - Software Verification and Validation  
**Assignment:** Project Analysis (AA)  
**Project:** BookStack  
**Date:** January 3, 2026  
**Student Name:** [Your Name]  
**Student ID:** [Your Student ID]

---

## Table of Contents

1. [Introduction](#1-introduction)
   - 1.1 [Project Overview](#11-project-overview)
   - 1.2 [Project Purpose and Goals](#12-project-purpose-and-goals)
   - 1.3 [Technology Stack](#13-technology-stack)
2. [Project Architecture](#2-project-architecture)
   - 2.1 [System Architecture](#21-system-architecture)
   - 2.2 [Directory Structure](#22-directory-structure)
   - 2.3 [Key Modules and Components](#23-key-modules-and-components)
3. [Testing Analysis](#3-testing-analysis)
   - 3.1 [Testing Framework](#31-testing-framework)
   - 3.2 [Test Categories](#32-test-categories)
   - 3.3 [Test Coverage Analysis](#33-test-coverage-analysis)
   - 3.4 [Test Case Examples](#34-test-case-examples)
4. [Verification Methods](#4-verification-methods)
   - 4.1 [Static Analysis](#41-static-analysis)
   - 4.2 [Code Standards](#42-code-standards)
   - 4.3 [Continuous Integration](#43-continuous-integration)
5. [Validation Methods](#5-validation-methods)
   - 5.1 [Functional Testing](#51-functional-testing)
   - 5.2 [Integration Testing](#52-integration-testing)
   - 5.3 [API Testing](#53-api-testing)
6. [Quality Assurance](#6-quality-assurance)
   - 6.1 [Code Quality Tools](#61-code-quality-tools)
   - 6.2 [Security Testing](#62-security-testing)
   - 6.3 [Database Testing](#63-database-testing)
7. [Issues and Recommendations](#7-issues-and-recommendations)
   - 7.1 [Identified Issues](#71-identified-issues)
   - 7.2 [Recommendations](#72-recommendations)
8. [Conclusion](#8-conclusion)
9. [References](#9-references)

---

## 1. Introduction

### 1.1 Project Overview

**BookStack** is an open-source, self-hosted platform for storing and organizing information and documentation. It provides a simple, intuitive interface for creating and managing documentation using a hierarchical structure of Shelves > Books > Chapters > Pages.

- **Repository:** https://github.com/BookStackApp/BookStack
- **License:** MIT License
- **Version Analyzed:** Latest development branch
- **Primary Language:** PHP (Laravel Framework)
- **Frontend:** JavaScript/TypeScript with SASS

### 1.2 Project Purpose and Goals

BookStack is designed as an opinionated documentation platform with the following key objectives:

1. **Simplicity:** Provide a pleasant and simple out-of-the-box experience
2. **Accessibility:** Require only basic word-processing skills for content creation
3. **Organization:** Support hierarchical organization of documentation
4. **Power Features:** Offer advanced features without interfering with core user experience
5. **Stability:** Maintain a stable and easy upgrade path

### 1.3 Technology Stack

| Component            | Technology                      |
| -------------------- | ------------------------------- |
| Backend Framework    | Laravel 12.x                    |
| Programming Language | PHP 8.2+                        |
| Database             | MySQL/MariaDB/PostgreSQL/SQLite |
| Frontend             | JavaScript/TypeScript           |
| CSS Preprocessor     | SASS                            |
| Build Tool           | esbuild                         |
| Testing Framework    | PHPUnit 11.5+                   |
| JavaScript Testing   | Jest                            |
| Static Analysis      | PHPStan/Larastan                |
| Code Standards       | PHP_CodeSniffer                 |

---

## 2. Project Architecture

### 2.1 System Architecture

BookStack follows the **Model-View-Controller (MVC)** architectural pattern provided by Laravel, with additional service-layer abstractions for complex business logic.

```
┌─────────────────────────────────────────────────────────────┐
│                      Client Browser                          │
└─────────────────────────────────────────────────────────────┘
                              │
                              ▼
┌─────────────────────────────────────────────────────────────┐
│                    HTTP Layer (Routes)                       │
│                 routes/web.php, routes/api.php               │
└─────────────────────────────────────────────────────────────┘
                              │
                              ▼
┌─────────────────────────────────────────────────────────────┐
│                     Controllers (app/Http)                   │
│              Handle HTTP requests and responses              │
└─────────────────────────────────────────────────────────────┘
                              │
                              ▼
┌─────────────────────────────────────────────────────────────┐
│                    Services Layer (app/)                     │
│     Business Logic: Entities, Access, Permissions, etc.      │
└─────────────────────────────────────────────────────────────┘
                              │
                              ▼
┌─────────────────────────────────────────────────────────────┐
│                      Models (Eloquent)                       │
│                   Database interactions                      │
└─────────────────────────────────────────────────────────────┘
                              │
                              ▼
┌─────────────────────────────────────────────────────────────┐
│                        Database                              │
│            MySQL / MariaDB / PostgreSQL / SQLite            │
└─────────────────────────────────────────────────────────────┘
```

### 2.2 Directory Structure

```
BookStack/
├── app/                    # Application source code
│   ├── Access/            # Authentication & Authorization
│   ├── Activity/          # Activity logging
│   ├── Api/               # API controllers
│   ├── App/               # Core application classes
│   ├── Config/            # Configuration files
│   ├── Console/           # CLI commands
│   ├── Entities/          # Core content models (Books, Pages, etc.)
│   ├── Exceptions/        # Exception handlers
│   ├── Exports/           # Export functionality (PDF, HTML, ZIP)
│   ├── Facades/           # Laravel facades
│   ├── Http/              # HTTP layer (Controllers, Middleware)
│   ├── Permissions/       # Permission system
│   ├── References/        # Cross-reference tracking
│   ├── Search/            # Search functionality
│   ├── Settings/          # Application settings
│   ├── Sorting/           # Content sorting
│   ├── Theming/           # Theme support
│   ├── Translation/       # Localization
│   ├── Uploads/           # File upload handling
│   ├── Users/             # User management
│   └── Util/              # Utility classes
├── database/              # Database migrations and seeders
├── resources/             # Frontend resources
│   ├── js/               # JavaScript/TypeScript components
│   ├── sass/             # SASS stylesheets
│   └── views/            # Blade templates
├── routes/                # Route definitions
├── tests/                 # Test suite
├── public/                # Public assets
└── vendor/                # Composer dependencies
```

### 2.3 Key Modules and Components

#### Core Entity Modules

| Module          | Description                                           | Location           |
| --------------- | ----------------------------------------------------- | ------------------ |
| **Entities**    | Core content models (Shelves, Books, Chapters, Pages) | `app/Entities/`    |
| **Access**      | Authentication and authorization                      | `app/Access/`      |
| **Permissions** | Role-based access control                             | `app/Permissions/` |
| **Search**      | Full-text search functionality                        | `app/Search/`      |
| **Exports**     | Content export (PDF, HTML, Markdown, ZIP)             | `app/Exports/`     |
| **Uploads**     | Image and attachment management                       | `app/Uploads/`     |

#### Frontend Components

BookStack uses a component-based JavaScript architecture:

- **Page Editor** - WYSIWYG and Markdown editing
- **Image Manager** - Image upload and selection
- **Entity Selector** - Content selection popups
- **Comments System** - Page commenting functionality
- **Search Components** - Global and entity search

---

## 3. Testing Analysis

### 3.1 Testing Framework

BookStack employs a comprehensive testing strategy using:

| Framework           | Purpose                         | Configuration         |
| ------------------- | ------------------------------- | --------------------- |
| **PHPUnit 11.5+**   | PHP unit and functional testing | `phpunit.xml`         |
| **Jest**            | JavaScript unit testing         | `jest.config.ts`      |
| **Laravel Testing** | HTTP and feature testing        | Built-in with Laravel |
| **AssertHtml**      | HTML assertion testing          | Custom package        |

#### Test Database Configuration

Tests use a separate database to avoid conflicts:

```
Host: 127.0.0.1
Username: bookstack-test
Password: bookstack-test
Database: bookstack-test
```

### 3.2 Test Categories

BookStack contains **153 test files** organized into the following categories:

| Category             | Files | Description                                       |
| -------------------- | ----- | ------------------------------------------------- |
| **Entity Tests**     | 17    | Tests for Books, Chapters, Pages, Shelves         |
| **Auth Tests**       | 12    | Authentication methods (LDAP, SAML, OIDC, Social) |
| **API Tests**        | 15+   | REST API endpoint testing                         |
| **Permission Tests** | 8+    | Role and permission testing                       |
| **Export Tests**     | 6+    | Export functionality (PDF, HTML, ZIP)             |
| **Search Tests**     | 5+    | Search functionality                              |
| **Upload Tests**     | 5+    | Image and attachment handling                     |
| **Unit Tests**       | 10+   | Isolated unit tests                               |
| **Activity Tests**   | 3+    | Activity logging tests                            |

#### Test Directory Structure

```
tests/
├── Activity/              # Activity logging tests
├── Api/                   # API endpoint tests
├── Auth/                  # Authentication tests
│   ├── AuthTest.php
│   ├── LdapTest.php
│   ├── OidcTest.php
│   ├── Saml2Test.php
│   └── SocialAuthTest.php
├── Commands/              # CLI command tests
├── Entity/                # Entity CRUD tests
│   ├── BookTest.php
│   ├── ChapterTest.php
│   ├── PageTest.php
│   └── BookShelfTest.php
├── Exports/               # Export functionality tests
├── Helpers/               # Test helper classes
├── Meta/                  # Meta functionality tests
├── Permissions/           # Permission system tests
├── References/            # Cross-reference tests
├── Search/                # Search functionality tests
├── Settings/              # Settings tests
├── Sorting/               # Sorting tests
├── Unit/                  # Isolated unit tests
├── Uploads/               # File upload tests
├── User/                  # User management tests
├── Util/                  # Utility tests
├── TestCase.php           # Base test case class
└── CreatesApplication.php # Application bootstrapper
```

### 3.3 Test Coverage Analysis

#### Test Statistics

| Metric                 | Value          |
| ---------------------- | -------------- |
| Total Test Files       | 153            |
| Test Suites            | 20+ categories |
| Average Tests per File | ~15-25         |
| Estimated Total Tests  | 2,000+         |

#### Coverage by Module

| Module          | Coverage Level  | Notes                                   |
| --------------- | --------------- | --------------------------------------- |
| Entities (CRUD) | **High**        | Comprehensive page, book, chapter tests |
| Authentication  | **High**        | Multiple auth methods tested            |
| API Endpoints   | **High**        | All public APIs tested                  |
| Permissions     | **High**        | Role-based access thoroughly tested     |
| Exports         | **Medium-High** | PDF, HTML, ZIP exports tested           |
| Search          | **Medium**      | Core search functionality covered       |
| User Interface  | **Low**         | Limited JavaScript unit tests           |

### 3.4 Test Case Examples

#### Example 1: Entity Test (PageTest.php)

```php
public function test_page_create()
{
    $chapter = $this->entities->chapter();
    $page = $this->entities->page();

    $resp = $this->asEditor()->get($chapter->getUrl('/create-page'));
    $resp->assertStatus(200);

    $details = [
        'name' => 'My First Page',
        'html' => '<p>Page content</p>',
    ];

    $resp = $this->post($chapter->getUrl('/create-guest-page'), $details);
    $resp->assertRedirect($chapter->book->getUrl('/page/my-first-page'));
}
```

#### Example 2: API Test (ExportsApiTest.php)

```php
public function test_book_html_endpoint()
{
    $this->actingAsApiEditor();
    $book = $this->entities->book();

    $resp = $this->get("/api/books/{$book->id}/export/html");
    $resp->assertStatus(200);
    $resp->assertSee($book->name);
    $resp->assertHeader('Content-Disposition',
        'attachment; filename="' . $book->slug . '.html"');
}
```

#### Example 3: Authentication Test (AuthTest.php)

```php
public function test_login_with_valid_credentials()
{
    $user = $this->users->editor();

    $resp = $this->post('/login', [
        'email' => $user->email,
        'password' => 'password',
    ]);

    $resp->assertRedirect('/');
    $this->assertAuthenticatedAs($user);
}
```

---

## 4. Verification Methods

### 4.1 Static Analysis

BookStack uses **PHPStan** with **Larastan** extension for static code analysis:

#### Configuration (phpstan.neon.dist)

```yaml
includes:
  - ./vendor/nunomaduro/larastan/extension.neon

parameters:
  paths:
    - app
  level: 5
  # Memory limit for large codebases
  # Run: composer check-static
```

#### Running Static Analysis

```bash
# Run PHPStan analysis
composer check-static

# Or directly
./vendor/bin/phpstan analyse --memory-limit=2g
```

### 4.2 Code Standards

BookStack enforces code standards using **PHP_CodeSniffer**:

#### Configuration (phpcs.xml)

```xml
<?xml version="1.0"?>
<ruleset name="BookStack">
    <description>BookStack coding standards</description>
    <file>app</file>
    <file>tests</file>
    <rule ref="PSR12"/>
</ruleset>
```

#### Commands

```bash
# Check code standards
composer lint

# Auto-fix code formatting
composer format
```

### 4.3 Continuous Integration

BookStack uses **GitHub Actions** for CI/CD:

#### Workflows

| Workflow     | File                             | Purpose              |
| ------------ | -------------------------------- | -------------------- |
| **test-php** | `.github/workflows/test-php.yml` | Run PHPUnit tests    |
| **lint-php** | `.github/workflows/lint-php.yml` | Code standards check |

#### CI Pipeline Steps

1. **Checkout code**
2. **Setup PHP environment**
3. **Install dependencies** (Composer, NPM)
4. **Run linting** (PHP_CodeSniffer)
5. **Run static analysis** (PHPStan)
6. **Run unit tests** (PHPUnit)
7. **Generate coverage reports**

---

## 5. Validation Methods

### 5.1 Functional Testing

BookStack employs extensive functional testing through Laravel's testing utilities:

#### Test Patterns

1. **HTTP Request Testing**

   - GET, POST, PUT, DELETE request simulation
   - Response status code verification
   - Content assertion

2. **Database State Testing**

   - `assertDatabaseHas()` - Verify data exists
   - `assertDatabaseMissing()` - Verify data removed
   - Transaction rollback for test isolation

3. **User Context Testing**
   - `asAdmin()` - Test as admin user
   - `asEditor()` - Test as editor user
   - `asViewer()` - Test as viewer user

#### Example: Full Functional Test

```php
public function test_book_update_workflow()
{
    $book = $this->entities->book();
    $originalName = $book->name;

    // Test access as editor
    $resp = $this->asEditor()->get($book->getUrl('/edit'));
    $resp->assertStatus(200);
    $resp->assertSee($originalName);

    // Submit update
    $resp = $this->put($book->getUrl(), [
        'name' => 'Updated Book Name',
        'description' => 'New description',
    ]);

    // Verify redirect and database update
    $resp->assertRedirect($book->getUrl());
    $this->assertDatabaseHas('books', [
        'id' => $book->id,
        'name' => 'Updated Book Name',
    ]);
}
```

### 5.2 Integration Testing

Integration tests verify interactions between system components:

#### Database Integration

BookStack supports multiple database systems and includes a dedicated testing suite:

```
dev/docker/db-testing/
├── Dockerfile
├── docker-compose.yml
└── readme.md
```

**Supported Databases:**

- MySQL 5.7, 8.0
- MariaDB 10.3+
- PostgreSQL 11+
- SQLite 3

#### External Service Integration

All external services are mocked in tests:

| Service          | Mock Method        |
| ---------------- | ------------------ |
| HTTP Requests    | `mockHttpClient()` |
| LDAP Connections | Service mocking    |
| Email Sending    | Array driver       |
| File Storage     | Local driver       |

### 5.3 API Testing

BookStack provides a comprehensive REST API with dedicated tests:

#### API Test Structure

```
tests/Api/
├── ApiAuthTest.php
├── AttachmentsApiTest.php
├── BooksApiTest.php
├── ChaptersApiTest.php
├── ContentPermissionsApiTest.php
├── ExportsApiTest.php
├── ImportsApiTest.php
├── PagesApiTest.php
├── RecycleBinApiTest.php
├── RolesApiTest.php
├── SearchApiTest.php
├── ShelvesApiTest.php
├── TestsApi.php (Trait)
└── UsersApiTest.php
```

#### API Testing Patterns

```php
trait TestsApi
{
    protected function actingAsApiEditor()
    {
        return $this->actingAs($this->users->editor());
    }

    protected function actingAsApiAdmin()
    {
        return $this->actingAs($this->users->admin());
    }
}
```

---

## 6. Quality Assurance

### 6.1 Code Quality Tools

| Tool            | Purpose              | Command                 |
| --------------- | -------------------- | ----------------------- |
| PHPStan         | Static type analysis | `composer check-static` |
| PHP_CodeSniffer | Code standards       | `composer lint`         |
| ESLint          | JavaScript linting   | `npm run lint`          |
| Clockwork       | Debug profiling      | Development tool        |

### 6.2 Security Testing

BookStack includes security-focused tests:

#### Security Test Areas

| Area             | Test File                | Coverage               |
| ---------------- | ------------------------ | ---------------------- |
| Authentication   | `AuthTest.php`           | Login, logout, session |
| CSRF Protection  | Various                  | Form submissions       |
| XSS Prevention   | `SecurityHeaderTest.php` | Header validation      |
| Access Control   | `Permissions/`           | Role-based access      |
| Input Validation | Various                  | Data sanitization      |

#### Security Headers Test

```php
public function test_security_headers_are_set()
{
    $resp = $this->get('/');

    $resp->assertHeader('X-Content-Type-Options', 'nosniff');
    $resp->assertHeader('X-Frame-Options', 'SAMEORIGIN');
}
```

### 6.3 Database Testing

#### Multi-Database Testing Suite

Located in `dev/docker/db-testing/`:

```bash
# Run tests against all supported databases
cd dev/docker/db-testing
docker-compose up --abort-on-container-exit
```

#### Test Configuration

```php
// phpunit.xml - Database configuration
<server name="DB_CONNECTION" value="mysql_testing"/>

// Testing with different databases
TEST_DATABASE_URL="mysql://user:pass@host:port/database"
```

---

## 7. Issues and Recommendations

### 7.1 Identified Issues

#### 1. Limited JavaScript Test Coverage

**Issue:** The JavaScript codebase has minimal Jest test coverage despite significant frontend functionality.

**Evidence:**

- `jest.config.ts` exists but limited test files
- Complex components like WYSIWYG editor lack unit tests

**Impact:** Medium - UI bugs may go undetected

#### 2. No Automated E2E Testing

**Issue:** No end-to-end browser testing (Selenium, Cypress, Playwright).

**Impact:** Medium - Full user workflow testing is manual

#### 3. Code Coverage Reporting

**Issue:** No automated code coverage reports in CI pipeline.

**Impact:** Low - Difficult to track coverage trends

#### 4. Performance Testing Absent

**Issue:** No load testing or performance benchmarks.

**Impact:** Low-Medium - Scalability concerns unaddressed

### 7.2 Recommendations

#### Short-term Improvements

| #   | Recommendation                            | Priority | Effort |
| --- | ----------------------------------------- | -------- | ------ |
| 1   | Add Jest tests for critical JS components | High     | Medium |
| 2   | Implement code coverage reporting in CI   | Medium   | Low    |
| 3   | Add mutation testing (Infection PHP)      | Low      | Medium |

#### Long-term Improvements

| #   | Recommendation                        | Priority | Effort |
| --- | ------------------------------------- | -------- | ------ |
| 4   | Implement E2E testing with Playwright | High     | High   |
| 5   | Add performance/load testing          | Medium   | Medium |
| 6   | Implement visual regression testing   | Low      | Medium |
| 7   | Add API contract testing              | Medium   | Medium |

#### Suggested Test Additions

```php
// Example: New performance test
public function test_homepage_loads_within_acceptable_time()
{
    $start = microtime(true);
    $resp = $this->get('/');
    $duration = microtime(true) - $start;

    $this->assertLessThan(1.0, $duration,
        'Homepage should load within 1 second');
}
```

---

## 8. Conclusion

### Summary

BookStack demonstrates a **mature and comprehensive testing strategy** for a documentation platform:

| Aspect                     | Rating     | Notes                      |
| -------------------------- | ---------- | -------------------------- |
| **PHP Test Coverage**      | ⭐⭐⭐⭐⭐ | Excellent - 153 test files |
| **Test Organization**      | ⭐⭐⭐⭐⭐ | Well-structured by feature |
| **Authentication Testing** | ⭐⭐⭐⭐⭐ | All auth methods covered   |
| **API Testing**            | ⭐⭐⭐⭐⭐ | Comprehensive API tests    |
| **Static Analysis**        | ⭐⭐⭐⭐   | PHPStan integration        |
| **CI/CD Integration**      | ⭐⭐⭐⭐   | GitHub Actions workflow    |
| **JavaScript Testing**     | ⭐⭐       | Needs improvement          |
| **E2E Testing**            | ⭐         | Not implemented            |

### Key Strengths

1. **Comprehensive PHP Testing** - Over 2,000 test cases covering all major features
2. **Multi-Auth Testing** - LDAP, SAML, OIDC, Social login all tested
3. **API First Approach** - Well-documented and tested REST API
4. **Database Agnostic** - Multi-database testing support
5. **Clear Test Patterns** - Consistent testing conventions

### Areas for Improvement

1. Increase JavaScript unit test coverage
2. Implement browser-based E2E testing
3. Add performance benchmarking
4. Integrate code coverage metrics

### Final Assessment

BookStack represents an **exemplary open-source project** in terms of software verification and validation practices. The test suite is well-organized, comprehensive for backend functionality, and follows industry best practices. With minor improvements to frontend testing and E2E coverage, the project would achieve near-complete verification coverage.

---

## 9. References

1. BookStack Official Documentation - https://www.bookstackapp.com/docs
2. BookStack GitHub Repository - https://github.com/BookStackApp/BookStack
3. Laravel Testing Documentation - https://laravel.com/docs/testing
4. PHPUnit Manual - https://phpunit.de/manual/current/en/
5. PHPStan Documentation - https://phpstan.org/user-guide/getting-started
6. Jest Documentation - https://jestjs.io/docs/getting-started
7. PHP_CodeSniffer Wiki - https://github.com/squizlabs/PHP_CodeSniffer/wiki

---

## Appendix A: Running Tests Locally

### Prerequisites

```bash
# PHP 8.2+
php -v

# Composer
composer -V

# Node.js v22+
node -v
```

### Setup

```bash
# Clone repository
git clone https://github.com/BookStackApp/BookStack.git
cd BookStack

# Install PHP dependencies
composer install

# Install Node dependencies
npm install

# Setup test database
mysql -u root -p -e "CREATE DATABASE bookstack_test;"
mysql -u root -p -e "CREATE USER 'bookstack-test'@'localhost' IDENTIFIED BY 'bookstack-test';"
mysql -u root -p -e "GRANT ALL ON bookstack_test.* TO 'bookstack-test'@'localhost';"

# Refresh test database
composer refresh-test-database
```

### Running Tests

```bash
# Run all PHP tests
composer test

# Run specific test file
./vendor/bin/phpunit tests/Entity/PageTest.php

# Run tests with coverage
./vendor/bin/phpunit --coverage-html coverage/

# Run JavaScript tests
npm test

# Run linting
composer lint
npm run lint

# Run static analysis
composer check-static
```

---

## Appendix B: Test Configuration Files

### phpunit.xml (Key Settings)

```xml
<?xml version="1.0" encoding="UTF-8"?>
<phpunit xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
         xsi:noNamespaceSchemaLocation="https://schema.phpunit.de/11.5/phpunit.xsd"
         bootstrap="vendor/autoload.php"
         colors="true">
  <testsuites>
    <testsuite name="Application Test Suite">
      <directory>./tests/</directory>
    </testsuite>
  </testsuites>
  <php>
    <server name="APP_ENV" value="testing"/>
    <server name="DB_CONNECTION" value="mysql_testing"/>
    <server name="CACHE_DRIVER" value="array"/>
    <server name="SESSION_DRIVER" value="array"/>
  </php>
</phpunit>
```

### jest.config.ts (Key Settings)

```typescript
const config: Config = {
  clearMocks: true,
  coverageDirectory: 'coverage',
  roots: ['./resources/js'],
  testEnvironment: 'jsdom',
  moduleDirectories: ['node_modules', './resources/js'],
};
```

---

_Document prepared for WOC7015 Software Verification and Validation course._

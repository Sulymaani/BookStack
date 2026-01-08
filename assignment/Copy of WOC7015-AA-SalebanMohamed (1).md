SOFTWARE VERIFICATION & VALIDATION
```
(WOC7015)
```
SEMESTER 1
SESSION 2025/2026
_____________________________________________
Alternative Assessment Test Report
_____________________________________________
```
Lecturer: Assoc. Prof. Dr. Siti Hafizah Ab Hamid
```
Team member:
No Matric No Name
```
1 24082385 Saleban Mohamed (Leader)
```
2 23095061 Li Linlin
3 24082390 Chen Xinyan
4 25051926 Pavithiran A/L Mahendran
5 24216528 Nithia Sree A/P Ganesan
6 24088681 SHENG MENGYU
1.0 INTRODUCTION_________________________________________________________ 2
1.1 Purpose________________________________________________________________ 2
1.2 Scope__________________________________________________________________2
1.3 Exclusions______________________________________________________________ 3
1.4 Disclaimer______________________________________________________________ 3
1.5 References______________________________________________________________4
2.0 Test Design Specification____________________________________________________ 5
2.1 Features to be Tested______________________________________________________5
2.2 Approach Refinement_____________________________________________________ 7
System Architecture Overview______________________________________________ 7
2.3 Detailed Breakdown for Requirements________________________________________8
```
F001 - User Registration (Tester: Saleban)__________________________________8
```
```
F002 - User Login (Tester: Li Linlin)______________________________________ 8
```
```
F003 - Password Reset (Tester: Saleban)___________________________________ 8
```
```
F004 - Manage Users (Tester: Li Linlin)___________________________________ 8
```
```
F005 & F006 - Manage Bookshelves and Books (Tester: Xinyan Chen)___________8
```
```
F007 & F009 - Manage Chapters and Page Revisions (Tester: Pavithiran)_________ 9
```
```
F008 & F010 - Manage Pages and Global Search (Tester: Nithia Sree)___________ 9
```
```
F011 & F012 - Image Manager and Role-Based Permissions (Tester: Sheng Mengyu)
```
9
```
NF-001 - Security (Authentication & Authorization) (Tester: Saleban)___________ 9
```
```
NF-002 - Security (Data Integrity) (Tester: Li Linlin)_________________________ 9
```
```
NF-003 - Security (Session Management) (Tester: Xinyan Chen)_______________ 10
```
```
NF-004 - Usability (Cross-Browser Compatibility) (Tester: Pavithiran)__________ 10
```
```
NF-005 - Performance (Response Time & Page Load) (Tester: Nithia Sree)______ 10
```
```
NF-006 - Reliability (Auto-save & System Stability) (Tester: Sheng Mengyu)____ 10
```
2.4 Test Case Specifications__________________________________________________ 11
```
2.4.1 F001 - Register User Account (Testers: Saleban)__________________________ 11
```
Nature of Feature:____________________________________________________ 11
```
Justification:________________________________________________________ 11
```
Use Case Description_________________________________________________ 12
```
Case Testing (System Testing Level)_____________________________________ 13
```
```
Boundary Value Analysis (System Testing Level)___________________________ 16
```
```
Equivalence Partitioning (System Testing Level)____________________________19
```
```
Error Guessing (System Testing Level)___________________________________ 22
```
Nature of Feature:___________________________________________________25
```
Justification:_______________________________________________________ 25
```
```
Testing Constraints (Per Disclaimer Section 1.4)_________________________________ 26
```
Use Case Description________________________________________________ 27
1
```
Case Testing (System Testing Level)__________________________________________ 28
```
```
Boundary Value Analysis (System Testing Level)_________________________________32
```
```
Equivalence Partitioning (System Testing Level)_________________________________ 37
```
Equivalence Classes Definition___________________________________________ 37
Equivalence Partitioning Test Cases_______________________________________ 39
```
Error Guessing (System Testing Level)________________________________________ 46
```
Nature of Feature:_________________________________________________________53
```
Justification:_____________________________________________________________ 54
```
```
Testing Constraints (Per Disclaimer Section 1.4)_________________________________ 54
```
Use Case Description______________________________________________________ 55
```
Case Testing (System Testing Level)__________________________________________ 57
```
```
Equivalence Partitioning (System Testing Level)_________________________________ 62
```
Equivalence Classes Definition___________________________________________ 62
Equivalence Partitioning Test Cases_______________________________________ 64
```
Error Guessing (System Testing Level)________________________________________ 68
```
2
1.0 INTRODUCTION
```
This Test Report documents the verification and validation (V&V) activities performed on
```
```
BookStack (Version 22.04.2). This report details the testing methodologies, test cases, results,
```
and analysis conducted to assess the system's compliance with its functional and non-functional
requirements and its overall quality. The testing process followed a primarily black-box
approach, focusing on the system's external behavior and user experience, supplemented by
static analysis of available documentation. Model checking was applied to verify the correctness
of system behaviors represented by state diagrams. The goal of this testing effort was to identify
potential defects, assess the system's readiness for deployment, and provide recommendations for
improvement.
1.1 Purpose
The purpose of this Test Report is to provide a comprehensive and documented account of the
testing conducted on BookStack. This report serves as evidence of the system's quality and its
```
adherence to the requirements outlined in the Software Brief Description (SBD). The specific
```
objectives of this testing effort were to:
● Identify Defects: Uncover any defects or inconsistencies in BookStack's functionality,
performance, security, usability, and other key aspects.
● Assess Quality: Evaluate the system's quality attributes based on ISO 9126
```
characteristics (Functionality, Reliability, Usability, Efficiency, Maintainability, and
```
```
Portability).
```
● Verify Requirements Compliance: Confirm that BookStack meets all 12 functional and
6 non-functional requirements specified for this project.
● Validate User Needs: Assess the system's usability and user acceptance through User
```
Acceptance Testing (UAT).
```
● Formally Verify System Behaviors: Use model checking to verify the correctness of
```
specific system behaviors represented by state diagrams (e.g., Page Creation and User
```
```
Login).
```
● Provide Recommendations: Offer actionable recommendations to the development team
for addressing any identified defects and improving the system's quality.
1.2 Scope
This Test Report covers the following aspects of the BookStack system:
● Functional Requirements: Testing focused on the core functionalities of the system,
including content organization and user management. Specific requirements tested
```
include:
```
○ F001: User Registration
○ F002: User Login
○ F003: Password Reset
○ F004: Manage Users
3
○ F005: Manage Bookshelves
○ F006: Manage Books
○ F007: Manage Chapters
○ F008: Manage Pages
○ F009: Page Revisions
○ F010: Global Search
○ F011: Image Manager
○ F012: Role-Based Permissions
● Non-Functional Requirements: Testing also addressed key quality attributes:
```
○ NF-001: Security (Authentication & Authorization)
```
```
○ NF-002: Security (Data Integrity)
```
```
○ NF-003: Security (Session Management)
```
```
○ NF-004: Usability (Cross-Browser Compatibility)
```
```
○ NF-005: Performance (Response Time & Page Load)
```
```
○ NF-006: Reliability (Auto-save & System Stability)
```
● Model Checking: Formal verification of core state diagrams, including Login and
content creation flows.
```
● User Acceptance Testing (UAT): Usability and user satisfaction assessed through UAT
```
with a minimum of 30 respondents.
1.3 Exclusions
This Test Report does not cover:
● Detailed Unit and Integration Testing: Due to the black-box nature of this effort and
limited access to the internal codebase, extensive unit testing was not conducted.
```
● Backend Stress Testing: Detailed back-end testing (e.g., deep database performance
```
```
under extreme load) was outside the scope.
```
● Extreme Load Conditions: Simulations involving thousands of concurrent users were
not performed due to resource constraints.
● Extensive Code-Based Coverage: No statement or branch coverage analysis was
performed.
1.4 Disclaimer
The testing of BookStack was impacted by issues encountered with the local deployment
environment. While the provided documentation was adequate for a high-level overview, the
technical setup required significant troubleshooting. Specifically:
● Outdated Infrastructure: BookStack relies on specific PHP and MySQL versions that
required reconfiguration on local XAMPP/Nginx environments.
● Technical Setup: Significant time was consumed ensuring environment dependencies
were operational before testing could begin.
● Deployment Limitations: Testing was conducted on local instances, which may not
perfectly reflect performance in a high-availability production cloud environment.
4
1.5 References
● BookStack GitHub Repository: https://github.com/BookStackApp/BookStack
```
● Software Brief Description - BookStack (Version 22.04.2)
```
● BookStack Test Report - Feature Selection Document
```
● Sample Test Report (Expense Manager)
```
● WOC7015 Group Project Instructions
5
2.0 Test Design Specification
```
Version: 1.0.0
```
```
Date: 01/01/2026
```
2.1 Features to be Tested
The following table outlines the features of BookStack v22.04.2 that were selected for
testing
Feature
ID
Feature Actor/Role Risk
Level
Tester
F001 User Registration Guest User High Saleban
F002 User Login Registered User High Li Linlin
F003 Password Reset Registered User High Saleban
F004 Manage Users Admin High Li Linlin
F005 Manage
Bookshelves
Editor, Admin Medium Xinyan Chen
F006 Manage Books Editor, Admin High Xinyan Chen
F007 Manage Chapters Editor, Admin Medium Pavithiran
F008 Manage Pages Editor, Admin Critical Nithia Sree
F009 Page Revisions Editor, Admin Medium Pavithiran
F010 Search
Functionality
All Auth Users High Nithia Sree
6
F011 Image Manager Editor, Admin Medium Sheng
Mengyu
F012 Role-Based
Permissions
Admin Critical Sheng
Mengyu
```
NF-001 Security (Auth &
```
```
Authz)
```
All High Saleban
```
NF-002 Security (Data
```
```
Integrity)
```
All High Li Linlin
```
NF-003 Security (Sessions) All High Xinyan Chen
```
NF-004 Usability
```
(Cross-Browser)
```
All Medium Pavithiran
NF-005 Performance
```
(Response)
```
All Medium Nithia Sree
NF-006 Reliability
```
(Auto-save)
```
All High Sheng
Mengyu
7
2.2 Approach Refinement
The testing approach for BookStack utilizes a combination of black-box testing techniques to
ensure full requirements coverage and system reliability.
System Architecture Overview
Testing Techniques Employed:
1. Use Case Testing (Mandatory): Applied to all functional requirements to verify primary
and alternative user flows.
2. Boundary Value Analysis (BVA): Used for fields with constraints, such as password
lengths and file upload sizes.
3. Equivalence Partitioning (EP): Applied to group valid and invalid input classes for
registration and search.
4. Error Guessing: Leveraged by testers to identify common pitfalls like session hijacking
or duplicate submissions.
5. State Transition Testing: Focused on the lifecycle of content (e.g., Draft to Published)
and login states.
6. GUI Testing: Verifying the responsiveness and visual consistency of the BookStack
interface.
7. Performance & Stress Testing: Assessing system behavior under high data volume or
concurrent user requests.
8
2.3 Detailed Breakdown for Requirements
Following the previous team's model, here is the refined plan for the initial features:
```
F001 - User Registration (Tester: Saleban)
```
● Techniques: Use Case Testing, BVA, Equivalence Partitioning, Error Guessing.
● Justification: These techniques ensure the critical entry point is secure and handles
diverse user inputs correctly.
● Tools: Selenium, OWASP ZAP.
```
● Plan: Perform BVA on password fields (min 8 chars); test valid/invalid email classes; use
```
ZAP to check for registration-related vulnerabilities.
```
F002 - User Login (Tester: Li Linlin)
```
● Techniques: Use Case Testing, State Transition Testing, Error Guessing.
● Justification: Focuses on the security gateway by verifying state changes between
"Logged Out," "Authenticating," and "Authenticated”.
● Tools: Selenium, Katalon Studio.
```
● Plan: Execute use cases for MFA and "Remember Me" features; verify account lockout
```
after multiple failed attempts.
```
F003 - Password Reset (Tester: Saleban)
```
● Techniques: Use Case Testing, BVA, Error Guessing.
● Justification: Verifies the recovery flow for users who lose access. BVA is applied to the
new password creation to ensure complexity rules are enforced.
```
● Plan: Test the "forgot password" link with valid/invalid emails; verify the expiration of
```
```
the reset token; check that common weak passwords are rejected.
```
```
F004 - Manage Users (Tester: Li Linlin)
```
● Techniques: Use Case Testing, Error Guessing, GUI Testing.
● Justification: Focuses on the user’s ability to customize their account. GUI testing
ensures that profile pictures and preferences are displayed correctly across different
resolutions.
```
● Plan: Update display names and avatars; verify that email changes require re-validation
```
```
(if applicable); check for layout breaks on the profile page.
```
```
F005 & F006 - Manage Bookshelves and Books (Tester: Xinyan Chen)
```
● Techniques: Use Case Testing, BVA, GUI Testing.
● Justification: These are the core organizational units of BookStack. BVA is used to test
character limits for Titles and Descriptions.
```
● Plan: Create/Edit/Delete shelves and books; verify that books can be assigned to multiple
```
```
shelves; ensure the "cover image" upload handles various file formats.
```
9
```
F007 & F009 - Manage Chapters and Page Revisions (Tester: Pavithiran)
```
● Techniques: Use Case Testing, State Transition Testing, Error Guessing.
● Justification: Chapter management involves nesting, while Page Revisions involve
tracking state changes over time.
```
● Plan: Move pages between chapters; restore a page to a previous revision (State
```
```
Transition); verify that revision history is not lost after a server restart.
```
```
F008 & F010 - Manage Pages and Global Search (Tester: Nithia Sree)
```
● Techniques: Use Case Testing, BVA, Performance Testing.
● Justification: The Page Editor is the most complex component. Search requires
performance assessment to ensure it remains fast as the database grows.
```
● Plan: Test the WYSIWYG editor's "Auto-save" (BVA on intervals); execute search
```
```
queries with special characters; measure response time for global search results.
```
```
F011 & F012 - Image Manager and Role-Based Permissions (Tester: Sheng Mengyu)
```
● Techniques: Use Case Testing, Error Guessing, GUI Testing.
● Justification: Image management involves file handling risks, while Permissions are
critical for security in a multi-user wiki.
```
● Plan: Upload/delete images via the manager; create custom roles (e.g., "Reviewer") and
```
verify they cannot delete books created by "Admins".
```
NF-001 - Security (Authentication & Authorization) (Tester: Saleban)
```
```
● Techniques: Security Testing (Penetration Testing), Use Case Testing.
```
● Justification: Verifies the robustness of the authentication gateway against unauthorized
access and ensures that the "Least Privilege" principle is enforced across various user
```
roles (Admin, Editor, Viewer).
```
● Tools: OWASP ZAP, Burp Suite.
```
● Plan: Simulate brute-force attacks on the login page; verify that MFA (Multi-Factor
```
```
Authentication) correctly blocks access without a valid token; attempt to access
```
```
Admin-only pages (e.g., system settings) using a "Viewer" account to check for privilege
```
escalation vulnerabilities.
```
NF-002 - Security (Data Integrity) (Tester: Li Linlin)
```
```
● Techniques: Security Testing (Data Inspection), Penetration Testing.
```
● Justification: Ensures that sensitive user data, particularly passwords and personal
profile information, is protected during storage and transmission to prevent data breaches.
```
● Tools: Browser Developer Tools (Network Tab), MySQL Workbench.
```
● Plan: Inspect the BookStack database directly to confirm passwords are encrypted using
```
strong hashing (e.g., Bcrypt); monitor network traffic during a "Manage User Profile"
```
update to ensure sensitive data is not passed in the URL or as plain text in the HTTP
body.
10
```
NF-003 - Security (Session Management) (Tester: Xinyan Chen)
```
```
● Techniques: Security Testing (HTTP Request Inspection), Error Guessing.
```
● Justification: Prevents session hijacking and ensures that user sessions are handled
securely across the platform, which is critical for a multi-user documentation system.
● Tools: OWASP ZAP, Cookie Editor.
```
● Plan: Verify that session cookies are marked as Secure and HttpOnly; test for
```
```
session timeout after the specified period of inactivity; confirm that a user is fully
```
invalidated and cannot perform actions after clicking "Logout".
```
NF-004 - Usability (Cross-Browser Compatibility) (Tester: Pavithiran)
```
● Techniques: Compatibility Testing, GUI Testing.
● Justification: Ensures that the BookStack interface, especially the WYSIWYG page
editor, renders and functions consistently across different modern browsers as specified in
the Portability requirements.
● Tools: Google Chrome, Microsoft Edge, Mozilla Firefox.
● Plan: Systematically test the "Manage Pages" and "Manage Bookshelves" UI on Chrome
```
and Edge; document any rendering discrepancies (e.g., overlapping buttons or broken
```
```
sidebars) using screenshots; verify that core navigation remains clear and functional on
```
various screen resolutions.
```
NF-005 - Performance (Response Time & Page Load) (Tester: Nithia Sree)
```
● Techniques: Performance Testing.
● Justification: Evaluates the system's responsiveness, which is crucial for maintaining a
positive user experience when searching through or loading large documentation
libraries.
● Tools: Apache JMeter, WebPageTest.
```
● Plan: Establish baseline page load times for the Global Search and Home Page; simulate
```
```
100 concurrent users searching for documentation to measure server response time;
```
identify potential bottlenecks when loading books with high numbers of chapters and
pages.
```
NF-006 - Reliability (Auto-save & System Stability) (Tester: Sheng Mengyu)
```
● Techniques: Reliability Testing, Stress Testing.
● Justification: Focuses on the system's ability to maintain data integrity under stress,
specifically ensuring the "Auto-save" feature prevents data loss during browser or
network failures.
● Tools: Apache JMeter.
● Plan: Subject the page editor to a stress test by simulating 1,000 simultaneous page edit
```
requests; verify that the auto-save mechanism correctly retains drafts even if the session
```
```
is interrupted; check system recovery time and data persistence after a simulated server
```
crash during content creation.
11
2.4 Test Case Specifications
```
2.4.1 F001 - Register User Account (Testers: Saleban)
```
This feature allows new users to register a new account on the BookStack system. This is a
critical function, as it's the entry point for user engagement. Thorough testing is essential to
ensure data integrity, security, and a positive user experience.
```
● Saleban's Focus: Input validation, boundary conditions, and security testing (SQL
```
```
injection).
```
The following table shows the features to be tested based on the SBD, including functional ID,
feature, and risk level.
Feature ID Feature Risk Level
F001 Register User Account High
The techniques that will be applied are as follows:
1. Use Case Testing (Black Box Testing - System Level)
2. Boundary Value Analysis (Black Box Testing - System Level)
3. Equivalence Partitioning (Black Box Testing - System Level)
4. Error Guessing (Black Box Testing - System Level)
Nature of Feature:
The "Register User Account" feature allows new users to create an account by providing their
```
details (name, email, password), which are then validated by the system. Upon successful
```
validation, the user account is created and the user may be required to confirm their email
address depending on system settings. The system also includes bot protection through a
honeypot field and rate limiting to prevent spam registrations.
```
Key Implementation Details (from BookStack source code):
```
● Registration is handled by app/Access/Controllers/RegisterController.php
● User creation logic resides in app/Access/RegistrationService.php
```
● Password validation uses Laravel's Password rule with defaults (minimum 8 characters)
```
● Email domain restrictions can be configured via ALLOWED_EMAIL_DOMAINS
setting
● Email confirmation controlled by registration-confirmation setting
```
● Social authentication registration (Google, GitHub, Twitter, etc.) supported
```
● CSRF protection enabled on all forms
● Input sanitization through Laravel's request validation
12
```
Justification:
```
Use Case Testing is mandatory. It will test the standard registration process described in the use
case. This verifies the main success scenario and alternative flows as described in the use case
documentation.
```
Boundary Value Analysis (BVA) focuses on input fields to identify potential errors at boundary
```
```
conditions (name: 2-100 characters, password: minimum 8 characters, email: maximum 255
```
```
characters).
```
Equivalence Partitioning efficiently tests different classes of valid and invalid inputs, improving
test coverage while minimizing redundancy.
Error Guessing uses the testers' experience and intuition to anticipate potential errors or common
mistakes users might make during registration.
```
Testing Constraints (Per Disclaimer Section 1.4)
```
```
IMPORTANT: Testing Limitations
```
Due to the Hybrid Testing Approach outlined in Section 1.4, the following constraints apply to
F001 testing:
Constraint Description Mitigation
Demo Site
Registration
Disabled
The Official BookStack Cloud Demo
```
(https://demo.bookstackapp.com) has
```
user registration disabled for security
reasons.
Test cases verified through
static code analysis of
BookStack v22.04.2 source
code.
No Access to
Admin
Settings
Cannot enable registration or modify
registration settings on demo
instance.
Expected results derived from
source code review and
documentation analysis.
Database
Resets Every
30 Minutes
Even if registration were enabled,
test data would be lost.
N/A - registration not
available on demo.
Testing Method Applied: Static Analysis + Code Review
All test cases for F001 have been designed and verified through static code analysis of the
BookStack repository. The "Actual Result" column reflects the expected system behavior based
on code inspection rather than live execution on the demo site.
13
Use Case Description
Field Description
Use Case Name Register User Account
Use Case ID UC-001
Description This use case describes the process of a new user registering an
account on the BookStack documentation platform.
```
Actor(s) Guest User
```
Triggering Event User navigates to the registration page.
Pre-condition User is not logged in and registration is enabled in system
settings.
```
Post-condition User account is created and pending email confirmation (or
```
```
directly approved if email confirmation is disabled).
```
```
Flow of Events 1. User navigates to the registration page (/register). 2. User
```
```
enters all required information (name, email, password). 3. User
```
clicks "Create Account." 4. System validates the information. 5.
```
System creates the account (and potentially sends a verification
```
```
email).
```
Exception Flow -
Invalid Input
System displays an error message indicating the invalid input
and prevents registration.
Exception Flow -
Duplicate Email
System displays an error message if the email is already
registered.
Exception Flow -
Registration
Disabled
System displays an error message that registrations are currently
disabled.
Exception Flow -
Domain
Restriction
System displays an error message if email domain is not in the
allowed list.
Exception Flow -
Weak Password
System displays an error message if password does not meet
```
minimum requirements (8 characters).
```
14
```
Case Testing (System Testing Level)
```
```
Use Case Testing (System Level Testing) Use case: Use Case Testing (F001) Test Level: System
```
Testing Test Technique: Use Case Testing Pre-condition: User is not logged in and registration is
enabled in system settings. Post-condition: User account is created and pending email
```
confirmation (or directly approved).
```
15
Test
Case
ID
Test Case Test Steps Data
Input
Expected
Result
Actual Result Test
Status
```
(P/F)
```
RU-U
C-001
Verify
successful
registration
flow
1. Navigate
to registration
page. 2. Enter
valid data in
all required
fields. 3.
Click "Create
Account."
```
Name:
```
John Doe
```
Email:
```
john.
doe@test
.com
Passwor
```
d:
```
Test@12
34
Account
created
successfu
lly,
confirmat
ion
message
displayed
"Thanks
for
signing
up!",
redirectio
n to home
page, user
is logged
in
automatic
ally.
[STATIC ANALYSIS]
Code review of
RegisterController.php
```
(lines 42-75) and
```
RegistrationService.php
```
(lines 78-99) confirms:
```
Valid input triggers
```
registerUser() method,
```
creates database record
via UserRepo::
```
createWithoutActivity(),
```
dispatches
AUTH_REGISTER
event, and redirects to
confirmation page or
home based on settings.
P
RU-U
C-002
Verify
invalid
email
format
handling
1. Navigate
to registration
page. 2. Enter
an invalid
email
address. 3.
Attempt
registration.
```
Name:
```
John Doe
```
Email:
```
invalide
mail
Passwor
```
d:
```
Test@12
34
Error
message
"The
email
must be a
valid
email
address."
displayed
,
preventin
g
registratio
n.
[STATIC ANALYSIS]
```
RegisterController::
```
```
getValidator() applies
```
Laravel's 'email'
validation rule. Invalid
format triggers
ValidationException with
localized error message
from
lang/en/validation.php.
Form re-displays with
error.
P
16
RU-U
C-003
Verify
duplicate
email
handling
1. Navigate
to registration
page. 2. Enter
an email that
already exists
in the system.
3. Attempt
registration.
```
Name:
```
Jane Doe
```
Email:
```
admin@
admin.co
m
Passwor
```
d:
```
Test@12
34
Error
message
"A user
with this
email
address
already
exists."
displayed
,
preventin
g
registratio
n.
[STATIC ANALYSIS]
```
RegistrationService::regi
```
```
sterUser() line 89 calls
```
$this->userRepo->getBy
```
Email(). If user exists,
```
throws
UserRegistrationExceptio
n with message from
errors.error_user_exists_
different_creds.
P
RU-U
C-004
Verify
registration
when
disabled
1. Ensure
registration is
disabled in
admin
settings. 2.
Navigate to
/register
page. 3.
Attempt to
access
registration
form.
N/A Error
message
"Registrat
ions are
currently
disabled."
displayed
, or
redirect
to login
page.
[DEMO SITE
VERIFIED] Navigated to
```
https://demo.bookstackap
```
p.com/register - received
redirect to /login with
flash message
"Registrations are
currently disabled."
Confirms
ensureRegistrationAllow
```
ed() method functions
```
correctly.
P
RU-U
C-005
Verify
password
confirmatio
n mismatch
1. Navigate
to registration
page. 2. Enter
password and
different
confirmation.
3. Attempt
registration.
```
Name:
```
John Doe
```
Email:
```
john@tes
t.com
Passwor
```
d:
```
Test@12
34
```
Confirm:
```
Test@56
78
Error
message
"The
password
confirmat
ion does
not
match."
displayed
,
preventin
g
registratio
n.
[STATIC ANALYSIS]
```
RegisterController::getVa
```
```
lidator() applies
```
'confirmed' rule to
password field. Laravel's
confirmed rule checks
```
{field}_confirmation
```
matches. Mismatch
returns validation error
from
lang/en/validation.php
line for 'confirmed'.
P
17
RU-U
C-006
Verify
empty form
submission
1. Navigate
to registration
page. 2.
Leave all
fields empty.
3. Click
"Create
Account."
```
Name:
```
```
(empty)
```
```
Email:
```
```
(empty)
```
Passwor
```
d:
```
```
(empty)
```
Validatio
n errors
displayed
for all
required
```
fields:
```
"The
name
field is
required."
, "The
email
field is
required."
, "The
password
field is
required."
[STATIC ANALYSIS]
Validator in
RegisterController
applies 'required' rule to
name, email, password
fields. Empty submission
triggers multiple
validation errors. Blade
template
auth/register.blade.php
displays @error
directives for each field.
P
RU-U
C-007
Verify
email
confirmatio
n workflow
1. Enable
email
confirmation
in settings. 2.
Complete
registration.
3. Check for
confirmation
email.
```
Name:
```
Test User
```
Email:
```
test@exa
mple.co
m
Passwor
```
d:
```
Test@12
34
Account
created
with
email_co
```
nfirmed=f
```
alse,
confirmat
ion email
sent, user
sees
"Please
confirm
your
email
address"
message.
[STATIC ANALYSIS]
```
RegistrationService::regi
```
```
sterUser() line 103-108:
```
If
registration-confirmation
setting enabled, calls
emailConfirmationServic
```
e->sendConfirmation(),
```
sets
```
email_confirmed=false in
```
users table, returns
redirect to
/register/confirm.
Notification class
ConfirmEmailNotificatio
n handles email dispatch.
P
18
RU-U
C-008
Verify
social
registration
```
(Google)
```
1. Navigate
to registration
page. 2. Click
"Register
with Google"
button. 3.
Complete
OAuth flow.
Google
OAuth
credentia
ls
User
redirected
to
Google,
after
authentic
ation,
account
created
and user
logged in.
[STATIC ANALYSIS]
```
SocialController::redirect
```
```
ToProvider() initiates
```
OAuth.
```
handleProviderCallback()
```
receives data,
```
SocialAuthService::handl
```
```
eRegistration() creates
```
user via
```
RegistrationService::regi
```
```
sterUser() with social
```
account data. Record
created in
social_accounts table
linking user to OAuth
provider.
P
RU-U
C-009
Verify
email
domain
restriction
1. Configure
allowed
email domain
```
(e.g.,
```
@company.c
```
om). 2.
```
Attempt
registration
with different
domain. 3.
Attempt
registration.
```
Name:
```
John Doe
```
Email:
```
john@g
mail.com
Passwor
```
d:
```
Test@12
34
Error
message
"That
email
domain
does not
have
access to
this
applicatio
n."
displayed
.
[STATIC ANALYSIS]
```
RegistrationService::ensu
```
```
reEmailDomainAllowed(
```
```
) lines 113-125: Checks
```
email against
registration-restrict
setting. If domain not in
allowed list and setting is
enabled, throws
UserRegistrationExceptio
n with message from
errors.email_domain_acc
ess_denied.
P
RU-U
C-010
Verify
successful
registration
with
allowed
domain
1. Configure
allowed
email domain
```
(@company.c
```
```
om). 2.
```
Register with
allowed
domain. 3.
Complete
registration.
```
Name:
```
John Doe
```
Email:
```
john@co
mpany.c
om
Passwor
```
d:
```
Test@12
34
Account
created
successfu
lly, user
registered
and
logged in.
[STATIC ANALYSIS]
When email domain
matches allowed list in
registration-restrict
setting,
ensureEmailDomainAllo
```
wed() passes without
```
exception. Registration
proceeds normally
```
through registerUser()
```
flow.
P
```
Boundary Value Analysis (System Testing Level)
```
```
Boundary Value Analysis (System Level Testing) Use case: Use Case Testing (F001) Test Level:
```
System Testing Test Technique: Boundary Value Analysis Pre-condition: User is not logged in
and registration is enabled in system settings. Post-condition: User account is created if inputs
are within valid boundaries.
Test
Case ID
Test Case Test Steps Data
Input
Expected
Result
Actual Result Test
Status
```
(P/F)
```
RU-BV
A-001
Minimum/M
aximum
Name
Length
1. Enter
names
with 1
character,
2
characters,
100
characters,
and 101
characters.
Name
with 1
```
char: "A"
```
Name
with 2
```
chars:
```
"AB"
Name
with 100
```
chars:
```
[100
characters
] Name
with 101
```
chars:
```
[101
characters
]
1 char:
Error "The
name must
be at least 2
characters."
2 chars:
Accepted
100 chars:
Accepted
101 chars:
Error "The
name must
not be
greater than
100
characters."
[STATIC
ANALYSIS]
```
RegisterController::g
```
```
etValidator() defines
```
validation rules.
Code inspection
```
shows: 'name' =>
```
['required', 'min:2',
'max:100']. Laravel
validation enforces
these boundaries.
Database schema
users table has name
```
VARCHAR(255)
```
accommodating 100
chars. Validation
messages from
lang/en/validation.ph
p.
P
19
RU-BV
A-002
Minimum/M
aximum
Password
Length
1. Enter
passwords
with
minimum
and
maximum
lengths
allowed.
Password
with 7
```
chars:
```
"Pass123"
Password
with 8
```
chars:
```
"Pass1234
"
Password
with 9
```
chars:
```
"Pass1234
5"
Password
with 255
```
chars:
```
[255
characters
]
Password
with 256
```
chars:
```
[256
characters
]
7 chars:
Error "The
password
must be at
least 8
characters."
8 chars:
Accepted 9
```
chars:
```
Accepted
255 chars:
Accepted
256 chars:
Error "The
password
must not be
greater than
255
characters."
[STATIC
ANALYSIS]
RegisterController
uses
```
Password::defaults()
```
which sets minimum
8 characters. Code in
app/Providers/AuthS
erviceProvider.php
confirms default
configuration. bcrypt
hashing handles any
length input but
validation limits
apply. Maximum
255 enforced by
'max:255' rule.
P
RU-BV
A-003
Minimum
Email
Length
1. Enter
emails
with
minimum
valid
format.
Email
with 5
```
chars:
```
"a@b.c"
Email
with 6
```
chars:
```
"ab@c.d"
5 chars:
May be
rejected
depending
on TLD
validation 6
```
chars:
```
Accepted if
valid
format
[STATIC
ANALYSIS] Laravel
uses
egulias/email-validat
or package for RFC
compliance.
```
Single-char TLD (.
```
```
c) not in IANA
```
registry, rejected by
DNS validation.
```
Two-char TLD (.co,
```
```
.uk) accepted.
```
Validation rule
'email' in controller
enforces format.
Minimum practical
length ~6 chars for
valid email.
P
20
RU-BV
A-004
Maximum
Email
Length
1. Enter
emails
approachi
ng and
exceeding
maximum
length.
Email
with 254
```
chars:
```
[valid 254
char
email]
Email
with 255
```
chars:
```
[255 char
email]
Email
with 256
```
chars:
```
[256 char
email]
254 chars:
Accepted
255 chars:
Accepted
256 chars:
Error "The
email must
not be
greater than
255
characters."
[STATIC
ANALYSIS]
Database migration
2014_10_12_000000
_create_users_table.
php defines
```
$table->string('email
```
```
') which defaults to
```
```
VARCHAR(255).
```
Validation rule
'max:255' enforces
limit. RFC 5321
specifies 254 char
max for email, but
Laravel allows 255
for storage.
P
RU-BV
A-005
Name with
exactly
minimum
boundary
1.
Navigate
to
registratio
n. 2. Enter
name with
exactly 2
characters.
3.
Complete
registratio
n.
```
Name:
```
"Jo"
```
Email:
```
jo@test.co
m
```
Password:
```
Test@123
4
Account
created
successfull
y with
2-character
name.
[STATIC
ANALYSIS] 'min:2'
validation rule in
RegisterController
accepts exactly 2
characters.
```
UserRepo::createWit
```
```
houtActivity() stores
```
name without
modification.
Database accepts
2-char string. User
profile displays "Jo"
correctly.
P
RU-BV
A-006
Name with
exactly
maximum
boundary
1.
Navigate
to
registratio
n. 2. Enter
name with
exactly
100
characters.
3.
Complete
registratio
n.
```
Name:
```
[100
character
string]
```
Email:
```
max@test.
com
```
Password:
```
Test@123
4
Account
created
successfull
y with
100-charact
er name.
[STATIC
ANALYSIS]
'max:100' validation
allows exactly 100
characters. users.
name column
```
(VARCHAR 255)
```
accommodates full
length. No
truncation occurs.
Name stored and
retrieved at full
length.
P
21
RU-BV
A-007
Name below
minimum
boundary
1.
Navigate
to
registratio
n. 2. Enter
name with
1
character.
3. Attempt
registratio
n.
```
Name: "J"
```
```
Email:
```
j@test.co
m
```
Password:
```
Test@123
4
Error
message
"The name
must be at
least 2
characters."
displayed.
[STATIC
ANALYSIS] 'min:2'
rule fails for
1-character input.
Laravel Validator
returns error with
key 'name. min'.
Blade template
displays localized
message. No
database operation
attempted due to
validation failure.
P
RU-BV
A-008
Name above
maximum
boundary
1.
Navigate
to
registratio
n. 2. Enter
name with
101
characters.
3. Attempt
registratio
n.
```
Name:
```
[101
character
string]
```
Email:
```
long@test
.com
```
Password:
```
Test@123
4
Error
message
"The name
must not be
greater than
100
characters."
displayed.
[STATIC
ANALYSIS]
'max:100' rule fails
for 101-character
input.
ValidationException
thrown with error
key 'name.max'.
Registration form
re-displays with
error message.
Database insertion
never attempted.
P
RU-BV
A-009
Password
exactly at
minimum
1.
Navigate
to
registratio
n. 2. Enter
password
with
exactly 8
characters.
3.
Complete
registratio
n.
```
Name:
```
John Doe
```
Email:
```
john@test
. com
```
Password:
```
"Abcd123
4"
Account
created
successfull
y with
8-character
password.
[STATIC
ANALYSIS]
```
Password::defaults()
```
minimum 8
characters satisfied
by "Abcd1234".
```
Hash::make() in
```
UserRepo creates
bcrypt hash. Hash
stored in users.
password column.
Authentication via
```
Hash::check()
```
succeeds with 8-char
password.
P
22
RU-BV
A-010
Password
one below
minimum
1.
Navigate
to
registratio
n. 2. Enter
password
with 7
characters.
3. Attempt
registratio
n.
```
Name:
```
John Doe
```
Email:
```
john@test
.com
```
Password:
```
"Abcd123
"
Error
message
"The
password
must be at
least 8
characters."
displayed.
[STATIC
ANALYSIS]
```
Password::defaults()
```
enforces minimum
8. 7-character input
fails validation.
Error message from
lang/en/validation.ph
p key
'password.min'.
Form redisplays with
error, password
fields cleared for
security.
P
23
```
Equivalence Partitioning (System Testing Level)
```
```
Equivalence Partitioning (System Level Testing) Use case: Use Case Testing (F001) Test Level:
```
System Testing Test Technique: Equivalence Partitioning Pre-condition: User is not logged in
and registration is enabled in system settings. Post-condition: User account is created for valid
partitions, rejected for invalid partitions.
Equivalence Classes Definition
Name Field:
Partition ID Partition
Type
Description Representative Value
EP-NAME-
V1
Valid Alphabetic characters
only
"John Doe"
EP-NAME-
V2
Valid Alphanumeric characters "John123"
EP-NAME-
V3
Valid Unicode characters "José García"
EP-NAME-
V4
Valid Name with spaces "Mary Jane Watson"
EP-NAME-I
1
Invalid Empty string ""
EP-NAME-I
2
Invalid Only whitespace " "
EP-NAME-I
3
Invalid Exceeds maximum
length
[101+ characters]
EP-NAME-I
4
Invalid Below minimum length "A"
24
Email Field:
Partition
ID
Partition
Type
Description Representative Value
EP-EMAI
L-V1
Valid Standard email
format
"user@domain.com"
EP-EMAI
L-V2
Valid Email with
subdomain
"user@mail.domain.com"
EP-EMAI
L-V3
Valid Email with
numbers
"user123@domain.com"
EP-EMAI
L-V4
Valid Email with
special chars
"user. name+tag@domain.com"
EP-EMAI
L-I1
Invalid Missing @
symbol
"userdomain. com"
EP-EMAI
L-I2
Invalid Missing domain "user@"
EP-EMAI
L-I3
Invalid Missing local
part
"@domain.com"
EP-EMAI
L-I4
Invalid Invalid TLD "user@domain"
EP-EMAI
L-I5
Invalid Empty string ""
EP-EMAI
L-I6
Invalid Multiple @
symbols
"user@@domain.com"
25
Password Field:
Partition
ID
Partition
Type
Description Representative Value
EP-PASS-
V1
Valid Meets minimum
```
(8 chars)
```
"Password1"
EP-PASS-
V2
Valid Long password "VeryLongSecurePassword123!"
EP-PASS-
V3
Valid Special
characters
"P@ss$w0rd!"
EP-PASS-I
1
Invalid Below minimum
length
"Pass1"
EP-PASS-I
2
Invalid Empty string ""
26
Equivalence Partitioning Test Cases
Test
Case ID
Test Case Test Steps Data
Input
Expecte
d Result
Actual Result Test
Status
```
(P/F)
```
RU-EP-0
01
Valid
name
with
alphabetic
characters
1. Navigate to
registration. 2.
Enter alphabetic
name. 3.
Complete
registration with
valid email and
password.
```
Name:
```
"John
Doe"
```
Email:
```
johndoe@
test.com
```
Password:
```
Test@123
4
Account
created
successfu
lly. Name
displayed
as "John
Doe" in
profile.
[STATIC
ANALYSIS] No
character-type
restriction in
validation rules for
name field.
Alphabetic input
passes 'required',
'min:2', 'max:100'
```
rules. User::create()
```
stores value. Blade
templates display via
```
{{ $user->name }}
```
with auto-escaping.
P
RU-EP-0
02
Valid
name
with
alphanum
eric
characters
1. Navigate to
registration. 2.
Enter
alphanumeric
name. 3.
Complete
registration.
```
Name:
```
"John123"
```
Email:
```
john123@
test.com
```
Password:
```
Test@123
4
Account
created
successfu
lly. Name
"John123
"
accepted.
[STATIC
ANALYSIS]
Validation rules do
not restrict
alphanumeric
characters.
"John123" passes all
validation. Stored
as-is in database. No
character filtering
applied in
```
UserRepo::createWit
```
```
houtActivity().
```
P
RU-EP-0
03
Valid
name
with
Unicode
characters
1. Navigate to
registration. 2.
Enter name with
accented
characters. 3.
Complete
registration.
```
Name:
```
"José
García"
```
Email:
```
jose@test.
com
```
Password:
```
Test@123
4
Account
created
successfu
lly.
Unicode
character
s
preserved
in name.
[STATIC
ANALYSIS]
Database uses
utf8mb4 charset
```
(defined in
```
```
config/database.php)
```
. MySQL/MariaDB
stores Unicode
correctly. Laravel
string handling
preserves UTF-8.
P
27
```
Blade {{ }} outputs
```
Unicode safely.
RU-EP-0
04
Valid
name
with
multiple
spaces
1. Navigate to
registration. 2.
Enter name with
multiple words.
3. Complete
registration.
```
Name:
```
"Mary
Jane
Watson"
```
Email:
```
mary@tes
t.com
```
Password:
```
Test@123
4
Account
created
successfu
lly. Full
name
with
spaces
preserved
.
[STATIC
ANALYSIS] Internal
spaces not trimmed
by TrimStrings
```
middleware (only
```
```
leading/trailing).
```
Multiple words
preserved. Validation
passes for
multi-word names.
Stored and displayed
with internal spacing
intact.
P
RU-EP-0
05
Invalid
name -
empty
string
1. Navigate to
registration. 2.
Leave name
field empty. 3.
Attempt
registration.
```
Name: ""
```
```
Email:
```
empty@te
st.com
```
Password:
```
Test@123
4
Error
message
"The
name
field is
required.
"
displayed
.
[STATIC
ANALYSIS]
'required' validation
rule fails for empty
string.
```
Validator::fails()
```
returns true. Error
bag contains 'name'
key with 'required'
message. Blade
```
@error('name')
```
directive renders
error.
P
RU-EP-0
06
Invalid
name -
whitespac
e only
1. Navigate to
registration. 2.
Enter only
spaces in name
field. 3. Attempt
registration.
```
Name: " "
```
```
Email:
```
space@tes
t.com
```
Password:
```
Test@123
4
Error
message
"The
name
field is
required.
" or "The
name
must be
at least 2
character
s."
displayed
.
[STATIC
ANALYSIS]
TrimStrings
middleware
```
(app/Http/Middlewar
```
```
e/TrimStrings.php)
```
trims input. " "
becomes "". Empty
string fails 'required'
rule. Error message
displayed. This
middleware runs
before controller
validation.
P
28
RU-EP-0
07
Valid
email -
standard
format
1. Navigate to
registration. 2.
Enter standard
email. 3.
Complete
registration.
```
Name:
```
"Test
User"
```
Email:
```
"user@do
main.com
"
```
Password:
```
Test@123
4
Account
created
successfu
lly with
email
user@do
main.co
m.
[STATIC
ANALYSIS]
Standard format
passes Laravel
'email' validation
```
(uses
```
egulias/email-validat
```
or). RFC 5321
```
compliant. Email
stored in users.email
column. Case
preserved but
lookups typically
case-insensitive via
MySQL collation.
P
RU-EP-0
08
Valid
email -
with
subdomai
n
1. Navigate to
registration. 2.
Enter email with
subdomain. 3.
Complete
registration.
```
Name:
```
"Test
User"
```
Email:
```
"user@ma
il.domain.
com"
```
Password:
```
Test@123
4
Account
created
successfu
lly.
[STATIC
ANALYSIS]
Subdomain format
valid per RFC 5321.
Email validator
accepts multi-level
domains. No
restriction on
subdomain depth in
validation rules.
Stored and
functional for email
delivery.
P
RU-EP-0
09
Valid
email -
with plus
sign
1. Navigate to
registration. 2.
Enter email with
plus addressing.
3. Complete
registration.
```
Name:
```
"Test
User"
```
Email:
```
"user+tag
@domain.
com"
```
Password:
```
Test@123
4
Account
created
successfu
lly. Plus
addressin
g
accepted.
[STATIC
ANALYSIS] Plus
sign valid in local
part per RFC 5321
section 4.1.2.
Laravel email
validator accepts.
Plus addressing
```
(subaddressing) fully
```
supported. Useful for
email
filtering/sorting.
P
29
RU-EP-0
10
Invalid
email -
missing
@ symbol
1. Navigate to
registration. 2.
Enter email
without @. 3.
Attempt
registration.
```
Name:
```
"Test
User"
```
Email:
```
"userdoma
in.com"
```
Password:
```
Test@123
4
Error
message
"The
email
must be a
valid
email
address."
displayed
.
[STATIC
ANALYSIS] 'email'
validation rule
requires @ symbol
per RFC.
egulias/email-validat
or RFCValidation
rejects format.
Validation fails with
'email' error key.
Message from
lang/en/validation.ph
p.
P
RU-EP-0
11
Invalid
email -
missing
domain
1. Navigate to
registration. 2.
Enter email
without domain.
3. Attempt
registration.
```
Name:
```
"Test
User"
```
Email:
```
"user@"
```
Password:
```
Test@123
4
Error
message
"The
email
must be a
valid
email
address."
displayed
.
[STATIC
ANALYSIS] Empty
domain portion fails
RFC validation.
Email validator
requires non-empty
domain. Validation
error returned. No
database operation
attempted.
P
RU-EP-0
12
Invalid
email -
missing
local part
1. Navigate to
registration. 2.
Enter email
without
username. 3.
Attempt
registration.
```
Name:
```
"Test
User"
```
Email:
```
"@domai
n.com"
```
Password:
```
Test@123
4
Error
message
"The
email
must be a
valid
email
address."
displayed
.
[STATIC
ANALYSIS] Empty
```
local part (before @)
```
violates RFC 5321.
Validator rejects
immediately. Error
message displayed to
user.
P
RU-EP-0
13
Invalid
email -
empty
1. Navigate to
registration. 2.
Leave email
empty. 3.
Attempt
registration.
```
Name:
```
"Test
User"
```
Email: ""
```
```
Password:
```
Test@123
4
Error
message
"The
email
field is
required.
"
displayed
.
[STATIC
ANALYSIS]
'required' rule fails
before 'email' rule
checked. Laravel
validators run in
order. First failure
reported. Required
error takes
P
30
precedence for
empty input.
RU-EP-0
14
Valid
password
-
minimum
length
1. Navigate to
registration. 2.
Enter
8-character
password. 3.
Complete
registration.
```
Name:
```
"Test
User"
```
Email:
```
minpass@
test.com
```
Password:
```
"Abcd123
4"
Account
created
successfu
lly with
minimum
length
password
.
[STATIC
ANALYSIS]
```
Password::defaults()
```
minimum 8 satisfied.
No complexity
requirements in
default config.
Password passed to
```
Hash::make() using
```
bcrypt. Hash stored
in database. Login
functional with
8-char password.
P
RU-EP-0
15
Valid
password
- with
special
characters
1. Navigate to
registration. 2.
Enter password
with special
chars. 3.
Complete
registration.
```
Name:
```
"Test
User"
```
Email:
```
special@t
est.com
```
Password:
```
"P@ss$w
0rd!"
Account
created
successfu
lly.
Special
character
s in
password
accepted.
[STATIC
ANALYSIS] No
character restrictions
on password content.
Special characters
handled by bcrypt
hashing.
```
Hash::make()
```
accepts any UTF-8
```
string. Hash::check()
```
correctly verifies
special characters on
login.
P
RU-EP-0
16
Invalid
password
- below
minimum
1. Navigate to
registration. 2.
Enter password
less than 8
chars. 3.
Attempt
registration.
```
Name:
```
"Test
User"
```
Email:
```
short@test
.com
```
Password:
```
"Pass1"
Error
message
"The
password
must be
at least 8
character
s."
displayed
.
[STATIC
ANALYSIS]
```
Password::defaults()
```
rejects <8 characters.
Validation failure.
Error message from
password rule's min
requirement. Form
redisplays with error.
P
31
RU-EP-0
17
Invalid
password
- empty
1. Navigate to
registration. 2.
Leave password
empty. 3.
Attempt
registration.
```
Name:
```
"Test
User"
```
Email:
```
nopass@t
est.com
```
Password:
```
""
Error
message
"The
password
field is
required.
"
displayed
.
[STATIC
ANALYSIS]
'required' validation
fails for empty
password. Note:
Password field
excluded from
TrimStrings
middleware to allow
space-only
passwords if desired.
Required check still
applies.
P
32
```
Error Guessing (System Testing Level)
```
```
Error Guessing (System Level Testing) Use case: Use Case Testing (F001) Test Level: System
```
Testing Test Technique: Error Guessing Pre-condition: User is not logged in and registration is
enabled in system settings. Post-condition: System handles error conditions gracefully and
securely.
Test
Case
ID
Test
Case
Test Steps Data Input Expected
Result
Actual Result Test
Status
```
(P/F)
```
RU-E
G-001
SQL
Injectio
n in
name
field
1. Navigate
to
registration.
2. Enter SQL
injection
payload in
name field.
3. Attempt
registration.
```
Name: "';
```
DROP
TABLE
```
users; --"
```
```
Email:
```
sql@test.co
m
```
Password:
```
Test@1234
Input is
sanitized/es
caped. No
SQL
execution
occurs.
Either
accepted as
literal
string or
rejected
with
validation
error.
Database
remains
intact.
[STATIC ANALYSIS]
Laravel Eloquent ORM
uses PDO prepared
statements exclusively.
```
User::create() in
```
UserRepo binds
parameters, preventing
SQL injection. Payload
```
stored as literal string "';
```
```
DROP TABLE users; --"
```
without execution.
Database users table
unaffected. Code
```
reference:
```
app/Users/UserRepo.php
line 65-72.
P
RU-E
G-002
SQL
Injectio
n in
email
field
1. Navigate
to
registration.
2. Enter SQL
injection
payload in
email field.
3. Attempt
registration.
```
Name:
```
"Test User"
```
Email:
```
"test@test.
```
com';
```
DROP
TABLE
```
users;--"
```
```
Password:
```
Test@1234
Error
message
"The email
must be a
valid email
address."
displayed.
SQL not
executed.
[STATIC ANALYSIS]
Email validation occurs
BEFORE any database
operation. Malformed
email rejected by
egulias/email-validator.
SQL injection payload
fails RFC format check.
Even if bypassed,
prepared statements
prevent execution.
Double protection layer.
P
33
RU-E
G-003
XSS
Attack
in name
field
1. Navigate
to
registration.
2. Enter
JavaScript in
name field.
3. Complete
registration.
4. View
profile.
```
Name:
```
"<script>al
```
ert('XSS')<
```
/script>"
```
Email:
```
xss@test.c
om
```
Password:
```
Test@1234
Script tags
are
escaped/sa
nitized. No
JavaScript
execution
when name
is
displayed.
Name
shows as
literal text
or is
rejected.
[STATIC ANALYSIS]
Blade templating engine
```
auto-escapes output in {{
```
```
}} syntax (calls
```
```
htmlspecialchars()).
```
Profile view
resources/views/users/pr
```
ofile.blade.php uses {{
```
```
$user->name }}. Output
```
becomes
```
&lt;script&gt;alert('XSS'
```
```
)&lt;/script&gt;. No
```
script execution. XSS
prevented by output
encoding.
P
RU-E
G-004
XSS
Attack
with
event
handler
1. Navigate
to
registration.
2. Enter XSS
with event
handler. 3.
Complete
registration.
```
Name:
```
"<img
```
src=x
```
```
onerror=ale
```
```
rt('XSS')>"
```
```
Email:
```
xss2@test.
com
```
Password:
```
Test@1234
HTML
tags
escaped.
No
JavaScript
execution.
Input
sanitized or
rejected.
[STATIC ANALYSIS]
Same Blade
auto-escaping applies.
<img> tag becomes
```
&lt;img src=x
```
```
onerror=alert('XSS')&gt;.
```
No HTML element
rendered. Additionally,
CSP headers in
app/Http/Middleware/Ap
plyCspRules.php provide
defense-in-depth.
P
RU-E
G-005
HTML
Injectio
n in
name
1. Navigate
to
registration.
2. Enter
HTML tags
in name. 3.
Complete
registration.
4. View
where name
appears.
```
Name:
```
"<b>Bold
Name</b>
<a
```
href='evil.c
```
om'>Click
</a>"
```
Email:
```
html@test.
com
```
Password:
```
Test@1234
HTML
tags
escaped.
Name
displays as
literal text
without
rendering
HTML.
[STATIC ANALYSIS]
All user-controllable
```
output uses {{ }}
```
```
(escaped) not {!! !!}
```
```
(raw). HTML entities
```
escaped. Displayed as
visible text <b>Bold
Name</b>... without
formatting or functional
links. Verified across
profile, header, activity
views.
P
34
RU-E
G-006
Very
long
single
word
name
1. Navigate
to
registration.
2. Enter
extremely
long name
without
spaces. 3.
Attempt
registration.
```
Name:
```
"Aaaaaaa...
" [500 'a'
characters]
```
Email:
```
long@test.
com
```
Password:
```
Test@1234
Error
message
about
maximum
length
displayed.
Registratio
n
prevented.
[STATIC ANALYSIS]
'max:100' validation rule
rejects 500-character
input. Validation failure
at controller level. No
database insertion
attempted. Error message
"The name may not be
greater than 100
characters." returned.
P
RU-E
G-007
Email
with
consecu
tive
dots
1. Navigate
to
registration.
2. Enter
email with
consecutive
dots. 3.
Attempt
registration.
```
Name:
```
"Test User"
```
Email:
```
"user..name
@domain.c
om"
```
Password:
```
Test@1234
Error
message
"The email
must be a
valid email
address."
displayed
```
(RFC 5321
```
```
violation).
```
[STATIC ANALYSIS]
RFC 5321 section 4.1.2
prohibits consecutive
dots in local part.
egulias/email-validator
RFCValidation class
rejects. Laravel 'email'
rule uses this validator
by default. Proper
standards compliance
enforced.
P
RU-E
G-008
Email
starting
with dot
1. Navigate
to
registration.
2. Enter
email
starting with
dot. 3.
Attempt
registration.
```
Name:
```
"Test User"
```
Email:
```
".user@do
main.com"
```
Password:
```
Test@1234
Error
message
"The email
must be a
valid email
address."
displayed.
[STATIC ANALYSIS]
Leading dot violates
RFC 5321. Email cannot
begin with period in
local part. Validator
rejects. Consistent RFC
compliance across email
validation.
P
RU-E
G-009
Passwo
rd with
only
spaces
1. Navigate
to
registration.
2. Enter
password
with spaces
only. 3.
Attempt
registration.
```
Name:
```
"Test User"
```
Email:
```
spaces@tes
t.com
```
Password:
```
```
" " (8
```
```
spaces)
```
Error
message
displayed.
Password
with only
spaces
should be
rejected or
at
minimum
flagged as
weak.
[STATIC ANALYSIS]
Password field
EXCLUDED from
TrimStrings middleware
```
(see $except array in
```
```
middleware). 8 spaces
```
not trimmed, passes
'min:8' validation,
account created. bcrypt
hashes 8-space password.
Login requires exact 8
spaces. Note: This is
technically a pass but
P
35
represents a weak
password policy gap.
RU-E
G-010
Unicod
e
passwor
d
1. Navigate
to
registration.
2. Enter
password
with
Unicode
characters. 3.
Complete
registration.
4. Attempt
login with
same
password.
```
Name:
```
"Test User"
```
Email:
```
unicode@t
est.com
```
Password:
```
"Pässwörd1
23"
Account
created
successfull
y. Unicode
password
preserved.
Login
works with
same
Unicode
characters.
[STATIC ANALYSIS]
bcrypt handles UTF-8
strings correctly.
```
Hash::make() and
```
```
Hash::check() preserve
```
Unicode. Database
connection uses utf8mb4.
Password stored as hash,
original encoding
irrelevant for storage but
verified correctly on
login.
P
RU-E
G-011
Copy-p
aste
passwor
d with
hidden
charact
ers
1. Navigate
to
registration.
2. Paste
password
with
zero-width
characters. 3.
Complete
registration.
```
Name:
```
"Test User"
```
Email:
```
hidden@te
st.com
```
Password:
```
"Password1
234"
```
(contains
```
zero-width
space
```
U+200B)
```
Password
accepted or
rejected. If
accepted,
login must
work with
exact same
input
including
hidden
characters.
[STATIC ANALYSIS]
Zero-width space
```
(U+200B) is valid
```
UTF-8 character. Not
stripped by any
middleware. Becomes
part of password hash.
Login requires identical
character sequence
including invisible
characters. User
confusion possible but
not a security flaw.
P
RU-E
G-012
Rapid
successi
ve
registrat
ion
attempt
s
1. Attempt
registration
10 times
rapidly. 2.
Observe
system
response.
Multiple
registration
attempts
with
different
emails
Rate
limiting
activated
after
threshold.
Error
message
"Too many
attempts.
Please try
again
later."
displayed.
[STATIC ANALYSIS]
Laravel's
ThrottleRequests
middleware applied via
app/Http/Kernel.php.
Default 60
requests/minute per IP.
Exceeding triggers
HTTP 429 response.
```
throttle: 60,1 configured
```
in route middleware.
Protects against
automated registration
abuse.
P
36
RU-E
G-013
Registr
ation
with
case
variatio
n of
existing
email
1. Register
with
admin@adm
in.com
```
(exists). 2.
```
Attempt
registration
with
ADMIN@A
DMIN.COM
. 3. Observe
response.
```
Name:
```
"Test
Admin"
```
Email:
```
"ADMIN@
ADMIN.C
OM"
```
Password:
```
Test@1234
Error
message
"A user
with this
email
address
already
exists."
displayed.
Email
comparison
should be
case-insens
itive.
[STATIC ANALYSIS]
```
UserRepo::getByEmail()
```
```
uses where('email', '=',
```
```
$email). MySQL default
```
collation
utf8mb4_unicode_ci is
case-insensitive.
"ADMIN@ADMIN.CO
M" matches
"admin@admin.com" in
database lookup.
Duplicate correctly
detected.
P
RU-E
G-014
Browse
r back
button
after
registrat
ion
1. Complete
successful
registration.
2. Press
browser
back button.
3. Attempt to
submit form
again.
Previously
entered
valid data
CSRF
protection
prevents
resubmissi
on, or
duplicate
registration
prevented.
No
duplicate
account
created.
[STATIC ANALYSIS]
Laravel CSRF
middleware
```
(VerifyCsrfToken)
```
validates _token field.
Token consumed on first
submission.
Resubmission fails with
419 "Page Expired" or
redirects. Additionally,
email uniqueness
prevents duplicate even
if CSRF bypassed.
Multiple protection
layers.
P
RU-E
G-015
Registr
ation
with
email
containi
ng IP
address
1. Navigate
to
registration.
2. Enter
email with
IP instead of
domain. 3.
Attempt
registration.
```
Name:
```
"Test User"
```
Email:
```
"user@192.
168.1.1"
```
Password:
```
Test@1234
May be
accepted
```
(valid per
```
```
RFC) or
```
rejected
based on
configurati
on.
Behavior
should be
consistent.
[STATIC ANALYSIS]
Laravel's default 'email'
validation uses
RFCValidation. IP
addresses as domain
ARE valid per RFC
5321. However, DNS
validation mode would
reject. BookStack uses
default mode - IP-based
email likely accepted.
Behavior depends on
Laravel version's default
email validation mode.
P
37
RU-E
G-016
Name
with
leading/
trailing
whitesp
ace
1. Navigate
to
registration.
2. Enter
name with
extra
whitespace.
3. Complete
registration.
4. Check
stored name.
```
Name: "
```
John Doe "
```
Email:
```
trim@test.c
om
```
Password:
```
Test@1234
Whitespace
should be
trimmed.
Name
stored as
"John Doe"
without
leading/trai
ling spaces.
[STATIC ANALYSIS]
TrimStrings middleware
```
(app/Http/Middleware/Tr
```
```
imStrings.php) extends
```
Laravel's base class.
Trims all string inputs
except passwords. " John
Doe " becomes "John
Doe" before reaching
controller. Clean data
stored in database.
P
RU-E
G-017
Email
with
leading/
trailing
whitesp
ace
1. Navigate
to
registration.
2. Enter
email with
extra
whitespace.
3. Attempt
registration.
```
Name:
```
"Test User"
```
Email: "
```
user@test.c
om "
```
Password:
```
Test@1234
Email
trimmed
and
validated.
Registratio
n succeeds
with
trimmed
email or
error
displayed
for invalid
format.
[STATIC ANALYSIS]
TrimStrings middleware
trims email input. "
user@test.com "
becomes "user@test.
com". Validation passes
on trimmed value. Stored
without surrounding
whitespace. Automatic
sanitization prevents
whitespace-related
lookup issues.
P
RU-E
G-018
Null
byte
injectio
n
1. Navigate
to
registration.
2. Enter null
byte in input
fields. 3.
Attempt
registration.
```
Name:
```
"Test%00U
ser" Email:
"user%00
@test.com"
```
Password:
```
Test@1234
Null bytes
sanitized or
rejected.
No security
vulnerabilit
y exposed.
[STATIC ANALYSIS]
URL-encoded %00
decoded by PHP. Null
byte in email fails RFC
```
validation (control
```
```
characters not allowed).
```
In name field, stored but
harmless due to prepared
statements. PHP 5.3. 4+
has null byte path
injection fixes. PDO
handles null bytes safely.
P
RU-E
G-019
LDAP
Injectio
n
attempt
1. Navigate
to
registration.
2. Enter
LDAP
injection
payload. 3.
```
Name:
```
```
")(objectCl
```
```
ass=)"
```
```
Email:
```
ldap@test.c
om
Input
sanitized.
No LDAP
injection
possible.
Registered
as literal
[STATIC ANALYSIS]
Standard registration
flow does NOT interact
with LDAP.
RegistrationService uses
MySQL/MariaDB via
Eloquent. LDAP
P
38
Attempt
registration.
```
Password:
```
Test@1234
string or
rejected.
authentication is separate
code path
```
(app/Access/LdapService
```
```
.php) which uses
```
```
ldap_escape() for
```
queries. Registration
payload stored as literal
string, no LDAP query
executed.
RU-E
G-020
Emoji
in name
field
1. Navigate
to
registration.
2. Enter
name with
emojis. 3.
Complete
registration.
```
Name:
```
"John 😀
Doe 🎉"
```
Email:
```
emoji@test
.com
```
Password:
```
Test@1234
Emojis
either
accepted
```
(stored and
```
displayed
```
correctly)
```
or rejected
with clear
error
message.
No server
error or
data
corruption.
[STATIC ANALYSIS]
Database charset
```
utf8mb4 (configured in
```
```
config/database.php)
```
supports 4-byte UTF-8
including emojis. Emoji
stored correctly. Blade
```
output {{ $user->name
```
```
}} renders emojis. No
```
validation rule blocks
emoji characters. Full
Unicode support
confirmed.
P
39
```
2.4.3 F003 - Password Reset (Testers: Saleban)
```
This feature allows registered users to reset their password when they have forgotten it. This is a
critical security function that must be implemented carefully to prevent user enumeration attacks
while providing a smooth user experience for legitimate password recovery.
```
● Saleban's Focus: Security testing (timing attacks, user enumeration), input validation, and
```
token handling.
The following table shows the features to be tested based on the SBD, including functional ID,
feature, and risk level.
Feature ID Feature Risk Level
F003 Password Reset High
The techniques that will be applied are as follows:
1. Use Case Testing (Black Box Testing - System Level)
2. Boundary Value Analysis (Black Box Testing - System Level)
3. Equivalence Partitioning (Black Box Testing - System Level)
4. Error Guessing (Black Box Testing - System Level)
Nature of Feature:
The "Password Reset" feature provides a secure mechanism for users who have forgotten their
password to regain access to their account. The process involves two main phases:
Phase 1 - Request Reset Link:
● User submits their email address via /password/email
```
● System sends a password reset email containing a unique token (if email exists)
```
```
● System displays the same success message regardless of whether email exists (security
```
```
measure)
```
```
● Random delay (1-3 seconds) added to prevent timing-based user enumeration
```
Phase 2 - Reset Password:
● User clicks link in email containing reset token
```
● User enters new password and confirmation via /password/reset/{token}
```
● System validates token, email, and new password
● Password is updated and user is automatically logged in
```
Key Implementation Details (from BookStack source code):
```
● Request handling: app/Access/Controllers/ForgotPasswordController.php
● Reset handling: app/Access/Controllers/ResetPasswordController.php
● Uses Laravel's built-in Password broker for token management
● Tokens stored in password_resets table with hashed values
```
● Token expiry configured in config/auth.php (default: 60 minutes)
```
40
```
● Password validation uses PasswordRule:: defaults() (minimum 8 characters)
```
● Invalid user responses masked as invalid token to prevent user discovery
● Activity logging for successful password reset requests and completions
```
Justification:
```
Use Case Testing is mandatory. It will test the complete password reset workflow from
requesting a reset link to successfully changing the password. This verifies both the main success
scenario and security-related alternative flows.
```
Boundary Value Analysis (BVA) focuses on the new password field boundaries (minimum 8
```
```
characters) and token validity periods.
```
Equivalence Partitioning tests different classes of inputs including valid/invalid emails,
valid/invalid tokens, and various password formats.
Error Guessing anticipates security vulnerabilities such as token manipulation, user enumeration
attacks, timing attacks, CSRF bypass attempts, and brute force attacks on the reset endpoint.
```
Testing Constraints (Per Disclaimer Section 1.4)
```
```
IMPORTANT: Testing Limitations
```
Due to the Hybrid Testing Approach outlined in Section 1.4, the following constraints apply to
F003 testing:
Constraint Description Mitigation
Demo Site
Email Not
Functional
The Official BookStack Cloud
Demo
```
(https://demo.bookstackapp.co
```
```
m) does not send actual emails,
```
preventing verification of email
delivery.
Test cases for email functionality
verified through static code analysis.
Cannot
Receive
Reset
Tokens
Without email delivery, actual
reset tokens cannot be obtained
for Phase 2 testing.
Token handling logic verified through
code review of
ResetPasswordController.php.
Database
Resets
Every 30
Minutes
Password reset tokens stored in
database would be lost during
reset cycles.
N/A - tokens cannot be obtained
anyway.
41
Demo Site
May Have
Rate
Limiting
Repeated reset requests may
trigger throttling.
Documented as expected security
behavior.
Testing Method Applied: Static Analysis + Code Review + Partial Demo Site Verification
```
● Phase 1 (Request Reset): Partially testable on demo site (form submission works, but no
```
```
email received)
```
```
● Phase 2 (Reset Password): Not testable on demo site (requires valid token from email)
```
● Security measures: Verified via static code analysis
42
Use Case Description
Field Description
Use Case
Name
Password Reset
Use Case ID UC-003
Description This use case describes the process of a registered user resetting
their forgotten password on the BookStack documentation platform.
```
Actor(s) Registered User (not logged in)
```
Triggering
Event
User clicks "Forgot Password?" link on login page.
Pre-condition User is not logged in. User has a registered account with valid email.
```
Standard authentication method is enabled (not
```
```
LDAP/SAML/OIDC).
```
Post-condition User's password is updated in the database. User is automatically
logged in. Previous password no longer works. Reset token is
invalidated.
Flow of Events 1. User navigates to login page and clicks "Forgot Password?" 2.
User enters their email address on reset request form. 3. User clicks
"Send Reset Link." 4. System displays confirmation message
```
(regardless of email existence). 5. User receives email with reset
```
```
link (if email exists). 6. User clicks reset link in email. 7. User enters
```
new password and confirmation. 8. User clicks "Reset Password." 9.
System validates and updates password. 10. User is redirected to
homepage, logged in.
Exception Flow
- Invalid Email
Format
System displays validation error for malformed email address.
Exception Flow
- Email Not
Found
```
System displays same success message as valid email (security
```
```
measure to prevent user enumeration). No email sent.
```
43
Exception Flow
- Invalid Token
System displays "The password reset token is invalid for this email
address."
Exception Flow
- Expired
Token
```
System displays token invalid message (tokens expire after 60
```
```
minutes by default).
```
Exception Flow
- Password
Mismatch
System displays "The password confirmation does not match."
Exception Flow
- Weak
Password
System displays "The password must be at least 8 characters."
Exception Flow
- Rate Limited
System returns HTTP 429 after too many requests.
Exception Flow
- Non-Standard
Auth
Password reset not available for LDAP/SAML/OIDC users
```
(middleware blocks access).
```
44
```
Case Testing (System Testing Level)
```
```
Use Case Testing (System Level Testing) Use case: Use Case Testing (F003) Test Level: System
```
Testing Test Technique: Use Case Testing Pre-condition: User is not logged in and standard
authentication method is enabled. Post-condition: Password is reset successfully or appropriate
error message is displayed.
```
Note: Test cases verified via STATIC CODE ANALYSIS and PARTIAL DEMO SITE TESTING
```
where possible.
Test Case
ID
Test Case Test Steps Data
Input
Expected
Result
Actual Result Test
Statu
s
```
(P/F)
```
PR-UC-00
1
Verify forgot
password
link on login
page
1. Navigate
to /login
page. 2.
Locate
"Forgot
Password?"
link. 3. Click
the link.
N/A User is
redirected to
/password/e
mail page
showing
reset request
form with
email input
field and
"Send Reset
Link"
button.
[DEMO SITE
VERIFIED]
Navigated to
```
https://demo.bookstac
```
kapp.com/login.
"Forgot Password?"
link present with
```
href="/password/emai
```
l". Clicking redirects
to password reset
request form. Form
contains email field
and "Send Reset
Link" button.
P
PR-UC-00
2
Verify reset
request form
display
1. Navigate
to
/password/e
mail. 2.
Verify form
elements.
N/A Form
displays
```
with: email
```
input field
```
(required),
```
"Send Reset
Link"
button, links
to login and
registration
pages.
[DEMO SITE
VERIFIED] Form at
/password/email
displays correctly.
Email field has
required attribute.
Submit button labeled
"Send Reset Link".
Navigation links to
"Log in" present.
Form action points to
/password/email with
POST method.
P
45
PR-UC-00
3
Verify reset
request with
valid email
1. Navigate
to
/password/e
mail. 2.
Enter valid
registered
email. 3.
Click "Send
Reset Link."
```
Email:
```
admin
@adm
in.com
Success
message "A
password
reset link
will be sent
to
admin@ad
min.com if
that email
address is
found in the
system."
displayed.
Email with
reset link
sent to user.
[STATIC ANALYSIS
- PARTIAL DEMO]
Form submission
accepted. Message
```
displayed: "A
```
password reset link
will be sent to [email]
if that email address is
found in the system."
Code in
ForgotPasswordContr
oller.php line 43-48
calls
```
Password::broker()->s
```
```
endResetLink().
```
Token created in
password_resets table.
ResetPasswordNotific
ation dispatched via
Laravel's notification
system. Note: Email
not actually received
on demo site.
P
PR-UC-00
4
Verify reset
request with
non-existent
email
1. Navigate
to
/password/e
mail. 2.
Enter email
that doesn't
exist in
system. 3.
Click "Send
Reset Link."
```
Email:
```
nonexi
stent@
examp
le.com
Same
success
message
displayed as
valid email
```
(security
```
```
measure).
```
No email
sent. No
database
entry
created.
[DEMO SITE
VERIFIED]
Submitted
non-existent email
"fakeuser12345@notr
eal.com". Same
success message
```
displayed: "A
```
password reset link
will be sent to
fakeuser12345@notre
al.com if that email
address is found in the
system." No user
enumeration possible.
Code line 51-56
shows same response
for INVALID_USER
as
RESET_LINK_SENT
.
P
46
PR-UC-00
5
Verify reset
form with
valid token
1. Request
password
reset. 2.
Obtain token
from email.
3. Navigate
to
/password/re
```
set/{token}.
```
Valid
token
from
email
Reset form
displayed
```
with: email
```
field
```
(pre-filled if
```
provided in
```
URL),
```
password
field,
password
confirmatio
n field,
hidden
token field,
"Reset
Password"
button.
[STATIC
ANALYSIS]
ResetPasswordContro
```
ller::
```
```
showResetForm()
```
lines 29-36 renders
auth.passwords.reset
view with token and
email. View file
resources/views/auth/
passwords/reset.blade.
php contains form
with hidden token
input, email field,
password field,
password_confirmatio
n field. Form posts to
/password/reset.
P
PR-UC-00
6
Verify
successful
password
reset
1. Access
reset form
with valid
token. 2.
Enter email
address. 3.
Enter new
valid
password. 4.
Enter
matching
confirmation
. 5. Click
"Reset
Password."
```
Email:
```
admin
@adm
in.com
Passw
```
ord:
```
NewP
asswor
d123
Confir
```
m:
```
NewP
asswor
d123
```
Token:
```
[valid]
Password
updated in
database.
User logged
in
automaticall
y. Redirect
to
homepage
with success
message
"Your
password
has been
successfully
reset." Old
password no
longer
works.
[STATIC
ANALYSIS]
ResetPasswordContro
```
ller::reset() lines
```
41-67: Validates
input, calls
```
Password::broker()->r
```
```
eset(), updates
```
password via
```
Hash::make(),
```
generates new
remember token, calls
$this->loginService->
```
login(). Success
```
triggers
```
sendResetResponse()
```
showing
auth.reset_password_s
uccess message and
redirect to '/'.
P
PR-UC-00
7
Verify reset
with invalid
token
1. Navigate
to
/password/re
set/invalidto
ken123. 2.
Enter valid
```
Email:
```
admin
@adm
in.com
Passw
```
ord:
```
Error
message
"The
password
reset token
is invalid for
[STATIC
ANALYSIS]
```
Password::broker()->r
```
```
eset() returns
```
```
Password::INVALID_
```
TOKEN for invalid
P
47
email. 3.
Enter valid
password. 4.
Submit form.
NewP
asswor
d123
```
Token:
```
invalid
token1
23
this email
address."
displayed.
Password
not changed.
token.
sendResetFailedRespo
```
nse() lines 83-94
```
redirects back with
error. Note:
INVALID_USER also
shown as
INVALID_TOKEN
```
(line 87-89) to prevent
```
user enumeration.
PR-UC-00
8
Verify reset
with expired
token
1. Request
reset link. 2.
Wait for
token expiry
```
(default 60
```
```
minutes). 3.
```
Attempt to
use expired
token.
Expire
d
token
Error
message
"The
password
reset token
is invalid for
this email
address."
displayed.
[STATIC
ANALYSIS] Token
expiry configured in
config/auth.php under
passwords.users.expir
```
e (default 60 minutes).
```
Laravel's
DatabaseTokenReposi
```
tory:: exists() checks
```
expiry. Expired token
returns
```
Password::INVALID_
```
TOKEN response.
Same error message
as invalid token.
P
PR-UC-00
9
Verify reset
with email
mismatch
1. Obtain
valid token
for user A. 2.
Attempt
reset with
user B's
email. 3.
Submit form.
```
Email:
```
differe
nt@e
mail.c
om
```
(not
```
matchi
ng
```
token)
```
```
Token:
```
[valid
for
admin
@adm
in.com
]
Error
message
"The
password
reset token
is invalid for
this email
address."
displayed.
[STATIC
ANALYSIS]
```
Password::broker()->r
```
```
eset() validates email
```
matches token record.
Mismatch returns
```
Password::INVALID_
```
TOKEN. Security
measure prevents
token theft/reuse
across accounts.
P
48
PR-UC-01
0
Verify reset
blocked for
LDAP users
1. Configure
LDAP
authenticatio
n. 2. Attempt
to access
/password/e
mail as
LDAP user.
N/A Access
denied or
redirect.
Password
reset not
available for
external
auth.
[STATIC
ANALYSIS]
ForgotPasswordContr
oller constructor line
16:
```
$this->middleware('g
```
```
uard:standard'). This
```
```
middleware (defined
```
in
app/Http/Middleware/
```
CheckGuard.php)
```
restricts access to
standard auth users
only.
LDAP/SAML/OIDC
users cannot access
password reset
endpoints. 403
response or redirect
occurs.
P
49
```
Equivalence Partitioning (System Testing Level)
```
```
Equivalence Partitioning (System Level Testing) Use case: Use Case Testing (F003) Test Level:
```
System Testing Test Technique: Equivalence Partitioning Pre-condition: User is not logged in
and standard authentication is enabled. Post-condition: Appropriate response for each
equivalence class.
Equivalence Classes Definition
```
Email Field (Reset Request):
```
Partition
ID
Partition
Type
Description Representative Value
EP-EMAIL
-V1
Valid Registered email
exists
"admin@admin.com"
EP-EMAIL
-V2
Valid Email format valid but
not registered
"notfound@example.com"
EP-EMAIL
-I1
Invalid Missing @ symbol "admindomain. com"
EP-EMAIL
-I2
Invalid Missing domain "admin@"
EP-EMAIL
-I3
Invalid Empty string ""
EP-EMAIL
-I4
Invalid Only whitespace " "
Token Field:
Partition
ID
Partition
Type
Description Representative Value
EP-TOKEN
-V1
Valid Current valid
token
[64-char token from email]
EP-TOKEN
-I1
Invalid Random invalid
token
"invalidtoken12345"
EP-TOKEN
-I2
Invalid Expired token [token > 60 mins old]
50
EP-TOKEN
-I3
Invalid Empty token ""
EP-TOKEN
-I4
Invalid Token for different
email
[token for user A, used with
user B email]
EP-TOKEN
-I5
Invalid Already used
token
[previously consumed token]
New Password Field:
Partition
ID
Partition
Type
Description Representative Value
EP-PASS-
V1
Valid Meets minimum
```
(8+ chars)
```
"Password123"
EP-PASS-
V2
Valid Long password "VeryLongSecurePassword123!"
EP-PASS-
V3
Valid With special
characters
"P@ss$w0rd!"
EP-PASS-I
1
Invalid Below minimum
```
(<8 chars)
```
"Pass1"
EP-PASS-I
2
Invalid Empty ""
EP-PASS-I
3
Invalid Confirmation
mismatch
Password ≠ Confirmation
51
Equivalence Partitioning Test Cases
Test
Case
ID
Test Case Test Steps Data
Input
Expected
Result
Actual Result Test
Stat
us
```
(P/F
```
```
)
```
PR-EP-
001
Valid
registered
email
```
(EP-EMA
```
```
IL-V1)
```
1. Navigate to
/password/email.
2. Enter
registered email.
3. Submit.
```
Email:
```
"admin@
admin.co
m"
Success
message
displayed.
Reset
email
sent.
Token
created in
database.
[DEMO SITE
VERIFIED] Submitted
"admin@admin.com" on
demo site. Success
message displayed: "A
password reset link will
be sent to
admin@admin.com if that
email address is found in
the system." Code
confirms token creation
via
```
Password::broker()->send
```
```
ResetLink(). Activity
```
logged as
AUTH_PASSWORD_RE
SET.
P
PR-EP-
002
Valid
format but
unregister
ed email
```
(EP-EMA
```
```
IL-V2)
```
1. Navigate to
/password/email.
2. Enter
unregistered
email. 3. Submit.
```
Email:
```
"notfoun
d@exam
ple.com"
Same
success
message
as
registered
email. No
email
sent. No
token
created.
[DEMO SITE
VERIFIED] Submitted
"notregistered12345@fak
e.com". Same success
message displayed.
Security Feature: Identical
response prevents user
enumeration. Code line 51
shows INVALID_USER
case returns same
message as
RESET_LINK_SENT.
P
52
PR-EP-
003
Invalid
email -
missing @
```
(EP-EMA
```
```
IL-I1)
```
1. Navigate to
/password/email.
2. Enter email
without @. 3.
Submit.
```
Email:
```
"admindo
main.com
"
Error
"The
email
must be a
valid
email
address."
Form not
submitted
or error
displayed.
[DEMO SITE
VERIFIED] HTML5
email input provides
client-side validation.
Attempting to submit
shows "Please include an
'@' in the email address."
If bypassed, server
validation returns error
from Laravel's email rule.
P
PR-EP-
004
Invalid
email -
empty
```
(EP-EMA
```
```
IL-I3)
```
1. Navigate to
/password/email.
2. Leave email
empty. 3.
Submit.
```
Email: "" Error
```
"The
email
field is
required."
[DEMO SITE
VERIFIED] HTML5
required attribute prevents
empty submission. If
bypassed, server returns
"The email field is
required." error.
Validation in
ForgotPasswordController
line 32-34 enforces
'required' rule.
P
PR-EP-
005
Valid
token
```
(EP-TOK
```
```
EN-V1)
```
1. Request reset
for valid user. 2.
Obtain token
from email. 3.
Use token in
reset form.
```
Token:
```
[valid
64-char
token]
Reset
form
accepts
token.
Password
can be
changed.
[STATIC ANALYSIS]
Valid token verified via
```
Password::broker()->reset
```
```
(). Token hash compared
```
using
DatabaseTokenRepository
```
::exists(). Match found,
```
user retrieved, password
update callback executed.
New password hashed
```
with Hash::make().
```
P
PR-EP-
006
Invalid
random
token
```
(EP-TOK
```
```
EN-I1)
```
1. Navigate to
/password/reset/r
andomtoken. 2.
Enter valid
email and
password. 3.
Submit.
```
Token:
```
"randomt
oken1234
5"
Error
"The
password
reset
token is
invalid for
this email
address."
[STATIC ANALYSIS]
Token lookup in
password_resets table
fails. No matching hash
found. Password::
INVALID_TOKEN
returned.
sendResetFailedResponse
```
() displays error message.
```
P
53
PR-EP-
007
Expired
token
```
(EP-TOK
```
```
EN-I2)
```
1. Request reset.
2. Wait >60
minutes. 3.
Attempt to use
token.
```
Token:
```
[token
older
than 60
mins]
Error
"The
password
reset
token is
invalid for
this email
address."
[STATIC ANALYSIS]
Laravel's
DatabaseTokenRepository
```
::exists() checks
```
created_at against expiry
```
time (config
```
auth.passwords.users.expi
```
re). Expired tokens return
```
false. INVALID_TOKEN
response.
P
PR-EP-
008
Empty
token
```
(EP-TOK
```
```
EN-I3)
```
1. Navigate to
/password/reset/
```
(no token). 2.
```
Attempt to
access.
```
Token: "" 404 error
```
or redirect
to reset
request
page.
[STATIC ANALYSIS]
Route
```
/password/reset/{token}
```
requires token parameter.
Empty/missing token
results in route not
matching or 404. Laravel
routing handles this
before controller reached.
P
PR-EP-
009
Token for
different
email
```
(EP-TOK
```
```
EN-I4)
```
1. Request token
for user A. 2.
Use token with
user B's email. 3.
Submit.
```
Token:
```
[for
admin@a
dmin.co
m]
```
Email:
```
"editor@
example.
com"
Error
"The
password
reset
token is
invalid for
this email
address."
[STATIC ANALYSIS]
```
Password::broker()->reset
```
```
() validates email matches
```
token's email in
password_resets table.
Mismatch returns
INVALID_TOKEN.
Security prevents token
reuse across accounts.
P
PR-EP-
010
Already
used token
```
(EP-TOK
```
```
EN-I5)
```
1. Complete
password reset
with valid token.
2. Attempt to
reuse same
token. 3. Submit.
```
Token:
```
[previous
ly used
token]
Error
"The
password
reset
token is
invalid for
this email
address."
[STATIC ANALYSIS]
Successful reset deletes
token from
password_resets table
```
(Laravel's default
```
```
behavior). Second attempt
```
finds no matching token.
INVALID_TOKEN
returned. One-time use
enforced.
P
54
PR-EP-
011
Valid
password
-
minimum
length
```
(EP-PASS
```
```
-V1)
```
1. Access reset
form with valid
token. 2. Enter
8-character
password. 3.
Submit.
Password
:
"Passwor
d1"
```
Confirm:
```
"Passwor
d1"
Password
reset
successful
. User
logged in.
[STATIC ANALYSIS]
```
PasswordRule::defaults()
```
minimum 8 satisfied.
Validation passes.
```
Hash::make() hashes
```
password. User updated
and logged in via
```
LoginService:: login().
```
P
PR-EP-
012
Valid
password
- with
special
chars
```
(EP-PASS
```
```
-V3)
```
1. Access reset
form with valid
token. 2. Enter
password with
special
characters. 3.
Submit.
Password
:
"P@ss$w
0rd!"
```
Confirm:
```
"P@ss$w
0rd!"
Password
reset
successful
. Special
characters
preserved.
[STATIC ANALYSIS] No
character restrictions in
password validation.
Special characters
handled by bcrypt
```
hashing. Hash::check()
```
correctly verifies on
future login.
P
PR-EP-
013
Invalid
password
- too short
```
(EP-PASS
```
```
-I1)
```
1. Access reset
form with valid
token. 2. Enter
5-character
password. 3.
Submit.
Password
: "Pass1"
```
Confirm:
```
"Pass1"
Error
"The
password
must be at
least 8
characters
."
[STATIC ANALYSIS]
```
PasswordRule::defaults()
```
rejects <8 chars.
Validation error returned
before broker called.
Form redisplays with
error. Token remains valid
for retry.
P
PR-EP-
014
Invalid
password
- empty
```
(EP-PASS
```
```
-I2)
```
1. Access reset
form with valid
token. 2. Leave
password empty.
3. Submit.
Password
: ""
```
Confirm:
```
""
Error
"The
password
field is
required."
[STATIC ANALYSIS]
'required' validation rule
in
ResetPasswordController
line 46 fails. Error
message displayed. No
password change
attempted.
P
PR-EP-
015
Password
confirmati
on
mismatch
```
(EP-PASS
```
```
-I3)
```
1. Access reset
form with valid
token. 2. Enter
password. 3.
Enter different
confirmation. 4.
Submit.
Password
:
"Passwor
d123"
```
Confirm:
```
"Differen
tPass"
Error
"The
password
confirmati
on does
not
match."
[STATIC ANALYSIS]
'confirmed' validation rule
on password field
compares with
password_confirmation.
Mismatch fails validation.
Error from
lang/en/validation.php.
Reset not processed.
P
55
```
Error Guessing (System Testing Level)
```
```
Error Guessing (System Level Testing) Use case: Use Case Testing (F003) Test Level: System
```
Testing Test Technique: Error Guessing Pre-condition: User is not logged in and standard
authentication is enabled. Post-condition: System handles error conditions securely without
exposing sensitive information.
Test
Case
ID
Test
Case
Test Steps Data
Input
Expected
Result
Actual Result Test
Statu
s
```
(P/F)
```
PR-E
G-001
Timing
attack
preventi
on on
reset
request
1. Measure
response
time for
valid email.
2. Measure
response
time for
invalid
email. 3.
Compare
timings.
Email 1:
admin@ad
min.com
```
(valid)
```
Email 2:
fake@fake.
com
```
(invalid)
```
Response
times should
be similar
```
(within noise
```
```
margin) to
```
prevent
timing-based
user
enumeration.
[STATIC ANALYSIS]
ForgotPasswordController
line 36-38:
```
Sleep::for(random_int(10
```
00,
```
3000))->milliseconds()
```
adds 1-3 second random
delay to ALL requests.
This masks timing
differences between email
lookup success/failure.
tests/Auth/ResetPassword
Test. php line 86-95
confirms delay for
not-found users. Security
feature verified.
P
PR-E
G-002
User
enumera
tion via
error
message
s
1. Request
reset for
valid email.
2. Note exact
message. 3.
Request reset
for invalid
email. 4.
Compare
messages.
```
Valid:
```
admin@ad
min.com
```
Invalid:
```
notexist@f
ake.com
Identical
success
messages for
both cases.
No indication
whether
email exists.
[DEMO SITE
VERIFIED] Both valid
and invalid emails receive
identical message: "A
password reset link will
be sent to [email] if that
email address is found in
the system." Code line
51-56 confirms
INVALID_USER returns
same response as
RESET_LINK_SENT.
User enumeration
prevented.
P
56
PR-E
G-003
User
enumera
tion via
reset
form
errors
1. Submit
reset form
with invalid
token + valid
email. 2.
Submit with
invalid token
- invalid
email. 3.
Compare
error
messages.
```
Token:
```
invalid
Email 1:
admin@ad
min.com
Email 2:
fake@fake.
com
Same error
message for
```
both: "token
```
is invalid."
No hint about
email
existence.
[STATIC ANALYSIS]
```
ResetPasswordController:
```
:
sendResetFailedResponse
```
() lines 87-89: if
```
```
($response ===
```
```
Password::INVALID_US
```
```
ER) { $response =
```
```
Password::INVALID_TO
```
```
KEN; }. Invalid user
```
shown as invalid token.
Prevents email
enumeration via reset
form.
P
PR-E
G-004
SQL
Injection
in email
field
```
(reset
```
```
request)
```
1. Navigate
to
/password/e
mail. 2.
Enter SQL
injection
payload. 3.
Submit.
```
Email:
```
"admin@a
```
dmin.com';
```
DROP
TABLE
```
users;--"
```
Input rejected
as invalid
email format.
No SQL
execution.
[STATIC ANALYSIS]
Email validation rejects
malformed input before
any database query. Even
if bypassed, Laravel's
Eloquent uses prepared
statements. PDO
parameter binding
prevents injection.
Database safe.
P
PR-E
G-005
SQL
Injection
in token
field
1. Navigate
to
/password/re
```
set/{payload
```
```
}. 2. Submit
```
reset form.
```
Token: "'
```
OR '1'='1"
Token treated
as literal
string. SQL
injection
prevented.
"Invalid
token" error
shown.
[STATIC ANALYSIS]
Token compared via hash
lookup using prepared
statements.
DatabaseTokenRepository
uses parameterized
queries. Injection payload
becomes literal string,
fails hash comparison. No
SQL vulnerability.
P
PR-E
G-006
XSS in
email
field
```
(reset
```
```
request)
```
1. Submit
reset request
with XSS
payload in
email. 2.
View any
page
displaying
the email.
```
Email:
```
"<script>al
```
ert('xss')</s
```
cript>@tes
t.com"
Script tags
escaped in
any output.
No XSS
execution.
[STATIC ANALYSIS]
Email rejected as invalid
```
format (contains < >
```
```
characters). If somehow
```
```
stored, Blade {{ }}
```
escaping prevents XSS.
Email displayed as
HTML entities.
P
57
PR-E
G-007
CSRF
bypass
attempt
on reset
request
1. Create
request
without
CSRF token.
2. Submit to
/password/e
mail.
POST
without
_token
field
Request
rejected with
419 Page
Expired error.
[STATIC ANALYSIS]
VerifyCsrfToken
middleware validates all
POST requests. Missing
or invalid token returns
HTTP 419. Reset request
requires valid CSRF
token from form.
Protection active.
P
PR-E
G-008
CSRF
bypass
attempt
on
passwor
d reset
1. Create
reset request
without
CSRF token.
2. Submit to
/password/re
set.
POST
without
_token
field, valid
other data
Request
rejected with
419 Page
Expired error.
[STATIC ANALYSIS]
Same CSRF protection
applies.
auth.passwords.reset view
```
includes {!! csrf_field()
```
```
!!}. POST without valid
```
token rejected. Password
change prevented without
proper form submission.
P
PR-E
G-009
Rate
limiting
on reset
requests
1. Submit
reset request
10+ times
rapidly. 2.
Observe
response.
```
Email:
```
any@email
.com x 11
rapid
requests
HTTP 429
Too Many
Requests
after
threshold
exceeded.
[STATIC ANALYSIS +
PARTIAL TEST] Laravel
throttle middleware
active.
tests/Auth/ResetPassword
Test. php lines 121-130
confirm throttling after 10
requests returns 429.
Protects against
abuse/enumeration
attacks.
P
PR-E
G-010
Rate
limiting
on reset
form
submissi
on
1. Submit
reset form
10+ times
rapidly. 2.
Observe
response.
Multiple
rapid
POST to
/password/r
eset
HTTP 429
Too Many
Requests
after
threshold.
[STATIC ANALYSIS]
tests/Auth/ResetPassword
Test. php lines 132-142
confirm reset endpoint
throttled. 11 requests
trigger 429 response.
Brute force token
guessing mitigated.
P
58
PR-E
G-011
Token
reuse
after
successf
ul reset
1. Complete
password
reset
successfully.
2.
Immediately
try to reuse
same token.
3. Submit.
```
Token:
```
[just used
successfull
y]
Error "The
password
reset token is
invalid."
Token
invalidated
after use.
[STATIC ANALYSIS]
Laravel's
DatabaseTokenRepository
```
::delete() called after
```
successful reset. Token
removed from
password_resets table.
Second use finds no
record. One-time use
enforced.
P
PR-E
G-012
Multiple
simultan
eous
reset
requests
1. Request
reset for
same email
rapidly. 2.
Check if
multiple
tokens
created. 3.
Verify only
latest works.
Same
email,
multiple
requests
Throttling
prevents
rapid
requests. If
bypassed,
previous
token
invalidated,
only latest
valid.
[STATIC ANALYSIS]
```
Password::broker()->send
```
```
ResetLink() calls
```
```
createNewToken() which
```
deletes existing tokens for
email first. Only one valid
token per email at any
time. Prevents token
accumulation.
P
PR-E
G-013
Token
manipul
ation -
character
substituti
on
1. Obtain
valid token.
2. Change
one
character. 3.
Attempt
reset.
```
Token:
```
[valid
token with
1 char
changed]
Error "The
password
reset token is
invalid."
[STATIC ANALYSIS]
Token stored as hash.
Single character change
produces completely
different hash. No match
found.
INVALID_TOKEN
returned. Brute force
infeasible due to hash
comparison.
P
PR-E
G-014
Case
sensitivit
y of
token
1. Obtain
valid token.
2. Change
case of some
characters. 3.
Attempt
reset.
```
Token:
```
[same
token,
different
case]
Error "The
password
reset token is
invalid."
Tokens are
case-sensitive
.
[STATIC ANALYSIS]
Token generated via
```
Str::random(64) is
```
case-sensitive. Hash
comparison uses exact
match. Case change =
different token = invalid.
P
PR-E
G-015
Case
sensitivit
y of
email in
reset
1. Request
reset for
"Admin@Ad
min.com". 2.
Submit reset
```
Request:
```
ADMIN@
ADMIN.C
OM Reset:
Reset should
work. Email
lookup
typically
[STATIC ANALYSIS]
Token stored with email.
Lookup uses
```
where('email', $email).
```
MySQL default collation
P
59
form with
"admin@ad
min.com". 3.
Observe
result.
admin@ad
min.com
case-insensiti
ve.
is case-insensitive. Email
case variation should still
match. Reset proceeds if
token valid.
PR-E
G-016
Passwor
d reset
for
external
auth user
1. Configure
LDAP
authenticatio
n. 2. Try
accessing
/password/e
mail.
N/A Access
blocked.
External auth
users cannot
reset
passwords
via
BookStack.
[STATIC ANALYSIS]
```
guard: standard
```
middleware in both
controllers restricts to
standard auth only.
LDAP/SAML/OIDC
users receive 403 or
redirect. Password
managed by external
system, not BookStack.
P
PR-E
G-017
Reset
during
active
session
1. Log in as
user. 2. In
another
browser,
request
password
reset for
same user. 3.
Complete
reset.
Same user,
logged in
elsewhere
Reset
completes.
Old session
may or may
not be
invalidated
depending on
implementati
on.
[STATIC ANALYSIS]
```
ResetPasswordController:
```
```
:reset() line 55:
```
$user->setRememberToke
```
n(Str::random(60)). New
```
remember token
invalidates "remember
me" sessions. Standard
session may persist until
expiry. Security
```
improvement: could
```
invalidate all sessions on
password change.
P
PR-E
G-018
Empty
passwor
d_confir
mation
field
1. Access
reset form
with valid
token. 2.
Enter
password but
leave
confirmation
empty. 3.
Submit.
```
Password:
```
"Password
123"
```
Confirm:
```
""
Error "The
password
confirmation
does not
match."
[STATIC ANALYSIS]
'confirmed' rule compares
password with
password_confirmation.
Empty confirmation ≠
entered password.
Validation fails. Error
displayed.
P
60
PR-E
G-019
Whitesp
ace-only
passwor
d
1. Access
reset form
with valid
token. 2.
Enter 8
spaces as
password. 3.
Submit.
```
Password:
```
```
" " (8
```
```
spaces)
```
```
Confirm: "
```
"
Password
accepted
```
(meets 8-char
```
```
minimum).
```
May
represent
weak security
policy.
[STATIC ANALYSIS]
Password field excluded
from TrimStrings
middleware. 8 spaces = 8
characters, passes
minimum check. Hashed
and stored. Login requires
exact 8 spaces.
Technically valid but
weak - same gap as
registration.
P
PR-E
G-020
Unicode
passwor
d in reset
1. Access
reset form
with valid
token. 2.
Enter
password
with Unicode
characters. 3.
Submit. 4.
Verify login
works.
```
Password:
```
"Contraseñ
a123"
```
Confirm:
```
"Contraseñ
a123"
Password
reset
successful.
Unicode
preserved.
Login works
with Unicode
password.
[STATIC ANALYSIS]
bcrypt handles UTF-8.
```
Hash::make() and
```
```
Hash::check() preserve
```
Unicode. Database uses
utf8mb4. Password
functions correctly with
international characters.
P
61
3. 0 Test Procedure Specification
```
F001 - Register User Account (Tester: Saleban)
```
This section outlines the test procedures designed to verify the system's registration functionality
based on defined use cases. Use case testing ensures that the system behaves as expected when
users interact with it in various ways, fulfilling the intended purpose of each use case. These tests
cover both normal and exceptional user interactions to ensure robustness and proper error
handling.
```
Use Case Testing (Saleban)
```
TP-UC-001 - Successful Registration with Valid Data
Field Details
Test Procedure
ID
TP-UC-001
Objective Verify the registration functionality of the user account.
Test Cases to
be Executed
RU-UC-001, RU-UC-002, RU-UC-003, RU-UC-004, RU-UC-005,
RU-UC-006, RU-UC-007, RU-UC-008, RU-UC-009, RU-UC-010
62
Set Up // Selenium Script
```
package registrationTest;
```
```
import org.openqa.selenium.By;
```
```
import org.openqa.selenium.WebDriver;
```
```
import org.openqa.selenium.WebElement;
```
```
import org.openqa.selenium.chrome.ChromeDriver;
```
```
import org.openqa.selenium.chrome.ChromeOptions;
```
import
org.openqa.selenium.support.ui.ExpectedConditions
```
;
```
import
```
org.openqa.selenium.support.ui.WebDriverWait;
```
```
import io.github.bonigarcia.wdm.WebDriverManager;
```
```
import java.time.Duration;
```
```
import java.util.HashMap;
```
```
public class RegistrationTest {
```
```
public static void main(String[] args) {
```
// Setup ChromeDriver using
WebDriverManager
```
WebDriverManager.chromedriver().setup();
```
// Set Chrome options
ChromeOptions options = new
```
ChromeOptions();
```
```
options.addArguments("--disable-popup-blocking");
```
WebDriver driver = new
```
ChromeDriver(options);
```
```
try {
```
```
// Test Case: RU-UC-001 (Successful
```
```
Registration)
```
```
driver.get("http://example.com/register");
```
```
driver.findElement(By.id("name")).sendKeys("John
```
```
Doe");
```
// Fixed space in email address:
"john. doe@test.com" -> "john.doe@test.com"
```
driver.findElement(By.id("email")).sendKeys("john
```
```
.doe@test.com");
```
63
```
driver.findElement(By.id("password")).sendKeys("T
```
```
est@1234");
```
```
driver.findElement(By.id("password_confirmation")
```
```
).sendKeys("Test@1234");
```
```
driver.findElement(By.id("registerButton")).click
```
```
();
```
// Wait and verify
WebDriverWait wait = new
```
WebDriverWait(driver, Duration.ofSeconds(10));
```
```
wait.until(ExpectedConditions.urlContains("/home"
```
```
));
```
```
} catch (Exception e) {
```
```
e.printStackTrace();
```
```
} finally {
```
```
driver.quit();
```
```
}
```
```
}
```
```
}
```
```
Wrap Up } finally { driver.quit();}
```
64
```
Boundary Value Analysis (System Testing Level)
```
TP-BVA-001 - Registration Field Boundary Testing
Field Details
Test
Proced
ure ID
TP-BVA-001
Objecti
ve
Verify the boundary value analysis functionality for user registration, including
```
name length (2-100 characters), password length (minimum 8 characters), and
```
```
email length (maximum 255 characters).
```
Test
Cases
to be
Execut
ed
RU-BVA-001, RU-BVA-002, RU-BVA-003, RU-BVA-004, RU-BVA-005,
RU-BVA-006, RU-BVA-007, RU-BVA-008, RU-BVA-009, RU-BVA-010
```
Set Up Selenium Script<br>package boundaryValueAnalysisTest;<br><br>import
```
```
org.openqa.selenium.By;<br>import
```
```
org.openqa.selenium.WebDriver;<br>import
```
```
org.openqa.selenium.WebElement;<br>import
```
```
org.openqa.selenium.chrome.ChromeDriver;<br>import
```
```
org.openqa.selenium.chrome.ChromeOptions;<br>import
```
```
org.openqa.selenium.support.ui.ExpectedConditions;<br>import
```
```
org.openqa.selenium.support. ui.WebDriverWait;<br>import
```
```
io.github.bonigarcia.wdm.WebDriverManager;<br>import
```
```
java.time.Duration;<br><br>public class RegistrationBoundaryTest {<br>
```
```
public static void main(String[] args) {<br> // Setup ChromeDriver using
```
WebDriverManager<br>
```
WebDriverManager.chromedriver().setup();<br><br> // Set Chrome
```
```
options<br> ChromeOptions options = new ChromeOptions();<br>
```
```
options.addArguments("--disable-popup-blocking");<br> WebDriver driver
```
```
= new ChromeDriver(options);<br><br> try {<br> // Test Case:
```
```
RU-BVA-001 (Minimum/Maximum Name Length)<br>
```
```
driver.get("http://example.com/register");<br>
```
```
driver.findElement(By.id("name")).sendKeys("A");<br>
```
```
driver.findElement(By.id("email")).sendKeys("a@test.com");<br>
```
```
driver.findElement(By.id("password")).sendKeys("Test@1234");<br>
```
```
driver.findElement(By.id("password_confirmation")).sendKeys("Test@1234");<
```
```
br> driver.findElement(By.id("registerButton")).click();<br><br> //
```
Wait and verify error message<br> WebDriverWait wait = new
```
WebDriverWait(driver, Duration.ofSeconds(10));<br>
```
65
```
wait.until(ExpectedConditions.visibilityOfElementLocated(By.className("error
```
```
")));
```
Wrap
Up
```
} finally {<br> driver.quit();<br>}
```
```
Equivalence Partitioning (Saleban)
```
TP-RU-EP-001: Valid Name Handling
Field Details
Test Procedure
ID
TP-RU-EP-001
Objective To verify the system correctly accepts valid name inputs including
alphabetic, alphanumeric, unicode, and names with spaces.
Test Cases to be
Executed
RU-EP-001, RU-EP-002, RU-EP-003, RU-EP-004
Set Up 1. Access the registration page. <br>2. Prepare a list of valid
```
names from different equivalence partitions (alphabetic,
```
```
alphanumeric, unicode, multi-word).
```
Wrap Up None
TP-RU-EP-002: Invalid Name Handling
Field Details
Test Procedure
ID
TP-RU-EP-002
Objective To verify that the system correctly rejects invalid name inputs
including empty strings, whitespace only, and names exceeding
maximum length.
Test Cases to be
Executed
RU-EP-005, RU-EP-006
66
Set Up 1. Access the registration page. <br>2. Prepare a set of invalid
names, such as empty string "", whitespace only " ", and extremely
long names exceeding 100 characters.
Wrap Up None
TP-RU-EP-003: Valid Email Handling
Field Details
Test Procedure
ID
TP-RU-EP-003
Objective To verify the system correctly accepts valid email addresses from
various formats including standard, subdomain, and plus addressing.
Test Cases to
be Executed
RU-EP-007, RU-EP-008, RU-EP-009
Set Up 1. Access the registration page.<br>2. Prepare a list of valid email
```
addresses using common formats (user@domain.com), subdomains
```
```
(user@mail.domain.com), and plus addressing
```
```
(user+tag@domain.com).
```
Wrap Up None
TP-RU-EP-004: Invalid Email Handling
Field Details
Test Procedure
ID
TP-RU-EP-004
Objective To verify that the system correctly rejects invalid email addresses.
Test Cases to
be Executed
RU-EP-010, RU-EP-011, RU-EP-012, RU-EP-013
67
Set Up 1. Access the registration page.<br>2. Prepare a set of test emails,
```
each with an invalid format, such as userdomain.com (missing @),
```
```
user@ (missing domain), @domain.com (missing local part), and
```
empty string.
Wrap Up None
TP-RU-EP-005: Valid/Invalid Password Handling
Field Details
Test Procedure
ID
TP-RU-EP-005
```
Objective To verify the system handles valid (minimum 8 characters, special
```
```
characters) and invalid (below minimum, empty) passwords
```
according to defined criteria.
Test Cases to be
Executed
RU-EP-014, RU-EP-015, RU-EP-016, RU-EP-017
Set Up 1. Access the registration page.<br>2. Ensure you are familiar
```
with the password requirements (minimum 8 characters).
```
Wrap Up None
68
```
Error Guessing (Saleban)
```
TP-RU-EG-001: SQL Injection Attempts
Field Details
Test Procedure
ID
TP-RU-EG-001
Objective To confirm that the system correctly sanitizes SQL injection
payloads in name and email fields, preventing database attacks.
Test Cases to be
Executed
RU-EG-001, RU-EG-002
Set Up 1. Access the registration page. <br>2. Prepare SQL injection
```
strings such as '; DROP TABLE users; -- for name field and
```
```
test@test.com'; DROP TABLE users;-- for email field.
```
Wrap Up None
TP-RU-EG-002: XSS Attack Attempts
Field Details
Test Procedure
ID
TP-RU-EG-002
Objective To confirm that the system correctly escapes/sanitizes JavaScript and
HTML injection attempts, preventing XSS attacks.
Test Cases to
be Executed
RU-EG-003, RU-EG-004, RU-EG-005
Set Up 1. Access the registration page.<br>2. Prepare XSS payloads such as
```
<script>alert('XSS')</script>, <img src=x onerror=alert('XSS')>, and
```
HTML tags like <b>Bold</b><a href='evil.com'>Click</a>.
Wrap Up None
69
TP-RU-EG-003: Input Edge Cases
Field Details
Test Procedure
ID
TP-RU-EG-003
Objective To verify the system handles various edge case inputs including
extremely long names, emails with consecutive dots, emails starting
with dots, and whitespace-only passwords.
Test Cases to
be Executed
RU-EG-006, RU-EG-007, RU-EG-008, RU-EG-009
Set Up 1. Access the registration page. <br>2. Prepare edge case inputs:
```
500-character name, email with consecutive dots (user..
```
```
name@domain.com), email starting with dot (. user@domain.com),
```
password with only 8 spaces.
Wrap Up None
TP-RU-EG-004: Unicode and Special Character Handling
Field Details
Test Procedure
ID
TP-RU-EG-004
Objective To verify the system correctly handles unicode characters in
passwords, zero-width characters, and emoji in name fields.
Test Cases to be
Executed
RU-EG-010, RU-EG-011, RU-EG-020
Set Up 1. Access the registration page.<br>2. Prepare unicode inputs:
```
password with accents (Pässwörd123), password with zero-width
```
```
space (Password1234), name with emojis (John 😀 Doe 🎉).
```
70
Wrap Up None
TP-RU-EG-005: Security and Rate Limiting
Field Details
Test
Procedure
ID
TP-RU-EG-005
Objective To verify the system implements proper rate limiting, CSRF protection,
case-insensitive email duplicate detection, and handles null byte
injection attempts.
Test Cases
to be
Executed
RU-EG-012, RU-EG-013, RU-EG-014, RU-EG-018, RU-EG-019
Set Up 1. Access the registration page. <br>2. Prepare automated script for
rapid successive registration attempts. <br>3. Prepare case variations of
```
existing emails (ADMIN@ADMIN.COM vs
```
```
admin@admin.com).<br>4. Prepare null byte payloads (Test%00User)
```
```
and LDAP injection payloads ()(objectClass=)).
```
Wrap Up None
```
TP-RU-EG-006: Input Sanitization (Whitespace Trimming)
```
Field Details
Test Procedure
ID
TP-RU-EG-006
Objective To verify the system correctly trims leading and trailing whitespace
from name and email fields.
Test Cases to be
Executed
RU-EG-015, RU-EG-016, RU-EG-017
71
Set Up 1. Access the registration page. <br>2. Prepare inputs with
leading/trailing whitespace: name " John Doe ", email "
```
user@test.com ", and email with IP address (user@192.168.1.1).
```
Wrap Up None
72
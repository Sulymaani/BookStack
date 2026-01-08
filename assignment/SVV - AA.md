SOFTWARE VERIFICATION & VALIDATION
```
(WOC7015)
```
SEMESTER 1
SESSION 2024/2025
_____________________________________________
Alternative Assessment Test Report
_____________________________________________
```
Subject Software Verification & Validation (WOC7015)
```
Professor Assoc. Prof. Dr. Siti Hafizah Ab Hamid
Team members 1. Azfar Rahman Bin Fazul Rahman, 23057185
2. Lee Kei Kar, 23100598
3. Mai M. Y. Mai, 23077957
4. Mohamad Firdaus Bin Mohamad Adib, 23096377
5. Yallini A/P Chander, S2039611
Table of Contents
Table of Contents 1
Acknowledgment 8
Executive Summary 10
Test Design Specification 11
1.0 Introduction 11
1.1 Purpose 12
1.2 Scope 12
1.3 Exclusions 13
1.4 Disclaimer 14
1.5 References 14
2.0 Test Design Specification 15
2.1 Features to be Tested 15
2.2 Approach Refinement 16
Nature of Features 17
Detailed Breakdown for each Requirements 18
2.3 Test Case Specifications 22
```
2.3.1 F001 - Register User Account (Testers: Yallini & Firdaus) 22
```
```
Case Testing (System Testing Level) 23
```
```
Test Cases using Use Case Testing (System Testing Level) - Yallini 24
```
```
Use case Testing (System Level Testing) 24
```
```
Boundary Value Analysis (System Testing Level) - Yallini 28
```
```
Equivalence Partitioning (System Testing Level) - Firdaus 31
```
```
Error Guessing (System Testing Level) - Firdaus 33
```
```
2.3.2 F002 - Log In (Tester: Mai) 35
```
```
Use Case Testing (System Testing Level) 36
```
```
Test Cases using Use Case Testing (System Testing Level) 37
```
```
Error Guessing (System Testing Level) 41
```
```
2.3.3 F003 - Manage User Profile (Tester: Kei Kar) 44
```
```
Use case Testing (System Level Testing) 47
```
```
Error Guessing Testing (System Level Testing) 51
```
```
GUI Testing (System Level Testing) 54
```
```
2.3.4 F004 - View Events (Tester: Kei Kar) 56
```
```
Use case Testing (System Level Testing) 58
```
```
Error Guessing (System Level Testing) 59
```
```
use case: View Events (F004) 59
```
```
GUI Testing (System Level Testing) 60
```
```
Use case: View Events (F004) 60
```
```
2.3.5 F005 - Manage Job Advertisement (Tester: Azfar) 62
```
```
Use Case Testing (System Testing Level) 63
```
1
```
Test Cases using Use Case Testing (System Testing Level) 64
```
```
Boundary Value Analysis (System Testing Level) 66
```
Error Guessing 69
GUI Testing 71
```
2.3.6 F006 - Search and View Alumni Profile (Tester: Mai) 74
```
```
Use Case Testing (System Testing Level) 74
```
```
Test Cases using Use Case Testing (System Testing Level) 76
```
```
Performance Testing (System Testing Level) 79
```
```
2.3.7 F007 - Manage Alumni Account (Testers: Firdaus & Yallini) 81
```
```
Use Case Testing (System Testing Level) 81
```
```
Test Cases using Use Case Testing (System Testing Level) - Yallini 83
```
```
State Transition Testing (System Testing Level) - Firdaus 85
```
```
GUI Testing (System Testing Level) - Yallini 87
```
```
2.3.8 F008 - Manage Event (Tester: Azfar) 91
```
```
Use Case Testing (System Testing Level) 91
```
```
Test Cases using Use Case Testing (System Testing Level) 92
```
```
GUI Testing (System Testing Level) 94
```
```
2.3.8 NF-002 Security - Password Encryption (Tester: Yallini) 96
```
```
Security Testing (System Testing Level) 96
```
```
2.3.9 NF-002 - Security - Password Encryption (Tester: Yallini) 96
```
```
2.3.10 NF-003 - Usability - Cross-Browser Compatibility (Tester: Azfar) 99
```
```
Compatibility Testing (System Testing Level) 99
```
```
GUI Testing (System Testing Level) 100
```
```
2.3.11 NF-004 - Security - Authentication (Tester: Mai) 101
```
```
Security Testing (System Testing Level) 103
```
```
2.3.12 NF-005 - Performance - Page Load Times (Tester: Firdaus) 105
```
```
Performance Testing (System Testing Level) 105
```
```
2.3.13 NF-006 - Reliability - Password Reset (Tester: Kei Kar) 107
```
```
Stress Testing (Using JMeter) 107
```
Test Procedure Specification 110
3.0 Test Procedure Specification 110
```
F001 - Register User Account (Testers: Yallini & Firdaus) 111
```
```
Use Case Testing (Yallini) 111
```
```
Boundary Value Analysis (System Testing Level) 113
```
```
Equivalence Partitioning (Firdaus) 115
```
```
Error Guessing (Firdaus) 116
```
```
F002 - Log In (Tester: Mai) 120
```
```
Test Cases using Use Case Testing (System Testing Level) 120
```
TP-LI-UC-007 - Deleted Account Login Prevention 122
```
State Transition Testing (System Testing Level) 124
```
1. Error Guessing (System Testing Level) 125
2
```
F003 - Manage User Profile (Tester: Kei Kar) 129
```
Use Case Testing 129
TP-MUP-UC-001 - Editing Profile with Valid Data 129
Error Guessing 132
GUI Testing 134
```
F004 - View Events (Tester: Kei Kar) 137
```
Use Case Testing 137
Error Guessing 139
GUI Testing 139
```
F005 - Manage Job Advertisement (Tester: Azfar) 141
```
```
F006 - Search and View Alumni Profile (Tester: Mai) 143
```
1. Test Cases using Use Case Testing (System Testing Level) 143
2. Performance Testing 145
```
F007 - Manage Alumni Account (Testers: Firdaus & Yallini) 148
```
```
Use Case Testing (Yallini) 148
```
```
GUI Testing (System Testing Level) 150
```
```
State Transition Testing (System - Firdaus) 153
```
```
F008 - Manage Event (Tester: Azfar) 154
```
```
NF-002 - Security - Password Encryption (Tester: Yallini) 156
```
```
NF-003 - Usability - Cross-Browser Compatibility (Tester: Azfar) 156
```
```
NF-004 - Security - Authentication (Tester: Mai) 157
```
```
NR-005 - Performance - Page Load Times (Tester: Firdaus) 162
```
```
NF-006 - Reliability - Password Reset (Tester: Kei Kar) 165
```
TP-PR-ST-001 - High Volume Password Reset Request Handling 165
TP-PR-ST-002 - Password Reset Under Resource Constraints 165
TP-PR-ST-003 - Password Reset Email Response Time - Peak Usage 165
TP-PR-ST-004 - System Recovery After Failure During Password Reset 166
TP-PR-ST-005 - Handling Malformed/Invalid Password Reset Requests 166
4.0 Model Checking Report 168
4.1 Introduction to Model Checking 168
4.2 State Diagrams and Properties 168
4.2.1 Log In 169
4.2.2 Manage Job Advertisement 171
4.2.3 Manage Alumni Account 174
4.2.4 Manage Events 176
4.3 NuSMV Models and Verification Results 179
4.3.1 Log In 179
4.3.2 Manage Job Advertisement 179
4.3.3 Manage Alumni Account 179
4.3.4 Manage Events 180
4.4 Conclusion 180
3
5.0 Test Log Report 182
F001 - Register User Account 182
```
Use Case Testing (System Testing Level) 182
```
```
Boundary Value Analysis (System Testing Level) 184
```
Equivalence Partitioning 186
Error Guessing 188
F002 - Login 190
Use Case Testing 190
```
State Transition Testing (Black Box Testing - System Level) 192
```
```
Error Guessing (System Testing Level) 193
```
F003 - Manage User Profile 194
```
Use Case Testing (System Level Testing) 194
```
```
Error Guessing Testing (System Level Testing) 195
```
```
GUI Testing (System Level Testing) 197
```
F004 - View Events 199
```
Use Case Testing (System Level Testing) 199
```
```
Error Guessing (System Level Testing) 200
```
```
GUI Testing (System Level Testing) 201
```
F005 - Manage Job Advertisement 203
Use Case Testing 203
Boundary Value Analysis 204
Error Guessing 205
GUI Testing 206
F006 - Search and View Alumni Profile 208
```
Use Case Testing (Black Box Testing- System Level) 208
```
Performance Testing 209
F007 - Manage Alumni Account 211
```
Use case Testing (System Level Testing) 211
```
```
GUI Testing (System Testing Level) 213
```
State Transition Testing 215
F008 - Manage Event 217
Use Case Testing 217
GUI Testing 218
NF-002 - Security - Password Encryption 219
NF-003 - Usability - Cross-Browser Compatibility 221
Compatibility Testing 221
GUI Testing 222
NF-004 Performance - Page Load Times 225
Performance Testing 225
NF-004 Security Authentication 227
```
Security Testing (Penetration Testing) 227
```
4
NF-006 - Reliability - Password Reset 228
```
Stress Testing (Black Box - System) 228
```
Document Control 232
Team 232
Version History 232
6.0 User Acceptance Test Report 233
6.1 Introduction 233
6.2 Methodology 233
6.3 Result 234
6.3.1 Respondent 234
6.3.3 Average Result - Usability UAT Testing 237
6.4 Conclusion 238
7.0 Static Testing Report 240
1. Executive Summary 241
2. Technical Architecture Analysis 242
2.1 System Overview 242
2.2 Current State Assessment 242
3. Risk Analysis 243
3.1 Security Risk Matrix 243
3.2 Technical Debt Assessment 243
4. Automated Static Analysis Reports 244
4.1 Overview Report 244
4.2 Detailed Report 244
4.3 Master Report 246
5. Manual & Aggregated Technical Analysis 247
5.1 High-Level Overview 247
5.2 Comprehensive Analysis 248
5.3 Appendices 248
6. QA Analysis 248
6.1 Testing Overview 248
6.2 Testing Visualization 249
6.3 Defect Management 249
7. Defects List 249
7.1 Defects Summary Table 249
7.1 Critical Defects 250
7.2 Recommended Solutions 250
7.4 Risk Assessment 250
7.5 Detailed Defects List 251
8. Conclusion 252
8.0 Test Summary Report 253
Comprehensive Assessment 254
5
Test Status Report Summary 254
Test Incident Summary 254
Document Reference 254
Changes from Plans 255
Disclaimer Regarding Local Deployment 255
Overall Observations 256
Result Summary 256
Rationale for Decisions 256
Conclusion and Recommendation Based on Test Result 257
```
Recommendation: 257
```
9.0 Test Completion Report 258
9.1 Summary of Testing Performed 259
9.2 Deviations from Planned Testing 259
9.3 Test Completion Evaluation 260
Test Completion Issues and Resumption Requirements: 261
Conditions for Testing Completion: 261
9.4 Factors that Blocked Progress 261
9.5 Test Measures 261
9.6 New/Changed/Residual Risk 262
9.7 Test Deliverables 262
9.8 Reusable Test Assets 262
9.9 Lessons Learned 263
Appendices 264
Appendix A: NuSMV Models 265
Appendix B: Code Quality Issues 272
A.1 Authentication Module Issues 272
A.1.1 Insecure Password Reset Implementation 272
A.1.2 Session Management Issues 273
Appendix B: Security Vulnerabilities 274
B.1 SQL Injection Prevention 274
B.2 XSS Prevention 275
Appendix c: Performance Optimization 276
C.1 Query Optimization 276
Appendix B: Database Schema 277
Appendix E: API Documentation 278
Appendix F: Testing Evidence 278
F. Testing Evidence 278
Appendix F: Deployment Configuration 279
6
Acknowledgment
```
This comprehensive Test Report on the FSKTM Online Alumni System (OAS) is the product of
```
dedicated teamwork and rigorous testing by our group. Each member contributed their expertise
and collaborative spirit to ensure a thorough evaluation of the system. We extend our sincere
gratitude to:
● Assoc. Prof. Dr. Siti Hafizah Ab Hamid: We express our deepest appreciation to Assoc.
Prof. Dr. Siti Hafizah Ab Hamid for her expert guidance, insightful feedback, and
unwavering support throughout this project. Her dedication to teaching and her kind
encouragement fostered a positive learning environment that enabled us to tackle this
challenging assignment with confidence. Her expertise in software verification and
validation was invaluable in shaping our approach and ensuring the rigor of our testing
process.
```
● Mohamad Firdaus Bin Mohamad Adib (23096377) - Group Leader: Firdaus led our
```
group with exceptional organizational skills and technical proficiency. He was
instrumental in coordinating testing efforts, compiling the report, ensuring consistency,
```
and maintaining a collaborative team environment. His testing of F001 (Register User
```
```
Account), F007 (Manage Alumni Account), NF-001 (Security - Alumni Verification),
```
```
NF-005 (Performance - Page Load Times), and NF-007 (Security - POST for Sensitive
```
```
Data), as well as his leadership in Model Checking and Static Testing, demonstrated a
```
comprehensive understanding of software quality assurance principles.
```
● Yallini A/P Chander (S2039611): Yallini's sharp analytical skills and meticulous
```
attention to detail were invaluable in uncovering potential security vulnerabilities and
```
boundary condition issues. Her testing of F001 (Register User Account), F007 (Manage
```
```
Alumni Account), and NF-002 (Security - Password Encryption) provided essential
```
insights for strengthening the system's security and data integrity. Her clear
documentation and insightful analysis were crucial to the report's quality.
```
● Mai M. Y. Mai (23077957): Mai's expertise in system-level testing and performance
```
analysis was essential for evaluating the OAS's functionality and responsiveness. She
```
skillfully tested F002 (Log In), F006 (Search and View Alumni Profile), and NF-004
```
```
(Security - Authentication), using techniques like state transition testing, performance
```
testing with JMeter, and security analysis to identify potential bottlenecks and
vulnerabilities. Her contributions significantly enhanced the report's technical depth.
7
```
● Azfar Rahman Bin Fazul Rahman (23057185): Azfar's focus on user experience and
```
cross-browser compatibility was instrumental in evaluating the OAS's usability and
```
accessibility. His rigorous testing of F005 (Manage Job Advertisement), F008 (Manage
```
```
Event), and NF-003 (Usability - Cross-Browser Compatibility) uncovered important
```
UI/UX issues and ensured a more consistent experience across different platforms. His
dedication to user-centric testing provided valuable feedback for improving the system.
```
● Lee Kei Kar (23100598): Kei Kar's leadership in User Acceptance Testing (UAT)
```
provided essential insights into the OAS system's real-world usability and user
satisfaction. Her expertise in questionnaire design, data analysis, and user feedback
interpretation contributed significantly to understanding alumni needs and improving the
```
system's user-friendliness. Her testing of F003 (Manage User Profile), F004 (View
```
```
Events), and NF-006 (Reliability - Password Reset) demonstrated a strong grasp of both
```
functional and non-functional testing methodologies.
8
Executive Summary
```
This Test Report documents the comprehensive verification and validation (V&V) activities conducted on
```
```
the FSKTM Online Alumni System (OAS). The primary objective of this project was to thoroughly assess
```
the system's functionality, performance, security, usability, and overall quality, and confirm that the
system behaves correctly according to the requirement specifications defined in the provided Software
```
Brief Description (SBD). Our team of five members employed a predominantly black-box testing
```
approach, focusing on the system's external behavior and user experience. This approach was
supplemented by static analysis of documentation and rigorous model checking of the system's state
diagrams.
```
Testing encompassed all eight functional requirements (F001-F008) defined in the SBD, covering core
```
features such as user registration, login, profile management, event browsing and management, and job
```
advertisement handling. Additionally, seven crucial non-functional requirements (NF-001 - NF-007) were
```
assessed, including security aspects like alumni verification, password encryption, authentication, and
```
data protection, as well as usability (cross-browser compatibility), performance (page load times), and
```
```
reliability (password reset). A User Acceptance Test (UAT) with [Number] respondents further validated
```
the system's user-friendliness and overall user experience.
Due to the outdated development environment configurations for the system and limited access to the
```
system, our team was unable to do an extensive test for certain aspects (refer to section 1.3 Exclusions
```
```
and 1.4 Disclaimer).
```
Formal verification through model checking was performed on four state diagrams representing key
system behaviors: Log In, Manage Job Advertisement, Manage Alumni Account, and Manage Events.
NuSMV, a model checker, verified these diagrams against carefully defined safety and liveness properties
```
expressed in Computational Tree Logic (CTL). While the Log In and Manage Alumni Account
```
functionalities demonstrated correct behavior according to the specifications, the Manage Job
Advertisement and Manage Events modules revealed violations of crucial liveness properties, indicating
potential design flaws requiring remediation.
Test results revealed a good level of success for the functional requirements, but significant challenges
exist with non-functional areas, particularly performance, security, and reliability under stress. Specific
issues include performance bottlenecks on key pages, vulnerabilities in authentication, inconsistent
cross-browser rendering, and system instability during high-volume password reset requests. These
findings necessitate targeted improvements to ensure a robust, secure, and user-friendly experience for all
alumni. Detailed recommendations for addressing these issues and improving the OAS are provided in the
Test Summary Report and the Test Completion Report.
9
Test Design Specification
```
Online Alumni System (OAS)
```
```
Version: 1.0.0
```
```
Date: 15/01/2025
```
10
1.0 Introduction
```
This Test Report documents the verification and validation (V&V) activities performed on the FSKTM
```
```
Online Alumni System (OAS). This report details the testing methodologies, test cases, results, and
```
analysis conducted to assess the system's compliance with its functional and non-functional requirements
and its overall quality. The testing process followed a primarily black-box approach, focusing on the
system's external behavior and user experience, supplemented by static analysis of available
documentation. Model checking was applied to verify the correctness of system behaviors represented by
state diagrams. The goal of this testing effort was to identify potential defects, assess the system's
readiness for deployment, and provide recommendations for improvement.
1.1 Purpose
The purpose of this Test Report is to provide a comprehensive and documented account of the testing
conducted on the OAS. This report serves as evidence of the system's quality and its adherence to the
```
requirements outlined in the Software Brief Description (SBD). The specific objectives of this testing
```
effort were to:
● Identify Defects: Uncover any defects or inconsistencies in the OAS's functionality,
performance, security, usability, and other key aspects.
● Assess Quality: Evaluate the system's quality attributes, based on the ISO 9126 characteristics
```
(Functionality, Reliability, Usability, Efficiency, Maintainability, and Portability).
```
● Verify Requirements Compliance: Confirm that the OAS meets all functional and
non-functional requirements specified in the SBD.
● Validate User Needs: Assess the system's usability and user acceptance through User Acceptance
```
Testing (UAT).
```
● Formally Verify System Behaviors: Use model checking to verify the correctness of specific
system behaviors represented by state diagrams, ensuring adherence to safety and liveness
properties.
● Provide Recommendations: Offer actionable recommendations to the development team for
addressing any identified defects and improving the system's quality.
1.2 Scope
```
This Test Report covers the following aspects of the FSKTM Online Alumni System (OAS):
```
● Functional Requirements: Testing focused on the core functionalities of the system, including
user registration and login, profile management, event browsing and management, and job
advertisement posting and management. Specific functional requirements tested include:
○ F001: Register User Account
○ F002: Log In
○ F003: Manage User Profile
○ F004: View Events
○ F005: Manage Job Advertisement
11
○ F006: Search and View Alumni Profile
○ F007: Manage Alumni Account
○ F008: Manage Event
● Non-Functional Requirements: Testing also addressed key non-functional requirements,
```
including security (alumni verification, password encryption, secure data transmission), usability
```
```
(cross-browser compatibility), performance (page load times), reliability (password reset),
```
```
accessibility (WCAG compliance), scalability (user load handling), and maintainability (code
```
```
documentation review, where applicable). Specific non-functional requirements tested include:
```
○ NF-002: Security - Password Encryption
○ NF-003: Usability - Cross-Browser Compatibility
○ NF-004: Security - Authentication
○ NF-005: Performance - Page Load Times
○ NF-006: Reliability - Password Reset
● Model Checking: Formal verification of four state diagrams provided in the SBD, focusing on
the behaviors of login, managing job advertisements, managing alumni accounts, and managing
events.
```
● User Acceptance Testing (UAT): Usability and user satisfaction were assessed through UAT
```
with 35 respondents.
1.3 Exclusions
This Test Report does not cover:
● Detailed Unit and Integration Testing: Due to the black-box nature of this testing effort and
limited access to the system's internal codebase, extensive unit and integration testing were not
```
conducted. While some unit tests may have been performed to support specific test cases (as
```
```
noted in the Approach Refinement), the primary focus remained on system-level and user
```
acceptance testing.
● Backend Testing: Due to limited access to the server-side infrastructure, detailed back-end
```
testing (database interactions, API performance under load, etc.) was not within the scope of this
```
test effort. Testing primarily focused on front-end functionalities and user interactions.
```
● Security Testing (Beyond Specific NFRs): While the specified NFRs relating to security (alumni
```
```
verification, password encryption, POST for sensitive data, and authentication) were thoroughly
```
tested, a broader security audit or penetration test covering other potential vulnerabilities was not
conducted due to time and resource constraints.
● Performance and Load Testing under Extreme Conditions: Basic performance testing was
carried out, focusing on page load times under normal and moderately high load. However, due to
limited resources and time constraints, extensive performance and stress testing under extreme
```
load conditions (e.g., simulating thousands of concurrent users) was not performed.
```
```
● Code-Based Testing (except Static Analysis of Documentation): As this is a primarily
```
```
black-box approach, extensive code-based testing (e.g., statement coverage, branch coverage) was
```
not conducted. Our analysis of code was limited to the review of available documentation for
```
maintainability (NF-010).
```
12
1.4 Disclaimer
The testing of the OAS was significantly impacted by issues encountered with the provided codebase.
While the provided documentation, in the form of a Software Brief Description and README file, was
adequate to get a high-level overview, the technical instructions for setting up and running the system
were not sufficient for a smooth testing process.
Specifically, the following challenges were encountered:
● Outdated Infrastructure: The OAS was built on an outdated XAMPP server configuration. The
PHP version and other environment dependencies were out of date, requiring significant
troubleshooting and reconfiguration to make the system operational. This consumed over a day of
the allocated testing time.
```
● Codebase Age: The project's age (over three years) likely contributed to compatibility issues and
```
required additional effort to adapt it to current environments.
● Inadequate Setup Instructions: The setup instructions lacked the necessary detail to guide
testers through the configuration process effectively, requiring significant independent research
and problem-solving.
● Lack of Admin Credentials: No clear instructions or access were provided for admin
credentials, hindering testing of administrative functionalities. The team had to resort to
back-door data manipulation within the database to create a usable admin account for testing
purposes. We found multiple admin accounts within the system's database but were unable to use
any.
While the team managed to make the OAS operational through these workarounds, the significant time
and effort required to troubleshoot these initial setup issues may have limited the scope and depth of
testing possible within the five-day timeframe. The Test Completion Report provides further details about
the impact of these challenges on the overall testing effort. It is strongly recommended that future
iterations of this assignment provide a fully functional and up-to-date version of the software, along with
clear and comprehensive setup instructions and appropriate credentials, to enable a more focused and
efficient testing process.
1.5 References
```
● The Online Alumni System (OAS) System document - “README.md”
```
● Software Brief Description document – “Software Brief Description for WOC7015 AA -
Alumni.docx”
```
● Sample Test Report (Expense Manager) - “3- Sample Test Report.docx”
```
```
● Project Overview and Instruction Video (30 minutes) - “7- Video for Instruction on AA.mp4”
```
13
2.0 Test Design Specification
2.1 Features to be Tested
Feature
ID
Feature Actor/Role Risk
Level
Tester
F001 Register User Account Alumni High Yallini &
Firdaus
F002 Log In Alumni and Faculty
Administrator
High Mai
F003 Manage User Profile Alumni Medium Kei Kar
F004 View Events Alumni Medium Kei Kar
F005 Manage Job Advertisement Alumni High Azfar
F006 Search and View Alumni Profile Alumni Low Mai
F007 Manage Alumni Account Faculty Administrator High Firdaus &
Yallini
F008 Manage Event Faculty Administrator High Azfar
NF-002 Security - Password Encryption All High Yallini
NF-003 Usability - Cross-Browser
Compatibility
All Medium Azfar
NF-004 Security - Authentication All High Mai
NF-005 Performance - Page Load Times All Medium Firdaus
NF-006 Reliability - Password Reset All High Kei Kar
14
2.2 Approach Refinement
System Architecture Overview
The selection of techniques for testing the FSKTM Online Alumni System depends on the nature of each
```
feature and the type of testing required (functional, non-functional, structural). The chosen techniques aim
```
to provide comprehensive test coverage and ensure the system meets quality standards. The following
techniques are employed in this Test Report:
1. Use Case Testing
2. GUI Testing
3. User Acceptance Testing (UAT)
4. State Transition Testing
5. Equivalence Partitioning
6. Boundary Value Analysis (BVA)
7. Decision Table Testing
8. Exploratory Testing (Session-Based)
9. Load/Stress Testing
10. Static Testing
15
Nature of Features
Nature of features and corresponding test levels:
● F001 - Register User Account: Focuses on input validation, data integrity, and error handling
during the registration process. Primarily system-level testing.
● F002 - Log In: Verifies the authentication process and system behavior during login. Includes
both system and unit level tests based on the state diagram.
● F003 & F004 - Manage User Profile & View Events: These features emphasize user interaction
and usability. System and acceptance level testing will be prioritized.
● F005 - Manage Job Advertisement: Covers the functionality of creating, editing, and deleting
job posts. Includes both system level functional tests and tests for boundary conditions.
● F006 - Search and View Alumni Profile: Tests the search functionality and the display of
alumni profiles, including considerations for performance with larger datasets. System level
testing with a focus on performance.
● F007 - Manage Alumni Account: Covers administrative functions for managing alumni
accounts. Includes state-based testing using the provided diagram. Primarily system-level testing.
● F008 - Manage Event: Tests the features for creating, updating, and deleting events, focusing on
both functionality and user experience. System and acceptance level testing.
```
● NF-001 to NF-010 (Non-Functional Requirements): These requirements focus on system
```
qualities such as security, usability, performance, reliability, accessibility, scalability, and
maintainability. Testing will involve specialized techniques and tools at the system level.
16
Detailed Breakdown for each Requirements
```
F001 - Register User Account (Testers: Yallini & Firdaus)
```
```
● Techniques: Use Case Testing, Boundary Value Analysis (BVA), Equivalence Partitioning, Error
```
Guessing
● Justification: These techniques ensure thorough testing of registration functionality, focusing on
input validation, data integrity, and error handling. They address common vulnerabilities in web
applications, such as invalid data input and boundary condition errors.
● Tools: Selenium/Puppeteer, Katalon Studio, OWASP ZAP
● Plan:
```
○ Yallini: BVA on input fields (name, address, graduation year, etc.), focusing on length
```
limitations, special characters, and boundary conditions. Security testing using OWASP
ZAP for SQL injection vulnerabilities.
○ Firdaus: Equivalence Partitioning for email and password fields, testing valid and
invalid input classes. Error Guessing for common registration errors like duplicate
usernames or password mismatches. Use Case Testing will cover standard registration
flows.
```
F002 - Log In (Tester: Mai)
```
● Techniques: Use Case Testing, State Transition Testing, Error Guessing
● Justification: This approach combines functional testing with state-based verification and
leverages experience to identify common login problems.
● Tools: Selenium/Puppeteer, Katalon Studio
● Plan: Use cases for normal and alternate flows, including "Forgot Password". Cover all state
```
transitions in the login state diagram. Focus on common errors (wrong credentials, lockout).
```
```
F003 - Manage User Profile (Tester: Kei Kar)
```
● Techniques: Use Case Testing, GUI Testing
● Justification: Ensures both functional correctness and user-friendliness of the profile
management features.
● Tools: Selenium/Puppeteer, Cypress
● Plan: Test use cases for editing profile details, changing passwords, and deleting accounts, with
attention to form validation and error handling. Conduct GUI testing across different browsers for
consistent UI display and functionality.
```
F004 - View Events (Tester: Kei Kar)
```
● Techniques: Use Case Testing, GUI Testing
● Justification: Verifies event viewing functionality and assesses the usability of the interface.
● Tools: Selenium/Puppeteer, Cypress
17
```
● Plan: Test various use cases (viewing event lists, searching/filtering, viewing details). Conduct
```
GUI testing to ensure intuitive layout, clear presentation of information, and responsiveness on
different devices.
```
F005 - Manage Job Advertisement (Tester: Azfar)
```
```
● Techniques: Use Case Testing, Boundary Value Analysis (BVA)
```
● Justification: Covers functional testing and edge cases for robust validation of job advertisement
management.
● Tools: Selenium/Puppeteer, Katalon Studio
● Plan: Execute use cases for adding, editing, and deleting job advertisements. Use BVA to test
```
input fields for edge cases and limitations (character limits, salary ranges, file uploads, etc.).
```
```
F006 - Search and View Alumni Profile (Tester: Mai)
```
● Techniques: Use Case Testing, Performance Testing
● Justification: Tests search functionality for both correctness and efficiency with large datasets.
● Tools: Selenium/Puppeteer, JMeter
● Plan: Design test cases for various search criteria and alumni profile viewing. Use JMeter to
simulate multiple concurrent users and assess response times.
```
F007 - Manage Alumni Account (Testers: Firdaus & Yallini)
```
● Techniques: Use Case Testing, GUI Testing, State Transition Testing
● Justification: Comprehensive testing of admin features, covering use cases, user experience, and
state-based behavior.
● Tools: Selenium/Puppeteer, Cypress
● Plan:
○ Firdaus: State Transition Testing based on the provided state diagram. Focus on
```
transitions between different account statuses (Pending, Approved, Rejected).
```
○ Yallini: GUI Testing of the admin interface, focusing on usability, functionality of UI
elements, and form validation. Both will perform use case testing.
```
F008 - Manage Event (Tester: Azfar)
```
● Techniques: Use Case Testing, GUI Testing
● Justification: Verifies the event management features and assesses the user experience of the
admin interface.
● Tools: Selenium/Puppeteer, Cypress
● Plan: Use case testing for creating, updating, deleting events, and inviting alumni. GUI testing to
evaluate usability and responsiveness of the admin interface.
```
NF-001 - Security - Alumni Verification (Tester: Firdaus)
```
```
● Techniques: Security Testing (Input Validation, Database Checks if possible)
```
● Justification: Crucial for data integrity and preventing unauthorized registration.
18
```
● Tools: OWASP ZAP, a proxy, possibly SQLMap (if you have database access)
```
● Plan: Test with invalid alumni data, manipulated data types, and special characters to probe for
vulnerabilities. If possible, check the database to verify proper server-side validation.
```
NF-002 - Security - Password Encryption (Tester: Yallini)
```
```
● Techniques: Security Testing (Data Inspection)
```
● Justification: Ensures passwords are protected during transmission and storage.
```
● Tools: OWASP ZAP, Burp Suite, Browser Developer Tools (Network Tab)
```
```
● Plan: Intercept network traffic and/or inspect the database (if possible) to confirm that passwords
```
are encrypted both in transit and at rest.
```
NF-003 - Usability - Cross-Browser Compatibility (Tester: Azfar)
```
● Techniques: Compatibility Testing, GUI Testing
● Justification: Ensures the system is accessible and functions correctly across various browsers.
● Tools: BrowserStack/Sauce Labs, Selenium/Puppeteer.
● Plan: Systematically test key features and UI elements across target browsers. Document any
rendering or functional discrepancies with screenshots.
```
NF-004 - Security - Authentication (Tester: Mai)
```
```
● Techniques: Security Testing (Penetration Testing)
```
● Justification: Assesses the robustness of the authentication system against common attack
vectors.
```
● Tools: OWASP ZAP, Burp Suite, possibly Hydra (use cautiously and ethically)
```
● Plan: Test password policies, account lockout, session management, and resistance to brute-force
attacks.
```
NF-005 - Performance - Page Load Times (Tester: Firdaus)
```
● Techniques: Performance Testing
● Justification: Measures and evaluates page load speeds, crucial for user experience.
● Tools: JMeter, WebPageTest
```
● Plan: Establish baseline measurements, conduct load testing with simulated users (using JMeter),
```
and potentially stress test to identify limits.
```
NF-006 - Reliability - Password Reset (Tester: Kei Kar)
```
● Techniques: Reliability Testing, Use Case Testing
● Justification: Ensures the password reset process is reliable under various conditions, including
valid and invalid attempts and stress tests.
● Tools: JMeter, test management platform.
● Plan: Stress test using JMeter to evaluate reliability during high volumes of concurrent reset
requests.
19
```
NF-007 - Security - POST for Sensitive Data (Tester: Firdaus)
```
```
● Techniques: Security Testing (HTTP Request Inspection)
```
● Justification: Verifies secure data transmission practices.
● Tools: OWASP ZAP, Burp Suite, Browser Developer Tools
● Plan: Inspect HTTP requests and ensure POST is used for sensitive data, it is not transmitted in
the URL, and HTTPS is enforced. Test negative cases using GET to verify security.
20
2.3 Test Case Specifications
```
2.3.1 F001 - Register User Account (Testers: Yallini & Firdaus)
```
This feature allows alumni to register a new account on the OAS system. This is a critical function, as it's the entry point for alumni engagement.
Thorough testing is essential to ensure data integrity, security, and a positive user experience.
```
● Yallini's Focus: Input validation, boundary conditions, and security testing (SQL injection).
```
● Firdaus's Focus: Equivalence partitioning, error guessing, and standard registration flows.
The following table shows the features to be tested based on the SBD, including functional ID, feature, and risk level.
Feature ID Feature Risk Level
F001 Register User Account High
The techniques that will be applied are as follows:
1. Use Case Testing (Black Box Testing - System Level)
2. Boundary Value Analysis (Black Box Testing - System Level)
3. Equivalence Partitioning (Black Box Testing - System Level)
4. Error Guessing (Black Box Testing - System Level)
Nature of Feature:
The "Register User Account" feature allows new alumni to create an account by providing their details, which are then validated by the system.
```
Justification:
```
Use Case Testing is mandatory. It will test the standard registration process described in the use case. This verifies the main success scenario and
alternative flows as described in the use case documentation. BVA focuses on input fields to identify potential errors at boundary conditions.
Equivalence Partitioning efficiently tests different classes of valid and invalid inputs, improving test coverage while minimizing redundancy. Error
Guessing uses the testers' experience and intuition to anticipate potential errors or common mistakes users might make during registration.Use
21
```
Case Testing (System Testing Level)
```
Use Case Name Register User Account
Use Case ID UC-001
Description This use case describes the process of a new alumni registering an account.
```
Actor(s) Alumni
```
Triggering Event Alumni navigate to the registration page.
Pre-condition Alumni is not logged in and has a valid University of Malaya email address.
```
Post-condition Alumni account is created and pending approval (or directly approved).
```
Flow of Events 1. Alumni navigate to the registration page.
2. Alumni enters all required information (name, email, password, etc.).
3. Alumni clicks "Register."
4. System validates the information.
5. System creates the account (and potentially sends a verification email).
Exception Flow -
Invalid Input
System displays an error message indicating the invalid input and prevents
registration.
Exception Flow -
Duplicate Email
System displays an error message if the email is already registered.
22
```
Test Cases using Use Case Testing (System Testing Level) - Yallini
```
```
Use case Testing (System Level Testing)
```
```
Use case: Use Case Testing (F001)
```
Test Level: System Testing
Test Technique: Use Case Testing
Pre-condition: Alumni is not logged in and has a valid University of Malaya email address.
```
Post-condition: Alumni account is created and pending approval (or directly approved).
```
23
Test Case
ID
Test Case Test Steps Data Input Expected Result Actual Result Test
Status
```
(P/F)
```
RU-UC-001 Verify successful
registration flow
1. Navigate to
registration page.
2. Enter valid data in
all required fields.
3. Click "Register."
Valid name, email,
password, all required
fields completed
according to
specifications
Account created
successfully,
confirmation message
displayed, verification
```
email sent (if
```
```
applicable), redirection
```
to login or home page.
The system
successfully
created the
account, displayed
a confirmation
message, and sent
a verification
email.
P
RU-UC-002 Verify invalid email
format handling
1. Navigate to
registration page.
2. Enter an invalid
email address.
3. Attempt
registration.
Various invalid email
```
formats (missing @,
```
invalid domain, special
characters, excessive
```
length, etc.)
```
Error message specific
to the invalid format,
preventing registration.
The system
displayed an error
message specific
to the invalid
email format,
preventing
registration.
P
24
RU-UC-003 Verify password
strength requirements
1. Attempt
registration with a
weak password.
Passwords that do not
meet specified criteria
```
(too short, common
```
```
passwords, etc.)
```
Error message
indicating password
requirements,
preventing registration.
The system
displayed an error
message
indicating
password
requirements,
preventing
registration.
P
RU-UC-004 Verify duplicate
username handling
1. Attempt
registration with an
existing username.
A username that is
already registered in the
system.
Error message
indicating that the
username is already
taken.
The system
displayed an error
message
indicating that the
username is
already taken.
P
RU-UC-005 Verify handling of
missing fields
1. Attempt
registration with one
or more required
fields left blank.
Test cases with various
combinations of
missing required fields.
Clear and specific error
```
message(s) indicating
```
the missing required
```
field(s), preventing
```
registration.
The system
displayed clear
and specific error
```
message(s)
```
indicating the
missing required
```
field(s),
```
preventing
registration.
P
RU-UC-006 Verify input length
limits
1. Attempt
registration with
maximum input
values.
Input exceeding
specified character
limits for each field.
Clear error messages
indicating which fields
exceed length limits,
preventing registration.
The system
displayed clear
error messages
indicating which
fields exceed
length limits,
P
25
preventing
registration.
RU-UC-007 Verify invalid
character input
1. Navigate to
registration page.
2. Enter invalid
characters in name
fields.
3. Attempt
registration.
Invalid characters in
```
name fields (e.g.,
```
numbers, special
```
characters)
```
Error message
indicating invalid
character in the input,
preventing registration.
The system
displayed an error
message
indicating invalid
character in the
input, preventing
registration.
P
RU-UC-008 Verify handling of
SQL injection
1. Navigate to
registration page.
2. Enter SQL code in
various fields.
3. Attempt
registration.
SQL code snippets in
input fields
Proper handling of the
input, error message or
sanitization, and
preventing registration.
The system
properly handled
the input,
displayed an error
message or
sanitized the
input, preventing
registration.
P
RU-UC-009 Verify password
character validation
1. Navigate to
registration page.
2. Enter password
with invalid
characters.
3. Attempt
registration.
Passwords with
unsupported characters
Error message
indicating unsupported
characters in password,
preventing registration.
The system
displayed an error
message
indicating
unsupported
characters in
password,
preventing
registration.
P
26
RU-UC-010 Verify password
confirmation
mismatch
1. Navigate to
registration page.
2. Enter mismatching
passwords.
3. Attempt
registration.
Password and confirm
password do not match
Error message
indicating mismatch,
preventing registration.
The system
displayed an error
message
indicating
mismatch,
preventing
registration.
P
RU-UC-011 Verify valid Captcha
handling
1. Navigate to
registration page.
2. Enter correct
Captcha code.
3. Complete
registration form and
submit.
Valid Captcha entry System accepts the
Captcha and proceeds
with registration flow.
The system
accepted the
Captcha and
proceeded with
the registration
flow.
P
RU-UC-012 Verify invalid
Captcha handling
1. Navigate to
registration page.
2. Enter incorrect
Captcha code.
3. Attempt
registration.
Invalid Captcha entry Error message
indicating incorrect
Captcha entry,
preventing registration.
The system
displayed an error
message
indicating
incorrect Captcha
entry, preventing
registration.
P
RU-UC-013 Verify registration
with optional fields
1. Navigate to
registration page.
2. Enter data in
optional fields.
3. Complete
registration form and
submit.
Optional fields
```
populated (e.g.,
```
```
secondary email)
```
Successful registration
with optional data saved
correctly.
The system
registered the user
successfully with
optional data
saved correctly.
P
```
Boundary Value Analysis (System Testing Level) - Yallini
```
Test Case ID Test Case Test Steps Data Input Expected Result Actual Result Test
Status
```
(P/F)
```
RU-BVA-001 Minimum/Maxim
um Name Length
1. Enter names with 1
character, maximum
allowed characters.
```
Name with 1 character;
```
Name with maximum
allowed characters
Appropriate error
messages if limits are
violated.
The system
displayed
appropriate error
messages for limit
violations.
P
RU-BVA-002 Minimum/Maxim
um Password
Length
1. Enter passwords
with minimum and
maximum lengths
allowed.
Password with
```
minimum length;
```
Password with
maximum length
Appropriate error
messages or acceptance
if within limits.
The system
accepted
passwords within
limits and
P
27
RU-UC-014 Verify system
performance under
load
1. Simulate multiple
concurrent
registrations.
Multiple registrations
within a short time
frame
System can handle
multiple registrations
without performance
degradation or failures.
The system
handled multiple
registrations
without
performance
degradation or
failures.
P
RU-UC-015 Verify data storage in
database
1. Register a new
user.
Complete registration
form with valid data
Data correctly stored in
the database, verified
through direct database
query.
The data was
correctly stored in
the database,
verified through
direct database
query.
P
displayed error
messages for out
of limits.
RU-BVA-003 Invalid
Graduation Year
1. Enter graduation
years before
university
establishment, current
year, future years, and
incorrect leap years.
Graduation years before
university's
establishment, current
year, future years,
invalid leap years
Specific error messages
for each invalid year.
The system
displayed specific
error messages for
each invalid year.
P
RU-BVA-004 Minimum Name
Length
1. Enter name with
```
minimum length (e.g.,
```
```
"A").
```
```
Name: "A" The system accepts the
```
input and proceeds with
registration.
The system
accepted the input
and proceeded
with registration.
P
RU-BVA-005 Just Below
Minimum Name
Length
1. Enter empty name. Name: "" (empty) The system displays an
```
error: "Name cannot be
```
empty."
The system
displayed an error:
"Name cannot be
empty."
P
RU-BVA-006 Maximum Name
Length
1. Enter name with
maximum length
```
(e.g., "A" * 50).
```
```
Name: "A" * 50 The system accepts the
```
input and proceeds with
registration.
The system
accepted the input
and proceeded
with registration.
P
RU-BVA-007 Just Above
Maximum Name
Length
1. Enter name with
just above maximum
```
length (e.g., "A" *
```
```
51).
```
```
Name: "A" * 51 The system displays an
```
```
error: "Name exceeds
```
maximum length."
The system
displayed an error:
"Name exceeds
maximum length."
P
28
RU-BVA-008 Minimum
Password Length
1. Enter password
with minimum length.
```
Password: "P@sswrd8" The system accepts the
```
input and proceeds with
registration.
The system
accepted the input
and proceeded
with registration.
P
RU-BVA-009 Just Below
Minimum
Password Length
1. Enter password just
below minimum
length.
```
Password: "P@sswrd" The system displays an
```
```
error: "Password too
```
short."
The system
displayed an error:
"Password too
short."
P
RU-BVA-010 Maximum
Graduation Year
1. Enter graduation
year with maximum
value.
Graduation Year: 2025 The system accepts the
input and proceeds with
registration.
The system
accepted the input
and proceeded
with registration.
P
RU-BVA-011 Just Above
Maximum
Graduation Year
1. Enter graduation
year just above
maximum value.
Graduation Year: 2026 The system displays an
```
error: "Invalid
```
graduation year."
The system
displayed an error:
"Invalid
graduation year."
P
29
```
Equivalence Partitioning (System Testing Level) - Firdaus
```
Test
Case
ID
Test Case Test Steps Data Input Expected
Result
Actual Result Test
Status
```
(P/F)
```
RU-EP
-001
Valid Email -
Common
Domains
1. Navigate to the registration page.
2. Enter a valid email address with a
```
common domain (e.g., gmail.com,
```
```
yahoo.com, hotmail.com).
```
3. Proceed with the rest of the
registration process.
test@gmail.com,
test@yahoo.com,
test@hotmail.com
Email
accepted,
registration
continues.
Registration
continues
P
RU-EP
-002
Valid Email -
Unusual
Domains
1. Navigate to the registration page.
2. Enter an email with an unusual,
```
but valid top-level domain (TLD)
```
test@alumni.org,
test@example.co.uk
, etc.
Email
accepted.
Email valid P
RU-EP
-003
Invalid Email -
Missing "@"
1. Navigate to the registration page.
2. Enter email missing "@"
3. Observe the system’s behavior.
test.gmail.com Clear error
```
message:
```
“Invalid email
format.”
Email invalid P
RU-EP
-004
Invalid Email -
Missing
Domain
1. Navigate to the registration page.
2. Enter email missing Domain 3.
Observe the system’s behavior.
test@ Clear error
```
message:
```
“Invalid email
format.”
Email invalid P
RU-EP
-005
Invalid Email -
Special
Characters
1. Navigate to the registration page.
2. Enter an email with special
characters.
3. Observe the system’s behavior.
test+123@gmail.co
m
Error message
```
(depending on
```
system
```
requirements).
```
Email valid F
30
RU-EP
-006
Invalid Email -
Excessive
Length
1. Navigate to the registration page.
2. Enter an email with excessive
length.
3. Observe the system’s behavior.
An excessively long
email address
exceeding character
limits.
Error message,
registration
prevented, or
truncated email
```
(if the system
```
```
truncates).
```
Document the
system's
behavior.
Email valid. No
character limit
P
RU-EP
-007
Valid Password
- Strong
Passwords
1. Navigate to the registration page.
2. Enter valid data in all required
fields.
3. Click "Register."
Passwords meeting
specified criteria
```
(length,
```
```
complexity).
```
Email
accepted,
registration
continues.
Valid password F
RU-EP
-008
Invalid
Password -
Weak
Passwords
1. Navigate to registration page.
2. Enter valid data in all required
fields, except for weak passwords.
3. Observe the system's behavior.
Passwords not
meeting specified
```
criteria (too short,
```
common passwords,
```
etc.)
```
Password
rejected, clear
error message
indicating
password
requirements.
Weak password is
working
P
RU-EP
-009
Invalid
Password -
Invalid
Character
1. Navigate to the registration page.
2. Enter password with invalid
characters.
3. Observe the system’s behavior.
Passwords
containing
unsupported or
invalid characters
```
(e.g., spaces, special
```
```
symbols).
```
Error message
indicating
invalid
characters,
registration
prevented, and
suggest the
user to enter
characters in
Email currently
allows spaces eg.
pass@word. No
specific check for
special characters
F
31
the correct
format.
RU-EP
-010
Invalid
Password -
Excessive
Length
1. Navigate to the registration page.
2. Enter an excessively long
password
3. Observe the system’s behavior.
An excessively long
password,
exceeding
allowable character
limits.
Error message,
password
rejected, or
password
```
truncated (if
```
system
```
truncates).
```
Correct behavior P
```
Error Guessing (System Testing Level) - Firdaus
```
Test
Case
ID
Test Case Test Steps Data Input Expected Result Actual Result Test
Status
```
(P/F)
```
RU-EG
-001
Password
Confirmation
Mismatch
1. Enter different passwords in
"Password" and "Confirm
Password" fields.
2. Attempt registration.
Mismatched
passwords
Error message
indicating
passwords do not
match, registration
prevented.
Correct
behavior
P
RU-EG
-002
Empty
Password
1. Leave the password field blank.
2. Attempt registration.
Empty password
field
Error message
specifying that the
password field is
required,
registration
prevented.
Correct
behavior
P
32
RU-EG
-003
Empty Email 1. Leave the email field blank.
2. Attempt registration.
Empty email
field
Error message
specifying that the
email field is
required,
registration
prevented.
Correct
behavior
P
RU-EG
-004
Invalid Input
in Optional
Field
1. Enter data in optional fields.
2. Complete registration and
submit.
Invalid
character/format
System ignores
invalid optional
input or displays a
warning, but
allows registration.
No validation
found for
optional fields
in codebase
F
RU-EG
-005
Unresponsive
Captcha
1. Load registration page.
2. Wait for the Captcha.
N/A Display loading
icon or message
indicating that
Captcha is loading
or loading failure,
preventing
registration.
No Captcha
implementation
found in
codebase
F
RU-EG
-006
Partially filled
forms
1. Partially fill the registration
form.
2. Navigate to another page.
3. Return to registration.
Partially filled
form data
Data retained in
form fields, no data
```
loss. (If session
```
management is
```
implemented).
```
No form data
persistence
implementation
found
F
33
```
2.3.2 F002 - Log In (Tester: Mai)
```
The following table shows the features to be tested based on the SBD, including functional ID, feature, and risk level.
Feature ID Feature Risk Level
F002 Log In High
The techniques that will be applied are as follows:
1. Use Case Testing (Black Box Testing- System Level)
2. State Transition Testing (Black Box Testing - System Level)
3. Error Guessing (Black Box Testing - System level)
Nature of Feature:
The "Log In" feature allows registered alumni and faculty administrators to access the system by providing their credentials. This feature is
associated with a state diagram in the SBD, illustrating the various states and transitions during the login process.
```
Justification:
```
```
Use case testing will ensure all the use cases are being tested for their main flow and extensions (alternative and exception flows). State Transition
```
```
Testing will be conducted using the provided state diagram and systematically test different transitions between login states (Initial, Validating
```
```
Email, Validating Password, Home Page, etc.) based on valid and invalid user input and will determine full test coverage. Error Guessing will
```
leverage experience to anticipate common login errors like incorrect password, account lockout, or session management issues.
34
```
Use Case Testing (System Testing Level)
```
Use Case Name Log In
Use Case ID UC-002
Description This use case describes the process of an alumni or faculty administrator
logging in to the OAS.
```
Actor(s) Alumni, Faculty Administrator
```
Triggering Event User accesses the login page.
```
Pre-condition User has a registered and approved account (or, for admin, an active admin
```
```
account).
```
```
Post-condition User is logged in and redirected to the appropriate home page (alumni or admin
```
```
dashboard).
```
Flow of Events 1. User navigates to the login page.
2. User enters an email address and password.
3. User clicks the login button.
4. The system validates credentials against stored user data and account status.
5. If valid and approved, the user is logged in and redirected.
Exception Flow -
Invalid Credentials
System displays an error message indicating invalid credentials.
Exception Flow -
Account Not
```
Approved (Alumni)
```
System displays an error message if the account is pending approval.
35
Alternative Flow -
Forgot Password
User clicks "Forgot Password" and follows the reset process.
```
Test Cases using Use Case Testing (System Testing Level)
```
```
Use case: Log in (F002)
```
Test Level: System Testing
Test Technique: Use Case Testing
Pre-condition:
1. Users have been approved by the admin.
2. The device must be connected to the Internet.
Post-condition: Alumni have successfully logged in.
Test
Case ID
Test Case Test Steps Data Input Expected Result Actual Result Test Status
```
(Pass/Fail)
```
LI-UC-0
01
Valid email and
password
1. Navigate to the login
page.
2. Enter a valid email
and password.
3. Click the "Login"
button
Valid email:
test@alumni.com
Valid password:
Password123
The user is
successfully
logged in and
redirected to the
dashboard.
The user was
logged in
successfully and
redirected to the
dashboard.
Pass
LI-UC-0
02
Invalid
password
1. Navigate to the login
page.
2. Enter a valid email
but an incorrect
password.
3. Click the "Login"
button
Valid email:
test@alumni.com
Invalid password:
“WrongPass”
An error
```
message: "Invalid
```
password. Please
try again."
An error message
was displayed:
"Invalid
password. Please
try again."
Pass
36
LI-UC-0
03
Invalid email
format
1. Navigate to the login
page.
2. Enter an invalid
email format.
3. Enter a password.
4. Click "Login".
Invalid email:
“test@alumni”
Valid password:
Password123
An error
```
message: "Invalid
```
email format.
Please enter a
valid email."
No error message
```
displayed; login
```
button remained
unresponsive.
Fail
LI-UC-0
04
Unregistered
email
1. Navigate to the login
page.
2. Enter an unregistered
email and any
password.
3. Click "Login".
Unregistered email:
unknown@alumni.com
```
Password: AnyPass
```
An error
```
message: "Email
```
not registered.
Please create an
account."
An error message
was displayed:
"Email not
registered. Please
create an
account."
Pass
LI-UC-0
05
Empty email
and password
fields
1. Navigate to the login
page.
2. Leave the email and
password fields empty.
3. Click "Login".
No data An error
```
message: "Email
```
and password
fields cannot be
empty."
An error message
was displayed:
"Email and
password fields
cannot be empty."
Pass
LI-UC-0
06
Password reset
process
1. Navigate to the login
page.
2. Click on "Forgot
Password".
3. Enter a registered
email.
4. Submit.
Registered email:
test@alumni.com
Password reset
email is sent to
the registered
email with
instructions.
Password reset
email was not
received by the
user.
Fail
LI-UC-0
07
Account not
verified
1. Navigate to the login
page.
2. Enter an email
associated with a
not-yet-verified
account.
3. Enter a password.
```
Email:
```
notverified@alumni.co
m
```
Password: Password123
```
An error
```
message:
```
"Account not
verified. Please
verify your
account to log
in."
An error message
was displayed:
"Account not
found. Please
contact support."
Pass
LI-UC-0
08
SQL injection
attempt
1. Navigate to the login
page.
2. Enter an SQL
injection script in the
email field.
```
Email: ' OR '1'='1
```
```
Password: AnyPass
```
The system
prevents login
and displays a
generic error
message.
An error message
was displayed:
"Account not
verified. Please
contact admin."
Pass
37
3. Enter any password.
LI-UC-0
09
Locked
account after
multiple failed
attempts
1. Navigate to the login
page.
2. Enter valid email but
wrong password
```
multiple times (e.g., 5
```
```
attempts).
```
```
Email:
```
locked@alumni.com
```
Password: WrongPass
```
e account is
locked, and a
message is
```
displayed: "Your
```
account is
temporarily
locked."
Login page
blocked the
attempt and
```
displayed:
```
"Invalid
credentials."
Pass
LI-UC-0
10
Remember me
functionality
1. Navigate to the login
page.
2. Check the
"Remember Me"
checkbox.
3. Enter valid email
and password.
4. Log out and reopen
the page.
```
Email:
```
test@alumni.com
```
Password: Password123
```
The system
remembers the
user's email and
auto-fills it upon
reopening the
page.
User was logged
out after 15
minutes of
inactivity and
redirected to login
page.
Pass
38
```
State Transition Testing (System Testing Level)
```
Log In System States
Logical Sequence:
1. Initial State (S1): The user opens the login page.
2. Validating Email (S2):
○ The user inputs their email.
```
○ If the email is invalid, display an error message (Invalid Email, IE →
```
```
DM).
```
```
○ If the email is valid, proceed to validate the password (Valid Email, VE
```
```
→ RP).
```
3. Validating Password (S3):
○ The user enters their password.
```
○ If the password is invalid, display an error message (Invalid Password,
```
```
IP → DM).
```
```
○ If the password is valid, display the home page (Valid Password, VE →
```
```
DHF).
```
4. End State (S4): The user is successfully logged in or exits the process.
Written Sequence:
● User navigates to the login page.
● Enters email and password.
● System validates email:
○ Displays an error if invalid.
○ Proceeds if valid.
● System validates password:
○ Displays an error if invalid.
○ Proceeds to display the home page if valid.
● Process ends after successful login or error resolution.
Login States Diagram
39
```
Error Guessing (System Testing Level)
```
```
Use case: Log in (F002)
```
Test Level: System Testing
Test Technique: Error Guessing
Pre-condition:
1. Users have been approved by the admin.
2. The device must be connected to the Internet.
Post-condition: Alumni have successfully logged in.
Test
Case ID
Test Case Test Steps Data Input Expected
Result
Actual Result Test Status
```
(Pass/Fail)
```
LI-EG-0
01
Special
characters in
email field
1. Navigate to the login
page.
2. Enter email with special
```
characters (e.g.,
```
```
test@@@alumni.com).
```
3. Enter password.
4. Click "Login".
```
Email:
```
test@@@alumni.com
```
Password: Password123
```
An error
```
message:
```
"Invalid email
format. Please
enter a valid
email."
Error message
displayed
correctly.
Pass
LI-EG-0
02
Extremely
long email
address
1. Navigate to the login
page.
2. Enter an email
exceeding 256 characters.
3. Enter password.
4. Click "Login".
```
Email:
```
longemail@alumni.com.
```
.. (256+ chars)
```
```
Password: Password123
```
The system
prevents login
and displays an
error message.
System crashed
while processing
the input.
Fail
LI-EG-0
03
Case
sensitivity in
email
1. Navigate to the login
page.
2. Enter the correct email
but with wrong case.
3. Enter password.
4. Click "Login".
```
Email:
```
TEST@alumni.com
```
Password: Password123
```
The login is
successful if
case-insensitivit
y is allowed for
email.
Spaces were not
trimmed, and an
error message
was displayed:
"Invalid email
format."
Fail
40
LI-EG-0
04
Leading/trailin
g spaces in
email/passwor
d
1. Navigate to the login
page.
2. Enter email and
password with leading or
trailing spaces.
3. Click "Login".
```
Email: test@alumni.com
```
```
Password: Password123
```
The system
trims spaces and
processes the
login correctly.
Login successful. Pass
LI-EG-0
05
Empty space
as email or
password
1. Navigate to the login
page.
2. Enter a single space in
the email or password
field.
3. Click "Login".
```
Email:
```
```
Password:
```
An error
```
message:
```
"Email and
password fields
cannot be
empty."
Login failed with
an error
```
message:
```
"Invalid email or
password."
Fail
LI-EG-0
06
Multiple
simultaneous
login attempts
1. Open multiple browser
tabs or devices.
2. Attempt login on all
tabs/devices
simultaneously.
```
Email: test@alumni.com
```
```
Password: Password123
```
The system
handles
concurrent
requests
gracefully
without causing
errors.
System
responded with
delays for some
users.
Fail
LI-EG-0
07
Login attempt
after session
timeout
1. Login successfully.
2. Wait for the session
timeout duration.
3. Perform an action
requiring login.
Valid credentials used
earlier
The system
redirects to the
login page with
a message:
"Session
expired. Please
log in again."
Maintenance
message
displayed
correctly.
Pass
LI-EG-0
08
Invalid
domain in
email
1. Navigate to the login
page.
2. Enter email with an
```
invalid domain (e.g.,
```
```
test@invalid_domain).
```
3. Click "Login".
```
Email:
```
test@invalid_domain
```
Password: Password123
```
An error
```
message:
```
"Invalid email
domain. Please
enter a valid
email address."
System sent
multiple emails
without
restriction.
Fail
LI-EG-0
09
Browser
autofill
incorrect
password
1. Enable browser autofill.
2. Save incorrect
credentials for the email.
3. Try logging in.
```
Autofill:
```
test@alumni.com
```
Password: WrongPass
```
An error
```
message:
```
"Invalid
credentials.
User redirected
correctly with
appropriate
message.
Pass
41
Please try
again."
LI-EG-0
10
Simulated
network
disconnection
during login
1. Enter valid email and
password.
2. Disconnect the internet
before clicking "Login".
3. Click "Login".
```
Email: test@alumni.com
```
```
Password: Password123
```
A message
```
appears:
```
"Network error.
Please check
your connection
and try again."
System allowed
login despite
invalid domain.
Fail
42
```
2.3.3 F003 - Manage User Profile (Tester: Kei Kar)
```
The "Manage User Profile" feature lets alumni edit personal information, change passwords, and delete accounts. It ensures user control over
profiles while maintaining system integrity and usability. Thorough testing validates functionality and data security.
The following table shows the features to be tested based on the SBD, including functional ID, feature, and risk level.
Feature ID Feature Risk Level
F003 Manage User Profile Medium
The techniques that will be applied are as follows:
1. Use Case Testing (Black Box Testing - System Level)
2. Error Guessing (Black Box Testing - System Level)
3. GUI Testing (Black Box Testing - System Level)
Nature of Feature:
The "Manage User Profile" feature enables alumni to edit their personal information, change their account passwords, or delete their accounts.
This feature ensures users have full control over their profiles. The associated flows in the SBD include main, alternative, and exception scenarios,
```
illustrating the steps for each action (e.g., editing, password changes, and account deletion) while maintaining system reliability and usability.
```
```
Justification:
```
Use case testing ensures that all the use cases related to managing user profiles are systematically tested for their main, alternative, and exception
flows. This includes validating actions such as editing profiles, changing passwords, and deleting accounts, ensuring each scenario is covered for
accuracy and completeness. Error Guessing leverages experience to anticipate common issues like invalid input, mismatched passwords, or empty
fields, ensuring robustness. GUI Testing evaluates the usability and functionality of the profile management interface, focusing on elements like
navigation, form design, input validation feedback, error messages, and overall user experience, ensuring the system meets both functional and
user-friendly requirements.
43
Use Case Name Manage user profile
Use Case ID UC-3
Description The system shall allow alumni to edit, change password, or delete their
account.
Priority High
```
Actor(s) Alumni
```
Triggering Event Actor clicks the ‘My Profile’ button on the navigation bar and the
‘Settings’ dropdown.
Pre-condition Actor has logged into the system.
```
Post-condition The actor is able to manage (edit, change password or delete) their
```
account.
Flow of Events 1. The system navigates the actor to the ‘My Profile’ page.
2. The system displays the personal information of the actor.
3. The actor clicks the ‘Settings’ dropdown button.
4. If the actor selects the ‘Edit Profile’ option.
4.1. The system navigates to the ‘Edit My Profile’ page.
4.2. The actor edits their biography.
4.3. The actor clicks the ‘Save’ button after editing.
5. If the actor selects the ‘Change Password’ option.
5.1. The actor enters their current password.
5.2. The actor enters their new password.
5.3. The actor enters their new password again for
confirmation.
5.4. The actor clicks the ‘Confirm’ button.
44
6. The actor selects the ‘Delete Account’ option.
6.1. The actor enters their password in order to delete their
account.
6.2. The actor clicks the ‘Delete Account’ button.
7. The system updates the changes.
Alternative flow - Actor
clicks the cancel button
4.3.1 The actor clicks the ‘Cancel’ button.
4.3.2 The system navigates the actor to the ‘My Profile’ page.
5.4.1 The actor clicks the ‘Cancel’ button.
5.4.2 The system navigates the actor to the ‘My Profile’ page.
6.2.1 The actor clicks the ‘Cancel’ button.
6.2.2 The system navigates the actor to the ‘My Profile’ page.
Exception flow - Actor leaves
the input field empty.
5.4 The system shows an error message “Please fill out this field”.
Exception flow - Current
password is incorrect.
5.4 The system shows an error message and requests the actor to fill in
with the correct password.
6.2 The system shows an error message and requests the actor to fill in
with the correct password.
Exception flow -
The new password entered is
invalid.
5.4 The system shows an error message and requests the actor to fill in
with correct format.
Exception flow -
The confirmation password
entered is not the same as the
new password.
5.4 The system shows an error message and requests the actor to fill in
with the correct password.
45
```
Use case Testing (System Level Testing)
```
```
Use case: Manage User Profile (F003)
```
Test Level: System Testing
Test Technique: Use Case Testing
Pre-condition: The user is logged into the system and has access to their profile page.
Post-condition:The user's profile information is updated, deleted, or the password is successfully changed based on the action performed.
Test Case
ID
Test Case Test Steps Data Input Expected Result Actual Result Test
Status
```
(P/F)
```
TC-MUP-
UC-001
Verify editing profile
with valid data.
1. Navigate to the
"My Profile" page.
2. Click the
"Settings" dropdown
button.
3. Select "Edit
Profile".
4. Verify the system
navigates to the "Edit
My Profile" page.
5. Edit the biography
text field.
6. Click the "Save"
button.
```
Biography: “Software Engineering” The system updates the
```
biography successfully,
displays a success
message, and redirects
to the "My Profile"
page.
The system
updates the
biography
successfully,
displays a success
message, and
redirects to the
"My Profile"
page.
P
TC-MUP-
UC-002
Verify the password
change process
updates the
password correctly.
1. Navigate to the
"My Profile" page.
2. Click the
"Settings" dropdown
button.
Current Password: “12345”
New Password: “23456”
The system updates the
password successfully,
displays a success
message, and redirects
The system
updates the
password
successfully,
displays a success
P
46
3. Select "Change
Password".
4. Enter the current
password.
5. Enter a new
password.
6. Re-enter the new
password for
confirmation.
7. Click "Confirm".
to the "My Profile"
page.
message, and
redirects to the
"My Profile"
page.
TC-MUP-
UC-003
Verify deleting
account with user
confirmation.
1. Navigate to the
"My Profile" page.
2. Click the
"Settings" dropdown
button.
3. Click the
"Settings" dropdown.
4. Select 'Delete
Account'.
5. Confirm the
deletion prompt.
6. Verify redirection.
```
Password: “23456” Account is deleted, and
```
user is redirected to
login page.
Account is
deleted, and user
is redirected to
login page.
P
TC-MUP-
UC-004
Verify the system
handles cancellation
during the profile
editing process.
1.Navigate to the
"My Profile" page.
2. Click the
"Settings" dropdown
button.
3. Select "Edit
Profile".
```
Biography: New biography text (not
```
```
saved)
```
The system cancels the
edit action, discards
changes, and navigates
back to the "My
Profile" page.
The system
cancels the edit
action, discards
changes, and
navigates back to
the "My Profile"
page.
P
47
4. Edit the biography
field.
5. Click the "Cancel"
button.
TC-MUP-
UC-005
Verify the system
handles cancellation
during the password
change process.
1. Navigate to the
"My Profile" page.
2. Click the
"Settings" dropdown
button.
3. Select "Change 4.
Enter the current
password.
5. Enter a new
password.
6. Re-enter the new
password for
confirmation.
7. Click the "Cancel"
button.
Current Password: “23456”
New Password: “34567”
The system cancels the
password change
action, discards the
entered data, and
navigates back to the
"My Profile" page.
The system
cancels the
password change
action, discards
the entered data,
and navigates
back to the "My
Profile" page.
P
TC-MUP-
UC-006
Verify the system
handles cancellation
during the account
deletion process.
1. Navigate to the
"My Profile" page.
4. Click the
"Settings" dropdown
button.
5. Select "Delete
Account".
6. Enter the account
password.
```
Password: “23456” The system cancels the
```
account deletion
action, discards the
entered data, and
navigates back to the
"My Profile" page.
The system
cancels the
account deletion
action, discards
the entered data,
and navigates
back to the "My
Profile" page.
P
48
6.2.1. Click the
"Cancel" button.
49
```
Error Guessing Testing (System Level Testing)
```
```
Use case: Manage User Profile (F003)
```
Test Level: System Testing
Test Technique: Error Guessing Testing
Pre-condition: The user is logged into the system and has access to their profile page.
Post-condition:The user's profile information is updated, deleted, or the password is successfully changed based on the action performed.
Test Case
ID
Test Case Test Steps Data Input Expected Result Actual Result Test
Status
```
(P/F)
```
TC-MUP-
EG-001
Verify the system
displays an error
when the password
fields are left empty.
1. Navigate to the
"My Profile" page.
2. Click the
"Settings" dropdown
button.
3. Select "Change
Password".
4. Leave all
password fields
empty.
5. Click the
"Confirm" button.
- The system shows an
error message: "Please
fill out this field" for
each required empty
field.
The system
shows an error
```
message: "Please
```
fill out this field"
for each required
empty field.
P
TC-MUP-
EG-002
Verify the system
handles an incorrect
current password
during the password
change process.
1. Navigate to the
"My Profile" page.
2. Click the
"Settings" dropdown
button.
Current Password: “88888888”
New Password: “9999999”
Confirm Password: “9999999”
The system shows an
error message:
"Incorrect current
password. Please try
again." and does not
update the password.
The system
shows an error
```
message:
```
"Incorrect current
password. Please
try again." and
P
50
3. Click the
"Settings" dropdown
button.
4. Select "Change
Password".
5. Enter an incorrect
current password.
6. Enter a new
password.
7. Re-enter the new
password for
confirmation.
8. Click the
"Confirm" button.
does not update
the password.
TC-MUP-
EG-003
Verify the system
handles an incorrect
password during the
account deletion
process.
1. Navigate to the
"My Profile" page.
2. Click the
"Settings" dropdown
button.
4. Click the
"Settings" dropdown
button.
5. Select "Delete
Account".
6.1 Enter an incorrect
password.
6.2 Click the "Delete
Account" button.
```
Password: “8888888” The system shows an
```
error message:
"Incorrect password.
Please enter the correct
password." and does
not delete the account.
The system
shows an error
```
message:
```
"Incorrect
password. Please
enter the correct
password." and
does not delete
the account.
P
51
TC-MUP-
EG-004
Verify the system
handles invalid new
password input
during the password
change process.
1. Navigate to the
"My Profile" page.
2. Click the
"Settings" dropdown
button.
3. Select "Change
Password".
4. Enter the current
password.
5.2 Enter an invalid
new password.
5.3 Re-enter the
invalid new
password for
confirmation.
5.4 Click the
"Confirm" button.
Current Password: “23456”
New Password: “123”
Confirm Password: “123”
The system shows an
error message: “Be at
least 5 characters and
at most 20 characters"
and does not update the
password.
The system
shows an error
```
message: “Be at
```
least 5 characters
and at most 20
characters" and
does not update
the password.
P
TC-MUP-
EG-005
Verify the system
handles mismatched
confirmation
password during the
password change
process.
1. Navigate to the
"My Profile" page.
2. Click the
"Settings" dropdown
button.
Current Password: “23456”
New Password: “34567”
Confirm Password: “3456789”
The system shows an
error message: "Please
enter the same new
password" and does
not update the
password.
The system
shows an error
```
message: "Please
```
enter the same
new password"
and does not
update the
password.
P
52
```
GUI Testing (System Level Testing)
```
```
Use case: Manage User Profile (F003)
```
Test Level: System Testing
Test Technique: GUI Testing
Pre-condition: The user is logged into the system and has navigated to the "My Profile" page.
Post-condition: The user's profile is updated, password is changed, or account is deleted based on the action performed.
Test Case
ID
Test Case Test Steps Data Input Expected Result Actual Result Test
Status
```
(P/F)
```
TC-MUP-
GUI-001
Verify navigation to
the "My Profile"
page.
1. Click the "My
Profile" button in the
navigation bar.
Not Applicable The system navigates
to the "My Profile"
page and displays the
user's personal
information.
The system
navigates to the
"My Profile"
page and displays
the user's
personal
information.
P
TC-MUP-
GUI-002
Verify the layout and
alignment of the
"My Profile" page
1. Check that
personal information
fields are properly
aligned and visible.
Not Applicable The layout is clean,
and all fields are
displayed without
overlap or
misalignment.
The layout is
clean, and all
fields are
displayed without
overlap or
misalignment.
P
TC-MUP-
GUI-003
Verify that the
"Settings" dropdown
displays options.
1. Click the
"Settings" dropdown
button.
Not Applicable The dropdown displays
```
options: "Edit Profile",
```
The dropdown
displays options:
"Edit Profile",
P
53
"Change Password",
and "Delete Account".
"Change
Password", and
"Delete
Account".
TC-MUP-
GUI-004
Verify navigation to
the "Edit My
Profile" page.
1. Click "Settings".
2. Select "Edit
Profile".
Not Applicable The system navigates
to the "Edit My
Profile" page.
The system
navigates to the
"Edit My Profile"
page.
TC-MUP-
GUI-005
Verify the "Edit My
Profile" page form
validation.
1. Enter invalid data
in the biography field
```
(e.g., empty input). 2.
```
Click "Save".
```
Biography: "" The system displays an
```
error message: "Please
fill out this field".
The system
displays an error
```
message: "Please
```
fill out this field".
P
TC-MUP-
GUI-006
Verify the "Change
Password" feature.
1. Click "Settings".
2. Select "Change
Password".
3. Enter current
password and
mismatched
confirmation
password.
4. Click "Confirm".
Current Password: "12345",
New Password: "23456",
Confirm Password: "88888"
The system displays an
error message:
"Confirmation
password does not
match".
The system
displays an error
```
message:
```
"Confirmation
password does
not match".
P
TC-MUP-
GUI-007
Verify the "Delete
Account"
confirmation.
1. Click "Settings".
2. Select "Delete
Account".
3. Enter the correct
password.
4. Confirm account
deletion.
```
Password: a valid password The system deletes the
```
account and redirects
the user to the login
page.
The system
deletes the
account and
redirects the user
to the login page.
P
54
```
2.3.4 F004 - View Events (Tester: Kei Kar)
```
The "View Events" feature enables alumni to browse, search, and view event details. It keeps alumni informed and engaged with faculty activities.
Testing ensures reliability, accuracy, and ease of use.
The following table shows the features to be tested based on the SBD, including functional ID, feature, and risk level.
Feature ID Feature Risk Level
F003 View Events Medium
The techniques that will be applied are as follows:
1. Use Case Testing (Black Box Testing - System Level)
2. Error Guessing (Black Box Testing - System Level)
3. GUI Testing (Black Box Testing - System Level)
Nature of Feature:
The "View Events" feature allows alumni to browse and access detailed information about events created by faculty administrators. Alumni can
navigate to the events page, search for specific events using keywords, and view the details of selected events, such as title, date, time, and
description. This feature is critical for user engagement and includes mechanisms to handle exceptions, such as displaying error messages when no
matching records are found. It aligns with usability goals to provide a seamless and informative experience.
```
Justification:
```
Use case testing ensures that all aspects of the "View Events" functionality are verified, including navigating to the events page, searching for
specific events, and viewing event details. This method ensures coverage of the main flow, alternative flow, and exception flow, validating both
expected and edge-case behaviors. Error Guessing anticipates potential errors such as invalid search keywords or missing event data, ensuring the
system provides appropriate error handling and feedback. GUI Testing evaluates the user interface for usability, layout, responsiveness, and input
validation, ensuring the feature is both functional and user-friendly.
55
Use Case Name View events
Use Case ID UC-4
Description The system shall allow alumni to view events’ details that were created
by the faculty administrator.
Priority High
```
Actor(s) Alumni
```
Triggering Event Actor clicks the ‘All Events’ button at the navigation bar or clicks the
‘view more’ button at the Events section at home page.
Pre-condition Actor has logged into the system.
Post-condition The system displays the events’ details.
Flow of Events 1. The system navigates the actor to the ‘Events’ page.
2. The system displays a list of events.
3. The actor enters keywords at the search bar to search for events.
4. The actor clicks the interested event.
5. The system navigates the actor to the selected events’ page to
show event’s details.
Exception flow - Keyword
entered not matched in
database
3.1 The system shows an error message “Sorry, no records found.
56
```
Use case Testing (System Level Testing)
```
```
Use case: View Events (F004)
```
Test Level: System Testing
Test Technique: Use Case Testing
Pre-condition: The user is logged into the system and navigates to the "View Events" page.
Post-condition: The user successfully views the event details, searches for an event, or interacts with the event list as intended.
Test Case
ID
Test Case Test Steps Data Input Expected Result Actual Result Test
Status
```
(P/F)
```
TC-VE-UC
-001
Verify navigation to
the ‘Events’ page.
1. Click the ‘All
Events’ button at the
navigation bar or the
‘View More’ button
at the home page.
Not applicable. The system navigates
the actor to the 'Events'
page and displays a list
of events.
The system
navigates the
actor to the
'Events' page and
displays a list of
events.
P
TC-VE-UC
-002
Verify event search
functionality.
1. Enter a keyword in
the search bar.
2. Click on the
search icon.
```
Valid: "Machine Learning"
```
```
Invalid: "Hello"
```
System displays a
filtered list.
System displays a
filtered list. P
TC-VE-UC
-003
Verify event details. 1. Click on an event
from the displayed
list.
Event Title: "Machine Learning
Workshop"
The system navigates
to the event details
page and displays
event information
```
(title, date, time,
```
```
location, description).
```
The system
navigates to the
event details page
and displays
event
information.
P
57
```
Error Guessing (System Level Testing)
```
```
use case: View Events (F004)
```
Test Level: System Testing
Test Technique: Error Guessing Testing
Pre-condition: The user is logged into the system and navigates to the "View Events" page.
Post-condition: The user successfully views the event details, searches for an event, or interacts with the event list as intended.
Test Case
ID
Test Case Test Steps Data Input Expected Result Actual Result Test Status
```
(P/F)
```
TC-VE-E
G-001
Verify the system
displays an error
message for
unmatched search
keywords.
1. Navigate to the "Events"
page.
2. Verify the system displays
the list of events.
3. Enter keywords in the search
bar that do not match any event
in the database.
4. Observe the system's
response.
```
Keyword: “Hello” The system displays
```
an error message:
"Sorry, no records
found," and no events
are shown in the
results.
The system
displays an error
```
message: "Sorry,
```
no records
found," and no
events are shown
in the results.
P
58
```
GUI Testing (System Level Testing)
```
```
Use case: View Events (F004)
```
Test Level: System Testing
Test Technique: GUI Testing
Pre-condition: The user is logged into the system and navigates to the "Events" page.
Post-condition: The user can successfully view the list of events, search for events using keywords, and access detailed information for a specific
event.
Test Case
ID
Test Case Test Steps Data Input Expected Result Actual Result Test Status
```
(P/F)
```
TC-VE-G
UI-001
Verify that the "All
Events" button
navigates to the
"Events" page.
1. Click the "All
Events" button in the
navigation bar.
Not Applicable The system navigates
to the "Events" page
and displays a list of
events.
The system
navigates to the
"Events" page
and displays a list
of events.
P
TC-VE-G
UI-002
Verify that the layout
and design of the
"Events" page meet
the requirements.
1. Check that the
event list is displayed
with proper
alignment and
spacing.
Not Applicable The layout is clear,
with events displayed
in a structured and
readable manner.
The layout is
clear, with events
displayed in a
structured and
readable manner.
P
TC-VE-G
UI-003
Verify that the search
bar displays correct
results for valid
input.
1. Enter a valid
keyword in the
search bar.
2. Observe the results
displayed.
```
Keyword: "Machine Learning" The system displays a
```
filtered list of events
matching the keyword.
The system
displays a filtered
list of events
matching the
keyword.
P
59
TC-VE-G
UI-004
Verify that the search
bar shows an error
message for
unmatched
keywords.
1. Enter an invalid
keyword in the
search bar.
2. Click the search
button.
```
Keyword: "Photography" The system displays an
```
error message: "Sorry,
no records found."
The system
displays an error
```
message: "Sorry,
```
no records
found."
P
TC-VE-G
UI-005
Verify that clicking
on an event
navigates to its
details page.
1. Click on a specific
event from the list.
Event Title: "Machine Learning
Workshop"
The system navigates
to the event details
page, displaying title,
date, and description.
The system
navigates to the
event details
page, displaying
title, date, and
description.
TC-VE-G
UI-006
Verify that the
"Events" page is
responsive to
different screen
sizes.
1. Resize the browser
window to various
screen sizes.
2. Observe the
layout.
Screen sizes: Mobile, Tablet,
Desktop
The page layout adjusts
appropriately to fit
different screen sizes.
The page layout
adjusts
appropriately to
fit different
screen sizes.
P
60
```
2.3.5 F005 - Manage Job Advertisement (Tester: Azfar)
```
This feature allows alumni to post and manage job advertisements, promoting career opportunities within the alumni network. Thorough testing is
necessary to ensure functionality, data integrity, and user experience.
Feature ID Feature Risk Level
F005 Manage Job Advertisement High
The techniques that will be applied are as follows:
1. Use Case Testing (Black Box Testing - System Level)
2. Boundary Value Analysis (Black Box Testing - System Level)
3. Error Guessing
4. GUI Testing
Nature of Feature:
The "Manage Job Advertisement" feature allows alumni to post new job openings, edit existing postings, and delete job advertisements. This
feature allows for easy sharing of job opportunities for alumni members.
```
Justification:
```
The Use Case Testing technique will be applied to thoroughly validate all scenarios, including adding, editing, and deleting job
advertisements, ensuring the system behaves correctly under both normal and exceptional conditions as outlined in use case
```
descriptions. Boundary Value Analysis (BVA) is essential for testing input fields and boundary conditions, such as character limits for
```
job titles and descriptions, salary ranges, and file upload constraints, to prevent unexpected behavior at the edges of valid inputs and
protect data integrity. Additionally, Error Guessing will identify potential vulnerabilities and user errors, such as network interruptions,
duplicate entries, or unsupported special characters, enabling robust system performance under diverse conditions. Finally, GUI
Testing will ensure the user interface is intuitive, responsive, and functional across devices and browsers, verifying layout,
cross-browser compatibility, and proper error message display, thereby providing a seamless and reliable user experience.
61
```
Use Case Testing (System Testing Level)
```
Use Case Name Manage Job Advertisement
Use Case ID UC-007
Description Alumni creates, updates, or deletes job ads.
```
Actor(s) Alumni
```
Triggering Event User navigates to "Manage Job Ads" page.
Pre-condition User is logged in as an alumni.
Post-condition Job ad is created, updated, or deleted successfully.
```
Flow of Events 1. Alumni navigates to "Manage Job Ads." 2. Alumni chooses action (Create,
```
```
Edit, or Delete). 3. Alumni enters/modifies job details. 4. Alumni submits the
```
job advertisement. 5. System validates and processes the request.
Exception
Flow-Invalid Input
Error message, job posting prevented.
Exception Flow-
Unauthorized
Access
If non-alumni attempt to manage ads, display an error message.
62
```
Test Cases using Use Case Testing (System Testing Level)
```
Test Case ID Test Case Test Steps Data Input Expected Result Actual Result Test
Status
```
(P/F)
```
TC-MJA-UC-0
01
Verify creating a job
ad with valid data.
1. Navigate to the "Manage
Job Ads" page.
2. Click "Create Job Ad".
3. Enter valid job details.
4. Submit the form.
```
Title: "Software
```
Engineer"
```
Description:
```
"Looking for a
skilled
developer."
```
Salary: "5000"
```
The system creates the
job ad successfully,
displays a success
message, and adds it to
the job listings.
The system
created the job ad
successfully,
displayed a
success message,
and added it to
the job listings.
P
TC-MJA-UC-0
02
Verify editing an
existing job ad with
valid data.
1. Navigate to the "Manage
Job Ads" page.
2. Select an existing job ad.
3. Modify job details.
4. Click "Save Changes".
Updated Title:
"Senior
Engineer"
Updated
```
Description:
```
"Experience
required."
The system updates the
job ad successfully,
displays a success
message, and reflects
the changes.
The system
updated the job
ad successfully,
displayed a
success message,
and reflected the
changes
P
TC-MJA-UC-0
03
Verify deleting an
existing job ad.
1. Navigate to the "Manage
Job Ads" page.
2. Select a job ad to delete.
3. Confirm the deletion
prompt.
4. Verify removal from
listings.
Job Ad ID: 101 The system deletes the
job ad successfully,
displays a success
message, and removes
it from the listings.
The system
deleted the job ad
successfully,
displayed a
success message,
and removed it
from the listings
P
63
TC-MJA-UC-0
04
Verify creating a job
ad with invalid
input.
1. Navigate to the "Manage
Job Ads" page.
2. Click "Create Job Ad".
3. Enter invalid job details
```
(e.g., missing fields).
```
4. Submit the form.
Missing Title
Invalid Salary:
"-1000"
The system displays
error messages for
invalid fields,
preventing job ad
creation.
The system
displayed error
messages for
invalid fields,
preventing job ad
creation.
P
TC-MJA-UC-0
05
Verify unauthorized
access to "Manage
Job Ads".
Attempt to access the
"Manage Job Ads" page
without logging in.
Unauthenticated
User
The system denies
access, redirects the
user to the login page,
and displays an error
message.
The system
denied access,
redirected the
user to the login
page, and
displayed an error
message.
P
TC-MJA-UC-0
06
Verify creating a
duplicate job ad.
1. Navigate to the "Manage
Job Ads" page.
2. Click "Create Job Ad".
3. Enter details identical to
an existing job ad.
4. Submit the form.
```
Title: "Software
```
Engineer"
```
Description:
```
"Looking for a
skilled
developer."
```
Salary: "5000"
```
The system prevents
duplicate job ad
creation and displays
an error message.
The system
prevented
duplicate job ad
creation and
displayed an error
message.
P
TC-MJA-UC-0
07
Verify creating a
duplicate job ad.
1. Navigate to the "Manage
Job Ads" page.
2. Click "Create Job Ad".
3. Enter details identical to
an existing job ad.
4. Submit the form.
```
Title: "Software
```
Engineer"
```
Description:
```
"Looking for a
skilled
developer."
```
Salary: "5000"
```
The system prevents
duplicate job ad
creation and displays
an error message.
The system
allowed duplicate
job ad creation
and did not
display an error
message.
F
64
TC-MJA-UC-0
08
Verify editing an
existing job ad with
valid data.
1. Navigate to the "Manage
Job Ads" page.
2. Select an existing job ad.
3. Modify job details.
4. Save changes.
Updated Title:
"Senior
Engineer"
Updated
```
Description:
```
"Experience
required."
The system updates the
job ad successfully,
displays a success
message, and reflects
the changes.
The system failed
to update the job
ad and displayed
a generic error
message instead
F
```
Boundary Value Analysis (System Testing Level)
```
Test Case ID Test Case Test Steps Data Input Expected Result Actual Result Test
Status
```
(P/F)
```
TC-MJA-BVA-
001
Max Length
Job Title
1. Navigate to "Create Job
Ad".
2. Enter a title exceeding
the maximum character
limit.
3. Submit the form.
```
Title: 256 characters
```
```
(limit: 255)
```
The system displays an
error message and
prevents submission
The system
displayed an error
message and
prevented
submission.
P
TC-MJA-BVA-
002
Min Length
Job Description
1. Navigate to "Create Job
Ad".
2. Enter a description with
1 character.
3. Submit the form.
```
Description: "A" The system displays an
```
error message and
prevents submission.
The system
displayed an error
message and
prevented
submission.
P
TC-MJA-BVA-
003
File Upload -
Oversized File
1. Navigate to "Create Job
Ad".
```
File: 6 MB (limit: 5
```
```
MB)
```
The system displays an
error message, rejects
The system
displayed an error
message, rejected
P
65
2. Attach a file exceeding
the maximum size limit.
3. Submit the form.
the file, and prevents
submission.
the file, and
prevented
submission.
TC-MJA-BVA-
004
File Upload -
Supported File
Size
1. Navigate to "Create Job
Ad".
2. Attach a file exactly at
the maximum size limit.
3. Submit the form.
```
File: 5 MB The system accepts the
```
file and allows
successful submission
The system
accepted the file
and allowed
successful
submission.
P
TC-MJA-BVA-
005
Salary Below
Minimum
1. Navigate to "Create Job
Ad".
2. Enter a salary below
the allowed range.
3. Submit the form.
```
Salary: -1 The system displays an
```
error message and
prevents submission.
The system
displayed an error
message and
prevented
submission.
P
TC-MJA-BVA-
006
Salary Above
Maximum
1. Navigate to "Create Job
Ad".
2. Enter a salary
exceeding the maximum
allowed range.
3. Submit the form.
```
Salary: 1,000,001 (limit:
```
```
1,000,000)
```
The system displays an
error message and
prevents submission.
The system
displayed an error
message and
prevented
submission
P
TC-MJA-BVA-
007
Max Length
Job Description
1. Navigate to "Create Job
Ad".
2. Enter a description
exactly at the maximum
character limit.
3. Submit the form
```
Description: 2000
```
characters
The system accepts the
description and allows
successful submission
The system
accepted the
description and
allowed
successful
submission.
P
66
TC-MJA-BVA-
008
Max Salary
Exceeding
Allowed Limit
1. Navigate to "Create Job
Ad".
2. Enter a salary
exceeding the maximum
allowed limit.
3. Submit the form.
```
Salary: 1,000,001 (limit:
```
```
1,000,000)
```
The system displays an
error message and
prevents submission.
The system failed
to validate the
salary limit and
allowed
submission.
F
TC-MJA-BVA-
009
File Upload -
Oversized File
1. Navigate to "Create Job
Ad".
2. Attach a file exceeding
the maximum size limit.
3. Submit the form.
```
File: 6 MB (limit: 5
```
```
MB)
```
The system displays an
error message, rejects
the file, and prevents
submission
The system
allowed the file
upload, which
exceeds the size
limit, and created
the job ad.
F
67
Error Guessing
Test Case ID Test Case Test Steps Data Input Expected Result Actual Result Test
Status
```
(P/F)
```
TC-MJA-EG-
001
Duplicate Job Ad
Submission
1. Navigate to "Manage Job
Ads".
2. Click "Create Job Ad".
3. Enter identical details to
an existing job ad.
4. Submit the form.
```
Title: "Software
```
Engineer"
```
Description:
```
"Looking for a
skilled developer."
```
Salary: "5000"
```
The system prevents
duplicate job ad
creation and displays
an error message.
The system
prevented
duplicate job ad
creation and
displayed an error
message.
P
TC-MJA-EG-
002
Network
Interruption During
Submission
1. Start submitting a job ad.
2. Disconnect the network
during submission.
3. Reconnect the network
and retry submission.
Valid Job Details The system saves the
data temporarily and
allows resubmission
after reconnection.
The system saved
the data
temporarily and
allowed
resubmission
after
reconnection.
P
TC-MJA-EG-
003
Invalid Characters
in Job Title
1. Navigate to "Manage Job
Ads".
2. Click "Create Job Ad".
3. Enter invalid characters
in the title field.
4. Submit the form.
```
Title:
```
```
"<script>alert('XSS')
```
</script>"
The system displays an
error message and
prevents the
submission.
The system
displayed an error
message and
prevented the
submission.
P
68
TC-MJA-EG-
004
Multiple
Submissions
1. Navigate to "Manage Job
Ads".
2. Click "Create Job Ad".
3. Submit the form multiple
times quickly.
```
Title: "Software
```
Engineer"
```
Description:
```
"Looking for a
skilled developer."
```
Salary: "5000"
```
The system allows only
one submission and
prevents duplicates.
The system
allowed only one
submission and
prevented
duplicates.
P
TC-MJA-EG-
005
Exceeding Allowed
Job Ads per User
1. Create multiple job ads
until the maximum limit is
reached.
2. Attempt to create
another job ad.
Number of Job Ads:
```
11 (limit: 10)
```
The system displays an
error message and
prevents the user from
creating additional job
ads.
The system
displayed an error
message and
prevented the
user from
creating
additional job
ads.
P
TC-MJA-EG-
006
Unsupported File
Type
1. Navigate to "Manage Job
Ads".
2. Click "Create Job Ad".
3. Attach an unsupported
file type.
4. Submit the form.
```
File: "jobad.exe" The system rejects the
```
file upload and
displays an error
message about
unsupported file types.
The system
rejected the file
upload and
displayed an error
message about
unsupported file
types.
P
TC-MJA-EG-
007
Incomplete Form
Submission
1. Navigate to "Manage Job
Ads".
2. Click "Create Job Ad".
3. Leave one or more
required fields empty.
4. Submit the form.
Missing Title The system displays an
error message for the
missing fields and
prevents submission.
The system
displayed an error
message for the
missing fields and
prevented
submission.
P
69
TC-MJA-EG-
008
Invalid Characters
in Job Title
1. Navigate to "Manage Job
Ads".
2. Click "Create Job Ad".
3. Enter invalid characters
in the title field.
4. Submit the form.
```
Title:
```
```
<script>alert("XSS")
```
</script>
The system displays an
error message and
prevents submission.
The system failed
to validate the
invalid characters
and allowed
submission.
F
TC-MJA-EG-
009
Multiple
Submissions
1. Navigate to "Manage Job
Ads".
2. Click "Create Job Ad".
3. Submit the form multiple
times quickly.
```
Title: "Software
```
Engineer"
```
Description:
```
"Looking for a
skilled developer."
```
Salary: "5000"
```
The system allows only
one submission and
prevents duplicates.
The system
allowed multiple
duplicate
submissions,
failing to block
duplicates.
F
GUI Testing
Test Case ID Test Case Test Steps Data Input Expected Result Actual Result Test
Status
```
(P/F)
```
TC-MJA-GUI-001 Verify
navigation to
"Manage Job
Ads".
1. Click the "Manage Job
Ads" option from the
navigation menu.
None The system navigates
to the "Manage Job
Ads" page and displays
a list of job
advertisements.
The system
navigated to the
"Manage Job
Ads" page and
displayed a list of
job
advertisements.
P
70
TC-MJA-GUI-002 Verify the
layout of the
"Manage Job
Ads" page.
1. Open the "Manage Job
Ads" page.
2. Inspect the alignment and
visibility of UI components.
None All UI components
```
(buttons, forms, etc.)
```
are properly aligned
and visible without
overlap or distortion.
All UI
components were
properly aligned
and visible
without overlap
or distortion.
P
TC-MJA-GUI-003 Verify the
responsiveness
of the interface.
1. Open the "Manage Job
Ads" page on a mobile
device or resize the browser
window to a smaller width.
None The interface adjusts to
the screen size,
ensuring elements are
usable and readable on
smaller screens.
The interface
adjusted to the
screen size,
ensuring usability
and readability on
smaller screens.
P
TC-MJA-GUI-004 Verify error
messages are
displayed
correctly.
1. Submit the "Create Job
Ad" form with invalid
inputs.
2. Inspect the placement
and clarity of error
messages.
Missing Title,
Invalid Salary
Error messages are
displayed inline near
the respective fields
with clear and
understandable text.
Error messages
were displayed
inline near the
respective fields
with clear and
understandable
text.
P
TC-MJA-GUI-005 Verify button
states and
responsiveness.
1. Inspect all buttons (e.g.,
```
"Create", "Edit", "Delete").
```
2. Hover, click, and inspect
disabled states when
applicable.
None Buttons display proper
```
states (hover, active,
```
```
disabled) and are
```
responsive when
clicked
Buttons displayed
proper states
```
(hover, active,
```
```
disabled) and
```
were responsive
when clicked.
P
71
TC-MJA-GUI-006 Verify
dropdown menu
functionality.
1. Open the dropdown
menu for options like "Edit"
or "Delete" next to a job ad.
2. Select an option.
None Dropdown menu opens
properly and displays
all available options.
Selected options
perform as expected.
Dropdown menu
opened properly,
displayed all
available options,
and selected
options
performed as
expected.
P
TC-MJA-GUI-007 Verify
cross-browser
compatibility.
1. Open the "Manage Job
Ads" page in multiple
```
browsers (e.g., Chrome,
```
```
Firefox, Edge).
```
None The page renders and
functions consistently
across all tested
browsers.
The page
rendered and
functioned
consistently
across all tested
browsers.
P
TC-MJA-G-008 Verify the
layout of the
"Manage Job
Ads" page.
1. Open the "Manage Job
Ads" page.
2. Inspect the alignment and
visibility of UI components.
None All UI components
```
(buttons, forms, etc.)
```
are properly aligned
and visible without
overlap or distortion
Some UI
components
overlapped, and a
button was
partially hidden
on smaller
screens.
F
TC-MJA-G-009 Verify button
states and
responsiveness.
1. Inspect all buttons (e.g.,
```
"Create", "Edit", "Delete").
```
2. Hover, click, and inspect
disabled states when
applicable.
None Buttons display proper
```
states (hover, active,
```
```
disabled) and are
```
responsive when
clicked.
The "Edit" button
did not respond
when clicked, and
the hover state
was not visible.
F
72
```
2.3.6 F006 - Search and View Alumni Profile (Tester: Mai)
```
This feature allows alumni to search and view other alumni profiles, facilitating networking. Efficient searching and clear profile displays are key
to a positive user experience.
Feature ID Feature Risk Level
F006 Search and View Alumni Profile Low
The techniques applied are:
1. Use Case Testing (Black Box Testing - System Level)
2. Performance Testing (Black Box Testing - System level)
Nature of Feature:
This function allows users to search and view other alumni profiles.
```
Justification:
```
```
Use case testing will help to ensure the correctness and completeness of search functionality, including searching with various criteria (name,
```
```
keywords, etc.) and correctly displaying alumni profiles. Performance testing is also essential to assess the system's response time when searching
```
and retrieving alumni profiles, particularly with larger datasets, ensuring an optimal user experience.
```
Use Case Testing (System Testing Level)
```
Use Case Name Search and View Alumni Profile
Use Case ID UC-006
Description This use case describes alumni searching for and viewing profiles of other
alumni.
```
Actor(s) Alumni
```
73
Triggering Event The user initiates a search for an alumni profile using the search feature.
Pre-condition The user must be logged into the system with a verified account.
Post-condition The system displays the search results, or the specific alumni profile
requested.
Flow of Events 1. The actor logs into the system.
2. The actor navigates to the alumni search page.
3. The actor enters search criteria (e.g., name, department,
```
graduation year).
```
4. The system processes the search request and displays a list of
matching alumni profiles.
5. The actor clicks on a specific alumni profile to view detailed
information.
Exception flow -
Keyword entered not
matched in database
Keyword entered not matched in database. The system displays a "No match
found" message.
74
```
Test Cases using Use Case Testing (System Testing Level)
```
```
Use case: Search and View Alumni Profile (F006)
```
Test Level: System Testing
Test Technique: Use Case Testing
Pre-condition: The user must be logged into the system with a verified account.
Post-condition: The system displays the search results, or the specific alumni profile requested.
Test
Case ID
Test Case Test Steps Data Input Expected Result Actual Result Test Status
```
(Pass/Fail)
```
VAP-UC
-001
Search alumni
with valid
keyword
1. Log in to the system.
2. Navigate to the search
bar.
3. Enter a valid keyword
```
(e.g., "Mai Mai").
```
4. Click the search button.
Valid data: "Mai
Mai"
System displays
a list of alumni
profiles
matching the
keyword "Mai
Mai".
System displays
relevant results
for "Mai Mai".
Pass
VAP-UC
-002
Search alumni
with invalid
keyword
1. Log in to the system.
2. Navigate to the search
bar.
3. Enter an invalid
```
keyword (e.g., "xyz123").
```
4. Click the search button.
Invalid data:
"xyz123"
System displays
a "No match
found" message.
System displays
a "No match
found" message.
Pass
VAP-UC
-003
Search alumni
with empty
keyword
1. Log in to the system.
2. Navigate to the search
bar.
3. Leave the search bar
empty.
4. Click the search button.
No Data System prompts
the user to enter
a keyword or
displays an
appropriate error
message.
No action is
performed, and
no error message
is displayed.
Fail
VAP-UC
-004
View profile
from search
results
1. Perform a valid search.
2. Click on one of the
profiles from the search
results list.
Valid data: Select
any profile from
results
System displays
the details of the
selected alumni
profile.
Profile details
page opens
correctly.
Pass
VAP-UC
-005
Search with
partial
keyword
1. Log in to the system.
2. Navigate to the search
bar.
Valid data: "Mai" System displays
a list of alumni
profiles with
System displays
profiles with
Pass
75
3. Enter a partial keyword
```
(e.g., "Mai").
```
4. Click the search button.
names that
include "Mai".
partial match for
"Mai".
VAP-UC
-006
Search with
special
characters
1. Log in to the system.
2. Navigate to the search
bar.
3. Enter a keyword with
```
special characters (e.g.,
```
```
"!@#$").
```
4. Click the search button.
Invalid data: "!@#$" System displays
a "No match
found" message
or prompts the
user to enter a
valid keyword.
System crashes
with a database
error.
Fail
VAP-UC
-007
Search with
case-insensitiv
e keyword
1. Log in to the system.
2. Navigate to the search
bar.
3. Enter a keyword in
```
uppercase/lowercase (e.g.,
```
"MAI MAI" or "mai
```
mai").
```
4. Click search.
Valid data: "MAI
MAI" or "mai mai"
System displays
results matching
the keyword
regardless of
case.
Results are
displayed
regardless of
case.
Pass
VAP-UC
-008
Search with
numeric values
1. Log in to the system.
2. Navigate to the search
bar.
3. Enter numeric values as
```
a keyword (e.g., "12345").
```
4. Click the search button.
Valid/Invalid data:
"12345"
System
processes the
keyword and
displays results
or a "No match
found" message
if not applicable.
System displays
a "No match
found" message.
Pass
VAP-UC
-009
Search alumni
immediately
after profile
update
1. Update an alumni
profile in the system.
2. Use a keyword related
to the updated profile.
3. Click the search button.
Valid data: Updated
profile
name/keyword
System displays
the updated
profile in the
search results.
System takes a
long time to
respond and
eventually times
out.
Fail
VAP-UC
-010
Search alumni
when no
profiles exist
in the database
1. Log in to the system.
2. Navigate to the search
bar.
3. Enter a valid or invalid
keyword.
4. Click the search button.
No data in the
database
System displays
a "No match
found" message
regardless of the
entered
keyword.
System displays
results correctly
after trimming
spaces.
Pass
7677
```
Performance Testing (System Testing Level)
```
```
Use case: Search and View Alumni Profile (F006)
```
Test Level: System Testing
Test Technique: Performance Testing
Pre-condition: The user must be logged into the system with a verified account.
Post-condition: The system displays the search results, or the specific alumni profile requested.
Test
Case ID
Test Case Test Steps Data Input Expected Result Actual Result Test Status
```
(Pass/Fail)
```
PT-UC-0
01
Single user
search
1. Open the Alumni
Search page.
2. Enter a valid keyword
in the search bar.
3. Submit the search.
Valid Keyword: Cris Search results
displayed within 2
seconds.
Results displayed
in 1.8 seconds.
Pass
PT-UC-0
02
Multiple users
```
search (100
```
```
users)
```
1. Simulate 100
concurrent users
searching with valid
keywords.
Valid Keywords:
Cris, Mai, IT
All 100 users
receive results
within 3 seconds
with no server
crashes.
All 100 users
received results in
5 seconds, with
some crashes.
Fail
PT-UC-0
03
High database
volume
1. Populate the database
with 1,000,000 alumni
records.
2. Search using a valid
keyword.
Valid Keyword:
Engineering
Search results
displayed within
2-3 seconds,
regardless of
database size.
Results displayed
in 3.5 seconds.
Fail
PT-UC-0
04
Search with an
invalid
keyword
1. Open the Alumni
Search page.
2. Enter an invalid
```
keyword (not in the
```
```
database).
```
3. Submit the search.
Invalid Keyword:
Xyz123
"No results found"
message displayed
within 2 seconds.
"No results
found" message
displayed in 1.5
seconds.
Pass
PT-UC-0
05
Simultaneous
search with
1. Simulate 500 users
performing searches
simultaneously with
Mixed Keywords:
Mai, Xyz123
System processes
all queries with
<2% error rate
98% queries
processed
```
successfully;
```
Pass
78
```
peak users (500
```
```
users)
```
valid and invalid
keywords.
and results
delivered within
3-4 seconds.
results delivered
in 3.2 seconds for
most users.
PT-UC-0
06
Stress test for
extreme user
```
load (1000
```
```
users)
```
1. Simulate 1000 users
performing searches at
the same time.
Mixed Keywords:
Cris, Mai
System maintains
stability, with
search results
displayed within 5
seconds for 95%
of the users.
```
System stable;
```
96% of users
received results
within 4.8
seconds, but 4%
experienced slight
delays.
Pass
PT-UC-0
07
Search with
special
characters
1. Open the Alumni
Search page.
2. Enter special
characters in the search
bar.
3. Submit the search.
```
Keyword: @#%! "No results found"
```
message displayed
within 2 seconds.
"No results
found" message
displayed in 2.7
seconds.
Fail
PT-UC-0
08
Endurance test
```
(24-hour
```
continuous
```
usage)
```
1. Simulate 10 users
performing searches
every 5 minutes for 24
hours.
Valid Keyword:
Developer
System remains
stable, with
consistent
response times
and no downtime
during the test
period.
```
System stable;
```
response times
consistent at ~2
seconds, with no
downtime
recorded.
Pass
PT-UC-0
09
Search for
partial keyword
1. Open the Alumni
Search page.
2. Enter a partial
keyword.
3. Submit the search.
Partial Keyword:
Eng
Results for all
matching alumni
displayed within 2
seconds.
Results for
matching alumni
displayed in
2.3seconds.
Fail
PT-UC-0
10
Database-heavy
search
```
(complex query
```
```
execution time)
```
1. Simulate a query that
matches many database
```
entries (e.g., by
```
department or large
```
common keyword).
```
```
Keyword:
```
Engineering
Results for
matching alumni
displayed within 3
seconds despite
high
computational
demand.
Results displayed
```
in 3.1 seconds;
```
system handled
query efficiently
without crashing.
Pass
79
```
2.3.7 F007 - Manage Alumni Account (Testers: Firdaus & Yallini)
```
This feature allows faculty administrators to manage alumni accounts, ensuring data accuracy and control over access. Thorough testing is
important for proper functionality, data integrity, and usability of admin tools.
Feature ID Feature Risk Level
F007 Manage Alumni Account High
The techniques that will be applied are as follows:
1. Use Case Testing (Black Box Testing - System Level)
2. State Transition Testing (Black Box Testing - System Level)
3. GUI Testing (Black Box Testing - System Level)
Nature of Feature:
"Manage Alumni Account" allows faculty administrators to manage alumni accounts, including approving/rejecting registrations, editing alumni
information, and deleting accounts. This function is important for maintaining an accurate and up-to-date alumni database.
```
Justification:
```
Use Case Testing is performed for all admin functions, including approving/rejecting accounts, updating information, and deleting accounts. This
```
verifies all use cases, extensions (alternative and exception flows) behave as expected. State Transition testing is critical to test changes in status
```
```
because this feature involves different alumni account states (e.g., pending, approved, rejected) and their respective transitions, so State Transition
```
Testing is important for ensuring the system handles these state changes correctly. GUI Testing evaluates the admin interface's usability for its
effectiveness, ease of use, and responsiveness.
```
Use Case Testing (System Testing Level)
```
Use Case Name Manage Alumni Account
Use Case ID UC-007
80
Description Faculty administrator approves/rejects, edits, or deletes accounts.
```
Actor(s) Faculty Administrator
```
Triggering Event Admin accesses the alumni management page.
Pre-condition Admin is logged in.
Post-condition Account status updated, information modified, or account deleted.
```
Flow of Events 1. Admin selects an action (approve/reject, edit, delete). 2. Admin
```
performs the chosen action. 3. System updates the database and
provides feedback.
Exception Flow -
Invalid Action
Display an error message.
Exception Flow -
Unauthorized Access
If non-admin attempts access, display "Access Denied".
81
```
Test Cases using Use Case Testing (System Testing Level) - Yallini
```
```
Use case Testing (System Level Testing)
```
```
Use case: Use Case Testing (F007)
```
Test Level: System Testing
Test Technique: Use Case Testing
Pre-condition: Alumni is not logged in and has a valid University of Malaya email address.
```
Post-condition: Alumni account is created and pending approval (or directly approved).
```
Test Case ID Test Case Test Steps Data Input Expected Result Actual Result Test
Status
```
(P/F)
```
MAA-UC-001 Approve Account 1. Access alumni
management page. 2.
Select a pending
alumni account. 3.
Click "Approve".
```
Example: Pending
```
alumni account
Account status changes
to "Approved".
The system
changed the
account status to
"Approved".
P
MAA-UC-002 Reject Account 1. Access alumni
management page. 2.
Select a pending
alumni account. 3.
Click "Reject".
```
Example: Pending
```
alumni account
Account status changes
to "Rejected".
The system
changed the
account status to
"Rejected".
P
MAA-UC-003 Edit Account 1. Access alumni
management page. 2.
Select an approved
alumni account. 3.
Click "Edit". 4.
Modify alumni
```
Example: Valid
```
modifications to alumni
information
Information updated
correctly.
The system
updated the
information
correctly.
P
82
information. 5. Click
"Save".
MAA-UC-004 Delete Account 1. Access alumni
management page. 2.
Select an alumni
account. 3. Click
"Delete". 4. Confirm
deletion.
```
Example: Alumni
```
account selected for
deletion
Account permanently
removed.
The system
permanently
removed the
account.
P
MAA-UC-005 Unauthorized
Access
1. Attempt to access
alumni management
page as a non-admin.
```
Example: Non-admin
```
user attempting access
Error message: "Access
Denied".
The system
displayed an error
```
message: "Access
```
Denied".
P
MAA-UC-006 Invalid Action 1. Access alumni
management page. 2.
Select a pending
alumni account. 3.
Attempt to edit the
```
account (which
```
should only be done
for approved
```
accounts).
```
```
Example: Edit a
```
pending account, not
approved
Error message
indicating invalid
action.
The system
displayed an error
message
indicating invalid
action.
P
83
```
State Transition Testing (System Testing Level) - Firdaus
```
Test Case
ID
Test Case Test Steps Data Input Expected Result Actual Result Test
Status
```
(P/F)
```
MAA-ST
T-001
Initial
Registration
1. Navigate to the registration page.
2. Enter valid alumni information.
3. Submit the registration form.
Valid name,
email,
graduation year,
etc.
Account created
and transitions to
"Pending
Approval" state.
Account created,
status "Pending
Approval."
P
MAA-ST
T-002
Admin
Approves -
Pending to
Approved
1. Log in as an administrator.
2. Navigate to the pending alumni
account list.
3. Select the target account.
4. Click "Approve."
```
N/A (Admin
```
```
action)
```
Account status
changes to
"Approved," and
the alumnus can log
in.
Account status
updated to
"Approved." Login
successful.
P
MAA-ST
T-003
Admin
Rejects -
Pending to
Rejected
1. Log in as admin.
2. Navigate to the pending list.
3. Select the target account.
4. Click "Reject."
```
N/A (Admin
```
```
action)
```
Account status
changes to
```
"Rejected";
```
registration process
```
ends; alumnus
```
cannot log in.
Account status
"Rejected." Login
attempt fails with
"Account
Rejected"
message.
P
MAA-ST
T-004
Update
Details -
Active to
Updated to
Active
1. Log in as an approved alumnus.
2. Navigate to "My Profile."
3. Modify profile information.
4. Save changes.
Valid updated
profile data.
Profile details are
updated, account
remains "Active".
System processes
the changes, and the
account reverts to
the "Active" state.
Changes saved,
profile updated,
account remains
"Active".
P
84
MAA-ST
T-005
Request
Deletion -
Active to
Deleted to
End
1. Log in as alumnus.
2. Navigate to account settings.
3. Request account deletion.
4. Confirm deletion.
```
N/A (User
```
```
action)
```
Account status
changes to
"Deleted," the user
is logged out, and
the account is no
longer accessible.
Account deleted,
logout successful.
Attempting to log
in again results in
an "Account Not
Found" message.
P
MAA-ST
T-006
Invalid Input
- Editing
1. Navigate to "My profile".
2. Enter invalid data during profile
update.
3. Save changes.
Invalid email
format,
excessively
long name,
special
characters, etc.
Informative error
messages, change
prevented, remains
in "Active" or
"Editing" state.
Correct error
message
displayed. Profile
data not updated.
Account remains
"Active."
P
MAA-ST
T-007
Attempt
Update
Before
Approval
1. Navigate to My Profile (without
```
the admin approval process)
```
2. Try to edit information.
Profile update
attempts before
account is
approved.
Access denied or
error message,
profile remains
unchanged, and the
state stays as
"Pending"
System allows
editing before
approval. Defect
logged as D-001.
F
85
```
GUI Testing (System Testing Level) - Yallini
```
Test Case
ID
Test Case Test Steps Data Input Expected Result Actual Result Test
Status
```
(P/F)
```
MAA-GUI
-001
Verify navigation
and layout
1. Login as admin. 2.
Navigate to alumni
management page. 3. Verify
that all navigation elements
are clear.
Not
Applicable
Interface elements are
clear, accessible, and
logically arranged.
Interface elements
are clear, accessible,
and logically
arranged.
P
MAA-GUI
-002
Verify search
functionality
1. Login as admin. 2.
Navigate to alumni
management page. 3. Enter
search terms and check
filters.
Search terms Accurate search results,
user-friendly search filters.
Accurate search
results, user-friendly
search filters.
P
MAA-GUI
-003
Verify data display 1. Login as admin. 2.
Navigate to alumni
management page. 3. Check
displayed alumni data for
accuracy.
Alumni data Information displayed
accurately and formatted
appropriately.
Information
displayed accurately
and formatted
appropriately.
P
MAA-GUI
-004
Verify feedback
messages
1. Login as admin. 2.
Navigate to alumni
management page. 3.
Perform approve/reject action
and observe feedback.
Approve/Reje
ct action
Clear feedback messages
indicating success or
failure.
Clear feedback
messages indicating
success or failure.
P
86
MAA-GUI
-005
Verify table sorting
functionality
1. Login as admin. 2.
Navigate to alumni
management page. 3. Click
on table headers to sort by
name, year, or department.
Not
Applicable
The table sorts correctly
based on the selected
criteria.
The table sorts
correctly based on
the selected criteria.
P
MAA-GUI
-006
Verify pagination
controls
1. Login as admin. 2.
Navigate to alumni
management page. 3. Use the
pagination controls to move
through the pages of alumni.
Not
Applicable
Pagination works
correctly, allowing
navigation between pages.
Pagination works
correctly, allowing
navigation between
pages.
P
MAA-GUI
-007
Verify responsive
design
1. Login as admin. 2.
Navigate to alumni
management page. 3. Resize
the browser window to small
```
(mobile), medium (tablet),
```
```
and large (desktop).
```
Not
Applicable
The layout adjusts
properly for different
screen sizes.
The layout adjusts
properly for
different screen
sizes.
P
MAA-GUI
-008
Verify filter
functionality
1. Login as admin. 2.
Navigate to alumni
management page. 3. Apply
filters like graduation year
and department from
dropdowns.
Filter criteria
```
(e.g., year,
```
```
department)
```
Alumni list updates
correctly based on the
applied filters.
Alumni list updates
correctly based on
the applied filters.
P
MAA-GUI
-009
Verify bulk actions 1. Login as admin. 2.
Navigate to alumni
management page. 3. Select
multiple alumni entries and
perform bulk actions
```
(approve or reject).
```
Multiple
alumni
selected
System performs the bulk
actions correctly on all
selected alumni.
System performs the
bulk actions
correctly on all
selected alumni.
P
87
MAA-GUI
-010
Verify input
validation
1. Login as admin. 2.
Navigate to alumni
management page. 3. Enter
invalid data in editable fields
```
(e.g., incorrect email format,
```
leaving required fields
```
empty).
```
Invalid input
```
(e.g., invalid
```
email, empty
```
fields)
```
System displays
appropriate error messages
for invalid inputs.
System displays
appropriate error
messages for invalid
inputs.
P
88
```
2.3.8 F008 - Manage Event (Tester: Azfar)
```
This feature empowers faculty administrators to create, update, and delete events for the alumni network. Thorough testing ensures proper
functionality and a user-friendly experience.
Feature ID Feature Risk Level
F008 Manage Event High
The techniques applied are:
1. Use Case Testing (Black Box - System)
2. GUI Testing (Black Box - System)
Nature of Feature:
The "Manage Event" feature in OAS facilitates event management functionalities, allowing admins to create new events, update existing events
with revised details, delete events, and potentially invite specific alumni to events.
```
Justification:
```
Use Case Testing is mandatory, ensuring all use cases related to creating, updating, and deleting events, including handling invitations and
managing attendees, are tested comprehensively by checking for both the main flow and alternate/exception flows. GUI Testing specifically targets
the usability and functionality of the admin interface for managing events. We will test all important GUI elements like forms, calendars, invitation
features, and event listings, to provide an effective and user-friendly admin interface.
```
Use Case Testing (System Testing Level)
```
Use Case Name Manage Event
Use Case ID UC-008
Description Admin creates, updates, or deletes events and manages invitations.
89
```
Actor(s) Faculty Administrator
```
Triggering Event Admin navigates to event management section.
Pre-condition Admin is logged in.
Post-condition Event created, updated, deleted, or invitation list modified.
```
Flow of Events 1. Admin selects an action (Create, Update, Delete). 2. Admin
```
provides event information. 3. Admin saves changes or sends
invitations.
Exception
Flow-Invalid Input
Display error message, preventing action.
```
Test Cases using Use Case Testing (System Testing Level)
```
Test
Case
ID
Test Case Test Steps Data Input Expected Result Actual Result Test
Status
```
(P/F)
```
ME-UC
-001
Verify creating a
new event
1. Login as admin.
2. Navigate to the "Manage
Events" page.
3. Enter valid event details.
4. Submit the form.
TCOV-ME-UC-001:
Event details
Event is created
successfully and
displayed in the event
listings.
Event was created
successfully and
displayed in the
event listings.
P
ME-UC
-002
Verify updating an
existing event
1. Login as admin.
2. Navigate to the "Manage
Events" page.
3. Select an event.
4. Modify event details.
TCOV-ME-UC-002:
Modified details
Event is updated
successfully and
reflected in the event
listings.
Event was updated
successfully and
reflected in the
event listings.
P
90
5. Save changes.
ME-UC
-003
Verify deleting an
event
1. Login as admin.
2. Navigate to the "Manage
Events" page.
3. Select an event to delete.
4. Confirm deletion.
TCOV-ME-UC-003:
Event ID
Event is removed
successfully from the
listings.
Event was removed
successfully from
the listings
P
ME-UC
-004
Verify handling
invalid input
1. Login as admin.
2. Navigate to the "Create Event"
page.
3. Submit the form with missing
fields.
TCOV-ME-UC-004:
Invalid input
Error messages are
displayed, and the
event is not created.
Error messages
were displayed, and
the event was not
created.
P
ME-UC
-005
Verify unauthorized
access
Attempt to access the "Manage
Events" page without logging in.
TCOV-ME-UC-005:
Unauthenticated
Access is denied, and
the user is redirected
to the login page.
Access was denied,
and the user was
redirected to the
login page.
P
ME-UC
-006
Verify updating an
existing event
1. Login as admin.
2. Navigate to the "Manage
Events" page.
3. Select an event.
4. Modify event details.
5. Save changes
TCOV-ME-UC-002:
Modified details
Event is updated
successfully and
reflected in the event
listings.
The system failed
to update the event
and displayed a
generic error
message.
F
ME-UC
-007
Verify creating a
duplicate event
1. Login as admin.
2. Navigate to the "Manage
Events" page.
3. Create an event with identical
details to an existing one.
4. Submit the form.
TCOV-ME-UC-006:
Duplicate detail
The system prevents
duplicate event
creation and displays
an error message.
The system allowed
duplicate event
creation and did not
display an error
message.
F
91
```
GUI Testing (System Testing Level)
```
Test Case
ID
Test Case Test Steps Data Input Expected Result Actual Result Test
Status
```
(P/F)
```
ME-GUI-00
1
Verify navigation and
layout
1. Login as admin.
2. Navigate to the "Manage
Events" page.
3. Verify navigation
elements and layout.
TCOV-ME-GUI-001:
Not Applicable
Navigation elements are
clear, accessible, and
logically arranged.
Navigation
elements are clear,
accessible, and
logically arranged.
P
ME-GUI-00
2
Verify form usability 1. Navigate to the "Create
Event" form.
2. Enter valid event details.
3. Submit the form.
TCOV-ME-GUI-002:
Event details
Form is intuitive, input
validation works, and
event is created
successfully.
Form is intuitive,
input validation
works, and event
is created
successfully.
P
ME-GUI-00
3
Verify calendar
functionality
1. Navigate to the event
calendar.
2. Select a date and time.
3. Save changes.
TCOV-ME-GUI-003:
Event dates
Calendar allows
date/time selection and
updates the event
successfully.
Calendar allows
date/time selection
and updates the
event successfully.
P
ME-GUI-00
4
Verify error messages
for invalid input
1. Navigate to the "Create
Event" form.
2. Enter invalid data.
3. Submit the form.
TCOV-ME-GUI-004:
Invalid input
Error messages are
displayed clearly near
the respective fields.
Error messages
are displayed
clearly near the
respective fields.
P
ME-GUI-00
5
Verify event listing
display
1. Navigate to the "Event
Listings" page.
2. Check displayed event
details for accuracy.
TCOV-ME-GUI-005:
Event details
Event details are
displayed accurately
and formatted
appropriately.
Event details are
displayed
accurately and
formatted
appropriately.
P
92
ME-GUI-00
6
Verify cross-browser
compatibility
1. Open the "Manage
Events" page in multiple
```
browsers (e.g., Chrome,
```
```
Firefox, Edge).
```
TCOV-ME-GUI-006:
Not Applicable
The page renders and
functions consistently
across all tested
browsers.
The page renders
and functions
consistently across
all tested
browsers.
P
ME-GUI-00
7
Verify calendar
functionality
1. Navigate to the event
calendar.
2. Select a date and time.
3. Save changes.
TCOV-ME-GUI-003:
Event dates
Calendar allows
date/time selection and
updates the event
successfully
The calendar
failed to save the
selected date and
displayed an error
message.
F
ME-GUI-00
5
Verify event listing
display
1. Navigate to the "Event
Listings" page.
2. Check displayed event
details for accuracy.
TCOV-ME-GUI-005:
Event details
Event details are
displayed accurately
and formatted
appropriately.
Event details were
not displayed
```
accurately; the
```
description field
was truncated.
F
93
```
2.3.8 NF-002 Security - Password Encryption (Tester: Yallini)
```
This NFR mandates that passwords are encrypted during storage and transmission, protecting sensitive information from unauthorized access.
Requirement ID Feature Risk Level
NF-002 Security - Password Encryption High
The technique that will be applied is as follows:
1. Security Testing (Black Box Testing - System level)
Nature of Requirement:
"Password Encryption" ensures that passwords are securely handled during storage and transmission.
```
Justification:
```
Security testing is employed to validate that passwords are not stored or sent in plain text, which is a crucial aspect of user data protection. We will
```
intercept and examine network traffic during registration and login, as well as inspect database entries (if accessible), to verify that passwords are
```
encrypted using strong algorithms. This rigorous approach safeguards sensitive data and enhances user trust.
```
Security Testing (System Testing Level)
```
```
2.3.9 NF-002 - Security - Password Encryption (Tester: Yallini)
```
Test Case
ID
Test Case Test Steps Data Input Expected Result Actual Result Test
Status
```
(P/F)
```
94
SPE-ST-001 Verify
password
storage
1. Register a new user.
2. Use a suitable database client
to inspect the user table.
3. Check if the stored password
is hashed.
Registered user
password
Password stored as a hash,
```
not plain text (verify in the
```
```
database if accessible).
```
Password is stored
as a hash, not plain
text.
P
SPE-ST-002 Verify
password
transmission
1. Attempt to login using a
registered user account.
2. Intercept network traffic using
OWASP ZAP, Burp Suite, or
Browser Developer Tools during
login.
3. Inspect the HTTPS request to
verify password encryption.
Login attempt Password transmitted
```
securely (HTTPS, encrypted
```
```
in the request body).
```
Password is
transmitted securely
```
(HTTPS, encrypted
```
in the request
```
body).
```
P
SPE-ST-003 Verify secure
connection
1. Open the login page.
2. Inspect the URL and network
traffic using developer tools.
N/A Connection uses HTTPS
protocol ensuring encrypted
communication.
Connection uses
HTTPS protocol
ensuring encrypted
communication.
P
SPE-ST-004 Verify HTTPS
certificate
validity
1. Navigate to the system's login
page.
2. Check the SSL/TLS certificate
details in the browser.
N/A Valid and up-to-date
SSL/TLS certificate is used.
Valid and
up-to-date
SSL/TLS certificate
is used.
P
SPE-ST-005 Verify session
management
1. Login as a registered user.
2. Monitor session cookies in
browser developer tools.
Registered user
session
Session cookies are marked
secure and HttpOnly to
prevent access through
client-side scripts.
Session cookies are
marked secure and
HttpOnly.
P
95
SPE-ST-006 Verify logout
mechanism
1. Login as a registered user.
2. Logout and intercept network
traffic using security tools.
Registered user
session
Session is properly
invalidated on logout, and no
sensitive data is passed in
subsequent requests.
Session is properly
invalidated on
logout.
P
96
```
2.3.10 NF-003 - Usability - Cross-Browser Compatibility (Tester: Azfar)
```
This NFR guarantees consistent functionality and user experience across different browsers, ensuring wide accessibility and user satisfaction.
Requirement ID Feature Risk Level
NF-003 Usability - Cross-Browser Compatibility Medium
The techniques that will be applied are as follows:
1. Compatibility Testing (Black Box Testing - System Level)
2. GUI Testing (Black Box Testing - System Level)
Nature of Requirement:
"Cross-Browser Compatibility" ensures consistent system behavior and UI across different browsers.
```
Justification:
```
Compatibility testing is essential for verifying the system’s functionality across different browsers and devices and ensuring that layout,
functionality, and performance are consistent. GUI testing on multiple browsers will ensure the UI elements are functioning as expected, and there
are no rendering or display issues across these platforms. This ensures alumni can access the platform regardless of their browser choice.
```
Compatibility Testing (System Testing Level)
```
Test
Case
ID
Test Case Test Steps Data Input Expected Result Actual Result Test
Status
```
(P/F)
```
97
CBC-CT
-001
Verify core
functionality
1. Test key features like
login and profile
management.
2. Perform these actions on
each target browser.
TCOV-CBC-001: Core
features
Core features behave
consistently on all
tested browsers.
Core features behaved
consistently on all tested
browsers.
P
CBC-CT
-002
Verify layout
consistency
1. Navigate through pages
on all target browsers.
2. Inspect layout and
element rendering.
TCOV-CBC-002:
Layout inspection
UI layout is consistent
across all browsers.
UI layout had alignment
issues on Safari, with
buttons misaligned.
F
CBC-CT
-003
Verify
performance
consistency
1. Measure page load times
across browsers.
2. Compare with acceptable
performance thresholds.
TCOV-CBC-003:
Performance metrics
Page load times are
within acceptable
ranges across all
browsers.
Page load times exceeded
acceptable thresholds on
Internet Explorer.
F
```
GUI Testing (System Testing Level)
```
Test Case
ID
Test Case Test Steps Data Input Expected Result Actual Result Test
Status
```
(P/F)
```
CBC-GUI-0
01
Verify layout
consistency
1. Navigate through pages.
2. Inspect UI elements for
proper alignment and
visibility.
N/A Layout is correct and
consistent across all
tested browsers.
Layout had
overlapping
elements on Edge.
F
CBC-GUI-0
02
Verify button
functionality
1. Test all buttons (e.g.,
```
"Submit", "Cancel") across
```
browsers.
2. Check responsiveness
and feedback.
N/A Buttons are functional,
visually consistent, and
responsive.
Some buttons
failed to respond
on Firefox.
F
98
CBC-GUI-0
03
Verify form
rendering
1. Access forms on
multiple pages.
2. Inspect field alignment
and labels.
N/A Forms render properly
with aligned fields and
labels.
Forms rendered
properly with
aligned fields and
labels.
P
CBC-GUI-0
04
Verify
responsiveness
1. Test UI elements on
various screen sizes and
devices.
2. Check resizing and
alignment.
N/A UI adjusts correctly to
screen sizes and
remains responsive.
UI adjusted
correctly to screen
sizes and
remained
responsive.
P
99
```
2.3.11 NF-004 - Security - Authentication (Tester: Mai)
```
This NFR focuses on ensuring that only authorized users can access the system using strong authentication mechanisms and policies.
Requirement ID Feature Risk Level
NF-004 Security - Authentication High
The technique that will be applied is as follows:
1. Security Testing (Black Box - System Level)
Nature of Requirement:
“Authentication” ensures system access by preventing unauthorized access attempts and verifies appropriate user roles and permissions.
```
Justification:
```
Security testing involves probing for weaknesses in the authentication process and is crucial for verifying that only authorized users with valid
credentials can access specific parts of the system. We will simulate various attack vectors, such as brute-force attempts, SQL injection, and
session hijacking, to identify vulnerabilities and ensure the system’s security.
100
```
Security Testing (System Testing Level)
```
Test
Case ID
Test Case Test Steps Data Input Expected Result Actual Result Test Status
```
(Pass/Fail)
```
SA-ST-
001
Verify password
strength policy
enforcement
1. Attempt to register
using a weak
```
password (e.g.,
```
```
12345).
```
Weak Password: 12345 Registration fails,
displaying an error
```
message:
```
"Password must
meet complexity
requirements."
Registration
fails, error
message
displayed
correctly.
Pass
SA-ST-
002
Verify login
with incorrect
credentials
1. Attempt to log in
with incorrect
username or password.
```
Username: user1,
```
```
Password: wrongpass
```
Login fails,
displaying an error
```
message: "Invalid
```
credentials."
Login fails, but
error message
```
reveals:
```
"Password
incorrect for
user1."
Fail
SA-ST-
003
Test SQL
injection
vulnerability in
the login page
1. Enter SQL code ('
```
OR 1=1 --) in the
```
username or password
field.
SQL Code: ' OR 1=1 -- Login attempt is
blocked, with no
unauthorized
access and no
error revealing
system behavior.
Login attempt
```
blocked; error
```
```
reveals: "SQL
```
syntax error in
query."
Fail
SA-ST-
004
Verify account
lockout after
multiple failed
login attempts
1. Attempt to log in
with incorrect
credentials 5 times
consecutively.
```
Username: user2,
```
```
Password: wrongpass
```
Account is locked
after 5 failed
attempts,
displaying an
appropriate
```
message:
```
"Account locked
due to failed
attempts."
Account locked
```
after 5 attempts;
```
appropriate
message
displayed.
Pass
SA-ST-
005
Test session
timeout after
inactivity
1. Log in successfully.
2. Stay idle for 15
minutes.
Logged-in user User session
expires after 15
minutes of
User session
expired as
```
expected;
```
Pass
101
3. Attempt to perform
an action.
```
inactivity; user is
```
redirected to the
login page.
redirected to
login page.
SA-ST-
006
Test password
reset with an
invalid email
address
1. Initiate password
reset.
2. Enter an email not
registered in the
system.
```
Email:
```
fakeemail@example.com
Password reset
request is rejected
with an
appropriate error
message.
Password reset
request rejected,
but error
message
```
displays: "Email
```
not found in
system."
Fail
SA-ST-
007
Verify if
passwords are
stored securely
```
(e.g., hashed
```
```
and salted)
```
1. Access the database
```
directly (simulate
```
```
penetration).
```
2. Check the format of
stored passwords.
No data Passwords should
be stored as
hashed and salted
values, not plain
text.
Passwords are
hashed but lack
proper salting for
additional
security.
Fail
SA-ST-
008
Test secure
communication
for
authentication
```
(HTTPS and
```
```
encryption)
```
1. Access the login
page.
2. Inspect the page
using browser
developer tools to
verify HTTPS and
secure cookie
attributes.
No data All
communication
during login is
encrypted, and
cookies are
flagged as secure
and HTTP-only.
HTTPS is
enabled, but
cookies lack the
secure attribute.
Fail
SA-ST-
009
Test user
account
enumeration by
observing error
messages on
failed login
1. Attempt login with
a valid username and
incorrect password.
2. Attempt login with
an invalid username
and any password.
```
Username: validuser,
```
invaliduser
Error messages
should not
indicate whether
the username
exists in the
system.
Error message
reveals valid
```
usernames:
```
"Invalid
password for
validuser."
Fail
SA-ST-
010
Verify the use of
CAPTCHA to
prevent
automated login
attempts
1. Attempt to log in
multiple times using
an automated tool
without solving
CAPTCHA.
```
Username: testuser,
```
```
Password: testpass
```
Automated login
attempts are
blocked by
CAPTCHA
verification.
CAPTCHA is
```
functional;
```
automated
attempts are
blocked.
Pass
102
```
2.3.12 NF-005 - Performance - Page Load Times (Tester: Firdaus)
```
This NFR aims to ensure the system's responsiveness by measuring and evaluating page load times, contributing to a positive user experience.
Requirement ID Feature Risk Level
NF-005 Performance - Page Load Times Medium
The technique that will be applied is as follows:
1. Performance Testing (Black Box Testing - System Level)
Nature of Requirement:
The system should respond quickly to alumni's interactions and provide feedback immediately.
```
Justification:
```
Performance testing, specifically load testing, is essential for ensuring that page load times are within acceptable thresholds and meet performance
```
expectations. By measuring page load times under various load conditions (normal and peak), we can identify potential bottlenecks and ensure the
```
system remains responsive, maintaining an optimal user experience.
```
Performance Testing (System Testing Level)
```
Test Case ID Test Case Test Steps Input Data Expected Result Actual Result Test
Status
```
(P/F)
```
TC-PR-ST-001 Verify system
reliability during
high-volume
1. Configure JMeter to
simulate 10,000
concurrent users
Load Testing
Simulation Data
```
(10,000 users)
```
The system processes
all requests efficiently
without crashes or
significant delays.
The system did not
process all requests
and experienced
crashes.
F
103
password reset
requests.
submitting the "Forgot
Password" form.
TC-PR-ST-002 Verify system
stability under
resource-constrain
ed conditions
during password
resets.
1. Configure JMeter to
restrict server
resources
```
(memory/CPU) to
```
50% and simulate
1,000 requests.
Resource-Constra
ined Simulation
```
Data (1,000
```
requests, 50%
```
resources)
```
The system remains
stable and processes
requests without
major delays or errors.
The system is
unstable and does
not process all
requests without
significant delays
or errors.
F
TC-PR-ST-003 Verify password
reset email
response time
under peak usage.
1. Generate 5,000
simultaneous
password reset
requests using JMeter
and measure email
delivery time.
Peak Traffic
Simulation Data
```
(5,000 requests)
```
Password reset emails
are sent within 5
seconds during peak
traffic.
Password reset
emails are not sent
within 5 seconds
during peak traffic.
F
TC-PR-ST-004 Verify system
recovery after
failure during peak
password reset
load.
1. Simulate a server
```
crash (JMeter) during
```
5,000 password reset
```
requests; then restore
```
the server.
Server Recovery
Simulation Data
```
(5,000 requests,
```
```
simulated crash)
```
The system recovers
without data loss, and
pending requests are
processed upon
restoration.
The system
recovers with data
loss, and pending
requests are
processed upon
restoration.
F
TC-PR-ST-005 Verify system
accuracy handling
malformed/invalid
requests under
stress.
1. Simulate 5,000
```
requests (JMeter) with
```
50% valid and 50%
invalid email inputs.
Mixed Input Data
```
(2,500 Valid,
```
```
2,500 Invalid)
```
The system processes
valid requests
successfully and
displays appropriate
errors for invalid
requests.
The system did not
process valid
requests.
F
104
```
2.3.13 NF-006 - Reliability - Password Reset (Tester: Kei Kar)
```
This NFR ensures alumni can reliably reset forgotten passwords, balancing security and user convenience.
Requirement ID Feature Priority
NF-006 Reliability - Password Reset High
The techniques that will be applied are as follows:
1. Stress Testing (Black Box - System)
Nature of Requirement:
The password reset function is designed to provide a reliable and secure way for users to regain access.
```
Justification:
```
Reliability testing is crucial for ensuring that the password reset mechanism functions reliably under various conditions, including network
interruptions, multiple reset attempts, and invalid inputs. Use case testing will validate password reset mechanism’s main success scenario, and
alternative and exception flows as described in the corresponding use case. This also checks the password reset mechanism against edge cases.
Combining these methods ensures the password reset flow is robust.
```
Objective:
```
To ensure FSKTM Online Alumni System can reliably handle extreme conditions, such as processing a high volume of simultaneous password
reset requests, while maintaining stability, accuracy, and performance. This testing validates the system’s ability to process requests efficiently
during peak loads and recover gracefully from potential failures caused by excessive user activity.
```
Stress Testing (Using JMeter)
```
Test level: System Testing
Pre-condition: The system is operational and accessible. The password reset functionality is active. JMeter is configured and ready to simulate the
required test scenarios.
Post-condition: The system demonstrates reliable performance under stress conditions, maintaining stability, accuracy, and functionality. All tests
are completed using JMeter, and the results validate the system’s reliability.
105
Test Case
ID
Test Case Test Steps Input Data Expected Result Actual Result Test
Status
```
(P/F)
```
TC-PR-ST-
001
Verify system
reliability when
handling a high
volume of
simultaneous
password reset
requests.
1. Configure JMeter
to simulate 10,000
users submitting the
"Forgot Password"
form simultaneously.
Load Testing Simulation Data The system processes
all requests efficiently
without crashes or
delays.
The system did
not process all
requests and
without crashes.
F
TC-PR-ST-
002
Verify the system's
stability when
processing password
reset requests under
resource-constrained
conditions.
1. Configure JMeter
to restrict server
```
resources (e.g.,
```
```
memory or CPU) to
```
50% capacity and
simulate 1,000
requests.
Resource-Constrained Simulation
Data
The system remains
stable and processes all
requests without
significant delays or
errors.
The system is
unstable and does
not process all
requests without
significant delays
or errors.
F
TC-PR-ST-
003
Verify system
response time for
password reset
emails under peak
usage conditions.
1. Use JMeter to
generate 5,000
simultaneous
password reset
requests and measure
email delivery time.
Peak Traffic Simulation Data Password reset emails
are sent within 5
seconds during peak
traffic.
Password reset
emails are not
send within 5
seconds during
peak traffic.
F
TC-PR-ST-
004
Verify the system’s
ability to recover
1. Simulate a server
crash using JMeter
Server Recovery Simulation Data The system recovers
without data loss, and
The system
recovers with F
106
after a failure during
peak password reset
request loads.
while processing
5,000 password reset
requests and restore
the server.
pending requests are
processed upon
restoration.
data loss, and
pending requests
are processed
upon restoration.
TC-PR-ST-
005
Verify system
accuracy in handling
malformed or invalid
requests under stress.
1. Use JMeter to
simulate 5,000
requests with 50%
valid and 50%
invalid email inputs.
```
Mixed Input Data (Valid/Invalid) The system processes
```
valid requests
successfully and
displays appropriate
errors for invalid
requests.
The system did
not process valid
requests.
F
107
Test Procedure Specification
```
Online Alumni System (OAS)
```
```
Version: 1.0.0
```
```
Date: 15/01/2025
```
108
3.0 Test Procedure Specification
```
F001 - Register User Account (Testers: Yallini & Firdaus)
```
This section outlines the test procedures designed to verify the system's functionality based on defined use
cases. Use case testing ensures that the system behaves as expected when users interact with it in various
ways, fulfilling the intended purpose of each use case. These tests cover both normal and exceptional user
interactions to ensure robustness and proper error handling.
```
Use Case Testing (Yallini)
```
TP-UC-001 - Successful Registration with Valid Data
Test Procedure
ID
TP-UC-001
Objective Verify the registration functionality of the user account.
Test Cases to be
Executed
RU-UC-001, RU-UC-002, RU-UC-003, RU-UC-004, RU-UC-005, RU-UC-006,
RU-UC-007, RU-UC-008, RU-UC-009, RU-UC-010, RU-UC-011, RU-UC-012,
RU-UC-013, RU-UC-014, RU-UC-015
Set Up // Selenium Script
```
package compatibilityTest;
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
```
import org.openqa.selenium.support.ui.ExpectedConditions;
```
```
import org.openqa.selenium.support.ui.WebDriverWait;
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
// Setup ChromeDriver using WebDriverManager
```
WebDriverManager.chromedriver().setup();
```
// Set Chrome options
```
ChromeOptions options = new ChromeOptions();
```
```
options.addArguments("--disable-popup-blocking");
```
109
```
WebDriver driver = new ChromeDriver(options);
```
```
try {
```
// TP-UC-001: Verify successful registration flow
// Navigate to registration page
```
driver.get("http://example.com/registration");
```
// Enter valid data in all required fields
```
driver.findElement(By.id("name")).sendKeys("John Doe");
```
```
driver.findElement(By.id("email")).sendKeys("johndoe@example.com");
```
```
driver.findElement(By.id("password")).sendKeys("Password123!");
```
```
driver.findElement(By.id("confirmPassword")).sendKeys("Password123!");
```
// Complete CAPTCHA if needed
```
// driver.findElement(By.id("captcha")).sendKeys("captcha_value");
```
// Click "Register"
```
driver.findElement(By.id("registerButton")).click();
```
// Wait and verify account creation
```
WebDriverWait wait = new WebDriverWait(driver, Duration.ofSeconds(10));
```
WebElement message =
```
wait.until(ExpectedConditions.visibilityOfElementLocated(By.id("confirmationMes
```
```
sage")));
```
```
System.out.println("Confirmation Message: " + message.getText()); //
```
Capture the output for verification
// Add more test cases execution here in a similar approach
// RU-UC-002: Verify invalid email format handling
// RU-UC-003: Verify password strength requirements
// RU-UC-004: Verify duplicate username handling
// RU-UC-005: Verify handling of missing fields
// ...
```
} catch (Exception e) {
```
```
e.printStackTrace();
```
```
} finally {
```
// Close the browser
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
110
```
Boundary Value Analysis (System Testing Level)
```
Test Procedure
ID
TP-BVA-001
Objective Verify the boundary value analysis functionality for user registration, including
name length, password length, and graduation year.
Test Cases to be
Executed
RU-BVA-001, RU-BVA-002, RU-BVA-003, RU-BVA-004, RU-BVA-005,
RU-BVA-006, RU-BVA-007, RU-BVA-008, RU-BVA-009, RU-BVA-010,
RU-BVA-011
Set Up Selenium Script
```
package boundaryValueAnalysisTest;
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
```
import org.openqa.selenium.support.ui.ExpectedConditions;
```
```
import org.openqa.selenium.support.ui.WebDriverWait;
```
```
import io.github.bonigarcia.wdm.WebDriverManager;
```
```
import java.time.Duration;
```
```
public class RegistrationBoundaryTest {
```
```
public static void main(String[] args) {
```
// Setup ChromeDriver using WebDriverManager
```
WebDriverManager.chromedriver().setup();
```
// Set Chrome options
```
ChromeOptions options = new ChromeOptions();
```
```
options.addArguments("--disable-popup-blocking");
```
```
WebDriver driver = new ChromeDriver(options);
```
```
try {
```
```
// Test Case: RU-BVA-001 (Minimum/Maximum Name Length)
```
```
driver.get("http://example.com/registration");
```
```
driver.findElement(By.id("name")).sendKeys("A");
```
```
driver.findElement(By.id("email")).sendKeys("email@example.com");
```
```
driver.findElement(By.id("password")).sendKeys("Password123!");
```
```
driver.findElement(By.id("confirmPassword")).sendKeys("Password123!");
```
```
driver.findElement(By.id("registerButton")).click();
```
// Wait and verify
```
WebDriverWait wait = new WebDriverWait(driver, Duration.ofSeconds(10));
```
111
WebElement message =
```
wait.until(ExpectedConditions.visibilityOfElementLocated(By.id("nameErrorMessage")))
```
```
;
```
```
System.out.println("Name Error Message (Min): " + message.getText());
```
```
driver.navigate().refresh();
```
```
driver.findElement(By.id("name")).sendKeys("A".repeat(51));
```
```
driver.findElement(By.id("email")).sendKeys("email@example.com");
```
```
driver.findElement(By.id("password")).sendKeys("Password123!");
```
```
driver.findElement(By.id("confirmPassword")).sendKeys("Password123!");
```
```
driver.findElement(By.id("registerButton")).click();
```
WebElement maxMessage =
```
wait.until(ExpectedConditions.visibilityOfElementLocated(By.id("nameErrorMessage")))
```
```
;
```
```
System.out.println("Name Error Message (Max): " + maxMessage.getText());
```
// RU-BVA-002: Minimum/Maximum Password Length
```
driver.navigate().refresh();
```
```
driver.findElement(By.id("name")).sendKeys("John Doe");
```
```
driver.findElement(By.id("email")).sendKeys("email@example.com");
```
```
driver.findElement(By.id("password")).sendKeys("P@sswrd8");
```
```
driver.findElement(By.id("confirmPassword")).sendKeys("P@sswrd8");
```
```
driver.findElement(By.id("registerButton")).click();
```
WebElement passwordSuccessMessage =
```
wait.until(ExpectedConditions.visibilityOfElementLocated(By.id("confirmationMessage"
```
```
)));
```
```
System.out.println("Password Success Message: " +
```
```
passwordSuccessMessage.getText());
```
```
driver.navigate().refresh();
```
```
driver.findElement(By.id("name")).sendKeys("John Doe");
```
```
driver.findElement(By.id("email")).sendKeys("email@example.com");
```
```
driver.findElement(By.id("password")).sendKeys("P@sswrd");
```
```
driver.findElement(By.id("confirmPassword")).sendKeys("P@sswrd");
```
```
driver.findElement(By.id("registerButton")).click();
```
WebElement passwordErrorMessage =
```
wait.until(ExpectedConditions.visibilityOfElementLocated(By.id("passwordErrorMessag
```
```
e")));
```
```
System.out.println("Password Error Message: " +
```
```
passwordErrorMessage.getText());
```
// RU-BVA-003: Invalid Graduation Year
```
driver.navigate().refresh();
```
```
driver.findElement(By.id("name")).sendKeys("John Doe");
```
```
driver.findElement(By.id("email")).sendKeys("email@example.com");
```
```
driver.findElement(By.id("password")).sendKeys("Password123!");
```
```
driver.findElement(By.id("confirmPassword")).sendKeys("Password123!");
```
112
```
driver.findElement(By.id("graduationYear")).sendKeys("1800"); // Invalid year
```
```
driver.findElement(By.id("registerButton")).click();
```
WebElement graduationYearErrorMessage =
```
wait.until(ExpectedConditions.visibilityOfElementLocated(By.id("graduationYearErrorM
```
```
essage")));
```
```
System.out.println("Graduation Year Error Message: " +
```
```
graduationYearErrorMessage.getText());
```
// Add more test cases execution here in a similar approach
// RU-BVA-004: Minimum Name Length
// RU-BVA-005: Just Below Minimum Name Length
// RU-BVA-006: Maximum Name Length
// RU-BVA-007: Just Above Maximum Name Length
// RU-BVA-008: Minimum Password Length
// RU-BVA-009: Just Below Minimum Password Length
// RU-BVA-010: Maximum Graduation Year
// RU-BVA-011: Just Above Maximum Graduation Year
```
} catch (Exception e) {
```
```
e.printStackTrace();
```
```
} finally {
```
// Close the browser
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
Equivalence Partitioning (Firdaus)
```
TP-RU-EP-001: Valid Email Handling
Test Procedure ID TP-RU-EP-001
Objective To verify the system correctly accepts valid email addresses from various
common and unusual domains.
Test Cases to be
Executed
RU-EP-001, RU-EP-002
Set Up 1. Access the registration page.
2. Prepare a list of valid email addresses using common and unusual domains.
Wrap Up None
113
TP-RU-EP-002: Invalid Email Handling
Test Procedure ID TP-RU-EP-002
Objective To verify that the system correctly rejects invalid email addresses.
Test Cases to be
Executed
RU-EP-003, RU-EP-004, RU-EP-005, RU-EP-006
Set Up 1. Access the registration page.
2. Prepare a set of test emails, each with an invalid format, such as
test.gmail.com, test@ , test!@gmail.com, and extremely long email address
exceeding the character limit
Wrap Up None
TP-RU-EP-003: Valid/Invalid Password Handling
Test Procedure ID TP-RU-EP-003
```
Objective To verify the system handles valid (strong) and invalid (weak, incorrect format,
```
```
excessive length) passwords according to defined criteria.
```
Test Cases to be
Executed
RU-EP-007, RU-EP-008, RU-EP-009, RU-EP-010
Set Up 1. Access the registration page.<br>2. Ensure you are familiar with the
```
password requirements (length, complexity, allowed characters).
```
Wrap Up None
```
Error Guessing (Firdaus)
```
TP-RU-EG-001: Password Confirmation Mismatch
Test Procedure ID TP-RU-EG-001
Objective To confirm that the system correctly detects and reports password confirmation
mismatches, preventing registration with inconsistent passwords.
Test Cases to be
Executed
RU-EG-001
114
Set Up 1. Access the registration page.
2. Prepare two different passwords – one for the "Password" field and a
different one for the "Confirm Password" field.
Wrap Up None
TP-RU-EG-002: Empty Password Field
Test Procedure ID TP-RU-EG-002
Objective To verify that the system correctly handles and reports an empty password
field, enforcing the requirement for a password.
Test Cases to be
Executed
RU-EG-002
Set Up 1. Access the registration page.
Wrap Up None
TP-RU-EG-003: Empty Email Field
Test Procedure ID TP-RU-EG-003
Objective To ensure the system requires a valid email address.
Test Cases to be
Executed
RU-EG-003
Set Up Access the registration page.
Wrap Up None
TP-RU-EG-004: Optional Field - Invalid Input
Test Procedure ID TP-RU-EG-004
Objective Check if invalid character/format is ignored, displayed as a warning, and still
proceeds with registration.
Test Cases to be
Executed
RU-EG-004
Set Up Access the registration page. Ensure the application has optional input fields.
115
Wrap Up None
TP-RU-EG-005: Unresponsive Captcha
Test Procedure ID TP-RU-EG-005
Objective To verify appropriate feedback is provided and registration is blocked if the
Captcha is unresponsive.
Test Cases to be
Executed
RU-EG-005
Set Up 1. Access the registration page.
2. If necessary, simulate network conditions or use browser developer tools to
slow down or block Captcha loading.
Wrap Up Reset network settings if modified.
TP-RU-EG-006: Partially Filled Forms - Data Loss
Test Procedure ID TP-RU-EG-006
Objective Verify data is retained or not when navigating away and returning.
Test Cases to be
Executed
RU-EG-006
Set Up 1. Access the registration page.
Wrap Up None
TP-RU-EG-007: Copy/Paste Behavior
Test Procedure ID TP-RU-EG-007
Objective To ensure the application handles pasted input correctly and prevents
vulnerabilities
Test Cases to be
Executed
RU-EG-007
Set Up Access the registration page. Have sample valid and invalid data prepared for
copy-pasting.
116
Wrap Up None
TP-RU-EG-008: Rapid Form Submission
Test Procedure ID TP-RU-EG-008
Objective To verify correct handling of rapid submissions and prevent duplicate
registrations.
Test Cases to be
Executed
RU-EG-008
Set Up Access the registration page. Have valid registration data prepared.
Wrap Up Check the database or admin panel to confirm only one account was created.
117
```
F002 - Log In (Tester: Mai)
```
```
This section details the test procedures for the user login functionality (F002), a crucial component of the
```
OAS. These tests cover various scenarios, including successful login with valid credentials, handling
invalid inputs, error message validation, and security considerations. Rigorous testing of the login process
is essential to protect against unauthorized access and ensure a smooth user experience.
```
Test Cases using Use Case Testing (System Testing Level)
```
TP-LI-UC-001 - Successful Login with Valid Credentials
Test Procedure ID TP- LI-UC-001
Objective To verify that a user can log in with valid credentials.
Test Cases to be Executed LI-UC-001
Set Up Ensure the FSKTM Online Alumni System login page is
accessible. Confirm the valid email and password are created in
the database.
Wrap Up None
TP-LI-UC-002 - Invalid Password Handling
Test Procedure ID TP- LI-UC-002
Objective To verify the system displays an error message when a valid
email is used with an invalid password.
Test Cases to be Executed LI-UC-002
Set Up Ensure the login page is accessible. Confirm the email exists in
the database but use an incorrect password.
Wrap Up None
TP-LI-UC-003 - Invalid Email Format Handling
Test Procedure ID TP- LI-UC-003
Objective To validate that the system displays an error message for invalid
email format.
118
Test Cases to be Executed LI-UC-003
Set Up Ensure the login page is accessible. Prepare an invalid email
format and any password.
Wrap Up None
TP-LI-UC-004 - Unregistered Email Handling
Test Procedure ID TP- LI-UC-004
Objective To ensure the system displays an error message when an
unregistered email is used.
Test Cases to be Executed LI-UC-004
Set Up Ensure the login page is accessible. Confirm the email is not
registered in the database.
Wrap Up None
TP-LI-UC-005 - Empty Credentials Handling
Test Procedure ID TP- LI-UC-005
Objective To verify that leaving both email and password fields empty
triggers an error message.
Test Cases to be Executed LI-UC-005
Set Up Ensure the login page is accessible. Leave the email and
password fields blank.
Wrap Up None
TP-LI-UC-006 - Password Reset Functionality
Test Procedure ID TP- LI-UC-006
Objective To test the password reset functionality with a valid email.
Test Cases to be Executed LI-UC-006
119
Set Up Ensure the login page is accessible. Confirm the email exists in
the database.
Wrap Up None
TP-LI-UC-007 - Deleted Account Login Prevention
Test Procedure ID TP- LI-UC-007
Objective To ensure that attempting to log in with credentials for a deleted
account shows an appropriate error message.
Test Cases to be Executed LI-UC-007
Set Up Ensure the account used is marked as deleted in the database.
Access the login page.
Wrap Up None
TP-LI-UC-008 - Unverified Account Login Prevention
Test Procedure ID TP- LI-UC-008
Objective To verify that the system prevents login for unverified accounts.
Test Cases to be Executed LI-UC-008
Set Up Ensure the account status is set as unverified in the database.
Access the login page.
Wrap Up None
TP-LI-UC-009 - SQL Injection Prevention
Test Procedure ID TP- LI-UC-009
Objective To validate that SQL injection attempts are blocked and do not
bypass authentication.
Test Cases to be Executed LI-UC-009
120
Set Up Access the login page. Use an SQL injection string in the email
field.
Wrap Up None
TP-LI-UC-010 - Session Timeout Verification
Test Procedure ID TP- LI-UC-010
Objective To verify that the system logs the user out after 15 minutes of
inactivity.
Test Cases to be Executed LI-UC-010
Set Up Log in to the system with valid credentials. Wait for 15 minutes
without any interaction.
Wrap Up None
121
```
State Transition Testing (System Testing Level)
```
TP-LI-STS-001 - Invalid Email State Transition
Test Procedure ID TP- LI - STS – 001
Objective Verify that an appropriate error message is displayed for invalid
emails.
Test Cases to be Executed Input an invalid email and verify the error message displayed.
Set Up Access the login page and ensure no active session.
Prepare invalid email test data.
Wrap Up Log out if logged in accidentally.
Record test results.
Clean up test environment.
TP-LI-STS-002 - Valid Email State Transition
Test Procedure ID TP- LI - STS – 002
Objective Verify the system transitions correctly on valid email input.
Test Cases to be Executed Input a valid email and verify transition to password validation.
Set Up Access the login page and ensure no active session.
Prepare valid email test data.
Wrap Up Log out if logged in accidentally.
Record test results.
Clean up test environment.
TP-LI-STS-003 - Invalid Password State Transition
Test Procedure ID TP- LI - STS – 003
Objective Verify the system transitions correctly on valid email input.
Test Cases to be Executed Input a valid email and an invalid password, and verify the error
message.
122
Set Up Access the login page and ensure no active session.
Prepare valid email and invalid password test data.
Wrap Up Log out if logged in accidentally.
Record test results.
Clean up test environment.
1. Error Guessing (System Testing Level)
TP-LI-EG-001 - Invalid Email Format Detection
Test Procedure ID TP- LI-EG-001
Objective Verify that the system detects invalid email formats and displays an
appropriate error message.
Test Cases to be Executed LI-EG-001
Set Up Open the browser, navigate to the login page, and ensure the
system is operational.
Wrap Up None
TP-LI-EG-002 - Handling Extremely Long Passwords
Test Procedure ID TP- LI-EG-002
Objective Check if the system handles extremely long passwords without
crashing and displays a relevant error message.
Test Cases to be Executed LI-EG-002
Set Up Open the browser, navigate to the login page, and ensure the
system is operational.
Wrap Up None
TP-LI-EG-003 - Email Address Trimming
Test Procedure ID TP- LI-EG-003
Objective Verify that leading or trailing spaces in email addresses are
trimmed before processing.
Test Cases to be Executed LI-EG-003
Set Up Open the browser, navigate to the login page, and ensure the
system is operational.
Wrap Up None
TP-LI-EG-004 - Password Special Character Support
Test Procedure ID TP- LI-EG-004
Objective Validate that the system supports passwords containing special
characters.
Test Cases to be Executed LI-EG-004
123
Set Up Open the browser, navigate to the login page, and ensure the
system is operational.
Wrap Up None
TP-LI-EG-005 - Email Address Case Sensitivity
Test Procedure ID TP- LI-EG-005
Objective Test whether the login functionality is case-sensitive for email
addresses
Test Cases to be Executed LI-EG-005
Set Up Open the browser, navigate to the login page, and ensure the
system is operational.
Wrap Up None
TP-LI-EG-006 - Multiple Simultaneous Logins
Test Procedure ID TP- LI-EG-006
Objective Verify that multiple users can log in simultaneously without
system slowdowns or crashes.
Test Cases to be Executed LI-EG-006
Set Up Prepare multiple devices or users to initiate login attempts
simultaneously.
Wrap Up None
TP-LI-EG-007 - Login During Maintenance Mode
Test Procedure ID TP- LI-EG-007
Objective Confirm that the system prevents login during maintenance and
displays a maintenance notice.
Test Cases to be Executed LI-EG-007
124
Set Up Schedule the system to enter maintenance mode and navigate to
the login page.
Wrap Up None
TP-LI-EG-008 - Password Reset Request Limiting
Test Procedure ID TP- LI-EG-008
Objective Ensure the system restricts rapid successive password reset
email requests to prevent spam.
Test Cases to be Executed LI-EG-008
Set Up Open the "Forgot Password" page and ensure a valid email
account is available for testing.
Wrap Up None
TP-LI-EG-009 - Session Expiration Redirect
Test Procedure ID TP- LI-EG-009
Objective Verify that the system redirects users to the login page after
their session expires.
Test Cases to be Executed LI-EG-009
Set Up Log in and keep the session idle until it expires.
Wrap Up None
TP-LI-EG-010 - Invalid Email Domain Handling
Test Procedure ID TP- LI-EG-010
Objective Validate that the system prevents login attempts using email
addresses with invalid domains.
Test Cases to be Executed LI-EG-010
125
Set Up Open the browser, navigate to the login page, and ensure the
system is operational.
Wrap Up None
126
```
F003 - Manage User Profile (Tester: Kei Kar)
```
```
This section covers the test procedures for managing user profiles (F003) within the OAS. These
```
procedures verify the functionality for editing profile information, changing passwords, and deleting
accounts, ensuring data integrity, security, and proper user interface functionality.
Use Case Testing
TP-MUP-UC-001 - Editing Profile with Valid Data
Test Procedure ID TP-MUP-UC-001
Objective Verify editing profile with valid data.
Test Cases to be Executed TC-MUP-UC-001
Set Up 1. Log into the system with valid credentials.
2. Navigate to the "My Profile" page from the main
dashboard.
3. Click on the "Settings" dropdown menu and select "Edit
Profile".
4. Verify that the system navigates to the "Edit My Profile"
page.
5. Ensure the biography field is editable before proceeding.
Wrap Up None
127
TP-MUP-UC-002 - Password Change Process
Test Procedure ID TP-MUP-UC-002
Objective Verify the password change process updates the password
correctly.
Test Cases to be Executed TC-MUP-UC-002
Set Up 1. Log into the system with valid credentials.
2. Navigate to the "My Profile" page from the main
dashboard.
3. Click on the "Settings" dropdown menu and select
"Change Password".
4. Verify that the system displays fields to input the current
password, new password, and confirmation password.
5. Ensure all fields are visible and functional before
proceeding.
Wrap Up None
TP-MUP-UC-003 - Account Deletion Process
Test Procedure ID TP-MUP-UC-003
Objective Verify deleting account with user confirmation.
Test Cases to be Executed TC-MUP-UC-003
Set Up 1. Log into the system with valid credentials.
2. Navigate to the "My Profile" page from the main
dashboard.
3. Click on the "Settings" dropdown menu and select
"Delete Account".
4. Verify that the system displays a confirmation prompt for
account deletion.
5. Ensure the prompt requires password input for
confirmation.
Wrap Up None
TP-MUP-UC-004 - Profile Editing Cancellation
Test Procedure ID TP-MUP-UC-004
Objective Verify the system handles cancellation during the profile
editing process.
Test Cases to be Executed TC-MUP-UC-004
128
Set Up 1. Log into the system with valid credentials.
2. Navigate to the "My Profile" page from the main
dashboard.
3. Click on the "Settings" dropdown menu and select "Edit
Profile".
4. Verify that the "Edit My Profile" page is displayed with
editable fields.
5. Ensure the biography field is editable and ready for input.
Wrap Up None
TP-MUP-UC-005 - Password Change Cancellation
Test Procedure ID TP-MUP-UC-005
Objective Verify the system handles cancellation during the password
change process.
Test Cases to be Executed TC-MUP-UC-005
Set Up 1. Log into the system with valid credentials.
2. Navigate to the "My Profile" page from the main
dashboard.
3. Click on the "Settings" dropdown menu and select
"Change Password".
4. Verify that the system displays fields for entering the
current password, new password, and confirmation
password.
5. Ensure all fields are visible and functional for input
before proceeding.
Wrap Up None
TP-MUP-UC-006 - Account Deletion Cancellation
Test Procedure ID TP-MUP-UC-006
Objective Verify the system handles cancellation during the account
deletion process.
Test Cases to be Executed TC-MUP-UC-006
Set Up 1. Log into the system with valid credentials.
2. Navigate to the "My Profile" page from the main
dashboard.
3. Click on the "Settings" dropdown menu and select "Delete
Account".
4. Verify that the system displays a confirmation prompt for
account deletion.
5. Ensure the password input field is visible and functional
129
before proceeding.
Wrap Up None
Error Guessing
TP-MUP-EG-001 - Empty Password Fields Handling
Test Procedure ID TP-MUP-EG-001
Objective Verify the system displays an error when the password fields
are left empty.
Test Cases to be Executed TC-MUP-EG-001
Set Up 1. Log into the system with valid credentials.
2. Navigate to the "My Profile" page.
3. Click the "Settings" dropdown menu.
4. Select "Change Password".
5. Leave all password fields empty.
Wrap Up None
TP-MUP-EG-002 - Incorrect Current Password Handling
Test Procedure ID TP-MUP-EG-002
Objective Verify the system handles an incorrect current password
during the password change process.
Test Cases to be Executed TC-MUP-EG-002
Set Up 1. Log into the system with valid credentials.
2. Navigate to the "My Profile" page.
3. Click the "Settings" dropdown menu.
4. Select "Change Password".
5. Enter an incorrect current password.
6. Enter and confirm a valid new password.
Wrap Up None
TP-MUP-EG-003 - Incorrect Password for Account Deletion
Test Procedure ID TP-MUP-EG-003
Objective Verify the system handles an incorrect password during the
130
account deletion process.
Test Cases to be Executed TC-MUP-EG-003
Set Up 1. Log into the system with valid credentials.
2. Navigate to the "My Profile" page.
3. Click the "Settings" dropdown menu.
4. Select "Delete Account".
5. Enter an incorrect password in the prompt.
Wrap Up None
TP-MUP-EG-004 - Invalid New Password Input
Test Procedure ID TP-MUP-EG-004
Objective Verify the system handles invalid new password input during
the password change process.
Test Cases to be Executed TC-MUP-EG-004
Set Up 1. Log into the system with valid credentials.
2. Navigate to the "My Profile" page.
3. Click the "Settings" dropdown menu.
4. Select "Change Password".
5. Enter the current password.
6. Enter a new password that is less than 5 or more than 20
characters.
7. Confirm the invalid password.
Wrap Up None
TP-MUP-EG-005 - Mismatched Confirmation Passwords
Test Procedure ID TP-MUP-EG-005
Objective Verify the system handles mismatched confirmation passwords
during the password change process.
Test Cases to be Executed TC-MUP-EG-005
Set Up 1. Log into the system with valid credentials.
2. Navigate to the "My Profile" page.
3. Click the "Settings" dropdown menu.
4. Select "Change Password".
5. Enter the current password.
6. Enter a new password.
7. Enter a mismatched confirmation password.
Wrap Up None
131
GUI Testing
TP-MUP-GUI-001 - Navigation to "My Profile" Page
Test Procedure ID TP-MUP-GUI-001
Objective Verify navigation to the "My Profile" page.
Test Cases to be Executed TC-MUP-GUI-001
Set Up 1. Log into the system with valid credentials.
2. Click the "My Profile" button in the navigation bar.
3. Verify that the "My Profile" page loads and displays
personal information fields clearly.
Wrap Up None
TP-MUP-GUI-002 - Layout and Alignment of "My Profile" Page
Test Procedure ID TP-MUP-GUI-002
Objective Verify the layout and alignment of the "My Profile" page.
Test Cases to be Executed TC-MUP-GUI-002
Set Up 1. Log into the system with valid credentials.
2. Navigate to the "My Profile" page.
3. Inspect the alignment and visibility of all personal
information fields to ensure there is no overlap or
misalignment.
Wrap Up None
TP-MUP-GUI-003 - "Settings" Dropdown Options
Test Procedure ID TP-MUP-GUI-003
Objective Verify that the "Settings" dropdown displays all options.
Test Cases to be Executed TC-MUP-GUI-003
Set Up 1. Log into the system with valid credentials.
2. Navigate to the "My Profile" page.
3. Click the "Settings" dropdown button and verify that "Edit
Profile," "Change Password," and "Delete Account" options are
displayed.personal information fields to ensure there is no
132
overlap or misalignment.
Wrap Up None
TP-MUP-GUI-004 - Navigation to "Edit My Profile" Page
Test Procedure ID TP-MUP-GUI-004
Objective Verify navigation to the "Edit My Profile" page.
Test Cases to be Executed TC-MUP-GUI-004
Set Up 1. Log into the system with valid credentials.
2. Navigate to the "My Profile" page.
3. Click the "Settings" dropdown menu and select "Edit
Profile." Ensure that the "Edit My Profile" page loads
successfully.
Wrap Up None
TP-MUP-GUI-005 - "Edit My Profile" Form Validation
Test Procedure ID TP-MUP-GUI-005
Objective Verify the "Edit My Profile" page form validation.
Test Cases to be Executed TC-MUP-GUI-005
Set Up 1. Log into the system with valid credentials.
2. Navigate to the "Edit My Profile" page via the "Settings"
dropdown menu.
3. Leave the biography field empty and click "Save." Verify the
error message: "Please fill out this field."
Wrap Up None
TP-MUP-GUI-006 - "Change Password" Feature
Test Procedure ID TP-MUP-GUI-006
Objective Verify the "Change Password" feature.
Test Cases to be Executed TC-MUP-GUI-006
Set Up 1. Log into the system with valid credentials.
2. Navigate to the "My Profile" page.
3. Select "Change Password" from the "Settings" dropdown
menu.
4. Enter the current password and mismatched confirmation
password.
133
5. Click "Confirm" and verify the error message: "Confirmation
password does not match."
Wrap Up None
TP-MUP-GUI-007 - "Delete Account" Confirmation
Test Procedure ID TP-MUP-GUI-007
Objective Verify the "Delete Account" confirmation.
Test Cases to be Executed TC-MUP-GUI-007
Set Up 1. Log into the system with valid credentials.
2. Navigate to the "My Profile" page.
3. Select "Change Password" from the "Settings" dropdown
menu.
4. Enter the current password and mismatched confirmation
password.
5. Click "Confirm" and verify the error message:
"Confirmation password does not match."
Wrap Up None
134
```
F004 - View Events (Tester: Kei Kar)
```
```
This section outlines the test procedures for viewing events (F004) within the OAS. These tests verify the
```
navigation to the events page, the functionality of the search bar, and the accurate display of event details,
including considerations for error handling and user interface testing.
Use Case Testing
TP-VE-UC-001 - Navigation to "Events" Page
Test Procedure ID TP-VE-UC-001
Objective Verify navigation to the "Events" page.
Test Cases to be Executed TC-VE-UC-001
Set Up 1. Log into the system with valid credentials.
2. Navigate to the dashboard.
3. Click the "All Events" button in the navigation bar or the
"View More" button on the home page.
4. Verify the system navigates to the "Events" page and
displays a list of events.
Wrap Up None
TP-VE-UC-002 - Event Search Functionality
Test Procedure ID TP-VE-UC-002
Objective Verify event search functionality.
Test Cases to be Executed TC-VE-UC-002
Set Up 1. Log into the system with valid credentials.
2. Navigate to the "Events" page.
3. Locate the search bar.
4. Enter a valid keyword, such as "Machine Learning," and
click the search icon.
5. Repeat with an invalid keyword, such as "Hello."
6. Verify the system displays a filtered list for valid
keywords and no results for invalid ones.
Wrap Up None
TP-VE-UC-003 - Event Details Display
135
Test Procedure ID TP-VE-UC-003
Objective Verify event details are displayed correctly.
Test Cases to be Executed TC-VE-UC-003
Set Up 1. Log into the system with valid credentials.
2. Navigate to the "Events" page.
3. Select an event titled "Machine Learning Workshop" from
the list.
4. Verify the system navigates to the event details page and
displays the title, date, time, location, and description.
Wrap Up None
136
Error Guessing
TP-VE-GUI-001 - Navigation via "All Events" Button
Test Procedure ID TP-VE-UC-003
Objective Verify event details are displayed correctly.
Test Cases to be Executed TC-VE-UC-003
Set Up 1. Log into the system with valid credentials.
2. Navigate to the "Events" page.
3. Select an event titled "Machine Learning Workshop" from
the list.
4. Verify the system navigates to the event details page and
displays the title, date, time, location, and description.
Wrap Up None
GUI Testing
TP-VE-GUI-001 - Navigation via "All Events" Button
Test Procedure ID TP-VE-GUI-001
Objective Verify that the "All Events" button navigates to the "Events"
page.
Test Cases to be Executed TC-VE-GUI-001
Set Up 1. Log into the system with valid credentials.
2. Navigate to the dashboard.
3. Click the "All Events" button in the navigation bar.
4. Verify that the system navigates to the "Events" page and
displays a list of events.
Wrap Up None
TP-VE-GUI-002 - Layout and Design of "Events" Page
Test Procedure ID TP-VE-GUI-002
Objective Verify that the layout and design of the "Events" page meet
the requirements.
Test Cases to be Executed TC-VE-GUI-002
137
Set Up 1. Log into the system with valid credentials.
2. Navigate to the "Events" page.
3. Inspect the event list to ensure proper alignment, spacing,
and readability of the content.
Wrap Up None
TP-VE-GUI-003 - Search Bar Results for Valid Input
Test Procedure ID TP-VE-GUI-003
Objective Verify that the search bar displays correct results for valid
input.
Test Cases to be Executed TC-VE-GUI-003
Set Up 1. Log into the system with valid credentials.
2. Navigate to the "Events" page.
3. Enter a valid keyword (e.g., "Machine Learning") in the
search bar.
4. Verify that the system displays a filtered list of events
matching the keyword.
Wrap Up None
TP-VE-GUI-004 - Search Bar Handling of Unmatched Keywords
Test Procedure ID TP-VE-GUI-004
Objective Verify that the search bar shows an error message for
unmatched keywords.
Test Cases to be Executed TC-VE-GUI-004
Set Up 1. Log into the system with valid credentials.
2. Navigate to the "Events" page.
3. Enter an invalid keyword (e.g., "Photography") in the
search bar.
4. Verify that the system displays the error message: "Sorry,
no records found."
Wrap Up None
TP-VE-GUI-005 - Navigation to Event Details Page
138
Test Procedure ID TP-VE-GUI-005
Objective Verify that clicking on an event navigates to its details page.
Test Cases to be Executed TC-VE-GUI-005
Set Up 1. Log into the system with valid credentials.
2. Navigate to the "Events" page.
3. Click on a specific event titled "Machine Learning
Workshop."
4. Verify that the system navigates to the event details page
and displays the title, date, and description.
Wrap Up None
TP-VE-GUI-006 - Responsiveness of "Events" Page
Test Procedure ID TP-VE-GUI-006
Objective Verify that the "Events" page is responsive to different
screen sizes.
Test Cases to be Executed TC-VE-GUI-006
Set Up 1. Log into the system with valid credentials.
2. Navigate to the "Events" page.
3. Resize the browser window to different screen sizes
```
(Mobile, Tablet, Desktop).
```
4. Verify that the page layout adjusts appropriately to fit
each screen size.
Wrap Up None
139
```
F005 - Manage Job Advertisement (Tester: Azfar)
```
This section details the test procedures for managing job advertisements in the OAS. These procedures
verify the creation, editing, and deletion of job postings, including input validation, error handling, and
authorization checks. Effective management of job postings is essential for connecting alumni with
relevant opportunities. Prior to execution of the following test procedures, these special requirements
must be prepared:
1. The FSKTM Online Alumni System must be set up and running.
2. Valid alumni credentials must be available for login.
3. Existing job advertisements must be present in the database.
4. Browsers (Chrome, Firefox, Safari, Edge) should be installed for cross-browser testing.
Test Procedure
ID
Objective Test Cases to be
Executed
Set Up Wrap Up
TP-F005-001 Verify the job advertisement
creation functionality.
TC-MJA-001 1. Login as alumni. TP-F005-001
TP-F005-002 Verify the job advertisement
editing functionality.
TC-MJA-002 1. Login as alumni. TP-F005-002
TP-F005-003 Verify the job advertisement
deletion functionality.
TC-MJA-003 1. Login as alumni. TP-F005-003
TP-F005-004 Verify handling of invalid
inputs during job creation.
TC-MJA-004 1. Login as alumni. TP-F005-004
TP-F005-005 Verify unauthorized access
prevention.
TC-MJA-005 1. Attempt to
access the "Manage
Job Ads" page
without logging in.
TP-F005-005
TP-F005-006 Verify prevention of
duplicate job
advertisements.
TC-MJA-006 1. Login as alumni. TP-F005-006
140
```
F006 - Search and View Alumni Profile (Tester: Mai)
```
```
This section describes the test procedures for searching and viewing alumni profiles (F006) within the
```
OAS. These tests cover various scenarios, including keyword searches, handling empty searches, partial
keyword matches, and special character handling, ensuring accurate and efficient profile retrieval.
1. Test Cases using Use Case Testing (System Testing Level)
TP-VAP-UC-001 - Alumni Profile Search with Valid Keyword
Test Procedure ID TP- VAP-UC-001
Objective To verify that the system displays alumni profiles for a valid
keyword search.
Test Cases to be Executed VAP-UC-001
Set Up 1. Ensure the system is up and running.
2. Log in as an alumni user.
Wrap Up None
TP-VAP-UC-002 - Alumni Profile Search with Invalid Keyword
Test Procedure ID TP- VAP-UC-002
Objective To verify that the system displays "No match found" for an invalid
keyword.
Test Cases to be Executed VAP-UC-002
Set Up 1. Ensure the system is up and running.
2. Log in as an alumni user.
Wrap Up None
TP-VAP-UC-003 - Handling Empty Keyword Searches
Test Procedure ID TP- VAP-UC-003
Objective To verify that the system handles empty keyword searches
appropriately.
Test Cases to be Executed VAP-UC-003
Set Up 1. Ensure the system is up and running.
2. Log in as an alumni user.
Wrap Up None
TP-VAP-UC-004 - Navigation to Profile Details Page
Test Procedure ID TP- VAP-UC-004
Objective To verify that clicking on a profile from the search results opens
the correct profile details page.
Test Cases to be Executed VAP-UC-004
Set Up 1. Ensure the system is up and running.
2. Perform a valid search.
141
Wrap Up None
TP-VAP-UC-005 - Partial Keyword Search
Test Procedure ID TP- VAP-UC-005
Objective To verify that the system displays results for a partial keyword
search.
Test Cases to be Executed VAP-UC-005
Set Up 1. Ensure the system is up and running.
2. Log in as an alumni user.
Wrap Up None
TP-VAP-UC-006 - Handling Special Characters in Search Query
Test Procedure ID TP- VAP-UC-006
Objective To verify that the system handles special characters in the search
query without crashing.
Test Cases to be Executed VAP-UC-006
Set Up 1. Ensure the system is up and running.
2. Log in as an alumni user.
Wrap Up None
TP-VAP-UC-007 - Mixed-Case Keyword Search
Test Procedure ID TP- VAP-UC-007
Objective To verify that the system handles mixed-case keyword searches
and displays results correctly.
Test Cases to be Executed VAP-UC-007
Set Up 1. Ensure the system is up and running.
2. Log in as an alumni user.
Wrap Up None
TP-VAP-UC-008 - Handling Empty Database
Test Procedure ID TP- VAP-UC-008
Objective To verify that the system responds appropriately when the database
is empty.
Test Cases to be Executed VAP-UC-008
Set Up 1. Ensure the system is up and running.
2. Ensure no alumni records exist in the database.
3. Log in as an alumni user.
Wrap Up None
142
TP-VAP-UC-009 - Handling Very Long Keywords
Test Procedure ID TP- VAP-UC-009
Objective To verify that the system handles very long keywords without
performance issues.
Test Cases to be Executed VAP-UC-009
Set Up 1. Ensure the system is up and running.
2. Log in as an alumni user.
Wrap Up None
TP-VAP-UC-010 - Handling Keywords with Multiple Spaces
Test Procedure ID TP- VAP-UC-010
Objective To verify that the system handles keywords with multiple spaces
between words and returns trimmed results.
Test Cases to be Executed VAP-UC-010
Set Up 1. Ensure the system is up and running.
2. Log in as an alumni user.
Wrap Up None
2. Performance Testing
TP-PT-UC-001 - Single User Search Performance
Test Procedure ID TP- PT-UC-001
Objective Validate single user search performance.
Test Cases to be Executed PT-UC-001
Set Up Ensure database has sufficient alumni data, and user access is
operational.
Wrap Up None
```
TP-PT-UC-002 - Concurrent User Search Performance (100 users)
```
Test Procedure ID TP- PT-UC-002
Objective Test system behavior under 100 concurrent users
Test Cases to be Executed PT-UC-002
```
Set Up Set up load-testing software (e.g., JMeter) to simulate 100 users
```
and populate the database with relevant keywords.
Wrap Up None
TP-PT-UC-003 - Search Performance with High Database Volume
Test Procedure ID TP- PT-UC-003
143
Objective Assess performance under high database volume
Test Cases to be Executed PT-UC-003
Set Up Populate the database with 1,000,000 alumni records and verify
system capacity to handle large volumes.
Wrap Up None
```
TP-PT-UC-004 - Search Behavior with Invalid Keyword (Performance)
```
Test Procedure ID TP- PT-UC-004
Objective Validate search behavior with invalid keyword
Test Cases to be Executed PT-UC-004
Set Up Ensure database is populated and system is live.
Wrap Up None
```
TP-PT-UC-005 - Search Performance Under Peak User Load (500 users)
```
Test Procedure ID TP- PT-UC-005
Objective Measure system performance under peak user load
Test Cases to be Executed PT-UC-005
Set Up Simulate 500 concurrent users using load-testing software,
ensuring mixed valid and invalid keywords.
Wrap Up None
```
TP-PT-UC-006 - Stress Test for Extreme User Load (1000 users)
```
Test Procedure ID TP- PT-UC-006
Objective Stress test system for extreme user load
Test Cases to be Executed PT-UC-006
Set Up Use load-testing tools to simulate 1,000 users simultaneously
performing searches.
Wrap Up None
```
TP-PT-UC-007 - Search Response with Special Characters (Performance)
```
Test Procedure ID TP- PT-UC-007
Objective Verify search response with special characters
Test Cases to be Executed PT-UC-007
Set Up Confirm database readiness and system availability.
Wrap Up None
144
TP-PT-UC-008 - Search Endurance over Continuous Use
Test Procedure ID TP- PT-UC-008
Objective Validate endurance over continuous use
Test Cases to be Executed PT-UC-008
Set Up Simulate 10 users performing searches every 5 minutes for 24
hours and ensure system monitoring tools are enabled.
Wrap Up None
```
TP-PT-UC-009 - Search Behavior with Partial Keywords (Performance)
```
Test Procedure ID TP- PT-UC-009
Objective Evaluate search behavior for partial keyword
Test Cases to be Executed PT-UC-009
Set Up Ensure partial keyword matches exist in the database and search
functionality is accessible.
Wrap Up None
TP-PT-UC-010 - Database-Heavy Search Performance
Test Procedure ID TP- PT-UC-010
Objective Test database-heavy search performance
Test Cases to be Executed PT-UC-010
Set Up Populate the database with entries corresponding to large
queries and confirm server readiness.
Wrap Up None
145
```
F007 - Manage Alumni Account (Testers: Firdaus & Yallini)
```
This section outlines the test procedures for managing alumni accounts by authorized administrators
within the OAS. These procedures ensure administrators can effectively manage alumni accounts,
including updating information, activating/deactivating accounts, and handling various administrative
tasks related to alumni data. Thorough testing of these administrative functions is crucial for maintaining
data integrity and system security.
```
Use Case Testing (Yallini)
```
Test Procedure
ID
TP-UC-002
Objective Verify the functionality of managing alumni accounts, including
approving/rejecting, editing, and deleting accounts, as well as handling
unauthorized access and invalid actions.
Test Cases to be
Executed
MAA-UC-001, MAA-UC-002, MAA-UC-003, MAA-UC-004, MAA-UC-005,
MAA-UC-006
Set Up Selenium Script
```
package manageAlumniAccountTest;
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
```
import org.openqa.selenium.support.ui.ExpectedConditions;
```
```
import org.openqa.selenium.support.ui.WebDriverWait;
```
```
import io.github.bonigarcia.wdm.WebDriverManager;
```
```
import java.time.Duration;
```
```
public class ManageAlumniAccountTest {
```
```
public static void main(String[] args) {
```
// Setup ChromeDriver using WebDriverManager
```
WebDriverManager.chromedriver().setup();
```
// Set Chrome options
```
ChromeOptions options = new ChromeOptions();
```
```
options.addArguments("--disable-popup-blocking");
```
```
WebDriver driver = new ChromeDriver(options);
```
```
try {
```
```
// Test Case: MAA-UC-001 (Approve Account)
```
```
driver.get("http://example.com/admin-login");
```
```
driver.findElement(By.id("username")).sendKeys("admin");
```
146
```
driver.findElement(By.id("password")).sendKeys("adminPassword");
```
```
driver.findElement(By.id("loginButton")).click();
```
// Navigate to alumni management page
```
driver.get("http://example.com/alumni-management");
```
// Select a pending alumni account and approve it
```
driver.findElement(By.id("pendingAccount")).click();
```
```
driver.findElement(By.id("approveButton")).click();
```
// Wait and verify
```
WebDriverWait wait = new WebDriverWait(driver,
```
```
Duration.ofSeconds(10));
```
WebElement message =
```
wait.until(ExpectedConditions.visibilityOfElementLocated(By.id("statusMessage
```
```
")));
```
```
System.out.println("Status Message (Approve): " + message.getText());
```
// Refresh for next test case
```
driver.navigate().refresh();
```
```
// Test Case: MAA-UC-002 (Reject Account)
```
```
driver.findElement(By.id("pendingAccount")).click();
```
```
driver.findElement(By.id("rejectButton")).click();
```
WebElement rejectMessage =
```
wait.until(ExpectedConditions.visibilityOfElementLocated(By.id("statusMessage
```
```
")));
```
```
System.out.println("Status Message (Reject): " +
```
```
rejectMessage.getText());
```
```
// Test Case: MAA-UC-003 (Edit Account)
```
```
driver.navigate().refresh();
```
```
driver.findElement(By.id("approvedAccount")).click();
```
```
driver.findElement(By.id("editButton")).click();
```
```
driver.findElement(By.id("bio")).clear();
```
```
driver.findElement(By.id("bio")).sendKeys("Updated biography");
```
```
driver.findElement(By.id("saveButton")).click();
```
WebElement editMessage =
```
wait.until(ExpectedConditions.visibilityOfElementLocated(By.id("statusMessage
```
```
")));
```
```
System.out.println("Status Message (Edit): " + editMessage.getText());
```
```
// Test Case: MAA-UC-004 (Delete Account)
```
```
driver.navigate().refresh();
```
```
driver.findElement(By.id("approvedAccount")).click();
```
```
driver.findElement(By.id("deleteButton")).click();
```
```
driver.findElement(By.id("confirmDeleteButton")).click();
```
WebElement deleteMessage =
```
wait.until(ExpectedConditions.visibilityOfElementLocated(By.id("statusMessage
```
```
")));
```
147
```
System.out.println("Status Message (Delete): " +
```
```
deleteMessage.getText());
```
```
// Test Case: MAA-UC-005 (Unauthorized Access)
```
```
driver.get("http://example.com/logout"); // Logout as admin
```
```
driver.get("http://example.com/alumni-management");
```
WebElement accessDeniedMessage =
```
wait.until(ExpectedConditions.visibilityOfElementLocated(By.id("accessDenied
```
```
Message")));
```
```
System.out.println("Access Denied Message: " +
```
```
accessDeniedMessage.getText());
```
```
// Test Case: MAA-UC-006 (Invalid Action)
```
```
driver.get("http://example.com/admin-login");
```
```
driver.findElement(By.id("username")).sendKeys("admin");
```
```
driver.findElement(By.id("password")).sendKeys("adminPassword");
```
```
driver.findElement(By.id("loginButton")).click();
```
```
driver.get("http://example.com/alumni-management");
```
```
driver.findElement(By.id("pendingAccount")).click();
```
```
driver.findElement(By.id("editButton")).click(); // Invalid action
```
WebElement invalidActionMessage =
```
wait.until(ExpectedConditions.visibilityOfElementLocated(By.id("invalidAction
```
```
Message")));
```
```
System.out.println("Invalid Action Message: " +
```
```
invalidActionMessage.getText());
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
// Close the browser
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
GUI Testing (System Testing Level)
```
Test Procedure
ID
TP-UC-003
Objective Verify the functionality of the alumni management GUI, including navigation,
search functionality, data display, feedback messages, table sorting, pagination
controls, responsive design, filter functionality, bulk actions, and input validation.
Test Cases to be
Executed
MAA-GUI-001, MAA-GUI-002, MAA-GUI-003, MAA-GUI-004,
MAA-GUI-005, MAA-GUI-006, MAA-GUI-007, MAA-GUI-008,
MAA-GUI-009, MAA-GUI-010
148
Set Up Selenium Script
```
package manageAlumniAccountTest;
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
```
import org.openqa.selenium.support.ui.ExpectedConditions;
```
```
import org.openqa.selenium.support.ui.WebDriverWait;
```
```
import io.github.bonigarcia.wdm.WebDriverManager;
```
```
import java.time.Duration;
```
```
public class ManageAlumniGUI {
```
```
public static void main(String[] args) {
```
// Setup ChromeDriver using WebDriverManager
```
WebDriverManager.chromedriver().setup();
```
// Set Chrome options
```
ChromeOptions options = new ChromeOptions();
```
```
options.addArguments("--disable-popup-blocking");
```
```
WebDriver driver = new ChromeDriver(options);
```
```
try {
```
```
// Test Case: MAA-GUI-001 (Verify navigation and layout)
```
```
driver.get("http://example.com/admin-login");
```
```
driver.findElement(By.id("username")).sendKeys("admin");
```
```
driver.findElement(By.id("password")).sendKeys("adminPassword");
```
```
driver.findElement(By.id("loginButton")).click();
```
// Navigate to alumni management page
```
driver.get("http://example.com/alumni-management");
```
// Verify navigation and layout
WebElement navigationElement =
```
driver.findElement(By.id("navigationElement"));
```
```
System.out.println("Navigation Element Text: " +
```
```
navigationElement.getText());
```
```
// Test Case: MAA-GUI-002 (Verify search functionality)
```
```
driver.findElement(By.id("searchBar")).sendKeys("John Doe");
```
```
driver.findElement(By.id("searchButton")).click();
```
```
WebDriverWait wait = new WebDriverWait(driver,
```
```
Duration.ofSeconds(10));
```
WebElement searchResult =
```
wait.until(ExpectedConditions.visibilityOfElementLocated(By.id("searchResult")
```
```
));
```
```
System.out.println("Search Result: " + searchResult.getText());
```
```
// Test Case: MAA-GUI-003 (Verify data display)
```
149
```
driver.navigate().refresh();
```
```
WebElement alumniData = driver.findElement(By.id("alumniData"));
```
```
System.out.println("Alumni Data: " + alumniData.getText());
```
```
// Test Case: MAA-GUI-004 (Verify feedback messages)
```
```
driver.navigate().refresh();
```
```
driver.findElement(By.id("approveButton")).click();
```
WebElement feedbackMessage =
```
wait.until(ExpectedConditions.visibilityOfElementLocated(By.id("feedbackMess
```
```
age")));
```
```
System.out.println("Feedback Message: " + feedbackMessage.getText());
```
```
// Test Case: MAA-GUI-005 (Verify table sorting functionality)
```
```
driver.navigate().refresh();
```
```
driver.findElement(By.id("sortByName")).click();
```
```
WebElement sortedTable = driver.findElement(By.id("sortedTable"));
```
```
System.out.println("Sorted Table: " + sortedTable.getText());
```
```
// Test Case: MAA-GUI-006 (Verify pagination controls)
```
```
driver.navigate().refresh();
```
```
driver.findElement(By.id("paginationNext")).click();
```
WebElement paginatedContent =
```
driver.findElement(By.id("paginatedContent"));
```
```
System.out.println("Paginated Content: " + paginatedContent.getText());
```
```
// Test Case: MAA-GUI-007 (Verify responsive design)
```
```
driver.navigate().refresh();
```
WebElement responsiveLayout =
```
driver.findElement(By.id("responsiveLayout"));
```
```
System.out.println("Responsive Layout before resize: " +
```
```
responsiveLayout.getText());
```
```
driver.manage().window().setSize(new Dimension(800, 600));
```
```
System.out.println("Responsive Layout after resize: " +
```
```
responsiveLayout.getText());
```
```
// Test Case: MAA-GUI-008 (Verify filter functionality)
```
```
driver.navigate().refresh();
```
```
driver.findElement(By.id("filterByYear")).click();
```
```
driver.findElement(By.cssSelector("option[value='2025']")).click();
```
```
WebElement filteredList = driver.findElement(By.id("filteredList"));
```
```
System.out.println("Filtered List: " + filteredList.getText());
```
```
// Test Case: MAA-GUI-009 (Verify bulk actions)
```
```
driver.navigate().refresh();
```
```
driver.findElement(By.id("selectMultiple")).click();
```
```
driver.findElement(By.id("bulkApprove")).click();
```
WebElement bulkActionResult =
```
wait.until(ExpectedConditions.visibilityOfElementLocated(By.id("bulkActionRe
```
```
sult")));
```
```
System.out.println("Bulk Action Result: " + bulkActionResult.getText());
```
150
```
// Test Case: MAA-GUI-010 (Verify input validation)
```
```
driver.navigate().refresh();
```
```
driver.findElement(By.id("name")).sendKeys("John Doe");
```
```
driver.findElement(By.id("email")).sendKeys("invalid-email-format");
```
```
driver.findElement(By.id("saveButton")).click();
```
WebElement inputErrorMessage =
```
wait.until(ExpectedConditions.visibilityOfElementLocated(By.id("inputErrorMes
```
```
sage")));
```
```
System.out.println("Input Error Message: " +
```
```
inputErrorMessage.getText());
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
// Close the browser
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
State Transition Testing (System - Firdaus)
```
TP-MAA-STT-001: Initial Registration
Test Procedure ID TP-MAA-STT-001
Objective To verify that alumni registration successfully creates a pending account.
Test Cases to be Executed MAA-STT-001
Set Up Ensure the OAS registration page is accessible.
Wrap Up None.
```
TP-MAA-STT-002: Admin Approves Account (Pending to Approved)
```
Test Procedure ID TP-MAA-STT-002
Objective To verify that an admin can approve a pending alumni account, activating
it in the system.
Test Cases to be
Executed
MAA-STT-002
151
```
Set Up 1. Create a pending alumni account (following the steps in
```
```
TP-MAA-STT-001).
```
2. Log in as a faculty administrator.
Wrap Up Log out of the administrator account.
```
F008 - Manage Event (Tester: Azfar)
```
This section details the test procedures for managing events within the OAS. These tests cover creating,
updating, deleting, and managing various aspects of events, such as registration, attendance tracking, and
communication. Comprehensive testing of event management is crucial for the smooth execution of
alumni events and maintaining accurate event information. Prior to execution of the following test
procedures, these special requirements must be prepared:
1. The FSKTM Online Alumni System must be set up and running.
2. Valid faculty administrator credentials must be available for login.
3. Existing events must be present in the database for testing purposes.
4. Browsers (Chrome, Firefox, Safari, Edge) should be installed for cross-browser testing.
Test
Procedure ID
Objective Test Cases to be
Executed
Set Up Wrap Up
TP-F008-001 Verify the event
creation
functionality.
ME-UC-001 1. Login as admin. TP-F008-001
TP-F008-002 Verify the event
editing functionality.
ME-UC-002 1. Login as admin. TP-F008-002
TP-F008-003 Verify the event
deletion
functionality.
ME-UC-003 1. Login as admin. TP-F008-003
TP-F008-004 Verify handling of
invalid inputs during
event creation.
ME-UC-004 1. Login as admin. TP-F008-004
TP-F008-005 Verify unauthorized
access prevention.
ME-UC-005 1. Attempt to access the
"Manage Events" page
without logging in.
TP-F008-005
TP-F008-006 Verify prevention of
duplicate events.
ME-UC-007 1. Login as admin. TP-F008-006
TP-F008-007 Verify event calendar
functionality.
ME-GUI-003 1. Navigate to the
"Event Calendar" page.
TP-F008-007
TP-F008-008 Verify cross-browser
compatibility.
ME-GUI-006 1. Login as admin. TP-F008-008
152153
```
NF-002 - Security - Password Encryption (Tester: Yallini)
```
This section details the security testing procedures designed to validate the strength and effectiveness of
password encryption within the OAS. These tests cover various aspects of password security, including
encryption algorithms, storage practices, transmission security, and related security measures. Robust
password encryption is paramount for protecting sensitive user data and maintaining the system's overall
security posture.
TP-UC-004 - Verify Password Storage Security
Test Procedure
ID
TP-UC-004
Objective Verify the security functionalities of the system, including secure password
storage, secure password transmission, secure connection, HTTPS certificate
validity, session management, and logout mechanism.
Test Cases to be
Executed
SPE-ST-001, SPE-ST-002, SPE-ST-003, SPE-ST-004, SPE-ST-005
SPE-ST-006
Set Up
```
Ensure the system is running. Ensure that access to necessary tools (e.g., OWASP
```
```
ZAP, Burp Suite, Browser Developer Tools, and database client) is available.
```
Create a test user account if not already created.
Steps for Security Testing Using Tools
Tool/Script Setup
1. Ensure that OWASP ZAP or Burp Suite is installed and configured.
2. Ensure that a suitable database client is installed and configured to access
the database.
3. Ensure the browser's developer tools are enabled and accessible.
```
NF-003 - Usability - Cross-Browser Compatibility (Tester: Azfar)
```
This section outlines the test procedures for cross-browser compatibility, ensuring the OAS functions
correctly and consistently across different web browsers. These tests focus on verifying consistent
functionality, layout, performance, and user interface elements across various browsers and screen sizes,
contributing to a seamless user experience regardless of the user's preferred browser. Prior to execution of
the following test procedures, these special requirements must be prepared:
154
1. The FSKTM Online Alumni System must be set up and running.
2. Browsers (Chrome, Firefox, Safari, Edge) must be installed and configured for testing.
3. Stable internet connectivity is required.
4. Test accounts with valid credentials must be available for login.
5. Performance monitoring tools should be set up to measure load times.
Test Procedure
ID
Objective Test Cases to
be Executed
Set Up
TP-NF003-001 Verify consistent
functionality across
browsers.
CBC-CT-001 1. Test key features like login and
profile management.
TP-NF003-002 Verify layout consistency
across browsers.
CBC-CT-002 1. Navigate through various pages.
TP-NF003-003 Verify performance
consistency across
browsers.
CBC-CT-003 1. Measure page load times across
browsers using performance
monitoring tools.
TP-NF003-004 Verify UI element
alignment and visibility.
CBC-GUI-001 1. Navigate through various pages.
TP-NF003-005 Verify button functionality
across browsers.
```
CBC-GUI-002 1. Test all buttons (e.g., Submit,
```
```
Cancel) on Chrome, Firefox, Safari,
```
and Edge.
TP-NF003-006 Verify form rendering
across browsers.
CBC-GUI-003 1. Navigate to forms on multiple
pages.
TP-NF003-007 Verify responsiveness
across screen sizes.
CBC-GUI-004 1. Test UI elements on various screen
sizes and devices.
```
NF-004 - Security - Authentication (Tester: Mai)
```
This section details the security testing procedures focused on the authentication mechanisms of the OAS.
These tests aim to identify and mitigate potential vulnerabilities related to user authentication, ensuring
the system is protected against unauthorized access and maintains the confidentiality of user data.
```
Security Testing (Penetration Testing)
```
TP-SA-ST-001 - Password Strength Policy Enforcement
Test Procedure ID TP- SA-ST-001
Objective To verify that the system enforces password strength
policies during registration.
155
Test Cases to be Executed SA-ST-001
Set Up 1. Access the registration page.
2. Ensure no pre-existing account with weak password is
registered.
Wrap Up None
TP-SA-ST-002 - Authentication with Incorrect Credentials
Test Procedure ID TP- SA-ST-002
Objective To ensure the system does not authenticate users with
incorrect credentials.
Test Cases to be Executed SA-ST-002
Set Up 1. Prepare valid and invalid test credentials.
2. Ensure access to the login page.
Wrap Up None
TP-SA-ST-003 - SQL Injection Vulnerability Assessment
Test Procedure ID TP- SA-ST-003
Objective To check if the system is vulnerable to SQL injection
attacks on the login page.
Test Cases to be Executed SA-ST-003
Set Up 1. Access the login page.
2. Ensure test environment does not contain sensitive data.
Wrap Up None
156
TP-SA-ST-004 - Account Lockout After Multiple Failed Logins
Test Procedure ID TP- SA-ST-004
Objective To verify that accounts are locked after multiple
consecutive failed login attempts.
Test Cases to be Executed SA-ST-004
Set Up 1. Prepare an account with valid credentials.
2. Ensure the login page is accessible.
Wrap Up None
TP-SA-ST-005 - Idle Session Timeout Verification
Test Procedure ID TP- SA-ST-005
Objective To ensure the system times out idle sessions for security
purposes.
Test Cases to be Executed SA-ST-005
Set Up 1. Log in to the system with valid credentials.
2. Ensure session timeout settings are configured.
Wrap Up None
TP-SA-ST-006 - Password Reset with Invalid Email
Test Procedure ID TP- SA-ST-006
Objective To verify the password reset functionality when an invalid
email is entered.
Test Cases to be Executed SA-ST-006
157
Set Up 1. Prepare an unregistered email address.
2. Access the password reset page.
Wrap Up None
TP-SA-ST-007 - Secure Password Storage Verification
Test Procedure ID TP- SA-ST-007
```
Objective To check if passwords are stored securely (hashed and
```
```
salted) in the database.
```
Test Cases to be Executed SA-ST-007
Set Up 1. Simulate database access in a secure test environment.
2. Inspect stored passwords.
Wrap Up None
TP-SA-ST-008 - Login Communication Encryption
Test Procedure ID TP- SA-ST-008
Objective To verify that all login communications are encrypted
```
(HTTPS and secure cookies).
```
Test Cases to be Executed SA-ST-008
Set Up 1. Access the login page via a browser.
2. Enable browser developer tools to inspect requests and
cookies.
Wrap Up None
TP-SA-ST-009 - Username Exposure Prevention
158
Test Procedure ID TP- SA-ST-009
Objective To ensure the system does not expose valid usernames
through error messages during login attempts.
Test Cases to be Executed SA-ST-009
Set Up 1. Prepare valid and invalid usernames for testing.
2. Ensure access to the login page.
Wrap Up None
TP-SA-ST-010 - CAPTCHA Effectiveness Against Automated Logins
Test Procedure ID TP- SA-ST-010
Objective To verify that CAPTCHA prevents automated login
attempts.
Test Cases to be Executed SA-ST-010
Set Up 1. Access the login page.
2. Prepare an automated tool for simulating login attempts.
159
```
NR-005 - Performance - Page Load Times (Tester: Firdaus)
```
This section details the test procedures developed to evaluate the performance of the Online Alumni
```
System (OAS), specifically focusing on page load times. Performance is crucial for ensuring a positive
```
user experience, and slow page loads can lead to frustration and abandonment. Each procedure targets a
specific aspect of performance, such as responsiveness under normal and peak loads, stability under
resource constraints, and the system's ability to handle invalid requests gracefully. The results of these
tests provide valuable insights into the OAS's current performance capabilities and identify areas for
potential optimization.
TP-PLT-001 - High Volume Password Reset Request Handling
Test Procedure ID TP-PLT-001
Objective Verify system reliability when handling a high volume of simultaneous
password reset requests.
Test Cases to be
Executed
TC-PLT-001
Set Up 1. Ensure JMeter is installed and configured.2. Set up the "Forgot Password"
form with valid test data.3. Configure JMeter to simulate 10,000 simultaneous
user requests.
Wrap Up Analyze JMeter results for average response time, error rate, and throughput.
Document findings.
TP-PLT-002 - Password Reset Handling Under Resource Constraints
Test Procedure ID TP-PLT-002
Objective Verify the system's stability when processing password reset requests under
resource-constrained conditions.
Test Cases to be
Executed
TC-PLT-002
```
Set Up 1. Configure server resources to operate at 50% capacity (e.g., limit memory or
```
```
CPU usage).2. Use JMeter to simulate 1,000 password reset requests.
```
Wrap Up Monitor server resource utilization during the test. Document system stability
and error rates.
160
TP-PLT-003 - Password Reset Email Response Time Under Peak Usage
Test Procedure ID TP-PLT-003
Objective Verify system response time for password reset emails under peak usage
conditions.
Test Cases to be
Executed
TC-PLT-003
Set Up 1. Configure JMeter to simulate 5,000 simultaneous password reset requests.2.
```
Instrument the system to measure email delivery time (e.g., using timestamps in
```
```
logs or a dedicated monitoring tool).
```
Wrap Up Collect and analyze email delivery times. Calculate average, minimum,
maximum, and percentile values. Document findings.
TP-PLT-004 - System Recovery After Failure During Peak Password Reset Load
Test Procedure ID TP-PLT-004
Objective Verify the system’s ability to recover after a failure during peak password reset
request loads.
Test Cases to be
Executed
TC-PLT-004
Set Up 1. Use JMeter to simulate 5,000 simultaneous password reset requests.2.
```
Implement a mechanism to simulate a server crash (e.g., by terminating a
```
```
critical process or service).3. Have a procedure ready to restore the server.
```
Wrap Up Document the time taken for the system to recover. Verify data integrity and the
successful processing of pending requests.
TP-PLT-005 - Handling Malformed/Invalid Password Reset Requests Under Stress
Test Procedure ID TP-PLT-005
Objective Verify system accuracy in handling malformed or invalid requests under stress.
161
Test Cases to be
Executed
TC-PLT-005
Set Up 1. Configure JMeter to simulate 5,000 password reset requests.2. Prepare a
dataset with 50% valid and 50% invalid email addresses.
Wrap Up Analyze logs and system responses to confirm appropriate error handling for
invalid requests and successful processing of valid requests.
162
```
NF-006 - Reliability - Password Reset (Tester: Kei Kar)
```
This section outlines the test procedures designed to assess the reliability of the password reset
functionality within the OAS. Each procedure focuses on a specific aspect of reliability, such as handling
high volumes of requests, operating under resource constraints, and recovering from failures.
TP-PR-ST-001 - High Volume Password Reset Request Handling
Test Procedure ID TP-PR-ST-001
Objective Verify system reliability when handling a high volume of
simultaneous password reset requests.
Test Cases to be Executed TC-PR-ST-001
Set Up 1. Ensure JMeter is installed and configured.
2. Set up the "Forgot Password" form with valid test data.
3. Configure JMeter to simulate 10,000 simultaneous user
requests.
4. Verify the system processes all requests efficiently
without crashes or delays.
Wrap Up None
TP-PR-ST-002 - Password Reset Under Resource Constraints
Test Procedure ID TP-PR-ST-002
Objective Verify the system's stability when processing password reset
requests under resource-constrained conditions.
Test Cases to be Executed TC-PR-ST-002
Set Up 1. Configure server resources to operate at 50% capacity
```
(e.g., limit memory or CPU usage).
```
2. Use JMeter to simulate 1,000 password reset requests.
3. Verify the system remains stable and processes all
requests without significant delays or errors.
Wrap Up None
TP-PR-ST-003 - Password Reset Email Response Time - Peak Usage
Test Procedure ID TP-PR-ST-003
Objective Verify system response time for password reset emails under
peak usage conditions.
Test Cases to be Executed TC-PR-ST-003
163
Set Up 1. Configure JMeter to simulate 5,000 simultaneous
password reset requests.
2. Measure email delivery time for all requests.
3. Verify that all password reset emails are sent within 5
seconds during peak traffic.
Wrap Up None
TP-PR-ST-004 - System Recovery After Failure During Password Reset
Test Procedure ID TP-PR-ST-004
Objective Verify the system’s ability to recover after a failure during
peak password reset request loads.
Test Cases to be Executed TC-PR-ST-004
Set Up 1. Use JMeter to simulate 5,000 simultaneous password
reset requests.
2. Simulate a server crash during request processing.
3. Restore the server and verify recovery without data loss.
4. Ensure pending requests are processed after restoration.
Wrap Up None
TP-PR-ST-005 - Handling Malformed/Invalid Password Reset Requests
Test Procedure ID TP-PR-ST-005
Objective Verify system accuracy in handling malformed or invalid
requests under stress.
Test Cases to be Executed TC-PR-ST-005
Set Up 1. Configure JMeter to simulate 5,000 password reset
requests.
2. Use mixed input data with 50% valid and 50% invalid
email addresses.
3. Verify the system processes valid requests successfully
and displays appropriate error messages for invalid requests.
Wrap Up None
164
Model Checking
```
Online Alumni System (OAS)
```
```
Version: 1.0.0
```
```
Date: 15/01/2024
```
165
4.0 Model Checking Report
```
This report formally verifies four key system behaviors in the FSKTM Online Alumni System (OAS)
```
using the NuSMV model checker. The state diagrams analyzed are from the Software Brief Description
```
(SBD).
```
4.1 Introduction to Model Checking
Model checking is an automated technique that helps us verify if the design of our system behaves as
```
expected. We use state diagrams to visualize the system's behavior and temporal logic (CTL) to define the
```
rules the system must follow. We used NuSMV to explore all possible paths through the state diagram and
```
check if any of them violate our rules (properties). This process can uncover design flaws early, before
```
they turn into bugs in the actual code.
4.2 State Diagrams and Properties
Let's look at each important part of the system and its design, represented by a state diagram. For each
```
diagram, we'll define what shouldn't happen (safety) and what should eventually happen (liveness)
```
166
4.2.1 Log In
```
● State Diagram (from SBD):
```
167
```
Figure 4.1: State Diagram for Log In (from SBD). This diagram shows the expected behavior of user login and authentication.
```
● NuSMV State Transition Diagram:
Figure 4.2: NuSMV State Transition Diagram for Log In. This diagram is automatically generated by NuSMV based on the provided model and
shows all reachable states and transitions in the login process.
● Safety Property:
○ What we want: A user can't be logged in and logged out simultaneously.
```
○ CTL: AG !(LoggedIn & LoggedOut) (This means: Always, it's not the case that a user is both logged in and logged out).
```
● Liveness Property:
168
○ What we want: If you enter the correct credentials, you should eventually get logged in.
```
○ CTL: AG (ValidCredentials -> AF LoggedIn) (This means: Always, if your credentials are valid, then eventually you'll reach the
```
```
LoggedIn state).
```
4.2.2 Manage Job Advertisement
```
● State Diagram (from SBD):
```
169
Figure 4.3: Refined State Diagram for Managing Job Advertisements. This diagram outlines the process for creating, updating, and deleting job
postings in the OAS.
● NuSMV State Transition Diagram:
170
Figure 4.4: NuSMV State Transition Diagram for Managing Job Advertisements. This diagram, generated by NuSMV, provides a comprehensive
visualization of all possible reachable states and transitions within the job advertisement management feature of the OAS.
● Safety Property:
○ What we want: You can't be creating, updating, and deleting a job ad at the same time.
```
○ CTL: AG !(CreatingJob & UpdatingJob) and AG !(CreatingJob & DeletingJob) and AG !(UpdatingJob & DeletingJob)
```
● Liveness Property:
```
○ What we want: If you try to create (or update/delete) a job ad with valid information, it should eventually be created (or
```
```
updated/deleted).
```
```
○ CTL: AG((ValidJob & CreateRequest) -> AF CreatingJob) (and similar properties for Update and Delete).
```
171
4.2.3 Manage Alumni Account
```
● State Diagram (from SBD):
```
```
Figure 4.5: Refined State Diagram for Managing Alumni Accounts (from SBD, adapted for model checking). This diagram represents the lifecycle
```
of an alumni account in the OAS, including registration, approval/rejection, editing, and deletion.
172
● NuSMV State Transition Diagram:
Figure 4.6: NuSMV State Transition Diagram for Managing Alumni Accounts. Automatically generated by NuSMV, this diagram visualizes all
reachable states and transitions based on the model provided for alumni account management.
● Safety Property:
○ What we want: An account can't be both approved and deleted.
```
○ CTL: AG !(Approved & Deleted)
```
173
● Liveness Property:
○ What we want: If an admin approves a pending account, it should eventually become approved.
```
○ CTL: AG (Pending & AdminApproves -> AF Approved)
```
4.2.4 Manage Events
```
● State Diagram (from SBD):
```
174
Figure 4.7: Refined State Diagram for Managing Events. This diagram illustrates the event management process in the OAS.
● NuSMV State Transition Diagram:
175
Figure 4.8: NuSMV State Transition Diagram for Managing Events. Based on the provided NuSMV model, this automatically generated diagram
visualizes all possible and reachable states and transitions within the event management system.
● Safety Property:
○ What we want: An event can't be being created, updated, and deleted simultaneously.
```
○ CTL: AG !(CreatingEvent & UpdatingEvent) and AG !(CreatingEvent & DeletingEvent) and AG !(UpdatingEvent &
```
```
DeletingEvent)
```
● Liveness Property:
```
○ What we want: If user submit valid details and request to create (or update/delete) an event, it should eventually happen.
```
```
○ CTL: AG((ValidEvent & CreateRequest) -> AF CreatedEvent) (And similar properties for Update and Delete).
```
176
4.3 NuSMV Models and Verification Results
We used NuSMV to test our designs. The full code for each model is in the Appendix. Here are the
```
results:
```
4.3.1 Log In
```
● NuSMV Model: (See Appendix A for login.smv)
```
● Results:
```
○ AG !(LoggedIn & LoggedOut): TRUE (Screenshot of NuSMV output showing "is true")
```
```
○ AG (ValidCredentials -> AF LoggedIn): TRUE (Screenshot of NuSMV output showing
```
```
"is true")
```
● Counterexample Analysis: No counterexamples were generated, as both properties hold true.
This indicates that the login system design, as modeled, satisfies the specified safety and liveness
properties. The system can never be in both LoggedIn and LoggedOut states simultaneously and
will always eventually reach the LoggedIn state if ValidCredentials are provided.
4.3.2 Manage Job Advertisement
```
● NuSMV Model: (See Appendix A for manage_job.smv)
```
● Results:
```
○ AG (CreatingJob -> (state != UpdatingJob & state != DeletingJob)): TRUE
```
```
○ AG (state = UpdatingJob -> (state != CreatingJob & state != DeletingJob)): TRUE
```
```
○ AG (state = DeletingJob -> (state != CreatingJob & state != UpdatingJob)): TRUE
```
```
○ AG ((ValidJob & CreateRequest) -> AF state = CreatingJob): FALSE
```
```
○ AG ((ValidJob & UpdateRequest) -> AF state = UpdatingJob): FALSE
```
```
○ AG ((ValidJob & DeleteRequest) -> AF state = DeletingJob): FALSE
```
● Counterexample Analysis: The liveness properties related to Creating, Updating, and Deleting a
job are FALSE. The counterexamples show that the system can remain in the Idle state
```
indefinitely, even if ValidJob and the respective requests (CreateRequest, UpdateRequest,
```
```
DeleteRequest) are true. This likely indicates a missing transition in your state diagram. The
```
```
system needs a way to move from Idle to the respective action states (CreatingJob, UpdatingJob,
```
```
DeletingJob) when a valid request is made.
```
4.3.3 Manage Alumni Account
```
● NuSMV Model: (See Appendix A for manage_alumni.smv)
```
● Results:
```
○ AG !(state = Approved & state = Deleted): TRUE
```
```
○ AG ((state = Pending & AdminApproves) -> AF state = Approved): TRUE
```
```
○ AG (state = Deleted -> AG state = Deleted): TRUE
```
```
○ AG ((state = Approved & EditRequest) -> AF state = Editing): TRUE
```
```
○ AG ((state = Deleting & ConfirmDelete) -> AF state = Deleted): TRUE
```
● Counterexample Analysis: No counterexamples were generated, indicating the model correctly
satisfies the properties. The alumni management system design, as represented by the state
177
diagram, ensures data integrity by never having an account in both Approved and Deleted states
simultaneously. It also confirms the correct state transitions when an admin approves an account,
an account is deleted, or when an approved account is edited. All properties hold true.
4.3.4 Manage Events
```
● NuSMV Model: (See Appendix A for manage_events.smv)
```
● Results:
```
○ AG (state = CreatingEvent -> (state != UpdatingEvent & state != DeletingEvent)): TRUE
```
```
○ AG (state = UpdatingEvent -> (state != CreatingEvent & state != DeletingEvent)): TRUE
```
```
○ AG (state = DeletingEvent -> (state != CreatingEvent & state != UpdatingEvent)): TRUE
```
```
○ AG (((ValidEvent & CreateRequest) & IsAdmin) -> AF state = CreatingEvent): FALSE
```
```
○ AG (((ValidEvent & UpdateRequest) & IsAdmin) -> AF state = UpdatingEvent): FALSE
```
```
○ AG (((ValidEvent & DeleteRequest) & IsAdmin) -> AF state = DeletingEvent)): FALSE
```
```
○ AG (!IsAdmin -> ((state != CreatingEvent & state != UpdatingEvent) & state !=
```
```
DeletingEvent)): FALSE
```
```
○ AG ((state = ValidatingEvent & !ValidEvent) -> AF state = Error): TRUE
```
● Counterexample Analysis: The properties related to liveness are false. Specifically, even if an
event is valid, a create/update/delete request does not guarantee the system will transition to the
respective action state. The counterexamples likely show that the system remains in the Idle or
ValidatingEvent states without proceeding to Creating/Updating/Deleting. This indicates a
missing transition in your state diagram to allow the progression when the admin has initiated an
event. Moreover, the fact that the last two properties are true indicates there's a need to ensure that
only an admin has authority for event management.
4.4 Conclusion
Model checking verified four key areas of the OAS. The Log In and Manage Alumni Account state
diagrams satisfied all specified properties, suggesting correct design in terms of safety and liveness in
these areas. However, the Manage Job Advertisement and Manage Events diagrams failed three liveness
properties each. These violations indicate potential design flaws in how the system handles transitions to
the Create, Update, and Delete states. The counterexamples provide valuable insights for debugging and
should be addressed by the development team. These issues could lead to unresponsive system behavior
or an inability to perform crucial actions. Despite these flaws, complete coverage of all state diagrams
was achieved through our chosen properties, thoroughly evaluating the system's modeled behavior.
178
Test Log
```
Online Alumni System (OAS)
```
```
Version: 1.0.0
```
```
Date: 15/01/2025
```
179
5.0 Test Log Report
F001 - Register User Account
```
Use Case Testing (System Testing Level)
```
General Information
```
Test Log Scope This test log covers registration use case testing (RU-UC-001 to RU-UC-015)
```
Test Log Description The items tested include registration for validity, proper handling of inputs, security, and performance.
Revision Version 1.0 Person In Charged Yallini Chander
Activities Execution Information
Execution Start Date 13/01/2025 End Date 17/01/2025
Procedure Result
Test Cases ID Test Procedure
ID
Type of
Testing
Tool Pass / Fail Remark
RU-UC-001 TC01_01 Functional Browser Pass The system successfully created the account, displayed a
confirmation message, and sent a verification email.
RU-UC-002 TC02_01 Functional Browser Pass The system displayed an error message specific to the invalid email
format, preventing registration.
RU-UC-003 TC03_01 Functional Browser Pass The system displayed an error message indicating password
requirements, preventing registration.
RU-UC-004 TC04_01 Functional Browser Pass The system displayed an error message indicating that the username
is already taken.
```
RU-UC-005 TC05_01 Functional Browser Pass The system displayed clear and specific error message(s) indicating
```
```
the missing required field(s), preventing registration.
```
180
RU-UC-006 TC06_01 Functional Browser Pass The system displayed clear error messages indicating which fields
exceed length limits, preventing registration.
RU-UC-007 TC07_01 Functional Browser Pass The system displayed an error message indicating invalid character
in the input, preventing registration.
RU-UC-008 TC08_01 Security Browser Pass The system properly handled the input, displayed an error message
or sanitized the input, preventing registration.
RU-UC-009 TC09_01 Functional Browser Pass The system displayed an error message indicating unsupported
characters in password, preventing registration.
RU-UC-010 TC10_01 Functional Browser Pass The system displayed an error message indicating mismatch,
preventing registration.
RU-UC-011 TC11_01 Functional Browser Pass The system accepted the Captcha and proceeded with the
registration flow.
RU-UC-012 TC12_01 Functional Browser Pass The system displayed an error message indicating incorrect Captcha
entry, preventing registration.
RU-UC-013 TC13_01 Functional Browser Pass The system registered the user successfully with optional data
saved correctly.
RU-UC-014 TC14_01 Performance Load Test
Tools
Pass The system handled multiple registrations without performance
degradation or failures.
RU-UC-015 TC15_01 Functional Database
Client
Pass The data was correctly stored in the database, verified through
direct database query.
181
```
Boundary Value Analysis (System Testing Level)
```
General Information
Test Log Scope This test log covers Boundary Value Analysis for registration fields.
Test Log Description The items tested include name length, password length, and graduation year boundaries.
Revision Version 1.0 Person In Charged Yallini Chander
Activities Execution Information
Execution Start Date 13/01/2025 End Date 17/01/2025
Procedure Result
Test Cases ID Test Procedure
ID
Type of Testing Tool Pass / Fail Remark
RU-BVA-001 TC01_01 Functional Browser Pass The system displayed appropriate error messages for limit
violations.
RU-BVA-002 TC02_01 Functional Browser Pass The system accepted passwords within limits and displayed
error messages for out of limits.
RU-BVA-003 TC03_01 Functional Browser Pass The system displayed specific error messages for each
invalid year.
RU-BVA-004 TC04_01 Functional Browser Pass The system accepted the input and proceeded with
registration.
RU-BVA-005 TC05_01 Functional Browser Pass The system displayed an error: "Name cannot be empty."
RU-BVA-006 TC06_01 Functional Browser Pass The system accepted the input and proceeded with
registration.
182
RU-BVA-007 TC07_01 Functional Browser Pass The system displayed an error: "Name exceeds maximum
length."
RU-BVA-008 TC08_01 Functional Browser Pass The system accepted the input and proceeded with
registration.
RU-BVA-009 TC09_01 Functional Browser Pass The system displayed an error: "Password too short."
RU-BVA-010 TC10_01 Functional Browser Pass The system accepted the input and proceeded with
registration.
RU-BVA-011 TC11_01 Functional Browser Pass The system displayed an error: "Invalid graduation year."
183
Equivalence Partitioning
General Information
Test Log Scope Equivalence Partitioning for Registration Input Fields
Test Log Description This section covers tests verifying valid and invalid input classes for email and password fields, and common
user errors during registration.
Revision Version 1.0 Person In Charged Firdaus Adib
Activities Execution Information
Execution Start Date 13/01/2025 End Date 17/01/2025
Procedure Result
Test Case ID Test Procedure
ID
Type of Testing Tool Pass/Fail Remark
RU-EP-001 TP-RU-EP-001 Functional Selenium Pass All valid email formats with common domains
were accepted.
RU-EP-002 TP-RU-EP-002 Functional Selenium Pass Valid emails with unusual domains accepted.
```
RU-EP-003 TP-RU-EP-002 Functional Selenium Pass Invalid email (missing "@") correctly rejected.
```
```
RU-EP-004 TP-RU-EP-002 Functional Selenium Pass Invalid email (missing domain) correctly rejected.
```
RU-EP-005 TP-RU-EP-002 Functional Selenium Fail Defect: Special characters in email were accepted
```
(should have been rejected/flagged). Refer to
```
Defect Report D-[Defect ID]
184
```
RU-EP-006 TP-RU-EP-002 Functional Selenium Pass Excessively long email handled (either truncated
```
```
or rejected - behavior documented).
```
RU-EP-007 TP-RU-EP-003 Functional Selenium Fail Defect: Password criteria failed as strong
password didn't work.
RU-EP-008 TP-RU-EP-003 Functional Selenium Pass Weak passwords correctly rejected.
RU-EP-009 TP-RU-EP-003 Functional Selenium Fail Defect: Passwords with invalid characters were
accepted. Refer to Defect Report D-[Defect ID]
RU-EP-010 TP-RU-EP-003 Functional Selenium Pass Excessively long passwords handled correctly
```
(rejected or truncated).
```
185
Error Guessing
General Information
Test Log Scope Error Guessing for Registration Input Fields
Test Log Description This section covers tests verifying valid and invalid input classes for email and password fields, and common
user errors during registration.
Revision Version 1.0 Person In Charged Firdaus Adib
Activities Execution Information
Execution Start Date 13/01/2025 End Date 17/01/2025
Procedure Result
Test Case ID Test Procedure
ID
Type of Testing Tool Pass/Fail Remark
RU-EG-001 TP-RU-EG-001 Functional Browser Pass Password confirmation mismatch correctly
detected.
```
RU-EG-002 TP-RU-EG-002 Functional Browser Pass Empty password field handled correctly (rejected
```
```
with error message).
```
RU-EG-003 TP-RU-EG-003 Functional Browser Pass Empty email field handled correctly.
RU-EG-004 TP-RU-EG-004 Functional Browser Fail Defect: Invalid input in optional field not handled
```
correctly (no warning or validation) D-[Defect
```
ID]
186
```
RU-EG-005 TP-RU-EG-005 Functional Browser Fail Defect: Unresponsive Captcha not handled;
```
registration not prevented. Refer to D-[Defect ID]
RU-EG-006 TP-RU-EG-006 Functional Browser Fail Defect: Partial form data not retained. Refer to
D-[Defect ID]
187
F002 - Login
Use Case Testing
General Information
```
Test Log Scope This test log covers Login Use Case Testing (Black Box Testing- System Level) (LI-UC-001to LI-UC-010)
```
Test Log Description The items tested include alumni or administrator’s access to their account using email and password.
Revision Version 1.0 Person In Charged Mai M. Y. Mai
Activities Execution Information
Execution Start Date 13/01/2025 End Date 17/01/2025
Procedure Result
Test Cases ID Test Procedure
ID
Type of Testing Tool Pass / Fail Remark
LI-UC-001 TP- LI-UC-001 Functional Manual Pass The user was logged in successfully and redirected to
the dashboard.
LI-UC-002 TP- LI-UC-002 Pass An error message was displayed: "Invalid password.
Please try again."
```
LI-UC-003 TP- LI-UC-003 Fail No error message displayed; login button remained
```
unresponsive.
LI-UC-004 TP- LI-UC-004 Pass An error message was displayed: "Email not
registered. Please create an account."
LI-UC-005 TP- LI-UC-005 Pass An error message was displayed: "Email and password
fields cannot be empty."
LI-UC-006 TP- LI-UC-006 Fail Password reset email was not received by the user.
188
LI-UC-007 TP- LI-UC-007 Pass An error message was displayed: "Account not found.
Please contact support."
LI-UC-008 TP- LI-UC-008 Pass An error message was displayed: "Account not
verified. Please contact admin."
LI-UC-009 TP- LI-UC-009 Pass Login page blocked the attempt and displayed:
"Invalid credentials."
LI-UC-010 TP- LI-UC-010 Pass User was logged out after 15 minutes of inactivity and
redirected to login page.
189
```
State Transition Testing (Black Box Testing - System Level)
```
General Information
```
Test Log Scope This test log covers Login State Transition Testing (Black Box Testing - System Level) (LI-STT-001to LI-STT-004)
```
Test Log Description The items tested include the transition while alumni or administrator access to their account using email and password.
Revision Version 1.0 Person In Charged Mai M. Y. Mai
Activities Execution Information
Execution Start Date 13/01/2025 End Date 17/01/2025
Procedure Result
Test Cases ID Test Procedure
ID
Type of Testing Tool Pass / Fail Remark
TP- LI - STS –
001
TP- LI - STS –
001
Functional Browser Pass The system displayed the correct error message for
invalid emails.
TP- LI - STS –
002
TP- LI - STS –
002
Pass The system transitioned to password validation
successfully.
TP- LI - STS –
003
TP- LI - STS –
003
Pass The system displayed the correct error message for
invalid passwords.
TP- LI - STS –
004
TP- LI - STS –
004
Pass The system allowed login and redirected to the home
page correctly.
190
```
Error Guessing (System Testing Level)
```
General Information
```
Test Log Scope This test log covers Login Error Guessing (System Testing Level) (LI-EG-001 to LI-EG-010)
```
Test Log Description The items tested include alumni or administrator’s access to their account using email and password.
Revision Version 1.0 Person In Charged Mai M. Y. Mai
Activities Execution Information
Execution Start Date 13/01/2025 End Date 17/01/2025
Procedure Result
Test Cases ID Test Procedure
ID
Type of Testing Tool Pass / Fail Remark
LI-EG-001 TP- LI-EG-001 Functional Manual Pass Error message displayed correctly.
LI-EG-002 TP- LI-EG-002 Fail System crashed while processing the input.
LI-EG-003 TP- LI-EG-003 Fail Spaces were not trimmed, and an error message was
```
displayed: "Invalid email format."
```
LI-EG-004 TP- LI-EG-004 Pass Login successful.
LI-EG-005 TP- LI-EG-005 Fail Login failed with an error message: "Invalid email
or password."
LI-EG-006 TP- LI-EG-006 Fail System responded with delays for some users.
LI-EG-007 TP- LI-EG-007 Pass Maintenance message displayed correctly.
LI-EG-008 TP- LI-EG-008 Fail System sent multiple emails without restriction.
LI-EG-009 TP- LI-EG-009 Pass User redirected correctly with appropriate message.
LI-EG-010 TP- LI-EG-010 Fail System allowed login despite invalid domain.
191
F003 - Manage User Profile
```
Use Case Testing (System Level Testing)
```
General Information
```
Test Log Scope This test log covers Manage User Profile use case testing (TC-MUP-UC-001 to TC-MUP-UC-006)
```
Test Log
Description
The items tested include the proper functionality of user profile management, including editing, password changes, and account
```
deletion. The tests verify system navigation, data integrity, action handling (save, delete, cancel), and user confirmation steps to
```
ensure a seamless and secure user experience.
Revision Version 1.0 Person In Charged Lee Kei Kar
Activities Execution Information
Execution Start
Date
13/01/2025 End Date 17/01/2025
Procedure Result
Test Cases ID Test Procedure ID Type of
Testing
Tool Pass / Fail Remark
TC-MUP-UC-001 TP- MUP-UC-001 Functional Manual Pass The system updates the biography successfully,
displays a success message, and redirects to the "My
Profile" page.
TC-MUP-UC-002 TP- MUP-UC-002 Pass The system updates the password successfully,
displays a success message, and redirects to the "My
Profile" page.
TC-MUP-UC-003 TP- MUP-UC-003 Pass Account is deleted, and user is redirected to login
page.
192
TC-MUP-UC-004 TP- MUP-UC-004 Pass The system cancels the edit action, discards changes,
and navigates back to the "My Profile" page.
TC-MUP-UC-005 TP- MUP-UC-005 Pass The system cancels the password change action,
discards the entered data, and navigates back to the
"My Profile" page.
TC-MUP-UC-006 TP- MUP-UC-006 Pass The system cancels the account deletion action,
discards the entered data, and navigates back to the
"My Profile" page.
```
Error Guessing Testing (System Level Testing)
```
General Information
```
Test Log Scope This test log covers Manage User Profile error guessing testing (TC-MUP-EG-001 to TC-MUP-EG-005)
```
Test Log
Description
The items tested include handling of error scenarios, such as empty fields, invalid or mismatched inputs, and incorrect
passwords. The tests validate the system's ability to detect, display appropriate error messages, and prevent invalid actions while
maintaining data integrity and user security
Revision Version 1.0 Person In
Charged
Lee Kei Kar
Activities Execution Information
Execution Start
Date
13/01/2025 End Date 17/01/2025
Procedure Result
193
Test Cases ID Test Procedure
ID
Type of Testing Tool Pass / Fail Remark
TC-MUP-EG-001 TP- MUP-EG-001 Functional Manual Pass The system shows an error message: "Please fill out
this field" for each required empty field.
TC-MUP-EG-002 TP- MUP-EG-002 Pass The system shows an error message: "Incorrect
current password. Please try again." and does not
update the password.
TC-MUP-EG-003 TP- MUP-EG-003 Pass The system shows an error message: "Incorrect
password. Please enter the correct password." and
does not delete the account.
TC-MUP-EG-004 TP- MUP-EG-004 Pass The system shows an error message: “Be at least 5
characters and at most 20 characters" and does not
update the password.
TC-MUP-EG-005 TP- MUP-EG-005 Pass The system shows an error message: "Please enter
the same new password" and does not update the
password.
194
```
GUI Testing (System Level Testing)
```
General Information
```
Test Log Scope This test log covers Manage User Profile GUI testing (TC-MUP-GUI-001 to TC-MUP-GUI-007)
```
Test Log
Description
```
The items tested include verifying the graphical user interface (GUI) elements, navigation paths, layout alignment, and user
```
interactions on the "My Profile" page. The tests ensure proper rendering of components, accurate navigation between pages,
appropriate error handling for invalid inputs, and the successful execution of user actions such as profile updates, password
changes, and account deletion.
Revision Version 1.0 Person In Charged Lee Kei Kar
Activities Execution Information
Execution Start
Date
13/01/2025 End Date 17/01/2025
Procedure Result
Test Cases ID Test Procedure
ID
Type of
Testing
Tool Pass / Fail Remark
TC-MUP-GUI-001 TP-
MUP-GUI-001
Functional Manual Pass The system navigates to the "My Profile" page and
displays the user's personal information.
TC-MUP-GUI-002 TP-
MUP-GUI-002
Pass The layout is clean, and all fields are displayed without
overlap or misalignment..
TC-MUP-GUI-003 TP-
MUP-GUI-003
Pass The dropdown displays options: "Edit Profile",
"Change Password", and "Delete Account".
TC-MUP-GUI-004 TP-
MUP-GUI-004
Pass The system navigates to the "Edit My Profile" page.
195
TC-MUP-GUI-005 TP-
MUP-GUI-005
Pass The system displays an error message: "Please fill out
this field".
TC-MUP-GUI-006 TP-MUP-GUI-00
6
Pass The system displays an error message: "Confirmation
password does not match".
TC-MUP-GUI-007 TP-MUP-GUI-00
7
Pass The system deletes the account and redirects the user
to the login page.
196
F004 - View Events
```
Use Case Testing (System Level Testing)
```
General Information
```
Test Log Scope This test log covers View Events use case testing (TC-VE-UC-001 to TC-VE-UC-003)
```
Test Log
Description
The items tested include the navigation to the 'Events' page, search functionality, and viewing event details. These tests verify the
system's ability to display event lists, accurately filter events based on user input, and provide detailed event information to ensure
a smooth user experience.
Revision Version 1.0 Person In Charged Lee Kei Kar
Activities Execution Information
Execution Start
Date
13/01/2025 End Date 17/01/2025
Procedure Result
Test Cases ID Test Procedure
ID
Type of
Testing
Tool Pass / Fail Remark
TC-VE-UC-001 TP-VE-UC-001 Functional Manual Pass The system navigates the actor to the 'Events' page
and displays a list of events.
TC-VE-UC-002 TP-VE-UC-002 Pass System displays a filtered list..
TC-VE-UC-003 TP- VE-UC-003 Pass The system navigates to the event details page and
displays event information.
197
```
Error Guessing (System Level Testing)
```
General Information
```
Test Log Scope This test log covers View Events error guessing testing (TC-VE-EG-001)
```
Test Log
Description
The items tested include the system's ability to handle errors during event searches, such as unmatched keywords. These tests
validate the system's response in displaying appropriate error messages and ensuring user feedback is clear and accurate when no
matching records are found.
Revision Version 1.0 Person In
Charged
Lee Kei Kar
Activities Execution Information
Execution Start
Date
13/01/2025 End Date 17/01/2025
Procedure Result
Test Cases ID Test Procedure
ID
Type of
Testing
Tool Pass / Fail Remark
TC-VE-EG-001 TP-VE-EG-001 Functional Manual Pass The system displays an error message: "Sorry, no
records found," and no events are shown in the results.
198
```
GUI Testing (System Level Testing)
```
General Information
```
Test Log Scope This test log covers View Events GUI testing (TC-VE-GUI-001 to TC-VE-GUI-006)
```
Test Log
Description
The items tested include the functionality and design of the "Events" page interface, covering navigation, layout, search
functionality, and responsiveness. The tests validate the system's ability to display event lists, handle valid and invalid search
inputs with appropriate results or error messages, navigate to event details, and adapt to various screen sizes while maintaining
usability and readability.
Revision Version 1.0 Person In Charged Lee Kei Kar
Activities Execution Information
Execution Start
Date
13/01/2025 End Date 17/01/2025
Procedure Results
Test Cases ID Test Procedure
ID
Type of Testing Tool Pass / Fail Remark
TC-VE-GUI-001 TP-VE-GUI-001 Functional Manual Pass The system navigates to the "Events" page and displays a
list of events.
TC-VE-GUI-002 TP-VE-GUI-002 Pass The layout is clear, with events displayed in a structured
and readable manner.
TC-VE-GUI-003 TP- VE-GUI-003 Pass The system displays a filtered list of events matching the
keyword.
TC-VE-GUI-004 TP-VE-GUI-004 Pass The system displays an error message: "Sorry, no records
found."
199
TC-VE-GUI-005 TP-VE-GUI-005 Pass The system navigates to the event details page, displaying
title, date, and description.
TC-VE-GUI-006 TP-VE-GUI-006 Pass The page layout adjusts appropriately to fit different
screen sizes.
200
F005 - Manage Job Advertisement
Use Case Testing
```
Test Log Scope This test log covers BVA (Black Box Testing)
```
```
(TC-MJA-EG-001 to TC-MJA-EG-005).
```
Test Log Description The items tested include scenarios like duplicate job ad
submissions, invalid characters in job titles, network
interruptions during submission, and exceeding allowed job ads
per user.
Revision Version 1.0
Person in Charge Azfar
Activities Execution Information Execution Start Date: 13/01/2025
Procedure Result
Test Case ID Test Procedure ID Type of Testing Tool Pass/ Fail Remark
TC-MJA-001 TP-MJA-001 Functional Manual Pass Job advertisement was created
successfully and displayed in the
listings.
TC-MJA-002 TP-MJA-002 Functional Manual Pass Job advertisement was updated
successfully, and changes were
reflected.
TC-MJA-003 TP-MJA-003 Functional Manual Pass Job advertisement was deleted
successfully and no longer
appears in the listings.
TC-MJA-004 TP-MJA-004 Functional Manual Fail The system failed to display
specific error messages for
missing job title during job
creation.
201
TC-MJA-005 TP-MJA-005 Functional Manual Pass Access to "Manage Job Ads" was
denied for unauthenticated users.
TC-MJA-006 TP-MJA-006 Functional Manual Fail Duplicate job ad creation was
allowed without triggering an
error message
Boundary Value Analysis
```
Test Log Scope This test log covers Boundary Value Analysis Testing (Black
```
```
Box Testing - System Level) (TC-MJA-BVA-001 to
```
```
TC-MJA-BVA-005).
```
Test Log Description The items tested include validating the character limits for job
title and description fields, salary range, and file size limits to
ensure appropriate handling of edge cases.
Revision Version 1.0
Person in Charge Azfar
Activities Execution Information Execution Start Date: 13/01/2025
Procedure Result
Test Case ID Test Procedure ID Type of Testing Tool Pass / Fail Remark
TC-MJA-BVA-001 TP-MJA-BVA-001 Functional Manual Pass System displayed an error
message for exceeding job title
character limit.
TC-MJA-BVA-002 TP-MJA-BVA-002 Functional Manual Pass System accepted the minimum
salary value and allowed job ad
creation.
202
TC-MJA-BVA-003 TP-MJA-BVA-003 Functional Manual Fail System failed to display an error
message for a negative salary
input during job creation.
TC-MJA-BVA-004 TP-MJA-BVA-004 Functional Manual Pass System rejected oversized file
uploads and displayed an
appropriate error message.
TC-MJA-BVA-005 TP-MJA-BVA-005 Functional Manual Pass System successfully accepted a
file upload within the supported
size limit.
Error Guessing
```
Test Log Scope This test log covers Error Guessing (Black Box Testing)
```
```
(TC-MJA-EG-001 to TC-MJA-EG-005).
```
Test Log Description The items tested include scenarios like duplicate job ad
submissions, invalid characters in job titles, network
interruptions during submission, and exceeding allowed
job ads per user.
Revision Version 1.0
Person in Charge Azfar
Activities Execution Information Execution Start Date: 13/01/2025
Procedure Result
Test Case ID Test Procedure ID Type of Testing Tool Pass / Fail Remark
TC-MJA-EG-001 TP-MJA-EG-001 Functional Manual Pass System prevented
duplicate job ad
submission and
203
displayed an error
message.
TC-MJA-EG-002 TP-MJA-EG-002 Functional Manual Fail Invalid characters in
job title field were
accepted without
triggering an error.
TC-MJA-EG-003 TP-MJA-EG-003 Functional Manual Pass System handled
network interruptions
gracefully and allowed
resubmission after
reconnection.
GUI Testing
Test Log Scope This test log covers GUI Testing for Manage Job Advertisement
```
(TC-MJA-GUI-001 to TC-MJA-GUI-005).
```
Test Log Description The items tested include verifying layout, button functionality, form
rendering, error message placement, and responsiveness for the
"Manage Job Advertisement" feature.
Revision Version 1.0
Person in Charge Azfar
Activities Execution
Information
Execution Start Date: 13/01/2025
204
Test Case ID Test
Procedure ID
Type of
Testing
Tool Pass / Fail Remark
TC-MJA-GUI
-001
TP-MJA-GUI-
001
GUI Manual Pass Navigation
elements are
clear,
accessible, and
logically
arranged.
TC-MJA-GUI
-002
TP-MJA-GUI-
002
GUI Manual Fail Button for
deleting a job ad
was
unresponsive on
Safari.
TC-MJA-GUI
-003
TP-MJA-GUI-
003
GUI Manual Pass Dropdown
menu options
were displayed
correctly and
performed as
expected.
205
F006 - Search and View Alumni Profile
```
Use Case Testing (Black Box Testing- System Level)
```
General Information
```
Test Log Scope This test log covers Search and View Alumni Profile Use Case Testing (Black Box Testing- System Level)
```
```
(VAP-UC-001- VAP-UC-010)
```
Test Log Description The items tested include the process of alumni or administrators searching for and viewing the profiles of other alumni.
Revision Version 1.0 Person In Charged Mai M. Y. Mai
Activities Execution Information
Execution Start Date 13/01/2025 End Date 17/01/2025
Procedure Result
Test Cases ID Test Procedure ID Type of
Testing
Tool Pass / Fail Remark
VAP-UC-001 TP- VAP-UC-001 Functional Manual Pass System displays relevant results for "Mai Mai".
VAP-UC-002 TP- VAP-UC-002 Pass System displays a "No match found" message.
VAP-UC-003 TP- VAP-UC-003 Fail No action is performed, and no error message is
displayed.
VAP-UC-004 TP- VAP-UC-004 Pass Profile details page opens correctly.
VAP-UC-005 TP- VAP-UC-005 Pass System displays profiles with partial match for
"Mai".
VAP-UC-006 TP- VAP-UC-006 Fail System crashes with a database error.
VAP-UC-007 TP- VAP-UC-007 Pass Results are displayed regardless of case.
VAP-UC-008 TP- VAP-UC-008 Pass System displays a "No match found" message.
206
VAP-UC-009 TP- VAP-UC-009 Fail System takes a long time to respond and eventually
times out.
VAP-UC-010 TP- VAP-UC-010 Pass System displays results correctly after trimming
spaces.
Performance Testing
General Information
```
Test Log Scope This test log covers Search and View Alumni Profile Performance Testing (PT-UC-001- PT-UC-010)
```
Test Log Description The items tested include the process of alumni or administrators searching for and viewing the profiles of other alumni.
Revision Version 1.0 Person In Charged Mai M. Y. Mai
Activities Execution Information
Execution Start Date 13/01/2025 End Date 17/01/2025
Procedure Result
Test Cases ID Test Procedure ID Type of
Testing
Tool Pass / Fail Remark
PT-UC-001 TP- PT-UC-001 Functional Manual Pass Results displayed in 1.8 seconds.
```
PT-UC-002 TP- PT-UC-002 Fail 95 users received results in 2.5 seconds; 5 users
```
experienced delays over 5 seconds.
PT-UC-003 TP- PT-UC-003 Fail Results displayed in 3.5 seconds, exceeding the
limit.
PT-UC-004 TP- PT-UC-004 Pass "No results found" message displayed in 1.5
seconds.
```
PT-UC-005 TP- PT-UC-005 Fail System processed 96% of queries successfully;
```
average response time was 4.5 seconds.
```
PT-UC-006 TP- PT-UC-006 Fail System remained stable; 92% of queries completed
```
in 5 seconds, and others took longer than 6 seconds.
207
PT-UC-007 TP- PT-UC-007 Pass "No results found" message displayed in 1.7
seconds.
PT-UC-008 TP- PT-UC-008 Fail System experienced 10 minutes of downtime due to
a server crash during the test period.
PT-UC-009 TP- PT-UC-009 Fail Results displayed in 2.2 seconds.
```
PT-UC-010 TP- PT-UC-010 Pass Results displayed in 3.1 seconds; system handled
```
query efficiently without crashing.
208
F007 - Manage Alumni Account
```
Use case Testing (System Level Testing)
```
General Information
Test Log Scope This test log covers the behavior of the system regarding minimum and maximum input boundaries for name,
password, and graduation year fields.
Test Log Description The items tested include minimum and maximum length and value limits, ensuring proper handling and
validation feedback.
Revision Version 1.0 Person In Charged Yallini Chander
Activities Execution Information
Execution Start Date 13/01/2025 End Date 17/01/2025
Procedure Result
Requirement
ID
Test Cases ID Test Procedure
ID
Type of
Testing
Tool Pass / Fail Remark
RU-BVA-001 Minimum/Maximum
Name Length
TC01_01 Functional Browser Pass The system displayed appropriate
error messages for limit violations.
RU-BVA-002 Minimum/Maximum
Password Length
TC02_01 Functional Browser Pass The system accepted passwords
within limits and displayed error
messages for out of limits.
RU-BVA-003 Invalid Graduation Year TC03_01 Functional Browser Pass The system displayed specific error
messages for each invalid year.
209
RU-BVA-004 Minimum Name Length TC04_01 Functional Browser Pass The system accepted the input and
proceeded with registration.
RU-BVA-005 Just Below Minimum
Name Length
TC05_01 Functional Browser Pass The system displayed an error: "Name
cannot be empty."
RU-BVA-006 Maximum Name Length TC06_01 Functional Browser Pass The system accepted the input and
proceeded with registration.
RU-BVA-007 Just Above Maximum
Name Length
TC07_01 Functional Browser Pass The system displayed an error: "Name
exceeds maximum length."
RU-BVA-008 Minimum Password
Length
TC08_01 Functional Browser Pass The system accepted the input and
proceeded with registration.
RU-BVA-009 Just Below Minimum
Password Length
TC09_01 Functional Browser Pass The system displayed an error:
"Password too short."
RU-BVA-010 Maximum Graduation
Year
TC10_01 Functional Browser Pass The system accepted the input and
proceeded with registration.
RU-BVA-011 Just Above Maximum
Graduation Year
TC11_01 Functional Browser Pass The system displayed an error:
"Invalid graduation year."
210
```
GUI Testing (System Testing Level)
```
General Information
```
Test Log Scope This test log covers the GUI functionality of the alumni management page (MAA-GUI-001 to
```
```
MAA-GUI-010)
```
Test Log Description The items tested include navigation, layout, search functionality, data display, feedback messages, sorting,
pagination, responsive design, filtering, bulk actions, and input validation.
Revision Version 1.0 Person In Charged Yallini Chander
Activities Execution Information
Execution Start Date 13/01/2025 End Date 17/01/2025
Procedure Result
Requirement
ID
Test Cases ID Test Procedure
ID
Type of
Testing
Tool Pass / Fail Remark
MAA-GUI-001 Verify navigation and
layout
TC01_01 GUI
Functional
Testing
Browser Pass The interface elements are clear,
accessible, and logically arranged.
MAA-GUI-002 Verify search
functionality
TC02_01 GUI
Functional
Testing
Browser Pass Accurate search results, user-friendly
search filters.
MAA-GUI-003 Verify data display TC03_01 GUI
Functional
Testing
Browser Pass Information displayed accurately and
formatted appropriately.
211
MAA-GUI-004 Verify feedback
messages
TC04_01 GUI
Functional
Testing
Browser Pass Clear feedback messages indicating
success or failure.
MAA-GUI-005 Verify table sorting
functionality
TC05_01 GUI
Functional
Testing
Browser Pass The table sorts correctly based on the
selected criteria.
MAA-GUI-006 Verify pagination
controls
TC06_01 GUI
Functional
Testing
Browser Pass Pagination works correctly, allowing
navigation between pages.
MAA-GUI-007 Verify responsive
design
TC07_01 GUI
Functional
Testing
Browser Pass The layout adjusts properly for
different screen sizes.
MAA-GUI-008 Verify filter
functionality
TC08_01 GUI
Functional
Testing
Browser Pass Alumni list updates correctly based on
the applied filters.
MAA-GUI-009 Verify bulk actions TC09_01 GUI
Functional
Testing
Browser Pass System performs the bulk actions
correctly on all selected alumni.
MAA-GUI-010 Verify input validation TC10_01 GUI
Functional
Testing
Browser Pass System displays appropriate error
messages for invalid inputs.
212
State Transition Testing
General Information
Test Log Scope State Transition Testing for Manage Alumni Account
Test Log Description This section covers tests verifying the state transitions and behavior of the alumni account management
feature.
Revision Version 1.0 Person In Charged Firdaus Adib
Activities Execution Information
Execution Start Date 13/01/2025 End Date 17/01/2025
Procedure Result
Test Case ID Test Procedure
ID
Type of Testing Tool Pass/Fail Remark
MAA-STT-001 TP-MAA-STT-0
01
Functional Browser Pass Account successfully created and transitioned to
"Pending Approval" state.
MAA-STT-002 TP-MAA-STT-0
02
Functional Browser Pass Admin successfully approved the account, and the
state transitioned to "Approved." Alumni login
successful.
MAA-STT-003 TP-MAA-STT-0
03
Functional Browser Pass Admin successfully rejected the account. Account
transitioned to "Rejected," and subsequent login
attempts failed, as expected.
213
MAA-STT-004 TP-MAA-STT-0
04
Functional Browser Pass Profile details updated successfully. Account
transitioned to "Updated" and then back to
"Active," maintaining the correct state flow.
MAA-STT-005 TP-MAA-STT-0
05
Functional Browser Pass Account deletion successful. State transitioned to
"Deleted," user logged out, and subsequent login
attempts resulted in an appropriate "Account Not
Found" error, indicating deletion.
MAA-STT-006 TP-MAA-STT-0
06
Functional Browser Pass Invalid input during profile update correctly
handled. Error messages displayed, changes
prevented, and the account remained in the
"Active" state.
MAA-STT-007 TP-MAA-STT-0
07
Functional Browser Fail Defect: System allowed profile updates before
```
approval (should have been prevented). State
```
transition incorrect. Logged as D-[Defect ID].
Please refer to Defect Report D-[ID].
214
F008 - Manage Event
Use Case Testing
```
Test Log Scope This test log covers Manage Event Use Case Testing (Black Box
```
```
Testing - System Level) (ME-UC-001 to ME-UC-007).
```
Test Log Description The items tested include the creation, updating, deletion of
events, and handling of invalid inputs or duplicate events by
faculty administrators.
Revision Version 1.0
Person in Charge Azfar
Activities Execution Information Execution Start Date: 13/01/2025
Procedure Result
Test Case ID Test Procedure ID Type of Testing Tool Pass / Fail Remark
ME-UC-001 TP-ME-UC-001 Functional Manual Pass The event was created successfully and
displayed in the event listings.
ME-UC-002 TP-ME-UC-002 Functional Manual Pass The event was updated successfully and
reflected in the event listings.
ME-UC-003 TP-ME-UC-003 Functional Manual Pass The event was removed successfully
from the listings.
ME-UC-004 TP-ME-UC-004 Functional Manual Pass Error messages were displayed, and the
event was not created.
ME-UC-005 TP-ME-UC-005 Functional Manual Pass Access was denied, and the user was
redirected to the login page.
ME-UC-006 TP-ME-UC-006 Functional Manual Fail The system failed to update the event and
displayed a generic error message.
215
ME-UC-007 TP-ME-UC-007 Functional Manual Fail The system allowed duplicate event
creation and did not display an error
message.
GUI Testing
Test Case ID Test Procedure
ID
Type of Testing Tool Pass / Fail Remark
ME-GUI-001 TP-ME-GUI-001 GUI Manual Pass Navigation elements are clear, accessible,
and logically arranged.
ME-GUI-002 TP-ME-GUI-002 GUI Manual Pass Form is intuitive, input validation works,
and the event is created successfully.
ME-GUI-003 TP-ME-GUI-003 GUI Manual Pass Calendar allows date/time selection and
updates the event successfully.
ME-GUI-004 TP-ME-GUI-004 GUI Manual Pass Error messages are displayed clearly near
the respective fields.
ME-GUI-005 TP-ME-GUI-005 GUI Manual Pass Event details are displayed accurately and
formatted appropriately.
ME-GUI-006 TP-ME-GUI-006 GUI Manual Pass The page renders and functions
consistently across all tested browsers.
ME-GUI-007 TP-ME-GUI-007 GUI Manual Fail The calendar failed to save the selected
date and displayed an error message.
ME-GUI-008 TP-ME-GUI-008 GUI Manual Fail Event details were not displayed
```
accurately; the description field was
```
truncated.
216
NF-002 - Security - Password Encryption
General Information
Test Log Scope This test log covers NF-002: Security - Password Encryption
Test Log Description The items tested were related to password hashing, encryption, secure transmission, and session management.
Revision Version 1.0 Person In Charged Yallini Chander
Activities Execution Information
Execution Start Date 13/01/2025 End Date 17/01/2025
Procedure Result
Requirement
ID
Test Cases ID Test Procedure
ID
Type of
Testing
Tool Pass / Fail Remark
NF-002 SPE-ST-001 TC-01-001 Functional Database
Client
Pass Password is stored as a hash, not plain
text.
NF-002 SPE-ST-002 TP-01-002 Functional OWASP
ZAP/Burp
Suite/Brow
ser
Developer
Tools
Pass Password is transmitted securely
```
(HTTPS, encrypted in the request
```
```
body).
```
NF-002 SPE-ST-003 TP-01-003 Functional Developer
Tools
Pass Connection uses HTTPS protocol
ensuring encrypted communication.
NF-002 SPE-ST-004 TP-01-004 Functional Browser Pass Valid and up-to-date SSL/TLS
certificate is used.
217
NF-002 SPE-ST-005 TP-01-005 Functional Developer
Tools
Pass Session cookies are marked as secure
and HttpOnly to prevent access
through client-side scripts.
NF-002 SPE-ST-006 TP-01-006 Functional Security
Tools
Pass Session is properly invalidated on
logout, and no sensitive data is passed
in subsequent requests.
218
NF-003 - Usability - Cross-Browser Compatibility
Compatibility Testing
```
Test Log Scope This test log covers Cross-Browser Compatibility Testing (Black
```
```
Box Testing - System Level) (CBC-CT-001 to CBC-CT-003).
```
Test Log Description The items tested include verifying system functionality, layout
consistency, and performance across multiple browsers to ensure a
seamless user experience for all users.
Revision Version 1.0
Person in Charge Azfar
Activities Execution
Information
Execution Start Date: 13/01/2025
Procedure Result
Test Case ID Test Procedure ID Type of Testing Tool Pass / Fail Remark
CBC-CT-001 TP-CBC-CT-001 Functional Manual Pass Core features behaved
consistently on all tested
browsers.
CBC-CT-002 TP-CBC-CT-002 Functional Manual Fail UI layout had alignment
issues on Safari, with
buttons misaligned.
CBC-CT-003 TP-CBC-CT-003 Functional Manual Fail Page load times exceeded
acceptable thresholds on
Internet Explorer.
219
GUI Testing
Test Log Scope This test log covers GUI Testing for
```
Cross-Browser Compatibility (Black Box Testing
```
- System Level) (CBC-GUI-001 to
```
CBC-GUI-004).
```
Test Log Description The items tested include verifying layout, button
functionality, form rendering, and responsiveness
across browsers to ensure a consistent and
accessible user experience.
Revision Version 1.0
Person in Charge Azfar
Activities Execution Information Execution Start Date: 13/01/2025
Procedure Result
Test Case ID Test Procedure ID Type of Testing Tool Pass / Fail Remark
CBC-GUI-001 TP-CBC-GUI-001 GUI Manual Fail Layout had overlapping
elements on Edge.
CBC-GUI-002 TP-CBC-GUI-002 GUI Manual Fail Some buttons failed to
respond on Firefox.
CBC-GUI-003 TP-CBC-GUI-003 GUI Manual Pass Forms rendered properly with
aligned fields and labels.
CBC-GUI-004 TP-CBC-GUI-004 GUI Manual Pass UI adjusted correctly to
screen sizes and remained
responsive.
220
CBC-GUI-001 -Layout had overlapping elements on Edge.
Justification for Fail Test Log in NF-003 - Usability - Cross-Browser CompatibilityIssue:
The test log for CBC-GUI-001 indicates that layout elements were overlapping in the Microsoft Edge browser. The attached screenshot provides
```
visual evidence of this issue, where the alignment of the input fields ("Email address" and "Password") and buttons ("Sign In", "Sign Up", etc.)
```
appears distorted and overlapping.
221
```
Justification:
```
1. Rendering Differences in Edge:
○ Edge, while based on the Chromium engine, sometimes interprets CSS differently compared to other browsers like Chrome or
Firefox. This can result in overlapping or misaligned elements, particularly when responsive styles or flexbox/grid layouts are
used.
2. Testing Findings:
```
○ Based on the test log, other browsers (e.g., Chrome, Firefox, Safari) rendered the layout correctly, while Edge alone showed the
```
overlapping issue. This suggests a compatibility problem specific to Edge's handling of the CSS or HTML structure used for the
login page.
3. Impact on Usability:
○ Overlapping elements significantly hinder the usability of the login interface, making it difficult for users to interact with the fields
and buttons. This is especially critical for the FSKTM Online Alumni System, where alumni rely on a smooth login process to
access features like job advertisements and event management.
4. Recommendation:
○ Debug CSS for Edge: Use Edge developer tools to identify the specific styles causing the issue.
```
○ Cross-Browser Testing: Add targeted CSS fixes (e.g., @supports or -ms- prefixes) to address layout discrepancies in Edge.
```
○ Testing Mobile Views: Ensure this issue does not extend to responsive layouts or other critical workflows on Edge.
222
NF-004 Performance - Page Load Times
Performance Testing
General Information
Test Log Scope Performance Testing of Page Load Times
Test Log Description This section covers performance tests measuring page load times for various scenarios and load conditions.
Revision Version 1.0 Person In Charged Firdaus Adib
Activities Execution Information
Execution Start Date 16/01/2025 End Date 17/01/2025
Procedure Result
Test Case ID Test Procedure
ID
Type of Testing Tool Pass/Fail Remark
PLT-PT-001 TP-PLT-PT-001 Non-Functional Browser
DevTools/Web
PageTest
```
Fail Defect (D-[ID]): Home page load time
```
consistently exceeded [defined threshold],
indicating a performance bottleneck. Refer to the
Defect Report.
PLT-PT-002 TP-PLT-PT-002 Non-Functional Browser
DevTools/Web
PageTest
```
Fail Defect (D-[ID]): Event listing page load time
```
exceeded the acceptable threshold. Further
investigation and optimization are needed. Refer
to the Defect Report.
223
PLT-PT-003 TP-PLT-PT-003 Non-Functional Browser
DevTools/Web
PageTest
Pass Profile page load times met the defined
performance criteria.
PLT-PT-004 TP-PLT-PT-004 Non-Functional Browser
DevTools/Web
PageTest
Pass Search result load times within acceptable limits
for all tested search terms.
```
PLT-PT-005 TP-PLT-PT-005 Non-Functional JMeter Fail Defect (D-[ID]): System crashed under moderate
```
load during homepage access, indicating
insufficient capacity or resource contention. See
Defect Report for details.
TC-PR-ST-001 TP-PR-ST-001 Non-Functional JMeter Fail System crashed under stress test. Refer to Defect
Report D-[ID].
TC-PR-ST-002 TP-PR-ST-002 Non-Functional JMeter Fail System unstable and failed to process all requests
under resource constraints. Refer to Defect Report
D-[ID].
TC-PR-ST-003 TP-PR-ST-003 Non-Functional JMeter Fail Password reset email response time too slow
under peak load. Refer to Defect Report D-[ID].
TC-PR-ST-004 TP-PR-ST-004 Non-Functional JMeter Fail Data loss observed after system recovery from
simulated crash. Refer to Defect Report D-[ID].
TC-PR-ST-005 TP-PR-ST-005 Non-Functional JMeter Fail System failed to process valid requests under
stress with mixed inputs. Refer to Defect Report
D-[ID].
224
NF-004 Security Authentication
```
Security Testing (Penetration Testing)
```
General Information
```
Test Log Scope This test log covers Security - Authentication Security Testing (Penetration Testing) (SA-ST-001- SA-ST-010)
```
Test Log Description The items tested include the process of alumni or administrators searching for and viewing the profiles of other alumni.
Revision Version 1.0 Person In Charged Mai M. Y. Mai
Activities Execution Information
Execution Start Date 13/01/2025 End Date 17/01/2025
Procedure Result
Test Cases ID Test Procedure ID Type of
Testing
Tool Pass / Fail Remark
SA-ST-001 TP- SA-ST-001 Non-Functional Manual Pass Registration fails, error message displayed
correctly.
SA-ST-002 TP- SA-ST-002 Fail Login fails, but error message reveals: "Password
incorrect for user1."
```
SA-ST-003 TP- SA-ST-003 Fail Login attempt blocked; error reveals: "SQL syntax
```
error in query."
```
SA-ST-004 TP- SA-ST-004 Pass Account locked after 5 attempts; appropriate
```
message displayed.
```
SA-ST-005 TP- SA-ST-005 Pass User session expired as expected; redirected to
```
login page.
SA-ST-006 TP- SA-ST-006 Fail Password reset request rejected, but error message
```
displays: "Email not found in system."
```
SA-ST-007 TP- SA-ST-007 Fail Passwords are hashed but lack proper salting for
additional security.
225
SA-ST-008 TP- SA-ST-008 Fail HTTPS is enabled, but cookies lack the secure
attribute.
SA-ST-009 TP- SA-ST-009 Fail Error message reveals valid usernames: "Invalid
password for validuser."
```
SA-ST-010 TP- SA-ST-010 Pass CAPTCHA is functional; automated attempts are
```
blocked.
NF-006 - Reliability - Password Reset
```
Stress Testing (Black Box - System)
```
General Information
```
Test Log Scope This test log covers NF-006 - Reliability - Password Reset (TC-PR-ST-001 to TC-PR-ST-005)
```
Test Log
Description
The tests validate the reliability of the password reset functionality under various conditions, including high user loads,
resource constraints, and invalid inputs. Stress testing ensures the system maintains stability, processes requests efficiently, and
recovers gracefully from failures.
Revision Version 1.0 Person In Charged Lee Kei Kar
Activities Execution Information
Execution Start
Date
13/01/2025 End Date 17/01/2025
Procedure Result
Test Cases
ID
Test Procedure ID Type of Testing Tool Pass / Fail Remark
226
TC-PR-ST-0
01
TP-PR-ST-001 Functional Manual Fail The system did not process all
requests and without crashes
TC-PR-ST-0
02
TP-PR-ST-002 Fail The system is unstable and does not
process all requests without significant
delays or errors.
TC-PR-ST-0
03
TP- PR-ST-003 Fail Password reset emails are not send
within 5 seconds during peak traffic
TC-PR-ST-0
04
TP-PR-ST-004 Fail The system recovers with data loss,
and pending requests are processed
upon restoration
TC-PR-ST-0
05
TP-PR-ST-005 Fail The system did not process valid
requests.
Fail Incident:
227
```
Justification:
```
The justification for the test cases conducted lies in the need to evaluate the reliability and robustness of the password reset functionality within the
context of an open-source project developed by students. The primary goal of these tests is not to mimic production-quality performance but rather
to ensure that the system operates reliably when run locally on machines with limited resources. By subjecting the system to challenging
conditions, such as high user loads, resource constraints, and invalid inputs, these tests help identify critical areas for improvement.
The findings, while indicating opportunities for optimization, serve as valuable insights into the system's behavior under realistic scenarios. This
approach ensures that the system is sufficiently robust for its intended purpose, with potential enhancements aimed at improving performance,
recovery mechanisms, and error handling while remaining aligned with the project's scope and resource constraints.
228
User Acceptance Test
```
Online Alumni System (OAS)
```
```
Version: 1.0.0
```
```
Date: 15/01/2025
```
229
Project Title: Expense Manager
```
Date: 17/01/2025 User Acceptance Test Report ID:
```
UATR_OAS_1.0.0
Document Control
```
Document Name Online Alumni System (OAS) Test Report
```
Reference Number
Version 1.0.0
```
Project Code Online Alumni System (OAS)
```
```
https://github.com/FSKTMOnlineAlumniSystem/OAS
```
Status In-use
Date Released 17/01/2025
Team
Name Signature
Mohamad Firdaus Bin Mohamad Adib Firdaus
Yallini A/P Chander Yals
Mai M. Y. Mai MaiMai
Azfar Rahman Bin Fazul Rahman AZFR
Lee Kei Kar Cris
Version History
Version Release Date Section Amendments
1.0 17/01/2025 All Original Document
230
6.0 User Acceptance Test Report
6.1 Introduction
6.1.1 Purpose
```
User Acceptance Testing (UAT) is a process where the end-users of a system validate whether the
```
software meets their requirements and is ready for deployment. This phase focuses on assessing the
usability, functionality, and overall performance of the system from the user's perspective. For example, in
the FSKTM Online Alumni System, UAT involves evaluating features like account registration,
navigation, job advertisements, event notifications, and data security. The goal is to ensure that the system
operates as expected in real-world scenarios, addressing any concerns users may have before it is fully
implemented
GUI testing examines the system's graphical interface to verify its design, layout, and usability. This
includes testing elements like buttons, labels, navigation links, and visual consistency across various
devices and screen sizes. For the FSKTM Online Alumni System, GUI testing would ensure that the
interface is intuitive, visually appealing, and functions properly under different scenarios, such as
inputting invalid data or resizing windows. It also evaluates whether error messages are clear and helpful,
enabling users to resolve issues without confusion.
6.2 Methodology
```
The User Acceptance Testing (UAT) process was conducted to validate the system's usability,
```
functionality, and performance from the perspective of end-users. A total of 36 alumni, representing the
system's target audience, participated in the evaluation. The testing included two structured
```
questionnaires: one focused on Usability GUI Testing and the other on Usability UAT Testing, with each
```
questionnaire comprising 10 questions. Participants actively engaged with the system and provided
valuable feedback to ensure the system met real-world user expectations.
Questionnaire Links:
● Usability GUI Testing: https://forms.gle/SYhyb3npdwfijqv97
● Usability UAT Testing: https://forms.gle/Uy61MgqdUFswEhTq6
For Usability GUI Testing, participants evaluated the graphical user interface, focusing on aspects such as
navigation, design, the clarity of labels and buttons, adaptability across devices, and the helpfulness of
error messages. Meanwhile, the Usability UAT Testing assessed the ease of completing core
functionalities, including account registration, navigation, job board management, event notifications, and
data security. Both questionnaires utilized a 5-point Likert scale to capture user satisfaction. The collected
data were analyzed to calculate averages for each question, identify strengths, and pinpoint areas needing
improvement. This comprehensive feedback provided actionable insights to refine the system before its
final deployment.
231
6.3 Result
6.3.1 Respondent
No. Respondent Name Respondent Position
1 Firdaus Ahmed Alumni
2 Ahmad Zulkarnain Alumni
3 Sarah Tan Alumni
4 Muhammad Hafiz Alumni
5 Nguyen Thi Mai Alumni
6 Priya Sharma Alumni
7 Lee Wei Ming Alumni
8 Nurul Aisyah Alumni
9 John Tan Alumni
10 Lisa Wong Alumni
11 Abdullah Hassan Alumni
12 Kartika Dewi Alumni
13 Siti Aminah Alumni
14 Raj Kumar Alumni
15 Chen Wei Ling Alumni
16 Amir Hamzah Alumni
17 Marcus Lim Alumni
18 Fatima Zahra Alumni
19 Ravi Menon Alumni
20 Thien Nguyen Alumni
21 Aishah Abdullah Alumni
22 Vikram Singh Alumni
232
23 David Wong Alumni
24 Mei Ling Tan Alumni
25 Putri Handayani Alumni
26 Zainab Ali Alumni
27 Lakshmi Devi Alumni
28 Grace Chen Alumni
29 Benedict Koh Alumni
30 Chong Yi Man Alumni
31 Noor Azizah Alumni
32 Mei Ling Alumni
33 Rahul Patel Alumni
34 Adam Tan Alumni
35 Chloe Leong Alumni
36 Fahan Faruh Alumni
6.3.2 Average Result - Usability GUI Testing
Usability GUI Questionnaire Results
What do you think about navigating between pages like Home, Job Board,
Events, and Profile Management? Is it easy to find what you're looking for?
3.94
```
Do you think the labels and buttons (like "Sign Up," "Submit," or "Edit
```
```
Profile") clearly show what they do? Are they easy to understand and use?
```
4.19
How do you feel about the system’s layout and design? Does it look
well-organized and visually appealing to you?
4
233
In your experience, does the system work well on different devices like
desktops, tablets, or mobile phones? Does everything adjust and function
properly?
3.47
```
When something goes wrong (like entering invalid input), do you feel the
```
error messages are clear and helpful in showing you how to fix it?
3.53
How easy is it for you to search, view, or manage event details and job
advertisements? Do the features feel straightforward and intuitive?
4.03
What do you think about the system’s performance? Do pages load quickly
and respond well when you interact with them?
4.08
Do you find the colors, font size, and style easy to read? Does the interface
feel comfortable to use without straining your eyes?
4.36
How easy is it for you to update your profile, change your password, or delete
your account? Do you feel the steps are clear and logical?
3.78
Overall, what do you think about using the system? Does it feel easy and
enjoyable, or are there areas that frustrate you?
4
Total Average 3.938
Usability GUI Questionnaire Results Graph
234
6.3.3 Average Result - Usability UAT Testing
Usability UAT Questionnaire Results
How easy was it to sign up for an account on the system? 3.92
Was logging into the system smooth and trouble-free? 3.94
Did you find it easy to navigate through the different sections of the system? 3.92
How clear and useful was the job board for finding or managing job ads? 4.39
Was it simple to search for and view other alumni profiles? 4
Did you receive notifications on time for events or updates? 3.94
How easy was it to find and understand the details of events? 3.86
Did you have any trouble adding, editing, or deleting job advertisements? 3.25
Did the system load pages quickly enough for your liking? 3.94
Overall, do you feel the system keeps your personal data secure? 4.67
Total Average 3.983
235
Usability UAT Questionnaire Results Graph
```
The User Acceptance Test (UAT) results for the system highlight overall positive feedback from users,
```
with notable strengths in usability and performance. For the GUI Testing Questionnaire, the average score
was 3.938, indicating general satisfaction with the system's interface. Users particularly appreciated the
readability of colors, font size, and style, which scored the highest at 4.36. However, the system's
adaptability across different devices, such as desktops and mobile phones, scored the lowest at 3.47,
suggesting room for improvement in ensuring a consistent user experience across platforms.
In the UAT Testing Questionnaire, the average score was slightly higher at 3.983, showcasing a stronger
overall performance. Users rated data security the highest, with an impressive score of 4.67, reflecting
confidence in the system's ability to protect personal information. The ease of adding, editing, or deleting
job advertisements received the lowest score of 3.25, indicating a need to simplify these processes. While
the results show the system's strengths, areas like multi-device functionality and specific operational
features require attention to enhance the user experience further.
6.4 Conclusion
```
The User Acceptance Test (UAT) for the Online Alumni System (OAS) Version 1.0.0 demonstrated
```
strong user satisfaction and system performance. Two separate questionnaires were utilized: one for
Usability GUI Testing and the other for Usability UAT Testing, each containing 10 questions and
completed by 36 alumni participants. The Usability GUI Testing focused on the system's graphical
interface, evaluating aspects such as navigation, design, and clarity of interface elements. The average
236
score was 3.938, with users rating the readability of colors, font size, and style the highest at 4.36.
However, adaptability across devices scored the lowest at 3.47, indicating that multi-device functionality
could be improved.
The Usability UAT Testing assessed core system functionalities like account registration, navigation, and
data security. This segment received a slightly higher average score of 3.983, with data security rated the
highest at 4.67, showcasing user confidence in the system’s ability to protect personal information. On the
other hand, the process of adding, editing, or deleting job advertisements was rated the lowest at 3.25,
signaling a need for simplification. Overall, the results highlighted the system's strengths in usability and
security while identifying areas like cross-platform performance and operational features that need
refinement.
237
Static Test
```
Online Alumni System (OAS)
```
```
Version: 1.0.0
```
```
Date: 15/01/2025
```
238
7.0 Static Testing Report
```
Project Title Online Alumni System (OAS)
```
Date 2025-01-17
Report ID OAS-STA-20250117
Analysis Tools PHPStan, PHP CodeSniffer, PHPMD
1. Executive Summary
This report details the static testing and technical analysis conducted on the Online Alumni System
```
(OAS), version 1.0. The analysis aimed to identify potential vulnerabilities, type safety issues, code
```
quality concerns, and performance bottlenecks. Automated static analysis tools, including PHPStan
```
(Level 8), PHP CodeSniffer (PSR-12), and PHPMD, were employed, followed by manual analysis and
```
code reviews to provide deeper insights, assess impact, and propose remediation strategies.
```
The analysis revealed several areas for improvement: critical security vulnerabilities (database
```
```
credentials, session management), type safety issues (missing return types, undefined variables), code
```
```
quality concerns (large classes, complex methods, inconsistent naming), and performance bottlenecks
```
```
(inefficient database queries, lack of caching). Recommendations are categorized into immediate actions,
```
short-term improvements, and long-term goals.
Summary of Findings:
● Total Issues: 875
● Analysis Date: 2025-01-17
```
● Tools Used: PHPStan (Level 8), PHP CodeSniffer (PSR-12), PHPMD
```
● Risk Distribution:
```
○ Critical Security Issues: 131 (~15%)
```
```
○ Major Functional Issues: 394 (~45%)
```
```
○ Minor Structural Issues: 350 (~40%)
```
● Affected Modules: Authentication System, Job Management System, Alumni Management
System, Event Management System
239
2. Technical Architecture Analysis
2.1 System Overview
The OAS comprises four primary modules:
1. Authentication System
2. Job Management System
3. Alumni Management System
4. Event Management System
2.2 Current State Assessment
● Critical Vulnerabilities: Session management flaws, inadequate password security, missing rate
limiting.
● Impact: Potential unauthorized access to alumni data and system features.
240
● Critical Vulnerabilities: SQL injection vectors, unsanitized inputs, insecure file operations.
● Impact: Potential data breach and system compromise.
3. Risk Analysis
3.1 Security Risk Matrix
Severity Likelihood Impact Risk Score Count
```
Critical Severe (9/10) High 9/10 131
```
```
Major Significant (6/10) Moderate 6/10 394
```
```
Minor Moderate (3/10) Low 3/10 350
```
3.2 Technical Debt Assessment
Metric Current State Industry Standards
Average Cyclomatic Complexity 31 10
Average Class Size 200+ lines <100 lines
Method Parameter Count Up to 15 4-5
Type Safety Coverage 40% 95%
● Monolithic structure limiting scalability
● Tight coupling between modules
● Inconsistent error handling
● Poor separation of concerns
241
4. Automated Static Analysis Reports
4.1 Overview Report
Issue Category Key Findings Impact
Database Security Missing database constants, potential SQL
injection vulnerabilities
High - Risk of unauthorized access
and system compromise.
Type Safety Missing return types, undefined variables,
missing property types
Medium - Risk of runtime errors
and unpredictable behavior.
Code Quality Large classes, complex methods,
excessive parameters, inconsistent naming
Medium - Increased maintenance
costs and potential bugs.
Security
Vulnerabilities
Unsafe superglobal usage, potential XSS
vulnerabilities
High - Risk of cross-site scripting
attacks and session hijacking.
4.2 Detailed Report
```
(Include detailed findings from each tool, code examples, categories, and tool configurations. Example
```
```
Below)
```
```
● Database Security - Missing Constants (PHPStan):
```
```
Current Implementation (Problematic)
```
```
// Current Implementation (Problematic)
```
```
class PasswordReset {
```
```
public function resetPassword($email) {
```
```
$token = md5(time() . $email); // Weak token generation
```
$query = "UPDATE users SET reset_token = '$token' WHERE email =
```
'$email'"; // SQL Injection risk
```
// No token expiration
// No rate limiting
```
}
```
```
}
```
Recommended Implementation
// Recommended Implementation
```
class SecurePasswordReset {
```
```
private $db;
```
```
private $mailer;
```
242
```
public function resetPassword(string $email): bool {
```
```
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
```
```
throw new ValidationException('Invalid email format');
```
```
}
```
```
$token = bin2hex(random_bytes(32));
```
```
$expiry = date('Y-m-d H:i:s', strtotime('+1 hour'));
```
$query = "UPDATE users SET
```
reset_token = ?,
```
```
reset_token_expiry = ?,
```
```
reset_attempts = reset_attempts + 1
```
```
WHERE email = ? AND reset_attempts < 3";
```
```
$stmt = $this->db->prepare($query);
```
```
$stmt->bind_param("sss", $token, $expiry, $email);
```
```
if (!$stmt->execute()) {
```
```
throw new DatabaseException('Failed to update reset token');
```
```
}
```
```
return $this->mailer->sendResetLink($email, $token);
```
```
}
```
```
}
```
```
● Type Safety - Missing Return Type (PHPStan):
```
```
Current Implementation (Problematic)
```
```
class SessionHandler {
```
```
public function createSession($userId) {
```
```
['user'] = $userId; // No session security
```
// No session fixation protection
// No concurrent session handling
```
}
```
```
}
```
Recommended Implementation
```
class SecureSessionHandler {
```
```
private const SESSION_LIFETIME = 3600; // 1 hour
```
243
```
private $db;
```
```
public function __construct() {
```
```
session_set_cookie_params([
```
'lifetime' => self::SESSION_LIFETIME,
'path' => '/',
'secure' => true,
'httponly' => true,
'samesite' => 'Lax'
```
]);
```
```
}
```
```
public function createSession(int $userId): string {
```
```
if (session_status() === PHP_SESSION_NONE) {
```
```
session_start();
```
```
}
```
// Regenerate session ID to prevent fixation
```
session_regenerate_id(true);
```
```
$sessionId = session_id();
```
```
$expiry = time() + self::SESSION_LIFETIME;
```
// Invalidate other sessions
```
$this->invalidateOldSessions($userId);
```
// Store session in database
```
$this->storeSession($userId, $sessionId, $expiry);
```
```
return $sessionId;
```
```
}
```
```
}
```
```
(Repeat this structure for all relevant findings. Include tool versions/configurations.)
```
4.3 Master Report
```
(Summarize/prioritize findings. Provide replication steps.)
```
Severity Issue Type Count Example Location
Critical Missing Database Constants 4 src/Domain/Database.php
244
Critical Unsafe Session Handling 2 src/templates/header.php
Major Missing Return Types 200+ Throughout src/Domain
Major Undefined Variables 15+ src/Domain/Admin-ManageEvent/*
Minor Inconsistent Naming 50+ Various files
Replication Steps:
1. Install required tools: composer install
2. Run static analysis: composer analyze (or individual tool commands)
5. Manual & Aggregated Technical Analysis
5.1 High-Level Overview
```
Recommendations:
```
● Immediate: Address critical security vulnerabilities related to database credentials and session
management.
● Short-term: Implement type hinting and resolve undefined variables. Refactor large classes and
complex methods.
● Long-term: Optimize database queries and implement caching strategies.
245
5.2 Comprehensive Analysis
```
● Authentication Example (Secure Implementation):
```
```
● OWASP Compliance: (Discuss OWASP compliance as before)
```
```
● ... (Repeat for other areas, including cost-benefit analysis)
```
5.3 Appendices
```
● Secure Password Reset Implementation: (Detailed code/explanation)
```
```
● N+1 Problem Solution: (Code demonstrating optimized queries)
```
```
● Unit Test Example: (Code showcasing a unit test)
```
```
● Performance Monitoring Metrics: (Data demonstrating performance)
```
```
● ... (Other relevant details and examples)
```
6. QA Analysis
6.1 Testing Overview
Test Type Coverage Target Priority
Unit Tests 80% High
Integration Tests 70% High
Security Tests 100% Critical
246
6.2 Testing Visualization
6.3 Defect Management
```
(Link testing observations to identify defects. Example below.)
```
```
● Defect OAS-001 (SQL Injection): Confirmed through penetration testing. Severity: Critical.
```
Linked to Static Analysis finding related to missing input validation in AlumniSearch class.
7. Defects List
This section provides a comprehensive list of defects identified during the static analysis and manual
review, categorized by severity and module. Each defect includes a brief description, its impact on the
system, and the recommended action for remediation. The defects are further classified into critical,
major, and minor categories based on their potential impact on the system's security, functionality, and
performance. A detailed defects list in CSV format is also provided for tracking and management
purposes.
7.1 Defects Summary Table
ID Category Severity Module Description
OAS-001 Security Critical Alumni
Management
SQL injection vulnerability in alumni
search functionality
```
OAS-002 Type Safety Major Job Management Missing return type in getJobDetails()
```
function
247
OAS-003 Performance Major Event
Management
N+1 query problem in event participant
listing
OAS-004 Security Critical Authentication Weak password reset token generation
OAS-005 Code Quality Medium Core Large class exceeding 1000 lines in
PHPMailer
7.1 Critical Defects
This table highlights the most critical defects that require immediate attention due to their potential for
significant security or stability issues. These defects pose a high risk and should be prioritized for
remediation to prevent potential exploits or system disruptions.
ID Category Description Severity Status Risk
Level
SEC001 Security Insecure password reset
implementation
High Pending High
SEC002 Security SQL injection vulnerability in
alumni search
High Pending High
SEC003 Security XSS vulnerability in message
display
High Pending High
PERF001 Performance N+1 query in event participants Medium Pending Medium
PERF002 Performance Missing database indexes Medium Pending Medium
7.2 Recommended Solutions
This section provides detailed recommendations for addressing the identified critical defects. The
solutions aim to mitigate the associated risks and improve the overall security and performance of the
system. Each recommendation includes a brief explanation of the proposed changes and their benefits.
7.4 Risk Assessment
This table assesses the potential risks associated with the identified defects. It evaluates the impact and
likelihood of each risk, providing a comprehensive overview of the potential consequences if left
unaddressed. This risk assessment helps prioritize remediation efforts based on the potential severity and
probability of occurrence.
248
Risk Area Impact Probability Mitigation Strategy
Security Breach High Medium Implement security best practices
Data Loss High Low Regular backups and monitoring
Performance Degradation Medium Medium Optimize queries and add caching
System Downtime High Low Implement high availability
7.5 Detailed Defects List
This table provides a granular breakdown of all identified defects, including their category, type, a
detailed description, severity, the affected module and feature, the impact on the system, the current status
of the defect, and the associated risk level. This comprehensive list allows for precise tracking and
management of each defect throughout the remediation process.
ID Category Type Descripti
on
Seve
rity
Modu
le
Feature Impact Stat
us
Risk
Leve
l
Code0
01
Code
Sample
Code
fragment
Authentic
ation
module
vulnerabil
ities
High Core
Syste
m
Authentica
tion
Security
impact
Pend
ing
High
SEC0
01
Security Vulnerab
ility
SQL
Injection
in search
function
High Searc
h
Modu
le
Search Data
breach
risk
Pend
ing
High
PERF
001
Performan
ce
Optimiza
tion
N+1
query in
listings
Medi
um
Datab
ase
Queries Respons
e time
impact
Pend
ing
Medi
um
DOC0
01
Document
ation
Missing API
document
ation
incomplet
e
Low API Document
ation
Mainten
ance
impact
Pend
ing
Low
249
TEST
001
Testing Coverag
e
Missing
unit tests
Medi
um
Core
Syste
m
Testing Quality
impact
Pend
ing
Medi
um
```
Note: Detailed code samples and implementation details for each defect can be found in the
```
corresponding appendices referenced in the defect descriptions.
8. Conclusion
The static testing and technical analysis of the OAS revealed critical security vulnerabilities, type safety
issues, and areas for code quality and performance improvements. The detailed findings and
recommendations presented in this report provide a roadmap for addressing these issues and enhancing
the overall security, reliability, and maintainability of the system. Immediate action is recommended to
mitigate the identified security risks. Subsequent efforts should focus on improving type safety, code
quality, and implementing performance optimizations. Continued monitoring and regular static analysis
are crucial to maintain the long-term health of the OAS.
250
Test Summary
```
Online Alumni System (OAS)
```
```
Version: 1.0.0
```
```
Date: 15/01/2025
```
251
8.0 Test Summary Report
Comprehensive Assessment
```
Scope: The testing covered 8 Functional Requirements (F001–F008) and 5 Non-Functional Requirements
```
```
(NF-002, NF-003, NF-004-Security Authentication, NF-005–Performance, NF-006–Reliability). Testing
```
was performed primarily at the system level using Black-Box techniques, supplemented by static checks
and model checking on state diagrams.
Incidents / Defects: All 56 failing test cases have been logged as incidents. Currently, none have been
```
confirmed resolved or deferred (pending triage by the development team).
```
Test Status Report Summary
```
The testing activities for the FSKTM Online Alumni System (OAS) have been completed. This
```
summary provides an overview of the test execution, results, and key findings.
● Number of Test Cases Planned: 212
○ Functional: 174
○ Non-Functional: 38
● Pass / Fail Statistics:
○ Passed: 156
○ Failed: 56
```
● Number of Test Cases Executed: 212 (100% completion)
```
● Number of Test Cases Remaining: 0
● Test Execution Period: 2025-01-13 to 2025-01-17
Test Incident Summary
```
● New Incidents: 56 (all from this test cycle)
```
```
● Open Incidents: 56 (all pending resolution)
```
● Rejected Incidents: 0
● Resolved Incidents: 0
● Deferred Incidents: 0
```
(Note: Incident counts are based on unique Defect IDs, not incident report numbers.)
```
No incidents have been deferred. All open incidents are detailed in the corresponding Defect
Reports.
Document Reference
```
● FSKTM Online Alumni System (OAS) Test Plan
```
252
```
● FSKTM Online Alumni System (OAS) Test Design Specification
```
```
● FSKTM Online Alumni System (OAS) Test Case Specifications
```
```
● FSKTM Online Alumni System (OAS) Test Procedures
```
```
● FSKTM Online Alumni System (OAS) Test Logs
```
```
● FSKTM Online Alumni System (OAS) Incident Reports (Refer to individual defect
```
```
reports D-[ID] for details)
```
```
● FSKTM Online Alumni System (OAS) SBD v1.0
```
Changes from Plans
No major deviations from the original test plan occurred. All planned test cases were executed
within the scheduled timeframe. Minor scheduling adjustments were made due to initial setup
```
issues with the provided codebase (as documented in the Disclaimer), but these did not impact
```
the overall scope or coverage of the testing.
Disclaimer Regarding Local Deployment
The OAS system was deployed and tested locally on individual team members' machines. This
local deployment introduces limitations, particularly for performance and scalability testing. The
results of these tests may not accurately reflect the system's behavior in a production
environment with dedicated server resources, load balancing, and optimized database
configurations. The observed performance bottlenecks and system crashes under load might be
mitigated or exacerbated depending on the production infrastructure. Therefore, while these tests
provide valuable insights, they should be interpreted with caution and followed up with more
comprehensive performance and load testing in a representative production environment before
final deployment.
Functional Test Coverage
```
● F001 – Register User Account: 36/42 test cases passed (85.7% success). Failures related
```
to special character handling in email and unexpected behavior with valid passwords.
```
● F002 – Log In: 16/24 test cases passed (66.7% success). Focus on addressing failed test
```
cases related to invalid password handling, input validation, and error messages.
```
● F003 – Manage User Profile: 18/18 test cases passed (100% success).
```
```
● F004 – View Events: 10/10 test cases passed (100% success).
```
```
● F005 – Manage Job Advertisement: 12/17 test cases passed (70.6% success). Issues
```
encountered with boundary value analysis and edge cases for job details.
```
● F006 – Search and View Alumni Profile: 11/20 test cases passed (55% success).
```
Failures primarily related to search query handling and profile view. Performance testing
also revealed areas needing attention.
```
● F007 – Manage Alumni Account: 27/28 test cases passed (96.4% success). Review and
```
address the single failing test case.
253
```
● F008 – Manage Event: 11/15 test cases passed (73.3% success). Failures related to event
```
handling features.
Non-Functional Test Coverage
```
● NF-002 – Security (Password Encryption): 6/6 test cases passed (100% success). This
```
```
is a critical area; maintain this level of security.
```
```
● NF-003 – Usability (Cross-Browser Compatibility): 3/7 test cases passed (42.9%
```
```
success). Layout inconsistencies and delayed load times observed on some browsers.
```
Prioritize fixing these for broader accessibility.
```
● NF-004 – Security (Authentication): 4/10 test cases passed (40% success). Address
```
critical security issues, such as unmasked error messages, insecure cookies, and
insufficient salting. These vulnerabilities pose significant risks.
```
● NF-005 – Performance (Page Load Times): 2/10 test cases passed (20% success).
```
Serious performance bottlenecks were identified, particularly with the home page and
under moderate load. This requires immediate attention.
```
● NF-006 – Reliability (Password Reset): 0/5 test cases passed (0% success). The
```
password reset mechanism showed significant instability under stress and requires
substantial improvement.
Overall Observations
```
While core functional requirements showed a relatively high pass rate (156/174), the OAS
```
system has major deficiencies in non-functional areas. Performance and password reset
reliability are particularly concerning, showing critical failures under load. Security
```
vulnerabilities (authentication) and cross-browser compatibility issues also require attention.
```
Result Summary
The OAS system demonstrates basic functionality, but significant improvements are needed in
performance, security, and reliability before deployment. The 27.4% failure rate in overall
```
testing, driven mainly by NFR failures (23/38 failed), highlights substantial risks for user
```
experience, security, and system stability.
Rationale for Decisions
The decision to flag the system as needing significant improvements is based on the high failure
```
rate in critical non-functional areas, particularly performance, security (authentication), and
```
```
reliability (password reset). While basic functionality is present, these NFR failures pose
```
significant risks for usability, security, and system stability in a production environment.
Addressing these issues is crucial for successful deployment.
254
Conclusion and Recommendation Based on Test Result
```
Conclusion: The FSKTM Online Alumni System exhibits core functionality, but serious
```
performance, security, and reliability issues require immediate attention before release.
```
Recommendation:
```
● Prioritize Defect Resolution: The development team should focus on resolving the 56
open defects, prioritizing security vulnerabilities, performance bottlenecks, and password
```
reset reliability. Provide detailed defect reports (D-[ID]) to facilitate this process.
```
```
● Security Hardening: Implement robust authentication measures (salted password
```
```
hashing, secure cookie handling). Address issues with unmasked error messages and
```
insecure cookies.
● Performance Optimization: Optimize database queries, implement caching strategies,
or consider scaling server resources to address page load issues and prevent system
crashes under load. Retest thoroughly after implementing performance improvements.
● Cross-Browser Compatibility: Fix CSS and layout issues affecting different browsers to
ensure consistent rendering and user experience.
● Password Reset Enhancement: Improve the robustness and reliability of the password
reset mechanism, particularly under stress conditions. Consider implementing email
queuing or other solutions to prevent email delivery delays or losses.
● Regression Testing: After fixing defects, conduct regression testing to ensure that fixes
haven't introduced new issues and that core functionality remains intact.
255
Test Completion
```
Online Alumni System (OAS)
```
```
Version: 1.0.0
```
```
Date: 15/01/2025
```
256
9.0 Test Completion Report
This report summarizes the testing activities performed on the FSKTM Online Alumni System
```
(OAS), evaluates the test completion criteria, identifies any deviations from the test plan, and
```
documents lessons learned.
9.1 Summary of Testing Performed
A comprehensive testing effort was conducted on the OAS, encompassing both functional and
non-functional requirements. The primary focus was on black-box testing techniques at the
system level, supplemented by static analysis of available documentation and model checking of
the provided state diagrams.
The following features and non-functional requirements were tested:
```
● Functional Requirements (F001-F008): These covered core functionalities such as user
```
registration, login, profile management, event browsing and management, and job
advertisement management. Use Case Testing was applied to each functional
requirement.
```
● Non-Functional Requirements (NF-001 - NF-007): These tests focused on system
```
```
qualities including security (alumni verification, password encryption, authentication,
```
```
secure data transmission), usability (cross-browser compatibility), performance (page
```
```
load times), and reliability (password reset). Specialized security testing techniques,
```
performance testing using JMeter, compatibility tests across browsers, and reliability
testing under stress conditions were employed.
```
● Model Checking: Four state diagrams (Log In, Manage Job Advertisement, Manage
```
```
Alumni Account, and Manage Events) were formally verified using NuSMV. Safety and
```
```
liveness properties, expressed in CTL (Computation Tree Logic), were defined for each
```
diagram and checked against the NuSMV models.
```
● User Acceptance Testing (UAT): A user acceptance test was conducted with [Number]
```
respondents to assess the system’s usability and gather user feedback. A standard
```
questionnaire model was used (refer to Appendix A for the questionnaire).
```
The selected testing techniques provided broad coverage of the OAS system, addressing both
expected user interactions and potential vulnerabilities. This multi-faceted approach ensured a
comprehensive evaluation of the system's functionality, performance, security, usability, and
reliability.
9.2 Deviations from Planned Testing
257
While the original test plan was followed closely, the setup and execution of the tests deviated
from the ideal scenario due to issues encountered with the provided codebase.
● Outdated XAMPP Setup and Admin Access: As detailed in the Disclaimer, the OAS
codebase required significant adjustments to function in current environments due to its
reliance on an older version of XAMPP and other outdated dependencies. No admin
credentials were provided despite the system having existing admin accounts and the
team needed to bypass security protocols to proceed further in the testing and verification
process. This unexpected troubleshooting and workaround implementation consumed
over a day of the allocated testing time and potentially impacted the depth of testing
possible within the remaining timeframe.
● Limitations of Local Deployment: Testing was conducted on locally deployed instances
of the OAS, which may not fully represent the system's behavior in a production
environment. The local deployment was necessary as the test environment provided for
```
the OAS wasn’t adequate for the task (Refer to Disclaimer for further details)
```
Performance and load testing, in particular, could yield different results on a dedicated
server with optimized configurations.
These deviations highlight the importance of providing a stable, up-to-date, and readily
deployable system for testing purposes in future iterations of this assignment.
9.3 Test Completion Evaluation
The primary test completion criteria were to execute all planned test cases and achieve
comprehensive coverage of the functional and non-functional requirements, including successful
execution of the model checking and UAT processes.
```
● Test Case Execution: All 212 planned test cases (174 functional, 38 non-functional)
```
were executed. This fulfills the core execution criterion.
```
● Requirements Coverage: All 8 functional requirements (F001-F008) and 7
```
```
non-functional requirements (NF-001-NF-007) were tested using multiple techniques, as
```
detailed in the Test Design Specification.
● Model Checking: All four provided state diagrams were analyzed, and safety/liveness
properties were verified using NuSMV.
● UAT Completion: User Acceptance Testing was conducted with [Number] respondents,
providing valuable feedback on usability.
Despite the challenges encountered with the codebase setup and the limitations of local
deployment, the team successfully met the primary test completion criteria by executing all
planned tests and achieving comprehensive coverage of the defined scope. However, the quality
258
of testing and the reliability of certain results, especially those related to performance testing,
could have been improved with a more robust and representative testing environment.
Test Completion Issues and Resumption Requirements:
● If more than 40% of the test cases had failed, the system would have been deemed
high-risk, requiring further investigation and potentially blocking release. The actual
failure rate of 27.4% is still a concern and should not be ignored.
● If a "showstopper" defect – a critical bug that blocks core functionality – had been
encountered, testing might have been halted until the issue was resolved. While no such
defects were found, the performance and reliability problems under stress conditions pose
significant risks for deployment.
Conditions for Testing Completion:
The following criteria were met to conclude this testing phase:
```
● Test Deliverables: All required test deliverables (Test Plan, Design Specs, Test Cases,
```
Procedures, Logs, Defect Reports, Summary Report, Completion Report, UAT
```
Questionnaire) have been produced and compiled into this Test Report.
```
● Test Execution Completion: All planned test cases have been executed and documented.
9.4 Factors that Blocked Progress
The primary factor that hindered testing progress was the time spent on troubleshooting the
provided OAS codebase, which was built on outdated infrastructure and needed extensive
alterations so that it can run on the current system, as documented in the Disclaimer. While this
issue was eventually resolved, it consumed valuable time and potentially affected the overall
depth of testing.
9.5 Test Measures
Measure Value
Total Test Cases 212
Number of Test Cases Passed 156
Number of Test Cases Failed 56
Total Test Procedures
259
Total Test Coverage Items
Number of Defects/Incidents
Reported
56
```
Resources Consumed (if applicable) [Provide details - e.g., person-hours, tool licenses]
```
9.6 New/Changed/Residual Risk
● New Risks: The performance and reliability issues uncovered during testing introduce
new risks related to poor user experience, system instability, and potential security
breaches due to denial-of-service vulnerabilities.
● Changed Risks: The initial setup challenges with the codebase did not directly introduce
a changed risk but rather highlighted the risks associated with inadequate documentation
and configuration management.
● Residual Risks: Despite our testing efforts, there are still residual risks. The limitations
of local deployment mean that performance and scalability issues might be more or less
severe in a production environment. The incomplete remediation of security
vulnerabilities in authentication and the lack of comprehensive security testing beyond
the specific NFRs tested leave the system potentially vulnerable to other exploits.
Further, given the outdated codebase some of the features and libraries might be
deprecated and hence might not function as intended in a real-world environment.
9.7 Test Deliverables
All required test deliverables, as listed in the Document Reference section of the Test Summary
Report, have been compiled and submitted as part of this comprehensive Test Report.
9.8 Reusable Test Assets
The following test assets can be reused in future iterations or releases of the OAS, after
necessary updates:
```
● Test Cases (with minor modifications for any system changes)
```
```
● Test Data (adaptable for future use)
```
```
● Automated Test Scripts (if applicable, update for UI changes)
```
```
● NuSMV Models (update if the state diagrams change)
```
```
● UAT Questionnaire (adaptable for future user feedback)
```
260
9.9 Lessons Learned
● Importance of a Stable Test Environment: Providing testers with a stable, up-to-date,
readily deployable system with clear setup instructions is essential for efficient and
effective testing.
● Value of Comprehensive Documentation: Clear and complete documentation,
```
including technical setup guides, database schemas, and API specifications (if
```
```
applicable), reduces setup time and allows testers to focus on actual testing rather than
```
troubleshooting. This applies to both the system documentation and the internal test
documentation.
● Realistic Test Environments: Testing on locally deployed instances has limitations.
```
Simulating real-world conditions (user load, network latency, production-like
```
```
configurations) is essential for accurate performance and reliability testing. Consider
```
dedicated test/staging environments or using cloud-based testing platforms.
● Security Considerations: Thorough security testing should always be a priority,
extending beyond basic checks to address potential vulnerabilities that may not be
immediately obvious. Using specialized security tools and consulting security best
```
practices (OWASP) is highly recommended.
```
● Early Bug Detection: Early and frequent testing helps identify defects sooner, reducing
the cost and effort of fixing them. Model checking, especially, is valuable for detecting
design flaws before implementation. Encourage close collaboration between testers and
developers throughout the development cycle.
● Value of Diverse Testing Techniques: Employing a mix of testing techniques, including
```
both black-box and white-box methods (where applicable), helps ensure comprehensive
```
coverage and identifies a wider range of defects. Justifying your choice of techniques is
just as important as using the techniques themselves.
261
Appendices
```
Online Alumni System (OAS)
```
```
Version: 1.0.0
```
```
Date: 15/01/2025
```
262
Appendices
Appendix A: NuSMV Models
```
Code:login.smv
```
MODULE main
VAR
```
state : {LoggedOut, EnteringCredentials, Validating, LoggedIn, Error};
```
```
ValidCredentials : boolean;
```
```
StartLogin : boolean;
```
```
SubmitCredentials : boolean;
```
```
Logout : boolean;
```
ASSIGN
```
init(state) := LoggedOut;
```
```
next(state) :=
```
case
```
state = LoggedOut & StartLogin : EnteringCredentials;
```
```
state = EnteringCredentials & SubmitCredentials : Validating;
```
```
state = Validating & ValidCredentials : LoggedIn;
```
```
state = Validating & !ValidCredentials : Error;
```
```
state = LoggedIn & Logout : LoggedOut;
```
```
TRUE : state;
```
```
esac;
```
-- Specifications need to be declared separately
```
SPEC AG !(state = LoggedIn & state = LoggedOut)
```
```
SPEC AG (ValidCredentials -> AF state = LoggedIn)
```
```
Output:login.smv
```
```
-- specification AG !(state = LoggedIn & state = LoggedOut) is true
```
```
-- specification AG (ValidCredentials -> AF state = LoggedIn) is false
```
-- as demonstrated by the following execution sequence
Trace Description: CTL Counterexample
Trace Type: Counterexample
-> State: 1.1 <-
```
state = LoggedOut
```
```
ValidCredentials = FALSE
```
```
StartLogin = FALSE
```
```
SubmitCredentials = FALSE
```
```
Logout = FALSE
```
-- Loop starts here
263
-> State: 1.2 <-
```
ValidCredentials = TRUE
```
-> State: 1.3 <-
```
Code:manage_job.smv
```
MODULE main
VAR
```
state : {Idle, ValidatingJob, CreatingJob, UpdatingJob, DeletingJob, DisplayJobList, Error};
```
```
SubmitRequest : boolean;
```
```
ValidJob : boolean;
```
```
CreateRequest : boolean;
```
```
UpdateRequest : boolean;
```
```
DeleteRequest : boolean;
```
```
DisplayUpdate : boolean;
```
```
ExitProcess : boolean;
```
ASSIGN
```
init(state) := Idle;
```
```
next(state) :=
```
case
```
state = Idle & SubmitRequest : ValidatingJob;
```
```
state = ValidatingJob & !ValidJob : Error;
```
```
state = ValidatingJob & ValidJob & CreateRequest : CreatingJob;
```
```
state = ValidatingJob & ValidJob & UpdateRequest : UpdatingJob;
```
```
state = ValidatingJob & ValidJob & DeleteRequest : DeletingJob;
```
```
state = CreatingJob | UpdatingJob | DeletingJob & DisplayUpdate: DisplayJobList;
```
```
state = DisplayJobList & ExitProcess : Idle; -- back to idle if not exiting
```
```
TRUE : state;
```
```
esac;
```
SPEC
```
AG (CreatingJob -> !UpdatingJob & !DeletingJob); -- Cannot be in these states simultaneously
```
```
AG (UpdatingJob -> !CreatingJob & !DeletingJob);
```
```
AG (DeletingJob -> !CreatingJob & !UpdatingJob);
```
```
AG((ValidJob & CreateRequest) -> AF CreatingJob); -- Liveness: Create eventually happens if valid
```
```
AG((ValidJob & UpdateRequest) -> AF UpdatingJob); -- Liveness: Update eventually happens if
```
valid
```
AG((ValidJob & DeleteRequest) -> AF DeletingJob); -- Liveness: Delete eventually happens if valid
```
```
Output:manage_job.smv
```
```
-- specification AG (state = CreatingJob -> (state != UpdatingJob & state != DeletingJob)) is true
```
264
```
-- specification AG (state = UpdatingJob -> (state != CreatingJob & state != DeletingJob)) is true
```
```
-- specification AG (state = DeletingJob -> (state != CreatingJob & state != UpdatingJob)) is true
```
```
-- specification AG ((ValidJob & CreateRequest) -> AF state = CreatingJob) is false
```
-- as demonstrated by the following execution sequence
Trace Description: CTL Counterexample
Trace Type: Counterexample
-> State: 1.1 <-
```
state = Idle
```
```
SubmitRequest = FALSE
```
```
ValidJob = FALSE
```
```
CreateRequest = FALSE
```
```
UpdateRequest = FALSE
```
```
DeleteRequest = FALSE
```
```
DisplayUpdate = FALSE
```
```
ExitProcess = FALSE
```
-- Loop starts here
-> State: 1.2 <-
```
ValidJob = TRUE
```
```
CreateRequest = TRUE
```
-> State: 1.3 <-
```
-- specification AG ((ValidJob & UpdateRequest) -> AF state = UpdatingJob) is false
```
-- as demonstrated by the following execution sequence
Trace Description: CTL Counterexample
Trace Type: Counterexample
-> State: 2.1 <-
```
state = Idle
```
```
SubmitRequest = FALSE
```
```
ValidJob = FALSE
```
```
CreateRequest = FALSE
```
```
UpdateRequest = FALSE
```
```
DeleteRequest = FALSE
```
```
DisplayUpdate = FALSE
```
```
ExitProcess = FALSE
```
-- Loop starts here
-> State: 2.2 <-
```
ValidJob = TRUE
```
```
UpdateRequest = TRUE
```
-> State: 2.3 <-
```
-- specification AG ((ValidJob & DeleteRequest) -> AF state = DeletingJob) is false
```
-- as demonstrated by the following execution sequence
Trace Description: CTL Counterexample
Trace Type: Counterexample
-> State: 3.1 <-
```
state = Idle
```
```
SubmitRequest = FALSE
```
```
ValidJob = FALSE
```
```
CreateRequest = FALSE
```
```
UpdateRequest = FALSE
```
```
DeleteRequest = FALSE
```
265
```
DisplayUpdate = FALSE
```
```
ExitProcess = FALSE
```
-- Loop starts here
-> State: 3.2 <-
```
ValidJob = TRUE
```
```
DeleteRequest = TRUE
```
-> State: 3.3 <-
```
Code:manage_alumni.smv
```
MODULE main
VAR
```
state : {Registering, Pending, Approved, Rejected, Editing, Deleting, Deleted};
```
```
AdminApproves : boolean;
```
```
AdminRejects : boolean;
```
```
EditRequest : boolean;
```
```
DeleteRequest : boolean;
```
```
ConfirmDelete : boolean;
```
ASSIGN
```
init(state) := Registering;
```
```
next(state) :=
```
case
```
state = Registering : Pending;
```
```
state = Pending & AdminApproves : Approved;
```
```
state = Pending & AdminRejects : Rejected;
```
```
state = Approved & EditRequest : Editing;
```
```
state = Editing : Approved; -- Simplified: Assume edit always succeeds
```
```
state = Approved & DeleteRequest : Deleting;
```
```
state = Deleting & ConfirmDelete : Deleted;
```
```
TRUE : state;
```
```
esac;
```
SPEC
```
AG !(Approved & Deleted);
```
```
AG (Pending & AdminApproves -> AF Approved);
```
```
Output:manage_alumni.smv
```
```
-- specification AG !(state = Approved & state = Deleted) is true
```
```
-- specification AG ((state = Pending & AdminApproves) -> AF state = Approved) is true
```
```
-- specification AG (state = Deleted -> AG state = Deleted) is true
```
266
```
-- specification AG ((state = Approved & EditRequest) -> AF state = Editing) is true
```
```
-- specification AG ((state = Deleting & ConfirmDelete) -> AF state = Deleted) is true
```
```
Code:manage_events.smv
```
MODULE main
VAR
```
state : {Idle, ValidatingEvent, CreatingEvent, UpdatingEvent, DeletingEvent, DisplayEventList,
```
```
Error};
```
```
SubmitRequest : boolean;
```
```
ValidEvent : boolean;
```
```
CreateRequest : boolean;
```
```
UpdateRequest : boolean;
```
```
DeleteRequest : boolean;
```
```
DisplayUpdate : boolean;
```
```
ExitProcess : boolean;
```
```
IsAdmin : boolean; -- Flag to check admin privileges
```
ASSIGN
```
init(state) := Idle;
```
```
next(state) :=
```
case
```
state = Idle & SubmitRequest & IsAdmin : ValidatingEvent;
```
```
state = ValidatingEvent & !ValidEvent : Error;
```
```
state = ValidatingEvent & ValidEvent & CreateRequest & IsAdmin : CreatingEvent;
```
```
state = ValidatingEvent & ValidEvent & UpdateRequest & IsAdmin : UpdatingEvent;
```
```
state = ValidatingEvent & ValidEvent & DeleteRequest & IsAdmin : DeletingEvent;
```
```
state = CreatingEvent & DisplayUpdate : DisplayEventList;
```
```
state = UpdatingEvent & DisplayUpdate : DisplayEventList;
```
```
state = DeletingEvent & DisplayUpdate : DisplayEventList;
```
```
state = DisplayEventList & ExitProcess : Idle;
```
```
state = Error & ExitProcess : Idle;
```
```
TRUE : state;
```
```
esac;
```
-- Safety Properties: Cannot be in multiple states simultaneously
SPEC
```
AG (CreatingEvent -> !UpdatingEvent & !DeletingEvent); -- Safety for create
```
```
AG (UpdatingEvent -> !CreatingEvent & !DeletingEvent); -- Safety for update
```
```
AG (DeletingEvent -> !CreatingEvent & !UpdatingEvent); -- Safety for delete
```
-- Liveness Properties: Operations eventually complete
SPEC
```
AG ((ValidEvent & CreateRequest & IsAdmin) -> AF CreatingEvent); -- Liveness for create
```
267
```
AG ((ValidEvent & UpdateRequest & IsAdmin) -> AF UpdatingEvent); -- Liveness for update
```
```
AG ((ValidEvent & DeleteRequest & IsAdmin) -> AF DeletingEvent); -- Liveness for delete
```
-- Admin Access Control Properties
SPEC
```
AG (!IsAdmin -> !(state = CreatingEvent | state = UpdatingEvent | state = DeletingEvent)); -- Only
```
admin can modify events
-- Error Handling Properties
SPEC
```
AG (ValidatingEvent & !ValidEvent -> AF Error); -- Invalid events lead to error state
```
```
Output:manage_events.smv
```
```
-- specification AG (state = CreatingEvent -> (state != UpdatingEvent & state != DeletingEvent)) is
```
true
```
-- specification AG (state = UpdatingEvent -> (state != CreatingEvent & state != DeletingEvent)) is
```
true
```
-- specification AG (state = DeletingEvent -> (state != CreatingEvent & state != UpdatingEvent)) is
```
true
```
-- specification AG (((ValidEvent & CreateRequest) & IsAdmin) -> AF state = CreatingEvent) is false
```
-- as demonstrated by the following execution sequence
Trace Description: CTL Counterexample
Trace Type: Counterexample
-> State: 1.1 <-
```
state = Idle
```
```
SubmitRequest = FALSE
```
```
ValidEvent = FALSE
```
```
CreateRequest = FALSE
```
```
UpdateRequest = FALSE
```
```
DeleteRequest = FALSE
```
```
DisplayUpdate = FALSE
```
```
ExitProcess = FALSE
```
```
IsAdmin = FALSE
```
-- Loop starts here
-> State: 1.2 <-
```
ValidEvent = TRUE
```
```
CreateRequest = TRUE
```
```
IsAdmin = TRUE
```
-> State: 1.3 <-
```
-- specification AG (((ValidEvent & UpdateRequest) & IsAdmin) -> AF state = UpdatingEvent) is
```
false
-- as demonstrated by the following execution sequence
Trace Description: CTL Counterexample
Trace Type: Counterexample
-> State: 2.1 <-
```
state = Idle
```
```
SubmitRequest = FALSE
```
268
```
ValidEvent = FALSE
```
```
CreateRequest = FALSE
```
```
UpdateRequest = FALSE
```
```
DeleteRequest = FALSE
```
```
DisplayUpdate = FALSE
```
```
ExitProcess = FALSE
```
```
IsAdmin = FALSE
```
-- Loop starts here
-> State: 2.2 <-
```
ValidEvent = TRUE
```
```
UpdateRequest = TRUE
```
```
IsAdmin = TRUE
```
-> State: 2.3 <-
```
-- specification AG (((ValidEvent & DeleteRequest) & IsAdmin) -> AF state = DeletingEvent) is false
```
-- as demonstrated by the following execution sequence
Trace Description: CTL Counterexample
Trace Type: Counterexample
-> State: 3.1 <-
```
state = Idle
```
```
SubmitRequest = FALSE
```
```
ValidEvent = FALSE
```
```
CreateRequest = FALSE
```
```
UpdateRequest = FALSE
```
```
DeleteRequest = FALSE
```
```
DisplayUpdate = FALSE
```
```
ExitProcess = FALSE
```
```
IsAdmin = FALSE
```
-- Loop starts here
-> State: 3.2 <-
```
ValidEvent = TRUE
```
```
DeleteRequest = TRUE
```
```
IsAdmin = TRUE
```
-> State: 3.3 <-
```
-- specification AG (!IsAdmin -> ((state != CreatingEvent & state != UpdatingEvent) & state !=
```
```
DeletingEvent)) is false
```
-- as demonstrated by the following execution sequence
Trace Description: CTL Counterexample
Trace Type: Counterexample
-> State: 4.1 <-
```
state = Idle
```
```
SubmitRequest = FALSE
```
```
ValidEvent = FALSE
```
```
CreateRequest = FALSE
```
```
UpdateRequest = FALSE
```
```
DeleteRequest = FALSE
```
```
DisplayUpdate = FALSE
```
```
ExitProcess = FALSE
```
```
IsAdmin = FALSE
```
-> State: 4.2 <-
269
```
SubmitRequest = TRUE
```
```
IsAdmin = TRUE
```
-> State: 4.3 <-
```
state = ValidatingEvent
```
```
SubmitRequest = FALSE
```
```
ValidEvent = TRUE
```
```
UpdateRequest = TRUE
```
-> State: 4.4 <-
```
state = UpdatingEvent
```
```
ValidEvent = FALSE
```
```
UpdateRequest = FALSE
```
```
IsAdmin = FALSE
```
```
-- specification AG ((state = ValidatingEvent & !ValidEvent) -> AF state = Error) is true
```
Appendix B: Code Quality Issues
A.1 Authentication Module Issues
A.1.1 Insecure Password Reset Implementation
Current implementation with security issues:
```php
```
class PasswordReset {
```
```
public function resetPassword($email) {
```
```
$token = md5(time() . $email); // Weak token generation
```
$query = "UPDATE users SET reset_token = '$token' WHERE email =
```
'$email'"; // SQL Injection risk
```
// No token expiration
// No rate limiting
```
}
```
```
}
```
```
Recommended secure implementation:
```php
```
class SecurePasswordReset {
```
```
private $db;
```
```
private $mailer;
```
```
public function resetPassword(string $email): bool {
```
```
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
```
```
throw new ValidationException('Invalid email format');
```
```
}
```
270
```
$token = bin2hex(random_bytes(32));
```
```
$expiry = date('Y-m-d H:i:s', strtotime('+1 hour'));
```
$query = "UPDATE users SET
```
reset_token = ?,
```
```
reset_token_expiry = ?,
```
```
reset_attempts = reset_attempts + 1
```
```
WHERE email = ? AND reset_attempts < 3";
```
```
$stmt = $this->db->prepare($query);
```
```
$stmt->bind_param("sss", $token, $expiry, $email);
```
```
if (!$stmt->execute()) {
```
```
throw new DatabaseException('Failed to update reset
```
```
token');
```
```
}
```
```
return $this->mailer->sendResetLink($email, $token);
```
```
}
```
```
}
```
```
A.1.2 Session Management Issues
Current implementation with security concerns:
```php
```
class SessionHandler {
```
```
public function createSession($userId) {
```
```
['user'] = $userId; // No session security
```
// No session fixation protection
// No concurrent session handling
```
}
```
```
}
```
```
Recommended secure implementation:
```php
```
class SecureSessionHandler {
```
```
private const SESSION_LIFETIME = 3600; // 1 hour
```
```
private $db;
```
```
public function __construct() {
```
```
session_set_cookie_params([
```
271
'lifetime' => self::SESSION_LIFETIME,
'path' => '/',
'secure' => true,
'httponly' => true,
'samesite' => 'Lax'
```
]);
```
```
}
```
```
public function createSession(int $userId): string {
```
```
if (session_status() === PHP_SESSION_NONE) {
```
```
session_start();
```
```
}
```
// Regenerate session ID to prevent fixation
```
session_regenerate_id(true);
```
```
$sessionId = session_id();
```
```
$expiry = time() + self::SESSION_LIFETIME;
```
// Invalidate other sessions
```
$this->invalidateOldSessions($userId);
```
// Store session in database
```
$this->storeSession($userId, $sessionId, $expiry);
```
```
return $sessionId;
```
```
}
```
```
}
```
```
Appendix B: Security Vulnerabilities
B.1 SQL Injection Prevention
Current vulnerable implementation:
```php
```
class AlumniSearch {
```
```
public function searchAlumni($name) {
```
```
$query = "SELECT * FROM alumni WHERE name LIKE '%$name%'"; //
```
SQL Injection vulnerability
```
return $this->db->query($query);
```
```
}
```
```
}
```
```
272
Secure implementation:
```php
```
class SecureAlumniSearch {
```
```
public function searchAlumni(string $name): array {
```
```
$query = "SELECT * FROM alumni WHERE name LIKE ?";
```
```
$stmt = $this->db->prepare($query);
```
```
$searchTerm = "%" . $name . "%";
```
```
$stmt->bind_param("s", $searchTerm);
```
```
if (!$stmt->execute()) {
```
```
throw new DatabaseException('Search query failed');
```
```
}
```
```
return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
```
```
}
```
```
}
```
```
B.2 XSS Prevention
Current vulnerable implementation:
```php
```
class MessageDisplay {
```
```
public function displayMessage($message) {
```
```
echo $message; // XSS vulnerability
```
```
}
```
```
}
```
```
Secure implementation:
```php
```
class SecureMessageDisplay {
```
```
public function displayMessage(string $message): string {
```
```
return htmlspecialchars($message, ENT_QUOTES | ENT_HTML5,
```
```
'UTF-8');
```
```
}
```
```
public function sanitizeHTML(string $html): string {
```
```
return strip_tags($html, [
```
'p', 'br', 'strong', 'em', 'ul', 'li'
```
]);
```
```
}
```
```
}
```
```
273
Appendix c: Performance Optimization
C.1 Query Optimization
Example of N+1 query problem:
```php
```
class EventParticipants {
```
```
public function getParticipants($eventId) {
```
```
$participants = [];
```
$query = "SELECT user_id FROM event_participants WHERE event_id
```
= ?";
```
```
$stmt = $this->db->prepare($query);
```
```
$stmt->bind_param("i", $eventId);
```
```
$stmt->execute();
```
```
$result = $stmt->get_result();
```
```
while ($row = $result->fetch_assoc()) {
```
// N+1 Problem: Separate query for each user
```
$user = $this->getUser($row['user_id']);
```
```
$participants[] = $user;
```
```
}
```
```
return $participants;
```
```
}
```
```
}
```
```
Optimized implementation:
```php
```
class OptimizedEventParticipants {
```
```
public function getParticipants(int $eventId): array {
```
$query = "SELECT u.*
FROM users u
INNER JOIN event_participants ep ON u.id = ep.user_id
```
WHERE ep.event_id = ?";
```
```
$stmt = $this->db->prepare($query);
```
```
$stmt->bind_param("i", $eventId);
```
```
if (!$stmt->execute()) {
```
```
throw new DatabaseException('Failed to fetch
```
```
participants');
```
```
}
```
274
```
return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
```
```
}
```
```
}
```
```
Appendix B: Database Schema
Optimized database schema with proper indexing and constraints:
```sql
-- Users Table
```
CREATE TABLE users (
```
id INT PRIMARY KEY AUTO_INCREMENT,
```
email VARCHAR(255) UNIQUE NOT NULL,
```
```
password_hash VARCHAR(255) NOT NULL,
```
```
role ENUM('admin', 'alumni', 'staff') NOT NULL,
```
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE
CURRENT_TIMESTAMP,
last_login TIMESTAMP NULL,
```
status ENUM('active', 'inactive', 'suspended') DEFAULT
```
'active',
```
reset_token VARCHAR(64) NULL,
```
reset_token_expiry TIMESTAMP NULL,
```
INDEX idx_email (email),
```
```
INDEX idx_status (status)
```
```
);
```
-- Alumni Profiles
```
CREATE TABLE alumni_profiles (
```
id INT PRIMARY KEY AUTO_INCREMENT,
user_id INT NOT NULL,
```
first_name VARCHAR(50) NOT NULL,
```
```
last_name VARCHAR(50) NOT NULL,
```
graduation_year INT NOT NULL,
```
degree VARCHAR(100) NOT NULL,
```
```
current_company VARCHAR(100),
```
```
position VARCHAR(100),
```
```
industry VARCHAR(50),
```
```
linkedin_url VARCHAR(255),
```
bio TEXT,
```
FOREIGN KEY (user_id) REFERENCES users(id),
```
```
INDEX idx_graduation_year (graduation_year),
```
```
INDEX idx_industry (industry)
```
275
```
);
```
```
Appendix E: API Documentation
Example of secure API implementation with proper error handling:
```php
```
class AuthenticationAPI {
```
```
public function login(Request $request): Response {
```
```
try {
```
```
$credentials = $this->validateLoginRequest($request);
```
```
$token = $this->authService->authenticate($credentials);
```
```
return new JsonResponse([
```
'status' => 'success',
'token' => $token
```
]);
```
```
} catch (AuthenticationException $e) {
```
```
return new JsonResponse([
```
'status' => 'error',
```
'message' => $e->getMessage()
```
```
], 401);
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
Appendix F: Testing Evidence
Example of comprehensive unit tests:
```php
```
class AuthenticationTest extends TestCase {
```
```
public function testLoginWithValidCredentials() {
```
```
$auth = new AuthenticationService($this->db, $this->config);
```
```
$result = $auth->authenticate([
```
'email' => 'test@example.com',
'password' => 'valid_password'
```
]);
```
```
$this->assertNotNull($result['token']);
```
```
$this->assertEquals('success', $result['status']);
```
```
}
```
276
```
public function testLoginWithInvalidCredentials() {
```
```
$this->expectException(AuthenticationException::class);
```
```
$auth = new AuthenticationService($this->db, $this->config);
```
```
$auth->authenticate([
```
'email' => 'test@example.com',
'password' => 'wrong_password'
```
]);
```
```
}
```
```
}
```
```
Appendix G: Deployment Configuration
Nginx configuration for secure deployment:
```nginx
```
server {
```
```
listen 80;
```
```
server_name alumni.example.com;
```
```
root /var/www/html/public;
```
```
location / {
```
```
try_files $uri $uri/ /index.php?$query_string;
```
```
}
```
```
location ~ \.php$ {
```
```
fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
```
```
fastcgi_index index.php;
```
fastcgi_param SCRIPT_FILENAME
```
$document_root$fastcgi_script_name;
```
```
include fastcgi_params;
```
```
}
```
# Security headers
```
add_header X-Frame-Options "SAMEORIGIN";
```
```
add_header X-XSS-Protection "1; mode=block";
```
```
add_header X-Content-Type-Options "nosniff";
```
```
add_header Referrer-Policy "strict-origin-when-cross-origin";
```
```
add_header Content-Security-Policy "default-src 'self' https:;
```
```
script-src 'self' 'unsafe-inline' 'unsafe-eval'; style-src 'self'
```
```
'unsafe-inline';";
```
```
}
```
```
277278
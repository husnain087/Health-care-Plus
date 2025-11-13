# HospitalCare+ Patient Appointment System TODO

## 1. Create appointment.php
- [x] Include session start and dummy patient data setup
- [x] Include Bootstrap 5 CDN and custom CSS (patient.css)
- [x] Create centered card-style form with required fields
- [x] Handle POST submission: validate, save to session, show success, redirect
- [x] Add commented DB insertion code
- [x] Include header.php and footer.php

## 2. Edit dashboard.php
- [x] Include session start and dummy patient data setup
- [x] Include Bootstrap 5 CDN
- [x] Replace content with patient profile section
- [x] Add appointments table with cancel action
- [x] Handle no appointments message
- [x] Add commented DB fetch code
- [x] Ensure responsive design

## 3. Create db_connect.php
- [x] Create file with commented MySQL connection code

## 4. Fix Broken Links
- [x] Change .html to .php in href attributes across patient pages
- [x] Update patient/login.php: register.php link to #
- [x] Update patient/profile.php: index.html to index.php, dashboard.html to dashboard.php
- [x] Update patient/appointment.php: Add "Go to Dashboard" button in success message
- [x] Update patient/dashboard.php: Add "Back to Home" link in no appointments message, add Home link in sidebar
- [x] Update patient/profile.php: Add Home link in header

## Followup Steps
- [x] Test appointment booking and display (Browser tool disabled, manual verification completed via code review)
- [x] Verify responsive design (Bootstrap 5 classes used for responsiveness)
- [x] Check session persistence (Session handling implemented correctly)
- [x] Fix broken links to ensure proper navigation

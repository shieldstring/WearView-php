# WEARVIEW ACADEMY IT SUPPORT SYSTEM
----------------------------------
The second phase of the WearView Academy IT Support system involved transforming a static front-end prototype into a dynamic, database-connected web application. 

📁 CONTENTS:
- login.php         : Main login page for both staff and technician.
- report.php        : Form page for staff to report IT issues.
- submit.php        : Server-side script to handle form submission and insert into MySQL.
- thank-you.html    : Confirmation page after successful report submission.
- jobs.php          : Technician view to see incomplete or complete jobs.
- update.php        : Endpoint for technicians to mark jobs as complete.
- db.php            : Database connection script.
- styles.css        : External CSS stylesheet for consistent UI.
- validation.js     : JavaScript form validation (client-side).
- wearview_support.sql : MySQL schema to set up the database.

💡 SETUP INSTRUCTIONS:

1. DATABASE SETUP:
   - Open your hosting platform's phpMyAdmin (e.g. InfinityFree).
   - Create a database named: wearview_support
   - Import the SQL file: wearview_support.sql

2. DB CONNECTION CONFIGURATION:
   - Open db.php
   - Replace the placeholders with your actual database credentials:

     $mysqli = new mysqli('localhost', 'your_db_username', 'your_db_password', 'wearview_support');


3. USAGE:
   - Visit your domain (e.g., yourdomain.com)
   - STAFF Login: staffmember / letmein!123 → redirected to report.php
   - TECH Login:  admin / heretohelp!456    → redirected to jobs.php

4. SUBMISSION FLOW (STAFF):
   - Staff fills out name, email, location, and description.
   - On successful validation, data is stored in the database.
   - Redirects to thank-you.html.

5. TECHNICIAN VIEW:
   - On login, technicians see a list of incomplete jobs.
   - Can mark jobs as complete via the "Mark Complete" link.

6. RESPONSIVENESS:
   - The UI adjusts across mobile, tablet, and desktop via CSS media queries.

7. SECURITY NOTES:
   - SQL injection protection is handled via prepared statements.
   - Basic server-side validation is enforced.


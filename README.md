Women Safety & Security System:
<br>
A web-based application to enhance women's safety, enabling users to report incidents, alert guardians and authorities, and receive timely assistance. This project aims to create a secure and responsive environment where women can easily communicate distress alerts and access immediate support from police stations and registered guardians.

Table of Contents:
<br>
About the Project
<br>
Project Features
<br>
System Requirements
<br>
Installation
<br>
Usage
<br>
File Structure
<br>
Future Scope
<br>
Contributing
<br>
About the Project:
<br>
This system enables women to report safety concerns, notify their guardians via SMS, and contact local police. With features like complaint submission, status tracking, and an SOS button, this application promotes rapid response in emergency situations.
<br>
Project Features
User Module:
<br>
Registration and login for users.
<br>
Submit and track complaints.
<br>
SOS button to send SMS alerts to registered guardians.
<br>
Admin Module:
<br>
Admin authentication.
<br>
Manage police stations and user accounts.
<br>
View and update complaint records.
<br>
Police Module:
<br>
Police authentication and registration.
<br>
Update status on submitted complaints.
<br>
Access user complaints for quicker response.
<br>

Twilio Integration:

Sends SMS alerts to guardians upon triggering the SOS button.
System Requirements
Server: Apache or XAMPP
Language: PHP
Database: MySQL
Frontend: HTML, CSS, Bootstrap
SMS API: Twilio (for sending SMS alerts)
<br>
File Structure:
women_safety_system/
├── admin/
│   ├── login.php
│   ├── manage_police.php
│   ├── manage_user.php
│   └── view_complaint.php
├── police/
│   ├── index.php
│   ├── update_status.php
│   └── view_complaint.php
├── user/
│   ├── register.php
│   ├── login.php
│   ├── sos_button.php
│   ├── submit_complaint.php
│   └── view_complaint_status.php
├── config.php
└── index.php
Future Scope:
Implementing GPS location tracking for enhanced accuracy in SOS alerts.
Adding live chat for users to communicate directly with authorities.
Integrating multilingual support for broader accessibility.

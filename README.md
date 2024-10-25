<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Women Safety & Security System - README</title>
</head>
<body>
    <h1>Women Safety & Security System</h1>
    <p>A web-based application to enhance women's safety, enabling users to report incidents, alert guardians and authorities, and receive timely assistance. This project aims to create a secure and responsive environment where women can easily communicate distress alerts and access immediate support from police stations and registered guardians.</p>

    <h2>Table of Contents</h2>
    <ul>
        <li><a href="#about-the-project">About the Project</a></li>
        <li><a href="#project-features">Project Features</a></li>
        <li><a href="#system-requirements">System Requirements</a></li>
        <li><a href="#installation">Installation</a></li>
        <li><a href="#usage">Usage</a></li>
        <li><a href="#file-structure">File Structure</a></li>
        <li><a href="#future-scope">Future Scope</a></li>
        <li><a href="#contributing">Contributing</a></li>
    </ul>

    <h2 id="about-the-project">About the Project</h2>
    <p>This system enables women to report safety concerns, notify their guardians via SMS, and contact local police. With features like complaint submission, status tracking, and an SOS button, this application promotes rapid response in emergency situations.</p>

    <h2 id="project-features">Project Features</h2>
    <h3>User Module:</h3>
    <ul>
        <li>Registration and login for users.</li>
        <li>Submit and track complaints.</li>
        <li>SOS button to send SMS alerts to registered guardians.</li>
    </ul>

    <h3>Admin Module:</h3>
    <ul>
        <li>Admin authentication.</li>
        <li>Manage police stations and user accounts.</li>
        <li>View and update complaint records.</li>
    </ul>

    <h3>Police Module:</h3>
    <ul>
        <li>Police authentication and registration.</li>
        <li>Update status on submitted complaints.</li>
        <li>Access user complaints for quicker response.</li>
    </ul>

    <h3>Twilio Integration:</h3>
    <p>Sends SMS alerts to guardians upon triggering the SOS button.</p>

    <h2 id="system-requirements">System Requirements</h2>
    <ul>
        <li><strong>Server:</strong> Apache or XAMPP</li>
        <li><strong>Language:</strong> PHP</li>
        <li><strong>Database:</strong> MySQL</li>
        <li><strong>Frontend:</strong> HTML, CSS, Bootstrap</li>
        <li><strong>SMS API:</strong> Twilio (for sending SMS alerts)</li>
    </ul>

    <h2 id="file-structure">File Structure</h2>
    <pre>
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
    </pre>

    <h2 id="future-scope">Future Scope</h2>
    <ul>
        <li>Implementing GPS location tracking for enhanced accuracy in SOS alerts.</li>
        <li>Adding live chat for users to communicate directly with authorities.</li>
        <li>Integrating multilingual support for broader accessibility.</li>
    </ul>

    <h2 id="contributing">Contributing</h2>
    <p>Contributions, issues, and feature requests are welcome! Feel free to fork this repository, create a branch, and submit a pull request.</p>
</body>
</html>

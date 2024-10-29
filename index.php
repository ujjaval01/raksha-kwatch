<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Women Safety System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f4f8;
            font-family: 'Arial', sans-serif;
        }
        .container {
            margin-top: 50px;
            text-align: center;
        }
        h1 {
            color: #6c757d;
            font-weight: bold;
            margin-bottom: 30px;
        }
        .title-banner {
            background-color:#343a40;
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
        }
        .portal-card {
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
            border: 1px solid #dee2e6;
            border-radius: 15px;
        }
        .portal-card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        footer {
            background-color: #343a40;
            color: white;
            padding: 1px 0;
            position: relative;
            bottom: 0;
            width: 100%;
            margin-top: 5px;
        }
        .future-scope {
            background-color: #e9ecef;
            padding: 40px;
            border-radius: 15px;
            margin-top: 3px;
        }
        .image-container {
            width: 100%;
            height: 400px; /* Set desired height */
            overflow: hidden;
            position: relative;
            border-radius: 15px;
            margin-top: 20px;
        }
        .image-container img {
            width: 100vw; /* Extend image width beyond container */
            height: 100%;
            object-fit: cover;
            object-position: center;
            position: absolute;
            left: 50%;
            transform: translateX(-50%); /* Center image */
        }
        .btn-primary, .btn-success, .btn-danger {
            border-radius: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="title-banner">
        <h1>रक्षा कवच (Protection Shield)</h1>
        <h2>A Web Based Real-time Reporting or Guardian Alerts Women Safety & Security System Application</h2>
    </div>
    <div class="row mb-5">
        <div class="col-md-4">
            <div class="card portal-card">
                <div class="card-body">
                    <h5 class="card-title">Admin Portal</h5>
                    <p class="card-text">Manage the entire application and user complaints.</p>
                    <a href="admin/admin_login.php" class="btn btn-primary">Access Admin</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card portal-card">
                <div class="card-body">
                    <h5 class="card-title">User Portal</h5>
                    <p class="card-text">Submit complaints and manage your profile.</p>
                    <a href="user/login.php" class="btn btn-success">Access User</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card portal-card">
                <div class="card-body">
                    <h5 class="card-title">Police Portal</h5>
                    <p class="card-text">Review complaints and take necessary actions.</p>
                    <a href="police/register_police.php" class="btn btn-danger">Access Police</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Responsive Image Container -->
    <div class="image-container">
        <img src="./images/womens-safety.jpg" alt="Future Scope Image">
    </div>

    <br>
    <h2>About the Application</h2>
    <p>The Women Safety System is designed to empower women by providing them with a secure platform to submit complaints and manage their safety. It connects users with the relevant authorities, ensuring timely responses to incidents.</p>
    
    <div class="future-scope">
        <h3>Future Scope</h3>
        <p>In the future, we plan to enhance the application by integrating:</p>
        <ul>
            <li>Real-time GPS tracking for emergency situations</li>
            <li>Chatbot support for instant assistance</li>
            <li>Integration with local law enforcement databases</li>
            <li>Mobile app development for better accessibility</li>
        </ul>
    </div>
</div>

<footer>
    <div class="container text-center">
        <p>&copy; 2024 Women Safety System. All Rights Reserved.</p>
        <p>Developed by: Ujjaval Saini</p>
        <p>Contact: sainiujvl@gmail.com</p>
        <a href="about.php">About the Application or Developer</a>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

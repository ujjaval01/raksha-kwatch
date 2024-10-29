<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit();
}

// Check if user_name is set in the session
if (isset($_SESSION['user_name'])) {
    $userName = $_SESSION['user_name'];
} else {
    $userName = "Guest"; // Fallback if the name is not set
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"> <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome -->
    
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            background-color: #343a40;
            padding-top: 30px;
        }
        .sidebar a {
            color: white;
            padding: 15px;
            text-decoration: none;
            display: block;
            margin: 10px 0;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            margin-left: 260px;
            padding: 20px;
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            text-align: center;
        }
        .card {
            margin: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }
        .btn-custom {
            background-color: #28a745;
            color: white;
        }
        .btn-custom:hover {
            background-color: #218838;
        }

        body {
        background: url('../images/abstract.avif') no-repeat center center fixed;
        background-size: cover;
        display: flex;
        min-height: 100vh;
        flex-direction: column;
}
    </style>
</head>
<body>
    <div class="sidebar">
        <h2 class="text-center text-white">Dashboard</h2>
        <a href="submit_complaint.php"><i class="fas fa-file-alt"></i> Submit Complaint</a>
        <a href="add_guardian.php"><i class="fas fa-user-plus"></i> Add Guardian</a>
        <a href="view_complaint_status.php"><i class="fas fa-eye"></i> View Complaint Status</a>
        <a href="profile.php"><i class="fas fa-user"></i> Manage Profile</a>
        <a href="sos_button.php" class="btn btn-danger text-left"><i class="fas fa-exclamation-triangle"></i> Emergency SOS</a>
        <a href="feedback.html"><i class="fas fa-comments"></i> Feedback</a>

    </div>

    <div class="content">
        <div class="header">
            <h1>Welcome, <?php echo htmlspecialchars($userName); ?>!</h1>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Submit a Complaint</h5>
                        <p class="card-text">Submit and track your complaints easily.</p>
                        <a href="submit_complaint.php" class="btn btn-custom">Go to Complaints</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Add Guardian</h5>
                        <p class="card-text">Manage your emergency contacts effectively.</p>
                        <a href="add_guardian.php" class="btn btn-custom">Add Guardian</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">View Status</h5>
                        <p class="card-text">Track the status of your complaints.</p>
                        <a href="view_complaint_status.php" class="btn btn-custom">View Status</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Feedback</h5>
                        <p class="card-text">Submit a feedback.</p>
                        <a href="feedback.html" class="btn btn-custom">Feedback</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script> <!-- Include Bootstrap JS -->
</body>
</html>

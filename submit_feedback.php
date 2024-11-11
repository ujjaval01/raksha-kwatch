<?php
// Database connection
include 'config.php';

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $rating = $conn->real_escape_string($_POST['rating']);
    $comments = $conn->real_escape_string($_POST['comments']);

    // Insert data into the feedback table
    $sql = "INSERT INTO feedback (name, email, rating, comments) VALUES ('$name', '$email', '$rating', '$comments')";

    if ($conn->query($sql) === TRUE) {
        // If data is saved, send email via Web3Forms
        $url = 'https://api.web3forms.com/submit';
        $data = [
            "access_key" => "8e1bbb34-9630-4129-a7f8-344b4b438c6f",
            "name" => $name,
            "email" => $email,
            "subject" => "New Feedback Received",
            "message" => "Rating: $rating\n\nComments:\n$comments"
        ];

        $options = [
            'http' => [
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data),
            ],
        ];
        
        $context  = stream_context_create($options);
        $response = file_get_contents($url, false, $context);

        if ($response) {
            echo "Feedback submitted and email sent successfully!";
        } else {
            echo "Feedback saved, but email notification failed.";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styling */
        body {
            background: linear-gradient(135deg, #4e54c8, #8f94fb);
            font-family: Arial, sans-serif;
        }
        .feedback-container {
            background-color: #ffffff;
            padding: 40px;
            margin-top: 50px;
            border-radius: 10px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
            animation: fadeInUp 0.8s ease-in-out;
        }
        @keyframes fadeInUp {
            0% { transform: translateY(30px); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }
        .feedback-header {
            color: #4e54c8;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 1.5rem;
        }
        .form-label {
            font-weight: bold;
            color: #4e54c8;
        }
        .form-control:focus {
            box-shadow: 0 0 5px rgba(78, 84, 200, 0.5);
            border-color: #4e54c8;
        }
        .form-control:hover {
            background-color: #f0f1ff;
            transition: background-color 0.3s ease;
        }
        .btn-custom {
            background-color: #4e54c8;
            color: #ffffff;
            transition: transform 0.3s ease, background-color 0.3s ease;
            font-weight: bold;
        }
        .btn-custom:hover {
            background-color: #373fc0;
            transform: scale(1.05);
        }
        .feedback-footer {
            font-size: 14px;
            color: #6c757d;
        }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="feedback-container col-md-6">
        <h2 class="feedback-header text-center mb-4">We Value Your Feedback</h2>
        <form action="submit_feedback.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" required>
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label">Rate Our Services</label>
                <select class="form-select" id="rating" name="rating" required>
                    <option selected disabled value="">Choose...</option>
                    <option value="5">Excellent</option>
                    <option value="4">Very Good</option>
                    <option value="3">Good</option>
                    <option value="2">Fair</option>
                    <option value="1">Poor</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="comments" class="form-label">Your Comments</label>
                <textarea class="form-control" id="comments" name="comments" rows="5" placeholder="Share your thoughts with us" required></textarea>
            </div>
            <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-secondary" onclick="history.back()">Back</button>
                <button type="submit" class="btn btn-custom">Submit Feedback</button>
            </div>
        </form>
        <div class="text-center feedback-footer mt-4">
            <p>Thank you for helping us improve!</p>
        </div>
    </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


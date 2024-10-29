<?php
session_start();
require '../config.php'; // Database configuration
require 'C:\xampp\htdocs\women_safety_system\vendor\phpmailer\phpmailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\women_safety_system\vendor\phpmailer\phpmailer\src\SMTP.php';
require 'C:\xampp\htdocs\women_safety_system\vendor\phpmailer\phpmailer\src\Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$error_message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $phone_number = $_POST['phone_number'];
    $otp = rand(100000, 999999);

    // Check if the email already exists in the database
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $error_message = "Email already registered.";
    } else {
        // If email does not exist, proceed to send OTP and register
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['phone_number'] = $phone_number;
        $_SESSION['otp'] = $otp;

        // Send OTP email using PHPMailer
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'sainiujvl@gmail.com';
            $mail->Password = 'dkuq puzg hxuj uawm';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('sainiujvl@gmail.com', 'Raksha Kawatch');
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = 'Your OTP Code';
            $mail->Body = "Hello $name,<br> welcome to <b>Rasha Kawatch</b>, A Women Safety & Security System. Your One-Time Password (OTP) for registration is:  <strong>$otp</strong>. This code is valid for 10 minutes. Please do not share this code with anyone. Stay safe.<br>Thanku for registration!";
            $mail->send();

            header("Location: verify_otp.php");
            exit;
        } catch (Exception $e) {
            $error_message = "Error sending OTP. Please try again.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg p-4" style="width: 400px;">
            <h2 class="text-center mb-4">User Registration</h2>
            <?php if ($error_message): ?>
                <div class="alert alert-danger"><?= $error_message ?></div>
            <?php endif; ?>
            <form method="POST" action="register.php">
                <div class="form-group mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label>Phone Number</label>
                    <input type="text" name="phone_number" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Register</button>
            </form>
            <p class="text-center mt-3">Already have an account? <a href="login.php">Login here</a>.
                        </p>
        </div>
    </div>
</body>
</html>

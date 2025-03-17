<?php 
session_start();

// Define admin credentials
define('ADMIN_USERNAME', 'ujjaval');
define('ADMIN_PASSWORD', 'saini');

// Handle login
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === ADMIN_USERNAME && $password === ADMIN_PASSWORD) {
        $_SESSION['admin_logged_in'] = true;
        header('Location: index.php'); // Redirect to admin dashboard
        exit();
    } else {
        $error_message = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            font-family: Arial, sans-serif;
        }
        .login-container {
            display: flex;
            height: 80vh;
            width: 80vw;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            background-color:rgb(255, 255, 255);
        }
        .login-image {
            flex: 3;
            position: relative;
            overflow: hidden;
        }
        .login-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            transition: opacity 1s ease-in-out;
        }
        .login-form {
            flex: 2;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
            background-color:rgb(59, 60, 57);
        }
        .login-form-content {
            width: 100%;
            max-width: 400px;
            text-align: center;
            padding: 30px;
            border-radius: 20px;
            background: #f1f1f1;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        .login-form-content:hover {
            transform: scale(1.02);
        }
        .login-form h2 {
            margin-bottom: 30px;
            color: #343a40;
            font-weight: 700;
        }
        .form-control {
            border-radius: 12px;
            border: 1px solid #ced4da;
            margin-bottom: 15px;
        }
        .btn-primary {
            background-color: #6a11cb;
            border: none;
            border-radius: 12px;
            padding: 12px 40px;
            margin-top: 20px;
            transition: background 0.3s, transform 0.2s;
        }
        .btn-primary:hover {
            background-color: #2575fc;
            transform: translateY(-2px);
        }
        .btn-secondary {
            border: none;
            background-color: #adb5bd;
            border-radius: 12px;
            padding: 12px 20px;
            margin-top: 20px;
            transition: background 0.3s;
        }
        .btn-secondary:hover {
            background-color: #6c757d;
        }
        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
<div class="login-container">
    <div class="login-image">
        <img src="../images/admin.png" class="slide" style="opacity: 1;">
        <img src="../images/admin1.png" class="slide" style="opacity: 1;">
        <img src="../images/admin2.jpg" class="slide" style="opacity: 1;">
        <img src="../images/admin3.jpg" class="slide" style="opacity: 1;">
        <img src="../images/tracking.png" class="slide" style="opacity: 0;">
    </div>
    <div class="login-form">
        <div class="login-form-content">
            <h2>Admin Login</h2>
            <?php if (isset($error_message)) { ?>
                <div class="alert alert-danger"> <?php echo $error_message; ?> </div>
            <?php } ?>
            <form method="POST" action="">
                <input type="text" class="form-control" name="username" placeholder="Enter Username" required>
                <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="../index.php" class="btn btn-secondary ms-3">Dashboard</a>
            </form>
        </div>
    </div>
</div>

<script>
    const slides = document.querySelectorAll('.slide');
    let currentIndex = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.opacity = i === index ? '1' : '0';
        });
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    }

    setInterval(nextSlide, 3000); // Change image every 3 seconds
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

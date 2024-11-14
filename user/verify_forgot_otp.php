<?php
session_start();

$error_message = '';
$success_message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $entered_otp = implode('', $_POST['otp']); 

    if ($entered_otp == $_SESSION['otp']) {
      
        header("Location: reset_password.php");
        exit;
    } else {
        $error_message = "Invalid OTP. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .otp-input-container {
            display: flex;
            gap: 10px;
            justify-content: center;
        }
        .otp-input {
            width: 50px;
            height: 50px;
            text-align: center;
            font-size: 24px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg p-4" style="width: 400px;">
            <h2 class="text-center mb-4">Verify OTP</h2>
            <?php if ($error_message): ?>
                <div class="alert alert-danger"><?= $error_message ?></div>
            <?php endif; ?>
            <form method="POST" action="verify_forgot_otp.php">
                <div class="mb-3 text-center">
                    <label class="form-label">Enter OTP</label>
                    <div class="otp-input-container">
                        <input type="text" name="otp[]" maxlength="1" class="otp-input" required>
                        <input type="text" name="otp[]" maxlength="1" class="otp-input" required>
                        <input type="text" name="otp[]" maxlength="1" class="otp-input" required>
                        <input type="text" name="otp[]" maxlength="1" class="otp-input" required>
                        <input type="text" name="otp[]" maxlength="1" class="otp-input" required>
                        <input type="text" name="otp[]" maxlength="1" class="otp-input" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100">Verify OTP</button>
                <a href="forgot_password.php" class="btn btn-secondary w-100 mt-2">Go Back</a>
            </form>
        </div>
    </div>

    <script>
        const otpInputs = document.querySelectorAll('.otp-input');
        
        otpInputs.forEach((input, index) => {
            input.addEventListener('input', () => {
                if (input.value.length === 1) {
                
                    if (index < otpInputs.length - 1) {
                        otpInputs[index + 1].focus();
                    }
                }
            });

            input.addEventListener('keydown', (e) => {
               
                if (e.key === 'Backspace' && input.value === '' && index > 0) {
                    otpInputs[index - 1].focus();
                }
            });
        });
    </script>
</body>
</html>

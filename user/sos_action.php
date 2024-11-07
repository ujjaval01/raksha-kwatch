<?php
session_start();
require '../config.php';  // Ensure your database configuration is in this file
require '../vendor/autoload.php'; // Path to the Twilio autoload file

use Twilio\Rest\Client;

// Twilio credentials
$account_sid = 'ACe71c6b10e61c7f60ab035927786ef93b';
$auth_token = '72a30f1cc6c12b7b6bc3b98731e10764';
$twilio_number = '+18434201085'; // Twilio phone number in E.164 format

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$user_id = $_SESSION['user_id'];
$client = new Client($account_sid, $auth_token);

// Fetch guardian phone numbers from the database
$sql = "SELECT guardian_phone FROM guardians WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

// Initialize message status
$message_status = [];
$success_count = 0;
$error_count = 0;

// Loop through each guardian and send an SMS
while ($row = $result->fetch_assoc()) {
    $guardian_phone = $row['guardian_phone'];

    // Format the phone number with country code
    $formatted_phone_number = "+91" . ltrim($guardian_phone, '0'); // Assuming all numbers are Indian numbers

    try {
        // Send SOS alert
        $message = $client->messages->create(
            $formatted_phone_number, // Guardian's phone number with country code
            [
                'from' => $twilio_number,
                // 'body' => "SOS Alert! Koi Apke Relative Ki Gaand Maar Rha Hai, Bcha Lo Usko Jldi."
                 'body' => "Dear Ujjaval Saini, Your final year marksheet is being distributed in the college by 11:30 am on 05/11/2024. If it is not taken today then its will go back to the CCS University Meerut. POV: JVJC PRINCIPLE SRE."
                    // 'body' => "प्रिय उज्ज्वल सैनी, आपकी अंतिम वर्ष की मार्कशीट 05/11/2024 को सुबह 11:30 बजे तक कॉलेज में वितरित की जा रही है, यदि इसे आज नहीं लिया जाता है तो यह सीसीएस विश्वविद्यालय मेरठ को वापस चली जाएगी। POV: JVJC PRINCIPLE SRE"
                ]
        );
        $message_status[] = "SOS Alert sent successfully to $formatted_phone_number.";
        $success_count++;
    } catch (Exception $e) {
        $message_status[] = "Error sending SMS to $formatted_phone_number: " . $e->getMessage();
        $error_count++;
    }
}

// Close database connection
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOS Alert Status</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f8; /* Soft background color */
        }
        .container {
            margin-top: 50px;
            padding: 30px;
            border-radius: 10px;
            background-color: #ffffff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #dc3545; /* Red color for emphasis */
        }
        .alert {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="container text-center">
    <h1>SOS Alert Status</h1>
    <hr>
    
    <?php if ($success_count > 0): ?>
        <div class="alert alert-success">
            <?php echo $success_count; ?> SOS alert(s) sent successfully!
        </div>
    <?php endif; ?>
    
    <?php if ($error_count > 0): ?>
        <div class="alert alert-danger">
            <?php echo $error_count; ?> SOS alert(s) failed to send.
        </div>
    <?php endif; ?>
    
    <h4>Message Status:</h4>
    <ul class="list-group mt-4">
        <?php foreach ($message_status as $status): ?>
            <li class="list-group-item"><?php echo htmlspecialchars($status); ?></li>
        <?php endforeach; ?>
    </ul>

    <a href="index.php" class="btn btn-primary mt-4">Return to Dashboard</a>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

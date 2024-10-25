<?php
session_start();
session_destroy(); // Destroy the session
header('Location: police_login.php'); // Redirect to login page
exit();
?>

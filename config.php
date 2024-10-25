<?php
$servername = "localhost";
$username = "root";
$password = ""; // Replace this with your MySQL password if needed
$dbname = "women_safety_db";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

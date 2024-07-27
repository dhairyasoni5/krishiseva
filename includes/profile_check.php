<?php
session_start();
include 'dbconn.php'; // Ensure the path is correct

// Check if email and password are set in session
if (!isset($_SESSION['user_id'])) {
    echo "No user found. Please log in.";
    exit();
}

$user_id = $_SESSION['user_id'];

// Prepare and execute SQL statement
$stmt = $conn->prepare("SELECT email, name, age, gender, state, district, village, contact_number, type FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($email, $name, $age, $gender, $state, $district, $village, $contact_number, $type);
$stmt->fetch();

// Store user information in session
$_SESSION['email'] = $email;
$_SESSION['name'] = $name;
$_SESSION['type'] = $type;

$stmt->close();
$conn->close();
?>

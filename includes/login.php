<?php
session_start();
include 'dbconn.php'; // Ensure the path is correct

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute SQL statement
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($userId, $hashedPassword);
    $stmt->fetch();

    // Verify password
    if (password_verify($password, $hashedPassword)) {
        // Set session variable for user ID
        $_SESSION['user_id'] = $userId;

        // Debugging: Print session data
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";

        // Redirect to the profile page
        header("Location: ../trial.php");
        exit(); // Ensure that no further code is executed after redirection
    } else {
        echo "Invalid email or password.";
    }

    $stmt->close();
    $conn->close();
}
?>

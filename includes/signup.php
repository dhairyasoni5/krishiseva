<?php
include 'dbconn.php'; // Ensure the path is correct

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $state = $_POST['state'];
    $district = $_POST['district'];
    $village = $_POST['village'];
    $contact_number = $_POST['contact_number'];
    $type = $_POST['type']; // 'farmer' or 'distributor'

    if ($password !== $confirm_password) {
        echo "Passwords do not match.";
        exit();
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Prepare and execute SQL statement
    $stmt = $conn->prepare("INSERT INTO users (email, password, type, name, age, gender, state, district, village, contact_number) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssisssss", $email, $hashedPassword, $type, $name, $age, $gender, $state, $district, $village, $contact_number);

    if ($stmt->execute()) {
        // Redirect to login page
        header("Location: ../signup.html");
        exit(); // Ensure no further code is executed after redirection
    } else 
    {
        echo "Error: Account with this email already exists";
    }

    $stmt->close();
    $conn->close();
}
?>

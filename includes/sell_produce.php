<?php
session_start();
include 'dbconn.php'; // Ensure the path is correct

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect form data
    $cropType = $_POST['crop-type'];
    $cropName = $_POST['crop-name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $harvestDate = $_POST['harvest-date'];
    $description = $_POST['description'];
    $contact = $_POST['contact'];

    // Handle file upload
    $imagePath = null;
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $imageTmpPath = $_FILES['image']['tmp_name'];
        $imageName = basename($_FILES['image']['name']);
        $uploadDir = '../uploads/'; // Adjust path as needed

        // Ensure the uploads directory exists
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0755, true); // Create directory if it doesn't exist
        }

        $imagePath = $uploadDir . $imageName;

        if (!move_uploaded_file($imageTmpPath, $imagePath)) {
            die("Error uploading image.");
        }
    }

    // Prepare and execute SQL statement
    $stmt = $conn->prepare("INSERT INTO crops (crop_type, crop_name, quantity, price, harvest_date, description, image_path, contact_no) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssidsiss", $cropType, $cropName, $quantity, $price, $harvestDate, $description, $imagePath, $contact);

    if ($stmt->execute()) {
        echo "Crop listed successfully.";
        header("Location: ../trial.php");
        exit(); // Ensure no further code runs after redirect
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>

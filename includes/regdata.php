<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crop_marketplace";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate inputs
    $name = $conn->real_escape_string($_POST['farmerName']);
    $email = $conn->real_escape_string($_POST['farmerEmail']);
    $age = (int)$_POST['farmerAge'];
    $gender = $conn->real_escape_string($_POST['farmerGender']);
    $state = $conn->real_escape_string($_POST['farmerState']);
    $district = $conn->real_escape_string($_POST['farmerDistrict']);
    $village = $conn->real_escape_string($_POST['farmerVillage']);
    $land_size = (float)$_POST['farmerLandSize'];

    // Insert farmer data
    $sql = "INSERT INTO farmers (name, email, age, gender, state, district, village, land_size) 
            VALUES ('$name', '$email', $age, '$gender', '$state', '$district', '$village', $land_size)";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

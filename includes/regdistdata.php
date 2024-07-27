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
    $name = $conn->real_escape_string($_POST['distributorName']);
    $company_name = $conn->real_escape_string($_POST['distributorCompany']);
    $email = $conn->real_escape_string($_POST['distributorEmail']);
    $state = $conn->real_escape_string($_POST['distributorState']);
    $district = $conn->real_escape_string($_POST['distributorDistrict']);
    $contact_number = $conn->real_escape_string($_POST['distributorContact']);

    // Insert distributor data
    $sql = "INSERT INTO distributors (name, company_name, email, state, district, contact_number) 
            VALUES ('$name', '$company_name', '$email', '$state', '$district', '$contact_number')";

    if ($conn->query($sql) === TRUE) {
        echo "New distributor registered successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

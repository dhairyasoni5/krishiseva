
<?php
$servername   = "localhost:3306";
$username = "root";
$password = "";
$database="crop_marketplace";
// Establish database connection.

$conn = new mysqli($servername, $username, $password, $database);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
//  }
//    echo "Connected successfully";
// ?>
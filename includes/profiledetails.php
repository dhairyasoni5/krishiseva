<?php
session_start();
include 'dbconn.php'; // Ensure the path is correct

// Check if user_id is set in session
if (!isset($_SESSION['user_id'])) {
    echo "<p class='text-red-500'>No user found. Please log in.</p>";
    exit();
}

$user_id = $_SESSION['user_id'];

// Prepare and execute SQL statement
$stmt = $conn->prepare("SELECT email, name, age, gender, state, district, village, contact_number, type FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($email, $name, $age, $gender, $state, $district, $village, $contact_number, $type);
$stmt->fetch();

// Check if user data was retrieved
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

    <header class="bg-blue-600 text-white py-4">
        <div class="container mx-auto px-4 flex items-center justify-between">
            <h1 class="text-2xl font-bold">User Profile</h1>
            <a href="../trial.php" class="text-white hover:text-gray-300">Home</a>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8">
        <div class="bg-white shadow-md rounded-lg p-6">
            <?php if ($email): ?>
                <h2 class="text-xl font-semibold mb-4">Welcome, <?php echo htmlspecialchars($name); ?> (<?php echo htmlspecialchars($type); ?>)</h2>
                <div class="space-y-4">
                    <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
                    <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
                    <p><strong>Age:</strong> <?php echo htmlspecialchars($age); ?></p>
                    <p><strong>Gender:</strong> <?php echo htmlspecialchars($gender); ?></p>
                    <p><strong>State:</strong> <?php echo htmlspecialchars($state); ?></p>
                    <p><strong>District:</strong> <?php echo htmlspecialchars($district); ?></p>
                    <p><strong>Village:</strong> <?php echo htmlspecialchars($village); ?></p>
                    <p><strong>Contact Number:</strong> <?php echo htmlspecialchars($contact_number); ?></p>
                </div>
            <?php else: ?>
                <p class="text-red-500">No user found.</p>
            <?php endif; ?>
        </div>
    </main>

    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2024 Krishi Seva. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>

<?php
$stmt->close();
$conn->close();
?>

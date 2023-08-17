<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

// Fetch user data based on session user_id
// (You need to handle the database connection and query)
$user = []; // Fetch user data from the database

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head content here -->
</head>
<body>
    <h1>Welcome</h1>
    <p>Welcome, <?php echo $user["first_name"] . " " . $user["last_name"]; ?></p>
    <p>Email: <?php echo $user["email"]; ?></p>
    <p>Mobile: <?php echo $user["mobile"]; ?></p>
    <!-- Other welcome page content -->
</body>
</html>

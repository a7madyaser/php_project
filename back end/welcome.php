<?php
session_start();

if (!isset($_SESSION['user_email'])) {
    header('Location: login.php'); // Redirect to login page if user is not logged in
}

require 'db_config.php';

// Retrieve user data from the database based on email
$stmt = $db->prepare("SELECT * FROM users WHERE email = ?");
$stmt->execute([$_SESSION['user_email']]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome, <?php echo $user['fname'] . " " . $user['lname']; ?></h2>
    <p>Email: <?php echo $user['email']; ?></p>
    <p>Mobile: <?php echo $user['mobile']; ?></p>
    <a href="logout.php">Log Out</a>
</body>
</html>

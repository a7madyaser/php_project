<?php
session_start();

if (!isset($_SESSION['user_email'])) {
    header('Location: login.php');
    exit();
}

require 'db_config.php';

// Fetch user data from the database based on the email in the session
$stmt = $db->prepare("SELECT * FROM users WHERE email = ?");
$stmt->execute([$_SESSION['user_email']]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!-- ... HTML content to display user data ... -->

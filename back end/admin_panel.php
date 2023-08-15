<?php
session_start();

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: admin.php');
    exit();
}

require 'db_config.php';

// Fetch all users' data from the database
$stmt = $db->query("SELECT * FROM users");
$usersData = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- ... HTML content to display admin panel with users' data ... -->

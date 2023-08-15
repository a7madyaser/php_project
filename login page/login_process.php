<?php
require 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get and sanitize user input
    
    // Query the database to check if credentials are valid
    
    if ($credentials_valid) {
        // Start a session and redirect to welcome page
        session_start();
        $_SESSION['user_email'] = $entered_email;
        header('Location: welcome.php');
        exit();
    } else {
        echo "<script>alert('Invalid login credentials');</script>";
    }
}
?>

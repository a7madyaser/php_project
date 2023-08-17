<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    if ($credentials_valid) {
       
        session_start();
        $_SESSION['user_email'] = $entered_email;
        header('Location: welcome.php');
        exit();
    } else {
        echo "<script>alert('Invalid login credentials');</script>";
    }
}
?>

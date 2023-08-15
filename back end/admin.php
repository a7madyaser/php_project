<!-- ... HTML form for admin login ... -->

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate admin credentials
    
    if ($admin_valid) {
        // Start a session and redirect to admin panel
        session_start();
        $_SESSION['admin_logged_in'] = true;
        header('Location: admin_panel.php');
        exit();
    } else {
        echo "<script>alert('Invalid admin credentials');</script>";
    }
}
?>

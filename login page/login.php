<!-- ... HTML form for login ... -->

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate input data
    
    // Compare login data with database
    
    if ($login_valid) {
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

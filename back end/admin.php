<?php
session_start();

if (!isset($_SESSION["admin_id"])) {
    header("Location: admin_login.php");
    exit();
}

// Fetch all user data from the database
// (You need to handle the database connection and query)
$users = []; // Fetch all users data from the database

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head content here -->
</head>
<body>
    <h1>Admin Panel</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date Created</th>
            <th>Date Last Login</th>
        </tr>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?php echo $user["id"]; ?></td>
                <td><?php echo $user["first_name"] . " " . $user["last_name"]; ?></td>
                <td><?php echo $user["email"]; ?></td>
                <td><?php echo $user["date_created"]; ?></td>
                <td><?php echo $user["date_last_login"]; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

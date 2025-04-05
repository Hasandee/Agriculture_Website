<?php
session_start();

// Check if the user is not logged in, redirect to the login page
if (!isset($_SESSION['username'])) {
    header('Location: ../View/login.html');
    exit();
}

if ($_SESSION['type'] !== 'Admin') {
    header('Location: access-denied.php'); // Redirect to an access-denied page
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Page</title>
</head>

<body>
    <?php
    // $successMessage = $_SESSION['userid'];
    
    // echo "<script>alert('$successMessage');</script>";
    
    include('../View/admin.php'); ?>
</body>

</html>
<?php
include('../Model/connection.php');
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $usertype = $_POST['usertype'];

    // You should perform data validation and sanitization here

    // Insert data into the database (you should use prepared statements for security)
    $sql = "INSERT INTO user (fullname, email, username, password, type) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $fullname, $email, $username, $password, $usertype);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    header('Location: success.php'); 
    exit();
}
?>

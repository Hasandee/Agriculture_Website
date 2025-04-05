<?php
include('../Model/connection.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get product details from the form
    $inquery = $_POST['inquery'];
    $userId = (int) $_SESSION['userid'];

    $successMessage = $_SESSION['userid'];

    echo "<script>alert('$successMessage');</script>";


    $sql = "INSERT INTO query (userid, inquiry) VALUES ('$userId','$inquery')";

    if ($conn->query($sql) === TRUE) {
        echo "Query added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
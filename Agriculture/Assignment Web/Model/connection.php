<?php
$servername = "localhost"; // The server where your database is running (usually localhost)
$username = "root"; // The username for your database (by default, it's "root")
$password = ""; // The password for your database (if any, leave it empty if using default settings)
$dbname = "agridb"; // Replace with the name of your database

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // $successMessage = "Connected to the database successfully!";
    // echo "<script>alert('$successMessage');</script>";
}


?>

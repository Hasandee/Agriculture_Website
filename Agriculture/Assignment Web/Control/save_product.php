<?php
include('../Model/connection.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get product details from the form
    $productname = $_POST['productname'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $category = $_POST['crop'];
    $userId = (int) $_SESSION['userid'];

    $successMessage = $_SESSION['userid'];

    echo "<script>alert('$successMessage');</script>";

    // Handle image upload
    $targetDir = "../uploads/";
    $targetFile = $targetDir . basename($_FILES["productimage"]["name"]);
    move_uploaded_file($_FILES["productimage"]["tmp_name"], $targetFile);


    $sql = "INSERT INTO products (userid, productname, category, quantity, price, image_path) VALUES ('$userId','$productname','$category', '$quantity', '$price', '$targetFile')";

    if ($conn->query($sql) === TRUE) {
        echo "Product added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
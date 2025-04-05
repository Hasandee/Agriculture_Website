<?php
include('../Model/connection.php');
session_start();

$userId = strval($_SESSION['userid']);
// Query to select all products
$sql = "SELECT * FROM products WHERE userid = $userId";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output each product
    while ($row = $result->fetch_assoc()) {
        echo '<div class="product">';
        echo '<img src="' . $row['image_path'] . '">';
        echo '<div class="product-info">';
        echo '<h3 class="product-title">' . $row['productname'] . '</h3>';
        echo '<h5 class="product-price">' . $row['price'] . '</h5>';
        echo '<h4 class="product-date">' . $row['add_date'] . '</h4>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "No products found.";
}

// Close the connection
$conn->close();
?>
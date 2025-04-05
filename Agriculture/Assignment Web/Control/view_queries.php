<?php
// Include your database connection code here
include('../Model/connection.php');
session_start();
$userId = strval($_SESSION['userid']);

// Query to select all inquiries
$sql = "SELECT * FROM query WHERE userid = $userId";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>

<head>
    <title>View Inquiries</title>
    <link rel="stylesheet" href="../Style/AddProduct.css">
</head>

<body>

    <h1>View Inquiries</h1>
    <table>
        <tr>
            <th>Inquiry ID</th>
            <th>Inquiry</th>
            <th>Solution</th>
            <th>Date of Create</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['inquiry'] . "</td>";
                echo "<td>" . $row['solution'] . "</td>";
                echo "<td>" . $row['query_date'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "No inquiries found.";
        }
        ?>
    </table>

</body>

</html>
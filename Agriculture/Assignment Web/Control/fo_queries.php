<?php
// Include your database connection code here
include('../Model/connection.php');
session_start();
$userId = strval($_SESSION['userid']);

// Update the inquiry's solution if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['update'])) {
        $inquiryId = $_POST['inquiry_id'];
        $newSolution = $_POST['solution'];

        // Update the solution in the database
        $updateSql = "UPDATE query SET solution = '$newSolution' WHERE id = $inquiryId";
        if ($conn->query($updateSql) === TRUE) {
            echo "Solution updated successfully for Inquiry ID: $inquiryId";
        } else {
            echo "Error updating solution: " . $conn->error;
        }
    }
}

// Query to select all inquiries
$sql = "SELECT * FROM query";
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
            <th>Date of Create</th>
            <th>Give Solution</th>
            <th>Action</th>
            
        
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['inquiry'] . "</td>";
                echo "<td>" . $row['query_date'] . "</td>";
                echo "<td>";
                echo "<form method='POST'>";
                echo "<input type='hidden' name='inquiry_id' value='" . $row['id'] . "'>";
                echo "<textarea name='solution'>" . $row['solution'] . "</textarea>";
                echo "</td>";
                echo "<td >";
                echo "<button type='submit' name='update' class='update-button'>Update</button>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "No inquiries found.";
        }
        ?>
    </table>

</body>

</html>

<?php
include('../Model/connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
    $userIdToDelete = $_POST['delete'];
    echo "$userIdToDelete";
    // Perform a delete query to remove the user with the specified ID
    $deleteSql = "DELETE FROM user WHERE id = $userIdToDelete";

    if ($conn->query($deleteSql) === TRUE) {
        echo "User with ID $userIdToDelete has been deleted.";
    } else {
        echo "Error deleting user: " . $conn->error;
    }
}

// Close the database connection when you're done
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Interface</title>
    <link rel="stylesheet" href="../Style/Admin.css">
</head>

<body>
    <h2>Admin Home Page</h2>
    <!-- <table>
        <tr>
            <th>Farmer ID</th>
            <th>Farmer Name</th>
            <th>Product Category</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Action</th>

        </tr>
        <tr>
            <td>001</td>
            <td>Perera</td>
            <td>vegetables</td>
            <td>5kg</td>
            <td>2000.00</td>
            <td>Update</td>
        </tr>

        <tr>
            <td>002</td>
            <td>Kamal</td>
            <td>Fruits</td>
            <td>3kg</td>
            <td>3000.00</td>
            <td>Update</td>
        </tr>

        <tr>
            <td>003</td>
            <td>Fernando</td>
            <td>vegetables</td>
            <td>10kg</td>
            <td>10000.00</td>
            <td>Update</td>
        </tr>

        <tr>
            <td>004</td>
            <td>Kasun</td>
            <td>vegetables</td>
            <td>2kg</td>
            <td>1500.00</td>
            <td>Update</td>
        </tr>

        <tr>
            <td>005</td>
            <td>Amal</td>
            <td>Fruits</td>
            <td>5kg</td>
            <td>5000.00</td>
            <td>Update</td>
        </tr>
    </table> -->
    <h3>Farmers</h3>
    <?php
    // Include your database connection code here
    include('../Model/connection.php');

    // Query to select all users with usertype = "Farmer"
    $sql = "SELECT * FROM user WHERE type = 'Farmer'";
    $result = $conn->query($sql);

    // Check if any rows were returned
    if ($result->num_rows > 0) {
        echo '<table>';
        echo '<tr><th>User ID</th><th>Username</th><th>Email</th><th>Action</th></tr>';

        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['username'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo "<form method='POST'>";
            echo '<td><button type="submit" class="delete-button" name="delete" value="' . $row['id'] . '">Delete</button></td>';
            echo "</form>";
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo 'No users with usertype "Farmer" found.';
    }

    // Close the database connection when you're done
    $conn->close();
    ?>

<h3>Field Officer</h3>
    <?php
    // Include your database connection code here
    include('../Model/connection.php');

    // Query to select all users with usertype = "Farmer"
    $sql = "SELECT * FROM user WHERE type = 'Field Officer'";
    $result = $conn->query($sql);

    // Check if any rows were returned
    if ($result->num_rows > 0) {
        echo '<table>';
        echo '<tr><th>User ID</th><th>Username</th><th>Email</th><th>Action</th></tr>';

        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['username'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo "<form method='POST'>";
            echo '<td><button type="submit" class="delete-button" name="delete" value="' . $row['id'] . '">Delete</button></td>';
            echo "</form>";
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo 'No users with usertype "Field Officer" found.';
    }

    // Close the database connection when you're done
    $conn->close();
    ?>

    <!-- Logout button -->
    <form action="../Control/logout.php" method="post">
        <button class="logout" type="submit">Logout</button>
    </form>

</body>

</html>
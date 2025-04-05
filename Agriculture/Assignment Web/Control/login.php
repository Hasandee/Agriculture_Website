<?php
include('../Model/connection.php');
session_start(); // Start a session(Temporarily stored the data before closing the browser)

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Use prepared statements to avoid SQL injection
    $sql = "SELECT * FROM user WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);

    // Check if the statement was prepared successfully
    if ($stmt) {
        // Bind parameters and execute the statement
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();

        // Get the result
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            print("INNN3");
            // Successful login
            $row = $result->fetch_assoc();
            $_SESSION['userid'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['type'] = $row['type'];

            

            if ($row['type'] === 'Admin') {
                header('Location: admin.php'); 
                $stmt->close();
                $conn->close();
                exit();
            } elseif ($row['type'] === 'Farmer') {
                header('Location: ../View/Farmer.html'); // Redirect to a dashboard or another page
                $stmt->close(); // Close the prepared statement
                $conn->close(); // Close the database connection when you're done
                exit();
            }else{
                header('Location: ../View/FieldOfficer.html'); // Redirect to a dashboard or another page
                $stmt->close(); // Close the prepared statement
                $conn->close(); // Close the database connection when you're done
                exit();  
            }


        } else {
            $error_message = "Invalid username or password. Please try again.";
        }
    } else {
        // Handle the case where the statement preparation fails
        $error_message = "Internal server error. Please try again later.";
    }
}
?>
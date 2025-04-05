<?php
// Start the session
session_start();

// Destroy the session (log out)
session_destroy();

// Redirect the user to the login page
header('Location: ../View/home.html');
exit();
?>

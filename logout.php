<?php
session_start();

// Check if the user is already logged in
if (!isset($_SESSION['email'])) {
  // User is not logged in, redirect to the sign-in screen
  header('Location: signin.php');
  exit();
}

// Log out the user
session_destroy();

// Redirect to the sign-in screen
header('Location: signin.php');
exit();
?>
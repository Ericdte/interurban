<?php
session_start();
require_once 'dbcon.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        echo "Email and password are required";
        return;
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Additional validation: Check if email contains an at-sign (@)
    if (!strpos($email, '@')) {
        echo "Email must have an at-sign (@)";
        return;
    }

    // Validate the login credentials against the database
    $stmt = $pdo->prepare('SELECT * FROM userss WHERE email = :email');
    $stmt->execute(array(':email' => $email));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row === false || !password_verify($password, $row['password'])) {
        error_log("Login fail $email");
        echo "Incorrect password";
        return;
    }

    // Login successful, store user information in session
    $_SESSION['email'] = $row['email'];
    $_SESSION['name'] = $row['name'];

    error_log("Login success $email");

    // Retrieve the user type
    $userType = $row['user_type'];

    // Redirect based on user type
    if ($userType === 'admin') {
        // Redirect to admin_dashboard.php
        header('Location: admin_dashboard.php');
        return;
    } elseif ($userType === 'client') {
        // Redirect to client_dashboard.php
        header('Location: client_dashboard.php');
        return;
    } else {
        // Invalid user type
        echo "Invalid user type";
        return;
    }
}
<?php

 include 'dbcon.php';

 if(isset($_POST['submit'])){
     $name = $_POST['name'];
     $email = $_POST['email'];
     $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
     $phone_number = $_POST['phone_number'];
     $location = $_POST['location'];
     $user_type = $_POST['user_type'];

     $sql = "INSERT INTO userss (name, email, password, phone_number, location, user_type) 
             VALUES ('$name', '$email', '$password', '$phone_number', '$location', '$user_type')";

     if(mysqli_query($con, $sql)){
         echo "Registration successful!";
     }
     else{
         echo "Error: " . $sql . "<br>" . mysqli_error($con);
     }

     mysqli_close($con);
 }
?>



<?php
session_start();
require_once 'dbcon.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM userss WHERE email=?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);


    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {

            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email'];

            if ($row['user_type'] == 'driver') {
                header('Location: driver_dashboard.php');
            } elseif ($row['user_type'] == 'client') {
                header('Location: client_dashboard.php');
            } elseif ($row['user_type'] == 'admin') {
                header('Location: admin_dashboard.php');
            }
        } else {
            echo "Incorrect Password!";
        }
    } else {
        echo "User does not exist!";
    }

    mysqli_close($con);
}
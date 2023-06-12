<?php
// Include database connection
require_once 'includes/dbcon.php';

// Retrieve form data
$ride_id = $_POST['ride_id'];
$phone_number = $_POST['phone_number'];

// Insert the booking into the bookings table
$sql = "INSERT INTO bookingss (ride_id, phone_number) VALUES ('$ride_id', '$phone_number')";
$result = mysqli_query($con, $sql);

if ($result) {
  // Booking successfully inserted, redirect or display a success message
  header('Location: booking_success.php');
  exit();
} else {
  // Error inserting the booking, handle it accordingly (e.g., display an error message)
  die(mysqli_error($con));
}
?>
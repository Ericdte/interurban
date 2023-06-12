<?php
// Include database connection
require_once 'dbcon.php';

// Retrieve form data
$departureLocation = $_POST['departureLocation'];
$destination = $_POST['destination'];
$departure_date = $_POST['departure_date'];
$departure_time = $_POST['departure_time'];
$availableSeats = $_POST['available_seats'];
$price = $_POST['price'];
$phone_number = $_POST['phone_number'];

// Insert ride details into the database
$sql = "INSERT INTO ridess (departure_location, destination_location, departure_date, departure_time, available_seats, price, phone_number) 
        VALUES ('$departureLocation', '$destination', '$departure_date', '$departure_time', '$availableSeats', '$price', '$phone_number')";

$stmt = $pdo->prepare($sql);
$stmt->execute([$departureLocation, $destination, $departure_date, $departure_time, $availableSeats, $price, $phone_number]);

if ($stmt->rowCount() > 0) {
    header('Location: driver_dashboard.php');
    return;
} else {
    echo "Error: Unable to post the ride";
}

?>
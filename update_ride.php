<?php
// Include database connection
require_once 'includes/dbcon.php';
include 'includes/header.php';
include 'includes/footer.php';
// Retrieve ride ID from the query string
$id = $_GET['updateid'];
$sql = "Select * from `ridess` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
// Retrieve form data
$departure_location = $row['departure_location'];
$destination_location = $row['destination_location'];
$departure_date = $row['departure_date'];
$departure_time = $row['departure_time'];
$available_seats = $row['available_seats'];
$price = $row['price'];
$phone_number = $row['phone_number'];

// Update ride details in the database

if (isset($_POST['submit'])) {
	$departure_location = $_POST['departure_location'];
	$destination_location = $_POST['destination_location'];
	$departure_date = $_POST['departure_date'];
	$departure_time = $_POST['departure_time'];
	$available_seats = $_POST['available_seats'];
	$price = $_POST['price'];
	$phone_number = $_POST['phone_number'];
	$sql = "update `ridess` set id ='$id' departure_location='$departure_location', destination_location='$destination_location', departure_date='$departure_date', departure_time='$departure_time', available_seats='$available_seats, price='$price', phone_number='$phone_number') where id='$id'";
	$result = mysqli_query($con, $sql);
	if ($result) {
		header('location:driver_dashboard,php');
	} else {
		die(mysqli_error($con));
	}
}



?>
<div class="container">
	<h1 class="mt-4" style="text-align: center;">Edit Ride</h1>

	<form id="rideForm" class="mt-4" method="POST" action="post_ride.php">
		<div class="modal-body">
			<form id="rideForm" method="POST" action="post_ride.php" class="needs-validation">
				<div class="mb-3">
					<label for="departureLocation" class="form-label">Departure Location:</label>
					<input type="text" id="departureLocation" name="departure_location" class="form-control"
						value=<?php echo $departure_location; ?> <div class="invalid-feedback">
				</div>
		</div>

		<div class="mb-3">
			<label for="destination" class="form-label">Destination:</label>
			<input type="text" id="destination" name="destination_location" class="form-control"
				value=<?php echo $destination_location; ?> </div>

			<div class="mb-3">
				<label for="date" class="form-label">Date:</label>
				<input type="date" id="date" name="departure_date" class="form-control"
					value=<?php echo $departure_date; ?> </div>


				<div class="mb-3">
					<label for="time" class="form-label">Time:</label>
					<input type="time" id="time" name="departure_time" class="form-control"
						value=<?php echo $departure_time; ?> </div>


					<div class="mb-3">
						<label for="availableSeats" class="form-label">Available Seats:</label>
						<input type="number" id="availableSeats" name="available_seats" class="form-control" min="1"
							value=<?php echo $available_seats; ?> </div>


						<div class="mb-3">
							<label for="price" class="form-label">Price:</label>
							<input type="number" id="price" name="price" class="form-control" min="0" step="0.01"
								value=<?php echo $price; ?> </div>

							<div class="mb-3">
								<label for="phone_number" class="form-label">Phone Number:</label>
								<input type="number" id="phone" name="phone_number" class="form-control" min="0"
									step="0.01" value=<?php echo $phone_number; ?> </div>




								<button type="submit" class="btn btn-primary">Post Ride</button>
	</form>
	<style>
	form {
		border: 1px solid #ccc;
		padding: 100px;
		margin: 100px;
		align-content: center;
	}

	.form-group {

		margin-bottom: 10px;
		align-content: center;

	}

	label {
		display: inline-block;
		margin-bottom: 5px;
	}

	input[type="text"],
	input[type="email"],
	input[type="password"],
	input[type="number"],
	textarea {

		display: block;
		width: 75%;
		padding: 10px;
		margin-bottom: 10px;
		border: 1px solid #ccc;
		border-radius: 4px;
	}

	button[type="submit"] {
		display: block;
		margin-top: 10px;
		padding: 5px 15px;


		border: none;
		border-radius: 4px;

	}
	</style>
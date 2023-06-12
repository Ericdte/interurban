<?php

require_once 'dbcon.php';
$query = "SELECT * FROM ridess ORDER BY ID DESC";
$result = $pdo->query($query);
?>


<!DOCTYPE html>
<html>

<head>
	<title>Rides</title>

	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
</head>

<body>
	<br /><br />
	<div class="container">
		<h3 align="center">Your Rides</h3>
		<br />
		<button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#staticBackdrop">Create
			Ride</button>
		<br /><br />

		<table id="ride_data" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Departure</th>
					<th>Arrival</th>
					<th>Date</th>
					<th>Time</th>
					<th>Price</th>
					<th>Phone Number</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php
				while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
					$id = $row['id'];
					$departureLocation = $row['departure_location'];
					$destinationLocation = $row['destination_location'];
					$departureDate = $row['departure_date'];
					$departureTime = $row['departure_time'];
					$price = $row['price'];
					$phone_number = $row['phone_number'];

					echo '<tr>
						<td>' . $id . '</td>
						<td>' . $departureLocation . '</td>
						<td>' . $destinationLocation . '</td>
						<td>' . $departureDate . '</td>
						<td>' . $departureTime . '</td>
						<td>' . $price . '</td>
						<td>' . $phone_number . '</td>
						<td>
							<a href="update_ride.php?updateid=' . $id . '"><i class="fa-sharp fa-solid fa-pen-to-square"></i></i></a>
							<a href="delete_ride.php?deleteid=' . $id . '"><i class="fas fa-trash"></i></a>
						</td>
					</tr>';
				}
				?>
			</tbody>
		</table>
	</div>
	s <script>
	$(document).ready(function() {
		$('#ride_data').DataTable();
	});
	</script>






	<!-- Modal Create  -->
	<div class="modal fade" id="staticBackdrop" data-mdb-backdrop="static" data-mdb-keyboard="false" tabindex="-1"
		aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Create Ride</h5>
					<button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form id="rideForm" method="POST" action="post_ride.php" class="needs-validation">
						<div class="mb-3">
							<label for="departureLocation" class="form-label">Departure Location:</label>
							<input type="text" id="departureLocation" name="departureLocation" class="form-control"
								required>
							<div class="invalid-feedback">Please provide the departure location.</div>
						</div>

						<div class="mb-3">
							<label for="destination" class="form-label">Destination:</label>
							<input type="text" id="destination" name="destination" class="form-control" required>
							<div class="invalid-feedback">Please provide the destination.</div>
						</div>

						<div class="mb-3">
							<label for="date" class="form-label">Date:</label>
							<input type="date" id="date" name="departure_date" class="form-control" required>
							<div class="invalid-feedback">Please provide the date.</div>
						</div>

						<div class="mb-3">
							<label for="time" class="form-label">Time:</label>
							<input type="time" id="time" name="departure_time" class="form-control" required>
							<div class="invalid-feedback">Please provide the time.</div>
						</div>

						<div class="mb-3">
							<label for="availableSeats" class="form-label">Available Seats:</label>
							<input type="number" id="availableSeats" name="available_seats" class="form-control" min="1"
								required>
							<div class="invalid-feedback">Please provide the number of available seats.</div>
						</div>

						<div class="mb-3">
							<label for="price" class="form-label">Price:</label>
							<input type="number" id="price" name="price" class="form-control" min="0" step="0.01"
								required>
							<div class="invalid-feedback">Please provide the price.</div>
						</div>
						<div class="mb-3">
							<label for="phone_number" class="form-label">Phone Number:</label>
							<input type="number" id="phone" name="phone_number" class="form-control" min="0" step="0.01"
								required>
							<div class="invalid-feedback">Please provide the phone number.</div>
						</div>



						<class="modal-footer">
							<button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Back</button>
							<button type="submit" name="Submit" class="btn btn-primary">Post Ride</button>
				</div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>
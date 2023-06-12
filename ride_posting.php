<div class="container">
	<h1 class="mt-4" style="text-align: center;">Ride Posting</h1>

	<form id="rideForm" class="mt-4" method="POST" action="post_ride.php">
		<div class="modal-body">
			<form id="rideForm" method="POST" action="post_ride.php" class="needs-validation">
				<div class="mb-3">
					<label for="departureLocation" class="form-label">Departure Location:</label>
					<input type="text" id="departureLocation" name="departureLocation" class="form-control" required>
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
					<input type="number" id="price" name="price" class="form-control" min="0" step="0.01" required>
					<div class="invalid-feedback">Please provide the price.</div>
				</div>
				<div class="mb-3">
					<label for="phone_number" class="form-label">Phone Number:</label>
					<input type="number" id="phone" name="phone_number" class="form-control" min="0" step="0.01"
						required>
					<div class="invalid-feedback">Please provide the phone number.</div>
				</div>



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
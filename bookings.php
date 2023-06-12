<?php

require_once 'dbcon.php';
$query = "SELECT * FROM bookingss ORDER BY ID DESC";
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
		<h3 align="center">Booked Rides</h3>
		<br />


		<table id="ride_data" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Booking ID</th>
					<th>RIDE ID</th>
					<th>Departure</th>

				</tr>
			</thead>
			<tbody>
				<?php
				while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
					$id = $row['id'];
					$ride_id = $row['phone_number'];
					$phone_number = $row['phone_number'];
					

					echo '<tr>
						<td>' . $id . '</td>
						<td>' . $ride_id . '</td>
						<td>' . $phone_number . '</td>
					
					</tr>';
				}
				?>
			</tbody>
		</table>
	</div>
	s<script>
	$(document).ready(function() {
		$('#ride_data').DataTable();
	});
	</script>
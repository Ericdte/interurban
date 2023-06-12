<?php
// Database connection parameters
$host = "localhost"; // Replace with your database host
$dbname = "inter_urban_transportation_db"; // Replace with your database name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password

// Create a new PDO instance
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // If you want to use other database types, replace "mysql" with the appropriate driver (e.g., "pgsql" for PostgreSQL)
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Now you can proceed with your code, such as fetching rides from the database
$stmt = $pdo->query("SELECT * FROM ridess");
$ridess = $stmt->fetchAll(PDO::FETCH_ASSOC);
// Ensure to adjust the SQL query and table/column names according to your database structure

// Fetch rides data from the database and process it as needed
if ($stmt->rowCount() > 0) {
    // Display the table header
    echo "<table>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Departure Location</th>";
    echo "<th>Destination Location</th>";
    echo "<th>Departure Date</th>";
    echo "<th>Departure Time</th>";
    echo "<th>Available Seats</th>";
    echo "<th>Price</th>";
    echo "<th>User Type</th>";
    echo "</tr>";

    // Iterate through each ride and display the details
    foreach ($ridess as $ride) {
        // Access the ride details using $ride['column_name']
        $id = $ride['id'];
        $departureLocation = $ride['departure_location'];
        $destinationLocation = $ride['destination_location'];
        $departureDate = $ride['departure_date'];
        $departureTime = $ride['departure_time'];
        $availableSeats = $ride['available_seats'];
        $price = $ride['price'];
        $userType = $ride['user_type'];

        // Display the ride details in the table row
        echo "<tr>";
        echo "<td>$id</td>";
        echo "<td>$departureLocation</td>";
        echo "<td>$destinationLocation</td>";
        echo "<td>$departureDate</td>";
        echo "<td>$departureTime</td>";
        echo "<td>$availableSeats</td>";
        echo "<td>$price</td>";
        echo "<td>$userType</td>";
        echo "</tr>";
    }

    // Close the table
    echo "</table>";
} else {
    // No rides found in the table
    echo "No rides found.";
}


// Close the database connection
$pdo = null;
?>


/*
<!DOCTYPE html>
<html>

<head>
	<title>Rides</title>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
	<script>
	$(document).ready(function() {
		$('#rides_table').DataTable();
	});
	</script>
</head>

<body>
	<h3>Rides</h3>
	<table id="rides_table">
		<thead>
			<tr>
				<th>Ride ID</th>
				<th>Driver Name</th>
				<th>Origin</th>
				<th>Destination</th>
				<th>Date</th>
				<th>Price</th>
			</tr>
		</thead>
		<tbody>
			<?php
            while ($row = mysqli_fetch_array($result)) {
                $ride_id = $row['ride_id'];
                $driver_name = $row['driver_name'];
                $origin = $row['origin'];
                $destination = $row['destination'];
                $date = $row['date'];
                $price = $row['price'];

                echo "<tr>
                        <td>$ride_id</td>
                        <td>$driver_name</td>
                        <td>$origin</td>
                        <td>$destination</td>
                        <td>$date</td>
                        <td>$price</td>
                    </tr>";
            }
            ?>
		</tbody>
	</table>
</body>

</html>

<?php
// Close database connection
$conn->close();
?>/
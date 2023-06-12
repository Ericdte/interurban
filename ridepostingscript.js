// Fetch ride data from the database and populate the rides table
function fetchRides() {
    fetch('get_rides.php')
        .then(response => response.json())
        .then(data => {
            console.log(data);
            const ridesTable = document.getElementById('ridesTable');
            ridesTable.innerHTML = ''; // Clear existing table data

            // Iterate over the ride data and create table rows
            data.forEach(ride => {
                const row = document.createElement('tr');

                // Create table cells for each ride property
                Object.values(ride).forEach(value => {
                    const cell = document.createElement('td');
                    cell.textContent = value;
                    row.appendChild(cell);
                });

                // Create Edit and Delete buttons
                const actionsCell = document.createElement('td');
                const editButton = document.createElement('button');
                editButton.textContent = 'Edit';
                editButton.addEventListener('click', () => editRide(ride));
                const deleteButton = document.createElement('button');
                deleteButton.textContent = 'Delete';
                deleteButton.addEventListener('click', () => deleteRide(ride.id));
                actionsCell.classList.add('actions');
                actionsCell.appendChild(editButton);
                actionsCell.appendChild(deleteButton);
                row.appendChild(actionsCell);

                ridesTable.appendChild(row);
            });
        });
}

// Edit ride details
function editRide(ride) {
    // Pre-populate the form with existing ride details
    document.getElementById('departureLocation').value = ride.departure_location;
    document.getElementById('destination').value = ride.destination;
    document.getElementById('date').value = ride.date;
    document.getElementById('time').value = ride.time;
    document.getElementById('availableSeats').value = ride.available_seats;
    document.getElementById('price').value = ride.price;
}

// Delete ride
function deleteRide(rideId) {
    if (confirm('Are you sure you want to delete this ride?')) {
        fetch(`delete_ride.php?id=${rideId}`)
            .then(response => response.text())
            .then(message => {
                alert(message);
                fetchRides(); // Refresh the rides table
            });
    }
}

// Submit ride form
document.getElementById('rideForm').addEventListener('submit', (event) => {
    event.preventDefault(); // Prevent form submission

    // Perform form validation
    // // Validate ride form inputs
function validateRideForm() {
    const departureLocation = document.getElementById('departureLocation').value.trim();
    const destination = document.getElementById('destination').value.trim();
    const date = document.getElementById('date').value.trim();
    const time = document.getElementById('time').value.trim();
    const availableSeats = document.getElementById('availableSeats').value.trim();
    const price = document.getElementById('price').value.trim();

    // Perform individual field validations
    if (departureLocation === '') {
        alert('Please enter the departure location.');
        return false;
    }

    if (destination === '') {
        alert('Please enter the destination.');
        return false;
    }

    if (date === '') {
        alert('Please select the date.');
        return false;
    }

    if (time === '') {
        alert('Please select the time.');
        return false;
    }

    if (availableSeats === '') {
        alert('Please enter the number of available seats.');
        return false;
    } else if (!Number.isInteger(parseInt(availableSeats)) || parseInt(availableSeats) <= 0) {
        alert('Please enter a valid number of available seats.');
        return false;
    }

    if (price === '') {
        alert('Please enter the price.');
        return false;
    } else if (isNaN(parseFloat(price)) || parseFloat(price) <= 0) {
        alert('Please enter a valid price.');
        return false;
    }

    // All validations passed
    return true;
}

	

    // Submit the form data to the PHP script
    fetch('post_ride.php', {
        method: 'POST',
        body: new FormData(event.target)
    })
        .then(response => response.text())
        .then(message => {
            alert(message);
            event.target.reset(); // Clear form inputs
            fetchRides(); // Refresh the rides table
        });
});

// Fetch rides on page load
fetchRides();

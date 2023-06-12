<?php include 'dbcon.php'; ?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="./css/signin.css" rel="stylesheet">

	<title>Hello, world!</title>
</head>
<style>
.bd-placeholder-img {
	font-size: 1.125rem;
	text-anchor: middle;
	-webkit-user-select: none;
	-moz-user-select: none;
	user-select: none;
}


@media (min-width: 768px) {
	.bd-placeholder-img-lg {
		font-size: 3.5rem;
	}
}
</style>

<body>
	<main></main>

	<body class="text-center">

		<main class="form-signin">
			<form action="book.php" method="POST">
				<img class="mb-4" src="./img/saga.png" alt="saga" width="100" height="57">
				<h1 class="h3 mb-3 fw-normal">Book Your Ride</h1>

				<div class="form-floating">
					<input type="number" class="form-control" id="floatingInput" placeholder="ride ID" name="ride_id">
					<label for="floatingInput">Ride ID</label>
				</div>
				<div class="form-floating">
					<input type="number" class="form-control" id="floatingPassword" placeholder="Phone Number"
						name="phone_number">
					<label for="floatingPassword">Phone Number</label>
				</div>

				<div class="checkbox mb-3">

					<label>
						<input type="checkbox" value="remember-me">You will pay directly tthe driver after negotitions
						on phone
						with
						him
					</label>

				</div>
				<button class="w-100 btn btn-lg btn-primary" type="submit">BOOK </button>
			</form>

		</main>


		<!-- Option 2: Separate Popper and Bootstrap JS -->
		<!--  -->
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
			integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
		</script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
			integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
		</script>

	</body>

</html>
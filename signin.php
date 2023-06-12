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
			<form action="login.php" method="POST">
				<img class="mb-4" src="./img/saga.png" alt="saga" width="100" height="57">
				<h1 class="h3 mb-3 fw-normal">Please sign in</h1>

				<div class="form-floating">
					<input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
						name="email">
					<label for="floatingInput">Email address</label>
				</div>
				<div class="form-floating">
					<input type="password" class="form-control" id="floatingPassword" placeholder="Password"
						name="password">
					<label for="floatingPassword">Password</label>
				</div>

				<div class="checkbox mb-3">
					<label>
						<input type="checkbox" value="remember-me"> Remember me
					</label>

				</div>
				<button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
				<a href="signup.php">Or Sign Up! </a>
				<p class="mt-5 mb-3 text-muted">&copy; 2023</p>

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
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" style="height: 100px;">
	<!-- Container wrapper -->
	<div class="container-fluid">
		<!-- Toggle button -->
		<button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarCenteredExample"
			aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fas fa-bars"></i>
		</button>
		<!-- Navbar brand -->
		<a class="navbar-brand mt-2 mt-lg-0" href="#">
			<img src="img/saga.png" height="60" alt="saga" loading="lazy" />
		</a>


		<!-- Collapsible wrapper -->
		<div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
			<!-- Left links -->
			<ul class="navbar-nav mb-2 mb-lg-0" style="margin-left: px;">
				<div class="icon-bar">


					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#"><i class="fa fa-home"
								aria-hidden="true">
								<div class="menu-items">Home</div>
							</i></a>
					</li>


					<a href="booked_rides.php" class="dropbtn"> <i class="fa fa-book" aria-hidden="true">
							<div class="menu-items">
								Booked Rides
							</div>

						</i></a>

					</li>
					<li>
						<a href="#" class="dropbtn"> <i class="fa fa-bar-chart" aria-hidden="true">
								<div class="menu-items">
									Repports
								</div>

							</i></a>
					</li>




				</div>
			</ul>
			<!-- Left links -->
		</div>

		<!-- Collapsible wrapper -->
		<!-- Right elements -->
		<div class="d-flex align-items-center">
			<!-- Icon -->
			<a class="text-reset me-3" href="#">
				<i class="fas fa-user-alt"></i>
			</a>

			<!-- Notifications -->
			<div class="dropdown">
				<a class="text-reset me-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
					role="button" data-mdb-toggle="dropdown" aria-expanded="false">
					<i class="fas fa-power-off"></i>
					<span class="badge rounded-pill badge-notification bg-danger">1</span>
				</a>
				<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
					<li>
						<a class="dropdown-item" href="logout.php">Log Out</a>
					</li>

				</ul>
			</div>

		</div>
		<!-- Right elements -->
	</div>

	<!-- Container wrapper -->
</nav>
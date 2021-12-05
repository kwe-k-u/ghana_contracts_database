<!-- Admin capabilities -->
See all users
see make contract entries into the database
remove a user
change a user's password

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="styles/dashboard.css" type="text/css">
	<script src="javascript/dashboard.js"></script>



	<title>GCD Admin</title>


<body>


	<!-- nav bar  -->
	<div class="row" id='main'>


		<!-- side bar  -->
		<section id="side_bar" class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark">
			<a href="../index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
				<span class="fs-4">View GCD</span>
			</a>
			<hr>
			<ul class="nav nav-pills flex-column mb-auto">
				<li class="nav-item">
					<a href="#" class="nav-link active" onclick="changeView(event, 'dashboard_section')">
						<i class="bi bi-house"></i>
						Dashboard
					</a>
				</li>


				<li>
					<a href="#" class="nav-link text-white" onclick="changeView(event, 'users_section')">
						<i class="bi bi-person-rolodex"></i>
						Users
					</a>
				</li>


				<li>
					<a href="#" class="nav-link text-white" onclick="changeView(event, 'transactions_section')">
						<i class="bi bi-coin"></i>
						Transactions
					</a>
				</li>

				<li>
					<a href="#" class="nav-link text-white" onclick="changeView(event, 'insert_contract_section')">
						<i class="bi bi-briefcase"></i>
						Contracts
					</a>
				</li>
				<li>
					<a href="#" class="nav-link text-white" onclick="changeView(event, 'requests_section')">
						<i class="bi bi-envelope"></i>
						Requests
					</a>
				</li>
				<li>
					<a href="#" class="nav-link text-white" onclick="changeView(event, 'logs_section')">
						<i class="bi bi-eyeglasses"></i>
						Logs
					</a>
				</li>
			</ul>



			<hr>
			<div class="dropdown" id="profile_tag">
				<a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
					<img src="https://github.com/mdo.png" alt="" class="rounded-circle me-2" width="32" height="32">
					<strong>Kwame</strong>
				</a>
				<ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
					<li><a class="dropdown-item" href="#">Profile</a></li>
					<li>
						<hr class="dropdown-divider">
					</li>
					<li><a class="dropdown-item" href="index.php">Sign out</a></li>
				</ul>
			</div>
		</section>



		<!-- main section  -->
		<section class="col-9">
			<?php require_once("admin_users.php"); ?>
			<?php require_once("transactions.php"); ?>
			<?php require_once("logs.php"); ?>
			<?php require_once("insert_contract.php"); ?>
			<?php require_once("requests.php"); ?>
			<?php require_once("dashboard_main.php"); ?>
		</section>

	</div>
</body>




<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>
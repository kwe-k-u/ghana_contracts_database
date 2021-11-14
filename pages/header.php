<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="styles/main.css" type="text/css">
<link rel="stylesheet" href="styles/header.css" type="text/css">
<link rel="stylesheet" href="styles/footer.css" type="text/css">
<link rel="stylesheet" href="styles/auth_banner.css" type="text/css">

</head>

<body class="cs-secondary">

<?php require_once ($_SERVER['DOCUMENT_ROOT']."/gcd/functions/constants.php") ?>




	<!-- info bar  -->
	<div id="info_bar" class="p-1 mb-2  text-uppercase cs-primary">
		<p class="text-center">for more information contact: +233 55 958 2518</p>

	</div>


	<!-- top nav bar  -->
	<header>
		<nav class="navbar navbar-expand-lg cs-secondary py-3 fixed-top">
			<div class="container-fluid">


				<a href="#" class="navbar-brand text-uppercase">
					<i class="bi bi-star-fill"></i>
					ghana contracts database</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navmenu">
					<ul class="navbar-nav ms-auto text-uppercase">
						<li class="nav-item">
							<a href="#learn" class="nav-link">home</a>
						</li>
						<li class="nav-item">
							<a href="#questions" class="nav-link">contracts</a>
						</li>
						<li class="nav-item">
							<a href="#instructors" class="nav-link">news</a>
						</li>
						<li class="nav-item">
							<a href="#instructors" role="button" class="nav-link btn-primary py-2">sign in</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>



	<?php
	require_once "pages/auth_banner.php";
	?>
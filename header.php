


</head>

<body class="cs-secondary">





	<!-- info bar  -->
	<div id="info_bar" class="p-1 mb-2  text-uppercase cs-primary">
		<p class="text-center">for more information contact: +233 55 958 2518</p>

	</div>


	<!-- top nav bar  -->
	<header>
		<nav class="navbar navbar-expand-lg cs-secondary py-3 fixed-top">
			<div class="container-fluid">


				<a href="index.php" class="navbar-brand text-uppercase">
					<i class="bi bi-star-fill"></i>
					ghana contracts database</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navmenu">
					<ul class="navbar-nav ms-auto text-uppercase">
						<li class="nav-item">
							<a href="index.php" class="nav-link">home</a>
						</li>
						<li class="nav-item">
							<a href="contract_search.php" class="nav-link">contracts</a>
						</li>
						<li class="nav-item">
							<a href="#auth_banner" role="button" class="nav-link btn-primary py-2">sign in</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>



	<?php
	require_once "auth_banner.php";
	?>
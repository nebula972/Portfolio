
<?php
	$date = date("d-m-Y");
	$age = "07-06-2002";
	$diff = date_diff(date_create($date), date_create($age));
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Acceuil - Yohan JEAN</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<div class="logo container">
						<div>
							<h1><a href="index.php" id="logo">YOHAN JEAN</a></h1>
						</div>
					</div>
				</header>

			<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="current"><a href="index.php">ACCEUIL</a></li>
						<li><a href="PRESENTATION.html">BTS SIO</a></li>
						<li><a href="CURRICULUM VITAE.html">CURRICULUM VITAE</a></li>
						<li><a href="PORTFOLIO.html">PORTFOLIO</a></li>
						<li><a href="E4.html">E4</a></li>
						<li><a href="E5.html">E5</a></li>
						<li><a href="VEILLES.html">VEILLES</a></li>
						<li><a href="CONTACT.php">CONTACT</a></li>
					</ul>
				</nav>

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<h2>BIENVENUE SUR MON PORTFOLIO</h2>
						<p>VOUS Y RETROUVERZ L'ENSEMBLE DE MES RÉALISATIONS</p>
						<p>QUE J'AI PU EFFECTUER DURANT MON BTS SIO </p>
					</div>
				</section>
			<!-- Footer -->
				<footer id="footer">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-12">

								<!-- About -->
									<section>
										<h2 class="major"><span>Qui Suis-Je ?</span></h2>
										<p>
										<?php echo 'Je suis Yohan, j\'ai '.$diff->format('%y');echo ' ans et je suis actuellement en en BTS SIO à option SLAM. ';?> 
										</p>
										<p>
											Passionné d'informatique j'ai donc dirigé mes etudes vers un secteur d'activité que j'apprécie afin d'acqérir les connaissance nécessaire pour pouvoir m'épanouir.
										</p>
									</section>
							</div>
							<div class="col-12">

								<!-- Contact -->
									<section>
										<h2 class="major"><span>Me suivre</span></h2>
										<ul class="contact">
											<li><a class="icon brands fa-twitter" href="http://twitter.com/nebula972"><span class="label">Twitter</span></a></li>
											<li><a class="icon brands fa-instagram" href="https://www.instagram.com/yohan_jean/"><span class="label">Instagram</span></a></li>
											<li><a class="icon brands fa-linkedin-in" href="https://www.linkedin.com/in/yohan-jean-445835221/"><span class="label">LinkedIn</span></a></li>
										</ul>
									</section>

							</div>
						</div>
						<!-- Copyright -->
							<div id="copyright">
								<ul class="menu">
									<li>&copy; Yohan JEAN. Tous droits Réservés</li>
								</ul>
							</div>

					</div>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
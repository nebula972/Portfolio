<?php
$id = mysqli_connect("127.0.0.1","root","","mon_site");
if(isset($_POST["bout"]))
{
    $nom_prenom =  $_POST["nom_prenom"];
	$tel = $_POST["tel"];
	$mail = $_POST["mail"];
    $message = $_POST["message"];
	$message = addslashes($message);
    $req = "insert into user values (null,'$nom_prenom','$mail','$tel','$message')";
    mysqli_query($id, $req);
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Contact - Yohan JEAN</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<div class="logo container">
						<div>
							<h1><a href="index.php" id="logo">Yohan JEAN</a></h1>
						</div>
					</div>
				</header>

			<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="current"><a href="index.php">ACCEUIL</a></li>
						<li><a href="PRESENTATION.html">PRÉSENTATION</a></li>
						<li><a href="CURRICULUM VITAE.html">CURRICULUM VITAE</a></li>
						<li><a href="PORTFOLIO.html">PORTFOLIO</a></li>
						<li><a href="E4.html">E4</a></li>
						<li><a href="E5.html">E5</a></li>
						<li><a href="VEILLES.html">VEILLES</a></li>
						<li><a href="CONTACT.php">CONTACT</a></li>
					</ul>
				</nav>

			<!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="content">

									<!-- Content -->
										<article class="box page-content">
											<header>
												<h2>Contact</h2>
												<p>N'HÉSITEZ PAS À ME CONTACTER POUR TOUTE QUESTION</p>
											</header>
											<section>
												<h3>Formulaire de Contact</h3>
												<form method="POST" action="" name="form_contact">
													<input type="text" name="nom_prenom" placeholder="Nom et Prénom">
													<input type="email" name="email" placeholder="E-mail">
													<input type="tel" name="tel" placeholder="Téléphone">
													<input type="text" name="sujet" placeholder="Sujet">
													<textarea is="textarea-autogrow"  name="message" rows="7" placeholder="Ecrivez votre message ici..."></textarea>
													<button type="submit" name="bout">Envoyer</button>
												</form>
											</section>
										</article>
								</div>
							</div>
						</div>
					</div>
				</section>

			<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<div class="row gtr-200">
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
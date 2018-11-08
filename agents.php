<html>
	<head>

		<title>Agents</title>

		<meta name="description" content="" />

		<meta http-equiv="content-type" content="text/html; charset=utf8" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="style/css/agents.css">

		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

		<script src="https://js.stripe.com/v3/"></script>

	</head>
	
	<body>

		<?php include 'header.php'; ?>

		<?php include 'lightbox.php'; ?>

		<main class="clients">
			<div id="head">

				<!-- DASHBOARD -->
				<div class="wrapper wrapper-tab-dashboard">
					<img class="obj-1" src="img/agents/common/Mancover.svg" alt="">
					<div class="container-text">
						<h1>Dashboard</h1>
						<p>
							Manager votre taux d’anomalie, vos colliers, vos bornes, vos clients, nombre de rendez-vous…
						</p>
					</div>
					<img class="obj-2" src="img/agents/common/Womencover.svg" alt="">
				</div>

				<!--CLIENTS-->
				<div class="wrapper wrapper-tab-clients">
					<div class="container-text">
						<h1>Clients</h1>
					</div>
				</div>

				<!--FACTURES-->
				<div class="wrapper wrapper-tab-factures">
					<div class="container-text">
						<h1>Factures</h1>
					</div>
				</div>

				<!--AGENDA-->
				<div class="wrapper wrapper-tab-agenda">
					<div class="container-text">
						<h1>Agenda</h1>
					</div>
				</div>

				<!-- MESSAGERIE -->
				<div class="wrapper wrapper-tab-messagerie">
					<div class="container-text">
						<h1>Messagerie</h1>
					</div>
				</div>

				<!--PROFIL-->
				<div class="wrapper wrapper-tab-profil">
					<div class="container-text">
						<h1>Mon compte</h1>
					</div>
				</div>

			</div>

			<div id="container">
				
				<?php include 'dashboard_agents.php'; ?>

				<div class="wrapper wrapper-tab-product">
					
				</div>
				
				<?php include 'clients_agents.php'; ?>
				
				<div class="wrapper wrapper-tab-agents">
					
				</div>

				<?php include 'factures_agents.php'; ?>

				<?php include 'agenda_agents.php'; ?>
				
				<?php include 'messagerie_agents.php'; ?>

				<?php include 'profil_agents.php'; ?>

				<div class="cta-common">
					<div class="container-text">
						AJOUTER
					</div>
					<div class="container-action">
						<img class="nohover" src="img/agents/common/plus.svg">
						<div class="action">
							<img src="img/agents/common/drone-picto.svg">
							<div class="container-text">
								DRONE
							</div>
						</div>
						<div class="action">
							<img src="img/agents/common/capteur-picto.svg">
							<div class="container-text">
								CAPTEUR
							</div>
						</div>
						<div class="action">
							<img src="img/agents/common/clients-picto.svg">
							<div class="container-text">
								CLIENTS
							</div>
						</div>
						<div class="action">
							<img src="img/agents/common/facture-picto.svg">
							<div class="container-text">
								FACTURES
							</div>
						</div>
						<div class="action">
							<img src="img/agents/common/agenda-picto.svg">
							<div class="container-text">
								AGENDA
							</div>
						</div>
					</div>
				</div>

			</div>

		</main>

		<footer></footer>

		<script type="text/javascript" src="js/index.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPThFHkei-uGXSuE1reZ0Ur9LeRiUwUiQ&callback=initMaps"
    async defer></script>
	</body>
</html>
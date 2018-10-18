<html>
	<head>

		<title>Agents</title>

		<meta name="description" content="" />

		<meta http-equiv="content-type" content="text/html; charset=utf8" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="style/css/agents.css">

		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

	</head>
	
	<body>

		<?php include 'header.php'; ?>

		<main class="dashboard">
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

				<!-- AGENDA -->
				<div class="wrapper wrapper-tab-agenda">
					<div class="container-text">
						<h1>Messagerie</h1>
					</div>
				</div>

			</div>

			<div id="container">
				
				<?php include 'dashboard_agents.php'; ?>

				<div class="wrapper wrapper-tab-product">
					
				</div>
				<div class="wrapper wrapper-tab-client">
					
				</div>
				<div class="wrapper wrapper-tab-factures">
					
				</div>
				<div class="wrapper wrapper-tab-agents">
					
				</div>
				
				<?php include 'agenda_agents.php'; ?>

			</div>

		</main>

		<footer></footer>

		<script type="text/javascript" src="js/index.js"></script>
	</body>
</html>
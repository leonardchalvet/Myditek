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


<script>
function initMaps() {

	//Les trois bouttons coord => changer les coord - DASHBOARD
	let butC1 = new google.maps.Map(document.getElementById('butC1'), {
		center: { lat: 49.4431, lng: 1.0993 },
		zoom: 4,
		disableDefaultUI: true,
		draggable: false
	}); 
	let butC2 = new google.maps.Map(document.getElementById('butC2'), {
		center: { lat: 49.4431, lng: 1.0993 },
		zoom: 4,
		disableDefaultUI: true,
		draggable: false
	}); 
	let butC3 = new google.maps.Map(document.getElementById('butC3'), {
		center: { lat: 49.4431, lng: 1.0993 },
		zoom: 4,
		disableDefaultUI: true,
		draggable: false
	});

	//buttons exploitation - PROFIL EXPLOITATION
	let butE = new google.maps.Map(document.getElementById('butE1'), {
		center: { lat: 49.4431, lng: 1.0993 },
		zoom: 4,
		disableDefaultUI: true,
		draggable: false
	});

	// map dashboard
	let map = new google.maps.Map(document.getElementById('map'), {
		center: { lat: 49.4431, lng: 1.0993 },
		zoom: 10,
		disableDefaultUI: true
	});

	//boucle ici pour les différents marker, ici un exemple sur Rouen
	let icons = [
		{
			url: "img/agents/common/marker-01.svg",
			origin: new google.maps.Point(0, 0),
			anchor: new google.maps.Point(0, 32)
		},
		{
			url: "img/agents/common/marker-02.svg",
			origin: new google.maps.Point(0, 0),
			anchor: new google.maps.Point(0, 32)
		}
	];
	//content test
	contentest = '<div id="content">' +
      				'<div id="siteNotice"></div>' +
      				'<h1 id="firstHeading" class="firstHeading">BARTHELEMY CHALVET' +
      				'<img src="img/header/people.jpg" ></h1>' +
      				'<div id="bodyContent" class="body">' +
      					'<div class="container-info">' +
      						'<div class="type">Type d\'installation</div>' +
      						'<div class="info">' +
      							'<div class="left">Elevage(Bovins)</div>' +
      							'<div class="right">20%<img src="img/agents/common/graph.svg" alt=""></div>' +
      						'</div>' +
      						'<div class="info">' +
      							'<div class="left">Capteurs</div>' +
      							'<div class="right">2</div>' +
      						'</div>' + 
			      		'</div>' +
						'<div class="container-adress">' +
			      			'1451 boulebard magenta, 75010, Paris' +
			      		'</div>' +
					'</div>' +
				  '</div>';

	let features = [
		{
			name: "Rouen",
			position: { lat: 49.4431, lng: 1.0993 },
			content: contentest
		},
		{
			name: "Barentin",
			position: { lat: 49.55, lng: 0.95 },
			content: contentest
		},
		{
			name: "Franqueville-Saint-Pierre",
			position: { lat: 49.401, lng: 1.1807 },
			content: contentest
		}
	];

	let markers = [];
	features.forEach(function(feature) {
		let infoWindow = new google.maps.InfoWindow({
			content: feature.content
		});
		let marker = new google.maps.Marker({
			position: feature.position,
			map: map,
			title: feature.name,
			icon: icons[0],
			infowindow: infoWindow
		});
		marker.addListener('click', function() {
			setTimeout(function(){
				infoWindow.open(map, marker);
				marker.setIcon(icons[1]);
			}, 250);
		});
		markers.push(marker);

		//STYLE INFOWINDOW
		google.maps.event.addListener(infoWindow, 'domready', function() {

			var iwOuter = $('.gm-style-iw');
			var iwBackground = iwOuter.prev();

			iwBackground.children(':nth-child(2)').css({'display' : 'none'});
			iwBackground.children(':nth-child(4)').css({'display' : 'none'});

			iwBackground.children(':nth-child(1)').attr('style', function(i,s){ return s + 'left: 76px !important;'});
			iwBackground.children(':nth-child(3)').attr('style', function(i,s){ return s + 'left: 76px !important;'});
			iwBackground.children(':nth-child(3)').find('div').children().css({'box-shadow': 'rgba(72, 181, 233, 0.6) 0px 1px 6px', 'z-index' : '1'});

			let iwCloseBtn = iwOuter.next();
			iwCloseBtn.css({
			'display':'none'
			});
		});
	});

	closeInfoWindow = function() {
		markers.forEach(function(marker) {
			marker.infowindow.close(map, marker);
			marker.setIcon(icons[0]);
		});
	};
	google.maps.event.addListener(map, 'click', closeInfoWindow);
	markers.forEach(function(marker) {
		google.maps.event.addListener(marker, 'click', closeInfoWindow);
	});

	// ------------------- END PAGE DASHBOARD ------ START PAGE CLIENTS ------------ //

	let size = $('.wrapper-tab-clients .container-clients .client').length;
	for(let i=1;i<=size;i++) {
		let mapClass = $('.wrapper-tab-clients .container-clients .client:nth-child('+i+') .map');
		let map = new google.maps.Map(mapClass[0], {
			center: { lat: 49.4431, lng: 1.0993 },
			zoom: 10,
			disableDefaultUI: true
		}); 

		let icons = [
			{
				url: "img/agents/common/marker-01.svg",
				origin: new google.maps.Point(0, 0),
				anchor: new google.maps.Point(0, 32)
			},
			{
				url: "img/agents/common/marker-02.svg",
				origin: new google.maps.Point(0, 0),
				anchor: new google.maps.Point(0, 32)
			}
		];

		contentest = '<div id="content">' +
	      				'<div id="siteNotice"></div>' +
	      				'<h1 id="firstHeading" class="firstHeading">BARTHELEMY CHALVET' +
	      				'<img src="img/header/people.jpg" ></h1>' +
	      				'<div id="bodyContent" class="body">' +
	      					'<div class="container-info">' +
	      						'<div class="type">Type d\'installation</div>' +
	      						'<div class="info">' +
	      							'<div class="left">Elevage(Bovins)</div>' +
	      							'<div class="right">20%<img src="img/agents/common/graph.svg" alt=""></div>' +
	      						'</div>' +
	      						'<div class="info">' +
	      							'<div class="left">Capteurs</div>' +
	      							'<div class="right">2</div>' +
	      						'</div>' + 
				      		'</div>' +
							'<div class="container-adress">' +
				      			'1451 boulebard magenta, 75010, Paris' +
				      		'</div>' +
						'</div>' +
					  '</div>';

		let features = [
			{
				name: "Rouen",
				position: { lat: 49.4431, lng: 1.0993 },
				content: contentest
			},
			{
				name: "Barentin",
				position: { lat: 49.55, lng: 0.95 },
				content: contentest
			},
			{
				name: "Franqueville-Saint-Pierre",
				position: { lat: 49.401, lng: 1.1807 },
				content: contentest
			}
		];

		let markers = [];
		features.forEach(function(feature) {
			let infoWindow = new google.maps.InfoWindow({
				content: feature.content
			});
			let marker = new google.maps.Marker({
				position: feature.position,
				map: map,
				title: feature.name,
				icon: icons[0],
				infowindow: infoWindow
			});
			marker.addListener('click', function() {
				setTimeout(function(){
					infoWindow.open(map, marker);
					marker.setIcon(icons[1]);
				}, 250);
			});
			markers.push(marker);

			//STYLE INFOWINDOW
			google.maps.event.addListener(infoWindow, 'domready', function() {

				var iwOuter = $('.gm-style-iw');
				var iwBackground = iwOuter.prev();

				iwBackground.children(':nth-child(2)').css({'display' : 'none'});
				iwBackground.children(':nth-child(4)').css({'display' : 'none'});

				iwBackground.children(':nth-child(1)').attr('style', function(i,s){ return s + 'left: 76px !important;'});
				iwBackground.children(':nth-child(3)').attr('style', function(i,s){ return s + 'left: 76px !important;'});
				iwBackground.children(':nth-child(3)').find('div').children().css({'box-shadow': 'rgba(72, 181, 233, 0.6) 0px 1px 6px', 'z-index' : '1'});

				let iwCloseBtn = iwOuter.next();
				iwCloseBtn.css({
				'display':'none'
				});
			});
		});

		closeInfoWindow = function() {
			markers.forEach(function(marker) {
				marker.infowindow.close(map, marker);
				marker.setIcon(icons[0]);
			});
		};
		google.maps.event.addListener(map, 'click', closeInfoWindow);
		markers.forEach(function(marker) {
			google.maps.event.addListener(marker, 'click', closeInfoWindow);
		});
	}

	$('.wrapper-tab-clients .container-clients .client .map').append('<img class="button" src="img/agents/clients/bigger-map.svg">');
}
</script>
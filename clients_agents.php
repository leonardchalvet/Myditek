<div class="wrapper wrapper-tab-clients tuile">
	<div class="message-search">
		<div class="container-text">
			<div class="action">
				<img src="img/agents/clients/tuile-view.svg">
				Tuiles
			</div>
			<div class="action">
				<img src="img/agents/clients/liste-view.svg">
				List
			</div>
		</div>
		<div class="container-action">
			<div class="new-client">
				<img src="img/agents/common/plus.svg">
			</div>
			<form role="search">
				<input value="" type="search" placeholder="Rechercher un client, exploitation…" class="search-input">
				<button type="submit" class="search-button">
					<img src="img/agents/agenda/loupe.svg">
				</button>
			</form>
		</div>
	</div>
	<div class="container-clients">

		<?php 
			for( $i=1; $i < 11 ; $i++ ) { 

				$big = "";
				if($i == 2 || $i == 6) $big = " big";

				echo '<div class="client'.$big.'">'; 
		?>

		
			<div class="container-infos">
				<div class="container-img">
					<img src="img/header/people.jpg">
				</div>
				<div class="row-n-col">
					<div class="container-base">
						<div class="name">
							Barthélémy Chalvet
						</div>
						<div class="row">
							<div class="number">
								1 exploitation
							</div>
							<div class="point"></div>
							<div class="online">
								En ligne il y a 2 jrs
							</div>
						</div>
					</div>
					<div class="container-exploitations">
						<div class="exploitation">
							Elevage (Bovins) <span>20%</span>
							<img src="img/agents/common/graph.svg">
							<img src="img/agents/common/graph-neg.svg">
						</div>
						<div class="point"></div>
						<div class="exploitation">
							Elevage (Bovins) <span>20%</span>
							<img src="img/agents/common/graph.svg">
							<img src="img/agents/common/graph-neg.svg">
						</div>
						<div class="point"></div>
						<div class="exploitation">
							Elevage (Bovins) <span>20%</span>
							<img src="img/agents/common/graph.svg">
							<img src="img/agents/common/graph-neg.svg">
						</div>
					</div>
				</div>
			</div>
			<a class="map"></a>
			<div class="container-action">
				Actions
				<div class="dropdown">
					<div class="action information">
						<img src="img/agents/clients/info-picto.svg">
						Informations
					</div>
					<div class="action modifier">
						<img src="img/agents/clients/edit-picto.svg">
						Modifier
					</div>
					<div class="action supprimer">
						<img src="img/agents/agenda/supprimer.svg">
						Supprimer
					</div>
				</div>
			</div>
		</div>

		<?php } ?>

		<div class="more">Voir plus</div>

	</div>
</div>
<script type="text/javascript">
function initMapsClient() {

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


	let size = $('.wrapper-tab-clients .container-clients .client').length;
	for(let i=1;i<=size;i++) {
		let mapClass = $('.wrapper-tab-clients .container-clients .client:nth-child('+i+') .map');
		let map = new google.maps.Map(mapClass[0], {
			center: { lat: 49.4431, lng: 1.0993 },
			zoom: 10,
			disableDefaultUI: true,
			draggable: false,
			draggableCursor: 'pointer'
		}); 

		let features = [
			{
				name: "Rouen",
				position: { lat: 49.4431, lng: 1.0993 }
			},
			{
				name: "Barentin",
				position: { lat: 49.55, lng: 0.95 }
			},
			{
				name: "Franqueville-Saint-Pierre",
				position: { lat: 49.401, lng: 1.1807 }
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
				icon: icons[0]
			});
			if(false || !!document.documentMode) { marker.setIcon(); }
			markers.push(marker);
		});
	}

	$('.wrapper-tab-clients .container-clients .client .map').append('<img class="button" src="img/agents/clients/bigger-map.svg">');

	/* ---------------- */

	let mapLightbox = $('lightbox .box.infoClient .map');
	let mapL = new google.maps.Map(mapLightbox[0], {
		center: { lat: 49.4431, lng: 1.0993 },
		zoom: 10,
		disableDefaultUI: true
	});

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

	let featuresL = [
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

	let markersL = [];
	featuresL.forEach(function(feature) {
		let infoWindow = new google.maps.InfoWindow({
			content: feature.content
		});
		let marker = new google.maps.Marker({
			position: feature.position,
			map: mapL,
			title: feature.name,
			icon: icons[0],
			infowindow: infoWindow
		});
		if(false || !!document.documentMode) { marker.setIcon(); }
		marker.addListener('click', function() {
			setTimeout(function(){
				infoWindow.open(mapL, marker);
				if( !(false || !!document.documentMode) ) {
					marker.setIcon(icons[1]);
				}
			}, 250);
		});
		markersL.push(marker);

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
		markersL.forEach(function(marker) {
			marker.infowindow.close(mapL, marker);
			if( !(false || !!document.documentMode) ) {
				marker.setIcon(icons[0]);
			}
		});
	};
	google.maps.event.addListener(mapL, 'click', closeInfoWindow);
	markersL.forEach(function(marker) {
		google.maps.event.addListener(marker, 'click', closeInfoWindow);
	});
}
</script>
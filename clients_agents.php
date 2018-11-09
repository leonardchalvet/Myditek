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
				<input type="search" value="" placeholder="Rechercher un client, exploitation…" class="search-input">
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
								En ligne il y a 2jrs
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
			<div class="map"></div>
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

	</div>
</div>
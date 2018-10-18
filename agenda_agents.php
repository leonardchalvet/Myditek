<div class="wrapper wrapper-tab-agenda">
	<div class="message-search">
		<form role="search">
			<input type="search" value="" placeholder="Rechercher un message" class="search-input">
			<button type="submit" class="search-button">
				<img src="img/agents/agenda/loupe.svg">
			</button>
		</form>
	</div>
	<div class="message-interaction">
		<div class="messages-action">
			<div class="message-add">
				<div class="oval">
					<img src="img/agents/agenda/plus.svg">
				</div>
				<div class="container-text">
					Rédiger un message
				</div>
			</div>
			<div class="messages-list">
				<ul>
					<?php for($i=0;$i<10;$i++) { ?>
					<li>
						<div class="logo">
							<img class="nohover" src="img/agents/agenda/iconemessage-black.svg">
							<img class="hover" src="img/agents/agenda/iconemessage-violet.svg">
						</div>
						<div class="container-text">
							<h3>
								Dernier message
							</h3>
							<p>
								Outdoor advertising is a low budget and effective way of advertising a company’s
							</p>
						</div>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
		<div class="message-read">

			<div class="head">
				<div class="container-title">
					Dernier message
				</div>
				<div class="container-infos">
					<div class="info">
						envoyé par  : <span>Martin Dupont</span>
					</div>
					<div class="info">
						Date :  <span>18 juin 2018</span>
					</div>
					<div class="info">
						dernière réponse le  : <span>Pas de réponse</span>
					</div>
				</div>
				<div class="container-action">
					Action
					<div class="dropdown">
						<div>
							<img src="">
							Archiver
						</div>
						<div>
							<img src="">
							Supprimer
						</div>
					</div>
				</div>
			</div>

			<div class="read">

			</div>

			<div class="answer">

			</div>

		</div>
	</div>
</div>
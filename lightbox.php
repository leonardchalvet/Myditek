<lightbox>
	
	<a class="close">
		<img src="img/lightbox/close.svg">
	</a>

	<div class="box delMessage">
		<div class="container-title">
			Supprimer
		</div>
		<div class="container-picto">
			<img src="img/lightbox/iconemessage.svg">
		</div>
		<div class="infos-message">
			<div class="container-name">
				Dernier message 
			</div>
			<div class="container-infos">
				<div class="by">
					Envoyé par  : <span>Martin Dupont</span>
				</div>
				<div class="date">
					Date : <span>18 juin 2018</span>
				</div>
			</div>
		</div>
		<form class="container-form">
			<div class="container-action">
				<button class="cancel">Annuler</button>
				<button class="delete">Supprimer</button>
			</div>
		</form>
	</div>

	<div class="box newMessage">
		<div class="container-title">
			Nouveau
		</div>
		<div class="container-picto">
			<img src="img/lightbox/iconemessage.svg">
		</div>
		<div class="container-title under">
			Message
		</div>
		<form class="container-form">
			<div class="input">
				<label>Titre du message</label>
				<input type="text" name="title">
			</div>
			<div class="input">
				<label>Destinataire</label>
				<select id="monselect">
					<option value="Michel Dumont">Michel Dumont</option> 
					<option value="valeur1">Valeur 1</option> 
					<option value="valeur2" selected>Valeur 2</option>
					<option value="valeur3">Valeur 3</option>
				</select>
			</div>
			<div class="container-action">
				<button class="cancel">Annuler</button>
				<button class="validate">Valider</button>
			</div>
		</form>
	</div>

</lightbox>
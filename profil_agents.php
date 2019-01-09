<div class="wrapper wrapper-tab-profil">
	<div class="container-text">
		Actualisation du profil
	</div>
	<div class="container-profil">
		<div class="container-nav">
			<div class="container-info">
				<div class="name">Barthélémy Chalvet</div>
				<div class="numero">023987F</div>
				<div class="photos">
					<img src="img/header/people.jpg">
					<div class="parcourir">
						<img src="img/agents/profil/photo.svg">
					</div>
				</div>
				<div class="container-action">
					Actions
					<div class="dropdown">
						<div class="action supprimer">
							<img src="img/agents/agenda/supprimer.svg">
							Supprimer
						</div>
					</div>
				</div>
			</div>
			<ul class="menu">
				<li class="active" data-num="1">Mes informations</li>
				<li data-num="2">Mot de passe</li>
				<li data-num="3">Exploitations en charge</li>
			</ul>
		</div>
		<form class="information show">
			<div class="row">
				<div class="col">
					<div class="input">
						<label>Je suis</label>
						<div class="choix">
							<div class="sexe active" data-num="1">
								<img src="img/agents/profil/homme.svg">
								<img src="img/agents/profil/homme-select.svg">
								Un homme
							</div>
							<div class="sexe" data-num="2">
								<img src="img/agents/profil/femme.svg">
								<img src="img/agents/profil/femme-select.svg">
								Une femme
							</div>
							<input class="homme" type="radio" name="sexe" value="homme" checked />
							<input class="femme" type="radio" name="sexe" value="femme" />
						</div>
					</div>
					<div class="input">
						<label>Nom</label>
						<input type="text" name="nameProfil">
						<div class="erreur">Vérifiez votre nom</div>
					</div>
					<div class="input">
						<label>Prénom</label>
						<input type="text" name="prenomProfil">
						<div class="erreur">Vérifiez votre prénom</div>
					</div>
					<div class="input">
						<label>Date de naissance</label>
						<div class="date">
							<input type="text" name="jourProfil" placeholder="JJ">
							&nbsp;/&nbsp;
							<input type="text" name="moisProfil" placeholder="MM">
							&nbsp;/&nbsp;
							<input type="text" name="anneeProfil" placeholder="AAAA">
						</div>
						<div class="erreur">Vérifiez votre date de naissance</div>
					</div>
				</div>
				<div class="col">
					<div class="input">
						<label>Adresse</label>
						<input type="text" name="adresseProfil">
						<div class="erreur">Vérifiez votre adresse</div>
					</div>
					<div class="input">
						<label>Complément</label>
						<input type="text" name="completementProfil">
						<div class="erreur">Vérifiez votre complément d'adresse</div>
					</div>
					<div class="input">
						<label>Code postal</label>
						<input type="text" name="codepostalProfil">
						<div class="erreur">Vérifiez votre code postal</div>
					</div>
					<div class="input neg">
						<label>Mail</label>
						<input type="mail" name="mailProfil">
						<div class="erreur">Vérifiez votre email</div>
					</div>
					<div class="input">
						<label>Téléphone</label>
						<input type="text" name="telProfil">
						<div class="erreur">Vérifiez votre téléphone</div>
					</div>
				</div>
			</div>
			<button class="submit">
				Enregistrer
			</button>
		</form>
		<form class="password">
			<div class="row">
				<div class="col">
					<div class="input">
						<label>Mot de passe actuel</label>
						<input type="password" name="nameProfil">
					</div>
					<div class="input">
						<label>Nouveau mot de passe</label>
						<input type="password" name="prenomProfil">
					</div>
				</div>
				<div class="col">
					<div class="input">
						<label>Confirmer le mot de passe</label>
						<input type="password" name="adresseProfil">
					</div>
					<a class="forgetMdp">
						<img src="img/agents/profil/forget-mdp.svg">
						J'ai oublié mon mot de passe actuel
					</a>
				</div>
			</div>
			<button class="submit">
				Enregistrer
			</button>
		</form>
		<form class="exploitation">
			<div class="el">
				<div class="map" id="butE1"></div>
				<div class="container-text">
					<div class="titre">Exploitation</div>
					<div class="text">Elevage (lorem ...)</div>
				</div>
				<div class="container-action">
					Actions
					<div class="dropdown">
						<div class="action modifier">
							<img src="img/agents/profil/edit.svg">
							Modifier
						</div>
						<div class="action supprimer">
							<img src="img/agents/agenda/supprimer.svg">
							Supprimer
						</div>
					</div>
				</div>
			</div>
			<?php if($agent) { ?>
			<a class="el add">
				<div class="container-img">
					<img src="img/agents/common/plus.svg">
				</div>
				Ajouter une exploitation
			</a>
			<?php } ?>
			<button class="submit">
				Voir plus
			</button>
		</form>
	</div>
</div>
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
				<input type="text" name="titleMessage">
			</div>
			<div class="input">
				<label>Destinataire</label>
				<select id="monselect" name="destinataire">
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

	<div class="box delFacture">
		<div class="container-title">
			Supprimer
		</div>
		<div class="container-picto">
			<img src="img/lightbox/iconefacture.svg">
		</div>
		<div class="infos-message">
			<div class="container-name">
				Nom de la facture
			</div>
			<div class="container-infos">
				<div class="numero">
					<span>N° de facture : 018990978</span>
				</div>
				<div class="by">
					Clients  : <span>Martin Dupont</span>
				</div>
				<div class="date">
					Montant : <span>500 €</span>
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

	<div class="box big addFacture">
		<div class="container-title">
			Ajout
		</div>
		<div class="container-picto">
			<img src="img/lightbox/iconefacture.svg">
		</div>
		<div class="container-title under">
			Facture <span class="change">1</span>/<span class="purple">2</span>
		</div>
		<div class="first show">
			<div class="infos-message">
				<div class="container-name">
					Informations globales
				</div>
			</div>
			<form class="container-form">
				<div class="row">
					<div class="col">
						<div class="input">
							<label>Nom de la facture</label>
							<input type="text" name="nameFacture">
						</div>
						<div class="input">
							<label>Numéro de la facture</label>
							<input type="text" name="numFacture">
						</div>
						<div class="input">
							<label>Client associé</label>
							<select id="monselect" name="clientAssocie">
								<option value="Michel Dumont">Michel Dumont</option> 
								<option value="valeur1">Valeur 1</option> 
								<option value="valeur2">Valeur 2</option>
								<option value="valeur3">Valeur 3</option>
							</select>
						</div>
					</div>
					<div class="col">
						<div class="input">
							<label>Date de création</label>
							<div class="date">
								<input type="text" name="jourCreation">
								&nbsp;/&nbsp;
								<input type="text" name="moisCreation">
								&nbsp;/&nbsp;
								<input type="text" name="anneeCreation">
							</div>
						</div>
						<div class="input">
							<label>Date d'échéance de payement</label>
							<div class="date">
								<input type="text" name="jourPayement">
								&nbsp;/&nbsp;
								<input type="text" name="moisPayement">
								&nbsp;/&nbsp;
								<input type="text" name="anneePayement">
							</div>
						</div>
						<div class="input">
							<label>Montant total TTC</label>
							<input type="text" name="montantTTC">
						</div>
					</div>
				</div>
				<div class="container-action">
					<button class="cancel">Annuler</button>
					<div class="button validate">Suivant</div>
				</div>
			</form>
		</div>
		<div class="last">
			<table>
				<thead>
					<tr>
						<td>Achat</td>
						<td>Nb exemplaires</td>
						<td>Prix unitaire</td>
						<td>Prix TTC</td>
						<td></td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>One of the reasons</td>
						<td>x 4</td>
						<td>20 €</td>
						<td>100 €</td>
						<td><img src="img/agents/agenda/supprimer.svg"></td>
					</tr>
				</tbody>
			</table>
			<div class="line"></div>
			<div class="infos-message">
				<div class="container-name">
					Ajouter une ligne de détail à la facture
				</div>
			</div>
			<form class="container-form last">
				<div class="row">
					<div class="col">
						<div class="input">
							<label>Nom du produit</label>
							<input type="text" name="nameProduit">
						</div>
					</div>
					<div class="col">
						<div class="row">
							<div class="input">
								<label>Nb exemplaires</label>
								<select id="monselect" name="clientAssocie">
									<option value="10">10</option> 
									<option value="20">20</option> 
									<option value="30">30</option>
									<option value="40">40</option>
								</select>
							</div>
							<div class="input">
								<label>Prix unitaire</label>
								<input type="text" name="nbExemplaire">
							</div>
							<div class="input">
								<label>Prix TTC</label>
								<input type="text" name="nbExemplaire">
							</div>
						</div>
					</div>
				</div>
				<div class="container-action">
					<div class="button cancel">Retour</div>
					<button class="validate">Terminer</button>
				</div>
			</form>
		</div>
	</div>

	<div class="box big addExploitation">
		<div class="container-title">
			Ajout
		</div>
		<div class="container-picto">
			<img src="img/header/people.jpg">
		</div>
		<div class="container-title under">
			Exploitation
		</div>
		<form class="container-form">
			<div class="row">
				<div class="col">
					<div class="input">
						<label>Client</label>
						<select name="nameClient">
							<option value="Michel Dumont">Michel Dumont</option> 
							<option value="valeur1">Valeur 1</option> 
							<option value="valeur2">Valeur 2</option>
							<option value="valeur3">Valeur 3</option>
						</select>
					</div>
					<div class="input">
						<label>Nom exploitation</label>
						<input type="text" name="nameExploitation">
					</div>
					<div class="input">
						<label>Type d'exploitation</label>
						<input type="text" name="typeExploitation">
					</div>
					<div class="input">
						<label>Téléphone</label>
						<input type="text" name="telExploitation">
					</div>
				</div>
				<div class="col">
					<div class="input">
						<label>Adresse</label>
						<input type="text" name="adressExploitation">
					</div>
					<div class="input">
						<label>Complément</label>
						<input type="text" name="complementExploitation">
					</div>
					<div class="input">
						<label>Code postal</label>
						<input type="text" name="codepostalExploitation">
					</div>
					<div class="input">
						<label>Email</label>
						<input type="text" name="mailExploitation">
					</div>
				</div>
			</div>
			<div class="container-action">
				<button class="cancel">Annuler</button>
				<button class="button validate">Valider</button>
			</div>
		</form>
	</div>

</lightbox>
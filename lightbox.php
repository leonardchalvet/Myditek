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
				<select name="destinataire">
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
							<select name="clientAssocie">
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
								<input type="text" name="jourCreation" placeholder="JJ">
								&nbsp;/&nbsp;
								<input type="text" name="moisCreation" placeholder="MM">
								&nbsp;/&nbsp;
								<input type="text" name="anneeCreation" placeholder="AAAA">
							</div>
						</div>
						<div class="input">
							<label>Date d'échéance de payement</label>
							<div class="date">
								<input type="text" name="jourPayement" placeholder="JJ">
								&nbsp;/&nbsp;
								<input type="text" name="moisPayement" placeholder="MM">
								&nbsp;/&nbsp;
								<input type="text" name="anneePayement" placeholder="AAAA">
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
								<select name="clientAssocie">
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

	<div class="box payerFacture">
		<div class="container-title">
			Nom de la facture
		</div>
		<ul>
			<li>N°de la facture : 01889887</li>
			<li><span>Echéance : </span>25 juin 2018</li>
		</ul>
		<form class="container-form">
			<div class="input">
				<img src="img/agents/facture/picto-homme.svg">
				<input type="text" name="nameProduit" placeholder="Titulaire de la carte">
			</div>
			<div class="input top" >
				<img src="img/agents/common/creditcard.svg">
				<input type="text" name="nameProduit" placeholder="Numéro de carte">
			</div>
			<div class="row">
				<div class="input left" >
					<img src="img/agents/facture/calendrier.svg">
					<input type="text" name="nameProduit" placeholder="MM / AA">
				</div>
				<div class="input right" >
					<img src="img/agents/facture/cadenas.svg">
					<input type="text" name="nameProduit" placeholder="CVV">
				</div>
			</div>
			<div class="input check">
				<input type="checkbox" name="save">
				<span></span>
				Se souvenir de moi
			</div>
			<div class="container-action">
				<button class="button validate">Payer 500.00€</button>
			</div>
		</form>
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
						<input type="text" name="typeExploitation" value="test" readonly="readonly">
					</div>
					<div class="input">
						<label>Téléphone</label>
						<input type="text" name="telExploitation" value="test" readonly="readonly">
					</div>
				</div>
				<div class="col">
					<div class="input">
						<label>Adresse</label>
						<input type="text" name="adressExploitation" value="test" readonly="readonly">
					</div>
					<div class="input">
						<label>Complément</label>
						<input type="text" name="complementExploitation" value="test" readonly="readonly">
					</div>
					<div class="input">
						<label>Code postal</label>
						<input type="text" name="codepostalExploitation" value="test" readonly="readonly">
					</div>
					<div class="input">
						<label>Email</label>
						<input type="text" name="mailExploitation" value="test" readonly="readonly">
					</div>
				</div>
			</div>
			<div class="container-action">
				<button class="cancel">Annuler</button>
				<button class="button validate">Valider</button>
			</div>
		</form>
	</div>

	<div class="box addEvent">
		<div class="container-title">
			Ajout
		</div>
		<div class="container-picto">
			<img src="img/lightbox/event-picto.svg">
		</div>
		<div class="container-title under">
			Evenement
		</div>
		<form class="container-form">
			<div class="input">
				<label>Nom de l'évènement</label>
				<input type="text" name="titleEvent">
			</div>
			<div class="input">
				<label>Date de l'évènement</label>
				<div class="date">
					<input type="text" name="jourCreation" placeholder="JJ">
					&nbsp;/&nbsp;
					<input type="text" name="moisCreation" placeholder="MM">
					&nbsp;/&nbsp;
					<input type="text" name="anneeCreation" placeholder="AAAA">
				</div>
			</div>
			<div class="time">
				<div class="input">
					<label>heure de début</label>
					<div class="hour">
						<input type="text" name="jourCreation" placeholder="HH">
						&nbsp;:&nbsp;
						<input type="text" name="moisCreation" placeholder="MM">
					</div>
				</div>
				<div class="point"></div>
				<div class="input">
					<label>heure de fin</label>
					<div class="hour">
						<input type="text" name="jourCreation" placeholder="HH">
						&nbsp;:&nbsp;
						<input type="text" name="moisCreation" placeholder="MM">
					</div>
				</div>
			</div>
			<div class="container-action">
				<button class="cancel">Annuler</button>
				<button class="button validate">Valider</button>
			</div>
		</form>
	</div>

	<div class="box delClient">
		<div class="container-title">
			Supprimer
		</div>
		<div class="container-picto">
			<img src="img/header/people.jpg">
		</div>
		<div class="infos-message">
			<div class="container-name">
				Barthélémy Chalvet
			</div>
			<div class="container-infos">
				<div class="numero">
					3 exploitations
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

	<div class="box big modifClient">
		<div class="container-title">
			Modifier
		</div>
		<div class="container-picto">
			<img src="img/header/people.jpg">
		</div>
		<div class="container-title under">
			Barthélémy Chalvet
			<span>3 exploitations</span>
		</div>
		<form class="container-form">
			<div class="row">
				<div class="col">
					<div class="input">
						<label>Nom</label>
						<input type="text" name="nomClient" value="Chalvet">
					</div>
					<div class="input">
						<label>Prénom</label>
						<input type="text" name="prenomClient" value="Barthélémy">
					</div>
					<div class="input">
						<label>Téléphone</label>
						<input type="text" name="telClient" value="0678595978">
					</div>
				</div>
				<div class="col">
					<div class="input">
						<label>Adresse</label>
						<input type="text" name="adressClient" value="13 rue de le nostre">
					</div>
					<div class="input">
						<label>Code postal</label>
						<input type="text" name="codepostalClient" value="76000">
					</div>
					<div class="input">
						<label>Email</label>
						<input type="text" name="mailClient" value="Barthelemy@gmail.com">
					</div>
				</div>
			</div>
			<div class="container-action">
				<button class="cancel">Annuler</button>
				<button class="button validate">Valider</button>
			</div>
		</form>
	</div>

	<div class="box big addClient">
		<div class="container-title">
			Ajout
		</div>
		<div class="container-picto">
			<img src="img/agents/common/client-no-pictures.svg">
			<div class="parcourir">
				<img src="img/agents/profil/photo.svg">
			</div>
		</div>
		<div class="container-title under">
			Client
		</div>
		<form class="container-form">
			<div class="row">
				<div class="col">
					<div class="input">
						<label>Nom du client</label>
						<input type="text" name="nomClient">
					</div>
					<div class="input">
						<label>Prénom du client</label>
						<input type="text" name="prenomClient">
					</div>
					<div class="input">
						<label>Date de naissance</label>
						<div class="date">
							<input type="text" name="jourCreation" placeholder="JJ">
							&nbsp;/&nbsp;
							<input type="text" name="moisCreation" placeholder="MM">
							&nbsp;/&nbsp;
							<input type="text" name="anneeCreation" placeholder="AAAA">
						</div>
					</div>
					<div class="input">
						<label>Nombre d'exploitation</label>
						<select name="nbExploitationClient">
							<option value="1">1</option>
							<option value="2">2</option> 
							<option value="3">3</option> 
							<option value="4" selected>4</option>
							<option value="5">5</option>
						</select>
					</div>
					<div class="input">
						<label>Type d'offre</label>
						<select name="offreClient">
							<option value="Offre capteurs + drones">Offre capteurs + drones</option>
							<option value="Offre capteurs + drones">Offre capteurs + drones</option>
							<option value="Offre capteurs + drones">Offre capteurs + drones</option>
							<option value="Offre capteurs + drones">Offre capteurs + drones</option>
						</select>
					</div>
				</div>
				<div class="col">
					<div class="input">
						<label>Téléphone</label>
						<input type="text" name="telClient">
					</div>
					<div class="input">
						<label>Email</label>
						<input type="text" name="mailClient">
					</div>
					<div class="input">
						<label>Adresse</label>
						<input type="text" name="adressClient">
					</div>
					<div class="input">
						<label>Complément</label>
						<input type="text" name="complementClient">
					</div>
					<div class="input">
						<label>Code postal</label>
						<input type="text" name="codepostalClient">
					</div>
					
				</div>
			</div>
			<div class="container-action">
				<button class="cancel">Annuler</button>
				<button class="button validate">Valider</button>
			</div>
		</form>
	</div>

	<div class="box big infoClient">
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
						<div class="point"></div>
						<div class="capteur">
							5 capteurs installés
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
				<div class="container-perso">
					<div class="perso">
						Adresse : <span>1451 boulebard magenta, 75010 , Paris</span>
					</div>
					<div class="perso">
						Téléphone : <span><a>06 22 76 11 00</a></span>
					</div>
					<div class="perso">
						Offre : <span>Drone + Capteur</span>
					</div>
				</div>
			</div>
		</div>
		<a class="map"></a>
	</div>

	<div class="box delDrone">
		<div class="container-title">
			Supprimer
		</div>
		<div class="container-picto">
			<img src="img/agents/dashboard/drone.svg">
		</div>
		<div class="infos-message">
			<div class="container-name">
				Drones
			</div>
			<div class="container-infos">
				<div class="numero">
					<span>Mise en service : 24 Juin 2018</span>
				</div>
				<div class="by">
					Température : <span class="color">28°</span>
				</div>
				<div class="date">
					Position : <span>Carte</span> 
					<img src="img/agents/produit/arrow-right.svg">
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

	<div class="box addDrone">
		<div class="container-title">
			Ajout
		</div>
		<div class="container-picto">
			<img src="img/agents/dashboard/drone.svg">
		</div>
		<div class="container-title under">
			Drones
		</div>
		<form class="container-form">
			<div class="input">
				<label>Nom de drone</label>
				<input type="text" name="titleDrone">
			</div>
			<div class="input">
				<label>Client associé</label>
				<select name="clientDrone">
					<option value="1">1</option>
					<option value="2">2</option> 
					<option value="3">3</option> 
					<option value="4" selected>4</option>
					<option value="5">5</option>
				</select>
			</div>
			<div class="input">
				<label>Exploitation associée</label>
				<select name="exploitationDrone">
					<option value="1">1</option>
					<option value="2">2</option> 
					<option value="3">3</option> 
					<option value="4" selected>4</option>
					<option value="5">5</option>
				</select>
			</div>
			<div class="input">
				<label>Date mise en service</label>
				<div class="date">
					<input type="text" name="jourCreation" placeholder="JJ">
					&nbsp;/&nbsp;
					<input type="text" name="moisCreation" placeholder="MM">
					&nbsp;/&nbsp;
					<input type="text" name="anneeCreation" placeholder="AAAA">
				</div>
			</div>
			<div class="container-action">
				<button class="cancel">Annuler</button>
				<button class="button validate">Valider</button>
			</div>
		</form>
	</div>

	<div class="box modifDrone">
		<div class="container-title">
			Modifier
		</div>
		<div class="container-picto">
			<img src="img/agents/dashboard/drone.svg">
		</div>
		<div class="infos-message">
			<div class="container-name">
				Drones
			</div>
			<div class="container-infos">
				<div class="numero">
					<span>Mise en service : 24 Juin 2018</span>
				</div>
				<div class="by">
					Température : <span class="color">28°</span>
				</div>
				<div class="date">
					Position : <span>Carte</span> 
					<img src="img/agents/produit/arrow-right.svg">
				</div>
			</div>
		</div>
		<div class="container-title under"></div>
		<form class="container-form">
			<div class="input">
				<label>Renommer</label>
				<input type="text" name="titleDrone">
			</div>
			<div class="container-action">
				<button class="cancel">Annuler</button>
				<button class="delete">Valider</button>
			</div>
		</form>
	</div>

	<div class="box delCapteur">
		<div class="container-title">
			Supprimer
		</div>
		<div class="container-picto">
			<img src="img/agents/produit/moutons.svg">
		</div>
		<div class="infos-message">
			<div class="container-name">
				Capteur
			</div>
			<div class="container-infos">
				<div class="numero">
					<span>Mise en service : 24 Juin 2018</span>
				</div>
				<div class="by">
					Température : <span class="color">28°</span>
				</div>
				<div class="date">
					Position : <span>Carte</span> 
					<img src="img/agents/produit/arrow-right.svg">
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

	<div class="box addCapteur">
		<div class="container-title">
			Ajout
		</div>
		<div class="container-picto">
			<img src="img/agents/produit/moutons.svg">
		</div>
		<div class="container-title under">
			Capteur
		</div>
		<form class="container-form">
			<div class="input">
				<label>Nom de capteur</label>
				<input type="text" name="titleCapteur">
			</div>
			<div class="input">
				<label>Type de capteur</label>
				<select name="typeCapteur">
					<option value="1">1</option>
					<option value="2">2</option> 
					<option value="3">3</option> 
					<option value="4" selected>4</option>
					<option value="5">5</option>
				</select>
			</div>
			<div class="input">
				<label>Client associé</label>
				<select name="clientCapteur">
					<option value="1">1</option>
					<option value="2">2</option> 
					<option value="3">3</option> 
					<option value="4" selected>4</option>
					<option value="5">5</option>
				</select>
			</div>
			<div class="input">
				<label>Date mise en service</label>
				<div class="date">
					<input type="text" name="jourCreation" placeholder="JJ">
					&nbsp;/&nbsp;
					<input type="text" name="moisCreation" placeholder="MM">
					&nbsp;/&nbsp;
					<input type="text" name="anneeCreation" placeholder="AAAA">
				</div>
			</div>
			<div class="container-action">
				<button class="cancel">Annuler</button>
				<button class="button validate">Valider</button>
			</div>
		</form>
	</div>

	<div class="box modifCapteur">
		<div class="container-title">
			Modifier
		</div>
		<div class="container-picto">
			<img src="img/agents/produit/moutons.svg">
		</div>
		<div class="infos-message">
			<div class="container-name">
				Ovins
			</div>
			<div class="container-infos">
				<div class="numero neg">
					<span>Capteur <div class="color">25</div></span>
				</div>
				<div class="numero">
					<span>Mise en service : 24 Juin 2018</span>
				</div>
				<div class="by">
					Température : <span class="color">28°</span>
				</div>
				<div class="date">
					Position : <span>Carte</span> 
					<img src="img/agents/produit/arrow-right.svg">
				</div>
			</div>
		</div>
		<div class="container-title under"></div>
		<form class="container-form">
			<div class="input">
				<label>Renommer le capteur</label>
				<input type="text" name="titleDrone">
			</div>
			<div class="container-action">
				<button class="cancel">Annuler</button>
				<button class="delete">Valider</button>
			</div>
		</form>
	</div>

	<div class="box big infoDrone">
		<div class="container-infos">
			<div class="container-img">
				<img src="img/agents/dashboard/drone.svg">
			</div>
			<div class="row-n-col">
				<div class="container-base">
					<div class="name">
						Drones
					</div>
					<ul class="row neg">
						<li>Drone <span class="color">02</span></li>
						<li class="point"></li>
						<li>Mise en service : 24 Juin 2018</li>
					</ul>
					<ul class="row blue">
						<li>Température <span class="color">28°</span></li>
					</ul>
				</div>
				<ul class="content">
					<li>
						Client :<span>Barthélémy chalvet</span>
					</li>
					<li>
						Exploitation :<span>Ovins en folie</span>
					</li>
					<li>
						Offre :<span>Drone + Capteur</span>
					</li>
				</ul>
			</div>
		</div>
		<div class="map"></div>
		<div class="messages-list">
			<ul>
				<?php for($i=0;$i<4;$i++) { ?>
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
			<a class="button">
				Voir plus
			</a>
		</div>
		<div class="container-action">
			Actions
			<div class="dropdown">
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

	<div class="box big infoCapteur">
		<div class="container-infos">
			<div class="container-img">
				<img src="img/agents/produit/moutons.svg">
			</div>
			<div class="row-n-col">
				<div class="container-base">
					<div class="name">
						Ovins
					</div>
					<ul class="row neg">
						<li>Capteur <span class="color">25</span></li>
						<li class="point"></li>
						<li>Mise en service : 24 Juin 2018</li>
					</ul>
					<ul class="row blue">
						<li>Température <span class="color">28°</span></li>
					</ul>
				</div>
				<ul class="content">
					<li>
						Client :<span>Barthélémy chalvet</span>
					</li>
					<li>
						Exploitation :<span>Ovins en folie</span>
					</li>
					<li>
						Offre :<span>Drone + Capteur</span>
					</li>
				</ul>
			</div>
		</div>
		<div class="map"></div>
		<div class="messages-list">
			<ul>
				<?php for($i=0;$i<4;$i++) { ?>
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
			<a class="button">
				Voir plus
			</a>
		</div>
		<div class="container-action">
			Actions
			<div class="dropdown">
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

	<div class="box big infoAgents">
		<div class="container-infos">
			<div class="container-img">
				<img src="img/header/people.jpg">
			</div>
			<div class="row-n-col">
				<div class="container-base">
					<div class="name">
						Barthélémy Chalvet
					</div>
					<ul class="row">
						<li>3 clients à charge</li>
						<li class="point"></li>
						<li>En ligne : Il y a 2 jrs</li>
						<li class="point"></li>
						<li><a>Tel : 06 22 76 11 00</a></li>
					</ul>
					<ul class="row">
						<li>
							Martin Dupont <span>3 exploitations</span> <img src="img/lightbox/arrow-down.svg">
							<ul class="dropdown">
								<li><div class="point"></div>Sophie Dumont</li>
								<li><div class="point"></div>Marc Lagrange</li>
								<li class="neg"><div class="point"></div>Martin Dupont</li>
							</ul>
						</li>
					</ul>
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

	<div class="box big zoomDashboard">
		<div class="map" id="mapL"></div>
	</div>

</lightbox>
<header class="desktop">

	<a class="logo" href="">
		<img src="img/header/logo.svg">
	</a>

	<div class="nav">
		<div class="container-action active" data-tab="dashboard">
			<img src="img/header/pulse-machine.svg">
			<div class="container-text">
				DASHBOARD
			</div>
		</div>
		<div class="container-action">
			<img src="img/header/product-picto.svg">
			<div class="container-text">
				PRODUITS
			</div>
			<div class="arrow">
				<svg width="8" height="5" xmlns="http://www.w3.org/2000/svg">
					<path d="M3.97 5L0 1.03 1.03 0l2.94 2.941L6.913 0l1.03 1.03z" fill-rule="nonzero"/>
				</svg>
			</div>
			<div class="dropdown">
				<div class="container-illu" data-tab="drones">
					<img src="img/header/drone.svg">
					<div class="container-text">
						DRONES
						<svg width="8" height="5" xmlns="http://www.w3.org/2000/svg">
							<path d="M3.97 5L0 1.03 1.03 0l2.94 2.941L6.913 0l1.03 1.03z" fill-rule="nonzero"/>
						</svg>
					</div>
				</div>
				<div class="line"></div>
				<div class="container-illu" data-tab="capteurs">
					<img src="img/header/capteur.svg">
					<div class="container-text">
						CAPTEUR
						<svg width="8" height="5" xmlns="http://www.w3.org/2000/svg">
						<path d="M3.97 5L0 1.03 1.03 0l2.94 2.941L6.913 0l1.03 1.03z" fill-rule="nonzero"/>
					</svg>
					</div>
				</div>
			</div>
		</div>
		<?php if($agent) { ?>
		<div class="container-action" data-tab="clients">
			<img src="img/header/clients-picto.svg">
			<div class="container-text">
				CLIENTS
			</div>
			<div class="container-number">
				23
			</div>
		</div>
		<?php } ?>
		<div class="container-action" data-tab="factures">
			<img src="img/header/facture-picto.svg">
			<div class="container-text">
				FACTURES
			</div>
		</div>
		<?php if($agent) { ?>
		<div class="container-action" data-tab="agents">
			<img src="img/header/agent-picto.svg">
			<div class="container-text">
				AGENTS
			</div>
		</div>
		<div class="container-action" data-tab="agenda">
			<img src="img/header/agenda-picto.svg">
			<div class="container-text">
				AGENDA
			</div>
		</div>
		<?php } ?>
	</div>

	<div class="profil">
		<div class="notif cta" href="">
			<img src="img/header/notif-picto.svg">
			<div class="exposant">2</div>
			<div class="dropdown">
				<div class="title">RECENT</div>
				<div class="message warning">
					<img class="envelop" src="img/agents/common/message.svg">
					<img class="warning" src="img/agents/common/warning.svg">
					<div class="container-text">
						<div class="text">
							<span>Lorem ipsum dolor sit</span> amet, ipsum dolor  amet lorem ipsum dolor sit amet, ipsum dolor  amet 
						</div>
						<div class="time">
							Il y a 10mn
						</div>
					</div>
				</div>
				<div class="message">
					<img class="envelop" src="img/agents/common/message.svg">
					<img class="warning" src="img/agents/common/warning.svg">
					<div class="container-text">
						<div class="text">
							Lorem ipsum dolor sit amet, ipsum dolor  amet <span>lorem ipsum dolor sit amet, ipsum dolor  amet</span>
						</div>
						<div class="time">
							Il y a 10mn
						</div>
					</div>
				</div>
				<div class="more">Load more</div>
			</div>
		</div>
		<div class="notif cta" data-tab="messagerie" href="">
			<img src="img/header/mail-notif.svg">
			<div class="exposant">2</div>
			<div class="dropdown">
				<div class="title">
					MESSAGERIE
					<div class="container-action">
						<div class="action" data-message="new" >Rédiger</div>
						<div class="point"></div>
						<div class="action" data-message="all" >Voir tout</div>
					</div>
				</div>
				<div class="message active">
					<div class="circle"></div>
					<div class="container-text">
						<div class="text">
							<span>Lorem ipsum dolor sit amet, ipsum dolor  amet lorem ipsum dolor sit amet, ipsum dolor  amet</span> 
						</div>
						<div class="time">
							Il y a 10mn
						</div>
					</div>
				</div>
				<div class="message">
					<div class="circle"></div>
					<div class="container-text">
						<div class="text">
							<span>Lorem ipsum dolor sit amet, ipsum dolor  amet lorem ipsum dolor sit amet, ipsum dolor  amet</span> 
						</div>
						<div class="time">
							Il y a 10mn
						</div>
					</div>
				</div>
				<div class="message active">
					<div class="circle"></div>
					<div class="container-text">
						<div class="text">
							<span>Lorem ipsum dolor sit amet, ipsum dolor  amet lorem ipsum dolor sit amet, ipsum dolor  amet</span> 
						</div>
						<div class="time">
							Il y a 10mn
						</div>
					</div>
				</div>
				<div class="message">
					<div class="circle"></div>
					<div class="container-text">
						<div class="text">
							<span>Lorem ipsum dolor sit amet, ipsum dolor  amet lorem ipsum dolor sit amet, ipsum dolor  amet</span> 
						</div>
						<div class="time">
							Il y a 10mn
						</div>
					</div>
				</div>
				<div class="message">
					<div class="circle"></div>
					<div class="container-text">
						<div class="text">
							<span>Lorem ipsum dolor sit amet, ipsum dolor  amet lorem ipsum dolor sit amet, ipsum dolor  amet</span> 
						</div>
						<div class="time">
							Il y a 10mn
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="point"></div>
		<div class="compte" data-tab="profil">
			<img src="img/header/people.jpg">
			<div class="container-text">COMPTE</div>
		</div>
	</div>
	
</header>

<header class="mobile">

	<a class="logo" href="">
		<img src="img/header/logo.svg">
	</a>

	<div class="profil">
		<div class="notif cta" href="">
			<img src="img/header/notif-picto.svg">
			<div class="exposant">2</div>
			<div class="dropdown">
				<div class="title">RECENT</div>
				<div class="message warning">
					<img class="envelop" src="img/agents/common/message.svg">
					<img class="warning" src="img/agents/common/warning.svg">
					<div class="container-text">
						<div class="text">
							<span>Lorem ipsum dolor sit</span> amet, ipsum dolor  amet lorem ipsum dolor sit amet, ipsum dolor  amet 
						</div>
						<div class="time">
							Il y a 10mn
						</div>
					</div>
				</div>
				<div class="message">
					<img class="envelop" src="img/agents/common/message.svg">
					<img class="warning" src="img/agents/common/warning.svg">
					<div class="container-text">
						<div class="text">
							Lorem ipsum dolor sit amet, ipsum dolor  amet <span>lorem ipsum dolor sit amet, ipsum dolor  amet</span>
						</div>
						<div class="time">
							Il y a 10mn
						</div>
					</div>
				</div>
				<div class="more">Load more</div>
				<div class="more close">Fermer</div>
			</div>
		</div>
		<div class="notif cta" data-tab="messagerie" href="">
			<img src="img/header/mail-notif.svg">
			<div class="exposant">2</div>
			<div class="dropdown">
				<div class="title">
					MESSAGERIE
					<div class="container-action">
						<div class="action" data-message="new" >Rédiger</div>
						<div class="point"></div>
						<div class="action" data-message="all" >Voir tout</div>
					</div>
				</div>
				<div class="message active">
					<div class="circle"></div>
					<div class="container-text">
						<div class="text">
							<span>Lorem ipsum dolor sit amet, ipsum dolor  amet lorem ipsum dolor sit amet, ipsum dolor  amet</span> 
						</div>
						<div class="time">
							Il y a 10mn
						</div>
					</div>
				</div>
				<div class="message">
					<div class="circle"></div>
					<div class="container-text">
						<div class="text">
							<span>Lorem ipsum dolor sit amet, ipsum dolor  amet lorem ipsum dolor sit amet, ipsum dolor  amet</span> 
						</div>
						<div class="time">
							Il y a 10mn
						</div>
					</div>
				</div>
				<div class="message active">
					<div class="circle"></div>
					<div class="container-text">
						<div class="text">
							<span>Lorem ipsum dolor sit amet, ipsum dolor  amet lorem ipsum dolor sit amet, ipsum dolor  amet</span> 
						</div>
						<div class="time">
							Il y a 10mn
						</div>
					</div>
				</div>
				<div class="message">
					<div class="circle"></div>
					<div class="container-text">
						<div class="text">
							<span>Lorem ipsum dolor sit amet, ipsum dolor  amet lorem ipsum dolor sit amet, ipsum dolor  amet</span> 
						</div>
						<div class="time">
							Il y a 10mn
						</div>
					</div>
				</div>
				<div class="message">
					<div class="circle"></div>
					<div class="container-text">
						<div class="text">
							<span>Lorem ipsum dolor sit amet, ipsum dolor  amet lorem ipsum dolor sit amet, ipsum dolor  amet</span> 
						</div>
						<div class="time">
							Il y a 10mn
						</div>
					</div>
				</div>
				<div class="more close">Fermer</div>
			</div>
		</div>
		<div class="compte" data-tab="profil">
			<img src="img/header/people.jpg">
		</div>
	</div>

	<div class="burger">
		<div class="line"></div>
		<div class="line"></div>
	</div>

	<div class="nav">
		<div class="container-action active" data-tab="dashboard">
			<img src="img/header/pulse-machine.svg">
			<div class="container-text">
				DASHBOARD
			</div>
		</div>
		<div class="container-action">
			<img src="img/header/product-picto.svg">
			<div class="container-text">
				PRODUITS
			</div>
			<div class="arrow">
				<svg width="8" height="5" xmlns="http://www.w3.org/2000/svg">
					<path d="M3.97 5L0 1.03 1.03 0l2.94 2.941L6.913 0l1.03 1.03z" fill-rule="nonzero"/>
				</svg>
			</div>
			<div class="dropdown">
				<div class="container-illu" data-tab="drones">
					<img src="img/header/drone.svg">
					<div class="container-text">
						DRONES
						<svg width="8" height="5" xmlns="http://www.w3.org/2000/svg">
							<path d="M3.97 5L0 1.03 1.03 0l2.94 2.941L6.913 0l1.03 1.03z" fill-rule="nonzero"/>
						</svg>
					</div>
				</div>
				<div class="line"></div>
				<div class="container-illu" data-tab="capteurs">
					<img src="img/header/capteur.svg">
					<div class="container-text">
						CAPTEUR
						<svg width="8" height="5" xmlns="http://www.w3.org/2000/svg">
							<path d="M3.97 5L0 1.03 1.03 0l2.94 2.941L6.913 0l1.03 1.03z" fill-rule="nonzero"/>
						</svg>
					</div>
				</div>
			</div>
		</div>
		<?php if($agent) { ?>
		<div class="container-action" data-tab="clients">
			<img src="img/header/clients-picto.svg">
			<div class="container-text">
				CLIENTS
			</div>
			<div class="container-number">
				23
			</div>
		</div>
		<?php } ?>
		<div class="container-action" data-tab="factures">
			<img src="img/header/facture-picto.svg">
			<div class="container-text">
				FACTURES
			</div>
		</div>
		<?php if($agent) { ?>
		<div class="container-action" data-tab="agents">
			<img src="img/header/agent-picto.svg">
			<div class="container-text">
				AGENTS
			</div>
		</div>
		<div class="container-action" data-tab="agenda">
			<img src="img/header/agenda-picto.svg">
			<div class="container-text">
				AGENDA
			</div>
		</div>
		<?php } ?>
	</div>
	
</header>
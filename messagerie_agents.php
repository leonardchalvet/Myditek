<div class="wrapper wrapper-tab-messagerie">
	<div class="message-search">
		<form role="search">
			<input value="" type="search" placeholder="Rechercher un message" class="search-input">
			<button type="submit" class="search-button">
				<img src="img/agents/agenda/loupe.svg">
			</button>
		</form>
	</div>
	<div class="message-interaction">
		<div class="messages-action">
			<div class="message-add">
				<div class="oval">
					<img src="img/agents/common/plus.svg">
				</div>
				<div class="container-text">
					Rédiger un message
				</div>
			</div>
			<div class="messages-list">
				<ul>
					<?php 
					for($i=0;$i<15;$i++) { 
						if($i == 2) { echo('<li class="active">'); } else { echo('<li>'); };
					?>
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
				<div class="container-back">
					Revenir à la liste des messages
				</div>
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
						<div class="action supprimer">
							<img src="img/agents/agenda/supprimer.svg">
							Supprimer
						</div>
					</div>
				</div>
			</div>

			<div class="read">
				<img src="img/header/people.jpg">
				<div class="container-text">
					<div class="name">Martin Dupont </div>
					<div class="date">le 23 juin à 18h16</div>
					<div class="message">
						Outdoor advertising is a low budget and effective way of advertising a company’s product. Among the entire methods billboard advertising is the most sort after method, which has been proven to be the best sales strategy in the recent times. Nearly 5.6 billion dollar was spent on billboard advertising alone, in the year 2006, as analyzed by Outdoor Advertising Association of America. Billboard advertising is the best bet in outdoor advertising and isn’t that costly. And with the amount of exposure the product gets the money is worth it. In the past few years several factors have triggered billboard advertising and cost effectiveness being one of the prime reasons. One of the reasons being if an ad is placed in the local newspaper or a television channel the advertisement gets noticed for only thirty seconds and when the same advertisement is placed on billboard, it gets noticed through out the day, for months. Thousands of people view billboard everyday on their way to jobs or home, it doesn’t get lost in the pages like an advertisement placed in a newspaper or magazine. There is a frequent and continuous delivery of message. No other advertising method can grab the attention of people like billboard advertising. It creates brand awareness and strong name recognition. One of the reasons behind the cost being low is technology. In the early years the billboards were hand-painted due to which the labor cost was high. Now, advertisers design and print their advertisements on a huge poster board or vinyl board by a computer-aided printer, which is very cost effective. Creativity can be
					</div>
				</div>
			</div>

			<div class="answer">
				<form role="answer">
					<textarea value="" placeholder="Tapez votre réponse..." class="anwser-input"></textarea>
					<button type="submit" class="answer-button">Répondre</button>
				</form>
			</div>

		</div>
	</div>
</div>
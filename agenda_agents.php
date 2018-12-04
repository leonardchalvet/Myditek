<div class="wrapper wrapper-tab-agenda">

	<div class="message-search">
		<div class="container-action">
			<div class="new-event">
				<img src="img/agents/common/plus.svg">
			</div>
			<form role="search">
				<input value="" placeholder="Rechercher un evenement" class="search-input">
				<button type="submit" class="search-button">
					<img src="img/agents/agenda/loupe.svg">
				</button>
			</form>
		</div>
	</div>
	<div class="container-agenda">

		<div class="agenda-month">
			<!-- Responsive calendar - START -->
			<div class="responsive-calendar">
				<div class="controls">
					<a class="pull-left" data-go="prev">
						<div class="btn"><i class="icon-chevron icon-chevron-rotate"></i></div>
					</a>
					<h4>
						<span data-head-month></span> <span data-head-year></span>
					</h4>
					<a class="pull-right" data-go="next">
						<div class="btn"><i class="icon-chevron"></i></div>
					</a>
				</div>
				<div class="day-headers">
					<div class="day header">M</div>
					<div class="day header">T</div>
					<div class="day header">W</div>
					<div class="day header">T</div>
					<div class="day header">F</div>
					<div class="day header">S</div>
					<div class="day header">S</div>
				</div>
				<div class="days" data-group="days"></div>
			</div>
		</div>

		<div class="agenda-day">
			<div class="day show default">
				<div class="title"></div>

				<div class="planing">
					<ul class="time">
						<?php  
						for($i=9; $i <= 18; $i++ ) {
							echo '<li data-hour="'.$i.'" >'. ( $i < 10 ? '0'.$i : $i ).'h00</li>';
						}
						?>
					</ul>
				</div>
			</div>

			<!-- Lors de la boucle mettre ce block en default avec la date -->
			<?php  
			for($i=1; $i <= 13; $i++ ) {
				echo '<div class="day none" data-day="'.$i.'" data-month="11" data-year="2018">
						<div class="title">'.$i.' November</div>'
			?>
				<div class="planing">
					<ul class="time">
						<?php  
						for($j=9; $j <= 18; $j++ ) {
							echo '<li data-hour="'.$j.'" >'. ( $j < 10 ? '0'.$j : $j ).'h00</li>';
						}
						?>
					</ul>
				</div>
			</div>
			<?php } ?>


			<div class="day" data-day="14" data-month="11" data-year="2018">
				<div class="title">14 November</div>

				<div class="planing">
					<ul class="time">
						<?php  
						//Donner l'heure de départ de la journée (arrondi, si 9h30 => 9) 
						//Et de la fin de journée (arrondi, si 18h30 => 19) ici
							for($i=9; $i <= 18; $i++ ) {
								echo '<li data-hour="'.$i.'" >'. ( $i < 10 ? '0'.$i : $i ).'h00</li>';
							}
						?>
					</ul>
					<div class="container-line">
						<div class="line" data-hour-start="9" data-hour-end="10" >
							Coutts personal appointement
						</div>
						<div class="line" data-hour-start="11" data-hour-end="13:30" >
							Board of directors meeting
						</div>
						<div class="line" data-hour-start="15" data-hour-end="18" >
							Board of directors meeting
						</div>
					</div>
				</div>
			</div>
			<div class="day" data-day="23" data-month="11" data-year="2018">
				<div class="title">23 November</div>

				<div class="planing">
					<ul class="time">
						<?php  
						//Donner l'heure de départ de la journée (arrondi, si 9h30 => 9) 
						//Et de la fin de journée (arrondi, si 18h30 => 19) ici
							for($i=9; $i <= 18; $i++ ) {
								echo '<li data-hour="'.$i.'" >'. ( $i < 10 ? '0'.$i : $i ).'h00</li>';
							}
						?>
					</ul>
					<div class="container-line">
						<div class="line" data-hour-start="9" data-hour-end="12:30" >
							Coutts personal appointement
						</div>
						<div class="line" data-hour-start="13:45" data-hour-end="14:30" >
							Board of directors meeting
						</div>
						<div class="line" data-hour-start="15" data-hour-end="16:45" >
							Board of directors meeting
						</div>
					</div>
				</div>
			</div>
			<div class="day" data-day="5" data-month="12" data-year="2018">
				<div class="title">5 December</div>

				<div class="planing">
					<ul class="time">
						<?php  
						//Donner l'heure de départ de la journée (arrondi, si 9h30 => 9) 
						//Et de la fin de journée (arrondi, si 18h30 => 19) ici
							for($i=7; $i <= 19; $i++ ) {
								echo '<li data-hour="'.$i.'" >'. ( $i < 10 ? '0'.$i : $i ).'h00</li>';
							}
						?>
					</ul>
					<div class="container-line">
						<div class="line" data-hour-start="7" data-hour-end="10" >
							Coutts personal appointement
						</div>
						<div class="line" data-hour-start="11" data-hour-end="13:30" >
							Board of directors meeting
						</div>
						<div class="line" data-hour-start="15" data-hour-end="18:30" >
							Board of directors meeting
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>
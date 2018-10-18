$(window).on('load', function() {
	/*
	setTimeout(function() {
	}, 1000);
	*/

	$('header .nav .container-action').click(function() {
		$('header .nav .container-action').removeClass('active');
		$(this).addClass('active');

		let data = $(this).attr('data-tab');

		if(data != undefined) {
			console.log(data);	

			$('main').removeClass();

			switch (data) {
				case 'dashboard': $('main').addClass('dashboard'); break;
				case 'agenda': $('main').addClass('agenda'); break;
				default: break;
			}
		}
	});
})
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

			$('main').removeClass();

			switch (data) {
				case 'dashboard': $('main').addClass('dashboard'); break;
				case 'agenda': $('main').addClass('agenda'); break;
				default: break;
			}
		}
	});

	if($('main').hasClass('agenda')) {

		const offsetTopMessageRead = $('.wrapper-tab-agenda .message-interaction .message-read').offset().top;
		const heightMessageRead    = $('.wrapper-tab-agenda .message-interaction .message-read').height();

		$(window).scroll(function(){
			let scrollBottom = $(window).scrollTop() + $(window).height();

		    if ( scrollBottom >= (offsetTopMessageRead + heightMessageRead + 30)  ) {
		    	$('.wrapper-tab-agenda .message-interaction .message-read').addClass('sticky');
		    	let left = $('.wrapper-tab-agenda .message-interaction .messages-action').offset().left + 100;
		    	$('.wrapper-tab-agenda .message-interaction .message-read').css("right", left + 'px');
		    }
		    else {
		    	$('.wrapper-tab-agenda .message-interaction .message-read').removeClass('sticky');
		    }
		})
	}
})
$(window).on('load', function() {
	/*
	setTimeout(function() {
	}, 1000);
	*/

	/* INIT PAGE AGENTS */
	$('header .nav .container-action').click(function() {

		$('header .nav .container-action').removeClass('active');
		$(this).addClass('active');

		let data = $(this).attr('data-tab');

		if(data != undefined) {

			$('main').removeClass();

			switch (data) {
				case 'dashboard': $('main').addClass('dashboard'); break;
				case 'factures': $('main').addClass('factures'); break;
				case 'agenda': $('main').addClass('agenda'); break;
				default: break;
			}
		}
	});
	$('header .profil .cta').click(function() {
		$(this).children('.dropdown').toggleClass('show');
	})
	$('header .profil .notif .dropdown .title .container-action .action').click(function() {
		$('header .nav .container-action').removeClass('active');
		let data = $(this).attr('data-message');

		if(data != undefined) {

			$('main').removeClass();

			switch (data) {
				case 'all': $('main').addClass('messagerie'); break;
				case 'new': $('main').addClass('messagerie');
					        initLightbox('.newMessage'); 
					        break;
				default: break;
			}
		}
	})
	$('header .profil .compte').click(function() {
		$('header .nav .container-action').removeClass('active');
		let data = $(this).attr('data-tab');
		if(data != undefined) {
			$('main').removeClass();
			switch (data) {
				case 'profil': $('main').addClass('profil'); break;
				default: break;
			}
		}
	})

	/* STICKY PAGE AGENTS -> MESSAGERIE */

	let offsetTopMessageRead = undefined;
	let heightMessageRead = undefined;

	$(window).scroll(function(){
		
		if($('main').hasClass('messagerie')) {
			
			if(offsetTopMessageRead == undefined && heightMessageRead == undefined) {
				offsetTopMessageRead = $('.wrapper-tab-messagerie .message-interaction .message-read').offset().top;
				heightMessageRead    = $('.wrapper-tab-messagerie .message-interaction .message-read').height();
			} else if(offsetTopMessageRead != undefined && heightMessageRead != undefined) {

				let scrollBottom = $(window).scrollTop() + $(window).height();

			    if ( scrollBottom >= (offsetTopMessageRead + heightMessageRead + 30)  ) {
			    	$('.wrapper-tab-messagerie .message-interaction .message-read').addClass('sticky');
			    	let left = $('.wrapper-tab-messagerie .message-interaction .messages-action').offset().left + 100;
			    	$('.wrapper-tab-messagerie .message-interaction .message-read').css("right", left + 'px');
			    }
			    else {
			    	$('.wrapper-tab-messagerie .message-interaction .message-read').removeClass('sticky');
			    }
			}
		}
	});

	/* PAGE FACTURES MORE DETAILS */
	$('.wrapper-tab-factures .container-factures .facture .container-vissible .container-infos .infos .btn').click(function() {
		$(this).parent().parent().parent().next().toggleClass('show');
	});
	/* END PAGE FACTURES */

	/* PAGE PROFIL */
	$('.wrapper-tab-profil .container-profil form .row .col .choix .sexe').click(function(){
		$('.wrapper-tab-profil .container-profil form .row .col .choix .sexe').removeClass('active');
		$(this).addClass('active');

		$('.wrapper-tab-profil .container-profil form .row .col .choix input').attr('checked', false);

		let sexeChoice = "";
		switch ($(this).attr('data-num')) {
			case "1": sexeChoice = "homme"; break;
			case "2": sexeChoice = "femme"; break;
		}
		$('.wrapper-tab-profil .container-profil form .row .col .choix .' + sexeChoice).attr('checked', true);
	})

	$('.wrapper-tab-profil .container-profil .container-nav .menu li').click(function() {
		$('.wrapper-tab-profil .container-profil .container-nav .menu li').removeClass('active');
		$(this).addClass('active');

		let blockShow = "";
		switch ($(this).attr('data-num')) {
			case "1": blockShow = "information"; break;
			case "2": blockShow = "password"; break;
			case "3": blockShow = "exploitation"; break;
			default: blockShow = "information"; break;
		}
		$('.wrapper-tab-profil .container-profil form').removeClass('show');
		$('.wrapper-tab-profil .container-profil form.' + blockShow).addClass('show');
	});
	/* END PAGE PROFIL */

	/* LIGHTBOX */
	$('lightbox .close').click(function() {
		$('body').removeClass('lightbox');
		$('lightbox').removeClass('active');
		$('lightbox .box').removeClass('active');
	})

	$('.wrapper-tab-messagerie .message-interaction .message-read .head .container-action .dropdown .supprimer').click(function() {
		initLightbox('.delMessage');
	});

	$('.wrapper-tab-messagerie .message-interaction .messages-action .message-add').click(function() {
		initLightbox('.newMessage');
	});

	$('.wrapper-tab-factures .container-factures .facture .container-vissible .container-infos .container-action .dropdown .supprimer').click(function() {
		initLightbox('.delFacture');
	});

	$('.wrapper-tab-factures .message-search .container-action .new-facture').click(function() {
		initLightbox('.addFacture');
	});
	$('lightbox .addFacture .first form .container-action .validate').click(function() {
		$('lightbox .addFacture .first').removeClass('show');
		$('lightbox .addFacture .last').addClass('show');
		$('lightbox .addFacture .container-title.under .change').html('2');
	});
	$('lightbox .addFacture .last form .container-action .cancel').click(function() {
		$('lightbox .addFacture .last').removeClass('show');
		$('lightbox .addFacture .first').addClass('show');
		$('lightbox .addFacture .container-title.under .change').html('1');
	});

	$('.wrapper-tab-profil .container-profil .exploitation .add').click(function() {
		initLightbox('.addExploitation');
	});

	function initLightbox(el) {
		$('body').addClass('lightbox');
		$('lightbox').addClass('active');
		$('lightbox ' + el).addClass('active');
	}
	/* END LIGHTBOX */
})
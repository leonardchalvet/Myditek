$(window).on('load', function() {

	$('main #section-product .wrapper .container-image .arrow-left').click(function() {
		let now = parseInt($('main #section-product .wrapper .container-image .images img.active').attr('data-active'));
		let next = (now-1) < 1 ? 3 : (now-1);

		$('main #section-product .wrapper .container-image .images img').removeClass('active');
		$('main #section-product .wrapper .container-image .images img:nth-child(' + next + ')').addClass('active');
	
		$('main #section-product .wrapper .container-el .el').removeClass('active');
		$('main #section-product .wrapper .container-el .el:nth-child(' + next + ')').addClass('active');
	});

	$('main #section-product .wrapper .container-image .arrow-right').click(function() {
		let now = parseInt($('main #section-product .wrapper .container-image .images img.active').attr('data-active'));
		let next = (now+1) > 3 ? 1 : (now+1);

		$('main #section-product .wrapper .container-image .images img').removeClass('active');
		$('main #section-product .wrapper .container-image .images img:nth-child(' + next + ')').addClass('active');

		$('main #section-product .wrapper .container-el .el').removeClass('active');
		$('main #section-product .wrapper .container-el .el:nth-child(' + next + ')').addClass('active');
	});

	$('header .nav .container-text').click(function(){
        $('html, body').animate({
            scrollTop: parseInt($('#section-' + $(this).attr('data-ancre')).offset().top) - 75
        }, 600);
    });

    $('main #section-cover .wrapper .container-text button').click(function(){
    	$('html, body').animate({
            scrollTop: parseInt($('#section-contact').offset().top) - 75
        }, 600);
    })


    if (window.matchMedia("(max-width: 800px)").matches) {
    	$('header.mobile .more .burger').click(function(){
    		$(this).parent().parent().parent().toggleClass('active');
    	})

    	$('header.mobile .nav .container-text').click(function(){
			$(this).parent().parent().removeClass('active');
		})
	}

});
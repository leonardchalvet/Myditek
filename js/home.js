$(window).on('load', function() {

	$('body main .product .wrapper .container-image .arrow-left').click(function() {
		let now = parseInt($('body main .product .wrapper .container-image .images img.active').attr('data-active'));
		let next = (now-1) < 1 ? 3 : (now-1);

		$('body main .product .wrapper .container-image .images img').removeClass('active');
		$('body main .product .wrapper .container-image .images img:nth-child(' + next + ')').addClass('active');
	
		$('body main .product .wrapper .container-text .el').removeClass('active');
		$('body main .product .wrapper .container-text .el:nth-child(' + next + ')').addClass('active');
	});

	$('body main .product .wrapper .container-image .arrow-right').click(function() {
		let now = parseInt($('body main .product .wrapper .container-image .images img.active').attr('data-active'));
		let next = (now+1) > 3 ? 1 : (now+1);

		$('body main .product .wrapper .container-image .images img').removeClass('active');
		$('body main .product .wrapper .container-image .images img:nth-child(' + next + ')').addClass('active');

		$('body main .product .wrapper .container-text .el').removeClass('active');
		$('body main .product .wrapper .container-text .el:nth-child(' + next + ')').addClass('active');
	});

	$('body header .nav .container-text').click(function(){
        $('html, body').animate({
            scrollTop: parseInt($('.' + $(this).attr('data-ancre')).offset().top) - 75
        }, 600);
    });

    $('body main .cover .wrapper .container-text button').click(function(){
    	$('html, body').animate({
            scrollTop: parseInt($('.contact').offset().top) - 75
        }, 600);
    })

});
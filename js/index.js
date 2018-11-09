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
				case 'clients': $('main').addClass('clients'); break;
				case 'factures': $('main').addClass('factures'); break;
				case 'agenda': $('main').addClass('agenda'); break;
				default: break;
			}
		}
	});
	$('header .profil .cta img').click(function() {
		let cta = $(this);
		setTimeout(function() {
			cta.parent().children('.dropdown').addClass('show');
		}, 100);
	})
	$('body').click(function() {
		if($('.dropdown').hasClass('show')) {
			$('.dropdown').removeClass('show');
		}
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

	/* PAGE CLIENTS */
	
	$('.wrapper-tab-clients .message-search .container-text .action:first-child').click(function() {
		$('.wrapper-tab-clients').removeClass('list');
		$('.wrapper-tab-clients').addClass('tuile');
	});

	$('.wrapper-tab-clients .message-search .container-text .action:last-child').click(function() {
		$('.wrapper-tab-clients').removeClass('tuile');
		$('.wrapper-tab-clients').addClass('list');
	});

	let sizeClient = $('.wrapper-tab-clients.list .container-clients .client').length;
	$('.wrapper-tab-clients.list .container-clients .client').each(function() {
		$(this).css('z-index', sizeClient);
		sizeClient -= 1;
	});
	/* END PAGE CLIENTS */

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

	/* PAGE AGENDA */

	function fadeOutModalBox(num) {
		setTimeout(function(){ $(".responsive-calendar-modal").fadeOut(); }, num);
	}
	function zero(num) {
		if (num < 10) { return "0" + num; }
		else { return "" + num; }
	}
  
 	function removeModalBox() { $(".responsive-calendar-modal").remove(); }
  
  	$(document).ready(function() {
    	var $cal = $('.responsive-calendar');
    	$cal.responsiveCalendar();
  	});

	(function(){(function(c){var d,b,a;d=function(f,e){var g;this.$element=f;this.options=e;this.weekDays=["sun","mon","tue","wed","thu","fri","sat","sun"];this.time=new Date();this.currentYear=this.time.getFullYear();this.currentMonth=this.time.getMonth();if(this.options.time){g=this.splitDateString(this.options.time);this.currentYear=g.year;this.currentMonth=g.month}this.initialDraw();return null};d.prototype={addLeadingZero:function(e){if(e<10){return"0"+e}else{return""+e}},applyTransition:function(e,f){e.css("transition",f);e.css("-ms-transition","-ms-"+f);e.css("-moz-transition","-moz-"+f);return e.css("-webkit-transition","-webkit-"+f)},applyBackfaceVisibility:function(e){e.css("backface-visibility","hidden");e.css("-ms-backface-visibility","hidden");e.css("-moz-backface-visibility","hidden");return e.css("-webkit-backface-visibility","hidden")},applyTransform:function(f,e){f.css("transform",e);f.css("-ms-transform",e);f.css("-moz-transform",e);return f.css("-webkit-transform",e)},splitDateString:function(g){var e,i,h,f;h=g.split("-");f=parseInt(h[0]);i=parseInt(h[1]-1);e=parseInt(h[2]);return h={year:f,month:i,day:e}},initialDraw:function(){return this.drawDays(this.currentYear,this.currentMonth)},editDays:function(g){var h,f,j,i,e;e=[];for(h in g){j=g[h];this.options.events[h]=g[h];i=this.splitDateString(h);f=this.$element.find('[data-year="'+i.year+'"][data-month="'+(i.month+1)+'"][data-day="'+i.day+'"]').parent(".day");f.removeClass("active");f.find(".badge").remove();f.find("a").removeAttr("href");if(this.currentMonth===i.month||this.options.activateNonCurrentMonths){e.push(this.makeActive(f,j))}else{e.push(void 0)}}return e},clearDays:function(k){var h,g,j,i,f,e;e=[];for(i=0,f=k.length;i<f;i++){h=k[i];delete this.options.events[h];j=this.splitDateString(h);g=this.$element.find('[data-year="'+j.year+'"][data-month="'+(j.month+1)+'"][data-day="'+j.day+'"]').parent(".day");g.removeClass("active");g.find(".badge").remove();e.push(g.find("a").removeAttr("href"))}return e},clearAll:function(){var g,k,h,j,f,e;this.options.events={};k=this.$element.find('[data-group="days"] .day');e=[];for(h=j=0,f=k.length;j<f;h=++j){g=k[h];c(g).removeClass("active");c(g).find(".badge").remove();e.push(c(g).find("a").removeAttr("href"))}return e},setMonth:function(e){var f;f=this.splitDateString(e);return this.currentMonth=this.drawDays(f.year,f.month)},prev:function(){if(this.currentMonth-1<0){this.currentYear=this.currentYear-1;this.currentMonth=11}else{this.currentMonth=this.currentMonth-1}this.drawDays(this.currentYear,this.currentMonth);if(this.options.onMonthChange){this.options.onMonthChange.call(this)}return null},next:function(){if(this.currentMonth+1>11){this.currentYear=this.currentYear+1;this.currentMonth=0}else{this.currentMonth=this.currentMonth+1}this.drawDays(this.currentYear,this.currentMonth);if(this.options.onMonthChange){this.options.onMonthChange.call(this)}return null},curr:function(){this.currentYear=this.time.getFullYear();this.currentMonth=this.time.getMonth();this.drawDays(this.currentYear,this.currentMonth);if(this.options.onMonthChange){this.options.onMonthChange.call(this)}return null},addOthers:function(f,g){var e;if(typeof g==="object"){if(g.number!=null){e=c("<span></span>").html(g.number).addClass("badge");if(g.badgeClass!=null){e.addClass(g.badgeClass)}f.append(e)}if(g.url){f.find("a").attr("href",g.url)}}return f},makeActive:function(f,k){var h,l,g,j,e;if(k){if(k["class"]){h=k["class"].split(" ");for(g=j=0,e=h.length;j<e;g=++j){l=h[g];f.addClass(l)}}else{f.addClass("active")}f=this.addOthers(f,k)}return f},getDaysInMonth:function(e,f){return new Date(e,f+1,0).getDate()},drawDay:function(o,p,j,f,h){var n,k,m,l,e,g;l=c("<div></div>").addClass("day");k=new Date();k.setHours(0,0,0,0);e=new Date(p,j-1,f);if(e.getTime()<k.getTime()){g="past"}else{if(e.getTime()===k.getTime()){g="today"}else{g="future"}}l.addClass(this.weekDays[h%7]);l.addClass(g);m=p+"-"+this.addLeadingZero(j)+"-"+this.addLeadingZero(f);if(f<=0||f>o){n=new Date(p,j-1,f);f=n.getDate();j=n.getMonth()+1;p=n.getFullYear();l.addClass("not-current").addClass(g);if(this.options.activateNonCurrentMonths){m=p+"-"+this.addLeadingZero(j)+"-"+this.addLeadingZero(f)}}l.append(c("<a>"+f+"</a>").attr("data-day",f).attr("data-month",j).attr("data-year",p));if(this.options.monthChangeAnimation){this.applyTransform(l,"rotateY(180deg)");this.applyBackfaceVisibility(l)}l=this.makeActive(l,this.options.events[m]);return this.$element.find('[data-group="days"]').append(l)},drawDays:function(o,u){var p,s,f,j,w,n,r,t,h,x,y,l,q,k,m,e,g,v;q=this;k=new Date(o,u);p=k.getMonth();y=k.getMonth()+1;e=k.getFullYear();k.setDate(1);r=this.options.startFromSunday?k.getDay()+1:k.getDay()||7;h=this.getDaysInMonth(o,u);m=0;if(this.options.monthChangeAnimation){j=this.$element.find('[data-group="days"] .day');for(t=g=0,v=j.length;g<v;t=++g){s=j[t];w=t*0.01;this.applyTransition(c(s),"transform .5s ease "+w+"s");this.applyTransform(c(s),"rotateY(180deg)");this.applyBackfaceVisibility(c(s));m=(w+0.1)*1000}}f=2;if(this.options.allRows){x=42}else{l=Math.ceil((r-(f-1)+h)/7);x=l*7}this.$element.find("[data-head-year]").html(k.getFullYear());this.$element.find("[data-head-month]").html(this.options.translateMonths[k.getMonth()]);n=function(){var z,i;q.$element.find('[data-group="days"]').empty();z=f-r;t=q.options.startFromSunday?0:1;while(z<x-r+f){q.drawDay(h,e,y,z,t);z=z+1;t=t+1}i=function(){var B,A;j=q.$element.find('[data-group="days"] .day');for(t=B=0,A=j.length;B<A;t=++B){s=j[t];q.applyTransition(c(s),"transform .5s ease "+(t*0.01)+"s");q.applyTransform(c(s),"rotateY(0deg)")}if(q.options.onDayClick){q.$element.find('[data-group="days"] .day a').click(function(){return q.options.onDayClick.call(this,q.options.events)})}if(q.options.onDayHover){q.$element.find('[data-group="days"] .day a').hover(function(){return q.options.onDayHover.call(this,q.options.events)})}if(q.options.onActiveDayClick){q.$element.find('[data-group="days"] .day.active a').click(function(){return q.options.onActiveDayClick.call(this,q.options.events)})}if(q.options.onActiveDayHover){return q.$element.find('[data-group="days"] .day.active a').hover(function(){return q.options.onActiveDayHover.call(this,q.options.events)})}};return setTimeout(i,0)};setTimeout(n,m);return p}};c.fn.responsiveCalendar=function(g,i){var h,f,e;f=c.extend({},c.fn.responsiveCalendar.defaults,typeof g==="object"&&g);e={next:"next",prev:"prev",edit:"editDays",clear:"clearDays",clearAll:"clearAll",getYearMonth:"getYearMonth",jump:"jump",curr:"curr"};h=function(k){var j;f=c.metadata?c.extend({},f,k.metadata()):f;k.data("calendar",(j=new d(k,f)));if(f.onInit){f.onInit.call(j)}return k.find("[data-go]").click(function(){if(c(this).data("go")==="prev"){j.prev()}if(c(this).data("go")==="next"){return j.next()}})};return this.each(function(){var k,j;k=c(this);j=k.data("calendar");if(!j){h(k)}else{if(typeof g==="string"){if(e[g]!=null){j[e[g]](i)}else{j.setMonth(g)}}else{if(typeof g==="number"){j.jump(Math.abs(g)+1)}}}return null})};c.fn.responsiveCalendar.defaults={translateMonths:["January","February","March","April","May","June","July","August","September","October","November","December"],events:{},time:void 0,allRows:true,startFromSunday:false,activateNonCurrentMonths:false,monthChangeAnimation:true,onInit:void 0,onDayClick:void 0,onDayHover:void 0,onActiveDayClick:void 0,onActiveDayHover:void 0,onMonthChange:void 0};a=c('[data-spy="responsive-calendar"]');if(a.length){b={};if((a.data("translate-months"))!=null){b.translateMonths=a.data("translate-months").split(",")}if((a.data("time"))!=null){b.time=a.data("time")}if((a.data("all-rows"))!=null){b.allRows=a.data("all-rows")}if((a.data("start-from-sunday"))!=null){b.startFromSunday=a.data("start-from-sunday")}if((a.data("activate-non-current-months"))!=null){b.activateNonCurrentMonths=a.data("activate-non-current-months")}if((a.data("month-change-animation"))!=null){b.monthChangeAnimation=a.data("month-change-animation")}return a.responsiveCalendar(b)}})(jQuery)}).call(this);


	setTimeout(function() {
		initContainerDay();
	}, 500);


	//On affiche les jours avec event
	function initContainerDay() {
		$('.wrapper-tab-agenda .container-agenda .agenda-day .day').each(function() {
			let dayLine = $(this);
			$('.wrapper-tab-agenda .container-agenda .responsive-calendar .day a').each(function() {
				if( dayLine.attr('data-day')   == $(this).attr('data-day')   && 
					dayLine.attr('data-month') == $(this).attr('data-month') &&  
					dayLine.attr('data-year')  == $(this).attr('data-year')     ) {
					$(this).parent().addClass('active');

					if(dayLine.is(':visible')) {
						$(this).parent().addClass('now');
					}
				}
			});
		});

		//Si on clique sur un jour active on affiche
		$('.wrapper-tab-agenda .container-agenda .agenda-month .responsive-calendar .day.active a').click(function() {
			let y = $(this).attr('data-year');
			let m = $(this).attr('data-month');
			let d = $(this).attr('data-day');

			$('.wrapper-tab-agenda .container-agenda .agenda-month .responsive-calendar .day').removeClass('now');
			$('.wrapper-tab-agenda .container-agenda .agenda-day .day').removeClass('show');
			
			let now = $(this);
			setTimeout(function() {
				now.parent().addClass('now');
			}, 100);
			

			$('.wrapper-tab-agenda .container-agenda .agenda-day .day').each(function() {
				if( d == $(this).attr('data-day')   && 
					m == $(this).attr('data-month') &&  
					y == $(this).attr('data-year')     ) {
					
					$(this).addClass('show');			

					$(this).children().children('.container-line').children().each(function() {
						
						let day = $(this); 
						let hs  = day.attr('data-hour-start').split(':')[0];
						let ms  = day.attr('data-hour-start').split(':')[1];
						let he  = day.attr('data-hour-end').split(':')[0];
						let me  = day.attr('data-hour-end').split(':')[1];

						$(this).parent().parent().children('.time').children().each(function() {
							if(hs == $(this).attr('data-hour')) {

								addt = 0;
								addb = 0;

								if(ms != undefined) {
									addt += parseInt(ms);
									addb -= addt;
								}
								if(me != undefined) {	
									addb += parseInt(me);
								}

								day.css( { 'top':( $(this).position().top + 12 + addt) + 'px',
									       'height':( (he - hs) * 50 + (he - hs) * 12 + addb ) + 'px' });
							}	
						});
					});
				}
			});
		});
	}

	//Quand on change de mois on actualise
	$('.wrapper-tab-agenda .container-agenda .agenda-month .controls .icon-chevron').click(function() {
		setTimeout(function() {
			initContainerDay();
		}, 1000);
	});

	/* END PAGE AGENDA */

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

	$('.wrapper-tab-factures .container-factures .facture .container-vissible .container-infos .container-action .dropdown .payer').click(function() {
		initLightbox('.payerFacture');
	})

	$('.wrapper-tab-agenda .message-search .container-action .new-event').click(function() {
		initLightbox('.addEvent');
	})

	function initLightbox(el) {
		$('body').addClass('lightbox');
		$('lightbox').addClass('active');
		$('lightbox ' + el).addClass('active');
	}
	/* END LIGHTBOX */
})
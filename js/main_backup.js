$(function() {

	document.cookie = "device_dimensions=" + screen.width + "x" + screen.height;

	/// --------- V A R I A B L E S  ---------- ///
	var screenW = screen.width;
	var screenH = screen.height;
	var vh = $(window).height();
	var vw = $(window).width();
	var showContent = false;
	var home = 'http://' + window.location.host + '/portfolio/'; /*change this on live */
	var curl = window.location.href;
	var mobilebp = 480;
	if ( curl == home ) {
		var ishome = true;
	}

	$(document).keydown(function(e) {
	    switch(e.which) {
	        case 74: // J
	        toPrevproj();
	        break;

	        case 75: // K
        	scrolltoProj();
       		break;

	        case 76: // L
         	toNextproj();
        	break;

	        case 73: // I
	        scrollup();
	        break;

	        case 72: // H - home
	        	$('.main').velocity('transition.slideLeftBigOut', 400, function() {
					window.location = home;
				});
	        break;

	        case 77: // M - About
	        	slideOutMain()
	        break;

	        case 27: // esc - exit
	        	slideInMain()
	        break;

	        case 83: // S - Style Guide
	        	$('.main').velocity('transition.slideLeftBigOut', 400, function() {
					window.location = home+'styleguide';
				});
	        break;

	        case 84: // T - test
	        	alert ( curl + ' and '+ home)
	        break;

	        default: return; // exit this handler for other keys
	    }
	    e.preventDefault(); // prevent the default action (scroll / move caret)
	});

	// Lazy loading images
	$('.lazy')
		.lazyload({
		effect : "fadeIn",
		skip_invisible : false
	});

	/// --------- F U N C T I O N S  ---------- ///
	function linkto() {
		window.location = newLocation;
	}

	function slidetohash() {
		if(window.location.hash) {
		   var hash = window.location.hash.substring(1);
   
		   $('#'+hash).velocity('scroll', {
				duration: 800,
				delay: 800,
				mobileHA: false
			});
		}
	}
			
	function slideOutMain() {	
		if ( vw > mobilebp) {
			$('.main').velocity({translateX: "-90%"}, 'easeOut', 400);
			$('.project-nav').velocity('transition.slideRightOut', 400);
			$('.main__cover').css({'z-index':'100'}).delay(400).velocity({opacity:0.2});
			$('.content__col').delay(400).velocity('transition.slideDownIn', { stagger: 240 }, 1200);
		} else {
			$('.main').velocity({translateX: "-150%"}, 400);
			$('.content__col').delay(400).velocity('transition.slideDownIn', 800);
		
		}

		$('.global-nav__link').children('i').removeClass('icon-information').addClass('icon-close-empty');	
		showContent = true;
	}

	function slideInMain() {
		if ( vw > mobilebp) {	
			$('.main').velocity({translateX: "0"}, 'easeOut', 400);
			$('.project-nav').velocity('transition.slideRightIn', 200);
			$('.main__cover').velocity({opacity:0}).css({'z-index':'-2'});
			$('.wallpaper__image-holder').css({'position':'fixed'});
		} else {
			$('.main').velocity({translateX: "0"}, 'easeOut', 200);
		}

		$('.global-nav__link').children('i').delay(400).removeClass('icon-close-empty').addClass('icon-information');
		$('.content__col').delay(200).fadeOut(0);
		showContent = false;
	}

	function enterMain() {
		if ( vw > mobilebp ) {
			$('.main--slideIn')
			.velocity('transition.slideLeftBigIn', 800);
		} else {
			$('.main')
			.fadeIn(400);
		}
	}

	function exitMain() {
		if ( vw > mobilebp ) {
			$('.main').velocity('transition.slideLeftBigOut', 400, linkto);
		} else {
			$('.main').velocity('transition.fadeOut', 400, linkto);
		}
	}

	function showItem() {
		if ( vw > mobilebp ) {
			$('.item__img')
			.velocity({opacity:0})
			.velocity('transition.fadeIn', {stagger: 100 });
		} else {
			$('.item__img').velocity('transition.fadeIn');
		}
	}

	var firstProj = 'kokko';
	var lastProj = 'onegoodidea';

	function toNextproj() {
		var newLocation = $('.project-nav__link--next').attr('href');

		if (newLocation != undefined){
			$('.main').velocity('transition.slideLeftBigOut', 400, function() {
				window.location = newLocation;
			});
		} else { 
			$('.main').velocity('transition.slideLeftBigOut', 400, function() {
				window.location = home + firstProj;
			});
		} 
	}

	function toPrevproj() {
		var newLocation = $('.project-nav__link--prev').attr('href');
		if (newLocation != undefined) { 
			$('.main').velocity('transition.slideLeftBigOut', 400, function() {
				window.location = newLocation;
			});
		} else {
			$('.main').velocity('transition.slideLeftBigOut', 400, function() {
				window.location = home + lastProj;
			});
		}
	}

	function scrollup() {
		$('body').velocity('scroll', {
			duration: 400,
			delay: 200
		});
	}

	function scrolltoProj() {
		$('.project').velocity('scroll', {
			duration: 400,
			delay: 200,
			mobileHA: false 
		});
	}
	/// --------- P A S S I V E  ---------- ///
	enterMain();
	showItem();

	// For sticky page navigation
	// $('.main--portfolio')
	// .stickem({
	// 	item: '.project-nav',
	// 	container: '.project',
	// 	stickClass: 'project-nav--sticky'
	// });


	// wallpaper image fade as scroll
	// $(window).scroll(function(){
	//     var scrollVar = $(window).scrollTop();
	//    	var divHeight = 600 /*in pixel */
	//     $('.wallpaper__image').css({'opacity':(divHeight-scrollVar)/divHeight});
	// });


	/// --------- C L I C K I N G ---------- ///

	$('.pageExit, .item__link2').click(function() {
		event.preventDefault();
		newLocation = this.href;

		if (showContent == true) {
			$('.global-nav__link').children('i').removeClass('icon-close-empty').addClass('icon-information');
			$('.main__cover').velocity({opacity:0}).css({'z-index':'0'});
			$('.content__col').delay(400).fadeOut(0);
			$('body').css({'overflow':'auto'});
			showContent = false;
			$('.main').velocity({translateX: "0"}, 'easeOut', 400)
			.delay(600).velocity('transition.slideLeftBigOut', 400, linkto);

		} else if ((newLocation == home ) || (newLocation == '10.0.1.4:8888/portfolio/' )) {			
			$('.project-nav').velocity('transition.slideRightOut', 400);
			$('.main').delay(200).velocity('transition.slideLeftBigOut', 400, linkto);

		} else {
			exitMain();
		}
	});

	// Project Item
	if ( vw > mobilebp ) {
		$('.item__link').hover(
			function() {
				$(this).css({'z-index':'3'}).find('.item__header').velocity('transition.slideUpIn', 400);
				$(this).siblings('.item__img').velocity({scaleY: '1.06', scaleX: '1.06', opacity: 0.8}, 400);
				$(this).parents('.item').css({'background-color':'#444'});
			},
			function() {
				$(this).css({'z-index':'2'}).find('.item__header').velocity("transition.slideDownOut", 200);
				$(this).siblings('.item__img').velocity({scaleY: "1", scaleX: "1", opacity: 1}, 200);
				$(this).parents('.item').css({'background-color':'#fff'});
			}	
		);
	} else {
		$('.item__link')
		.css({'z-index':'3'}).find('.item__header').velocity('transition.fadeIn', 200)
		.siblings('.item__img').velocity({scaleY: '1', scaleX: '1', opacity: 0.8}, 200)
		.parents('.item').css({'background-color':'#444'});
	}

	$('#about').on('click', function () {
	    if (showContent == false) {	
	    	$('.global-nav__link').addClass('button--active');	
	    	slideOutMain();
			return false;

	    } else {
	    	$('.global-nav__link').removeClass('button--active');
	    	slideInMain();
	    	return false;
	    }
	});	

	$('.main__cover').on('click', function() {
		slideInMain();
	});

	$('.scrollto').on('click', function() {
		var href = $(this).attr('href');
		if (href != undefined) {
			href = $(this).attr('href');
		} else {
			href = 'body';
		}

		$(href).velocity('scroll', {
			duration: 800,
			delay: 0,
			mobileHA: false
		});
		return false;
	});


	// $('body').append( "<button id='btn-grid' class='showgrid'>Grid</button>");
	// $('#btn-grid').on('click', function () {
	//     $('body, .main, .project').toggleClass('ts20');
	// });

	// $('.button-projects').on('click', function () {
	//     $('#projGrid').velocity('scroll', 200, 'easeOut');
	// });	
});
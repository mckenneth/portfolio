$(function () {
	var nanobar = new Nanobar({ bg: '#888', id: 'loadbar' });
	var vh = $(window).height();
	var vw = $(window).width();
	var home = 'http://' + window.location.host + '/portfolio/';
	var curl = window.location.href;
	var about = false;
	var myEase = [0.455, 0.030, 0.515, 0.955];
	var projNav = false;

	$('.mck, .projects').parallax();

	/* image res selector */
	$.fn.showImg = function() {
		var screenW = screen.width;
		if (screenW <= 480) {	
			imgres = 'sm/';	
		} else if (screenW <= 768) {
			imgres = 'md/';	
		} else {
			imgres = '';
		}

        return this.each(function() {
            x = $(this).attr('data-original');
        	y = x.replace('assets/', '');
            z = 'assets/'+imgres+y
      		$(this).attr({
      			'data-original': z,
      		});
        });
    }
    $('.showImg').showImg();

	//---------- [ LAZY LOADER ] ----------//
	$('.lazy').lazyload({
		effect	: 'fadeIn',
		event	: 'justloadit',
		skip_invisible : false
	})

	function noScroll() {
	    $('html, body').css({
	        overflow: 'hidden',
	        position: 'relative'
	    })
	}

	function yesScroll() {
	    $('html, body').css({
	        overflow: '',
	        position: 'relative'
	    })
	}

 //    function stickyWaypoint() {
	// 	var sticky = new Waypoint.Sticky({
	// 		element: $('.stick')[0],
	// 		wrapper: '<div class="sticky-wrapper" />'
	// 	})
	// }

	function enterProjNav() {
		$('.project-nav__li').velocity('transition.slideRightIn', { stagger: 100}),
		projNav = true;
	}

	function exitProjNav() {
		$('.project-nav__li').delay(400).velocity('transition.fadeOut', 400)
	}

	function toogleProjNav() {
		if ( projNav == false ) {
			enterProjNav()
		} else {
			exitProjNav()
		}
	}

	function enterMain() {
		$('.main').velocity('transition.fadeIn', 800, function(){
			$('.lazy').trigger('justloadit'),
			$(this).css({'transform':'none'}) /* bug fixed for velocity leaving transform properties */
		})
	}

	$(window).scroll(function(){
		if ( projNav == false ) {
			enterProjNav()
		}
	});

	function goto(x) {
		var href = x;
		event.preventDefault(),	
		exitProjNav(),
		$('.main').velocity('transition.fadeOut', 400, function() {
			$('.window').delay(600).velocity('transition.slideDownOut', 200, function(){
				window.location = href
			})
		})
	}

	function slideOutMain() {
		about = true;
		event.preventDefault(),
		window.history.pushState('object or string', 'Title', 'about'),
		exitProjNav(),
		$('#about').find('.icon-info').removeClass().addClass('icon-close'),
		$('.window').load('inc/about.php').fadeIn(),
		
		setTimeout(function() {
			$('.main').velocity({right:'90%'}, "easeOutElastic")
		
		}, 200), noScroll()
	}

	function slideInMain() {
		about = false;
		event.preventDefault(),
		window.history.pushState('object or string', 'Title', curl ),
		enterProjNav(),
		$('#about').find('.icon-close').removeClass().addClass('icon-info'),

		setTimeout(function() {
			$('.main').velocity({right:"0%"}, myEase, 400).css({'transform':'none'}),
			$('.window').fadeOut(400)
		}, 200), yesScroll()
	}

	function pageloading() {
		if(!loaded) {
			$('.logo').velocity({'opacity':'0.2'}, 400).velocity({'opacity':'0.4'}, 100, pageloading)
		} else {
			$('.logo').velocity({'opacity':'1'}, 200)
		}
	}

	//---------- LOADING PAGE ----------//
	nanobar.go(100);

	$(window).load(function(){
		if(window.location.href.indexOf('about') > -1) {
	       slideOutMain()
	    }

	    setTimeout( function() {
	    	enterMain()
	    }, 400)
	});

	//---------- CALL TO ACTION ----------//
	$('.scrollto').on('click', function(){
		var x = $(this).attr('href');
		event.preventDefault(),
		
		$(x).velocity('scroll', {
			duration: 600,
			delay: 0,
			mobileHA: false,
			offset: 1
		})
	});

	$('.project-nav__link, .brand__link, .item__link').on('click', function(){
		var href = this.href;
		goto(href)
	});

	$('#about').on('click', function(){
		if (!about) {	
			slideOutMain()
		} else {
			slideInMain()
		}
	});

	$('.item__link').on('mouseenter', function(){
		$(this).find('.item__header').velocity({opacity: 1}),
		$(this).siblings('.item__img').velocity({opacity:0.5, scaleX: 1.1, scaleY: 1.1}, 400)
	}).on('mouseleave', function(){
		$(this).find('.item__header').velocity('reverse', 400),
		$(this).siblings('.item__img').velocity('reverse', 400)
	});
});
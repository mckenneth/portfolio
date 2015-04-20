$(function () {
	var nanobar = new Nanobar({ bg: '#888', id: 'loadbar' });
	var vh = $(window).height();
	var vw = $(window).width();
	var home = 'http://' + window.location.host + '/portfolio/';
	var curl = window.location.href;
	var about = false;
	var myEase = [0.455, 0.030, 0.515, 0.955];
	var projNav = false;

	

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

	//---------- [ LAZY LOADER ] ----------//
	$('.lazy').lazyload({
		effect	: 'fadeIn',
		event	: 'justloadit',
		skip_invisible : false
	})

	function noScroll() {
	    $('body').css({
	        overflow: 'hidden'
	    })
	}

	function yesScroll() {
	    $('html, body').css({
	        overflow: '',
	        position: 'relative'
	    })
	}

	function enterProjNav() {
		if ((about) || ($(window).scrollTop() >= vh) || isMobile())  {
			if (isMobile()) {
				$('.project-nav__li').velocity('transition.fadeIn');
			} else {
				$('.project-nav__li').delay(400).velocity('transition.slideUpIn', { stagger: 80})
			}
			projNav = true;
		}
	}

	function exitProjNav() {

		if ((vw <= 768) && (isMobile())) {
			$('.project-nav__li').velocity('transition.fadeOut');
		} else {
			$('.project-nav__li').velocity('transition.slideLeftOut', 400);
		}

		projNav = false;
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
		$('#about').addClass('active');
		event.preventDefault(),
		window.history.pushState('object or string', 'Title', 'about'),
		noScroll();
		
		var vw = $(window).width();
		if (vw < 481) {
			setTimeout(function() {
				$('.main').velocity({right:'100%'})
			}, 0)
		} else {
			setTimeout(function() {
				$('.main').velocity({right:'90%'});
			}, 400)
		}
	}

	function slideInMain() {
		about = false;
		$('#about').removeClass('active');
		event.preventDefault(),
		window.history.pushState('object or string', 'Title', curl ),

		setTimeout(function() {
			$('.main').velocity({right:"0%"}, myEase, 400).css({'transform':'none'}),
			$('.content__col').fadeOut(400)
		}, 200)
	}

	//---------- ON PAGELOAD ----------//

	$('.mck').parallax();
	$('.showImg').showImg();

	/* bouncing arrow down */
	// function arrowdownBounce() {
	// 	$('.arrow--down').delay(6000).velocity('callout.bounce' , arrowdownBounce)	
	// }
	// $('.arrow--down').delay(2000).velocity('callout.bounce', arrowdownBounce)

	/* on window load */
	$(window).load(function(){
		
		if(window.location.href.indexOf('about') > -1) {
	       slideOutMain(),
	       setTimeout( function() {
		    	$('.content__col').delay(800).velocity('transition.slideDownIn', {stagger: 60})
		    }, 400)
	    }

	    setTimeout( function() {
	    	enterMain()
	    }, 400)
	});

	nanobar.go(100);

	if(!isMobile()) {
		

		$.stellar(),
		
		$(window).scroll(function(){

			/* fade wallpaper image when scroll */
			var m = 1 - ($(window).scrollTop() / (vh * 1));
			$('.wallpaper__image-holder').css({'opacity':m});

			/* animate projNav in and out */
			if ($(window).scrollTop() >= vh) {
				if ( projNav == false ) {
					enterProjNav()
				}
			} else {
				if (projNav == true ) {
					$('.project-nav__li').velocity('transition.slideDownOut', 400),
					projNav = false;
				}	
			}
		});

		$('.item__link').on('mouseenter', function(){
			$(this).find('.item__header').velocity({opacity: 1}),
			$(this).siblings('.item__img').velocity({opacity:0.5, scaleX: 1.1, scaleY: 1.1}, 400)
		}).on('mouseleave', function(){
			$(this).find('.item__header').velocity('reverse', 400),
			$(this).siblings('.item__img').velocity('reverse', 400)
		});
	}

	


	//---------- CALL TO ACTION ----------//
	$('.scrollto, .arrow__link').on('click', function(){
		var x = $(this).attr('href');
		event.preventDefault(),
		
		$(x).velocity('scroll', {
			duration: 600,
			delay: 0,
			mobileHA: false,
			offset: 0
		})
	});

	$('.scrollto--projects').on('click', function(){
		event.preventDefault();


		if (vw <= 480) {
			var off = -48;
		} else {
			var off = 1;
		}

		$('#project-grid').velocity('scroll', {
			duration: 600,
			delay: 0,
			mobileHA: false,
			offset: off
		})
	});

	$('.project-nav__link, .brand__link, .item__link').on('click', function(){
		var href = this.href;
		goto(href)
	});

	$('#about, #name').on('click', function(){
		if (!about) {	
			slideOutMain(),
			$('#about').find('.icon-info').removeClass().addClass('icon-close'),
			$('.content__col').delay(800).velocity('transition.slideDownIn', {stagger: 60}),
			exitProjNav()
		} else {
			slideInMain(),
			$('#about').find('.icon-close').removeClass().addClass('icon-info'),
			enterProjNav(),
			yesScroll()
		}
	});

});


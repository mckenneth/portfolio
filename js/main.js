$(function() {

	/// --------- V A R I A B L E S  ---------- ///
	var vh = $(window).height();
	var showContent = false;

	/// --------- F U N C T I O N S  ---------- ///
	function linkto() {
		window.location = newLocation;
	}
			
	function slideOutMain() {
		$('.global-nav__link').children('i').removeClass('icon-information').addClass('icon-close-empty');
		$('.main').velocity({translateX: "-90%"}, 'easeOut', 400)
		.css({'height':vh,'overflow':'hidden'});
		$('.main__cover').css({'z-index':'100'}).delay(400).velocity({opacity:0.2});
		$('.content__col').delay(400).velocity('transition.slideDownIn', { stagger: 240 }, 1200);
		showContent = true;
	}

	function slideInMain() {
		$('.global-nav__link').children('i').removeClass('icon-close-empty').addClass('icon-information');
		$('.main').velocity({translateX: "0"}, 'easeOut', 400);
		$('.main__cover').velocity({opacity:0}).css({'z-index':'0'});
		$('.content__col').delay(400).fadeOut(0);
		$('body').css({'overflow':'auto'});
		showContent = false;
	}

	/// --------- P A S S I V E  ---------- ///

	$('.main').prepend('<div class="main__cover"></div>').delay(100).fadeIn(400);
	
	$('.item__img')
	.velocity({opacity:0})
	.velocity('transition.fadeIn', {stagger: 100 });

	// For sticky page navigation
	$('.main--portfolio').stickem({
		item: '.project-nav',
		container: '.project',
		stickClass: 'project-nav--sticky'
	});

	// Lazy loading images
	$('.lazy').lazyload({
	    effect : "fadeIn",
	    skip_invisible : false
	});

	// wallpaper image fade as scroll
	// $(window).scroll(function(){
	//     var scrollVar = $(window).scrollTop();
	//    	var divHeight = 600 /*in pixel */
	//     $('.wallpaper__image').css({'opacity':(divHeight-scrollVar)/divHeight});
	// });


	/// --------- C L I C K I N G ---------- ///

	$('.pageExit, .item__link').click(function() {
		event.preventDefault();
		newLocation = this.href;

		if (showContent == true) {
			slideInMain()
			$('.main').delay(200).velocity('transition.slideLeftBigOut', 800, linkto);
		} else {
			$('.main').velocity('transition.slideLeftBigOut', 400, linkto);
		}
	});

	// Project Item
	$('.item__link').hover(
		function() {

			$(this).css({'z-index':'3'}).find('.item__header').velocity('transition.slideUpIn', 400);
			$(this).siblings('.item__img').velocity({scaleY: '1.06', scaleX: '1.06', opacity: 0.8}, 200);
			$(this).parents('.item').css({'background-color':'#444'});
		},
		function() {
			$(this).css({'z-index':'2'}).find('.item__header').velocity("transition.slideDownOut", 200);
			$(this).siblings('.item__img').velocity({scaleY: "1", scaleX: "1", opacity: 1}, 200);
			$(this).parents('.item').css({'background-color':'#fff'});
		}	
	);

	// if(window.location.href.indexOf("about") > -1) {
 //      $(this).children('i').removeClass('icon-information').addClass('icon-close-empty');
	//     	slideOutMain();
	//     	$('.main__cover').on('click', function () {
	// 		   slideInMain();
	// 		});
	// 		return false;
 //    }

	$('#about').on('click', function () {
	    if (showContent == false) {		
	   	
	    	slideOutMain();
	    	$('.main__cover').on('click', function () {
			   $('.global-nav__link').children('i').removeClass('icon-close-empty').addClass('icon-information');
			   slideInMain();
			});
			return false;

	    } else {
	    	slideInMain();
	    	return false;
	    }
	});	

	$('#scroll-to-top').on('click', function () {
	    $('body').velocity('scroll', { duration: 600 }, 'ease-out');
	});	

});
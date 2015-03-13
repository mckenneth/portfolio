$(function() {

	$('.main').delay(400).fadeIn(400);
	
	// var vh = $(window).height();
	// $('.intro').css({'height':vh});

	// // viewport height
	// $(window).resize( function(){
	// 	$('.intro').css({'height':vh});
	// }).resize();

	/* Lazy loading images */
	$("img.lazy").lazyload({
	    effect : "fadeIn",
	    // failure_limit : 10,
	    skip_invisible : false
	});

	/* for sticky page navigation */
	$('.main--portfolio').stickem({
		item: '.project-nav',
		container: '.project',
		stickClass: 'project-nav--sticky',
		endStickClass: '',
 	});

	// [ fade new page ]

	// $('.pageExit-cont').click(function() {
	// 	event.preventDefault();
	// 	newLocation = this.href;
	// 	slideInMain();
	// 	$('.main').delay(800).velocity('transition.slideLeftBigOut', 400, linkto);
	// });

	$('.pageExit, .item__link').click(function() {
		event.preventDefault();
		newLocation = this.href;
		$('.main').velocity('transition.slideLeftBigOut', 400, linkto);
	});

	function linkto() {
		window.location = newLocation;
	}

	var toggle = false; // initial state
	function slideOutMain() {	
		$('.main').velocity({translateX: "-90%"}, 'easeOut', 400);
		$('.content__col').delay(400).velocity('transition.slideDownIn', {stagger:40});
		$('body').css({'overflow':'hidden'});
		toggle = true;
  	}

  	function slideInMain() {
  		$('.main').velocity({translateX: "0"}, 'easeOut', 400);
  		$('.content__col').velocity({opacity:0});
  		$('body').css({'overflow':'auto'});
	    toggle = false;
  	}

	$('.item__link').hover(
		function(){
			$(this).find('.item__header').velocity("transition.slideUpIn", 400);
			$(this).siblings('.item__img').velocity({scaleY: "1.06", scaleX: "1.06", opacity: 0.8}, 200);
			$(this).parents('.item .item__link').velocity({opacity:0.5});
		},
		function(){
			$(this).find('.item__header').velocity("transition.slideDownOut", 200);
			$(this).siblings('.item__img').velocity({scaleY: "1", scaleX: "1", opacity:1}, 200);
		}	
	);

	//------{ Toogle Slide }------//
	$('#about').on('click', function () {
	    if (toggle == false) {		
	    	slideOutMain();
	    	return false;
	    } else {
	    	slideInMain();
	    	return false;
	    }
	});

	$(window).scroll(function(i){
	    var scrollVar = $(window).scrollTop();
	   	var divHeight = 600 /*in pixel */
	    $('.wallpaper__image').css({'opacity':(divHeight-scrollVar)/divHeight});
	});


	$('.button-projects').delay(600).velocity('callout.bounce').on('click', function () {
		$("#projGrid").velocity("scroll", { 
		  container: $("body"),
		  duration: 600,
		  easing: 'ease'
		});
	});

	// /* determines the screen before fetching imgres */
	// function imgres() {
	// 	if (screenW <= 320) {
	// 		var imgres = 's';
			
	// 	} else if (screenW <= 768) {
	// 		var imgres = 'm';
		
	// 	} else if (screenW >= 1200) {
	// 		var imgres = 'l';
	// 	}
	// }


	//---------- [ KEY DOWNS ] -----------//
	// $(document).keydown(function(e) {
	//     switch(e.which) {
	//         case 74: // J
	//         toPrevproj();
	//         break;

	//         case 75: // K
 //        	scrolltoProj();
 //       		break;

	//         case 76: // L
         
 //        	break;

	//         case 73: // I
	//         scrollto();
	//         break;

	//         case 72: // H - home
	//         	goto(home);
	//         break;

	//         case 77: // M - About
	//         	if (about == false) {
	//         		slideOutMain();
	//         	} else {
	//         		slideInMain();
	//         	}
	//         break;

	//         case 27: // esc - exit
	//         	slideInMain()
	//         break;

	//         case 83: // S - Style Guide
	//         	goto('styleguide');

	//         break;

	//         case 84: // T - test
	//         	alert ( curl + ' and '+ home)
	//         break;

	//         default: return; // exit this handler for other keys
	//     }
	//     e.preventDefault(); // prevent the default action (scroll / move caret)
	// });

//  	$('body').append( "<button id='btn-grid'>Grid Projects</button>");
//  	$('#btn-grid').on('click', function () {
//     $('body').toggleClass('ts24');
// });

}); // document ready
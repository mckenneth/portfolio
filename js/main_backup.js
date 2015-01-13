$(document).ready(function() {

	/* wow */
	new WOW().init();

	// Must be hidden onload for surprise later
	$('.content, .overlay, .projnav').hide();

	
	// viewport height
	$(window).resize( function(){
		var vh = $(window).height(); 
		$('#intro').css({'height':vh});  
	}).resize();


	// dramatic fading header when scroll
	$(window).scroll(function(i){
	    var scrollVar = $(window).scrollTop();
	   	var divHeight = 800 /*in pixel */
	    $('.wallpaper').css({'opacity':(divHeight-scrollVar)/divHeight});
	    if (scrollVar > 100 ) {
	    	$('.button').css({'opacity':'0'});
	    } else {
	    	$('.button').css({'opacity':'1'});
	    } 
	});

	$('#projects ul li').hover(
		function(){
			var proj = $(this).attr("id");
			$(this).children('a').attr({'href': proj + '.php'});
			$(this).find('h2')
				.css({'background-image':'url(img/logo/' + proj + '.png)'})
				.velocity({translateY: "-4%", opacity:1}, 400);
		},
		function(){
			$(this).find('h2')
				.velocity({translateY: "0", opacity:0}, 200);
		}
	);


	// twerking work button
	function bounceDown() {
		$('.down').delay(3000).velocity("callout.bounce", bounceDown);
	}
	bounceDown();


  	function slideOutMain() {
  		$('#main').velocity({translateX: "-80%"}, 'easeOutExpo', 400);
  		$('.overlay').show().velocity({opacity:0.4});
  		$('body').css({'overflow':'hidden'});
	    toggle = true;
  	}

  	function slideInMain() {
  		$('#main').velocity({translateX: "0"}, 'easeOutExpo', 400);
  		$('.overlay').velocity({opacity:0},200).hide();
  		$('body').css({'overflow':'scroll'});
	    toggle = false;
  	}

	// toggle side
	var toggle = false; // initial state
	$('.about').on('click', function () {
	    if (toggle == false) {		
	    	slideOutMain();
	    	$('.content').velocity("transition.fadeIn");
	    } else {
	    	slideInMain();
	    	$('.content').delay(200).velocity('transition.fadeOut');
	    }
	});

	// toggle side
	var toggle = false; // initial state
	$('.music').on('click', function () {
	    if (toggle == false) {		
	    	slideOutMain();
	    	$('.projnav').velocity("transition.fadeIn");
	    } else {
	    	slideInMain();
	    }
	});

	$('.content .x, #main').on('click', function () {
		slideInMain();
		$('.content').delay(200).velocity('transition.fadeOut');
	});

}); // document ready
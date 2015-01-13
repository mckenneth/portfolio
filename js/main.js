$(document).ready(function() {

	/* wow */
	new WOW().init();

	// Must be hidden onload for surprise later
	$('.content,.project-nav').hide();
	
	// viewport height
	$(window).resize( function(){
		var vh = $(window).height(); 
		$('.intro, .vh').css({'height':vh});  
	}).resize();


	$('.item').hover(
		function(){
			var proj = $(this).attr("id");
			$(this).children('a').attr({'href': proj + '.php'});
			$(this).find('h2').velocity({translateY: "-50%", opacity:1}, "easeOut", 400);
			$(this).find('.item__img').velocity({scaleY: "1.06", scaleX: "1.06"}, 800);
		},

		function(){
			$(this).find('h2').velocity({translateY: "0", opacity:0}, 200);
			$(this).find('.item__img').velocity({scaleY: "1", scaleX: "1"}, 800);
		}	
	);


	// toggle side
	var toggle = false; // initial state
	$('.move').on('click', function () {
	    if (toggle == false) {		
	    	slideOutMain();
	    } else {
	    	slideInMain();
	    }
	});

  	function slideOutMain() {
  		$('.main').velocity({translateX: "-80%"}, 'easeOutExpo', 400);
  		$('.overlay').show().velocity({opacity:0.4});
  		$('body').css({'overflow':'hidden'});
	    toggle = true;
  	}

  	function slideInMain() {
  		$('.main').velocity({translateX: "0"}, 'easeOutExpo', 200);
  		$('.overlay').velocity({opacity:0},200).hide();
  		$('body').css({'overflow':'scroll'});
	    toggle = false;
  	}

  	// dramatic fading header when scroll
	$(window).scroll(function(i){
	    var scrollVar = $(window).scrollTop();
	   	var divHeight = 800 /*in pixel */
	    $('.wallpaper__image').css({'opacity':(divHeight-scrollVar)/divHeight});

	    function navIn() {
	    	$('.project-nav').fadeIn();
	    }

	    function navOut() {
	    	$('.project-nav').fadeOut();
	    }

	    var vh = $(window).height();
	    if (scrollVar > (vh/2) ) {
	    	navIn();
	    } else {
	    	navOut();
	    }
	});



 //  	$('body').append( "<button id='btn-grid'>Grid Projects</button>");
 //  	$('#btn-grid').on('click', function () {
	//     $('body').toggleClass('ts24');
	// });

}); // document ready
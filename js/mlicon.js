/**
 * @name MLicon Interaction Librry
 * @author M'c kenneth Licon
 * @version 1.0.1
 *
 *
 */

    /// --------- V A R I A B L E S  ---------- ///
    var vh = $(window).height();
    var vw = $(window).width();
    var showContent = false;
    var home = 'http://localhost:8888/portfolio/';
    var mobilebp = 480;
    var pathname = window.location.pathname;

function linkto() {
    window.location = newLocation;
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
        $('body').css({'overflow':'auto'}); 
    } else {
        $('.main').velocity({translateX: "0"}, 'easeOut', 200);
    }

    $('.global-nav__link').children('i').delay(400).removeClass('icon-close-empty').addClass('icon-information');
    $('.content__col').delay(200).fadeOut(0);
    showContent = false;
}

function enterMain() {
    if ( vw > mobilebp ) {
        $('.main')
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

function toNextproj() {
    var newLocation = $('.project-nav__link--next').attr('href');
    if (newLocation != undefined) { 
        $('.main').velocity('transition.slideLeftBigOut', 400, function() {
            window.location = newLocation;
        });
    } else {
        alert ('End of the list')
    }
}

function toPrevproj() {
    var newLocation = $('.project-nav__link--prev').attr('href');
    if (newLocation != undefined) { 
        $('.main').velocity('transition.slideLeftBigOut', 400, function() {
            window.location = newLocation;
        });
    } else {
        alert ('End of the list')
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
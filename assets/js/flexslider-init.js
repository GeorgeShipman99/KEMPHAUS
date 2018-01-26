// JavaScript Document

(function($) {
    $(window).load(function() {
        $('#flexslider').flexslider({
	        animation: "slide",
            easing: "swing",
            direction: "horizontal",
            reverse: "false",
            animationLoop: "true",
            slideshow: "true",
        	slideshowSpeed: 7000,
            animationSpeed: 600,
            initDelay: 100,
            randomize: false,
            pauseOnAction: true,
        	pauseOnHover: true,
        	touch: true,
			pausePlay: true,
        	controlNav: true,
            keyboard: true,
            nextText: "&rarr;",
            prevText: "&larr;",
            mousewheel: false
	    });
	
		
    });  
})(jQuery)





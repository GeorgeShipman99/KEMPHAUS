/* NAVIGATION */



$('#menu_icon').click(function() {
  $('.mob-nav').toggleClass("display-menu");
  $('#menu_icon').toggleClass("display-icon");
  $('#menu_icon span').toggleClass("display-bg");
  $('#menu-dropdown').removeClass("reveal-menu");
  $(".dropdown_menu").removeClass("reveal");
 });


$('.mob-nav').click(function() {
  $('.mob-nav').toggleClass("display-menu");
  $('#menu_icon').toggleClass("display-icon");
  $('#menu_icon span').toggleClass("display-bg");
  $('#menu-dropdown').removeClass("reveal-menu");
  $(".dropdown_menu").removeClass("reveal");
 });



if ( $(window).width() > 991) {

$('.dropdown_menu').on({
    mouseenter: function () {
        $(this).css({'display':'block'});
    },
    mouseleave: function () {
        $(this).css({'display':'none'});
    }
});

$('#menu-item-28').on({
    mouseenter: function () {
        $('.dropdown_menu1').show();
    },
    mouseleave: function () {
        $('.dropdown_menu1').hide();
    }
});
  
$('#menu-item-180').on({
    mouseenter: function () {
        $('.dropdown_menu2').show();
    },
    mouseleave: function () {
        $('.dropdown_menu2').hide();
	}
});
  
$('#menu-item-380').on({
    mouseenter: function () {
        $('.dropdown_menu3').show();
    },
    mouseleave: function () {
        $('.dropdown_menu3').hide();
	}
});

$('#menu-item-101').on({
    mouseenter: function () {
        $('.dropdown_menu4').show();
    },
    mouseleave: function () {
        $('.dropdown_menu4').hide();
	}
});

$('#menu-item-272').on({
    mouseenter: function () {
        $('.dropdown_menu5').show();
    },
    mouseleave: function () {
        $('.dropdown_menu5').hide();
	}
});
}
	
else {	
  $('.dropdown_menu').on({
    mouseenter: function(){return false},
    mouseleave: function(){return false},
  });
}


  

/* SPEC IMAGE SIMPLE SLIDE */
	
$('.spc-image-left').click(function() {
  $('.spec-image1').css({'opacity':'0'});
  $('.spec-image2').css({'opacity':'1'});
 });
 

$('.spc-image-right').click(function() {
  $('.spec-image2').css({'opacity':'0'});
  $('.spec-image1').css({'opacity':'1'});
 });



/* PAGE TRANSITIONS */

$('.next_page a').click(function() {
	$('.body-container').css({	"margin-left": "-100%",});
	$('.transition_out').addClass('growth');
	
    var href = $(this).attr('href');
    setTimeout(function() {window.location = href}, 400);
    return false;
    });
	
$('.back_page a').click(function() {
	$('.body-container').css({	"margin-left": "100%",});
	$('.transition_in').addClass('growth');
	
    var href = $(this).attr('href');
    setTimeout(function() {window.location = href}, 400);
    return false;
    });	
		
	
	
/* TABBED CONTENT PRODUCTS */

    $(".tab_content").hide();
    $(".tab_content:first").show();

  /* if in tab mode */
    $("ul.tabs li").click(function() {
		
      $(".tab_content").hide();
      var activeTab = $(this).attr("rel"); 
      $("#"+activeTab).fadeIn();		
		
      $("ul.tabs li").removeClass("active");
      $(this).addClass("active");

	  $(".tab_drawer_heading").removeClass("d_active");
	  $(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");
	  
	  flexsliderStart();
	  
    });
	/* if in drawer mode */
	$(".tab_drawer_heading").click(function() {
      
      $(".tab_content").hide();
      var d_activeTab = $(this).attr("rel"); 
      $("#"+d_activeTab).fadeIn();
	  
	  $(".tab_drawer_heading").removeClass("d_active");
      $(this).addClass("d_active");
	  
	  $("ul.tabs li").removeClass("active");
	  $("ul.tabs li[rel^='"+d_activeTab+"']").addClass("active");
    });
	
	
	/* Extra class "tab_last" 
	   to add border to right side
	   of last tab */
	$('ul.tabs li').last().addClass("tab_last");
	
	
/* LOAD ITEMS ON SCROLL */
	    
$(window).scroll( function(){
    
        /* Check the location of each desired element */
        $('.hideme').each( function(i){
            
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object - 250 ){
                
                $(this).animate({'opacity':'1'},300);
                    
            }
            
        }); 
    
});
    


/* RELOAD PAGE ON RESIZE */
//$(window).bind('resize', function(e)
//{
//  if (window.RT) clearTimeout(window.RT);
//  window.RT = setTimeout(function()
//  {
 //   this.location.reload(false); /* false to get page from cache */
 // }, 100);
//});

 
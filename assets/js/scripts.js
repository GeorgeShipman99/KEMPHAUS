
$("#kitchen-style").change(function(){
    var choice = $(this).val()
   
    if (choice == 'coloured'){
        $('.coloured').addClass('shineon').removeClass('hideaway');
        $('.handleless').addClass('hideaway').removeClass('shineon');
        $('.bright').addClass('hideaway').removeClass('shineon');
        $('.lacquered').addClass('hideaway').removeClass('shineon');
        $('.country').addClass('hideaway').removeClass('shineon');
    } else if (choice == 'handleless'){
        $('.coloured').addClass('hideaway').removeClass('shineon');
        $('.handleless').addClass('shineon').removeClass('hideaway');
        $('.bright').addClass('hideaway').removeClass('shineon');
        $('.lacquered').addClass('hideaway').removeClass('shineon');
        $('.country').addClass('hideaway').removeClass('shineon');
    } else if (choice == 'bright'){
        $('.coloured').addClass('hideaway').removeClass('shineon');
        $('.handleless').addClass('hideaway').removeClass('shineon');
        $('.bright').addClass('shineon').removeClass('hideaway');
        $('.lacquered').addClass('hideaway').removeClass('shineon');
        $('.country').addClass('hideaway').removeClass('shineon');
    } else if (choice == 'lacquered'){
        $('.coloured').addClass('hideaway').removeClass('shineon');
        $('.handleless').addClass('hideaway').removeClass('shineon');
        $('.bright').addClass('hideaway').removeClass('shineon');
        $('.lacquered').addClass('shineon').removeClass('hideaway');
        $('.country').addClass('hideaway').removeClass('shineon');
    } else if (choice == 'bright'){
        $('.coloured').addClass('hideaway').removeClass('shineon');
        $('.handleless').addClass('hideaway').removeClass('shineon');
        $('.bright').addClass('hideaway').removeClass('shineon');
        $('.lacquered').addClass('hideaway').removeClass('shineon');
        $('.country').addClass('shineon').removeClass('hideaway');
    } else{
        $('.coloured').addClass('shineon').removeClass('hideaway');
        $('.handleless').addClass('shineon').removeClass('hideaway');
        $('.bright').addClass('shineon').removeClass('hideaway');
        $('.lacquered').addClass('shineon').removeClass('hideaway');
        $('.country').addClass('shineon').removeClass('hideaway');
    }
});



$('.flexslider').click( function() {
    $('html,body').animate({ scrollTop: $(this).offset().top - ( $(window).height() - $(this).outerHeight(true) ) / 2  }, 200);
});



$(function () {
    $(".loads").slice(0, 9).show();
    $("#loadMore").on('click', function (e) {
        e.preventDefault();
        $(".loads:hidden").slice(0, 5).fadeIn();
        if ($(".loads:hidden").length == 0) {
            $("#load").fadeOut('slow');
        }

        $('html,body').animate({
            scrollTop: $(this).offset().top
        }, 0);
    });
});


$(document).ready(function() {
    var offset=250, // At what pixels show Back to Top Button
    scrollDuration=300; // Duration of scrolling to top
        $(window).scroll(function() {
        if ($(this).scrollTop() > offset) {
                $('.top').fadeIn(500); // Time(in Milliseconds) of appearing of the Button when scrolling down.
                } else {
        $('.top').fadeOut(500); // Time(in Milliseconds) of disappearing of Button when scrolling up.
        }
});

    // Smooth animation when scrolling
$('.top').click(function(event) {
    event.preventDefault();
            $('html, body').animate({
            scrollTop: 0}, scrollDuration);
                })
 });

    // menu icon
$(".mobmenu").click(function(){
    $("nav").toggleClass("appear");
    $(".nav_container ul").toggleClass("appear-nav");
});

$("nav ul li").click(function(){
    $("nav").removeClass("appear");
    $(".nav_container ul").removeClass("appear-nav");
});


    // testimonials slider
$('#testimonials .slide');
    setInterval(function(){
        $('#testimonials .slide').filter(':visible').fadeOut(1500,function(){
            if($(this).next('.slide').size()){
                $(this).next().fadeIn(1500);
            }
            else{
                $('#testimonials .slide').eq(0).fadeIn(1000);
            }
        });
    },15000);
    
    
    jQuery('#prev').click(function() {
        jQuery('#testimonials .slide').filter(':visible').fadeOut(800,function(){
            if(jQuery(this).next('.slide').size()){
                jQuery(this).next().fadeIn(800);
            }
            else{
                jQuery('#testimonials .slide').eq(0).fadeIn(800);
            }
        });
    });

    jQuery('#next').click(function() {
        jQuery('#testimonials .slide').filter(':visible').fadeOut(800,function(){
            if(jQuery(this).next('.slide').size()){
                jQuery(this).next().fadeIn(800);
            }
            else{
                jQuery('#testimonials .slide').eq(0).fadeIn(800);
            }
        });
 });



document.getElementById("scroll").onclick = function () {
        location.href = "http://localhost/KEMPHAUS/about";
};



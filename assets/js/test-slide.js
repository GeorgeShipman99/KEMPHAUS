$(document).ready(function(){
	$('#testimonials .slide');
	setInterval(function(){
		$('#testimonials .slide').filter(':visible').fadeOut(1000,function(){
			if($(this).next('.slide').size()){
				$(this).next().fadeIn(1000);
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
	
		
});


	
	
	
	

	
	
	

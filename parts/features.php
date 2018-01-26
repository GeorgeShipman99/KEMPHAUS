<section class="features">

	<div class="container">
		<h1>Featuring<span>...</span></h1>
	</div>	


     <div class="grid-col-tri">

		<?php if( have_rows('features-repeater-one') ): ?>
   		<?php while ( have_rows('features-repeater-one') ) : the_row(); 

		// vars
		$img1 = get_sub_field('image1');
		$title1 = get_sub_field('title1');
		$cont1 = get_sub_field('content1');
   		?>

				   <div class="project_box <?php the_sub_field('size1'); ?>" style="background-image: url('<?php echo $img1; ?>');"></div>
				   <div class="project_details">
                		<div>
                			<h3><?php echo $title1; ?></h3>
	  						<p><?php echo $cont1; ?></p>
	  					</div>
	  				</div>	

    	<?php endwhile; ?><?php endif; ?>
	</div>




	<div class="grid-col-tri">

		<?php if( have_rows('features-repeater-two') ): ?>
   		<?php while ( have_rows('features-repeater-two') ) : the_row(); 

		// vars
		$img2 = get_sub_field('image2');
		$title2 = get_sub_field('title2');
		$cont2 = get_sub_field('content2');
   		?>

					<div class="project_details project_details_middle">
                		<div>
	  						<h3><?php echo $title2; ?></h3>
	  						<p><?php echo $cont2; ?></p>
	  					</div>	
	  				</div>
				   <div class="project_box <?php the_sub_field('size2'); ?>" style="background-image: url(<?php echo $img2; ?>);"></div>
				   <div class="project_details project_details mob_only">
                		<div>
	  						<h3><?php echo $title2; ?></h3>
	  						<p><?php echo $cont2; ?></p>
	  					</div>	
	  				</div>
                	
                		
            		

    	<?php endwhile; ?><?php endif; ?>
	</div>


	 <div class="grid-col-tri">

		<?php if( have_rows('features-repeater-three') ): ?>
   		<?php while ( have_rows('features-repeater-three') ) : the_row(); 

		// vars
		$img3 = get_sub_field('image3');
		$title3 = get_sub_field('title3');
		$cont3 = get_sub_field('content3');
   		?>

				   <div class="project_box <?php the_sub_field('size3'); ?>" style="background-image: url(<?php echo $img3; ?>);"></div>
                	<div class="project_details">
                		<div>
	  						<h3><?php echo $title3; ?></h3>
	  						<p><?php echo $cont3; ?></p>
	  					</div>
	  				</div>
                		
            		

    	<?php endwhile; ?><?php endif; ?>
	</div>



	<div class="divider"></div>

</section>	  
<section class="explore">

	<div class="container">
		<h1>Your kitchen.<br/><span>Your design</span></h1>
	</div>	


     <div class="grid-col-tri">

		<?php if( have_rows('gallery-repeater-one') ): ?>
   		<?php while ( have_rows('gallery-repeater-one') ) : the_row(); 

		// vars
		$img1 = get_sub_field('image1');
		$family1 = get_sub_field('family1');
		$cont1 = get_sub_field('content1');
		$link1 = get_sub_field('link1');
   		?>

			<?php if( $link1 ): ?><a href="<?php echo $link1; ?>"><?php endif; ?>

				   <div class="project_box <?php the_sub_field('size1'); ?>" style="background-image: url('<?php echo $img1; ?>');">
                		<div class="project_details">
                			<div>
                				<h3><?php echo $family1; ?></h3>
	  							<p><?php echo $cont1; ?></p>
	  						</div>
	  					</div>	
            		</div>
            <?php if( $link1 ): ?>		
				</a>
			<?php endif; ?>


    	<?php endwhile; ?><?php endif; ?>
	</div>




	<div class="grid-col-tri">

		<?php if( have_rows('gallery-repeater-two') ): ?>
   		<?php while ( have_rows('gallery-repeater-two') ) : the_row(); 

		// vars
		$img2 = get_sub_field('image2');
		$family2 = get_sub_field('family2');
		$cont2 = get_sub_field('content2');
		$link2 = get_sub_field('link2');
   		?>

			<?php if( $link2 ): ?><a href="<?php echo $link2; ?>"><?php endif; ?>

				   <div class="project_box <?php the_sub_field('size2'); ?>" style="background-image: url(<?php echo $img2; ?>);">
                		<div class="project_details">
                			<div>
	  							<h3><?php echo $family2; ?></h3>
	  							<p><?php echo $cont2; ?></p>
	  						</div>	
	  					</div>
                		
            		</div>
            <?php if( $link2 ): ?>		
				</a>
			<?php endif; ?>


    	<?php endwhile; ?><?php endif; ?>
	</div>


	 <div class="grid-col-tri">

		<?php if( have_rows('gallery-repeater-three') ): ?>
   		<?php while ( have_rows('gallery-repeater-three') ) : the_row(); 

		// vars
		$img3 = get_sub_field('image3');
		$family3 = get_sub_field('family3');
		$cont3 = get_sub_field('content3');
		$link3 = get_sub_field('link3');
   		?>

			<?php if( $link3 ): ?><a href="<?php echo $link3; ?>"><?php endif; ?>

				   <div class="project_box <?php the_sub_field('size3'); ?>" style="background-image: url(<?php echo $img3; ?>);">
                		<div class="project_details">
                			<div>
	  							<h3><?php echo $family3; ?></h3>
	  							<p><?php echo $cont3; ?></p>
	  						</div>
	  					</div>
                		
            		</div>
            <?php if( $link3 ): ?>		
				</a>
			<?php endif; ?>


    	<?php endwhile; ?><?php endif; ?>
	</div>



	<div class="divider"></div>
	<a class="center-link" href="<?php the_field('kitchens_link','options');?>"><h4>view all kitchens</h4></a>


</section>	  
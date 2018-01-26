<section class="kitchens" id="360">

	<div class="container">
		<h1>Find your kitchen</span></h1>
	</div>	


     <div class="grid-col-quint">

		<?php if( have_rows('gallery-repeater-one') ): ?>
   		<?php while ( have_rows('gallery-repeater-one') ) : the_row(); 

		// vars
		$img1 = get_sub_field('image1');
		$family1 = get_sub_field('family1');
		$cont1 = get_sub_field('content1');
		$link1 = get_sub_field('link1');
   		?>

			<?php if( $link1 ): ?><a href="<?php echo $link; ?>"><?php endif; ?>

				   <div class="project_box loads <?php the_sub_field('size1'); ?>" style="background-image: url('<?php echo $img1; ?>');">
                		<div class="project_details">
	  						<h3><?php echo $family1; ?></h3>
	  						<p><?php echo $cont1; ?></p>
	  					</div>
                		
            		</div>
            <?php if( $link1 ): ?>		
				</a>
			<?php endif; ?>


    	<?php endwhile; ?><?php endif; ?>
	</div>




	<div class="grid-col-quint">

		<?php if( have_rows('gallery-repeater-two') ): ?>
   		<?php while ( have_rows('gallery-repeater-two') ) : the_row(); 

		// vars
		$img2 = get_sub_field('image2');
		$family2 = get_sub_field('family2');
		$cont2 = get_sub_field('content2');
		$link2 = get_sub_field('link2');
   		?>

			<?php if( $link2 ): ?><a href="<?php echo $link2; ?>"><?php endif; ?>

				   <div class="project_box loadss <?php the_sub_field('size2'); ?>" style="background-image: url(<?php echo $img2; ?>);">
                		<div class="project_details">
	  						<h3><?php echo $family2; ?></h3>
	  						<p><?php echo $cont2; ?></p>
	  					</div>
                		
            		</div>
            <?php if( $link2 ): ?>		
				</a>
			<?php endif; ?>


    	<?php endwhile; ?><?php endif; ?>
	</div>


	 <div class="grid-col-quint">

		<?php if( have_rows('gallery-repeater-three') ): ?>
   		<?php while ( have_rows('gallery-repeater-three') ) : the_row(); 

		// vars
		$img3 = get_sub_field('image3');
		$family3 = get_sub_field('family3');
		$cont3 = get_sub_field('content3');
		$link3 = get_sub_field('link3');
   		?>

			<?php if( $link3 ): ?><a href="<?php echo $link3; ?>"><?php endif; ?>

				   <div class="project_box loadsss <?php the_sub_field('size3'); ?>" style="background-image: url(<?php echo $img3; ?>);">
                		<div class="project_details">
	  						<h3><?php echo $family3; ?></h3>
	  						<p><?php echo $cont3; ?></p>
	  					</div>
                		
            		</div>
            <?php if( $link3 ): ?>		
				</a>
			<?php endif; ?>


    	<?php endwhile; ?><?php endif; ?>
	</div>


		 <div class="grid-col-quint">

		<?php if( have_rows('gallery-repeater-four') ): ?>
   		<?php while ( have_rows('gallery-repeater-four') ) : the_row(); 

		// vars
		$img4 = get_sub_field('image4');
		$family4 = get_sub_field('family4');
		$cont4 = get_sub_field('content4');
		$link4 = get_sub_field('link4');
   		?>

			<?php if( $link3 ): ?><a href="<?php echo $link4; ?>"><?php endif; ?>

				   <div class="project_box loadssss <?php the_sub_field('size4'); ?>" style="background-image: url(<?php echo $img3; ?>);">
                		<div class="project_details">
	  						<h3><?php echo $family4; ?></h3>
	  						<p><?php echo $cont4; ?></p>
	  					</div>
                		
            		</div>
            <?php if( $link4 ): ?>		
				</a>
			<?php endif; ?>


    	<?php endwhile; ?><?php endif; ?>
	</div>


	<div class="grid-col-quint">

		<?php if( have_rows('gallery-repeater-five') ): ?>
   		<?php while ( have_rows('gallery-repeater-five') ) : the_row(); 

		// vars
		$img5 = get_sub_field('image5');
		$family5 = get_sub_field('family5');
		$cont5 = get_sub_field('content5');
		$link5 = get_sub_field('link5');
   		?>

			<?php if( $link5 ): ?><a href="<?php echo $link5; ?>"><?php endif; ?>

				   <div class="project_box loadsssss <?php the_sub_field('size5'); ?>" style="background-image: url(<?php echo $img5; ?>);">
                		<div class="project_details">
	  						<h3><?php echo $family5; ?></h3>
	  						<p><?php echo $cont5; ?></p>
	  					</div>
                		
            		</div>
            <?php if( $link5 ): ?>		
				</a>
			<?php endif; ?>


    	<?php endwhile; ?><?php endif; ?>
	</div>




			<div class="divider"></div>
			<div id="loadMore" class="loadMore">LOAD MORE</div>


</section>	  
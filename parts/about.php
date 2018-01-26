<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="about" id="about">	
	  <div class="row">
	  	<div class="col-sm-12">

	  		<h2><?php the_title(); ?></h2>
	  		<div class="about_cont">

	  				<?php the_content(); ?>
	  			 
			</div>	
	  	</div>  		  	
	  </div>
</section>
<?php endwhile; endif;?>
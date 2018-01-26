<section class="kitchen">

	<div class="container">
		<h1><?php the_title();?> <span><?php the_field('sub-heading'); ?></span></h1>
	</div>		

	<?php $images = get_field('image-slide');
	if( $images ): ?>
    				
  	<div class="slider-anime">
  		<div class="flexslider" id="flexslider">
        	<ul class="slides">
            		<?php foreach( $images as $image ): ?>
               				 <li style="background: url('<?php echo $image['url'] ?>')">
               				 	<div class="container">
               				 	<p><?php echo $image['caption'] ?></p>
               					</div> 
               				 </li>
            		<?php endforeach; ?>
        	</ul>
        </div>	
    </div>


			<?php endif; ?>

	<div class="container">
		<div class="content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; endif;?>
		</div>

	</div>	
</section>

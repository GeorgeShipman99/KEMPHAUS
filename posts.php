<?php get_header(); ?>

<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
 
 	<div class="strip_banner">
         	<img id="strip_img" src="<?php echo $thumb['0'];?>" class="<?php echo $post_id; ?>" alt="Banner"/>
     </div>  
     
<section class="page_section">
<div class="container">
          
	<div class="row">
		<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">

			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
					get_template_part( 'content', get_post_format() );
  
				endwhile; endif; 
			?>

		</div> <!-- /.col -->
        
           <?php get_template_part('partials/side_bar'); ?>


	</div> <!-- /.row --> 
</div>

</section>

<?php get_footer(); ?>


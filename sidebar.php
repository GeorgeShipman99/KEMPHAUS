<div class="col-xs-12 col-sm-4 col-md-4 col-md-offset-0 col-lg-3 col-lg-offset-1 blog-sidebar">

<?php dynamic_sidebar( 'social_sidebar' ); ?>

<div id="testimonials">
<h2>Testimonials</h2>

	<?php
	$args = array( 'post_type' => 'testimonial', 'posts_per_page' => 10 );
	$loop = new WP_Query( $args );
	if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post();
	$data = get_post_meta( $loop->post->ID, 'testimonial', true );
	static $count = 0;
	if ($count == "1") { ?>


<div class="slide" style="display: none;">
     <div class="client-contact-info">
		 <?php echo $data[ 'person-name' ]; ?>,&nbsp;<?php echo $data[ 'position' ]; ?>,&nbsp;<a href="<?php echo $data[ 'link' ]; ?>" title="<?php echo $data[ 'company' ]; ?>"><?php echo $data[ 'company' ]; ?></a>
      </div>
	<div class="testimonial-quote">
		<?php the_content(); ?>
	</div>
</div>
				
<?php } else { ?>

<div class="slide">
	<div class="client-contact-info">
		<?php echo $data[ 'person-name' ]; ?>,&nbsp;<?php echo $data[ 'position' ]; ?>,&nbsp;<a href="<?php echo $data[ 'link' ]; ?>" title="<?php echo $data[ 'company' ]; ?>"><?php echo $data[ 'company' ]; ?></a>
    </div>
	<div class="clear"></div>
	<div class="testimonial-quote"><?php the_content(); ?></div>
</div>

<?php $count++; } endwhile; endif; ?>
<div id="prev">PREV</div>
<div id="next">NEXT</div>         
</div>


</div>
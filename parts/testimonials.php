<section class="testimonials"  id="testimonial">
	<div class="container">

	  <div class="row">

	  	<div class="col-sm-12 title-bar">
	  		<h2>Testimonials</h2>
	  	</div>
	  	
	  <div class="col-sm-12 test-cont">

	  		   <div id="testimonials">

                        <?php
                        $args = array( 'post_type' => 'testimonial', 'posts_per_page' => 10 );
                        $loop = new WP_Query( $args );
                        if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post();
                        $data = get_post_meta( $loop->post->ID, 'testimonial', true );
                        static $count = 0;
                        if ($count == "1") { ?>

                        <div class="slide" style="display: none;">
                            <div class="testimonial-quote"><?php the_content();?></div>
                            <div class="client-contact-info">
                                    <?php echo $data[ 'person-name' ]; ?>, <a href="<?php echo $data[ 'link' ]; ?>" title="<?php echo $data[ 'company' ]; ?>"><?php echo $data[ 'company' ]; ?></a>
                            </div>
                        </div>

               
                        <?php } else { ?>

                        <div class="slide">
                            <div class="testimonial-quote"><?php the_content(); ?></div>
                             <div class="client-contact-info">
                                    <?php echo $data[ 'person-name' ]; ?>, <a href="<?php echo $data[ 'link' ]; ?>" title="<?php echo $data[ 'company' ]; ?>"><?php echo $data[ 'company' ]; ?></a>
                            </div>
                        </div>


                         <?php $count++; }?>

                         <?php endwhile; endif; ?>

                        <div class="clear"></div>

                        <div class="navigation">
                        	<div id="prev">&larr;</div>
                        	<div id="next">&rarr;</div> 
                        </div>


                                
                </div>
	  	</div>	
	  </div>
	</div>	  
</section>	  
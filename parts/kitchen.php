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

		<div class="nav-kitchens">
			<?php
			$pagelist = get_pages("child_of=".$post->post_parent."&parent=".$post->post_parent."&sort_column=menu_order&sort_order=asc");
			$pages = array();
			foreach ($pagelist as $page) {
				$pages[] += $page->ID;
			}

			$current = array_search($post->ID, $pages);
			$prevID = $pages[$current-1];
			$nextID = $pages[$current+1];
			?>

			<h4>
				<?php if (!empty($prevID)) { ?>
				
				<span class="prev">
					<a href="<?php echo get_permalink($prevID); ?>" title="<?php echo get_the_title($prevID); ?>">&larr;</a>
				</span>
							
				<?php } if (!empty($nextID)) { ?>
							
				<span class="next">
					<a href="<?php echo get_permalink($nextID); ?>" title="<?php echo get_the_title($nextID); ?>">&rarr;</a>
				</span>
				<?php } ?>
			</h4>


		</div>	
	</div>	
</section>

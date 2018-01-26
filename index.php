<?php get_header(); ?>

<section class="news">


	<div class="container">
		<h1>News.<br/><span>What's been happening?</span></h1>
	</div>

</section>

<section class="posts">

   <div class="container">    
		<div class="row">
			<div class="col-sm-12">

					<?php
					if(have_posts()) :	while(have_posts()) :  the_post(); 
					?>
		
					<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

				<div class="nav-previous"><?php next_posts_link( 'Older posts' ); ?></div>
				<div class="nav-next"><?php previous_posts_link( 'Newer posts' ); ?></div>

			<?php endwhile; endif; ?>

			</div>

		</div>

	</div>
  </div>    

</section>

	

<?php get_footer(); ?>
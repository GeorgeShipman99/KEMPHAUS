<section class="recents"  id="projects">
	<div class="container">

	  <div class="row">

	  	<div class="col-sm-12 title-bar">
	  		<h2>Recent Projects</h2>	
	  	</div>	

	  	<?php if( have_rows('recent_projects') ): ?>
		<?php while( have_rows('recent_projects') ): the_row(); 
		// vars
		$video = get_sub_field('video');
		$date = get_sub_field('date');
		$title = get_sub_field('title');
		$client = get_sub_field('client');
		$link = get_sub_field('link');
		?>
		
		<div class="col-sm-12 col-md-6 loads">
	  			<div class="project_box">
	  				<div class="video_container">
	  					<?php echo $video; ?>
	  				</div>	

	  				<div class="project_details">
	  					<p><?php echo $date; ?></p>
	  					<h3><?php echo $title; ?></h3>
	  					<p><a href="<?php echo $link; ?>" target="_blank"><?php echo $client; ?></a></p>
	  				</div>
				</div>
	  	</div>

	<?php endwhile; ?>
<?php endif; ?>

		<div class="divider"></div>
		<div id="loadMore" class="loadMore">LOAD MORE</div>

	  </div>

	</div>	  
</section>	  
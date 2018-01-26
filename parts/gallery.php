<section class="gallery" id="360">

    <div class="container">
        <h1>Find your kitchen</h1>

        <div id="style">
            <select id="kitchen-style" name="kitchen-style">
                <option value="" disabled selected>Select your style</option>
                <option value="coloured">Coloured</option>
                <option value="handleless">Handleless</option>
                <option value="bright">Bright</option>
                <option value="lacquered">Lacquered</option>
                <option value="country">Country</option>
            </select>
        </div>
    </div>  


  <div class="image-grid">
<?php 

$images = get_field('gallery-one');

if( $images ): ?>
        <?php foreach( $images as $image ): ?>
                <a href="<?php the_field('custom_link',  $image['id']);?>" rel="gallery">
                    <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" class="lazyl <?php the_field('custom_id', $image['id']);?> shineon" />
                    <div class="project_details">
                		<div>
                			<h3><?php echo $image['title']; ?></h3>
	  						<p><?php echo $image['caption']; ?></p>
	  					</div>
	  				</div>
                </a>
             
        <?php endforeach; ?>
<?php endif; ?>

	</div>



</section>	  
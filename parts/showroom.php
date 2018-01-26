<section class="showroom" >

	<div class="container">
		<h1><?php the_title();?></h1>
	</div>	

	<div id="maintable">
         <div id="mypanoviewer"></div>
         <div class="extras">
         	<a href="<?php the_field('map_link','options') ?>" target="_blank">
            <div class="showroom_image">
         		<div class="showroom_details">
         			<h2>Find Us:</h2>
                    <h3> We are easily located just 5 minutes from the M11 (junction 9) on the A120 close to Bishop’s Stortford.</h3>
         		</div>         		
         	</div>
            </a>
         	<a href="<?php the_field('map_link','options') ?>" target="_blank">
         		<div class="map">
         			<div class='pin'></div>
					<div class='pulse'></div>
         		</div>
         	</a>	
        </div> 	
    </div>

</section>

<section class="contact_form" >        
    <div class="container">

        <div class="contact_details">
            <h2><?php the_field('showroom_address','options') ?></h2>
            <cite>Telephone</cite>
            <p><?php the_field('telephone','options') ?></p>
            <cite>Email</cite>
            <p><a href="mailto:<?php the_field('email1','options') ?>"><?php the_field('email1','options') ?></a></p>
            <p><a href="mailto:<?php the_field('email2','options') ?>"><?php the_field('email2','options') ?></a></p>
            <p><a href="mailto:<?php the_field('email3','options') ?>"><?php the_field('email3','options') ?></a></p>

            <ul class="social_icons">
                <a href="<?php the_field('fb_link','options') ?>" target="_blank"><li class="fb" style="background: url('<?= get_template_directory_uri(); ?>/assets/img/social_icons.png');"></li></a>
                <a href="<?php the_field('pint_link','options') ?>" target="_blank"><li class="pint" style="background: url('<?= get_template_directory_uri(); ?>/assets/img/social_icons.png');"></li></a>
                <a href="<?php the_field('houzz_link','options') ?>" target="_blank"><li class="houzz" style="background: url('<?= get_template_directory_uri(); ?>/assets/img/social_icons.png');"></li></a>
            </ul>    
        </div>  
		
        <div class="content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; endif;?>
		
        </div>

	</div>	
</section>    



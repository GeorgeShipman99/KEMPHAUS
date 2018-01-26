<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?php echo get_bloginfo( 'name' ); ?></title>
	<script src="https://use.typekit.net/gvt8btv.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo get_bloginfo( 'template_directory' );?>/assets/css/style.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
</head>

<body>
<!--TRANSITION CONTAINER--><div class="body-container"> 
 
 <div class="top_bar">
 	<a href="tel:<?= get_theme_mod( 'contact_section_phone', '' ); ?>">
 		<h3>CALL US: <?= get_theme_mod( 'contact_section_phone', '' ); ?></h3>
 	</a>

 	<ul>
        <a href="<?php the_field('fb_link','options') ?>" target="_blank"><li class="fb" style="background: url('<?= get_template_directory_uri(); ?>/assets/img/social_icons.png');"></li></a>
        <a href="<?php the_field('pint_link','options') ?>" target="_blank"><li class="pint" style="background: url('<?= get_template_directory_uri(); ?>/assets/img/social_icons.png');"></li></a>
        <a href="<?php the_field('houzz_link','options') ?>" target="_blank"><li class="houzz" style="background: url('<?= get_template_directory_uri(); ?>/assets/img/social_icons.png');"></li></a>
    </ul>

 </div>

<header>

	<div class="container">

		<a href="#" class="mobmenu menuicon"><span></span></a>

		<h3>tel: <?= get_theme_mod( 'contact_section_phone', '' ); ?></h3>	

		<div class="logo">
			<a href="<?php the_field('splash_link','options'); ?>">
				<img src="<?= get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo" id="logo">
			</a>
		</div>
	</div>
</header>

<nav>
	<div class="container nav_container">
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
	</div>
</nav>	

	

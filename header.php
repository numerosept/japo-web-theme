<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">

		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
			<!--[if IE]>
				<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
			<meta name="msapplication-TileColor" content="#f01d4f">
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
	    	<meta name="theme-color" content="#121212">
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

		<!-- Drop Google Analytics here -->
		<!-- end analytics -->

	</head>

		
	<body <?php body_class(); ?>>
				<div class="nav">
			<div class="nav_inner text-center">
						<h1 class="logo text-center"><a href="<?php echo get_home_url();?>"><img src="<?php echo get_template_directory_uri() ?>/assets/images/japo_texte_2016.png"></a></h1>
				<?php joints_off_canvas_nav(); ?>
				<div class="links">adf</div>	
			</div>
			
		</div>
	
		<div class="contact-bar">		
		<?php get_template_part( 'parts/contact','zone' )?>
		</div>

		<img class="nav_image" src="<?php the_field('fond_de_la_page_daccueil', 'option'); ?>" alt="">
		
		<header id="main_navi">
					<span class="menu_trigger menu_link">
					<a><span>Menu</span></a>
					</span>
					<h1 class="logo"><a href="<?php echo get_home_url();?>"><img src="<?php echo get_template_directory_uri() ?>/assets/images/japo_texte_2016.png"></a></h1>
					<span class="contact_trigger contact_link">
					<a><span>Contact</span></a>
					</span>
					</header>
		<div class="off-canvas-wrapper">
		<div class="off-canvas-content" data-off-canvas-content>
									
									
									

<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
       integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

<section class="container-hero">
	
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				
				
				</div><!-- .site-branding -->

				<div class="container-logo-nav shop-stuff find-us-nav ">
						<div class="custom_logo"> 
							<?php if ( function_exists( 'the_custom_logo' ) ) {
 							the_custom_logo();
							} ?>
					</div>

				<nav id="site-navigation" class="main-navigation other-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</div>
			
			</header><!-- #masthead -->

			<?php
		if (has_post_thumbnail()) { ?>

			<?php if (is_page('front-page')) { ?>
				<div class="hero-banner" style="background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.6)), url(<?= get_the_post_thumbnail_url(); ?>);">
					<img class="inhabitent-text-logo" src="<?php echo get_template_directory_uri() ?>/images/logos/inhabitent-logo-full.svg" alt="<?php echo $term->name; ?>" />
				</div>
			<?php } elseif (is_page('about')) { ?>

				<div class="hero-banner hero-about" style="background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.6)),url(<?= get_the_post_thumbnail_url(); ?>);">
					<h1 class="about-title"><?php the_title(); ?></h1>
				</div>
		<?php }
		} ?>	





</section>

			
			<div id="content" class="site-content test">
		



	
	
	


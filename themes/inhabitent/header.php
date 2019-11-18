<?php get_header ?>
<div class="container">
<h1><?php the_title();?></h1>


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
		<link href="https://fonts.googleapis.com/css?family=Merriweather:400,700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
	</head>


<section class="container-hero">
	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				
				
				</div><!-- .site-branding -->

				<div class="container-logo-nav">
						<div class="custom_logo"> 
							<?php if ( function_exists( 'the_custom_logo' ) ) {
 							the_custom_logo();
							} ?>
					</div>

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</div>
			
			</header><!-- #masthead -->

			<div id="content" class="site-content">

			<?php
	if(is_front_page()){
    if ( has_post_thumbnail() ) { ?>
        <div class="logo">
            <?php the_post_thumbnail(); ?>

    <?php
    }
	}
	

?>
</section>
	<?php get_footer ?>


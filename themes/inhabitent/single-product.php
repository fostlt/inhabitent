<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */
?> 

<?php get_header() ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', 'single' ); ?>

        <?php endwhile; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
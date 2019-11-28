<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header journal-header">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail( 'large' ); ?>
                    <?php endif; ?>

                    <?php the_title( '<h1> class="entry-title">', '</h1>' ); ?>

                    <div class="entry-meta">
                        <?php red_starter_posted_on(); ?> / <?php red_starter_comment_count(); ?> / <?php red_starter_posted_by(); ?>
                    </div><!-- .entry-meta -->
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <?php the_excerpt(); ?>
                   
                    <a class="journal-link" href="<?php echo get_the_permalink(); ?>">Read More</a>
                </div><!-- .entry-content -->

                <footer class="entry-footer">
                    <?php red_starter_entry_footer(); ?>
                </footer><!-- .entry-footer -->
            </article><!-- #post-## -->

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
    </div><!-- #primary -->
    

<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */
?>

<article id="post-<?php the_ID(); ?>" 
<?php post_class(); ?>>

	<div class="journal-content-story">

		<?php if ( has_post_thumbnail() ) : ?>
    		<?php the_post_thumbnail('single'); ?>

		<?php endif; ?>
		<header class="journal-single-header"> 
			<?php the_title( '<h2 class="journal-single-title">', '</h2>' ); ?>
			<p class="single-price"><?php the_field( 'price' ); ?></p>
			<?php the_content(); ?>

			<div class="social-media-buttons">
				<button class="social-media"><i class="fab fa-facebook-f"></i> Like</button>
				<button class="social-media"><i class="fab fa-twitter"></i> Tweet</button> 
				<button class="social-media"><i class="fab fa-pinterest"></i> Pin</button>
			</div>
		</header>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div>
</article>
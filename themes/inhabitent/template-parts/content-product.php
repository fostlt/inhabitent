<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>
<div class="products-container">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header product-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
			<?php endif; ?>
        
        <div class="product-meta">
            <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
            <?php the_field('price'); ?>
        </div><!-- .product-meta -->

	</header><!-- .entry-header -->
</article><!-- #post-## -->
</div>

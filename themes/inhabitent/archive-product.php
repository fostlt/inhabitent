<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<?php
					$terms = get_terms(array(
						'taxonomy' => 'product_type',
						'hide_empty' => 0,
					));
					if (!empty($terms) && !is_wp_error($terms)) :
						?>
					<h2 class="page-title-archive">Shop Stuff</h2>
					<div class="first-page-product-choose">
						<?php foreach ($terms as $term) : ?>
							<div class="product-type-block-wrapper">
								<p><a href="<?php echo get_term_link($term); ?>" class="buttons"><?php echo $term->name; ?></a></p>
							</div>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<?php if ( have_posts() ) : ?>
		
		<?php 
				$args = array( 'post_type' => 'product', 'order' => 'ASC', 'posts_per_page' => 16);
   				$archive_posts = get_posts( $args ); 
			?>
				
                <?php foreach ( $archive_posts as $post ) : setup_postdata( $post ); ?>
					   <?php ?> 
					   
					   <?php //the_post_thumbnail(); ?></div>
						<?php //the_title(); ?>
						<?php //the_field('price'); ?>
					
        <?php endforeach; wp_reset_postdata(); ?>
			</div>
			
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<section class="shop-grid">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

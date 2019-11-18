<?php
get_header(); ?>

<section class="product-info container">
            <h2>SHOP STUFF</h2>
            <?php
               $terms = get_terms( array(
                   'taxonomy' => 'product_type',
                   'hide_empty' => 0,
               ) );
               if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
            ?>
               <div class="product-type-blocks">
                  <?php foreach ( $terms as $term ) : ?>
                     <div class="product-type-block-wrapper">
                        <img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/' . $term->slug; ?>.svg" alt="<?php echo $term->name; ?>" />
                        <p><?php echo $term->description; ?></p>
                        <p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?> Stuff</a></p>
                     </div>
                  <?php endforeach; ?>
               </div>
            <?php endif; ?>

            <h2 class="ij-title">INHABITENT JOURNAL</h2>
			<?php 
				$args = array( 'post_type' => 'post', 'order' => 'DSC', 'posts_per_page' => 3);
   				$product_posts = get_posts( $args ); 
			?>
			<div class="journal">
                <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
   				    <?php /* Content from your array of post results goes here */ ?>
					   <ul class="journal-container">
					   		<div class="journal-img">
							<?php the_post_thumbnail(); ?></div>
							<div class="journal-data">
							<?php echo get_the_date(); ?> / <?php echo get_comments_number(); ?> Comments</div>
							<div class="journal-title">
						   	<?php the_title(); ?></div>
							<div class="read-entry-btn">
							<a href="<?php echo get_post_permalink($post);?>">read entry</a></div>
						</ul>
        <?php endforeach; wp_reset_postdata(); ?>
			</div>

            
         </section>
<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="products-content-area">
		<main id="main" class="products-site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
			<h1> Shop Stuff </h1>
			</header><!-- .page-header -->

			<?php endif; ?>

<!-- WRAPPER FOR ALL PRODUCTS -->
			<div class="product-block-wrapper">
				<?php
		
				global $post;
				$args = array( 'posts_per_page' => 16,'post_type' => 'product', 'order' => 'ASC' ); 

				$posts = get_posts( $args );
				foreach ( $posts as $post ) : setup_postdata( $post ); ?>
			
	
					
				
						<div class="product-block-wrapper">
									
									<div class="product-block">
									<a href="<?php the_permalink(); ?>">	<?php the_post_thumbnail( 'medium'); ?></a></br>
								
									<div class="content-block"><p class="archive-dots">.....................................</p>
									<span class="archive-item"><?php the_title()  ?> </span><span class="price-meta"> <?php 
											$meta_print_value=get_post_meta(get_the_ID(),'price',true);
											echo($meta_print_value);
								?></span>
						
						
						</div>
					</div>
</div>
		<?php endforeach; 
		wp_reset_postdata();?>
		</main><!-- #main -->

	</div><!-- #primary -->


<?php get_footer(); ?>

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
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
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
						<?php the_post_thumbnail( 'medium'); ?>
						<div class="content-block">
							<p><?php the_date(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></p>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></br>
							<a href="<?php the_permalink(); ?>" class="button">Read More</a>
						</div>
					</div>
</div>
		<?php endforeach; 
		wp_reset_postdata();?>
		</main><!-- #main -->

	</div><!-- #primary -->


<?php get_footer(); ?>

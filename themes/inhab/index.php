<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */
?>
<?php
get_header();?>
	
	<div id="primary" class="site-content">
		<main id="main" class="site-main" role="main">
			<h1 class="category-title">Category: <?php the_category(); ?></h1>
		
				<?php single_post_title(); ?> 
				<?php if ( have_posts() ) : ?>
				<?php if ( is_home() && ! is_front_page() ) : ?>

			<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			</header>

				<?php endif; ?>
				<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>
				<a href="<?php the_permalink(); ?>" class="button">Read More<span class="dashicons dashicons-arrow-right-alt next-arrow"></span></a>

			<?php endwhile; ?>
	
			<?php the_posts_navigation(); ?>
			
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
	
		</main><!-- #main -->
		<?php get_sidebar(); ?>
	</div><!-- #primary -->

<?php get_footer(); ?>

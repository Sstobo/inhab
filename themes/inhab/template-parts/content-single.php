<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		

		<div class="entry-meta">
		
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
	<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
	<span class="price-meta"> 
							<?php
								$meta_print_value=get_post_meta(get_the_ID(),'price',true);
								echo($meta_print_value);
							?></span>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>

			<div class="single-links">
			<a href="#"><span class="dashicons dashicons-facebook-alt"></span>like</a>
			<a href="#"><span class="dashicons dashicons-twitter"></span>tweet</a>
			<a href="#"><span class="dashicons dashicons-location"></span>pin</a>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

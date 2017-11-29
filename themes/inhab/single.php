<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="site-content">
<main id="main" class="site-main" role="main">

<?php if ( have_posts() ) : ?>

	<div class="content">
		<header>
			<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
		</header>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content-single-post' ); ?>
				
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>		

		<?php else : ?>
			<?php get_template_part( 'template-parts/content-single-post', 'none' ); ?>

		<?php endif; ?>

<div class="single-links">
<a href="#"><span class="dashicons dashicons-facebook-alt"></span>like</a>
<a href="#"><span class="dashicons dashicons-twitter"></span>tweet</a>
<a href="#"><span class="dashicons dashicons-location"></span>pin</a>


<h1 class="comment-title"> Post A Comment </h1>

<?php
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
            ?>

				
</main><!-- #main -->
<?php get_sidebar(); ?>
</div>
</div><!-- #primary -->
</div>
<?php get_footer(); ?>

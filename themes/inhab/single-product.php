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
	
		<header>
			<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>	
		</header>

			<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content-single' ); ?>		
		<?php endwhile; ?>
			<?php the_posts_navigation(); ?>		
		<?php else : ?>
			<?php get_template_part( 'template-parts/content-single', 'none' ); ?>
		<?php endif; ?>

		<?php
      if ( comments_open() || get_comments_number() ) :
          comments_template();
      endif; ?>
		
	</main>
</div>
<?php get_footer(); ?>
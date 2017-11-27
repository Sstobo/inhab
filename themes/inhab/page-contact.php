<?php
/**
 * Template Name: Contact Page 
 * 
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="primary-contact">
		<main id="main" class="main-contact" role="main">
			<div class="site-content-contact">
					<div class="contact-container">
						<?php while ( have_posts() ) : the_post(); ?>
						<h2 class="title"> Find Us </h2>
						<div class="contact-content">	<?php get_template_part( 'template-parts/content', 'page' ); ?>
					</div>
				</div>
						<?php get_sidebar(); ?>	
						<?php endwhile; // End of the loop. ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

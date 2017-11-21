<?php
/**
  * Template Name: Post Page 
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="single-content-area">
		<main id="main" class="single-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
		
		<div class="single-product">
			<?php the_post_thumbnail(); ?>
			<h1 class="single-title"><?php single_post_title(); ?></h1>
		</div>

		<div class="single-info">
		<p class="single-title"><?php the_title()  ?> </p><span class="price-meta"><?php 
      $meta_print_value=get_post_meta(get_the_ID(),'price',true);
      echo($meta_print_value);
?></span>
<div class="single-content"> <?php the_content(); ?> </div>
<div class="single-links">
<a href="#"><span class="dashicons dashicons-facebook-alt"></span>like</a>
<a href="#"><span class="dashicons dashicons-twitter"></span>tsag</a>
<a href="#"><span class="dashicons dashicons-location"></span>pin</a>
</div>
			</div>
		


		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>

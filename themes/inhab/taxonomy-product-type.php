<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<h1> <?php single_term_title(); ?> </h1>
								
								<p class="page-description"><?php the_archive_description();?></p>
		
		</main><!-- #main -->

		<div class="product-wrapper">
					
								<?php while ( have_posts() ) : the_post(); ?>				

				<div class="product-block">
							<a href="<?php the_permalink(); ?>">	<?php the_post_thumbnail(); ?></a></br>
				<div class="content-block">
							<span class="archive-item"><?php the_title()  ?> </span><span class="price-meta"> 
							<?php
								$meta_print_value=get_post_meta(get_the_ID(),'price',true);
								echo($meta_print_value);
							?></span>
				</div> 
				</div>
																									
							 <?php endwhile; ?>
															
			</div>	
		</div>
	</div>

<?php get_footer(); ?>

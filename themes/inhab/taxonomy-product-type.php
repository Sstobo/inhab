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
			
								<?php
										$terms = get_terms( array(
												'taxonomy' => 'product-type',
												'hide_empty' => 0,) );
										if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
								?>
								<?php
										foreach ( $terms as $term ) : ?>

		<div class="link-wrapper">

						<p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?></a></p>

								<?php endforeach; ?>
								<?php endif; ?>
						
		</div>	 

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
					
		



						
		
		
	</div><!-- #primary -->

<?php get_footer(); ?>

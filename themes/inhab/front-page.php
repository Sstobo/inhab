<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<div class="frontpage-hero">		
				<img src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-full.svg'?> "/>
		</div>


<!-- // THE LOOP 			 -->	
		<main id="main" class="site-main-front-page" role="main">
		<?php if ( have_posts() ) : ?>
		<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="front-page screen-reader-text"><?php single_post_title(); ?>
				</header>
			<?php endif; ?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>      
				<?php get_template_part( 'template-parts/content' ); ?>
			<?php endwhile; ?>
			<?php the_posts_navigation(); ?>
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>



<!-- PRODUCT ROLL -->
<h1>Shop Stuff</h1>
<section class="product-info container">
          
            <?php
               $terms = get_terms( array(
                   'taxonomy' => 'product-type',
                   'hide_empty' => 0,
               ) );
               if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
						?>
				
               <div class="product-type-blocks">

                  <?php foreach ( $terms as $term ) : ?>

                     <div class="product-type-block-wrapper">
											 
										 <img src="<?php echo get_template_directory_uri() . '/images/' . $term->slug; ?>.svg" alt="<?php echo $term->name; ?>" />
                        <p><?php echo $term->description; ?></p>
												<p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?> Stuff</a></p>
												
                     </div>

                  <?php endforeach; ?>

               </div>
               
            <?php endif; ?>
         </section>

<!-- JOURNAL  -->
<h1 class="titles"> Inhabitent Journal </h1>
		<div class="journal-container">
		<?php

		global $post;
		$args = array( 'posts_per_page' => 3,'post_type' => 'post', 'order' => 'ASC' ); 

		$posts = get_posts( $args );
		foreach ( $posts as $post ) : setup_postdata( $post ); ?>
							
				<div class="journal-block">
				<?php the_post_thumbnail( 'medium'); ?>
				<div class="content-block">
					<p><?php the_date(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></p>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></br>
					<a href="<?php the_permalink(); ?>" class="button">Read More</a>
				</div>
			</div>

<?php endforeach; 
wp_reset_postdata();?>

</ul>	

</div>

<!-- ADVENTURE BLOG  -->
<h1> Latest Adventures </h1>
<div class="adventure-wrapper">
	<div class="adventure-main"><a href="#"> Getting Back to Nature in a Canoe</a><a href="#" class="button">Read More</a></div>
	<div class="adventure-one"><a href="#">A Night With Friends at the Beach</a><a href="#" class="button">Read More</a></div>
	<div class="adventure-two"><a href="#">Taking in the View at Big Mountain</a><a href="#" class="button">Read More</a></div>
	<div class="adventure-three"><a href="#">Star-Gazing at the Night Sky</a><a href="#" class="button">Read More</a></div>
</div>



		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>

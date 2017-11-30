<?php
/**
 * Template Name: About Page 
 * 
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="about-content-area">
    <main id="main" class="site-about" role="main">

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <header class="entry-header about-hero">
          <div class="about-container">

            <h2 class="about-title" > <?php the_title( ); ?> </h2>
            
          </div>
        </header>

        <div class="about-container">    
          <div class="entry-content">
            <h2> Our Story </h2>

            <?php echo CFS()->get( 'about_our_story'); ?>

            <h2> Our Team </h2>

            <?php echo CFS()->get( 'about_our_team'); ?>

          </div>
        </div>
      </article>
    </main>
  </div>

<?php get_footer(); ?>

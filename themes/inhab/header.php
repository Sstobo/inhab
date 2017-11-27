<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
	
	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
		
			<header id="masthead" class="site-header" role="banner">		
				<div class="site-branding">
					
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<!-- <p class="site-description"><?php bloginfo( 'description' ); ?></p> -->
				</div><!-- .site-branding -->
				
				<a class="header-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"></a>
			
			<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>

					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

					<i  id="search-button" class="fa fa-search" aria-hidden="true">			
					<span id="search-input"><?php echo esc_html( 'Search' ); ?></span></i>

					<?php get_search_form(); ?><span class="dashicons dashicons-search search-icon search-button"></span>
					
			</nav>
			</header><!-- #masthead -->

		</div>
	</body>

<?php
/**
 * The header for our theme.
 *
 * @package Sport_On_Campus_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<!-- <div class="site-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src=<?php echo get_template_directory_uri().''?> alt=""></a>
					</div> -->
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'desktop-menu', 'container_class' => 'desktop-menu' ) ); ?>
					<?php wp_nav_menu( array( 'theme_location' => 'additional-menu', 'container_class' => 'secondary-menu' ) ); ?>
					<a class="front-logo" href="<?php bloginfo('url'); ?>"> </a>
					<?php wp_nav_menu( array( 'theme_location' => 'desktop-menu-two', 'container_class' => 'desktop-menu-two' ) ); ?>
					<div class="nav-dropdown">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">&#9776;</button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</div>	
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
	
<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package enigma
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type='text/javascript' src='/wordpress/wp-content/themes/hiofenigma/qr-generator/jquery.min.js'></script>
<script type='text/javascript' src='/wordpress/wp-content/themes/hiofenigma/qr-generator/qrcode.js'></script>
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- Bildet som brukes av facebook når man deler -->
<link rel="image_src" type="image/jpeg" href="http://enigma.hiof.no/wp-content/uploads/2015/10/icon-facebook.gif" />
<!-- Beskrivelse som kommer under bildet på facebook når man deler -->
<meta name="Description" content="Enigma er linjeforeningen for IT-studenter ved Høgskolen i Østfold."/>

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'enigma' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		</div><!-- .site-branding -->
<div id="navWrapper">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Meny', 'enigma' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
<div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">

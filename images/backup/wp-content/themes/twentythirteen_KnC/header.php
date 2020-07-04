<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="author" content="Kleuren & Cijfers V.O.F.">
	<meta name="keywords" content="schilder, deinze, financiële ondersteuning, administratieve ondersteuning">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" type="image/png" href="favicon.png">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
<script type="application/ld+json">
	{
  	"@context": "http://schema.org",
  	"@type": "LocalBusiness",
  	"address": {
    "@type": "PostalAddress",
    "addressLocality": "Deinze",
    "postalCode":"9800",
    "streetAddress": "Schipdonkstraat 44"
  	},
  	"name": "Kleuren & Cijfers V.O.F.",
  	"geo": {
    "@type": "GeoCoordinates",
    "latitude": "50.998532",
    "longitude": "3.5400967"
 		}, 			
  	"email": ["annick@kleurenencijfers.be", "wim@kleurenencijfers.be"],
    "logo": "http://www.kleurenencijfers.be/wp-content/uploads/2015/09/Banner_new.png",
    "url": "http://kleurenencijfers.be",
"hasmap": "https://www.google.be/maps/place/Schipdonkstraat+44,+9800+Deinze/@50.998532,3.5422854,17z/data=!3m1!4b1!4m2!3m1!1s0x47c36c872eb1248d:0x9e6e3c0dbfce3435"
	}
</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<!--<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>-->
				<img src="http://www.kleurenencijfers.be/wp-content/uploads/2015/09/Banner_new.png"/>
			</a>
			<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<button class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></button>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
					<?php get_search_form(); ?>
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
		</header><!-- #masthead -->

		<div id="main" class="site-main">
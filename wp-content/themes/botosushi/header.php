<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width; initial-scale=1.0">

<title><?php
		global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,400italic' rel='stylesheet' type='text/css'>

<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	wp_head();
?>
<script type='text/javascript' src="<?php bloginfo('template_url') ?>/js/isotope.js"></script>
<script type='text/javascript' src="<?php bloginfo('template_url') ?>/js/isotope-masonry-horizontal.js
"></script>
<script type='text/javascript' src="<?php bloginfo('template_url') ?>/js/isotope-pakery.js
"></script>

</head>

<body <?php body_class(); ?>>
	
	<script>
		jQuery(document).on('click', '.menu-mobile #nav-toggle', function () {
			jQuery('.menu-mobile  .switch').addClass('overlay').removeClass('switch').show();
			jQuery('.menu-mobile  .overlay').toggleClass('open');
			jQuery('.menu-mobile  .trigger-overlay.close').show()
			jQuery('.menu-mobile  .gform-wrap').removeClass('expand')
		});
	</script>
	
<div id="wrapper" class="hfeed">
	<div id="header">
		<ul class="menu-desktop">
			<li><a href="#" class="trigger-overlay menu">MENU</a></li>
			<li>
				<a href="">LOCATIONS</a>
				<ul>
    		  <li>SUSHIYAH - DEL MAR</li>
    		</ul>
			</li>
			<li><img src="<?php bloginfo('template_url') ?>/images/logo.png"/></li>
			<li><a href="tel:8584517800">CALL US</a></li>
			<li><a href="#" class="trigger-overlay aboutus">ABOUT US</a></li>
		</ul>
		
		<ul class="menu-mobile">
			<img src="<?php bloginfo('template_url') ?>/images/logo.png"/>
			<a id="nav-toggle" href="#"><span></span></a>
			<div class="switch">
				<div class="overlay-inner ">
					<div id="access" role="navigation" style="display: block ! important; float: none; width: 100%; text-align: center; margin-top: 40%;">
						<ul>
							<li><a href="#" class="trigger-overlay menu">MENU</a></li>
							<li>
								<a href="">LOCATIONS</a>
								<ul>
								  <li>SUSHIYAH - DEL MAR</li>
								</ul>
							</li>
							<li><a href="tel:8584517800">CALL US</a></li>
							<li><a href="" class="trigger-overlay aboutus">ABOUT US</a></li>
						</ul>
					</div><!-- #access -->
				</div><!-- .overlay-inner -->
			</div><!-- .switch -->
		</ul>
		
	</div><!-- #header -->
	<div class="hero-banner">
		<img src="<?php bloginfo('template_url') ?>/images/_new/hero-banner.jpg"/>
	</div>
	<div id="main">

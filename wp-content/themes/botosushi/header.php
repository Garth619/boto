<?php
    // Top of the page, before sending out ANY output to the page.
        $user_is_first_timertwo = !isset( $_COOKIE["FirstTimertwo"] );

    // Set the cookie so that the message doesn't show again
        setcookie( "FirstTimertwo", 1, strtotime( '+1 year' ) );
?>

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
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?v=3" />
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
	
	<?php if( $user_is_first_timertwo ): ?>
	
	<div class="first_time_overlay" style="display:none;">
		
		<div class="first_time_overlay_inner">
			
			<span class="my_close">X Close</span><!-- my_close -->
			
			<img class="overlay_logo" src="<?php bloginfo('template_directory');?>/images/logo.png"/>
			
<!-- 			<span class="upcoming">Sunday will be open <span class="overlay_red">starting 4/30/17 2pm - 9 pm</span></span> -->
			
			<span class="upcoming">All day Happy Hour Menu Sunday opening promotion <span class="overlay_red">until 5/14/17</span></span>
			
			<span class="upcoming">And <span class="overlay_red">after 5/14/17</span> Happy Hour will be 2-5 pm on every sunday only</span>
			
			<span class="continue">Continue to Site</span><!-- continue -->
			
		</div><!-- first_time_overlay_inner -->
		
	</div><!-- first_time_overlay -->
	
	<?php endif;?>

	
	
	
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
				<a href="https://www.google.com/maps/place/11835+Carmel+Mountain+Rd,+Carmel+Mountain+Ranch+Town+Center,+San+Diego,+CA+92128/@32.9798454,-117.0771351,17z/data=!3m1!4b1!4m2!3m1!1s0x80dbfa018664db7d:0xcc402e2514645ee1" target="_blank">DIRECTIONS</a>
<!--
				<ul>
    		  <li>SUSHIYAH - DEL MAR</li>
    		</ul>
-->
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
								<a href="https://www.google.com/maps/place/11835+Carmel+Mountain+Rd,+Carmel+Mountain+Ranch+Town+Center,+San+Diego,+CA+92128/@32.9798454,-117.0771351,17z/data=!3m1!4b1!4m2!3m1!1s0x80dbfa018664db7d:0xcc402e2514645ee1" target="_blank">DIRECTIONS</a>
<!--
								<ul>
								  <li>SUSHIYAH - DEL MAR</li>
								</ul>
-->
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

<?php
/**
 * Template Name: Homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container" class="one-column">
			<div id="content" role="main">
				<div class="one-third module">
					<?php include('inc/modules/menu/menu.php') ?>
				</div>
				<div class="two-third module">
					<?php include('inc/modules/aboutus/aboutus.php') ?>
				</div>
				<div class="one-third module">
					<?php include('inc/modules/feedback/feedback.php') ?>
				</div>
				<div class="one-third module">
					<?php include('inc/modules/fivestar/fivestar.php') ?>
				</div>
				<div class="one-third module">
					<?php include('inc/modules/happyhour/happyhour.php') ?>
				</div>
				<div class="one-third module">
					<?php include('inc/modules/specialdeal/specialdeal.php') ?>
				</div>
				<div class="one-third module">
					<?php include('inc/modules/customer-reviews/customer-reviews.php') ?>
				</div>
				<div class="one-third module">
					<?php include('inc/modules/social/social.php') ?>
				</div>
				<div class="one-third module">
					<?php include('inc/modules/eclub/eclub.php') ?>
				</div>

			</div><!-- #content -->
		</div><!-- #container -->
					

<?php get_footer(); ?>

<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->

	<div id="footer" role="contentinfo">
	</div><!-- #footer -->

</div><!-- #wrapper -->
<div class="switch">
				<div class="overlay-inner ">
					<div id="access" role="navigation" style="display: block ! important; float: none; width: 100%; text-align: center; margin-top: 40%;">
						<ul>
							<li><a href="<?php bloginfo('url') ?>/portfolio">portfolio</a></li>
							<li><a href="<?php bloginfo('url') ?>/about">about</a></li>
							<li><a href="#contact-wrap">contact</a></li>
						</ul>
					</div><!-- #access -->
				</div>
	</div>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59242041-2', 'auto');
  ga('send', 'pageview');

</script>
<script type='text/javascript' src="<?php bloginfo('template_url') ?>/js/o0o.js"></script>
<?php
	/*
	 * Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>

<?php

if(file_exists('livereload.php'))
    include 'livereload.php';
?>


</body>
</html>

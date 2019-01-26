<div id="feedback">
	<h2><span class="lrg-bracket">[</span>GIVE US <strong>FEEDBACK</strong><span class="lrg-bracket">]</span></h2>
	<p><img src="<?php bloginfo('template_url') ?>/images/logo-lrg.png"/></p>
	<p>
		Click on the stars below to rate your experience with Boto Sushi.
	</p>
	<p>
		How likely is it that you would recommend Boto Sushi to a friend?
	</p>

	<div id="ratingsForm">
		<div class="stars">
			<input type="radio"  id="choice_1star" value="1star" class="star-1 star">
			<label id="label_1star" class="star-1"></label>
			
			<input type="radio"  id="choice_2star" value="2star" class="star-2 star">
			<label id="label_2star" class="star-2"></label>
			
			<input type="radio"  id="choice_3star" value="3star" class="star-3 star">
			<label id="label_3star" class="star-3"></label>
			
			<input type="radio"  id="choice_4star" value="4star" class="star-4 star">
			<label id="label_4star" class="star-4"></label>
			
			<input type="radio"  id="choice_5star" value="5star" class="star-5 star">
			<label id="label_5star" class="star-5"></label>
			<span></span>
		</div> <!-- .stars -->
	</div> <!-- #ratingsForm -->
	
	
	
	<div class="switch">
		<div class="overlay-inner">
			
			<a class="trigger-overlay close menu-overlay" style="display: none"><span>Close</span><img width="25px" src="<?php bloginfo('template_url') ?>/images/closex.png"/></a>
			<h2><span class="lrg-bracket">[</span>GIVE US <strong>FEEDBACK</strong><span class="lrg-bracket">]</span></h2>
			
			<div  class="gform-wrap" style="display: none">
				<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
			</div><!-- .gform-wrap -->
			
			<div class="review_links" style="display: none;">
				<div class="review-sites">
					<a href="https://www.facebook.com/botosushi/reviews" target="_blank" onclick="ga('send', 'event', 'star', 'click', 'facebook link');"><img src="//botosushi.com/wp-content/themes/botosushi/images/facebook.png"/></a>	
					<a href="https://plus.google.com/106973377281835402668/about" target="_blank" onclick="ga('send', 'event', 'star', 'click', 'google link');"><img src="//botosushi.com/wp-content/themes/botosushi/images/google-plus.png"/></a>	
					<a href="http://www.yelp.com/biz/boto-sushi-san-diego-4" target="_blank" onclick="ga('send', 'event', 'star', 'click', 'yelp link');"><img src="//botosushi.com/wp-content/themes/botosushi/images/yelp.png"/></a>
				</div><!-- .review-sites -->
			</div><!-- .review_links -->
		
		</div><!-- .overlay-inner -->
	</div><!-- .switch -->
	
</div>

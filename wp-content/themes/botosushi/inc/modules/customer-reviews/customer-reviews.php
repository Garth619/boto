<div id="customer_reviews" class="clearfix">
	<h2><span class="lrg-bracket">[</span>CUSTOMER <strong>REVIEWS</strong><span class="lrg-bracket">]</span></h2>
	<div class="user_profile_image">
		<img src="<?php bloginfo('template_url') ?>/images/yelpuser-1.jpg"/>
	</div>
	<p>
		I can't say enough good things about this new establishment...the sushi is perfectly filled with various flavors that just burst in your mouth with every bite!<br>
    -Jessica T. <a class="yelp-review" href="http://www.yelp.com/biz/boto-sushi-san-diego-4?hrid=ZNQL6O1-OEAnRUPcFewaMQ" target="_blank">| read the rest on <img src="<?php bloginfo('template_url') ?>/images/Yelp_Logo_No_Outline_Color-1.jpg"/></a> <br>
		<img style="margin-top: 10px;" src="<?php bloginfo('template_url') ?>/images/placeholder-stars-5.png"/>
	</p>
	<div class="user_profile_image">
		<img src="<?php bloginfo('template_url') ?>/images/yelpuser-2.jpg"/>
	</div>
	<p>
		Best sushi we have had in San Diego county. The fish melts in your mouth! It's incredibly fresh. Fast, and friendly service.<br>
		-Sydney N. <a class="yelp-review" href="http://www.yelp.com/biz/boto-sushi-san-diego-4?hrid=NNe4q8ibBIQhjT9es5zEwg" target="_blank">| read the rest on <img src="<?php bloginfo('template_url') ?>/images/Yelp_Logo_No_Outline_Color-1.jpg"/></a><br>
		<img style="margin-top: 10px;" src="<?php bloginfo('template_url') ?>/images/placeholder-stars-5.png"/>
	</p>
	<div class="hand-pointer">
		<a href="#" class="trigger-overlay"><img src="<?php bloginfo('template_url') ?>/images/haveacoment.png"/></a>
	</div>
	
	<div class="switch">
		<div class="overlay-inner">
			
			<h2><span class="lrg-bracket">[</span>CUSTOMER <strong>REVIEWS</strong><span class="lrg-bracket">]</span></h2>
			<div id="ratingsForm" >
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
			<a class="trigger-overlay close menu-overlay" style="display: none"><span>Close</span><img width="25px" src="<?php bloginfo('template_url') ?>/images/closex.png"/></a>
			<div  class="gform-wrap" style="display: none">
				<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
			</div><!-- .gform-wrap -->
			
			<div class="review_links" style="display: none;">
				<div class="review-sites">
					<a href="https://www.facebook.com/botosushi/reviews" target="_blank" onclick="ga('send', 'event', 'star', 'click', 'facebook link');"><img src="http://botosushi.com/wp-content/themes/botosushi/images/facebook.png"/></a>	
					<a href="https://plus.google.com/116023339522191445801/about" target="_blank" onclick="ga('send', 'event', 'star', 'click', 'google link');"><img src="http://botosushi.com/wp-content/themes/botosushi/images/google-plus.png"/></a>	
					<a href="http://www.yelp.com/biz/boto-sushi-san-diego-4" target="_blank" onclick="ga('send', 'event', 'star', 'click', 'yelp link');"><img src="http://botosushi.com/wp-content/themes/botosushi/images/yelp.png"/></a>
				</div><!-- .review-sites -->
			</div><!-- .review_links -->
		</div><!-- .overlay-inner -->
	</div><!-- .switch -->
</div>

<div id="meetchef" class="clearfix">
	<h2><span class="lrg-bracket">[</span>MEET THE <strong>CHEFS</strong><span class="lrg-bracket">]</span></h2>
<!--
	<div class="one-fourth module-inner">
		<img src="<?php bloginfo('template_url') ?>/images/chef1.png"/>
		<div class="meta">NAME<br><a href="#">READ BIO</a></div>
	</div>
	<div class="one-fourth module-inner">
		<img src="<?php bloginfo('template_url') ?>/images/chef2.png"/>
		<div class="meta">NAME<br><a href="#">READ BIO</a></div>
	</div>
	<div class="one-fourth module-inner">
		<img src="<?php bloginfo('template_url') ?>/images/chef3.png"/>
		<div class="meta">NAME<br><a href="#">READ BIO</a></div>
	</div>
	<div class="one-fourth module-inner">
		<img src="<?php bloginfo('template_url') ?>/images/chef4.png"/>
		<div class="meta">NAME<br><a href="#">READ BIO</a></div>
	</div>
-->

  	<!--
<?php if(get_field('meet_the_chefs')): ?>
  	
  		<?php while(the_repeater_field('meet_the_chefs')): ?>
  		<?php $image_main_slider = wp_get_attachment_image_src(get_sub_field('chef_image'), 'thumbnail');?>
  		<div class="one-fourth module-inner">
  			<img src="<?php echo $image_main_slider[0]; ?>"/>
				<div class="meta"><?php the_sub_field('chef_name') ?><br><a href="#">READ BIO</a></div>
			</div>
  		<?php endwhile; ?>
  	
  	<?php endif; ?>
-->
  	
  	<?php if( have_rows('meet_the_chefs') ): $i = 0; ?>
			<div class="repeater_loop1">
			<?php while( have_rows('meet_the_chefs') ): the_row(); $i++; ?>
				<div class="subfield">
					<?php $image_main_slider = wp_get_attachment_image_src(get_sub_field('chef_image'), 'thumbnail');?>
  				<div class="one-fourth module-inner">
  					<img class="chef-profile" src="<?php echo $image_main_slider[0]; ?>"/>
						<div class="meta"><?php the_sub_field('chef_name') ?><br><a href="#" class="trigger-overlay <?php echo $i; ?>">READ BIO</a></div>
					</div>
				</div>
			<?php endwhile; ?>
			</div>
		<?php endif; ?>

	
		<div class="switch">
		<div class="overlay-inner">
			<div><a class="trigger-overlay close menu-overlay" style="display: none"><span>Close</span><img width="25px" src="<?php bloginfo('template_url') ?>/images/closex.png"/></a></div>
			<h2><span class="lrg-bracket">[</span>MEET THE <strong>CHEFS</strong><span class="lrg-bracket">]</span></h2>

			 <?php if( have_rows('meet_the_chefs') ): $i = 0; ?>
			<div class="repeater_loop1 clearfix">
			<?php while( have_rows('meet_the_chefs') ): the_row(); $i++; ?>
				<div class="chef <?php echo $i; ?>" style="display:none">
					<?php $image_main_slider = wp_get_attachment_image_src(get_sub_field('chef_image'), 'thumbnail');?>
  					<img class="chef-profile" src="<?php echo $image_main_slider[0]; ?>"/>
  					<h2><?php the_sub_field('chef_name') ?></h2>
						<div class="chef-bio" >
					<?php the_sub_field('chef_bio') ?>
					</div>
				</div>
			<?php endwhile; ?>
			</div>
		<?php endif; ?>
		
		
			
		</div><!-- .overlay-inner -->
	</div><!-- .switch -->
	
</div><!-- #meetchef -->

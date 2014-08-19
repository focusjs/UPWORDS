<?php 
/* Page Name: product page  */ 
?>

<div class="product-page">
	<div class="payby">
		<span>FEATURED Mini Card of the day &nbsp;</span>&nbsp; | &nbsp;&nbsp;<span>&nbsp;We accept these payment methods:&nbsp;&nbsp;&nbsp;</span> 
		<img style="padding-bottom: 10px;" src="<?php echo get_template_directory_uri(); ?>/images/pay_logo.png" width="" height=""/>
	</div>
	<div class="product-container clear">
		<div class="product-left left">
			<img style="padding-bottom: 10px;" src="<?php echo content_url('uploads/2014/08/overcome2_large.jpg'); ?>" width="255px" height="170px"/>
			<p>OVERCOME</p>
			<div class="text">Life has valley experiences for all of us and this card is perfect to let someone know that they're going to come through this time.</div>
			<br/>
			<a href="<?php echo get_site_url();?>/overcome">>>see complete product details</a>
			<a href="http://localhost/upwork/overcome/" class="shop-now" id="shop-now-button"></a>
		</div>
		<div class="product-right left">
			<img src="<?php echo get_template_directory_uri(); ?>/images/prduct748x484.png" width="700" height="482"/>
		</div>
	</div>
	<div class="product-list">
		<div class="top clear">
			<div class="title left">
				<span class="text-title">Our product line of MINI Cards</span><br/>
				<span class="text-title2">We make the card selection easy so you can maximize real time relationships.</span>
			</div>
			<div class="social right">
				<div class="social-full">
					<a class="twitter" href="#"></a>
					<a class="facebook" href="#"></a>
					<a class="linkin" href="#"></a>
					<a class="youtube" href="#"></a>
				</div>
			</div>
		</div>
		
		<div class="products clear">
			<?php
			if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
						<?php dynamic_sidebar( 'sidebar-3' ); ?>
			<?php endif; ?>
		</div>
		
	</div>
</div>

<div class="line-main"></div>
<div class="control-footer clear">
	<div class="product-blog-left left">
		<div class="the_nabar_footer nabar_footer-top">
			<ul class="menu-item clear">
				<li class="subscribe myriad-pro-bold-condensed right">UP Newsletter<br/><a href="#">Subscribe here...</a></li>
			</ul>
		</div>
		<p class="last-post-title">Latest POSTS</p>
		<div class="post-blog-container">
			<?php
				$in_cats = "blog";
				$strQuery = array( 'posts_per_page' => 5, 'category_name' => $in_cats, 'orderby' => 'date', 'order' => 'ASC');
				$the_query = new WP_Query( $strQuery );
				$index = 0;
				$post_count = $the_query->post_count;
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					$the_ID = get_the_ID();
			?>
			<div class="post-<?php echo $the_ID;?>" >
				<div class="date-time myriad-pro-regular"><?php  echo get_the_date(); ?></div>
				<div class="post-title myriad-pro-semibold"><?php the_title(); ?> </div>
				<div class="post-content"><?php the_excerpt();?></div>
				<div class="entry-readmore">
					<a href="<?php echo esc_url( home_url( '/' ) ) . 'blog/#post-'. $the_ID; ?>" class="readmore">>>read more</a>
				</div>
				<?php 
					$index = $index + 1;
					if($post_count > $index) {
						echo '<div class="post-line">..............................................................................................</div>';
					}
				?>
			</div>
			<?php
			}
			wp_reset_postdata();
			?>
		</div>
		
		
		<div class="the_nabar_footer" style="width: 657px;">
		<ul class="menu-item clear">
			<?php
				$pages = get_upall_pages();
				foreach ($pages as $key => $value) {
					$clazz = $key;
					if($key === $GLOBALS["pageid"]) {
						$clazz .= " select";
					}
					if($key !== 'contact') {
						$clazz .= " border";
					}
					
					if($key === 'home') {$key = '';}
					echo '<li class="'.$clazz.' myriad-pro-bold-condensed left"><a href="' . esc_url( home_url( '/' ) ) . $key . '">' . $value . '</a></li>';
				}
			?>
		</ul>
	</div>
	<div class="sub-footer clear" style="width: 657px; min-height: 115px; padding: 30px 0px 0px 0px">
		<div class="copyright myriad-pro-regular left"> Copyright © 2014 UPwords. All Rights Reserved. All prices USD.</div>
		<div class="social right">
			<div class="social-full">
				<a class="twitter" target="_blank" href="https://twitter.com/allupwords"></a>
				<a class="facebook" target="_blank" href="https://www.facebook.com/pages/UPwords-LLC/424754280988379?hc_location=stream"></a>
				<a class="linkin" target="_blank" href="http://www.linkedin.com/in/weaversydney"></a>
				<a class="youtube" target="_blank" href="#"></a>
			</div>
		</div>
	</div>
		
	</div>
	<div class="product-logo-right left">
		<div class="logo"></div>
		<img src="<?php echo content_url('themes/twentythirteen/images/up_logo_footer.png'); ?>" />
	</div>
</div>

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
		
		<div class="blog-update" style="padding: 10px; margin-top: 30px; background: #fff; min-height: 300px"></div>
		
	</div>
	
	
	


</div>

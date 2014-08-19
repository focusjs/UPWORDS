<?php 
/* Page Name: about page  */ 
?>

<div class="about-page">
	<div class="image-top">
		<img src="<?php echo get_template_directory_uri(); ?>/images/the_girl1.jpg" height="312px"/>
		<img src="<?php echo get_template_directory_uri(); ?>/images/the_girl2.jpg" height="312px"/>
		<img src="<?php echo get_template_directory_uri(); ?>/images/the_girl3.jpg" height="312px"/>
	</div>
	<div class="about-container clear">
		<div class="image-container left">
			<div class="img-about">
				<img src="<?php echo get_template_directory_uri(); ?>/images/about_public.jpg" width="267px"/>
				<img src="<?php echo get_template_directory_uri(); ?>/images/about_love.jpg" width="267px"/>
				<img src="<?php echo get_template_directory_uri(); ?>/images/about_joy.jpg" width="267px"/>
				<img src="<?php echo get_template_directory_uri(); ?>/images/about_Couple.jpg" width="267px"/>
			</div>
			<div class="shop">
				<img src="<?php echo get_template_directory_uri(); ?>/images/about_assort.jpg" width="267px"/>
				<a class="shop-now" href="#"></a>
			</div>
		</div>
		<div class="about-content left">
			<p class="the-excerpt">"<span class="myriad-pro-semibold">UPwords</span> <span class="myriad-pro-regular">came about with the simple idea of touching lives face to face."</span></p>
			<?php 
				$post_57 = get_post(57); 
			?>
			<p class="the-excerpt myriad-pro-regular"><?php echo $post_57->post_excerpt; ?></p>
			<p class="the-title myriad-pro-bold"><?php echo $post_57->post_title; ?></p>
			<div class="the-content"><?php echo $post_57->post_content; ?></div>
			
			<div class="social clear">
				<div class="social-network right">
					<a class="twitter" href="#"></a>
					<a class="facebook" href="#"></a>
					<a class="youtube" href="#"></a>
				</div>
			</div>
			<div class="the_nabar_footer">
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
			
		</div>
	</div>
</div>

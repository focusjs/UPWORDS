<?php 
/* Page Name: life page  */ 
?>

<div class="life-page" id="life-page">
	<div class="the_world">
		<div class="top-text"><span>WORLDWIDE WE'VE</span><br/><span>TOUCHED PEOPLE'S LIVES</span></div>
		<div class="note note1"><div class="text"><div class="text1">"Live & Love across the world"</div><div class="text2">MARK DAVIS, Phoenix, AR</div></div></div>
		<div class="note note2"><div class="text"><div class="text1">"Live & Love across the world"</div><div class="text2">MARK DAVIS, Phoenix, AR</div></div></div>
		<div class="note note3"><div class="text"><div class="text1">"Live & Love across the world"</div><div class="text2">MARK DAVIS, Phoenix, AR</div></div></div>
		<div class="note note4"><div class="text"><div class="text1">"Live & Love across the world"</div><div class="text2">MARK DAVIS, Phoenix, AR</div></div></div>
		<div class="note note5"><div class="text"><div class="text1">"Live & Love across the world"</div><div class="text2">MARK DAVIS, Phoenix, AR</div></div></div>
		<div class="note note6"><div class="text"><div class="text1">"Live & Love across the world"</div><div class="text2">MARK DAVIS, Phoenix, AR</div></div></div>
		<div class="note note7"><div class="text"><div class="text1">"Live & Love across the world"</div><div class="text2">MARK DAVIS, Phoenix, AR</div></div></div>
	</div>
	<div class="clear">
		<div class="life-left left"></div>
		<div class="life-content left">
			<?php 
				$post_74 = get_post(74); 
			?>
			<p class="the-title myriad-pro-bold"><?php echo $post_74->post_title; ?></p>
			<p class="the-excerpt myriad-pro-regular"><?php echo $post_74->post_content;?></p>
			<div class="post-life-container clear">
				<?php
				  $in_cats = "life";
					$strQuery = array( 'posts_per_page' => 10, 'category_name' => $in_cats, 'post__not_in' => array(74), 'orderby' => 'date', 'order' => 'ASC');
					$the_query = new WP_Query( $strQuery );
					$index = 0;
					$post_count = $the_query->post_count;
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						$the_ID = get_the_ID();
				?>
					<div class="post left" id="post-<?php echo $the_ID;?>" data-index="<?php echo $index;?>">
						<?php  if($index !== 4) { ?>
						<img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $the_ID ), 'large' )[0];?>" width="215px" height="215px"/>
						<div class="hidden-text myriad-pro-regular clear"><?php the_content(); ?>
							<div class="title-text right myriad-pro-bold"><?php the_title(); ?></div>
						</div>
						<?php } else { ?>
							<div class="text myriad-pro-bold clear"><?php the_content(); ?><div class="title-text right"><?php the_title(); ?></div></div>
						<?php } ?>
						
					</div>
				<?php
					$index = $index + 1;
					}
				wp_reset_postdata();
				?>
			</div>
			<p></p>
			<div class="social clear">
				<div class="social-network2 right">
					<a class="twitter" target="_blank" href="https://twitter.com/allupwords"></a>
					<a class="facebook" target="_blank" href="https://www.facebook.com/pages/UPwords-LLC/424754280988379?hc_location=stream"></a>
					<a class="linkin" target="_blank" href="http://www.linkedin.com/in/weaversydney"></a>
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
			<p></p>
			
		</div>
	</div>
</div>

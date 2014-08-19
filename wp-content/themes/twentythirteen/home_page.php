<?php 
/* Page Name: home page  */ 
?>

<div class="home-container clear">
	<div class="left-container left">
		<div class="top-text clear">
			<p><strong>All Occassion Mini Cards</strong></p>
			<p class="excerpt" id="post-excerpt">Our greeting card selection is a celebration of life in the fun written form and goes on a bit more to say... </p>
			<a href="#" class="read-more right">More ></a>
		</div>
		<div class="card-img">
			<p>&lt; Scroll our line of cards &gt;</p>
			<img id="post-img" src="<?php echo get_site_url();?>/wp-content/uploads/2014/08/love2_large.jpg" width="254px"/>
		</div>
		<div class="shop-card">
			<p>Check out Upword's collection of cards/envelopes and:</p>
			<a href="#" class="shop-now" id="shop-now-button"></a>
			<p>FREE Shipping with all orders!</p>
		</div>
	</div>
	<div class="right-container left">
		<div class="album-container">
			<ul class="slider-container slider clear">
				<?php
				  $in_cats = "shop,home";
					$strQuery = array( 'posts_per_page' => 25, 'category_name' => $in_cats, 'orderby' => 'date', 'order' => 'ASC');
					$the_query = new WP_Query( $strQuery );
					$index = 1; $idActive = "";
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						$the_ID = get_the_ID();
						$the_clazz = "item-slider";
						if($index === 1) {
							$the_clazz .= " active-item";
							$idActive = $the_ID;
						}
				?>
				
				<li class="<?php echo $the_clazz;?>" id="sliderItem<?php echo $index;?>">
					<div class="cover">
						<a class="post-link" href="<?php echo get_permalink(); ?>" rel="bookmark">
							<img src="<?php echo get_post_field('img_url', $the_ID); ?>" alt="<?php the_title(); ?>" width="688px" height="570px">
						</a>
					</div>
					<div id="info-hidden-<?php echo $idActive;?>" 
					    data-link="<?php echo get_permalink();?>"
							data-img="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $the_ID ), 'large' )[0];?>" class="info-hidden" style="display:none"></div>
					<div class="content-hidden" id="content-hidden-<?php echo $idActive;?>" style="display:none"><?php the_excerpt(); ?></div>
				</li>
				<?php
					 $index = $index + 1;
				}
				wp_reset_postdata();
				?>
			</ul>
			<a class="browse previous" data-index="previous" href="#" title="Previous">Previous</a>
			<a class="browse next" data-index="next" href="#" title="Next">Next</a>
			
			<script type="text/javascript">
				var info = jQuery('#info-hidden-<?php echo $idActive;?>');
				jQuery('#post-img').attr('src', info.attr('data-img'));
				jQuery('#shop-now-button').attr('href', info.attr('data-link'));
				jQuery('#post-excerpt').text(jQuery('#content-hidden-<?php echo $idActive;?>').text());
			</script>
			
		</div>
	
	</div>
</div>

<div class="footer-home">
	<div class="gray-dot clear">
		<div class="footer-left left">
			<div class="box_container clear">
				<div class="the_box left">
				<?php 
					$page_id = 14; 
					$page_data = get_page( $page_id ); 
				?>
					<div class="page_content">
						<?php echo apply_filters('the_content', $page_data->post_content); ?>
					</div>
					<a class="read-more" href="<?php echo get_page_link($page_id); ?>">Read more...</a>
				</div>
				<div class="the_box left">
				<?php 
					$page_id = 16; 
					$page_data = get_page( $page_id ); 
				?>
					<div class="page_content">
						<?php echo apply_filters('the_content', $page_data->post_content); ?>
					</div>
					<a class="read-more" href="<?php echo get_page_link($page_id); ?>">Read more...</a>
				</div>
			</div>
			<div class="the_nabar_footer">
				<ul class="menu-item clear">
					<?php
						$pages = get_upall_pages(); $subscribe = "";
					  foreach ($pages as $key => $value) {
							$clazz = $key;
							if($key === $GLOBALS["pageid"]) {
								$clazz .= " select";
							}
							if($key !== 'contact') {
								$clazz .= " border";
							} else {
								$subscribe = '<li class="subscribe myriad-pro-bold-condensed right">UP Newsletter<br/><a href="#">Subscribe here...</a></li>';
							}
							
							if($key === 'home') {$key = '';}
							echo '<li class="'.$clazz.' myriad-pro-bold-condensed left"><a href="' . esc_url( home_url( '/' ) ) . $key . '">' . $value . '</a></li>'.$subscribe;
							
						}
					?>
				</ul>
			</div>
		</div>
		<div class="footer-right left">
			<div class="footer-logo"></div>
			<p><span class="text">A short message here would <br/>be a way  to emphasis:</span>
				 <br/><span><strong>Tell stories that matter.</strong></span>
			</p>
			<div class="social-network">
				<a class="twitter" target="_blank" href="https://twitter.com/allupwords"></a>
				<a class="facebook" target="_blank" href="https://www.facebook.com/pages/UPwords-LLC/424754280988379?hc_location=stream"></a>
				<a class="youtube" target="_blank" href="#"></a>
			</div>
		</div>
	</div>
</div>



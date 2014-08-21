<?php 
/* Page Name: causes page  */ 
?>

<div class="causes-page">
	<div class="page-title">CAUSES</div>
	<div class="causes-container">
		<?php
			$in_cats = "causes";
			$strQuery = array( 'posts_per_page' => 10, 'category_name' => $in_cats, 'orderby' => 'date', 'order' => 'ASC');
			$the_query = new WP_Query( $strQuery );
			$index = 0;
			$post_count = $the_query->post_count;
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				$the_ID = get_the_ID();
		?>
			<div class="post clear" id="post-<?php echo $the_ID;?>" data-index="<?php echo $index;?>">
				<div class="post-info left">
					<div class="title-text myriad-pro-bold"><?php the_title(); ?></div>
					<div class="content-text myriad-pro-regular"><?php the_content(); ?></div>
				</div>
				<div class="post-image left">
					<img src="<?php $arr_img = wp_get_attachment_image_src( get_post_thumbnail_id( $the_ID ), 'large' ); echo $arr_img[0];?>" width="215px" height="215px"/>
				</div>
			</div>
		<?php
				$index = $index + 1;
				if($index < $post_count)  {
					echo '<div class="post-line"></div>';
				}
			}
		wp_reset_postdata();
		?>
	</div>
</div>
<div class="line-main"></div>
<div class="control-footer">
	<div class="the_nabar_footer" style="width: 657px;">
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

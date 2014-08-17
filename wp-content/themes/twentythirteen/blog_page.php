<?php 
/* Page Name: blog page  */ 
?>

<div class="blog-page clear">
	<div class="blog-left left"></div>
	<div class="blog-content left">
		<div class="blog-title">NEWS AROUND US</div>
			<div class="post-container">
				<?php
				  $in_cats = "blog";
					$strQuery = array( 'posts_per_page' => 10, 'category_name' => $in_cats, 'orderby' => 'date', 'order' => 'ASC');
					$the_query = new WP_Query( $strQuery );
					$index = 0;
					$post_count = $the_query->post_count;
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						$the_ID = get_the_ID();
				?>
				<div class="post-<?php echo $the_ID;?>" >
					<div class="date-time myriad-pro-regular">	<?php  echo get_the_date(); ?></div>
					<div class="post-title myriad-pro-semibold"><?php the_title(); ?> </div>
					<div class="post-content myriad-pro-regular"><?php $content= trim(get_the_content()); echo $content; ?></div>
					<div class="text-note myriad-pro-semibold"><?php $text = get_the_excerpt(); if($text == '') {$text = '"Be the UP in someone\'s life today!"';} echo $text; ?></div>
					<div class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-meta -->
					<?php 
						$index = $index + 1;
						if($post_count > $index) {
							echo '<div class="post-line myriad-pro-bold-condensed">..........  ..........  ..........  ..........  ..........</div>';
						}
					?>
				</div>
				<?php
				}
				wp_reset_postdata();
				?>
			</div>
		
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

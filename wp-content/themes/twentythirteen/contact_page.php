<?php 
/* Page Name: contact page  */ 
?>

<div class="contact-page">
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" class="contact-post">
					<header class="contact-header">
						<div class="contact-title page-title"><?php the_title(); ?></div>
					</header><!-- .contact-header -->
					<div class="contact-content">
						<?php the_content(); ?>
					</div><!-- .contact-content -->
					<footer class="contact-meta clear" style="padding-right: 20px">
						<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link right">', '</span>' ); ?>
					</footer><!-- .contact-meta -->
				</article><!-- #post -->

			<?php endwhile; ?>
			
			<div class="footer-logo"></div>
			
		</div><!-- #content -->
	</div><!-- #primary -->
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
				<a class="twitter" href="#"></a>
				<a class="facebook" href="#"></a>
				<a class="linkin" href="#"></a>
				<a class="youtube" href="#"></a>
			</div>
		</div>
	</div>
</div>

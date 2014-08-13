	<header id="masthead" class="main-banner" role="banner">
			<div id="top-navbar" class="top-navbar clear">
				<div class="right-navbar right clear">
					<ul class="navbar-item left">
						<li><a href=""> Log In </a>
						<li>|</li><li><a href="">  View Cart  </a>
						<li>|</li><li><a href="">  Check Out </a>
						<li>|</li><li><a href="">  Shipping</a>
					</ul>
					<div class="search left"><?php get_search_form(); ?></div>
				</div>
			</div><!-- #navbar -->
			
			<div class="banner clear">
				<div class="main-logo left">
					<a class="logo-image" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"></a>
				</div>
				<div class="right-logo right clear">
					<?php get_text_banner($GLOBALS["pageid"]); ?>
				</div>
			</div>
			
		 <div id="main-menu">
				<ul class="menu-item clear">
					<?php
						$pages = get_upall_pages();
					  foreach ($pages as $key => $value) {
							$clazz = $key;
							if($key === $GLOBALS["pageid"]) {
								$clazz .= " select";
							}
							if($key === 'home') {$key = '';}
							echo '<li class="'.$clazz.'"><a href="' . esc_url( home_url( '/' ) ) . $key . '">' . $value . '</a></li>';
						}
					?>
				</ul>
		 </div>
		 <div class="line-main"><span></span></div>
	</header><!-- #masthead -->

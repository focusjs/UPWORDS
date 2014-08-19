	<header id="masthead" class="main-banner" role="banner">
			<div id="top-navbar" class="top-navbar clear">
				<div class="right-navbar right clear">
					<ul class="navbar-item left">
						<?php
						  $pg = $GLOBALS["pageid"]; if ($pg === 'home') {$pg = '';} else {$pg .= '/';}
							$redirect_to = esc_url( home_url( '/'.$pg) );
							$redirect_to = str_replace(':', '%3A', $redirect_to );
							$redirect_to = str_replace('/', '%2F', $redirect_to );
							$login = esc_url( home_url( '/wp-login.php') );
							
							$text = "Log In";
							if ( is_user_logged_in() ) {
								$text = "Log Out";
								$login .= '?action=logout&';
							} else {
								$login .= '?';
							}
							$login .= 'redirect_to='.$redirect_to;
							$link = '<a href="'. $login .'">'. $text .'</a>';
						?>
						
						
						<li><?php echo $link; ?>
						<li>|</li><li><a href="<?php echo esc_url( home_url( '/' ) ); ?>product/">  View Cart  </a>
						<?php if (! is_user_logged_in() ) { ?>
						<li>|</li><li><a href="<?php echo esc_url( home_url( '/wp-login.php') ).'?action=register';?>">  Check Out </a>
						<?php } ?>
						<li>|</li><li><a href="#">  Shipping</a>
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

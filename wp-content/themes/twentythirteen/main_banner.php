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
					<li class="shop select"><a href="<?php echo esc_url( home_url( '/' ) ); ?>shop"> Shop </a></li>
					<li class="life"><a href="<?php echo esc_url( home_url( '/' ) ); ?>life"> Life Stories </a></li>
					<li class="about"><a href="<?php echo esc_url( home_url( '/' ) ); ?>about"> About </a></li>
					<li class="causes"><a href="<?php echo esc_url( home_url( '/' ) ); ?>causes"> Causes </a></li>
					<li class="blog"><a href="<?php echo esc_url( home_url( '/' ) ); ?>blog"> Blog </a></li>
					<li class="contact"><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact"> Contact </a></li>
				</ul>
		 </div>
		 <div class="line-main"><span></span></div>
	</header><!-- #masthead -->

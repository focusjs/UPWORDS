	<header id="masthead" class="sub-banner" role="banner">
		<div class="top-banner-container clear">
			<div class="sub-logo left">
				<a class="logo-image" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"></a>
			</div>
			<div class="sub-menu left">
				<div class="menu-item clear">
					<?php
					  $pages = get_upall_pages();
					  $pages['home'] = 'Home'; $i = 0;
					  foreach ($pages as $key => $value) {
							if($i%2 === 0) { echo '<div class="grop-item left">';}
							$clazz = $key;
							if($key === $GLOBALS["pageid"]) {
								$clazz .= " select";
							}
							if($key === 'home') {$key = '';}
							echo '<div class="'.$clazz.'"><a href="' . esc_url( home_url( '/' ) ) . $key . '">' . $value . '</a></div>';
							if($i%2 === 0) { echo '<div class="line-item"></div>';}
							$i = $i + 1;
							if($i%2 === 0) { echo '</div>';}
						}
					?>
				</div>
			</div>
		</div>
	</header>

<?php

/**
 * Default Header Style
 */
function buscon_default_header() {
    if ( has_nav_menu( 'main-menu' ) ) {
        $no_menu_class = '';
    } else {
        $no_menu_class = 'no-menu ';
    }

    ?>
	<header class="txa-header-main-3-area tx-header tx-DefaultHeader <?php echo esc_attr($no_menu_class); ?>">
		<div class="container txa-container-2">
			<div class="txa-header-main-3-wrap">

				<!-- top-logo-wrap -->
				<div class="logo-wrap mb-10">
					<?php function_exists( 'buscon_header_logo' ) ? buscon_header_logo() : '';?>
					<div class="mobile-menu-btn-2" id="menuToggle">
						<i class="fas fa-th-large"></i>
					</div>
				</div>

				<!-- bottom-menu-wrap -->
				<div class="menu-wrap">

					<nav class="main-navigation clearfix ul-li d-none d-lg-block">
						<?php function_exists( 'buscon_header_menu' ) ? buscon_header_menu( 'main-menu' ) : null;?>
					</nav>

				</div>
			</div>
		</div>
	</header>

	<div class="fullpage-menu">
		<div class="fullpage-menu-inner">
			<div class="menu-bg">
				<span class="span1"></span>
				<span class="span2"></span>
				<span class="span3"></span>
			</div>

			<div class="fullpage-menu-logo-wrap">
				<?php function_exists( 'buscon_side_info_logo' ) ? buscon_side_info_logo() : '';?>
				<i id="menuToggle2" class="fas fullpage-menu-close fa-times"></i>
			</div>
			<!-- mobile-menu-list -->
			<nav class="mobile-main-navigation  clearfix ul-li">
				<?php function_exists( 'buscon_header_menu' ) ? buscon_header_menu( 'main-menu' ) : null;?>
			</nav>
		</div>
	</div>

    <?php
}

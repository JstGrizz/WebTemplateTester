<?php

// DEFINE CONSTANTS
define( 'BUSCON_THEME_DIR', get_template_directory() );
define( 'BUSCON_THEME_URI', get_template_directory_uri() );
define( 'BUSCON_THEME_CSS_DIR', BUSCON_THEME_URI . '/assets/css/' );
define( 'BUSCON_THEME_JS_DIR', BUSCON_THEME_URI . '/assets/js/' );
define( 'BUSCON_THEME_INC', BUSCON_THEME_DIR . '/inc/' );
define( 'BUSCON_CORE_PLUG_DIR', plugins_url( 'buscon-core/assets/' ) );
define( 'BUSCON_CORE', in_array( 'buscon-core/buscon-core.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) );

// INCLUDE CS FRAMEWORK FILE
require BUSCON_THEME_INC . 'csf-functions.php';

if ( !defined( 'BUSCON_WOOCOMMERCE_ACTIVED' ) ) {
    define( 'BUSCON_WOOCOMMERCE_ACTIVED', in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) );
}

if ( site_url() == "https://themexriver.com/wp/buscon" OR site_url() == 'http://localhost:10089' ) {
    define( 'VERSION', time() );
} else {
    define( 'VERSION', wp_get_theme()->get( 'Version' ) );
}

if ( BUSCON_WOOCOMMERCE_ACTIVED ) {
    /**
     * Remove Action Hook
     */
    function buscon_woo_theme_init(){
        $buscon_exlude_hooks = require BUSCON_THEME_INC . 'woocommerce/woo-actions.php';
        foreach( $buscon_exlude_hooks as $k => $v )
        {
            foreach( $v as $value )
            remove_action( $k, $value[0], $value[1] );
        }

    }
    add_action( 'init', 'buscon_woo_theme_init');
}

// INCLUDE BUSCON AFTER SETUP
require BUSCON_THEME_INC . 'buscon-after-setup.php';

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function buscon_content_width() {
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters( 'buscon_content_width', 640 );
}
add_action( 'after_setup_theme', 'buscon_content_width', 0 );

// INCLUDE BUSCON REGISTER WIDGETS
require BUSCON_THEME_INC . 'buscon-register-widgets.php';

// INCLUDE BUSCON ENQUEUE SCRIPTS
require BUSCON_THEME_INC . 'buscon-enqueue-scripts.php';

// INCLUDE CUSTOM HEADER
require BUSCON_THEME_INC . 'custom-header.php';

// INCLUDE CUSTOM FUNCTIONS FILE
require BUSCON_THEME_INC . 'buscon-functions.php';

// INCLUDE CUSTOM CSS
require BUSCON_THEME_INC . 'buscon-custom-css.php';

// INCLUDE DEFAULT COMMENT
require BUSCON_THEME_INC . 'buscon-comment.php';

// INCLUDE LOGO FILE
require BUSCON_THEME_INC . 'layouts/buscon-logos.php';

// INCLUDE MENU FILE
require BUSCON_THEME_INC . 'layouts/buscon-menus.php';

// INCLUDE DEFAULT BREADCRUMB
require BUSCON_THEME_INC . 'layouts/buscon-breadcrumb.php';

// INCLUDE ALL ACTION FILE
require BUSCON_THEME_INC . 'layouts/buscon-actions.php';

// INCLUDE DEFAULT HEADER
require BUSCON_THEME_INC . 'layouts/buscon-default-header.php';

// INCLUDE FOOTER FILE
require BUSCON_THEME_INC . 'layouts/buscon-default-footer.php';

// INCLUDE SEARCH WIDGET FILE
require BUSCON_THEME_INC . 'buscon-search-widget.php';

// LOAD JETPACK COMPATIBILITY FILE
if ( defined( 'JETPACK__VERSION' ) ) {
    require BUSCON_THEME_INC . 'jetpack.php';
}

// ALL CLASS FILE
include_once BUSCON_THEME_INC . 'classes/class-buscon-helper.php';
require_once BUSCON_THEME_INC . 'classes/class-breadcrumb.php';
require_once BUSCON_THEME_INC . 'classes/class-navwalker.php';
require_once BUSCON_THEME_INC . 'classes/class-tgm-plugin-activation.php';
require_once BUSCON_THEME_INC . 'required-plugin.php';
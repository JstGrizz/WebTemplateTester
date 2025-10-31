<?php

/**
 * buscon_scripts description
 * @return [type] [description]
 */
function buscon_scripts() {

    wp_enqueue_style( 'buscon-fonts', buscon_fonts_url(), [], null );
    wp_enqueue_style( 'bootstrap-min', BUSCON_THEME_CSS_DIR . 'bootstrap.min.css', [] );
    wp_enqueue_style( 'fontawesome-min', BUSCON_THEME_CSS_DIR . 'fontawesome.min.css', [] );
    wp_enqueue_style( 'odometer-min', BUSCON_THEME_CSS_DIR . 'odometer.min.css', [], VERSION );
    wp_enqueue_style( 'flaticon_buscon', BUSCON_THEME_CSS_DIR . 'flaticon_buscon.css', [] );
    wp_enqueue_style( 'flaticon_txa_b_icon', BUSCON_THEME_CSS_DIR . 'flaticon_txa-b-icon.css', [] );
    wp_enqueue_style( 'animate', BUSCON_THEME_CSS_DIR . 'animate.css', [], VERSION );
    wp_enqueue_style( 'magnific-popup', BUSCON_THEME_CSS_DIR . 'magnific-popup.css', [], VERSION );
    wp_enqueue_style( 'swiper-min', BUSCON_THEME_CSS_DIR . 'swiper.min.css', [], VERSION );
    wp_enqueue_style( 'nice-select-min', BUSCON_THEME_CSS_DIR . 'nice-select.min.css', [], VERSION );
    wp_enqueue_style( 'buscon-core', BUSCON_THEME_CSS_DIR . 'buscon-core.css', [], VERSION );
    wp_enqueue_style( 'buscon-companion', BUSCON_THEME_CSS_DIR . 'buscon-companion.css', [] );
    wp_enqueue_style( 'buscon-custom', BUSCON_THEME_CSS_DIR . 'buscon-custom.css', [] );
    wp_enqueue_style( 'buscon-style', get_stylesheet_uri() );

    if ( class_exists('WooCommerce') ) {
		wp_enqueue_style( 'woocommerce-style', get_template_directory_uri() . '/woocommerce/woocommerce.css' );
	}

    $my_current_lang = apply_filters( 'wpml_current_language', NULL );

    $enable_rtl = cs_get_option( 'enable_rtl', false );
    if ( $my_current_lang != 'en' && $enable_rtl || is_rtl() ) {
        wp_enqueue_style( 'buscon-rtl', BUSCON_THEME_CSS_DIR . 'buscon-rtl.css', [] );
    }

    // all js files
    wp_enqueue_script( 'bootstrap-min', BUSCON_THEME_JS_DIR . 'bootstrap-min.js', ['jquery'], false, true );
    wp_enqueue_script('masonry');
    wp_enqueue_script( 'imagesloaded', ['jquery'], false, true );
    wp_enqueue_script( 'swiper-min', BUSCON_THEME_JS_DIR . 'swiper.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'wow-min', BUSCON_THEME_JS_DIR . 'wow-min.js', ['jquery'], false, true );
    wp_enqueue_script( 'appear-min', BUSCON_THEME_JS_DIR . 'appear.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'odometer-min', BUSCON_THEME_JS_DIR . 'odometer.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'gsap-min', BUSCON_THEME_JS_DIR . 'gsap.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'tweenMax-min', BUSCON_THEME_JS_DIR . 'tweenMax.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'knob-min', BUSCON_THEME_JS_DIR . 'knob.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'magnific-popup-min', BUSCON_THEME_JS_DIR . 'magnific-popup.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'counterup-min', BUSCON_THEME_JS_DIR . 'counterup.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'waypoints-min', BUSCON_THEME_JS_DIR . 'waypoints.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'ScrollTrigger-min', BUSCON_THEME_JS_DIR . 'ScrollTrigger.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'ScrollToPlugin-min', BUSCON_THEME_JS_DIR . 'ScrollToPlugin.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'ScrollSmoother-min', BUSCON_THEME_JS_DIR . 'ScrollSmoother.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'SplitText-min', BUSCON_THEME_JS_DIR . 'SplitText.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'touchspin', BUSCON_THEME_JS_DIR . 'touchspin.js', ['jquery'], false, true );
    wp_enqueue_script( 'jquery-nice-select-min', BUSCON_THEME_JS_DIR . 'jquery-nice-select.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'jquery-marquee-min', BUSCON_THEME_JS_DIR . 'jquery.marquee.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'buscon-custom', BUSCON_THEME_JS_DIR . 'buscon-custom.js', ['jquery'], false, true );

    if ( $my_current_lang != 'en' && $enable_rtl || is_rtl() ) {
        wp_enqueue_script( 'buscon-core-rtl', BUSCON_THEME_JS_DIR . 'buscon-core-rtl.js', ['jquery'], VERSION, true );
    } else {
        wp_enqueue_script( 'buscon-core', BUSCON_THEME_JS_DIR . 'buscon-core.js', ['jquery'], VERSION, true );
    }

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

}
add_action( 'wp_enqueue_scripts', 'buscon_scripts' );
<?php

/**
 *
 * buscon header
 */
function buscon_check_header() {
    $id = get_the_ID();

    if ( get_option( 'page_for_posts' ) ) {
        $id = get_the_ID();
    }
    if ( BUSCON_WOOCOMMERCE_ACTIVED && is_shop() ) {
        $id = get_option( 'woocommerce_shop_page_id' );
    }
    $header_meta = get_post_meta( $id, 'tx_page_meta', true ) ? get_post_meta( $id, 'tx_page_meta', true ) : [];
    $page_header_disable = array_key_exists( 'page_header_disable', $header_meta ) ? $header_meta['page_header_disable'] : false;

    if ( $page_header_disable != true ) {
        Buscon_Helper::buscon_header_template();
    }

}
add_action( 'buscon_header_style', 'buscon_check_header', 10 );

/**
 *
 * buscon footer
 */
function buscon_check_footer() {
    $id = get_the_ID();

    if ( get_option( 'page_for_posts' ) ) {
        $id = get_the_ID();
    }
    if ( BUSCON_WOOCOMMERCE_ACTIVED && is_shop() ) {
        $id = get_option( 'woocommerce_shop_page_id' );
    }

    $footer_meta = get_post_meta( $id, 'tx_page_meta', true ) ? get_post_meta( $id, 'tx_page_meta', true ) : [];
    $page_footer_disable = array_key_exists( 'page_footer_disable', $footer_meta ) ? $footer_meta['page_footer_disable'] : false;

    if ( $page_footer_disable != true ) {
        Buscon_Helper::buscon_footer_template();
    }
}
add_action( 'buscon_footer_style', 'buscon_check_footer', 10 );

// favicon logo
function buscon_favicon_logo_func() {
    $buscon_favicon = cs_get_option( 'tx_favicon', get_template_directory_uri() . '/assets/img/favicon.webp');
    if(isset($buscon_favicon['url'])) {
        $buscon_favicon_url = $buscon_favicon['url'];
    } else {
        $buscon_favicon_url = get_template_directory_uri() . '/assets/img/favicon.webp';
    }
?>
<link rel="shortcut icon" type="image/x-icon" href="<?php print esc_url( $buscon_favicon_url );?>">
<?php
}
add_action( 'wp_head', 'buscon_favicon_logo_func' );
<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 */

function buscon_widgets_init() {

    /**
     * blog sidebar
     */
    register_sidebar( [
        'name'          => esc_html__( 'Blog Sidebar', 'buscon' ),
        'id'            => 'blog-sidebar',
        'before_widget' => '<div id="%1$s" class="tx-blog-widget widget sidebar-box mt-30 wow fadeInUp %2$s"><div class="sidebar-box-wrap">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h6 class="widget-title sidebar-box-title chy-heading-1">',
        'after_title'   => '</h6>',
    ] );

    if ( BUSCON_WOOCOMMERCE_ACTIVED ) {
        // shop sidebar
        register_sidebar( [
            'name'          => esc_html__( 'Product Sidebar', 'buscon' ),
            'id'            => 'product-sidebar',
            'before_widget' => '<div id="%1$s" class="tx-blog-widget widget sidebar-box mb-30 wow fadeInUp %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h6 class="widget-title sidebar-box-title chy-heading-1">',
            'after_title'   => '</h6>',
        ] );
    }

    $footer_widgets = cs_get_option( 'footer_widget_number' );

}
add_action( 'widgets_init', 'buscon_widgets_init' );
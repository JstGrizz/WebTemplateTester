<?php

add_action( 'tgmpa_register', 'buscon_register_required_plugins' );

function buscon_register_required_plugins() {

    $plugins = [
        [
            'name'               => esc_html__( 'Buscon Core', 'buscon' ),
            'slug'               => 'buscon-core',
            'source'             => esc_url( 'https://themexriver.com/wp/buscon/buscon-plug/buscon-core.zip' ),
            'external_url'       => esc_url( 'https://themexriver.com/wp/buscon/buscon-plug/buscon-core.zip' ),
            'required'           => true,
            'force_activation'   => false,
            'force_deactivation' => false,
        ],
        [
            'name'     => esc_html__( 'Elementor Page Builder', 'buscon' ),
            'slug'     => 'elementor',
            'required' => true,
        ],
        [
            'name'     => esc_html__( 'WP Classic Editor', 'buscon' ),
            'slug'     => 'classic-editor',
            'required' => false,
        ],
        [
            'name'     => esc_html__( 'Contact Form 7', 'buscon' ),
            'slug'     => 'contact-form-7',
            'required' => true,
        ],
        [
            'name'     => esc_html__( 'WooCommerce', 'buscon' ),
            'slug'     => 'woocommerce',
            'required' => true,
        ],
        [
            'name'     => esc_html__( 'One Click Demo Import', 'buscon' ),
            'slug'     => 'one-click-demo-import',
            'required' => false,
        ],
        [
            'name'               => esc_html__( 'SVG Support', 'gilroy' ),
            'slug'               => 'svg-support',
            'source'             => esc_url( 'https://themexriver.com/plugins/svg-support.zip' ),
            'external_url'       => esc_url( 'https://themexriver.com/plugins/svg-support.zip' ),
            'required'           => true,
            'force_activation'   => false,
            'force_deactivation' => false,
        ],

    ];

    $config = [
        'id'           => 'buscon',
        'parent_slug'  => 'buscon',
        'menu'         => 'tgmpa-install-plugins',
        'dismissable'  => true,
        'dismiss_msg'  => '',
        'is_automatic' => false,
        'message'      => '',
        'default_path' => '',
    ];

    tgmpa( $plugins, $config );
}

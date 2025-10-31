<?php

// File Security Check
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

function buscon_primary_color() {

    wp_enqueue_style( 'buscon-primary-color', BUSCON_THEME_CSS_DIR . 'buscon-custom.css', [] );

    $theme_primary_color = cs_get_option( 'theme_primary_color', '#bee041' );
    $theme_color_2 = cs_get_option( 'theme_color_2', '#5956F0'  );
    $theme_color_3 = cs_get_option( 'theme_color_3', '#28BEFD' );
    $theme_color_4 = cs_get_option( 'theme_color_4', 'rgb(190, 224, 65)' );
    $theme_gd_color_1 = cs_get_option( 'theme_gd_color_1', [
        'color_1' => '#8F73FF',
        'color_2' => '#5347FF',
        'color_3' => '#4471FE',
        'color_4' => '#21D3FD',
    ]);

    if (
        $theme_primary_color ||
        $theme_color_2 ||
        $theme_color_3
    ) {
        $custom_css = '';
        $custom_css .= '
            :root {
                --txa-pr-3: ' . esc_attr( $theme_primary_color ) . ';
                --txa-pr-1: ' . esc_attr( $theme_color_2 ) . ';
                --txa-pr-2: ' . esc_attr( $theme_color_3 ) . ';
                --txa-pr-4: ' . esc_attr( $theme_color_4 ) . ';
            }
        ';

        wp_add_inline_style( 'buscon-primary-color', $custom_css );
    }

    if (isset($theme_gd_color_1['color_1'], $theme_gd_color_1['color_2'], $theme_gd_color_1['color_3'], $theme_gd_color_1['color_4'])) {
        $custom_css = sprintf(
            ':root {
                --txa-gd-1: linear-gradient(90deg, %s 0%%, %s 45.27%%, %s 57.66%%, %s 100%%);
            }',
            esc_attr($theme_gd_color_1['color_1']),
            esc_attr($theme_gd_color_1['color_2']),
            esc_attr($theme_gd_color_1['color_3']),
            esc_attr($theme_gd_color_1['color_4'])
        );

        wp_add_inline_style('buscon-primary-color', $custom_css);
    }


}
add_action( 'wp_enqueue_scripts', 'buscon_primary_color' );
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-layouts
 *
 * @package buscon
 */

$preloader_enable = cs_get_option( 'preloader_enable', true );
$enable_scroll_up = cs_get_option( 'enable_scroll_up', true );
$preloader_image = cs_get_option( 'preloader_image');
$image_url = get_template_directory_uri() . '/assets/img/logo/logo-white.webp';

if(isset($preloader_image['url'])) {
    $image_url = $preloader_image['url'];
} else {
    $image_url = get_template_directory_uri() . '/assets/img/logo/logo-white.webp';
}
?>

<!doctype html>
<html <?php if(function_exists('language_attributes')) {language_attributes();} ?> <?php if(function_exists('buscon_enable_rtl')) { print buscon_enable_rtl();} ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' );?>">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ): ?>
    <?php endif;?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head();?>
</head>

<body <?php body_class();?>>
<?php wp_body_open();?>

<div class="page-wrapper">

    <div class="offcanvas-overlay"></div>

    <!-- preloader start -->
    <?php if( $preloader_enable == true ) : ?>
    <div id="tx-preloader">
        <div class="tx-loader">
            <img src="<?php echo esc_url($image_url); ?>" alt="<?php if(function_exists('buscon_img_alt_text')) { echo buscon_img_alt_text( $image_url ); } ?>">
        </div>
    </div>
    <?php endif; ?>
    <!-- preloader end -->

    <!-- back to top start -->
    <?php if( $enable_scroll_up == true ) : ?>
    <div class="scroll-top">
        <div class="scroll-top-wrap">
            <i  class="icon-1 fal fa-long-arrow-up"></i>
        </div>
    </div>
    <?php endif; ?>
    <!-- back to top end -->

    <!-- header start -->
    <?php do_action( 'buscon_header_style' ); ?>
    <!-- header end -->

    <!-- wrapper-box start -->
    <?php do_action( 'buscon_before_main_content' ); ?>
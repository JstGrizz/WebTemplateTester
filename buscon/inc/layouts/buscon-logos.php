<?php
// header logos
function buscon_header_logo() {
    ?>
    <?php
        $buscon_site_logo = cs_get_option( 'buscon_logo', get_template_directory_uri() . '/assets/img/logo/logo.webp');
        if(isset($buscon_site_logo['url'])) {
            $logo_url = $buscon_site_logo['url'];
        } else {
            $logo_url = get_template_directory_uri() . '/assets/img/logo/logo.webp';
        }
            if ( has_custom_logo() ) {
                the_custom_logo();
            } else {
                ?>
                <a class="tx-logo d-block chy-logo" href="<?php print esc_url( home_url( '/' ) );?>">
                    <img src="<?php echo esc_url($logo_url); ?>" alt="<?php if(function_exists('buscon_img_alt_text')) { echo buscon_img_alt_text($logo_url); } ?>" />
                </a>
                <?php
            }
        ?>
    <?php
}


// side info logo
function buscon_side_info_logo() {
    $buscon_site_logo = cs_get_option( 'buscon_site_logo', get_template_directory_uri() . '/assets/img/logo/logo-white.webp');
    if(isset($buscon_site_logo['url'])) {
        $logo_url = $buscon_site_logo['url'];
    } else {
        $logo_url = get_template_directory_uri() . '/assets/img/logo/logo-white.webp';
    }

    ?>
    <a class="tx-logo menu-logo d-block" aria-label="brand-logo" href="<?php print esc_url( home_url( '/' ) );?>">
        <img src="<?php print esc_url( $logo_url );?>" alt="<?php if(function_exists('logo_url')) { echo buscon_img_alt_text($logo_url); } ?>" />
    </a>


<?php }
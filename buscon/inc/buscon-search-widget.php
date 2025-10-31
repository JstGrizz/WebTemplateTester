<?php
// buscon_search_filter_form
if ( !function_exists( 'buscon_search_filter_form' ) ) {
    function buscon_search_filter_form( $form ) {

        $form = sprintf(
            '<form class="tx-search-widget tx-input-field sidebar-search-box" action="%s" method="get">
                <div class="position-relative fix">
                    <input type="search" value="%s" required name="s" placeholder="%s" class="search-input">
                    <button type="submit" aria-label="search" class="search-btn"><i class="fal fa-search"></i></button>
                </div>
		    </form>',
            esc_url( home_url( '/' ) ),
            esc_attr( get_search_query() ),
            esc_html__( 'Search...', 'buscon' )
        );

        return $form;
    }
    add_filter( 'get_search_form', 'buscon_search_filter_form' );
    add_filter('render_block_core/search', 'buscon_search_filter_form');
}


// woocommerce search widget form
if ( BUSCON_WOOCOMMERCE_ACTIVED && !function_exists( 'buscon_woocommerce_product_search' ) ) {
    function buscon_woocommerce_product_search( $form ) {

        $form = sprintf(
            '<form class="tx-search-widget tx-input-field sidebar-search-box" action="%s" method="get">
                <div class="position-relative fix">
                    <input type="search" value="%s" required name="s" placeholder="%s" class="search-input">
                    <button type="submit" aria-label="search" class="search-btn"><i class="fal fa-search"></i></button>
                    <input type="hidden" name="post_type" value="product">
                </div>
            </form>',
            esc_url( home_url( '/' ) ),
            esc_attr( get_search_query() ),
            esc_html__( 'Search...', 'buscon' )
        );

        return $form;
    }
    add_filter( 'get_product_search_form', 'buscon_woocommerce_product_search' );
    add_filter('render_block_core/search', 'buscon_woocommerce_product_search');
}
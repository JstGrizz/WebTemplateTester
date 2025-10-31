<?php
$buscon_enable_blog_navigation = cs_get_option('buscon_enable_blog_navigation');
$buscon_prev_post = get_previous_post();
$buscon_next_post = get_next_post();
if( $buscon_enable_blog_navigation == true ) {
    if(!empty(get_previous_post() || get_next_post()) ) {
        ?>
        <div class="tx-nextPrev-post-wrapper blog-next-btn">
            <div class="btn-item">
                <a href="<?php print get_the_permalink($buscon_prev_post); ?>" class="main-img img-cover">
                <?php
                    $buscon_prev_post_img = get_the_post_thumbnail_url( $buscon_prev_post, 'full' );
                    if( !empty($buscon_prev_post_img) ) {
                        ?>
                        <img src="<?php print esc_url($buscon_prev_post_img); ?>" alt="">
                        <?php
                    }
                ?>
                <div class="arrow-btn">
                    <i class="fas fa-chevron-left"></i>
                </div>
            </a>
            <div class="content-wrap">
                <span class="chy-heading-1 date">
                    <?php
                        $buscon_prev_post_date = get_the_date( get_option( 'date_format' ), $buscon_prev_post );
                        print esc_html($buscon_prev_post_date);
                    ?>
                </span>
                <h3 class="chy-heading-1 title">
                    <a href="<?php print get_the_permalink($buscon_prev_post); ?>" aria-label="blog">
                        <?php print get_the_title($buscon_prev_post); ?>
                    </a>
                </h3>
            </div>
        </div>
        <div class="btn-item">
            <a href="<?php print get_the_permalink($buscon_next_post); ?>" class="main-img img-cover">
            <?php
                $buscon_next_post_img = get_the_post_thumbnail_url( $buscon_next_post, 'full' );
                if( !empty($buscon_next_post_img) ) {
                    ?>
                    <img src="<?php print esc_url($buscon_next_post_img); ?>" alt="">
                    <?php
                }
            ?>
            <div class="arrow-btn">
                <i class="fas fa-chevron-left"></i>
            </div>
        </a>
        <div class="content-wrap">
            <span class="chy-heading-1 date">
                <?php
                    $buscon_next_post_date = get_the_date( get_option( 'date_format' ), $buscon_next_post );
                    print esc_html($buscon_next_post_date);
                ?>
            </span>
            <h3 class="chy-heading-1 title">
                <a href="<?php print get_the_permalink($buscon_next_post); ?>" aria-label="blog">
                    <?php print get_the_title($buscon_next_post); ?>
                </a>
            </h3>
        </div>
    </div>
    </div>
    <?php
    }
}
?>
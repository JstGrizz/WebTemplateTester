<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package buscon
 */
    $author_bio_avatar_size = 40;
    $tx_enable_social_share = cs_get_option( 'tx_enable_social_share' );

    // enable_blog_button
    $enable_blog_button = cs_get_option( 'enable_blog_button', true );
    $blog_button_text = cs_get_option( 'blog_button_text', __('Read More', 'buscon') );
    $blog_button_icon = cs_get_option( 'blog_button_icon', 'fas fa-long-arrow-alt-right' );
    $excerpt_length = cs_get_option( 'excerpt_length', 180 );
    $enable_default_date = cs_get_option( 'enable_default_date' );

    $has_thumb = '';
    if(has_post_thumbnail()) {
        $has_thumb = 'has-thumbnail';
    } else {
        $has_thumb = 'has-nOthumbnail';
    }
    $id = get_the_ID();

    if ( is_single() ):
?>

    <article id="post-<?php the_ID(); ?>"  <?php post_class( 'tx-blog-box tx-blogDetails-box'); ?>>

        <?php if ( has_post_thumbnail() ): ?>
        <div class="main-img img-cover mb-30">
            <?php the_post_thumbnail( 'full', ['class' => 'img-responsive w-100'] ); ?>
        </div>
        <?php endif; ?>

        <div class="tx-blogDetails-box__wrapper <?php echo esc_attr($has_thumb); ?>">
            <div class="blog-details-content-meta meta mt-0 pt-0">
                <span class="author chy-para-1">
                    <i class="flaticon-user"></i>
                    <?php the_author_posts_link(); ?>
                </span>
                <span class="author chy-para-1">
                    <i class="flaticon-chat"></i>
                    <?php   echo esc_html__(' Comments', 'buscon'); ?>
                    (<?php echo get_comments_number(); ?>)
                </span>
                <span class="author chy-para-1" ><i class="flaticon-calendar"></i><?php the_time( get_option( 'date_format' ) );?></span>
            </div>

            <div class="post-details-content mt-25 fix">
                <?php the_content(); ?>
            </div>

            <?php if( BUSCON_CORE ) : ?>
            <div class="post-share-option blog-details-tag-share-wrap fix pt-30">
                <div class="post-tags blog-details-tag">
                    <?php if(function_exists('buscon_get_tag')) {
                            print buscon_get_tag();
                        }
                    ?>
                </div>
                <?php if(function_exists('buscon_social_share') && $tx_enable_social_share == true) {
                        print buscon_social_share();
                    }
                ?>
            </div>
            <?php endif; ?>

            <div class="post-page-wrapper">
                <?php
                    wp_link_pages( [
                        'before'      => '<div class="page-links mt-40 mb-55">' . esc_html__( 'Pages:', 'buscon' ),
                        'after'       => '</div>',
                        'link_before' => '<span class="page-number">',
                        'link_after'  => '</span>',
                    ] );
                ?>
            </div>
        </div>
    </article>

    <?php else: ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class( 'tx-blog-box blog-page-item mb-0 mt-30'); ?>>
        <?php if ( has_post_thumbnail() ): ?>
        <div class="tx-thumb main-img img-cover mb-20">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'full', ['class' => 'img-responsive w-100'] ); ?>
            </a>
        </div>
        <?php endif; ?>

        <div class="meta pt-0">
            <span class="author chy-para-1">
                <i class="flaticon-user"></i>
                <?php the_author_posts_link(); ?>
            </span>
            <span class="author chy-para-1">
                <i class="flaticon-chat"></i>
                <?php echo esc_html__(' Comments', 'buscon'); ?>
                (<?php echo get_comments_number(); ?>)
            </span>
            <span class="author chy-para-1" ><i class="flaticon-calendar"></i><?php the_time( get_option( 'date_format' ) );?></span>
        </div>

        <div class="tx-content mt-20">
            <h3 class="chy-heading-1 title chy-split-in-right chy-split-text tx-title">
                <a href="<?php the_permalink(); ?>" aria-label="blog item"><?php the_title(); ?></a>
            </h3>
            <?php if(!empty( get_the_excerpt() )) : ?>
            <div class="tx-excerpt chy-para-1 disc mb-0">
                <?php
                    $excerpt = get_the_excerpt(); $excerpt = substr( $excerpt, 0, $excerpt_length );
                    echo esc_html($excerpt);
                ?>
            </div>
            <?php endif; ?>

            <?php if( $enable_blog_button == true ) : ?>
            <a class="txa-pr-btn-5 mt-25" aria-label="read more" href="<?php the_permalink(); ?>">
                <span class="text">
                    <?php echo esc_html($blog_button_text); ?>
                </span>
                <?php if(!empty( $blog_button_icon )) : ?>
                <span class="icon">
                    <i class="<?php echo esc_attr($blog_button_icon); ?>"></i>
                </span>
                <?php endif; ?>
            </a>
            <?php endif; ?>
        </div>
    </article>

<?php endif; ?>

<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package buscon
 */

 $author_bio_avatar_size = 40;
 $buscon_enable_social_share = cs_get_option( 'buscon_enable_social_share' );

 $has_thumb = '';
 if(has_post_thumbnail()) {
     $has_thumb = 'has-thumbnail';
 } else {
     $has_thumb = 'has-nOthumbnail';
 }
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'tx-blog-box news-block_three format-quote'); ?>>
    <div class="news-block_three-inner <?php echo esc_attr($has_thumb); ?>">
        <div class="news-block_three-content">
            <div class="post-excerpt news-block_two-text">
            <?php the_content();?>
            </div>
        </div>
    </div>
</article>
<?php

add_filter( 'comment_form_default_fields', 'buscon_comment_form_default_fields_func' );

function buscon_comment_form_default_fields_func( $default ) {

    $default['author'] = '
            <div class="row tx-column-gap-20">
                <div class="col-xl-6">
                    <div class="form-group mt-20">
                        <input type="text" name="author" placeholder="' . esc_attr__( 'Full Name', 'buscon' ) . '">
                    </div>
                </div>';

    $default['email'] = '
                <div class="col-xl-6">
                    <div class="form-group mt-20">
                        <input type="text" name="email" placeholder="' . esc_attr__( 'Email address', 'buscon' ) . '">
                    </div>
                </div>
        ';

    $default['url'] = '
                <div class="col-xl-12 comment-from-right">
                    <div class="form-group mt-20">
                        <input type="text" name="url" placeholder="' . esc_attr__( 'Your Website...', 'buscon' ) . '">
                    </div>
                </div>
            </div>
        ';
    return $default;
}

add_action( 'comment_form_top', 'buscon_add_comments_textarea' );
function buscon_add_comments_textarea() {
    if ( !is_user_logged_in() && function_exists( 'is_product' ) ) {
        echo '<div class="col-xl-12 hideOn-product-details form-group mb-0"><div class="tx-input-field"><textarea id="comment" name="comment" cols="60" rows="6" placeholder="' . esc_attr__( 'Write your message here..', 'buscon' ) . '" aria-required="true"></textarea></div></div>';
    }
}

add_filter( 'comment_form_defaults', 'buscon_comment_form_defaults_func' );

function buscon_comment_form_defaults_func( $info ) {
    if ( !is_user_logged_in() ) {

        $info['comment_field'] = '';

        $info['submit_field'] = '%1$s %2$s';
    } else {
        $info['comment_field'] = '

        <div class="default-form contact-form">
        <div class="row">
            <div class="col-xl-12 form-group">
                <div class="tx-input-field">
                    <textarea id="comment" name="comment" cols="30" rows="10" placeholder="' . esc_attr__( 'Your comments...', 'buscon' ) . '"></textarea></div></div>';
        $info['submit_field'] = '%1$s %2$s</div></div>
        ';
    }

    $form_wrapper = 'logged-in mt-10';
    if ( !is_user_logged_in() ) {
        $form_wrapper = 'not-logged mt-20';
    }

    $info['submit_button'] = '
    <div class="col-xl-12 submit-button ' . esc_attr( $form_wrapper ) . '">
        <div class="btn-wrap">
            <button class="txa-pr-btn-5" type="submit">
                <span class="text">' . esc_html__( 'send message', 'buscon' ) . '</span>
                <span class="icon">
                    <i class="fa-solid fa-right-long"></i>
                </span>
            </button>
        </div>
    </div>';

    // check if number of comments is zero
    $comments_number = get_comments_number();

    if( $comments_number == 0 ) {
        $title_class = "mt-0";
    } else {
        $title_class = "mt-0";
    }


    $info['title_reply_before'] = '<h3 class="tx-title title chy-heading-1 mb-15 '.esc_attr($title_class).'">';
    $info['title_reply_after'] = '</h3>';
    $info['comment_notes_before'] = '';

    return $info;
}

// comment view function

if ( !function_exists( 'buscon_comment' ) ) {
    function buscon_comment( $comment, $args, $depth ) {
        $GLOBAL['comment'] = $comment;
        extract( $args, EXTR_SKIP );
        $args['reply_text'] = '<i class="fas fa-comment-lines"></i>' . esc_html__( 'Reply', 'buscon' ) . '';
        $replayClass = 'comment-depth-' . esc_attr( $depth );
        ?>
        <li id="comment-<?php comment_ID();?>">
            <div class="comments-box-single tx-comment-box tx-border-bottom tx-border-op-10 pb-30">
                <?php if( get_avatar($comment, 78, null, null, ['class' => []]) == true ) : ?>
                <div class="person-img img-cover">
                    <?php print get_avatar( $comment, 78, null, null, ['class' => []] );?>
                </div>
                <?php endif; ?>
                <div class="comment-text comments-box-author-content">
                    <div class="heading-wrap">
                        <div class="title-wrap">
                            <span class="name chy-heading-1"><?php print get_comment_author_link();?></span>
                            <span class="date"><?php comment_time( get_option( 'date_format' ) );?></span>
                        </div>
                        <?php comment_reply_link( array_merge( $args, ['depth' => $depth, 'max_depth' => $args['max_depth']] ) );?>
                    </div>
                    <div class="comment-text chy-para-1">
                        <?php comment_text();?>
                    </div>
                </div>
            </div>
        </li>
		<?php
}
}
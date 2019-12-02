<?php
/**
 * Custom Comments
 *
 * @since Cafe Faucher 1.1.5
 */

/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own cafefaucher_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Cafe Faucher 1.0
 */
if ( ! function_exists( 'cafefaucher_comment' ) ) :
    function cafe_faucher_queue_js(){
      if (!is_admin()){
        if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1))
          wp_enqueue_script( 'comment-reply' );
  }
}
add_action('get_header', 'cafe_faucher_queue_js');

function cafefaucher_comment( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    switch ( $comment->comment_type ) :
    case 'pingback' :
    case 'trackback' :
        // Display trackbacks differently than normal comments.
    ?>
    <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
        <p><?php _e( 'Pingback:', 'cafe-faucher' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'cafe-faucher' ), '<span class="edit-link">', '</span>' ); ?></p>
        <?php
        break;
        default :
        // Proceed with normal comments.
        global $post;
        ?>
        <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
            <article id="comment-<?php comment_ID(); ?>" class="comment">
                <header class="comment-meta comment-author vcard">
                    <?php
                    
                    if ( $comment->user_id != '0' ) {
                        echo '<span class="comment-author">' . get_user_meta( $comment->user_id, 'nickname', true ) . '</span>';
                    } else {
                        echo '<span class="comment-author">' . get_comment_author_link() . '</span>';
                    }                   
                    printf( '<time datetime="%2$s">%3$s</time>',
                        esc_url( get_comment_link( $comment->comment_ID ) ),
                        get_comment_time( 'c' ),
                        /* translators: 1: date, 2: time */
                        sprintf( __( '%1$s at %2$s', 'cafe-faucher' ), get_comment_date(), get_comment_time() )
                        );
                        ?>
                    </header><!-- .comment-meta -->

                    <?php if ( '0' == $comment->comment_approved ) : ?>
                        <p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'cafe-faucher' ); ?></p>
                    <?php endif; ?>
                    <section class="comment-content comment">
                        <div class="author-img">
                           <?php echo get_avatar( $comment, 44 ); ?>
                       </div>
                       <?php comment_text(); ?>
                       <?php edit_comment_link( __( 'Edit', 'cafe-faucher' ), '<p class="edit-link">', '</p>' ); ?>
                   </section><!-- .comment-content -->
                   <div class="reply">
                    <?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'cafe-faucher' ), 'after' => ' <span>&darr;</span>', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
                </div><!-- .reply -->
            </article><!-- #comment-## -->
            <?php
            break;
    endswitch; // end comment_type check
}
endif;



add_filter( 'preprocess_comment', 'minimal_comment_length' );
function minimal_comment_length( $commentdata ) {
    $minimalCommentLength = 20;
    if ( strlen( trim( $commentdata['comment_content'] ) ) < $minimalCommentLength ) 
    {
        wp_die( 'All comments must be at least ' . $minimalCommentLength . ' characters long.' );
    }
    return $commentdata;
}
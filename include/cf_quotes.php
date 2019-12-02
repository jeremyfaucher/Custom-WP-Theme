<?php
/**
 * Cafe Faucher Quotes Post Type
 *
 * @since Cafe Faucher 1.0
 */
function cf_quotes_postType() {
    register_post_type('quotes', array(
        'labels' => array('name' => _x('quotes', 'Post Type General Name'),
        'singular_name' => _x('quote', 'Post Type Singular Name')
            ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor'),
        'menu_icon' => 'dashicons-format-gallery',
        )
    );
}
add_action('init', 'cf_quotes_postType');

function do_quote() {
   // Query Post Type
       $args = array(
           'post_type' => ('quotes'),
           'posts_per_page' => '3',
           'orderby' => 'rand',
       ); ?>
      <?php query_posts( $args ); ?>
      <?php while ( have_posts() ) : the_post(); ?>
       <div class="quote">
           <span class="number"><?php the_content(); ?></span>
           <?php the_title('<h4>','</h4>'); ?>
       </div>
   <?php endwhile; ?>
   <?php wp_reset_query();
}
add_action('cf_quote', 'do_quote');
//add_shortcode('cf_quote', 'do_quote');
//[cf_quote]
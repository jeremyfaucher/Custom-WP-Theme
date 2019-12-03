<?php
/**
 * Cafe Faucher functions and definitions.
 * @package Cafe_Faucher
 */

/**
 * Sets up theme defaults and registers support for various WordPress features
 *
 * @since Cafe Faucher 1.0
 */
function cafefaucher_setup() {
    //Make theme available for translation.
    load_theme_textdomain( 'cafe-faucher', get_template_directory() . '/languages' );
    // Adds RSS feed links to <head> for posts and comments.
    add_theme_support( 'automatic-feed-links' );
    // Register Menu Locations.
    register_nav_menus( array(
        'main' => __( 'Main Menu', 'cafe-faucher' ),
        'landing' => __( 'Landing Menu', 'cafe-faucher' ),
        'footer' => __( 'Footer Menu', 'cafe-faucher' ),
        'sitemap' => __( 'Sitemap Menu', 'cafe-faucher' )
    ) );
}
add_action( 'after_setup_theme', 'cafefaucher_setup' );
/* Adds class to li automatically */
add_filter( 'nav_menu_css_class', function($classes, $item, $args) {
    if (property_exists($args, 'li_class')) {
        $classes[] = $args->li_class;
    }
    return $classes;
}, 10, 4 );
/**
 * Enqueues scripts and styles for front-end.
 *
 * @since Cafe Faucher 1.0
 */
function cafe_faucher_enqueue() {
    // Add Site CSS and JS
    wp_enqueue_style( 'cafefaucher-style-css',get_template_directory_uri() . '/css/main.css', 1);
    wp_enqueue_style('woocommerce_css', get_template_directory_uri() .'/css/cf-woocommerce.css'); 
     wp_enqueue_script( 'bootstrap-jquery', get_template_directory_uri() . '/js/jquery-1.12.3.min.js', array( 'jquery' ), '1.12.3', false );
}
add_action( "wp_enqueue_scripts", "cafe_faucher_enqueue" );

function cf_scripts() {
    //wp_enqueue_script( 'custom-jquery', get_template_directory_uri() . '/js/jquery-1.12.3.min.js', array( 'jquery' ), '1.12.3', false );
}
add_action( "wp_footer", "cf_scripts" );

/**
 * Enqueue Javascript postMessage handlers for the Customizer.
 *
 * Binds JS handlers to make the Customizer preview reload changes asynchronously.
 *
 * @since Cafe Faucher 1.0
 */
function cafe_faucher_customize_preview_js() {
    wp_enqueue_script( 'cafe-faucher-customizer', get_template_directory_uri() . '/js/cf-customizer.js', array( 'customize-preview' ), '20141120', true );
}
add_action( 'customize_preview_init', 'cafe_faucher_customize_preview_js' );

/**
 * Displays navigation to next/previous pages when applicable.
 *
 * @since Cafe Faucher 1.0
 */
if ( ! function_exists( 'cafefaucher_content_nav' ) ) :
    function cafefaucher_content_nav( $html_id ) {
        global $wp_query;
        $html_id = esc_attr( $html_id );
        if ( $wp_query->max_num_pages > 1 ) : ?>
        <nav class="nav-pagination" role="navigation">
            <span class="nav-previous">
                <?php next_posts_link( __( '<span class="meta-nav"><i class="fa fa-chevron-left"></i></span> Older Posts', 'cafe-faucher' ) ); ?>
            </span>
            <span class="nav-next">
                <?php previous_posts_link( __( 'Newer Posts <span class="meta-nav"><i class="fa fa-chevron-right"></i></span>', 'cafe-faucher' ) ); ?>
            </span>
        </nav>
        <!-- #<?php echo $html_id; ?> .navigation -->
    <?php endif;
}
endif;

/**
 * Prints HTML with meta information for current post: categories, tags, permalink, author, and date.
 *
 * Create your own cafefaucher_entry_meta() to override in a child theme.
 *
 * @since Cafe Faucher 1.0
 */
if ( ! function_exists( 'cafefaucher_entry_meta' ) ) :
    function cafefaucher_entry_meta() {
    // Translators: used between list items, there is a space after the comma.
        $categories_list = get_the_category_list( __( ', ', 'cafe-faucher' ) );
    // Translators: used between list items, there is a space after the comma.
        $tag_list = get_the_tag_list( '', __( ', ', 'cafe-faucher' ) );
        $date = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a>',
            esc_url( get_permalink() ),
            esc_attr( get_the_time() ),
            esc_attr( get_the_date( 'c' ) ),
            esc_html( get_the_date() )
        );
        $author = sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
          esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
          esc_attr( sprintf( __( 'View all posts by %s', 'cafe-faucher' ), get_the_author() ) ),
          get_the_author()
      );
    // Translators: 1 is category, 2 is tag, 3 is the date and 4 is the author's name.
        if ( $tag_list ) {
            $utility_text = __( 'This entry was posted in %1$s and tagged %2$s on %3$s<span class="by-author"> by %4$s</span>.', 'cafe-faucher' );
        } elseif ( $categories_list ) {
            $utility_text = __( 'This entry was posted in %1$s on %3$s<span class="by-author"> by %4$s</span>.', 'cafe-faucher' );
        } else {
            $utility_text = __( 'This entry was posted on %3$s<span class="by-author"> by %4$s</span>.', 'cafe-faucher' );
        }
        printf(
            $utility_text,
            $categories_list,
            $tag_list,
            $date,
            $author
        );
    }
endif;

// Page Linking Filter To Keep Page Linking Righ Under Content
add_filter( 'the_content', function( $content ) {
  return $content . wp_link_pages( array(
    'before'            => '<div class="link-page">'.__( 'Pages:', 'cafe-faucher' ),
    'after'             => '</div>',
    'link_before'       => '<span>',
    'link_after'        => '</span>',
    'pagelink'          => '%',
    'echo'              => false ) );
}, -1 ); // Lower number = higher priority.

/**
 * Theme Includes
 */
// Cafe Faucher customizer additions.
require get_template_directory() . '/include/customizer.php';
// Widgets additions.
require get_template_directory() . '/include/widgets.php';
// Widgets additions.
require get_template_directory() . '/include/cf_carousel.php';
// Widgets additions.
require get_template_directory() . '/include/cf_quotes.php';
// Widgets additions.
require get_template_directory() . '/include/cf_excerpt.php';
// Widgets additions.
require get_template_directory() . '/include/cf_comments.php';
// Widgets additions.
require get_template_directory() . '/include/cf-prefetch.php';
// Widgets additions.
require get_template_directory() . '/include/cf-woocommerce.php';
/**
 * mytheme Woocommerce support
 */
function mytheme_add_woocommerce_support() {
add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
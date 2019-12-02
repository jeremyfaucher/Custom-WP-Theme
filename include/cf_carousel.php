<?php
/**
 * Cafe Faucher Slider Post Type
 *
 * @since Cafe Faucher 1.0
 */
function cf_slider_postType() {
    register_post_type('slides', array(
        'labels' => array(
            'name' => _x('Slides', 'Post Type General Name', 'cafe-faucher-child'),
            'singular_name' => _x('Slide', 'Post Type Singular Name', 'cafe-faucher-child')
            ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor'),
        'menu_icon' => 'dashicons-format-gallery',
        )
    );
}
add_action('init', 'cf_slider_postType');

function do_carousel() {
    if (!is_front_page())
        return;
    // Query Post Type
    $args = array(
        'post_type' => 'slides',
        'post_status' => 'publish',
        'order' => 'asc',
        'orderby' => 'id',
        );

    $i = 1;
    $the_query = new WP_Query($args);
    // Build It
    if ($the_query->have_posts()) :
        ?>
    <div class="home-slider col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <section id="carousel">
          <div class="carousel fade" id="fade-quote-carousel" data-ride="carousel"> 
           <!-- Carousel indicators -->
           <ol class="carousel-indicators">
           </ol>
           <!-- Carousel items -->
           <div class="carousel-inner">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
               <div class="item <?php if (!$i++) echo 'active'; ?>">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</div>
</section>
</div>
<?php
endif;
}
add_action('cf_carousel', 'do_carousel');
add_shortcode('cf_carousel', 'do_carousel');
//[cf_carousel]
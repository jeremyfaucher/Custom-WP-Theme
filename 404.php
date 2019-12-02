<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Cafe_Faucher
 * @since Cafe Faucher 1.0
 */
get_header(); ?>
<main>
  <div class="container main-inner">
    <h1 class="entry-title">
      <?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'cafe-faucher' ); ?>
    </h1>
    <section class="col-xs-12 col-sm-12 col-md-12 col-lg-12 feature-box">
      <article id="post-0" class="post error404 no-results not-found">
        <p>
        <?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'cafe-faucher' ); ?>
        </p>
        <?php get_search_form(); ?>
      </article>
      <?php
      if(is_active_sidebar('sidebar-404')){
        dynamic_sidebar('sidebar-404');
      }
      ?>
    </section>
  </div><!-- end of main-inner -->
</main><!-- end of main -->
<?php get_footer(); ?>

<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Cafe_Faucher
 * @since Cafe Faucher 1.1.7
 */
get_header(); ?>
<main>
  <div class="container main-inner">
    <header class="archive-header">
      <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'cafe-faucher' ), get_search_query() ); ?></h1>
    </header>
    <!-- .archive-header -->
    <section class="col-xs-12 col-sm-12 col-md-8 col-lg-8 no-left no-right">    
      <?php
      /* Start the Loop */
      while ( have_posts() ) : the_post();
        get_template_part( 'content-category-archive', get_post_format() );?>
      <?php endwhile; // end of the loop. ?>
      <?php cafefaucher_content_nav( 'nav-below' ); ?>
    </section>
    <aside class="col-xs-12 col-sm-12 col-md-4 col-lg-4 no-right"> 
      <?php if ( is_active_sidebar( 'blog-archives' ) ) :
      dynamic_sidebar( 'blog-archives' ); ?>      
    <?php else : ?>
      <?php
      if(is_active_sidebar('sidebar-home')){
        dynamic_sidebar('sidebar-home'); } ?>
      <?php endif; ?>
    </aside>
  </div><!-- end of main-inner -->
</main><!-- end of main -->
<?php get_footer(); ?>

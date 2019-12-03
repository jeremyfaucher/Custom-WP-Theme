<?php
/**
 * The main template file.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cafe_Faucher
 * @since Cafe Faucher 1.0
 */
get_header(); ?>
<main>
  <div class="container main-inner">
    <section class="padding-fix col-xs-12 col-sm-12 col-md-12 col-lg-12">
      sdfdsfsdfsd
      <h1><?php echo apply_filters( 'the_title', get_the_title( get_option( 'page_for_posts' ) ) ); ?></h1>
    </section>
    <section class="col-xs-12 col-sm-12 col-md-8 col-lg-8 no-left no-right">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
       <?php get_template_part( 'content-category-archive', get_post_format() );
        endwhile;
        cafefaucher_content_nav( 'nav-below' );
        ?>
      <?php endif; ?>
    </section>
    <aside id="sidebar-blog" class="col-xs-12 col-sm-12 col-md-4 col-lg-4 no-right">
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
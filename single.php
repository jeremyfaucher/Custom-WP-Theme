<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Keystone_Click
 * @since Keystone Click 1.1.6
 */
get_header(); ?>
<main>
  <div class="container main-inner">
    <h1 class="entry-title-blog">
      <?php the_title(); ?>
    </h1>
    <section class="col-xs-12 col-sm-12 col-md-8 col-lg-8 no-left no-right">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'template-parts/content-blog', get_post_format() ); ?>
      <?php endwhile; // end of the loop. ?>
    </section>
    <?php get_sidebar(); ?>
  </div><!-- end of main-inner -->
</main><!-- end of main -->
<?php get_footer(); ?>

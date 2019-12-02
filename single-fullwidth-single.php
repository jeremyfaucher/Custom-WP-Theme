<?php
/**
 * Single Post Template: Fullwidth Single
 */
get_header(); ?>
<main>
  <h1 class="container"><?php the_title(); ?></h1>
     <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'content-blog-full-width', get_post_format() ); ?>
  </main><!-- end of main -->
  <?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
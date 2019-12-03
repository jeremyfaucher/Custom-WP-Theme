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
<main class="container">
  <article class="row-summary">
  <section class="col-sm-12 col-lg-9 no-right">
   <?php
   if ( get_query_var('paged') ) {
     $paged = get_query_var('paged');
   } elseif ( get_query_var('page') ) {
     $paged = get_query_var('page');
   } else {
     $paged = 1;
   }
   query_posts( array( 'orderby' => 'rand','order'=> 'DESC', 'post_type' => 'post', 'paged' => $paged ) );
   if ( have_posts() ) : $count = 0; while ( have_posts() ) : the_post(); $count++;
   ?>
   <!-- Post Starts -->
   <div class="entry-summary col-sm-12 col-lg-6 feature-grid-box no-left">
    <h2 class="entry-title-blog"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
    <?php the_excerpt(); ?>
  </div>
<?php endwhile; else: ?>
  <div class="post">
   <p><?php _e('Sorry, no posts matched your criteria.', 'cafe-faucher') ?></p>
 </div><!-- /.post -->
<?php endif; ?>
<div class="clearfix"></div>
<section class="col-sm-12 col-lg-12 no-left right-pec-bump">

    <nav class="nav-pagination" role="navigation">
      <span class="nav-previous">
      <?php next_posts_link( __( '<span class="meta-nav"><i class="fa fa-chevron-left"></i></span> Older Posts', 'cafe-faucher' ) ); ?>
      </span>
      <span class="nav-next">
        <?php previous_posts_link( __( 'Newer posts <span class="meta-nav"><i class="fa fa-chevron-right"></i></span>', 'cafe-faucher' ) ); ?>
      </span>
    </nav>

</section>
<?php wp_reset_query(); ?>
</section>

<aside class="col-sm-12 col-lg-3 small-side no-left no-right">
  <?php
  if(is_active_sidebar('sidebar-home')){
    dynamic_sidebar('sidebar-home');
  }
  ?>
</aside>
</article>

</main><!-- end of main -->
<?php get_footer(); ?>
<?php
/**
 * The Template for displaying the portfolio single.
 *
 * @package Cafe_Faucher_Child
 * @since Cafe Faucher Child 1.0
 */
get_header(); ?>
<main>
  <div class="container main-inner">
    <h1 class="entry-title-blog">
      <?php the_title(); ?>
    </h1>
    <section class="col-xs-12 col-sm-12 col-md-4 col-lg-4 no-left no-right-mobile">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 feature-box">
        <div class="entry-content">
          <?php the_content( __( 'READ MORE <span class="meta-nav"></span>', 'cafe-faucher-child' ) ); ?>
        </div>
      </div>
    </section>
    <section class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
      <div class="row">
        <div class="padding-fix col-xs-12 col-sm-12 col-md-12 col-lg-12 feature-box-portfolio">
          <?php the_meta(); ?>
        </div>
      </div>
    </section>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
     <nav class="nav-single">
      <span class="nav-previous">
        <?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '<i class="fa fa-chevron-left"></i>', 'Previous post link', 'cafe-faucher-child' ) . '</span> %title' ); ?>
      </span> 
      <span class="nav-next">
        <?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '<i class="fa fa-chevron-right"></i>', 'Next post link', 'cafe-faucher-child' ) . '</span>' ); ?>
      </span> 
    </nav>    <!-- .nav-single --> 
  </div>
</div><!-- end of main-inner -->
</main><!-- end of main -->
<?php get_footer(); ?>
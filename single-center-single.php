<?php
/**
 * Single Post Template: Center Single
 */
get_header(); ?>
<main>
  <div class="container-centered container main-inner full-width">
    <header class="entry-header-blog">
      <?php the_post_thumbnail(); ?>
      <?php if ( is_single() ) : ?>
        <h1 class="entry-title-blog">
          <?php the_title(); ?>
        </h1>
      <?php else : ?>
        <h2 class="entry-title-blog"> <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'cafe-faucher-child' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
          <?php the_title(); ?>
        </a> </h2>
      <?php endif; // is_single() ?>
    </header>
    <section class="col-xs-12 col-sm-12 col-md-12 col-lg-12 full-width">
      <div class="row">
        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'template-parts/content-blog', get_post_format() ); ?>
        <?php endwhile; // end of the loop. ?>
      </div>
    </section>
  </div><!-- end of main-inner -->
</main><!-- end of main -->
<?php get_footer(); ?>
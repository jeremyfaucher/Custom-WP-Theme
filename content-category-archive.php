<?php
/**
 * The default template for displaying content. Used for both index, category, archive & search.
 *
 * @package Cafe_Faucher
 * @since Cafe Faucher 1.1.6
 */
?>
<div class="entry-summary feature-box">
 <header class="entry-header-blog">
  <h2 class="entry-title-blog"> <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'cafe-faucher' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
    <?php the_title(); ?>
  </a> </h2>
  <?php the_post_thumbnail(); ?>
</header>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
    <div class="featured-post">
      <?php _e( 'Featured post', 'cafe-faucher' ); ?>
    </div>
  <?php endif; ?>
  <?php if ( is_home() || is_front_page() || is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
    <?php the_excerpt(); ?>
  <?php else : ?>
    <div class="entry-content">
      <?php the_content( __( 'READ MORE <span class="meta-nav"></span>', 'cafe-faucher' ) ); ?>
      <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'cafe-faucher' ), 'after' => '</div>' ) ); ?>
    </div>
  <?php endif; ?>
</article>
</div>
<?php
/**
 * The default template for displaying content. Used for both single.
 *
 * @package Cafe_Faucher
 * @since Cafe Faucher 1.1.6
 */
?>
<div class="entry-summary feature-box">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content">
      <?php the_content( __( 'READ MORE <span class="meta-nav"></span>', 'cafe-faucher' ) ); ?>
    </div>
    <footer class="entry-meta">
      <?php cafefaucher_entry_meta(); ?>
      <?php edit_post_link( __( 'Edit', 'cafe-faucher' ), '<span class="edit-link">', '</span>' ); ?>
      <?php if ( is_singular() && get_the_author_meta( 'description' ) && is_multi_author() ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries. ?>
        <div class="author-info">
          <div class="author-avatar"> <?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'cafe-faucher_author_bio_avatar_size', 68 ) ); ?> </div>
          <!-- .author-avatar -->
          <div class="author-description">
            <h2><?php printf( __( 'About %s', 'cafe-faucher' ), get_the_author() ); ?></h2>
            <p>
              <?php the_author_meta( 'description' ); ?>
            </p>
            <div class="author-link"> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"> <?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'cafe-faucher' ), get_the_author() ); ?> </a> </div>
            <!-- .author-link --> 
          </div>
          <!-- .author-description --> 
        </div>
        <!-- .author-info -->
      <?php endif; ?>
    </footer>
    <!-- .entry-meta --> 
  </article>
</div>
<nav class="nav-pagination" role="navigation">
  <span class="nav-previous">
    <?php previous_post_link( '%link', '<span class="meta-nav"><i class="fa fa-chevron-left"></i></span> %title', TRUE ); ?>
  </span> <span class="nav-next">
  <?php next_post_link( '%link', '%title <span class="meta-nav"><i class="fa fa-chevron-right"></i></span>', TRUE ); ?>
</span> 
</nav>
<?php
if(is_active_sidebar('after_entry-blog')){
  dynamic_sidebar('after_entry-blog');
}
?>
<div class="clearfix"></div>
<div class="comments feature-box">
  <?php comments_template( '', true ); ?>
</div>
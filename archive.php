<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cafe_Faucher
 * @since Cafe Faucher 1.0
 */
get_header(); ?>
<main>
	<div class="container main-inner">
	<header class="archive-header">
      <h1 class="archive-title"><?php if( is_category() ) { single_cat_title(); echo ': '; echo category_description(); }
      else {
		if ( is_day() ) :
			printf( __( 'Daily Archives: <p>%s</p>', 'cafe-faucher' ), get_the_date() );
			elseif ( is_month() ) :
				printf( __( 'Monthly Archives: <p>%s</p>', 'cafe-faucher' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'cafe-faucher' ) ) );
			elseif ( is_year() ) :
				printf( __( 'Yearly Archives: <p>%s</p>', 'cafe-faucher' ), get_the_date( _x( 'Y', 'yearly archives date format', 'cafe-faucher' ) ) );
			else :
				_e( 'Archives', 'cafe-faucher' );
			endif;
      }
      ?></h1>
    </header>
		<!-- .archive-header -->
		<section class="col-xs-12 col-sm-12 col-md-8 col-lg-8 no-left no-right">
			<?php if ( have_posts() ) : ?>
				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content-category-archive', get_post_format() );
				endwhile;
				cafefaucher_content_nav( 'nav-below' );
				?>
			<?php endif; ?>
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
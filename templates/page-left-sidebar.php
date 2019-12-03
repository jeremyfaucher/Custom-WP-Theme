<?php
/**
 * Template Name: Left Sidebar Page
 *
 * @package Cafe_Faucher
 * @since Cafe Faucher 1.0
 */
get_header();
?>
<main>
	<div class="container main-inner">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<section class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-push-4 feature-box">
				<?php the_content(); ?>
			</section>
			<aside class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-pull-8 no-left">
				<?php if ( is_active_sidebar( 'sidebar-page-left' ) ) :
				dynamic_sidebar( 'sidebar-page-left' ); ?>      
			<?php else : ?>
				<?php
				if(is_active_sidebar('sidebar-home')){
					dynamic_sidebar('sidebar-home'); } ?>
				<?php endif; ?>
			</aside>
		<?php endwhile; ?>
	<?php endif; ?>
</div><!-- end of main-inner -->
</main><!-- end of main -->
<?php get_footer(); ?>

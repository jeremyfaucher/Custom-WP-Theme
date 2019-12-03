<?php
/**
 * The template for displaying pages
 *
 * @package Cafe_Faucher
 * @since Cafe Faucher 1.1.1
 */
get_header();
?>
<main>
	<div class="container main-inner">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 feature-box no-left no-right">
				<?php the_content(); ?>
				<div class="clearfix"></div>
				<section class="col-xs-12 col-sm-12 col-md-12 col-lg-12 feature-box comments">
					<?php comments_template( '', true ); ?>
				</section>
			</div>
			<aside class="col-xs-12 col-sm-12 col-md-4 col-lg-4 no-right">
				<?php if ( is_active_sidebar( 'sidebar-page' ) ) :
				dynamic_sidebar( 'sidebar-page' ); ?>      
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

<?php 
/**
 * Template Name: Sitemap Page 
 */ 
get_header(); 
?>
<main>
	<div class="container main-inner">
		<div class="row">
			<section class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
					<div class="feature-box">
						<?php the_content(); ?>
						<div class="sitemap text-brand">
							<?php wp_nav_menu(array( 'theme_location'=> 'sitemap', 'container' => false, 'menu_class' => 'sitemap-page')); ?>
						</div>
					</div>
				</section>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</div><!-- end of main-inner -->
</main><!-- end of main -->
<?php get_footer(); ?>

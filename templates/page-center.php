<?php
/**
 * Template Name: Center Page
 */
get_header();
?>
<main>
	<div class="container-centered container main-inner full-width">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<section class="col-xs-12 col-sm-12 col-md-12 col-lg-12 feature-box">
				<?php the_content(); ?>
			</section>
		<?php endwhile; ?>
	<?php endif; ?>
</div><!-- end of main-inner -->
</main><!-- end of main -->
<?php get_footer(); ?>
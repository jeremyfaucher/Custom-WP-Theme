<?php
/**
 * Template Name: Fullwidth Landing Page
 */
get_header('landing');
?>
<main>
	<h1 class="container feature-full"><?php the_title(); ?></h1>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
	</main><!-- end of main -->
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer('landing'); ?>
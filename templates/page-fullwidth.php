<?php
/**
 * Template Name: Fullwidth Page
 *
 * @package Cafe_Faucher
 * @since Cafe Faucher 1.1.8
 */
get_header();
?>
<main>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h1 class="container"><?php the_title(); ?></h1>
		<section class="container">
			<?php the_content(); ?>
		</section>
	<?php endwhile; ?>
<?php endif; ?>
</main><!-- end of main -->
<?php get_footer(); ?>
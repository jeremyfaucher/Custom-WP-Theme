<?php
/**
* Template Name: Front Page
*/
get_header();
?>
<main class="container">
<section class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>
<?php endif; ?>
<?php echo do_shortcode('[products limit="8" columns="4" category="cookies, bars"]'); ?>
</section>
</main><!-- end of main -->
<?php get_footer(); ?>
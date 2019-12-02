<?php
/**
 * The Template for displaying the portfolio archive.
 *
 * @package Cafe_Faucher_Child
 * @since Cafe Faucher Child 1.0
 */

get_header(); ?>
<main>
	<div class="container main-inner">
		<section class="">
		<h1>Portfolio<span> &raquo; Graphic Design & Web Development</span></h1>
			<div class="grid feature-box-portfolio">
				<p>Hello, my name is Jeremy Faucher and thank you for visiting my portfolio. In my studies and work I have pursued doing both design and development. I enjoy making clean, modern, pixel perfect design using best coding practices and the process of creating good user experiences in a team environment.</p>

				<?php if ( have_posts() ) : ?>

					<?php		
/**
 * List the taxonomies and terms for a given post
 * 
 * @param int $post_id
 * @return string
 */
function get_the_current_tax_terms( $post_id ) {
    // get taxonomies for the current post type
	$taxonomies = get_object_taxonomies(get_post_type($post_id));
	$html = "";
	foreach ((array) $taxonomies as $taxonomy) {        
        // get the terms related to the post
		$terms = get_the_terms(get_the_ID(), $taxonomy);

		if (!empty($terms)) {
			$li = '';        
			foreach ($terms as $term)
				$li .= sprintf('<span class="port-cats1">%s</span>', ''.$term->name);
			if(!empty($li))
				$html .= sprintf('<span class="port-cats2">%s</span><span class="port-cats">%s</span>', '', $li);
		}
	}
	return sprintf('%s', $html);
}
/* Start the Loop */
while ( have_posts() ) : the_post();

				/* Include the post format-specific template for the content. If you want to
				 * this in a child theme then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'content-portfolio-archive', get_post_format() );
				endwhile;
				?>
			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>
		</div>
	</section>
</div><!-- end of main-inner -->
</main><!-- end of main -->
<?php get_footer(); ?>
<?php
/**
 * The Template for displaying the portfolio archive content.
 *
 * @package Cafe_Faucher_Child
 * @since Cafe Faucher Child 1.0
 */
?>
<article class="portfolio-item grid-item" <?php post_class(); ?>>
	<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'cafe-faucher-child' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
		<?php the_post_thumbnail(); ?>
		<h2 class=""><?php the_title(); ?></h2>
	</a>
	<?php echo get_the_current_tax_terms(get_the_ID()); ?>
</article>

<?php
/**
 * Featured custom excerpts
 *
 * @since Cafe Faucher 1.0
 */
function custom_wp_trim_excerpt($text) {
 global $post;
 $raw_excerpt = $text;
 if ( '' == $text ) {
    //Retrieve the post content. 
    $text = get_the_content('');

    //Delete all shortcode tags from the content. 
    $text = strip_shortcodes( $text );

    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]&gt;', $text);

    $allowed_tags = '<br>,<p>,<a>,<em>,<strong>,<img>,<pre>'; /*** MODIFY THIS. Add the allowed HTML tags separated by a comma.***/
    $text = strip_tags($text, $allowed_tags);

    $excerpt_word_count = 40; /*** MODIFY THIS. change the excerpt word count to any integer you like.***/
    $excerpt_length = apply_filters('excerpt_length', $excerpt_word_count); 

    $excerpt_end = '<a href="'. get_permalink($post->ID) . '" class="meta-nav">...' . 'Read More' . '</a>'; /*** MODIFY THIS. change the excerpt endind to something else.***/
    $excerpt_more = apply_filters('excerpt_more', ' ' . $excerpt_end);

    $words = preg_split("/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY);
    if ( count($words) > $excerpt_length ) {
        array_pop($words);
        $text = implode(' ', $words);
        $text = $text . $excerpt_more;
    } else {
        $text = implode(' ', $words);
    }
}
return apply_filters('wp_trim_excerpt', $text, $raw_excerpt);
}

/**
 * Custom Exerpts filters
 *
 * @since Cafe Faucher 1.1.5
 */
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'custom_wp_trim_excerpt');
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
} else {
    $excerpt = implode(" ",$excerpt);
} 
$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
return $excerpt;
}
function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
} else {
    $content = implode(" ",$content);
} 
$content = preg_replace('/\[.+\]/','', $content);
$content = apply_filters('the_content', $content); 
$content = str_replace(']]>', ']]&gt;', $content);
return $content;
}
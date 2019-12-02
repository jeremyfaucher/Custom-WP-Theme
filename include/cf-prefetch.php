<?php
/**
 * Cafe Faucher Theme Extentions
 *
 * @package Cafe_Faucher
 * @since Cafe Faucher 1.0
 */

//* Adding DNS Prefetching
function ism_dns_prefetch() {
	echo '<meta http-equiv="x-dns-prefetch-control" content="on">
	<link rel="dns-prefetch" href="//wittenbergchamber.com/" />
	<link rel="dns-prefetch" href="//google-analytics.com" />
	<link rel="dns-prefetch" href="//s.w.org" />';
}
add_action('wp_head', 'ism_dns_prefetch', 0);

/**
 * add script to head with wrapping php
 */
function addtohead_cf() { 
	?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114664818-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-114664818-1');
	</script>
	<?php 
}
add_action('wp_head', 'addtohead_cf');
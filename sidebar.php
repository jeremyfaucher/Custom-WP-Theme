<aside class="col-xs-12 col-sm-12 col-md-4 col-lg-4 no-right">
	<?php if ( is_active_sidebar( 'blog' ) ) :
	dynamic_sidebar( 'blog' ); ?>
<?php else : ?>
	<?php
	if(is_active_sidebar('sidebar-home')){
		dynamic_sidebar('sidebar-home'); } ?>
	<?php endif; ?>
</aside>

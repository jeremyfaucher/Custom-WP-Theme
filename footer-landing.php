<footer class="site-footer">
  <div class="container footer-inner">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sitemap">
        <?php wp_nav_menu(array( 'theme_location'=> 'footer', 'container' => false, 'menu_class' => 'list-inline')); ?>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 copyright"> 
        <a href='<?php echo esc_url( home_url( '/' ) ); ?>' target="_blank" rel="nofollow">&copy; <?php echo date('Y') ?> <?php echo get_theme_mod( 'footer_copyright_section' ); ?></a><br />
        <a href="/privacy-policy">Privacy Policy</a>
      </div>
    </div>
  </div>
</footer>

<span id="top-link-block" class="hidden"> <a href="#top" class="well well-sm back-to-top"  onclick="$('html,body').animate({scrollTop:0},'slow');return false;"> <i class="fa fa-arrow-up"></i> </a> </span> 

<?php wp_footer() ?>
</body></html>

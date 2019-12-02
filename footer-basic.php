<div class="container">
  <?php if (is_singular('post')) : ?>
    <?php
    if(is_active_sidebar('above-footer')){
      dynamic_sidebar('above-footer');
    }
    ?>
  <?php endif; ?>
</div><!-- end of main-inner -->
<div class="clearfix"></div>
<div class="footer-outer">
  <div class="container footer-inner">
  <h3 class="text-center">Resources</h3>
    <div class="row">
      <div class="footer-widget col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <?php
        if(is_active_sidebar('footer-left')){
          dynamic_sidebar('footer-left');
        }
        ?>
      </div>
      <div class="footer-widget col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <?php
        if(is_active_sidebar('footer-middle')){
          dynamic_sidebar('footer-middle');
        }
        ?>
      </div>
      <div class="footer-widget col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <?php
        if(is_active_sidebar('footer-right')){
          dynamic_sidebar('footer-right');
        }
        ?>
      </div>
    </div>
  </div>
</div>
<footer class="site-footer">
  <div class="container footer-inner">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sitemap">
        <?php wp_nav_menu(array( 'theme_location'=> 'footer', 'container' => false, 'menu_class' => 'list-inline')); ?>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 copyright"> 
        <a href='<?php echo esc_url( home_url( '/' ) ); ?>'>&copy; <?php echo date('Y') ?> <?php echo get_theme_mod( 'footer_copyright_section' ); ?></a><br />
        <a href="/privacy-policy">Privacy Policy</a>
      </div>
    </div>
  </div>
</footer>
<span id="top-link-block" class="hidden"> <a href="#top" class="well well-sm back-to-top"  onclick="$('html,body').animate({scrollTop:0},'slow');return false;"> <i class="fa fa-arrow-up"></i> </a> </span> 
<?php wp_footer() ?>
</body></html>
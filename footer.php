<footer class="container site-footer">
<section class="col-sm-12 col-lg-12 no-left">
<div class="col-sm-12 col-lg-3 copyright no-left"> 
<span class="copyright">All Rights Reserved<br>&copy; <?php echo date('Y') ?> <?php echo get_theme_mod( 'footer_copyright_section' ); ?></span>
<a href="/privacy-policy" class="footer-links">Privacy Policy</a>
</div>
<div class="col-sm-12 col-lg-3 no-left sitemap"> 
<span class="footer-headings">Sitemap</span>
<?php wp_nav_menu(array( 'theme_location'=> 'footer', 'container' => false, 'menu_class' => 'footer-links')); ?>
</div>
<div class="col-sm-12 col-lg-6 no-left no-right social-block"> 
<a class="socials" href="https://twitter.com/edimity1" target="_blank"><span class="icon-twitter"></span></a>
<a class="socials" href="https://www.linkedin.com/company/edimity" target="_blank"><span class="icon-linkedin2"></span></a>
<a class="socials" href="https://www.pinterest.com/edimity1" target="_blank"><span class="icon-pinterest"></span></a>
<a class="socials" href="https://edimity.com/contact" target="_blank"><span class="icon-envelope"></span></a>
</div>
</section> 
<div class="clearfix"></div>
</footer>
<?php wp_footer() ?>
</body></html>

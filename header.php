<?php
/**
* Header file for the Cafe Faucher WordPress theme.
*
* @package Cafe_Faucher
* @since Cafe Faucher 1.1
*/
?><!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="site-header container wp-block-columns" role="banner">
   <div class="wp-block-column logo">
    <a href="<?php site_url(); ?>" class="desktop" rel="home" itemprop="url"><img src="<?php site_url(); ?>/wp-content/uploads/logo.png" class="logo" alt="Chip Bakery" /></a>
  </div>
  <div class="wp-block-column">
   <nav class="mobile-menu">
    <input id="hamburger" type="checkbox" name="hamb" value="hamb">
    <label class="hamb" for="hamb">☰</label>
    <?php wp_nav_menu(array(
      'theme_location' => 'main', 
      'container' => false, 
      'menu_class' => 'mobile', 
    )); 
    ?>
  </nav>
  <?php wp_nav_menu(array(
    'theme_location' => 'main', 
    'container' => false, 
    'menu_class' => 'header-menu wp-block-columns',
    "li_class" => "wp-block-column", 
  )); 
  ?>
</div>
<script type="text/javascript">
// This JS is use to change between the hamburger icon and the X icon
checkbox = document.getElementById("hamburger");
lab = document.getElementsByTagName("label");
function checker(){
  if(checkbox.checked == false){
    lab[0].innerHTML = '☰';
  }else{
    lab[0].innerHTML = '✖';
  }
}
checkbox.onclick = function(){
  checker();
}
</script>
<?php
  // Output the menu modal.
get_template_part( 'template-parts/cf-woocommerce-cart' );
?>
</header>
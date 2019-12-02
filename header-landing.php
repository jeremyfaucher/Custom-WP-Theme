<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="site-header">
    <div class="container header-inner">
     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 logo">
      <?php
      if( function_exists( 'the_custom_logo' ) ) {
        if(has_custom_logo()) {
          the_custom_logo();
        } else {
          ?>
          <h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
          <?php
        }
      }
      ?>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 c2a">
          <span class="tagline"><?php bloginfo( 'description' ); ?></span> 
        </div>
      </div>
    </div>
    <div class="no-left col-xs-12 col-sm-12 col-md-8 col-lg-8 no-right">
      <nav id="primary_nav_wrap" class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <?php wp_nav_menu(array(
            'theme_location' => 'landing', 
            'container' => false, 
            'menu_class' => 'nav navbar-nav', )); ?>
          </div>
        </nav>
      </div>
    </div>
  </header>
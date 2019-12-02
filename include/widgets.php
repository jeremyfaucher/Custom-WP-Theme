<?php
/**
 * Cafe Faucher Theme Widgets
 * Registers widgets
 *
 * @package Cafe_Faucher
 * @since Cafe Faucher 1.0
 */
function cafefaucher_widgets_init() {

    register_sidebar( array(
    'name' => 'Homepage Sidebar',
    'id' => 'sidebar-home',
    'before_widget' => '<div class="widget feature-box">',
    'after_widget' => '<div class="clearfix"></div></div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ) );
    //register_sidebar( array(
    //'name' => 'Homepage Top Right (Slider)',
    //'description' => 'Use [cf_carousel] shortcode to display slider',
    //'id' => 'slider-home',
    //'before_widget' => '',
    //'after_widget' => '',
    //'before_title' => '<h3>',
    //'after_title' => '</h3>',
    //) );
    register_sidebar( array(
    'name' => 'Blog Archives Sidebar',
    'id' => 'blog-archives',
    'before_widget' => '<div class="widget feature-box">',
    'after_widget' => '<div class="clearfix"></div></div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ) );
  register_sidebar( array(
    'name' => 'Blog Single Sidebar',
    'id' => 'blog',
    'before_widget' => '<div class="widget feature-box">',
    'after_widget' => '<div class="clearfix"></div></div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ) );
  register_sidebar( array(
    'name' => 'Blog Single After Entry',
    'id' => 'after_entry-blog',
    'before_widget' => '',
    'after_widget' => '<div class="clearfix"></div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ) );
  register_sidebar( array(
    'name' => 'Page Sidebar Right',
    'id' => 'sidebar-page',
    'before_widget' => '<div class="widget feature-box">',
    'after_widget' => '<div class="clearfix"></div></div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ) );
     register_sidebar( array(
    'name' => 'Page Sidebar Right small',
    'id' => 'sidebar-right-small',
    'before_widget' => '<div class="widget feature-box">',
    'after_widget' => '<div class="clearfix"></div></div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ) );
  register_sidebar( array(
    'name' => 'Page Sidebar Left',
    'id' => 'sidebar-page-left',
    'before_widget' => '<div class="widget feature-box">',
    'after_widget' => '<div class="clearfix"></div></div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ) );
      register_sidebar( array(
    'name' => 'News Sidebar Right',
    'id' => 'sidebar-news',
    'before_widget' => '<div class="widget feature-box">',
    'after_widget' => '<div class="clearfix"></div></div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ) );
    register_sidebar( array(
    'name' => 'Above Footer - Single Post',
    'id' => 'above-footer',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ) );
   register_sidebar( array(
    'name' => 'Above Footer',
    'id' => 'above-footer',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ) );
 register_sidebar( array(
    'name' => 'Footer Left',
    'id' => 'footer-left',
    'before_widget' => '<div class="foot-widget">',
    'after_widget' => '<div class="clearfix"></div></div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ) );
 register_sidebar( array(
    'name' => 'Footer Middle',
    'id' => 'footer-middle',
    'before_widget' => '<div class="foot-widget">',
    'after_widget' => '<div class="clearfix"></div></div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ) );
 register_sidebar( array(
    'name' => 'Footer Right',
    'id' => 'footer-right',
    'before_widget' => '<div class="foot-widget">',
    'after_widget' => '<div class="clearfix"></div></div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ) );
  register_sidebar( array(
    'name' => '404 Page Sidebar',
    'id' => 'sidebar-404',
    'before_widget' => '<div class="widget feature-box">',
    'after_widget' => '<div class="clearfix"></div></div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'cafefaucher_widgets_init' );
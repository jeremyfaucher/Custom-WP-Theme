<?php
/**
 * Cafe Faucher Theme Customizer.
 *
 * @package Cafe_Faucher
 *
 * @since Cafe Faucher 1.0
 */

function cafefaucher_customize_register( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'cafefaucher_customize_register' );

// Customize Logo instead of Text
function cafefaucher_theme_customizer( $wp_customize ) {

    // Create Header Background color setting
    $wp_customize->add_setting( 'header_color', array(
        'default' => '#c2d6e2',
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'postMessage',
        ));
    
    // Add Header Background color control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_color', array(
        'label' => __( 'Header Background Color', 'cafe-faucher' ),
        'section' => 'colors',
        )));

     //add Footer Background Settings
    $wp_customize->add_setting('footer_color', array(
        'default' => '#396B89',
        'sanitize_callback' => 'sanitize_hex_color',
        ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_color', array(
        'label' => __( 'Footer Background Color', 'cafe-faucher' ),
        'section' => 'colors',
        'settings' => 'footer_color',
        )));

    // Add Footer Copyright Section
    $wp_customize->add_section( 'footer_copyright_section' , array(
        'title'       => __( 'Footer', 'cafe-faucher' ),
        'priority'    => 80,
        'description' => 'Add your Copyright & Powered By text here',
        ) );

    $wp_customize->add_setting( 'footer_copyright_section',
        array(
            'default' => 'Cafe Faucher',
            'sanitize_callback' == 'esc_url_raw',
            ));

    $wp_customize->add_control('footer_copyright_section',
        array( 
            'label'     => 'Footer Text',
            'section'   => 'footer_copyright_section',
            'type'      => 'textarea',
            'sanitize_callback' => 'esc_url_raw',
            ));

}
add_action( 'customize_register', 'cafefaucher_theme_customizer' );


/**
 * Inject Customizer CSS when appropriate
 */
function cafefaucher_customizer_css() {
    $header_color = get_theme_mod('header_color');
    
    ?>
    <style type="text/css">
        .site-header {
            background-color: <?php echo $header_color; ?>
        }
    </style>

    <?php
    $header_textcolor = get_theme_mod('header_textcolor');
    ?>
    <style type="text/css">
        h1.site-title a {
            color: #<?php echo $header_textcolor; ?>
        }
    </style>

    <?php
    $footer_color = get_theme_mod('footer_color');
    
    ?>
    <style type="text/css">
        .site-footer {
            background-color: <?php echo $footer_color; ?>
        }
    </style>
    
    <?php
}
add_action( 'wp_head', 'cafefaucher_customizer_css' );
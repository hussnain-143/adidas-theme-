<?php
function adidas_footer_customize_register($wp_customize) {
    // Add Section
    $wp_customize->add_section('adidas_footer_section', array(
        'title'    => __('Adidas Footer Settings', 'adidas'),
        
    ));

    // Add Setting
    $wp_customize->add_setting('adidas_show_footer', array(
        'default'           => true,
        'sanitize_callback' => 'wp_validate_boolean',
        'transport'         => 'postMessage', // For live preview
    ));

    // Add Control (Checkbox)
    $wp_customize->add_control('adidas_show_footer_control', array(
        'label'    => __('Show Footer Form', 'adidas'),
        'section'  => 'adidas_footer_section',
        'settings' => 'adidas_show_footer',
        'type'     => 'checkbox',
    ));
}
add_action('customize_register', 'adidas_footer_customize_register');


?>
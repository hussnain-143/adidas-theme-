<?php
function adidas_header_customize_register($wp_customize) {
    // Add Section
    $wp_customize->add_section('adidas_header_3_section', array(
        'title'    => __('Adidas Header Setting', 'adidas'),
        'priority' => 30,
    ));

    // Add Setting
    $wp_customize->add_setting('adidas_show_header_3', array(
        'default'           => true,
        'sanitize_callback' => 'wp_validate_boolean',
        'transport'         => 'refresh', // For live preview
    ));

    // Add Control (Checkbox)
    $wp_customize->add_control('adidas_show_header_3_control', array(
        'label'    => __('Show Header 3', 'adidas'),
        'section'  => 'adidas_header_3_section',
        'settings' => 'adidas_show_header_3',
        'type'     => 'checkbox',
    ));
}
add_action('customize_register', 'adidas_header_customize_register');


?>
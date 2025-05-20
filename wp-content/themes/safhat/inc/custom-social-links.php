<?php
/**
 * Custom Social Links Customizer.
 *
 * @package Safhat
 */


function social_links_customize_register( $wp_customize ) {
    $wp_customize->add_section('social_links_section', array(
        'title' => __('Social Links', 'safhat'),
        'priority' => 30,
    ));

    // Add settings
    $wp_customize->add_setting('facebook_link');
    $wp_customize->add_setting('instagram_link');
    $wp_customize->add_setting('tiktok_link');
    $wp_customize->add_setting('whatsapp_link');

    // Add controls

    $wp_customize->add_control('facebook_link', array(
        'label' => 'Facebook Link',
        'section' => 'social_links_section',
        'type' => 'url',
    ));

    $wp_customize->add_control('instagram_link', array(
        'label' => 'Instagram Link',
        'section' => 'social_links_section',
        'type' => 'url',
    ));

    $wp_customize->add_control('tiktok_link', array(
        'label' => 'TikTok Link',
        'section' => 'social_links_section',
        'type' => 'url',
    ));
    
    $wp_customize->add_control('whatsapp_link', array(
        'label' => 'WhatsApp Link',
        'section' => 'social_links_section',
        'type' => 'url',
    ));


}
add_action('customize_register','social_links_customize_register');

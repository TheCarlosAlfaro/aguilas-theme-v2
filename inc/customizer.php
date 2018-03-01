<?php
/**
 * Aguilas Theme Customizer
 *
 * @package Aguilas
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function aguilas_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';


	// Home Hero section
    $wp_customize->add_section('home_hero', array(
		'title' => __('Home Hero', 'aguilas'),
		'description' => sprintf(__('Options for Home Hero', 'aguilas')),
		'priority' => 130
	));
	$wp_customize->add_setting('home_hero_heading', array(
		'default' => _x('Aguilas Theme', 'aguilas'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('home_hero_heading', array(
		'label' => __('Heading', 'aguilas'),
		'section' => 'home_hero',
		'priority' => 2
	));

	$wp_customize->add_setting('home_hero_text', array(
		'default' => _x('The official WordPress theme for Aguilas Centro Familiar Cristiano.', 'aguilas'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('home_hero_text', array(
		'label' => __('Text', 'aguilas'),
		'section' => 'home_hero',
		'priority' => 3
	));

	// Home Hero Buttons
	// Home Hero Button #1
	$wp_customize->add_setting('btn1_url', array(
		'default' => _x('#', 'aguilas'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('btn1_url', array(
		'label' => __('Button 1 URL', 'aguilas'),
		'section' => 'home_hero',
		'priority' => 4
	));
	$wp_customize->add_setting('btn1_text', array(
		'default' => _x('Get it now!', 'aguilas'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('btn1_text', array(
		'label' => __('Button 1 Text', 'aguilas'),
		'section' => 'home_hero',
		'priority' => 5
	));

	// Home Hero Button #2
	$wp_customize->add_setting('btn2_url', array(
		'default' => _x('#', 'aguilas'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('btn2_url', array(
		'label' => __('Button 2 URL', 'aguilas'),
		'section' => 'home_hero',
		'priority' => 4
	));
	$wp_customize->add_setting('btn2_text', array(
		'default' => _x('Learn more', 'aguilas'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('btn2_text', array(
		'label' => __('Button 2 Text', 'aguilas'),
		'section' => 'home_hero',
		'priority' => 5
	));


	// Home Hero Image

	$wp_customize->add_setting('home_hero_image', array(
		'default' => get_bloginfo('template_directory').'/img/showcase.jpg',
		'type' => 'theme_mod'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_hero_image', array(
		'label' => __('Home Hero Image', 'aguilas'),
		'section' => 'home_hero',
		'settings' => 'home_hero_image',
		'priority' => 1
	)));

	// --------------


	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'aguilas_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'aguilas_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'aguilas_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function aguilas_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function aguilas_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function aguilas_customize_preview_js() {
	wp_enqueue_script( 'aguilas-customizer', get_template_directory_uri() . '/dist/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'aguilas_customize_preview_js' );

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


	/*
	* HOME HERE SECTION
	*/
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

	// Home Hero Social Links
	// Home Hero Link #1
	$wp_customize->add_setting('social1_url', array(
		'default' => _x('#', 'aguilas'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('social1_url', array(
		'label' => __('Facebook Link URL', 'aguilas'),
		'section' => 'home_hero',
		'priority' => 4
	));


	// Home Hero Link #2
	$wp_customize->add_setting('social2_url', array(
		'default' => _x('#', 'aguilas'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('social2_url', array(
		'label' => __('Instagram Link URL', 'aguilas'),
		'section' => 'home_hero',
		'priority' => 4
	));

	// Home Hero Link #3
	$wp_customize->add_setting('social3_url', array(
		'default' => _x('#', 'aguilas'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('social3_url', array(
		'label' => __('Twitter Link URL', 'aguilas'),
		'section' => 'home_hero',
		'priority' => 4
	));

	// Home Hero Link #4
	$wp_customize->add_setting('social4_url', array(
		'default' => _x('#', 'aguilas'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('social4_url', array(
		'label' => __('Youtube Link URL', 'aguilas'),
		'section' => 'home_hero',
		'priority' => 4
	));

	// Home Hero Link #5
	$wp_customize->add_setting('social5_url', array(
		'default' => _x('#', 'aguilas'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('social5_url', array(
		'label' => __('Website Link URL', 'aguilas'),
		'section' => 'home_hero',
		'priority' => 4
	));

	// Home Hero Desktop Image

	$wp_customize->add_setting('home_hero_image', array(
		'default' => get_bloginfo('template_directory').'/img/showcase.jpg',
		'type' => 'theme_mod'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_hero_image', array(
		'label' => __('Home Hero Image 1440x800px', 'aguilas'),
		'section' => 'home_hero',
		'settings' => 'home_hero_image',
		'priority' => 1
	)));

	// Home Hero Mobile Image

	$wp_customize->add_setting('home_hero_mobile_image', array(
		'default' => get_bloginfo('template_directory').'/img/showcase.jpg',
		'type' => 'theme_mod'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_hero_mobile_image', array(
		'label' => __('Home Hero Mobile Image 640x1000px', 'aguilas'),
		'section' => 'home_hero',
		'settings' => 'home_hero_mobile_image',
		'priority' => 1
	)));

	/*
	* HOME PODCAST SECTION
	*/
    $wp_customize->add_section('home_podcast', array(
		'title' => __('Home Podcast', 'aguilas'),
		'description' => sprintf(__('Options for Home Podcast', 'aguilas')),
		'priority' => 130
	));

	$wp_customize->add_setting('home_podcast_heading', array(
		'default' => _x('Aguilas Theme', 'aguilas'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('home_podcast_heading', array(
		'label' => __('Heading', 'aguilas'),
		'section' => 'home_podcast',
		'priority' => 2
	));

	$wp_customize->add_setting('home_podcast_sub_heading', array(
		'default' => _x('The official WordPress theme', 'aguilas'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('home_podcast_sub_heading', array(
		'label' => __('Sub Heading', 'aguilas'),
		'section' => 'home_podcast',
		'priority' => 3
	));

	$wp_customize->add_setting('home_podcast_paragraph', array(
		'default' => _x('Paragraph example.', 'aguilas'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('home_podcast_paragraph', array(
		'label' => __('Paragraph', 'aguilas'),
		'section' => 'home_podcast',
		'priority' => 3
	));

	$wp_customize->add_setting('home_podcast_button_text', array(
		'default' => _x('Button Text', 'aguilas'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('home_podcast_button_text', array(
		'label' => __('Button Text', 'aguilas'),
		'section' => 'home_podcast',
		'priority' => 3
	));

	$wp_customize->add_setting('home_podcast_button_url', array(
		'default' => _x('#', 'aguilas'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('home_podcast_button_url', array(
		'label' => __('Button URL', 'aguilas'),
		'section' => 'home_podcast',
		'priority' => 3
	));

	$wp_customize->add_setting('home_podcast_links_title', array(
		'default' => _x('Suscribete en:', 'aguilas'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('home_podcast_links_title', array(
		'label' => __('Links title', 'aguilas'),
		'section' => 'home_podcast',
		'priority' => 3
	));

	// Link TEXT & URL'S
	// Link 1
	$wp_customize->add_setting('home_podcast_link_text_1', array(
		'default' => _x('Apple Podcast', 'aguilas'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('home_podcast_link_text_1', array(
		'label' => __('Link Text 1', 'aguilas'),
		'section' => 'home_podcast',
		'priority' => 3
	));
	$wp_customize->add_setting('home_podcast_link_url_1', array(
		'default' => _x('#', 'aguilas'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('home_podcast_link_url_1', array(
		'label' => __('URL 1', 'aguilas'),
		'section' => 'home_podcast',
		'priority' => 3
	));
	// Link 2
	$wp_customize->add_setting('home_podcast_link_text_2', array(
		'default' => _x('Google Play', 'aguilas'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('home_podcast_link_text_2', array(
		'label' => __('Link Text 2', 'aguilas'),
		'section' => 'home_podcast',
		'priority' => 3
	));
	$wp_customize->add_setting('home_podcast_link_url_2', array(
		'default' => _x('#', 'aguilas'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('home_podcast_link_url_2', array(
		'label' => __('URL 2', 'aguilas'),
		'section' => 'home_podcast',
		'priority' => 3
	));
	// Link 3
	$wp_customize->add_setting('home_podcast_link_text_3', array(
		'default' => _x('Spotify', 'aguilas'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('home_podcast_link_text_3', array(
		'label' => __('Link Text 3', 'aguilas'),
		'section' => 'home_podcast',
		'priority' => 3
	));
	$wp_customize->add_setting('home_podcast_link_url_3', array(
		'default' => _x('#', 'aguilas'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('home_podcast_link_url_3', array(
		'label' => __('URL 3', 'aguilas'),
		'section' => 'home_podcast',
		'priority' => 3
	));
	// Link 4
	$wp_customize->add_setting('home_podcast_link_text_4', array(
		'default' => _x('YouTube', 'aguilas'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('home_podcast_link_text_4', array(
		'label' => __('Link Text 4', 'aguilas'),
		'section' => 'home_podcast',
		'priority' => 3
	));
	$wp_customize->add_setting('home_podcast_link_url_4', array(
		'default' => _x('#', 'aguilas'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('home_podcast_link_url_4', array(
		'label' => __('URL 4', 'aguilas'),
		'section' => 'home_podcast',
		'priority' => 3
	));

	// Podcast Image
	$wp_customize->add_setting('home_podcast_image', array(
		'default' => get_bloginfo('template_directory').'/img/showcase.jpg',
		'type' => 'theme_mod'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_podcast_image', array(
		'label' => __('Image', 'aguilas'),
		'section' => 'home_podcast',
		'settings' => 'home_podcast_image',
		'priority' => 1
	)));

	/*
	* HOME PREDICAS SECTION
	*/
	$wp_customize->add_section('home_predicas', array(
		'title' => __('Home Predicas', 'aguilas'),
		'description' => sprintf(__('Options for Home Predicas', 'aguilas')),
		'priority' => 130
	));

	$wp_customize->add_setting('home_predicas_heading', array(
		'default' => _x('Aguilas Theme', 'aguilas'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('home_predicas_heading', array(
		'label' => __('Heading', 'aguilas'),
		'section' => 'home_predicas',
		'priority' => 2
	));

	$wp_customize->add_setting('home_predicas_sub_heading', array(
		'default' => _x('The official WordPress theme', 'aguilas'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('home_predicas_sub_heading', array(
		'label' => __('Sub Heading', 'aguilas'),
		'section' => 'home_predicas',
		'priority' => 3
	));

	$wp_customize->add_setting('home_predicas_button_text', array(
		'default' => _x('Button Text', 'aguilas'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('home_predicas_button_text', array(
		'label' => __('Button Text', 'aguilas'),
		'section' => 'home_predicas',
		'priority' => 3
	));

	$wp_customize->add_setting('home_predicas_button_url', array(
		'default' => _x('#', 'aguilas'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('home_predicas_button_url', array(
		'label' => __('Button URL', 'aguilas'),
		'section' => 'home_predicas',
		'priority' => 3
	));

	$wp_customize->add_setting('home_predicas_video_url', array(
		'default' => _x('#', 'aguilas'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('home_predicas_video_url', array(
		'label' => __('Video URL', 'aguilas'),
		'section' => 'home_predicas',
		'priority' => 3
	));

	/*
	* HOME PREDICAS SECTION
	*/
	$wp_customize->add_section('home_devotionals', array(
		'title' => __('Home Devotionals', 'aguilas'),
		'description' => sprintf(__('Options for Home Devotionals', 'aguilas')),
		'priority' => 130
	));

	$wp_customize->add_setting('home_devotionals_heading', array(
		'default' => _x('Aguilas Theme', 'aguilas'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('home_devotionals_heading', array(
		'label' => __('Heading', 'aguilas'),
		'section' => 'home_devotionals',
		'priority' => 2
	));

	$wp_customize->add_setting('home_devotionals_sub_heading', array(
		'default' => _x('The official WordPress theme', 'aguilas'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('home_devotionals_sub_heading', array(
		'label' => __('Sub Heading', 'aguilas'),
		'section' => 'home_devotionals',
		'priority' => 3
	));

	// Home PREDICAS Image
	$wp_customize->add_setting('home_devotionals_image', array(
		'default' => get_bloginfo('template_directory').'/img/showcase.jpg',
		'type' => 'theme_mod'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_devotionals_image', array(
		'label' => __('Background Image', 'aguilas'),
		'section' => 'home_devotionals',
		'settings' => 'home_devotionals_image',
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

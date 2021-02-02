<?php
function mordern_customize_register($wp_customize){

	$wp_customize->add_panel( 'mordern_header', array(
		'priority' => 25,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Header and footer settings'),

	) );

	$wp_customize->add_section('mordern_text', array(
		'title'    => __('Header Text'),
		'description' => '',
		'priority' => 120,
		'panel' => 'mordern_header'
	));

	$wp_customize->add_setting('mordern_text_input', array(
		//'default' => '#',
		'capability'     => 'edit_theme_options',

	));

	$wp_customize->add_control('mordern_text_input', array(
		'label'      => __('Input your header text here'),
		'section'    => 'mordern_text',
	));

	//
	$wp_customize->add_section('mordern_text_copyright', array(
		'title'    => __('Footer copyright text'),
		'description' => '',
		'priority' => 120,
		'panel' => 'mordern_header'
	));

	$wp_customize->add_setting('mordern_text_footer', array(
		//'default' => '#',
		'capability'     => 'edit_theme_options',

	));

	$wp_customize->add_control('mordern_text_footer', array(
		'label'      => __('Input your footer copyright text here'),
		'section'    => 'mordern_text_copyright',
	));

//

	$wp_customize->add_section('mordern_text_scheme', array(
		'title'    => __('Social Icon'),
		'description' => '',
		'priority' => 120,
		'panel' => 'mordern_header'
	));
//

	$wp_customize->add_setting('mordern_fb_url', array(
		//'default' => '#',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw'
	));

	$wp_customize->add_control('mordern_fb_url', array(
		'label'      => __('Facebook'),
		'section'    => 'mordern_text_scheme',
	));

//
    $wp_customize->add_setting('mordern_twitter_url', array(
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
 
    ));
 
    $wp_customize->add_control('mordern_twitter_url', array(
        'label'      => __('Twitter'),
        'section'    => 'mordern_text_scheme',
    ));
//


    $wp_customize->add_setting('mordern_linkedin_url', array(
    	'capability'     => 'edit_theme_options',
    	'sanitize_callback' => 'esc_url_raw'

    ));

    $wp_customize->add_control('mordern_linkedin_url', array(
    	'label'      => __('Linked In'),
    	'section'    => 'mordern_text_scheme',
    ));
//
    $wp_customize->add_setting('mordern_pinterest_url', array(
    	'capability'     => 'edit_theme_options',
    	'sanitize_callback' => 'esc_url_raw'

    ));

    $wp_customize->add_control('mordern_pinterest_url', array(
    	'label'      => __('Pinterest'),
    	'section'    => 'mordern_text_scheme',
    ));
//

    $wp_customize->add_setting('mordern_googleplus_url', array(
    	'capability'     => 'edit_theme_options',
    	'sanitize_callback' => 'esc_url_raw'

    ));

    $wp_customize->add_control('mordern_googleplus_url', array(
    	'label'      => __('Googleplus'),
    	'section'    => 'mordern_text_scheme',
    ));

//

    $wp_customize->add_section('mordern_footer_text', array(
    	'title'    => __('Footer text'),
    	'description' => '',
    	'priority' => 120,
    	'panel' => 'mordern_header'
    ));

    $wp_customize->add_setting('mordern_footer', array(
		//'default' => '#',
    	'capability'     => 'edit_theme_options',

    ));

    $wp_customize->add_control('mordern_footer', array(
    	'label'      => __('Input your footer text here'),
    	'section'    => 'mordern_footer_text',
    ));        	
//

    $wp_customize->add_section('text_footer', array(
    	'title'    => __('Left footer description'),
    	'description' => '',
    	'priority' => 120,
    	'panel' => 'mordern_header'
    ));

    $wp_customize->add_setting( 'default_textarea',
    	array(
    		'default' => '',
    		'transport' => 'refresh',
    		'capability'     => 'edit_theme_options',
    	)
    );

    $wp_customize->add_control( 'default_textarea',
    	array(
    		'label' => __( 'Default Textarea Control' ),
    		'description' => esc_html__( 'Sample description' ),
    		'section' => 'text_footer',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'textarea',
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
      	'class' => 'my-custom-class',
      	'style' => 'border: 1px solid #999',
      	'placeholder' => __( 'Enter message...' ),
      ),
  )
    );

}
add_action('customize_register', 'mordern_customize_register');	
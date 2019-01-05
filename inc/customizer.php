<?php
	
	/* Customizer Register */
	function massively_customizer_register( $wp_customize ) {

		//	=============================
	    //	= Theme Options Panel		= 
	    //	=============================
	    $wp_customize->add_panel( 'theme_settings', array(
		  'title' => __( 'Theme Options', 'massively' ),
		  'description' => '', // Include html tags such as <p>
		  'priority' => 10, // Mixed with top-level-section hierarchy. 
		) );




		/*-----------------------------*/
	    /* Header Options */
	    /*-----------------------------*/
	    $wp_customize->add_section( 'massively_header_options', array(
	    	'title'			=> __( 'Header Options', 'massively' ),
	    	'description'	=> __( '<i>Custom <b>Title</b> and <b>Description</b> text is show only on home page, Do not show on other pages and you can use html tag for your required.</i>', 'massively' ),
	    	'priority'		=> 10,
	    	'panel'			=> 'theme_settings'
	    ) );

	    /* Custom title */
	    $wp_customize->add_setting( 'header_custom_title', array(
	    	'default'	=> '',
	    	'transport'	=> 'refresh'
	    ) );
	    $wp_customize->add_control( 'header_custom_title', array(
	    	'label'			=> __( 'Custom Title', 'massively' ),
	    	// 'description'	=> __( 'Custom title text show only on home page, no other page. You can use html tag for your required  ', 'massively' ),
	    	'section'		=> 'massively_header_options',
	    	'type'			=> 'text'
	    ) );


	    /* Custom title */
	    $wp_customize->add_setting( 'header_custom_description', array(
	    	'default'	=> '',
	    	'transport'	=> 'refresh'
	    ) );
	    $wp_customize->add_control( 'header_custom_description', array(
	    	'label'		=> __( 'Custom Description', 'massively' ),
	    	'section'	=> 'massively_header_options',
	    	'type'		=> 'textarea'
	    ) );


		/*-----------------------------*/
	    /* Social Options */
	    /*-----------------------------*/
	    $wp_customize->add_section( 'massively_social_network', array(
	    	'title'			=> __( 'Social Network', 'massively' ),
	    	'description'	=> __( '<i>You can add your social network link without http://</i>', 'massively' ),
	    	'priority'		=> 20,
	    	'panel'			=> 'theme_settings'
	    ) );


	    /* Facebook link option */
	    $wp_customize->add_setting( 'massively_fb_text', array(
	    	'default'	=> '',
	    	'transport'	=> 'refresh'
	    ) );
	    $wp_customize->add_control( 'massively_fb_text', array(
	    	'label'		=> __( 'Facebook Link', 'massively' ),
	    	'section'	=> 'massively_social_network',
	    	'type'		=> 'url'
	    ) );


	    /* Twitter link Option */
	    $wp_customize->add_setting( 'massively_twitter_text', array(
	    	'default'	=> '',
	    	'transport'	=> 'refresh'
	    ) );
	    $wp_customize->add_control( 'massively_twitter_text', array(
	    	'label'		=> __( 'Twitter Link', 'massively' ),
	    	'section'	=> 'massively_social_network',
	    	'type'		=> 'url'
	    ) );


	    /* Instagram link Options */
	    $wp_customize->add_setting( 'massively_ins_text', array(
	    	'default'	=> '',
	    	'transport'	=> 'refresh'
	    ) );
	    $wp_customize->add_control( 'massively_ins_text', array(
	    	'label'		=> __( 'Instagram Link', 'massively' ),
	    	'section'	=> 'massively_social_network',
	    	'type'		=> 'url'
	    ) );


	    /* GitHub link Options */
	    $wp_customize->add_setting( 'massively_git_text', array(
	    	'default'	=> '',
	    	'transport'	=> 'refresh'
	    ) );
	    $wp_customize->add_control( 'massively_git_text', array(
	    	'label'		=> __( 'GitHub Link', 'massively' ),
	    	'section'	=> 'massively_social_network',
	    	'type'		=> 'url'
	    ) );


	    /*-----------------------------*/
	    /* Footer Options */
	    /*-----------------------------*/
	    $wp_customize->add_section( 'footer_settings', array(
	    	'title'		=> __( 'Footer Options', 'massively' ),
	    	'description'	=> __( '<i>You can use the list tag for divide the content.</i>', 'massively' ),
	    	'priority'	=> 30,
	    	'panel'		=> 'theme_settings'
	    ) );

	    /* Footer Text Option */
	    $wp_customize->add_setting( 'footer_text_option', array(
	    	'default'	=> '',
	    	'transport'	=> 'refresh'
	    ) );
	    $wp_customize->add_control( 'footer_text_option', array(
	    	'label'		=> __( 'Footer Copyright Text', 'massively' ),
	    	'section'	=> 'footer_settings',
	    	'type'		=> 'textarea'
	    ) );

	}
	add_action( 'customize_register', 'massively_customizer_register' );
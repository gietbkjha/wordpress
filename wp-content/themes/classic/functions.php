<?php 
function classic_setup() {

		add_theme_support( 'title-tag' );

		/**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu', 'twentytwentyone' ),
				'footer'  => __( 'Secondary menu', 'twentytwentyone' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

}
add_action( 'after_setup_theme', 'classic_setup' );

function classic_register_style_or_script() {
    //Register the main style file here
    wp_enqueue_style( 'classic-style-1', 
    get_template_directory_uri() . '/style.css', 
    array(), wp_get_theme()->get( 'Version' ) );
    //This is to register/include style in your theme
    wp_enqueue_style('classic-style-2',get_template_directory_uri().'/css/bootstrap.min.css',array(),false,'all');
    wp_enqueue_style('classic-style-3',get_template_directory_uri().'/css/templatemo-style.css',array(),false,'all');
    //This is to register / include script in your theme
    wp_enqueue_script('classic-script-1',get_template_directory_uri().'/js/jquery-1.11.3.min.js',array(),'false',true);
    wp_enqueue_script('classic-script-2','https://www.atlasestateagents.co.uk/javascript/tether.min.js',array(),'false',true);
    wp_enqueue_script('classic-script-1',get_template_directory_uri().'/js/bootstrap.min.js',array(),'false',true);
  
  }
  add_action('wp_enqueue_scripts','classic_register_style_or_script');
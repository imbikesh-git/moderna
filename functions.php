<?php
/*
Enqueue styles and scripts
*/
$theme = wp_get_theme();
define('THEME_VER', $theme->Version);
function mordern(){

wp_enqueue_style('bootstrap', get_template_directory_uri(). '/css/bootstrap.min.css',array(),THEME_VER,'all');
wp_enqueue_style('fancybox', get_template_directory_uri(). '/css/fancybox/jquery.fancybox.css',array(),THEME_VER,'all');
wp_enqueue_style('fonts', get_template_directory_uri(). '/css/custom-fonts.css',array(),THEME_VER,'all');
wp_enqueue_style('awesome', get_template_directory_uri(). '/css/font-awesome.css',array(),THEME_VER,'all');
wp_enqueue_style('flexslider', get_template_directory_uri(). '/css/flexslider.css',array(),THEME_VER,'all');
wp_enqueue_style('style', get_template_directory_uri(). '/css/style.css',array(),THEME_VER,'all');
wp_enqueue_style('default', get_template_directory_uri(). '/skins/default.css',array(),THEME_VER,'all');
wp_enqueue_style( 'theme-style', get_stylesheet_uri(), '', THEME_VER, 'all');


wp_enqueue_script('easing', get_template_directory_uri(). '/js/jquery.easing.1.3.js', array('jquery'),'1.0',true);
wp_enqueue_script('boot-min', get_template_directory_uri(). '/js/bootstrap.min.js', array(),'1.0',true);
wp_enqueue_script('pack', get_template_directory_uri(). '/js/jquery.fancybox.pack.js', array('jquery'),'1.0',true);
wp_enqueue_script('media', get_template_directory_uri(). '/js/jquery.fancybox-media.js', array('jquery'),'1.0',true);
wp_enqueue_script('prettify', get_template_directory_uri(). '/js/google-code-prettify/prettify.js',array(),'1.0',true);
wp_enqueue_script('quicksand', get_template_directory_uri(). '/js/portfolio/jquery.quicksand.js',array('jquery'),'1.0',true);
wp_enqueue_script('portfolio', get_template_directory_uri(). '/js/portfolio/setting.js',array(),'1.0',true);
wp_enqueue_script('flexslider', get_template_directory_uri(). '/js/jquery.flexslider.js',array(),'1.0',true);
wp_enqueue_script('animate', get_template_directory_uri(). '/js/animate.js',array(),'1.0',true);
wp_enqueue_script('custom', get_template_directory_uri(). '/js/custom.js',array(),'1.0',true);

}
add_action('wp_enqueue_scripts','mordern');

/*
Theme support 
*/
function after_setup(){

	add_theme_support('custom-logo'); //to display the custom logo section in customizer
	add_theme_support('title-tag'); //for page title
	add_theme_support( 'post-thumbnails' );

	register_nav_menus(array( //nav menu
		'header' => 'Primary Menu',
		'footer' => 'Footer Menu'
	));
}
add_action('after_setup_theme', 'after_setup');

require get_template_directory() . '/inc/custom-post-type.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/register-sidebar.php';
require get_template_directory() . '/inc/custom-field.php';
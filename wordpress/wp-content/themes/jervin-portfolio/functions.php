<?php
/**
 *	This template is for functionalities
 *
 * @package WordPress
 * @subpackage jervin-portfolio
 * @since Jervin Portfolio 1.0
 */

	/**
	* Custom 
	*/

	function addMyStyleScripts()
	{
		/*CSS*/
			wp_enqueue_style('style-css', get_template_directory_uri().'/style.css', array(),'1.0.0', 'all');

			wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/css/bootstrap.min.css', array(), '3.3.7', 'all');

			wp_enqueue_style('font-lato-css', 'https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i', array(), '3.3.7', 'all');


		/*JS*/
		wp_enqueue_script('bootstrap-jQuery', get_template_directory_uri().'/js/jquery-1.14.min.js', array(), '1.14.2', true);

		wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', array(), '3.3.7', true);

		wp_enqueue_script('parallax-js', get_template_directory_uri().'/js/parallax.min.js', array(), '3.3.7', true);
	}

	add_action('wp_enqueue_scripts', 'addMyStyleScripts');

	/**
	*Add MENU OPTION in WORDPRESS
	*/
	add_theme_support( 'menus' );

	add_theme_support( 'post-thumbnails' );

	/**
	*This feature allows the use of HTML5 markup for the search forms, comment forms, comment lists, gallery, and caption.
	*/
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

?>
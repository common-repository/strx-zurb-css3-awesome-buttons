<?php
/*
Plugin Name: Strx Zurb CSS3 Awesome Buttons
Plugin URI: http://www.strx.it/2010/11/wordpress-css3-buttons/
Description: Shortcode to insert beautiful CSS3 buttons in your blog
Version: 1.0.3
Author: Strx
Author URI: http://www.strx.it
License: GPL2
*/

/*
 *
 * TODO:
 *		Shortcode to create the button [szb color=black size=medium]Button Content[/szb] (szb=strx zurb button)
 *		Plugin Config page for setting default options
 *		TinyMCE button to easy the button shortcode insertion
 */
function strx_zurb_css3_awesome_defaults(){
	return array(
		'color' => 'black',		//black, red, green, blue, magenta, orange, yellow
		'size' => 'medium',		//small, medium, large, xlarge
		'link' => '#',
		'target' => '_self',
		'title' => '',
		'style' => ''
	);
}

/** Shortcode szb in action */
function strx_zurb_css3_awesome_shortcode($atts, $content){
	//TODO take defaults from wp options, preconfigured in wp-admin config page
	extract(shortcode_atts(strx_zurb_css3_awesome_defaults(), $atts));

	//TODO set a configuration parameter to check before doing this
	if (empty($title)){ $title=$content; }

	return '<a class="strx-zurb-css3-awesome '.$color.' '.$size.'" style="'.$style.'" target="'.$target.'" title="'.$title.'" href="'.$link.'">'.htmlentities($content).'</a>';
}


function strx_zurb_css3_awesome_add_css() {
	$myStyleUrl = WP_PLUGIN_URL . 
		'/strx-zurb-css3-awesome-buttons/css/strx-zurb-css3-awesome-buttons-css.php?'.
		'fontFamily='.urlencode('Arial, Helvetica, \'Helvetica Neue\', Verdana, sans-serif !important');
	wp_register_style('myStyleSheets', $myStyleUrl);
	wp_enqueue_style( 'myStyleSheets');
}

add_shortcode('szb', 'strx_zurb_css3_awesome_shortcode');

add_action('wp_print_styles', 'strx_zurb_css3_awesome_add_css');
//add_action('wp_footer', 'strx_zurb_css3_awesome_add_css');





/**************************************************************************
 * TinyMCE Button
 **************************************************************************/
///require_once('tinymce/tinymce_szb.php');

/*function strx_zurb_css3_awesome_addbuttons() {
	// Don't bother doing this stuff if the current user lacks permissions
	if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
		return;

	// Add only in Rich Editor mode
	if ( get_user_option('rich_editing') == 'true') {
		add_filter("mce_external_plugins", "add_strx_zurb_css3_awesome_tinymce_plugin");
		add_filter('mce_buttons', 'register_strx_zurb_css3_awesome_button');
	}
}

function register_strx_zurb_css3_awesome_button($buttons) {
	array_push($buttons, "|", "SzbPlugin");
	print_r($buttons);
	return $buttons;
}

// Load the TinyMCE plugin : editor_plugin.js (wp2.5)
function add_strx_zurb_css3_awesome_tinymce_plugin($plugin_array) {
	$u=WP_PLUGIN_URL.'/strx-zurb-css3-awesome-buttons/tinymce/editor_plugin.js';
	$plugin_array['myplugin'] = $u;
	return $plugin_array;
}

// init process for button control
add_action('init', 'strx_zurb_css3_awesome_addbuttons');
 *
 */

<?php
/*
Plugin Name: Bunny's Print CSS
Plugin URI: http://climbtothestars.org
Description: This very simple plugin adds a link to print.css in your theme header. You'll probably want to edit the print.css file supplied with the plugin.
Author: Stephanie Booth
Version: 0.95
Author URI: http://climbtothestars.org/
License: GPL

(C) 2008  Stephanie Booth  (email : steph@climbtothestars.org)
*/

// Admin panel code heavily lifted from Yaosan Yeo's MyCSS plugin (http://www.channel-ai.com/blog/plugins/mycss/), with thanks.

// Add options page under Presentation in the admin menu
	$file = 'print.css';
	$dir=basename(dirname(__FILE__));
	$css_to_edit = "../wp-content/plugins/$dir/$file";


// This function generates the URL of the print CSS file
function pcss_css_url() {
	$dir=basename(dirname(__FILE__));
	$wpurl=get_option('siteurl');
	$file='print.css';
	$url=$wpurl . "/wp-content/plugins/" . $dir . '/' . $file;
	return $url;
	}

// Here is a function that produces the appropriate code for insertion in the header
function pcss_add_print_css() {
	
	$header_html='
	
	<link rel="stylesheet" type="text/css" media="print" 

';
	echo $header_html;
}

// Now we set that function up to execute when wp_head action is called
add_filter('wp_head', 'pcss_add_print_css');
?>
<?php
/**
 * Burapha Bizz Condo functions and definitions
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package BuraphaBizz
 */
 
/*
// Make theme available for translation
// Translations can be filed in the /languages/ directory
load_theme_textdomain( 'burapha_bizz', TEMPLATEPATH . '/languages' );

$locale = get_locale();
$locale_file = TEMPLATEPATH . "/languages/$locale.php";
if ( is_readable($locale_file) )    
	require_once($locale_file); 
*/

// Set Editor Style
function set_editor_style() {     
	remove_editor_styles();
	add_editor_style( 'editor-style.css' );  
}
add_action( 'admin_head', 'set_editor_style' ); 

// Set Default Content
function custom_editor_content( $content ) {
   $content = '';
   return $content;
}
add_filter( 'default_content', 'custom_editor_content' );

// Debugging the Admin Screen
// add_action( 'admin_notices', 'dev_check_current_screen' );
function dev_check_current_screen() {
	if( !is_admin() ) return;
	
	global $current_screen;
	
	print_r( $current_screen );
}

?>

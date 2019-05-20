<?php
/**
 * Plugin Name:       Forms Creators
 * Plugin URI:        https://wordpress.org/plugins/forms-creator/
 * Description:       The most powerful creator of forms
 * Version:           1.0
 * Author:            wpbiker
 * Author URI:        https://wpbiker.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wpbiker-fp-lang
  */
if ( ! defined( 'WPINC' ) ) {die;}

// Include languages 
load_plugin_textdomain('wpbiker-fp-lang', false, dirname(plugin_basename(__FILE__)) . '/languages/');

if ( ! defined( 'WPBIKER_FP_NAME' ) ) {	
	define( 'WPBIKER_FP_NAME', 'Forms Creators' );
	define( 'WPBIKER_FP_VERSION', '1.0' );
	define( 'WPBIKER_FP_BASENAME', dirname(plugin_basename(__FILE__)) );
	define( 'WPBIKER_FP_DIR', plugin_dir_path( __FILE__ ) );
	define( 'WPBIKER_FP_URL', plugin_dir_url( __FILE__ ) );	
}
// Activate-Diactivate plugin
function wpbiker_plugin_activate_fp() {
	require_once plugin_dir_path( __FILE__ ) . 'include/activator.php';	
}	
register_activation_hook( __FILE__, 'wpbiker_plugin_activate_fp' );

function wpbiker_plugin_deactivate_fp() {	
	require_once plugin_dir_path( __FILE__ ) . 'include/deactivator.php';
}
register_deactivation_hook( __FILE__, 'wpbiker_plugin_deactivate_fp' );



// Include class for plugin
if( !class_exists( 'JavaScriptPacker' )) {
	require_once plugin_dir_path( __FILE__ ) . 'include/class/packer.php';
}

if( !class_exists( 'WPBIKERDATA' )) {
	require_once plugin_dir_path( __FILE__ ) . 'include/class/data.php';
}


require_once plugin_dir_path( __FILE__ ) . 'admin/admin.php';

require_once plugin_dir_path( __FILE__ ) . 'include/sendmail.php';

require_once plugin_dir_path( __FILE__ ) . 'public/public.php';


add_filter( 'plugin_action_links', 'wpbiker_action_links_fp', 10, 2 );
function wpbiker_action_links_fp( $actions, $plugin_file ){
	if( false === strpos( $plugin_file, basename(__FILE__) ) )
		return $actions;

	$settings_link = '<a href="admin.php?page='. WPBIKER_FP_BASENAME .'">Settings</a>'; 
	array_unshift( $actions, $settings_link ); 
	return $actions; 
}

add_filter( 'admin_init', 'wpbiker_asset_folder_fp');
function wpbiker_asset_folder_fp(){
	$path = plugin_dir_path( __FILE__ ).'asset';
	if (!is_writable($path)) {
		echo "<div class='error' id='message'><p>".__("Please set the 775 access rights (chmod 775) for the '".$path."' folder.", "wpbiker-fp-lang")."</p> </div>";
	} 
}


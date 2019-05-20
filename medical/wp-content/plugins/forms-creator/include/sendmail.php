<?php if ( ! defined( 'ABSPATH' ) ) exit; 
	if( defined('DOING_AJAX') && DOING_AJAX ){
		add_action( 'wp_ajax_send_wpbiker_form', 'send_wpbiker_form' );
		add_action( 'wp_ajax_nopriv_send_wpbiker_form', 'send_wpbiker_form' );
	}
	function send_wpbiker_form() {
		$id = sanitize_text_field($_POST['wpbikerformid']);
		global $wpdb;
		$table = $wpdb->prefix . "wpbiker_tool";
		$sSQL = $wpdb->prepare("select * from $table WHERE id = %d", $id);
		$arrresult = $wpdb->get_results($sSQL);		
		if (count($arrresult) > 0) {
			foreach ($arrresult as $key => $val) {
				$param = unserialize($val->param);
				include ('send/admin.php');			
			}
		}
		exit();	
	}
?>
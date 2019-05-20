<?php if ( ! defined( 'ABSPATH' ) ) exit; 

//* Form shortcode
add_shortcode('FC-Form', 'wpbiker_shortcode_fp');
function wpbiker_shortcode_fp($atts) {
    extract(shortcode_atts(array('id' => ""), $atts));		
    global $wpdb;
	$table = $wpdb->prefix . "wpbiker_tool";
	$sSQL = $wpdb->prepare("select * from $table WHERE id = %d", $id);    
    $arrresult = $wpdb->get_results($sSQL); 
    if (count($arrresult) > 0) {
        foreach ($arrresult as $key => $val) {
			$param = unserialize($val->param);		
			ob_start();
			include( 'partials/public.php' );
			$form = ob_get_contents();
			ob_end_clean();			
			$path_style = WPBIKER_FP_DIR.'asset/form/css/style-'.$val->id.'.css';
			$file_style = WPBIKER_FP_DIR.'admin/partials/form/generator/style.php';			
			if (file_exists($file_style) && !file_exists($path_style)){
				ob_start();
				include ($file_style);
				$content_style = ob_get_contents();
				ob_end_clean();
				file_put_contents($path_style, $content_style);
			}			
			if (file_exists($path_style)) {				
				wp_enqueue_style( WPBIKER_FP_BASENAME.'-'.$val->id, WPBIKER_FP_URL. 'asset/form/css/style-'.$val->id.'.css');
			}			
			
        }
    } 
	else {		
		$form = "<p><strong>No Records</strong></p>";       
    }
	wp_enqueue_script( WPBIKER_FP_BASENAME, plugin_dir_url( __FILE__ ) . 'js/send.js', array( 'jquery' ) );
	wp_localize_script( WPBIKER_FP_BASENAME, 'send_wpbiker_form', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );	
	return $form;
}

 // Check if we're inside the main loop in a single post page.
add_filter( 'the_content', 'wpbiker_show_after_post_content_fp' );
 
function wpbiker_show_after_post_content_fp( $content ) {	
	global $wpdb;
	$table = $wpdb->prefix . "wpbiker_tool";    
    $arrresult = $wpdb->get_results("SELECT * FROM " . $table . " WHERE tool='form' order by id asc");    	
    if (count($arrresult) > 0) {
        foreach ($arrresult as $key => $val) {
			$param = unserialize($val->param);
			if (!empty($param['after_post_content'])){
				if ( is_single() && in_the_loop() && is_main_query() ) {
					return $content . do_shortcode('[FC-Form id='.$val->id.']');
				}
			}				
		}
	}   
 
    return $content;
}
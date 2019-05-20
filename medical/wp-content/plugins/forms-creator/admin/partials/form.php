<?php if ( ! defined( 'ABSPATH' ) ) exit;	
	include_once( 'form/menu.php' );
	$tool= (isset($_REQUEST["tool"])) ? sanitize_text_field($_REQUEST["tool"]) : '';
	if ($tool == "add" ){
		include_once( 'form/add.php');
		return;	
	}
	if ($tool == ""){
		include_once( 'form/list.php' );
		return;
	}
	if ($tool  == "pro"){
	include_once( 'form/pro.php' );
}	
?>
</div>
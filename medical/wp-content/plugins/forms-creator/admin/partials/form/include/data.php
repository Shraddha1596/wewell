<?php if ( ! defined( 'ABSPATH' ) ) exit; 
	$act = (isset($_REQUEST["act"])) ? $_REQUEST["act"] : '';
	if ($act == "update") {
		$recid = $_REQUEST["id"];
		$result = $wpdb->get_row("SELECT * FROM $data WHERE id=$recid");
		if ($result){
			$id = $result->id;
			$title = $result->title;
			$param = unserialize($result->param);
			$count_i = count($param['item_type']);
			$btn = __("Update", "wplg-fp-lang");
			$hidval = 2;
		}
	}
	else if ($act == "duplicate") {
		$recid = $_REQUEST["id"];
		$result = $wpdb->get_row("SELECT * FROM $data WHERE id=$recid");
		if ($result){
			$id = "";
			$title = "";
			$param = unserialize($result->param);
			$count_i = count($param['item_type']);
			$btn = __("Save", "wplg-fp-lang");
			$hidval = 1;
		}
	}
	else {
		$btn = __("Save", "wplg-fp-lang");
		$id = "";
		$title = "";
		$param['include_field_name'] = "";
		$param['field_name'] = "";
		$param['include_field_mail'] = "";
		$param['field_mail'] = "";
		$param['include_field_phone'] = "";
		$param['field_phone'] = "";
		$param['include_field_review'] = "";
		$param['field_review'] = "";
		$param['form_align'] = "";
		$param['form_width'] = "400";
		$param['form_padding_top'] = "0";
		$param['form_padding_bottom'] = "0";
		$param['form_padding_left'] = "0";
		$param['form_padding_right'] = "0";
		$param['field_border'] = "";
		$param['field_border_radius'] = "";
		$param['field_button'] = "";
		$param['button_size'] = "";
		$param['form_button_width'] = "";
		$param['button_width_par'] = "auto";
		$param['button_position'] = "";
		$param['form_background_color'] = "rgba(255,255,255,0)";
		$param['field_text_color'] = "";
		$param['field_placeholder_color'] = "";
		$param['field_border_color'] = "";
		$param['field_background_color'] = "";
		$param['button_text_color'] = "#ffffff";
		$param['button_background_color'] = "#e95645";
		$param['button_hover_color'] = "#d45041";
		$param['send_to_admin'] = "1";			
		$param['mail_send_error_text'] = '';
		$param['mail_send_error_size'] = '';
		$param['mail_send_error_color'] = '';
		$param['mail_send_send_timer'] = '3';
		$param['mail_send_admin_mail'] = '';
		$param['mail_send_mail_subject'] = '';
		$param['form_margin_top'] = "10";
		$param['form_margin_bottom'] = "0";
		$param['form_margin_left'] = "0";
		$param['form_margin_right'] = "0";		
		$param['form_width_par'] = "px";
		$param['height_input'] = "";
		$param['height_textarea'] = "";
		$param['font_size'] = "";
		$param['close_modal'] = "";		
		$param['font_color_label'] = "#000";
		$param['font_size_label'] = "18";
		$param['screen_size'] = "";
		$param['mobile_width'] = "";
		$param['mobile_width_par'] = "pr";
		$param['title_position'] = "";
		$param['text_position'] = "";
		$param['mail_send_text'] = "Thank you. We will contact you shortly.";
		$count_i = 0;
		$hidval = 1;
	}	
	
	$confsettings = array(
	'textarea_name' => 'param[mail_send_text]',
	'textarea_rows' => '',
	'wpautop' => 0,	
	'media_buttons' => true,	
	'tinymce' => array(
	'theme_advanced_buttons1' => 'formatselect,|,bold,italic,underline,|,' .
	'bullist,blockquote,|,justifyleft,justifycenter' .
	',justifyright,justifyfull,|,link,unlink,|' .
	',spellchecker,wp_fullscreen,wp_adv'
	)
	);
?>
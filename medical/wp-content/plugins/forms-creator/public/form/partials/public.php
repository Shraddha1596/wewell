
<?php if ( ! defined( 'ABSPATH' ) ) exit; 

$count_i = count($param['item_type']);
	if(empty($param['button_position'] )){
		 $button_position = "right"; }
	else{
		 $button_position = $param['button_position'];
	}
	
    if(empty($param['field_button'] )){
		 $field_button = "Send"; }
	else{
		 $field_button = $param['field_button'];
	}		
	if(empty($param['mail_send_error_size'])){
		 $errsize = "16"; }
	else{
		 $errsize = $param['mail_send_error_size'];
	}
	if(empty($param['mail_send_error_text'])){
		 $errtext = "Correct the fields, please"; }
	else{
		 $errtext = $param['mail_send_error_text'];
	}
	if(empty($param['mail_send_error_color'])){
		 $errcolor = "#ff0000"; }
	else{
		 $errcolor = $param['mail_send_error_color'];
	}	
	 $wpbikerform = '';
		 $wpbikerform .= '<div id="wpbiker-form-parent-'.$val->id.'"><form metod="post" id="wpbiker-form-id-'.$val->id.'"><div id="wpbikerformconfirm-'.$val->id.'" class="wpbiker-col">';
		 
		 for ($i = 0; $i < $count_i; $i++) { 
		 if(empty($param['width_col'][$i])){
			 $col = "12"; 
			 }
		 else{
		 $col = $param['width_col'][$i];
		 }
		 
		 
			$wpbikerform .= '<div class="wpbiker-col-'.$col.'">';
		 
		 if (!empty($param['include_field_name'][$i])){
			 	$wpbikerform .= '<label>'.$param['name_item'][$i].'</label>';			
			}
		$wpbikerform .= '<input type="hidden" name="wpbiker-field-'.$i.'" value="'.$param['name_item'][$i].'">';
		 if ($param['item_type'][$i] == 'input') {
			 if(!empty($param['field_required'][$i])){
				 $required = 'wpbikerrequired';
				}
			else {
				 $required = '';
			 }
			 if ($param['input_validator'][$i] == 'name'){
				 $wpbikerform .= '<input class="wpbiker-forms-'.$param['input_validator'][$i].' '.$required.'" type="text" name="name-'.$i.'" placeholder="'.$param['input_placeholder'][$i].'">';
			 }
			 else if ($param['input_validator'][$i] == 'email'){
				 $wpbikerform .= '<input class="wpbiker-forms-'.$param['input_validator'][$i].' '.$required.'" type="text" name="email-'.$i.'" placeholder="'.$param['input_placeholder'][$i].'">';
			 }
			 else {
			  $wpbikerform .= '<input class="wpbiker-forms-'.$param['input_validator'][$i].' '.$required.'" type="text" name="wpbiker-forms-input-'.$i.'" placeholder="'.$param['input_placeholder'][$i].'">';
			 }
		 }
		 if ($param['item_type'][$i] == 'textarea') {
			 if(!empty($param['field_required'][$i])){
				 $required = 'wpbikerrequired';
				}
			
			else {
				 $required = '';
			 }
			 if(is_page('Referral')){
				$wpbikerform .= '<textarea name="wpbiker-forms-textarea-'.$i.'" class="'.$required.'" placeholder="'.$param['input_placeholder'][$i].'">Have I told you about WeWell yet?
It’s a social healthcare platform for holistic and integrative practitioners to gain more clients, establish their brand and connect with other practitioners for co-referrals.

WeWell is offering free early access to key select practitioners and I thought about you. If you accept my invitation, we’ll both  get $25 in credit and skip the line for early access.

Be well,
Aaron
				</textarea>';
			 }
			else{
				$wpbikerform .= '<textarea name="wpbiker-forms-textarea-'.$i.'" class="'.$required.'" placeholder="'.$param['input_placeholder'][$i].'"></textarea>';
			}
		 }
		 if ($param['item_type'][$i] == 'select') {			 
			  $wpbikerform .= '<select name="wpbiker-forms-select-'.$i.'" multiple="multiple">';
			  $count_list = count($param['list_value'][$i]);
			  if ($count_list > 0) {
				  for ($ii = 0; $ii < $count_list; $ii++) {
					  if (!empty($param['list_checkbox'][$i][$ii])){
						  $wpbikerform .= '<option selected value="'.$param['list_value'][$i][$ii].'">'.$param['list_text'][$i][$ii].'</option>';
					  }
					  else {
						   $wpbikerform .= '<option value="'.$param['list_value'][$i][$ii].'">'.$param['list_text'][$i][$ii].'</option>';
					  }
						
					   
				  }
			  }			  
			  $wpbikerform .= '</select>';
		 }
		 
		 if ($param['item_type'][$i] == 'radio') {			  
			  $count_list = count($param['list_value'][$i]);
			  if ($count_list > 0) {
				  for ($ii = 0; $ii < $count_list; $ii++) {
				  if (empty ($param['check_style'][$i])){
						$param['check_style'][$i] = 'colom';
					}
					if ($param['check_style'][$i] == 'colom'){
						$check_style = '<br/>';						
					}
					else {
						$check_style = '&emsp;';	
					}
					
					  if (!empty($param['list_checkbox'][$i][$ii])){
						  $wpbikerform .= '<input checked="checked" type="radio" value="'.$param['list_value'][$i][$ii].'" name="wpbiker-forms-radio-'.$i.'"> '.$param['list_text'][$i][$ii].$check_style;  
						  }
					  else {  
					   $wpbikerform .= '<input type="radio" value="'.$param['list_value'][$i][$ii].'" name="wpbiker-forms-radio-'.$i.'"> '.$param['list_text'][$i][$ii].$check_style;
					  }
				  }
			  }				  
		 }
		 
		 if ($param['item_type'][$i] == 'checkbox') {		 
			  $count_list = count($param['list_value'][$i]);
			  if ($count_list > 0) {
				  for ($ii = 0; $ii < $count_list; $ii++) {
				  if (empty ($param['check_style'][$i])){
						$param['check_style'][$i] = 'colom';
					}
					if ($param['check_style'][$i] == 'colom'){
						$check_style = '<br/>';						
					}
					else {
						$check_style = '&emsp;';	
					}
					
					  if (!empty($param['list_checkbox'][$i][$ii])){
						  $wpbikerform .= '<input checked="checked" type="checkbox" value="'.$param['list_value'][$i][$ii].'" name="wpbiker-forms-checkbox-'.$i.'-'.$ii.'"> '.$param['list_text'][$i][$ii].$check_style;
						  }						  
					   else {
					   $wpbikerform .= '<input type="checkbox" value="'.$param['list_value'][$i][$ii].'" name="wpbiker-forms-checkbox-'.$i.'-'.$ii.'"> '.$param['list_text'][$i][$ii].$check_style;
					   }
				  }
			  }				  
		 }
		 
		 $wpbikerform .= '</div>';
		 }
		 
		 $wpbikerform .= '<div class="wpbiker-col"><div id="wpbikerform-result-'.$val->id.'"></div>';
		 $wpbikerform .= '<div style="width:100%;text-align:'.$button_position.';overflow:hidden;"><input type="button" name="send" onclick="wpbikerformsend('.$val->id.','.$errsize.',\''.addslashes($errtext).'\',\''.$errcolor.'\');" value="'.$field_button.'" id="wpbiker-form-button-'.$val->id.'"></div>';		 
		 $wpbikerform .= '</div></form></div></div>';		 
	 echo $wpbikerform;	 
?>
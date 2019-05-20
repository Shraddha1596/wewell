<?php if ( ! defined( 'ABSPATH' ) ) exit;
	if(empty($param['field_button'] )){
	$field_button = "Send"; }
	else{
		$field_button = $param['field_button'];
	}	
	if(empty($param['form_width'] )){
	$form_width = "100"; }
	else{
		$form_width = $param['form_width'];
	}
	if(empty($param['form_align'] ) || $param['form_align'] == "left"){
	$form_align = "margin: 0;"; }
	else if ($param['form_align'] == "center") {
		$form_align = "margin:0 auto;";
	}
	else {
		$form_align = "margin-left: auto;";
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
	$wpbikerform .= '<div id="wpbiker-form-parent"><div id="wpbiker-form-id" class><div id="wpbikerformconfirm" class="wpbiker-col">';
	
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
			$wpbikerform .= '<textarea name="wpbiker-forms-textarea-'.$i.'" class="'.$required.'" placeholder="'.$param['input_placeholder'][$i].'"></textarea>';
		}
		if ($param['item_type'][$i] == 'select') {			 
			$wpbikerform .= '<select name="wpbiker-forms-select-'.$i.'">';
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
						$wpbikerform .= '<input checked="checked" type="radio" value="'.$param['list_value'][$i][$ii].'" name="wpbiker-forms-radio-'.$i.'">'.$param['list_text'][$i][$ii].$check_style;  
					}
					else {  
						$wpbikerform .= '<input type="radio" value="'.$param['list_value'][$i][$ii].'" name="wpbiker-forms-radio-'.$i.'">'.$param['list_text'][$i][$ii].$check_style;
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
						$wpbikerform .= '<input checked="checked" type="checkbox" value="'.$param['list_value'][$i][$ii].'" name="wpbiker-forms-checkbox-'.$i.'-'.$ii.'">'.$param['list_text'][$i][$ii].$check_style;
					}						  
					else {
						$wpbikerform .= '<input type="checkbox" value="'.$param['list_value'][$i][$ii].'" name="wpbiker-forms-checkbox-'.$i.'-'.$ii.'">'.$param['list_text'][$i][$ii].$check_style;
					}
				}
			}				  
		}
		
		$wpbikerform .= '</div>';
		
	}
	$wpbikerform .= '<div class="wpbiker-col"><div id="wpbikerform-result"></div>';
	$wpbikerform .= '<div style="width:100%;text-align:'.$param['button_position'].';overflow:hidden;"><input type="button" name="send" onclick="wpbikerformsend('.$errsize.',\''.$errtext.'\',\''.$errcolor.'\');" value="'.$field_button.'" id="wpbiker-form-button"></div>';		 
	$wpbikerform .= '</div></div></div></div>';		 
	echo $wpbikerform;	 
?>
<style>
	
	#wpbiker-form-parent {
	width: <?php if($param['form_width'] == ""){ echo "100"; } else{ echo $param['form_width'];} ?><?php if($param['form_width_par'] == "" || $param['form_width_par'] == "%"){echo "%"; } else{ echo "px";} ?>;
	<?php if(empty($param['form_align'] ) || $param['form_align'] == "left"){echo "margin: 0;"; }
	else if ($param['form_align'] == "center") {echo "margin:0 auto;";}else {echo "margin-left: auto;";} ?>	
	}
	#wpbiker-form-id { 	
	font-size: <?php if($param['font_size'] == ""){echo "15";}else{echo $param['font_size'];}?>px; !important;
	padding: <?php if($param['form_padding_top'] == ""){echo "0";}else{echo $param['form_padding_top'];}?>px <?php if($param['form_padding_left'] == ""){echo "0";}else{echo $param['form_padding_left'];}?>px;
	background: <?php if($param['form_background_color'] == ""){echo "#eeeeee";}else{echo $param['form_background_color'];}?>; 
	margin: <?php if($param['form_margin_top'] == ""){echo "0";}else{echo $param['form_margin_top'];}?>px <?php if($param['form_margin_left'] == ""){echo "0";}else{echo $param['form_margin_left'];}?>px;
	border-radius: <?php if($param['form_border_radius'] == ""){echo "5";}else{echo $param['form_border_radius'];}?>px;
	border: <?php if(empty($param['form_border'])){echo "0";}else{echo $param['form_border'];}?>px solid <?php if(empty($param['form_border_color'])){echo "#ffffff";}else{echo $param['form_border_color'];}?>;
	<?php if (!empty($param['background_img'])){?>
		background-image: url(<?php echo $param['background_img'];?>);
		background-size:cover;
	<?php } ;?>
	overflow: auto;
	}
	#wpbiker-form-id label{
	font-size: <?php if($param['font_size_label'] == ""){echo "18";}else{echo $param['font_size_label'];}?>px;
	color: <?php if($param['font_color_label'] == ""){echo "#000";}else{echo $param['font_color_label'];}?>;
	display:block;
	text-align:<?php if($param['title_position'] == ""){echo "left";}else{echo $param['title_position'];}?>;
	}
	#wpbiker-form-id span{	
	display:block;
	line-height:1.8em;	
	}
	#wpbiker-form-id input[type=button]{
	display: inline-block;
	color: <?php if($param['button_text_color'] == ""){echo "#ffffff";}else{echo $param['button_text_color'];}?>; 
	border-radius: <?php if($param['field_border_radius']  == ""){echo "0";}else{echo $param['field_border_radius'];}?>px; 
	-moz-border-radius: <?php if($param['field_border_radius']  == ""){echo "0";}else{echo $param['field_border_radius'];}?>px;
	-o-border-radius: <?php if($param['field_border_radius']  == ""){echo "0";}else{echo $param['field_border_radius'];}?>px;
	-webkit-border-radius: <?php if($param['field_border_radius']  == ""){echo "0";}else{echo $param['field_border_radius'];}?>px;
	border: none; 
	background: <?php if($param['button_background_color']  == ""){echo "#e95645";}else{echo $param['button_background_color'];}?>;
	width: <?php if($param['button_width_par']  == "%" || $param['button_width_par']  == "px"){echo $param['form_button_width'].''.$param['button_width_par'];}else{echo "auto";}?>;
	height:<?php if($param['height_input']  == ""){echo "52";}else{echo $param['height_input'];}?>px;
	line-height: <?php if($param['height_input']  == ""){echo "52";}else{echo $param['height_input'];}?>px;
	text-decoration: none;
	font-size: <?php if($param['button_size']  == ""){echo "16";}else{echo $param['button_size'];}?>px;	
	padding:0 <?php if($param['button_width_par']  == "auto"){echo "20px";}?>;
	}
	#wpbiker-form-id input[type=button]:hover { 
	cursor: pointer; 
	background: <?php if($param['button_hover_color']  == ""){echo "#d45041";}else{echo $param['button_hover_color'];}?>; 
	}
	#wpbiker-form-id input[type=text],#wpbiker-form-id textarea, #wpbiker-form-id select{ 
	background: <?php if($param['field_background_color']  == ""){echo "#fcfcfc";}else{echo $param['field_background_color'];}?>; 
	border: <?php if($param['field_border']  == ""){echo "1";}else{echo $param['field_border'];}?>px solid <?php if($param['field_border_color']  == ""){echo "#cecece";}else{echo $param['field_border_color'];}?>; 
	padding: 10px; 
	display: block; 
	font-size: <?php if($param['font_size']  == ""){echo "15";}else{echo $param['font_size'];}?>px; 
	color: <?php if($param['field_text_color']  == ""){echo "#555555";}else{echo $param['field_text_color'];}?>; 
	border-radius: <?php if($param['field_border_radius']  == ""){echo "0";}else{echo $param['field_border_radius'];}?>px; 
	-moz-border-radius: <?php if($param['field_border_radius']  == ""){echo "0";}else{echo $param['field_border_radius'];}?>px; 
	-o-border-radius: <?php if($param['field_border_radius']  == ""){echo "0";}else{echo $param['field_border_radius'];}?>px; 
	-webkit-border-radius: <?php if($param['field_border_radius']  == ""){echo "0";}else{echo $param['field_border_radius'];}?>px; 
	max-width: none; 
	width: 100%; 
	-moz-box-sizing: border-box; 
	box-sizing: border-box;
	margin-bottom: 13px; 
	text-align:<?php if($param['text_position']  == ""){echo "left";}else{echo $param['text_position'];}?>;
	}
	#wpbiker-form-id select{
	padding-left:6px;
	}
	#wpbiker-form-id textarea{
	height:<?php if($param['height_textarea']  == ""){echo "120";}else{echo $param['height_textarea'];}?>px; 
	margin-bottom: 13px; 
	}
	#wpbiker-form-id input[type=text], #wpbiker-form-id select{
	height:<?php if($param['height_input']  == ""){echo "52";}else{echo $param['height_input'];}?>px; 
	line-height: <?php if($param['height_input']  == ""){echo "52";}else{echo $param['height_input'];}?>px; 
	}
	#wpbiker-form-id input[type=text]::-webkit-input-placeholder,#wpbiker-form-id- textarea::-webkit-input-placeholder {
	color: <?php if($param['field_placeholder_color']  == ""){echo "#777777";}else{echo $param['field_placeholder_color'];}?>;
	}
	#wpbiker-form-id input[type=text]:-moz-placeholder,#wpbiker-form-id- textarea:-moz-placeholder { /* Firefox 18- */
	color: <?php if($param['field_placeholder_color']  == ""){echo "#777777";}else{echo $param['field_placeholder_color'];}?>;
	}
	#wpbiker-form-id input[type=text]::-moz-placeholder,#wpbiker-form-id- textarea::-moz-placeholder {  /* Firefox 19+ */
	color: <?php if($param['field_placeholder_color']  == ""){echo "#777777";}else{echo $param['field_placeholder_color'];}?>;
	}
	#wpbiker-form-id input[type=text]:-ms-input-placeholder,.#wpbiker-form-id- textarea:-ms-input-placeholder {
	color: <?php if($param['field_placeholder_color']  == ""){echo "#777777";}else{echo $param['field_placeholder_color'];}?>;
	}
	#wpbiker-form-id input[type="checkbox"], #wpbiker-form-id- input[type="radio"] {
	vertical-align: middle;
	}
	#wpbikerform-result {
	text-align:<?php if($param['text_position']  == ""){echo "left";}else{echo $param['text_position'];}?>;
	}
	@media only screen and (max-width: <?php if($param['screen_size']  == ""){echo "1024";}else{echo $param['screen_size'];}?>px){
	#wpbiker-form-parent {
	width: <?php if($param['mobile_width']  == ""){echo "85"; } else{ echo $param['mobile_width'];} ?><?php if($param['mobile_width_par']  == "" || $param['mobile_width_par']  == "pr"){echo "%"; } else{ echo "px";} ?>;
	}
	}
	
	.wpbiker-col {	
	width: 100%;
	float: left;	
	min-height: 1px;	
	white-space: normal;
	overflow: auto
	}  
	.wpbiker-col-1, .wpbiker-col-2, .wpbiker-col-3, .wpbiker-col-4, .wpbiker-col-5, .wpbiker-col-6, .wpbiker-col-7, .wpbiker-col-8, .wpbiker-col-9, .wpbiker-col-10, .wpbiker-col-11, .wpbiker-col-12 {
	float: left;
	white-space: normal;
	display: inline-block;
	vertical-align: middle;
	padding-bottom:15px;
	box-sizing: initial;
	padding: 0 1%;
	
	}    
	.wpbiker-col-12 {width: 98%;}
	.wpbiker-col-11 {width: 89.66666666666666%;}
	.wpbiker-col-10 {width: 81.33333333333334%;}
	.wpbiker-col-9 {width: 73%;}
	.wpbiker-col-8 {width: 64.66666666666666%;}
	.wpbiker-col-7 {width: 56.333333333333336%;}
	.wpbiker-col-6 {width: 48%;}
	.wpbiker-col-5 {width: 39.66666666666667%;}
	.wpbiker-col-4 {width: 31.33333333333333%;}
	.wpbiker-col-3 {width: 23%;}
	.wpbiker-col-2 {width: 14.666666666666664%;}
	.wpbiker-col-1 {width: 6.333333333333332%;}
	
</style>

<script>
	jQuery(document).ready(function($) {
		$('input').keypress(function(e){
			if(e.keyCode==13){
				var idforms = $(this).parent().attr("id").split('-')[1];
				$('#wpbiker-form-button-'+idforms).trigger('click');
			}
		});   
		$('.wpbiker-forms-number').on('input', function(){
			this.value = this.value.replace(/^\.|[^\d\.]|\.(?=.*\.)|^0+(?=\d)/g, '');
		});	
	});
	function wpbikerformsend(errsize,errtext,errcolor) {
		var buttid = 'wpbikerformconfirm';	
		var result = 'wpbikerform-result';
		var errorcontent = '<span style="color:'+errcolor+';font-size:'+errsize+'px;">'+errtext+'</span>';
		var countrequired = jQuery("#" + buttid +" .wpbikerrequired").length;
		error = 0;	
		if (countrequired > 0 ){		
			var i;			
			for (i = 0; i < countrequired; i++) {				
				var wpbikerrequired = jQuery('#'+buttid+' .wpbikerrequired:eq('+i+')').val();
				if (wpbikerrequired != "" && !jQuery('#'+buttid+' .wpbikerrequired:eq('+i+')').hasClass("wpbiker-forms-email")){
					jQuery('#'+buttid+' .wpbikerrequired:eq('+i+')').removeAttr('style');					
				}
				
				if (wpbikerrequired != "" && jQuery('#'+buttid+' .wpbikerrequired:eq('+i+')').hasClass("wpbiker-forms-email")){
					if(wpbikerrequired != ''){						
						var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
						if(pattern.test(wpbikerrequired)){
							jQuery('#'+buttid+' .wpbikerrequired:eq('+i+')').removeAttr('style');							
						}
						else {
							jQuery('#'+buttid+' .wpbikerrequired:eq('+i+')').css({"border-color": errcolor});
							jQuery('#'+buttid+' .wpbikerrequired:eq('+i+')').focus();
							error=1;
						} 
					}					
				}
				
				if (wpbikerrequired == ""){					
					jQuery('#'+buttid+' .wpbikerrequired:eq('+i+')').css({"border-color": errcolor});
					jQuery('#'+buttid+' .wpbikerrequired:eq('+i+')').focus();
					error=1;
				}
				
			}		
			
		}
		
		if (error ==1){		 
			jQuery('#'+result).html(errorcontent);
			return false;
		}
		
		if (error ==0){
			jQuery('#wpbikerformconfirm').html('<?php echo $param['mail_send_text'];?>');
			
		}
	}
</script>

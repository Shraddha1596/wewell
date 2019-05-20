#wpbiker-form-parent-<?php echo $val->id;?> {
	width: <?php if($param['form_width'] == ""){ echo "100"; } else{ echo $param['form_width'];} ?><?php if($param['form_width_par'] == "" || $param['form_width_par'] == "%"){echo "%"; } else{ echo "px";} ?>;
	<?php if(empty($param['form_align'] ) || $param['form_align'] == "left"){echo "margin: 0;"; }
	else if ($param['form_align'] == "center") {echo "margin:0 auto;";}else {echo "margin-left: auto;";} ?>	
}
#wpbiker-form-id-<?php echo $val->id;?> { 	
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
	overflow: auto
}
#wpbiker-form-id-<?php echo $val->id;?> label{
	font-size: <?php if($param['font_size_label'] == ""){echo "18";}else{echo $param['font_size_label'];}?>px;
	color: <?php if($param['font_color_label'] == ""){echo "#000";}else{echo $param['font_color_label'];}?>;
	display:block;
	text-align:<?php if($param['title_position'] == ""){echo "left";}else{echo $param['title_position'];}?>;
}
#wpbiker-form-id-<?php echo $val->id;?> span{	
	display:block;
	line-height:1.8em;	
}
#wpbiker-form-id-<?php echo $val->id;?> input[type=button]{
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
#wpbiker-form-id-<?php echo $val->id;?> input[type=button]:hover { 
	cursor: pointer; 
	background: <?php if($param['button_hover_color']  == ""){echo "#d45041";}else{echo $param['button_hover_color'];}?>; 
}
#wpbiker-form-id-<?php echo $val->id;?> input[type=text],#wpbiker-form-id-<?php echo $val->id;?> textarea, #wpbiker-form-id-<?php echo $val->id;?> select{ 
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
#wpbiker-form-id-<?php echo $val->id;?> select{
	padding-left:6px;
}
#wpbiker-form-id-<?php echo $val->id;?> textarea{
	height:<?php if($param['height_textarea']  == ""){echo "120";}else{echo $param['height_textarea'];}?>px; 
	margin-bottom: 13px; 
}
#wpbiker-form-id-<?php echo $val->id;?> input[type=text], #wpbiker-form-id-<?php echo $val->id;?> select{
	height:<?php if($param['height_input']  == ""){echo "52";}else{echo $param['height_input'];}?>px; 
	line-height: <?php if($param['height_input']  == ""){echo "52";}else{echo $param['height_input'];}?>px; 
}
#wpbiker-form-id-<?php echo $val->id;?> input[type=text]::-webkit-input-placeholder,#wpbiker-form-id-<?php echo $val->id;?> textarea::-webkit-input-placeholder {
	color: <?php if($param['field_placeholder_color']  == ""){echo "#777777";}else{echo $param['field_placeholder_color'];}?>;
}
#wpbiker-form-id-<?php echo $val->id;?> input[type=text]:-moz-placeholder,#wpbiker-form-id-<?php echo $val->id;?> textarea:-moz-placeholder { /* Firefox 18- */
	color: <?php if($param['field_placeholder_color']  == ""){echo "#777777";}else{echo $param['field_placeholder_color'];}?>;
}
#wpbiker-form-id-<?php echo $val->id;?> input[type=text]::-moz-placeholder,#wpbiker-form-id-<?php echo $val->id;?> textarea::-moz-placeholder {  /* Firefox 19+ */
	color: <?php if($param['field_placeholder_color']  == ""){echo "#777777";}else{echo $param['field_placeholder_color'];}?>;
}
#wpbiker-form-id-<?php echo $val->id;?> input[type=text]:-ms-input-placeholder,.#wpbiker-form-id-<?php echo $val->id;?> textarea:-ms-input-placeholder {
	color: <?php if($param['field_placeholder_color']  == ""){echo "#777777";}else{echo $param['field_placeholder_color'];}?>;
}
#wpbiker-form-id-<?php echo $val->id;?> input[type="checkbox"], #wpbiker-form-id-<?php echo $val->id;?> input[type="radio"] {
	vertical-align: middle;
}
#wpbikerform-result-<?php echo $val->id;?> {
text-align:<?php if(empty($param['text_position'])){echo "left";} else {echo $param['text_position'];} ?>;
}
.wpbiker-col {	
	width: 100%;
	float: left;	
	min-height: 1px;	
	white-space: normal;
	
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
@media only screen and (max-width: <?php if($param['screen_size']  == ""){echo "480";}else{echo $param['screen_size'];}?>px){
	#wpbiker-form-parent-<?php echo $val->id;?> {
		width: <?php if($param['mobile_width']  == ""){echo "85"; } else{ echo $param['mobile_width'];} ?><?php if($param['mobile_width_par']  == "" || $param['mobile_width_par']  == "pr"){echo "%"; } else{ echo "px";} ?>;		
	}
	.wpbiker-col-1, .wpbiker-col-2, .wpbiker-col-3, .wpbiker-col-4, .wpbiker-col-5, .wpbiker-col-6, .wpbiker-col-7, .wpbiker-col-8, .wpbiker-col-9, .wpbiker-col-10, .wpbiker-col-11, .wpbiker-col-12 {
		width: 98%;
	}
}

jQuery(document).ready(function($) {
	//* Vertical table
	$('.tab-nav li:first').addClass('select'); 
	$('.tab-panels>div').hide().filter(':first').show();    
	$('.tab-nav a').click(function(){
		$('.tab-panels>div').hide().filter(this.hash).show(); 
		$('.tab-nav li').removeClass('select');
		$(this).parent().addClass('select');
		return (false); 
	})

	//* Include colorpicker
	$('.wp-color-picker-field').wpColorPicker();
	
	$('form').submit(function () {		
		var counttitle = jQuery(".titltform").length;
		error = 0;
			var i;			
			for (i = 0; i <= counttitle; i++) {
				var title = jQuery('.titltform:eq('+i+')').val();
				if (title != ""){
					jQuery('.titltform:eq('+i+')').removeAttr('style');
					jQuery('.fieldtitle'+i).remove();
					
				}
				if (title == ""){
					jQuery('body,html').animate({scrollTop: jQuery('.titltform:eq('+i+')').offset().top - 100}, 500);
					jQuery('.titltform:eq('+i+')').css({"border-color": "#e54c3a"});
					jQuery('.titltform:eq('+i+')').focus();
					$('.titltform:eq('+i+')').after("<br><span class='err fieldtitle"+i+"'>Please Enter Title</span>");
					error=1;
				}
				
			}	
			if(error==0){
                return true;
            }
			else{
            
            return false; 
            }
		
		
	});
	
	$('.tab-box').after('<span style="float:right;"><a href="https://wow-estore.com/en/wow-forms-pro/" target="_blank">GET PRO VERSION</a></span>');
	
	if ($('input[name="param[button_width_par]"]:checked').val() == "auto"){
		$('[name="param[form_button_width]"]').val('');
		$('[name="param[form_button_width]"]').attr("disabled", "disabled");
	}
	$('[name="param[button_width_par]"]').click(function(){		
		var height_par = $('input[name="param[button_width_par]"]:checked').val();		
		if (height_par == 'auto'){
			$('[name="param[form_button_width]"]').val('');
			$('[name="param[form_button_width]"]').attr("disabled", "disabled");			
		}
		else {
			$('[name="param[form_button_width]"]').val('0');
			$('[name="param[form_button_width]"]').removeAttr("disabled");
		}
	});
	
	var icount = jQuery('.icount:last').html();
	var i = 0;
	while (i <= icount) {
		changetype(i);
		i++;
	}
	
	jQuery('.value_text_remove').live('click', function() {
		$(this).closest('.wpbiker-admin-col').remove();
	});
	mailtoadmin();
	mailtouser();
	autoclose();
	insertservise();
	chooseservice();
});
function mailtouser(){
	if (jQuery('[name="param[send_to_user]"]').is(':checked')){
		jQuery('#mail_to_user').css('display', '');
	}
	else {
		jQuery('#mail_to_user').css('display', 'none');
		}
}
function mailtoadmin(){
	if (jQuery('[name="param[send_to_admin]"]').is(':checked')){
		jQuery('.sendtoadmin').css('display', '');
	}
	else {
		jQuery('.sendtoadmin').css('display', 'none');
		}
}
function autoclose(){
	if (jQuery('[name="param[close_modal]"]').is(':checked')){
		jQuery('#modal_block').css('display', '');
	}
	else {
		jQuery('#modal_block').css('display', 'none');
		}
}
function insertservise(){
	if (jQuery('[name="param[integration]"]').is(':checked')){
		jQuery('#integration').css('display', '');
	}
	else {
		jQuery('#integration').css('display', 'none');
		}
}

function chooseservice(){
	var service = jQuery('[name="param[choosservice]"]').val();		
	if (service == 'mailchimp'){		
		jQuery('.mailchimp').css('display', '');
		jQuery('.getresponse').css('display', 'none');
		jQuery('#registr').html('<a href="http://eepurl.com/cj7tkX" target="_blank">Register now</a>');
	}
	if (service == 'getresponse'){
		jQuery('.mailchimp').css('display', 'none');
		jQuery('.getresponse').css('display', '');
		jQuery('#registr').html('<a href="http://www.getresponse.com/create_free_account.html?a=wow-company&c=link_name" target="_blank">Register now</a>');
		
	}
}

function changetype(count){
	var type = jQuery('[name="param[item_type]['+count+']"]').val();	
	if (type == 'input'){
		jQuery('#block_input_'+count).css('display', 'block');		
		jQuery('#block_noinput_'+count).css('display', 'none');	
		jQuery('[name="param[input_validator]['+count+']"]').removeAttr( "disabled");
		jQuery('#check_'+count).css('display', 'none');
		return;
		}
	else if (type == 'textarea'){
		jQuery('#block_input_'+count).css('display', 'block');		
		jQuery('#block_noinput_'+count).css('display', 'none');	
		jQuery('[name="param[input_validator]['+count+']"]').attr( "disabled", "disabled");
		jQuery('#check_'+count).css('display', 'none');
		return;
		}
	if (type == 'radio' || type == 'checkbox'){ 
		jQuery('#check_'+count).css('display', 'block');
		jQuery('#block_input_'+count).css('display', 'none');		
		jQuery('#block_noinput_'+count).css('display', 'block');
		return;
	
	}
	if (type == 'select'){
		jQuery('#block_input_'+count).css('display', 'none');		
		jQuery('#block_noinput_'+count).css('display', 'block');
		jQuery('#check_'+count).css('display', 'none');
	}
	
	
}
function newlist(count) {
	var type = jQuery('[name="param[item_type]['+count+']').val();
	jQuery('#value_text_'+count).append('<div class="wpbiker-admin-col"><div class="wpbiker-admin-col-4"><input type="text" name="param[list_value]['+count+'][]" value="" /> </div> <div class="wpbiker-admin-col-4"><input type="text" name="param[list_text]['+count+'][]" value="" /></div> <div class="wpbiker-admin-col-3"><input type="checkbox" name="param[list_checkbox]['+count+'][]" value="1" /></div> <div class="wpbiker-admin-col-1 value_text_remove"><i class="fa fa-times-circle fp-close" aria-hidden="true"></i></div></div>');
}

function itemadd(){   
  var icount = jQuery('.icount:last').html(); 
  var nexticount = icount*1+1;  
  jQuery(".items-"+icount).after('<div class="items-'+nexticount+'"> <h3>Field <span class="icount">'+nexticount+'</span></h3> <div class="wpbiker-admin-col"> <div class="wpbiker-admin-col-4">Title<span class="err">*</span>: show <input name="param[include_field_name]['+icount+']" type="checkbox" value="1"> <br/> <input  placeholder="Title/Required" type="text" name="param[name_item]['+icount+']" value="" class="titltform"/> </div> <div class="wpbiker-admin-col-4">Item type:<br/> <select name="param[item_type]['+icount+']" onchange="changetype('+icount+');"> <option value="input">Input</option><option value="textarea">Textarea</option><option value="select">Select</option> <option value="radio">Radio</option> <option value="checkbox">Checkbox</option> </select> </div> <div class="wpbiker-admin-col-4">Width <br/> <select name="param[width_col]['+icount+']"> <option value="12">12/12</option> <option value="11">11/12</option> <option value="10">10/12</option> <option value="9">9/12</option> <option value="8" >8/12</option> <option value="7" >7/12</option> <option value="6" >6/12</option> <option value="5" >5/12</option> <option value="4" >4/12</option> <option value="3" >3/12</option> <option value="2" >2/12</option> <option value="1" >1/12</option> </select></div> </div> <div class="wpbiker-admin-col" id="block_input_'+icount+'"> <div class="wpbiker-admin-col-4">Validation:<br/> <select name="param[input_validator]['+icount+']"><option value="name">Name</option>  <option value="email">Email</option> <option value="number">Number</option> <option value="text">Text</option> </select> </div> <div class="wpbiker-admin-col-4">Placeholder:<br/> <input type="text" name="param[input_placeholder]['+icount+']" value="" /> </div> <div class="wpbiker-admin-col-4">Required field:<br/> <input name="param[field_required]['+icount+']" type="checkbox" value="1"> </div> <div class="wpbiker-admin-col-4"></div> </div> <div class="wpbiker-admin-col" id="block_noinput_'+icount+'"> <div class="wpbiker-admin-col-4">Value:</div> <div class="wpbiker-admin-col-4">Text:</div> <div class="wpbiker-admin-col-3">Selected:</div> <div class="wpbiker-admin-col-1"></div>  <div id="value_text_'+icount+'"> <div class="wpbiker-admin-col"> <div class="wpbiker-admin-col-4"> <input type="text" name="param[list_value]['+icount+'][]" value="" /> </div> <div class="wpbiker-admin-col-4"> <input type="text" name="param[list_text]['+icount+'][]" value="" /> </div> <div class="wpbiker-admin-col-3"> <input type="checkbox" name="param[list_checkbox]['+icount+'][]" value="1"/> </div> <div class="wpbiker-admin-col-1"></div> </div>  </div> <div class="wpbiker-admin-col"> <div class="wpbiker-admin-col-4"><a href="javascript:void(0);" onclick="newlist('+icount+');">Add new value</a></div> <div class="wpcalc-admin-col-4" id="check_'+icount+'"> <input name="param[check_style]['+icount+']" type="radio" value="colom" checked="checked"> Colom <input name="param[check_style]['+icount+']" type="radio" value="inline"> Inline </div>  </div> </div> </div>');
  changetype(icount);
 
}

function itemremove(){   
  var icount = jQuery('.icount:last').html();    
  jQuery(".items-"+icount).remove();
}
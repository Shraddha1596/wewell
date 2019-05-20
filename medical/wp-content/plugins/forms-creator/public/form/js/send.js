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
function wpbikerformsend(wpbikerformid,errsize,errtext,errcolor) {
	var buttid = 'wpbikerformconfirm-'+wpbikerformid;	
	var result = 'wpbikerform-result-'+wpbikerformid;
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
		 
		  var arrkey = [];
		  var arrval = [];
		  jQuery("#wpbiker-form-id-"+wpbikerformid).find('input[type=text], input[type=hidden], input[type=checkbox]:checked, input[type=radio]:checked , textarea, select').each( function(){
			  var tmp = jQuery(this).attr("name");
			  arrkey.push(tmp);
			  arrval.push(this.value);
		  })
		  jQuery('#'+result).html('');		  
		  var data = {
			  'action': 'send_wpbiker_form',
			  arrkey:arrkey,
			  arrval:arrval,			 			  
			  wpbikerformid:wpbikerformid,
			  };			  
		  jQuery.post(send_wpbiker_form.ajaxurl, data, function(msg) {		
			jQuery('#wpbikerformconfirm-'+wpbikerformid).html(msg);
		});
	  }
}
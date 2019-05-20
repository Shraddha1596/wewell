<?php
	defined( 'ABSPATH' ) or die( "No script kiddies please!" );
	$message = array_combine($_POST['arrkey'], $_POST['arrval']);
	$findmail = 'email';
	$findname = 'name';
	foreach ($message as $key => $value) {
		$pos1 = stripos($key, $findmail);
		if ($pos1 !== false){
			$email = $value;
			break;
		}
		else {
			$email = 'no-email@example.com';
		}
	} 
	foreach ($message as $key => $value) {
		$pos2 = stripos($key, $findname);
		if ($pos2 !== false){
			$name = $value;
			break;
		}
		else {
			$name = 'Anonymus';
		}
	}
	$idbutt = sanitize_text_field($_POST['wpbikerformid']);
	if (empty($param['mail_send_admin_mail'])){
		$myemail = "ad@example.com";
	}
	else {
		$myemail = $param['mail_send_admin_mail'];
	}
	if (empty($param['mail_send_text'])){
		$thank = "Thank you. We will contact you shortly.";
	}
	else {
		$thank = $param['mail_send_text'];
	}
	if (empty($param['mail_send_mail_subject'])){
		$mailtext = "Letter from the site";
	}
	else {
		$mailtext = $param['mail_send_mail_subject'];
	}
	if (empty($param['mail_send_send_timer'])){
		$timer = "3000";
	}
	else {
		$timer = $param['mail_send_send_timer']*1000;		
	}
	$trigger = '#wpbiker-form-id-'.$idbutt;	
	$date=date("d.m.Y");
	$time=date("H:i:s"); 
	$headers=null;
	$headers.="content-type: text/html; charset=utf-8\r\n";
	$headers.="From: ".$name." <".$email.">\r\n";
	$headers.="X-Mailer: PHP/".phpversion()."\r\n";
	$mess = '';
	foreach($message as $key => $value){
		$pos = strripos($key, 'wpbiker-field');
		if ($pos === false) {
			$mess.= ' <span>'.$value.'</span><p/>';
		}
		else {
			$mess.= '<b>'.$value.': </b>';
		}
	}
	$allmsg="
		<html>
			<head>
				<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
				<style>BODY {FONT-FAMILY: verdana,arial,helvetica; FONT-SIZE: 14px;}</style>
			</head>
			<body>
				$mess
			</body>
		</html>";
	$primsg = $thank;
	if (!empty($param['send_to_admin'])){
		mail("$myemail", "$mailtext", $allmsg, $headers);
	}
	print "<script language='Javascript'>function reload() {jQuery('$trigger').toggle(); }; setTimeout('reload()', \"$timer\");</script>$primsg";

?>
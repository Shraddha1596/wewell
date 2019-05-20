<?php
$to = "singh.shraddha05@gmail.com";
$subject = "Test mail";
$message = "Hello! This is a test email message.";
$from = "shraddha@excellencetechnologies.in";
$headers = "From:" . $from;

mail($to,$subject,$message,$headers)
?>
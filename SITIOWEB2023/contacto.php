<?php

require('./Captcha.php');

$captcha = new Captcha();

if ($captcha->checkCaptcha($_POST['h-captcha-response'])) {
    
	$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_tel = $_POST['tel'];
$field_message = $_POST['message'];



$mail_to = 'ale@alejandramarun.com';
$subject = 'SITIO WEB ALEJANDRA MARUN: '.$field_name;

$body_message = 'NOMBRE: '.$field_name."\n";
$body_message .= 'TELEFONO: '.$field_tel."\n";

$body_message .= 'EMAIL: '.$field_email."\n";



$body_message .= 'MENSAJE: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

header("Location: http://www.alejandramarun.com/index.html", TRUE, 301);
exit();
	

    echo header("Location: http://www.alejandramarun.com/index.html", TRUE, 301);
exit();
	
	
} else {
    echo "Captcha incorrecto, regrese al sitio e intente nuevamente";
}
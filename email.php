<?php 
require_once("mail/class.phpmailer.php");
require_once("mail/class.smtp.php");
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to_name = "Justin Stewart";
$to = "justin.w.stewart@hotmail.com";
$subject ="Web inquiry";
$from_name = $name;
$from = $email;
//PHP Mail
$mail = new PHPMailer();
$mail->FromName = $from_name;
$mail->From = $from;
$mail->AddAddress($to, $to_name);
$mail->Subject = $subject;
$mail->Body = $message;
$result = $mail->Send();
?>
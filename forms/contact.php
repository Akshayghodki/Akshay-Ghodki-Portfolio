<?php
ini_set("display_errors", 1);

use PHPMailer\PHPMailer\PHPMailer;
require_once "form/autoload.php";
//PHPMailer Object 
$mail = new PHPMailer; //From email address and name 
$mail->From = $_POST['email']; 
$mail->FromName = $_POST['name']; //To address and name 
$mail->addAddress("akshayghodki520@gmail.com","AkshayGhodki");//Recipient name is optional
// $mail->addAddress("recepient1@example.com"); //Address to which recipient will reply 
// $mail->addReplyTo("reply@yourdomain.com", "Reply"); //CC and BCC 
// $mail->addCC("cc@example.com"); 
// $mail->addBCC("bcc@example.com"); //Send HTML or Plain Text email 
$mail->isHTML(true); 
$mail->Subject = $_POST['subject']; 
$mail->Body = $_POST['message'];
$mail->send();
header('Location: ' . $_SERVER['HTTP_REFERER']); 

?>

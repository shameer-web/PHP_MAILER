<?php
   session_start();
if(isset($_POST['submit'])){

require 'phpmailer/PHPMailerAutoload.php';
	$mail=new PHPMailer;
    //From email address and name
$mail->From = "server@puibella.com";
$mail->FromName = "Full Name";
//To address and name
$mail->addAddress("rashadrashad607@gmail.com", "Recepient Name");
//Address to which recipient will reply
// $mail->addReplyTo("reply@yourdomain.com", "Reply");
// //CC and BCC
// $mail->addCC("cc@example.com");
// $mail->addBCC("bcc@example.com");
//Send HTML or Plain Text email
$mail->isHTML(true);
$mail->subject ='Form Submission';
	$mail->Body='<h1 align=center> Name :'.$_POST['name'].'<br>Email :'.$_POST['email'].'<br>Message: '.$_POST['comments'].'</h1>';;
$mail->AltBody = "This is the plain text version of the email content";
	if(!$mail->send()){
		$result ="Somthing went wrong .Please try again.";
	}
    else{
    	$result ="Thanks ".$_POST['name']. " for contacting us .We'll get back you soon!";
    }
}



?>

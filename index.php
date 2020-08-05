<?php
   $result ="";
if(isset($_POST['submit'])){
	require 'phpmailer/PHPMailerAutoload.php';
	$mail=new PHPMailer;

    $mail->isSMTP();

	$mail->Host='smtp.gmail.com';
	$mail->port=587;
	$mail->SMTPAuth=true;
	$mail->SMTPSecure='tls';
	$mail->Username='shameermuhamed4@gmail.com';
	$mail->Password='Hinahinu';



	$mail->setFrom($_POST['email'],$_POST['name']);
	$mail->addAddress('shameermuhamed4@gmail.com');
	$mail->addReplyTo($_POST['email'],$_POST['name']);

	$mail->isHTML(true);
	$mail->subject ='Form Submission:' .$_POST['subject'];
	$mail->Body='<h1 align=center> Name :'.$_POST['name'].'<br>Email :'.$_POST['email'].'<br>Message: '.$_POST['body'].'</h1>';


	if(!$mail->send()){
		$result ="Somthing went wrong .Please try again.";
	}

    else{
    	$result ="Thanks ".$_POST['name']."for contacting us .We'll get back you soon!";
    }

}



?>









<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form</title>
	<link rel="stylesheet" href="">
</head>
<body>
     <h5 class="text-center text-success"><?= $result; ?></h5>
	<form action="" method="post" name="form">
		<input type="text" name="name" value="" placeholder=" pls enter name"> <br><br>
		<input type="text" name="email" value="" placeholder=" pls enter Email"> <br><br>
		<input type="text" name="subject" value="" placeholder=" pls enter Subject"> <br><br>
		<input type="text" name="body" value="" placeholder=" pls enter Subject"> <br><br>
		<input type="submit" name="submit" value="Send a Message" id="submit" onClick="return check_values()">
		
	</form>
	
</body>
</html>
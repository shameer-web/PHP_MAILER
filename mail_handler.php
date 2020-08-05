<?php 

if (isset($_POST['submit'])){
    $name=$_POST['name']; 
    $email=$_POST['email']; 
    $sub=$_POST['subject']; 
    $msg=$_POST['body']; 

    $to ='shameermuhamed4@gmail.com';
    $subject='Form Submission';
    $message="Name : ".$name."\n"."Subject : ".$sub."\n"."wrote the following: "."\n\n".$msg;
    $headers = "From:" .$email;

    if(mail($to, $subject, $message, $headers)){

   echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";

    }

    else{
        echo"something went wrong";
    }

}

?>
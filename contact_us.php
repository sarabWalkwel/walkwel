<?php
session_start();

if($_SESSION['frm_tkn_id']==$_POST['token'])
{
    if(isset($_POST['contact_us']))
    {
    	//include "PHPMailer/class.phpmailer.php";
    	include_once('PHPMailer/PHPMailerAutoload.php');
        $mail = new PHPMailer();

    	$name 			= htmlspecialchars($_POST['contact_name']);
    	$organisation 	= htmlspecialchars($_POST['contact_organisaion']);
    	$phone			= htmlspecialchars($_POST['contact_phone']);
    	$subject		= htmlspecialchars($_POST['subject']);
    	$message		= htmlspecialchars($_POST['message']);
    	$to 			= 'info@walkwel.in';
    	//$subject 		= 'Resume';

//        $email->IsSMTP(false);
//        $email->SMTPAuth = true; 
//    	$email->SMTPSecure = 'ssl'; 
//        $email->Host = 'smtp.gmail.com';
//        $email->Port = 465;  
//        $email->Username = 'admin@gmail.com';  
//        $email->Password = '*******';   
//        $email->From      = $to;
//        $email->FromName  = $name;
//        $email->Subject   = $subject;
//        /*$email->Subject   = $subject;
//        $email->Subject   = $subject;*/
//        $email->Body      = $message;
//        $email->AddAddress( 'hr@walkwel.in' );
//        $email->IsHTML(true);

		//$mail = new PHPMailer;
		//Set who the message is to be sent from
		$mail->setFrom('info@walkwel.in', 'Walkwel Info');
		//Set an alternative reply-to address
		$mail->addReplyTo('info@walkwel.in', 'First Last');
		//Set who the message is to be sent to
		$mail->addAddress('hr@walkwel.in', 'Walkwel HR');
		//Set the subject line
		$mail->Subject = $subject;
		//Read an HTML message body from an external file, convert referenced images to embedded,
		//convert HTML into a basic plain-text alternative body
		$mail->msgHTML($message);
       
       	if(!$mail->Send()) 
       	{
    	    echo 'Message was not sent.';
    	    echo 'Mailer error: ' . $mail->ErrorInfo;
    	    header('location:contactUs.php?success=1');
    	} 
    	else 
    	{
      		//echo 'Message has been sent.';
      		header('location:contactUs.php?success=1');
    	}   
    }
      $token = md5(uniqid(rand(), true));
      $_SESSION['frm_tkn_id'] = $token;
}


?>
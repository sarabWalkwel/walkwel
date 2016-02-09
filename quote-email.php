<?php
session_start();
print_r($_SESSION);
print_r($_POST);
if($_SESSION['session_token'] == $_POST['quote_form_token'])
{
	if (empty($_POST["name"]) && empty($_POST["email"]) && empty($_POST["phone"]) )
	{        
	    header("location:error.html");      	
	}  
	else
	{
	   $Email=trim(strip_tags($_POST["email"]));
		$mailbody='';
		foreach($_POST as $key=>$val)
		{
			if(strtoupper($key)!='SUBMIT' && $key!='quote_form_token')
			{
				$mailbody.= $key.' '.trim(strip_tags($val)).'<br>';
			}
		}
		$mailbody.= "IP Address:".$_SERVER['REMOTE_ADDR'].'<br>';
		$_SESSION["session_token"] = uniqid();		
		$subject="Quote form details";
		$email_to="info@walkwel.in";			
		
		$headers = 'From: '.$Email."\r\n".'Reply-To: '.$email_to."\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		@mail($email_to, $subject, $mailbody, $headers);
	    header("location:thanks.html");  
		}
}
else
{
		header("location:Home");
}
?>


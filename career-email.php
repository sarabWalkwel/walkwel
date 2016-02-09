<?php
session_start();
if( $_SESSION['session_token'] == $_POST['career_form_token'] && isset($_POST['submit']))
{
	
	if ( empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["city"]) )
    {        
    	
		header("location:error.html?err=1");      	
    }  
    else
    {
    	$name=trim(strip_tags($_POST["name"]));
    	$email=trim(strip_tags($_POST["email"]));
		$mobile=trim(strip_tags($_POST["mobile"]));
		$city=trim(strip_tags($_POST["city"]));
    	$address=trim(strip_tags($_POST["address"]));    	
    	$pincode=trim(strip_tags($_POST["pincode"]));    	
		$keyskills=trim(strip_tags($_POST["keyskills"]));
		$experience=$_POST["experience"];
		
		//file attached 
		$tmpName = $_FILES['file']['tmp_name'];
		$fileType = $_FILES['file']['type'];
		$fileName = $_FILES['file']['name']; 
		
		if(file($tmpName))
		{
		$file = fopen($tmpName,'rb');
		$data = fread($file,filesize($tmpName));
		fclose($file);
		
		 /* a boundary string */
  		$randomVal = md5(time());
  		$mimeBoundary = "==Multipart_Boundary_x{$randomVal}x"; 
		
		/* Header of the file attachment */
		$headers =  "From : $name";
		$headers .= "\nMIME-Version: 1.0\n"; 
		$headers .= "Content-Type: multipart/mixed;\n" ;
		$headers .= "boundary=\"{$mimeBoundary}\""; 
	    $headers .= "Content-type:text/plain; charset=iso-8859-1\r\n";
		$headers .= "Content-Type: application/octet-stream; name=\"".$fileName."\"\r\n";
		$headers .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
		$headers .= "Content-Disposition: attachment; filename=\"".$fileName."\"\r\n\r\n";
		$headers .= 'From: '.$email."\r\n".'Reply-To: '.$email_to."\r\n";
		
		/* Fillter data */
		
		$subject="Career Form Details";
		$email_to="walkweltechnology@gmail.com";
		 
		
		/* Encoding file data */
		$data = chunk_split(base64_encode($data)); 
		
		/* Adding attchment-file to message*/
		$message = "--{$mimeBoundary}\n"."Content-Type: {$fileType};\n"
		." name=\"{$fileName}\"\n"."Content-Transfer-Encoding: base64\n\n"
		.$data . "\n\n" ."--{$mimeBoundary}--\n";
		
		$message .="Name: ".$name."<br/>";
		$message .="\n Email: ".$email."<br/>";
		$message .="\n Mobile ".$mobile."<br/>";
		$message .="\n City ".$city."<br/>";
		$message .="\n Address: ".$address."<br/>";		
		$message .="\n Pincode ".$pincode."<br/>";		
		$message .="\n Keyskills ".$keyskills."<br/>";
		$message .="\n Experience ".$experience."<br/>";
		
	
		}
		echo $sent_mail = mail($email_to, $subject, $message, $headers);
		echo $_SESSION["session_token"] = uniqid();	
	    print_r($sent_mail);
		
		/*if($sent_mail)
		{
		header("location:thanks.html");
		}
		else
		{
			header("location:error.html?err=2"); 
		}*/
		  
	}
	
}
else
{

	header("location:Home");  
}
?>


<?php

	$name = $_Post['name'];
	$visitor_email = $_Post['email'];
	$message = $_Post['message'];



	$email_from = 'tzeryen96@gmail.com';

	$email_subject = "New Form Submission";

	$email_body = "User Name: $name.\n".
					"User Email: $visitor_email.\n".
						"User Message: $message.\n";


	$to = "tzeryen96@gmail.com";

	$headers = "From: $email_from \r\n";

	$headers .= "Reply-To: $visitor_email \r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("Location: Yen.html"); 

	if (mail($name, $visitor_email, $message)){
		$success = "Message successfully sent";
	}else{
		$success = "Message Sending Failed, try again";
	}


?>
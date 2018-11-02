<?php

	$artistemail = $_POST["artistemail"];
	$job = $_POST["job"];
	$totalcost = $_POST["totalcost"];
	$share = $_POST["share"];
	$sharetotalcost = $_POST["sharetotalcost"];


		//mail($to, $subject, $message, $headers);
		//$headers = 'From: '."\r\n".'X-Mailer: PHP/' . phpversion();
		$headers = "From: inkognito_tattoo@hotmail.com\r\n";
		$headers .= "Reply-To: noreplyinkognito_tattoo@hotmail.com\r\n";
		$headers .= "Return-Path: noreplyinkognito_tattoo@hotmail.com\r\n";
		$headers .= "CC: noreplyinkognito_tattoo@hotmail.com\r\n";
		$headers .= "BCC: noreplyinkognito_tattoo@hotmail.com\r\n";

		$message = "Artist email: ".$artistemail."\r\n";
		$message .= "Job: ".$job."\r\n";
		$message .= "Total Cost: £".$totalcost."\r\n";
		$message .= "Share: ".$share."\r\n";
		$message .= "Total Cost Split: ".$sharetotalcost."\r\n";

		$subject = "Artist tattoo complete form";
		
		$body .= $message;



		// echo $subject;
		$mailSuccess = mail($artistemail, $subject, $body, $headers);
		$mailSuccess2 = mail('inkognito_tattoo@hotmail.com', $subject, $body, $headers);
		// mail('web-rqohj@mail-tester.com', $subject, $body, $headers);

	if($mailSuccess2){
		header( 'Location: artistformsuccessful.html' ) ; 
	} else {
		header( 'Location: artistformunsuccessful.html' ) ; 
	}
?>
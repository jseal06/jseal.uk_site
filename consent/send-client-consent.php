<?php

	$clientemail = $_POST["clientemail"];
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$address1 = $_POST["address1"];
	$address2 = $_POST["address2"];
	$address3 = $_POST["address3"];
	$city = $_POST["city"];
	$county = $_POST["county"];
	$postcode = $_POST["postcode"];
	$phonenumber = $_POST["phonenumber"];
	$dateofbirth = $_POST["dateofbirth"];
	$gender = $_POST["gender"];


	// $checkbox1 = $_POST["checkbox1"];
	// $checkbox2 = $_POST["checkbox2"];
	// $checkbox3 = $_POST["checkbox3"];
	// $checkbox4 = $_POST["checkbox4"];
	// $checkbox5 = $_POST["checkbox5"];
	// $checkbox6 = $_POST["checkbox6"];
	// $checkbox7 = $_POST["checkbox7"];
	// $checkbox8 = $_POST["checkbox8"];
	// $checkbox9 = $_POST["checkbox9"];
	// $checkbox10 = $_POST["checkbox10"];
	// $checkbox11 = $_POST["checkbox11"];
	// $checkbox12 = $_POST["checkbox12"];
	// $checkbox12 = $_POST["checkbox13"];
	// $checkbox12 = $_POST["checkbox14"];
	// $checkbox12 = $_POST["checkbox15"];
	// $checkbox12 = $_POST["checkbox16"];
	// $checkbox12 = $_POST["checkbox17"];
	

	$checkbox1lable = $_POST["checkbox1lable"];
	$checkbox2lable = $_POST["checkbox2lable"];
	$checkbox3lable = $_POST["checkbox3lable"];
	$checkbox4lable = $_POST["checkbox4lable"];
	$checkbox5lable = $_POST["checkbox5lable"];
	$checkbox6lable = $_POST["checkbox6lable"];
	$checkbox7lable = $_POST["checkbox7lable"];
	$checkbox8lable = $_POST["checkbox8lable"];
	$checkbox9lable = $_POST["checkbox9lable"];
	$checkbox10lable = $_POST["checkbox10lable"];
	$checkbox11lable = $_POST["checkbox11lable"];
	$checkbox12lable = $_POST["checkbox12lable"];
	$checkbox13lable = $_POST["checkbox13lable"];
	$checkbox14lable = $_POST["checkbox14lable"];
	$checkbox15lable = $_POST["checkbox15lable"];
	$checkbox16lable = $_POST["checkbox16lable"];
	$checkbox17lable = $_POST["checkbox17lable"];
	$allergies = $_POST["allergies"];

	$signiture = $_POST["base64SignitureSvg"];
	// echo "test";

	// echo $clientemail;
	// echo $firstname;
	// echo $lastname;
	// echo $address1;
	// echo $address2;
	// echo $address3;
	// echo $city;
	// echo $county;
	// echo $postcode;
	// echo $phonenumber;
	// echo $dateofbirth;
	// echo $checkbox1;
	// echo $checkbox2;
	// echo $checkbox3;
	// echo $checkbox4;
	// echo $checkbox5;
	// echo $checkbox6;
	// echo $checkbox7;
	// echo $checkbox8;
	// echo $checkbox9;
	// echo $checkbox10;
	// echo $checkbox11;
	// echo $checkbox12;

	// echo $signiture;
	// Append a new person to the file


	require('fpdf.php');

	$pdf = new FPDF();

	# Add UTF-8 support (only add a Unicode font)
	$pdf->SetFont('Arial','B',16);

	$pdf->SetTitle('Tattoo Consent Form');
	$pdf->SetAuthor('Inkognito Tattoo Studio');
	$pdf->SetDisplayMode('fullpage', 'single');

	$pdf->SetLeftMargin(20);
	$pdf->SetRightMargin(20);

	$pdf->AddPage();
    // Logo
    $pdf->Image('header-pdf.jpg',10,5,60);
    // Arial bold 15
    $pdf->SetFont('Arial','B',15);
    // Move to the right
    $pdf->Cell(80);
    // Title
    $pdf->Cell(80,10,"TATTOO CONSENT FORM",1,0,'C');
    // Line break
    $pdf->Ln(50);

    $pdf->Cell(170,10,"Personal Details",1,0,'C');
    // Line break
    $pdf->Ln(15);
	// $pdf->Write(5, "PERSONAL INFORMATION");
	// $pdf->Ln(10); // new line
	$pdf->Write(10, "Name: $firstname $lastname");
	$pdf->Ln(10); // new line
	$pdf->Write(10, "Address: $address1");
	if($address2 !== ""){
		$pdf->Write(10, ", $address2");
	}
	if($address3 !== ""){
		$pdf->Write(10, ", $address3");
	}

	$pdf->Write(10, ", $city");

	if($county !== ""){
		$pdf->Write(10, ", $county");
	}
	$pdf->Write(10, ", $postcode");

	$pdf->Ln(10); // new line

	$pdf->Write(10, "Email: $clientemail");
	$pdf->Ln(10); // new line
	$pdf->Write(10, "Phone number: $phonenumber");
	$pdf->Ln(10); // new line
	$pdf->Write(10, "D.O.B: $dateofbirth");
	$pdf->Ln(10); // new line
	$pdf->Write(10, "Gender: $gender");


	$pdf->Ln(20); // new line
    $pdf->Cell(170,10,"$firstname $lastname has confirmed all the following:",1,0,'C');
    // Line break
    $pdf->Ln(15);
	$pdf->Write(10, "$checkbox1lable");
	$pdf->Ln(15); // new line
	$pdf->Write(10, "$checkbox2lable");
	$pdf->Ln(15); // new line
	$pdf->Write(10, "$checkbox3lable");
	$pdf->Ln(15); // new line
	$pdf->Write(10, "$checkbox4lable");
	$pdf->Ln(15); // new line
	$pdf->Write(10, "$checkbox5lable");
	$pdf->Ln(15); // new line
	$pdf->Write(10, "$checkbox6lable");
	$pdf->Ln(15); // new line
	$pdf->Write(10, "$checkbox7lable");
	$pdf->Ln(15); // new line
	$pdf->Write(10, "$checkbox8lable");
	$pdf->Ln(15); // new line
	$pdf->Write(10, "$checkbox9lable");
	$pdf->Ln(15); // new line
	$pdf->Write(10, "$checkbox10lable");
	$pdf->Ln(15); // new line
	$pdf->Write(10, "$checkbox11lable");
	$pdf->Ln(15); // new line
	$pdf->Write(10, "$checkbox12lable");
	$pdf->Ln(15); // new line
	$pdf->Write(10, "$checkbox13lable");
	$pdf->Ln(15); // new line
	$pdf->Write(10, "$checkbox14lable");
	$pdf->Ln(15); // new line
	$pdf->Write(10, "$checkbox15lable");
	$pdf->Ln(15); // new line
	$pdf->Write(10, "$checkbox16lable");
	$pdf->Ln(15); // new line
	$pdf->Write(10, "$checkbox17lable");
	$pdf->Ln(15); // new line
	$pdf->Write(10, "Allergies: $allergies");





	$pdf->Ln(20); // new line
    $pdf->Cell(170,10,"Signed by $firstname $lastname",1,0,'C');
	$pdf->Ln(20); // new line

	const TEMPIMGLOC = 'tempimg.png';
	// echo $signiture;
	$dataPieces = explode(',',$signiture);
	$encodedImg = $dataPieces[1];
	$decodedImg = base64_decode($encodedImg);
	if( file_put_contents(TEMPIMGLOC,$decodedImg)!==false )
    {
    	$pdf->Image(TEMPIMGLOC,0, $pdf->GetY(),210, 0);
    	// $pdf->Image(TEMPIMGLOC,0,0,210,0);
	}
	// $pdf->Output();



	// a random hash will be necessary to send mixed content
	$separator = md5(time());

	// carriage return type (we use a PHP end of line constant)
	$eol = PHP_EOL;
	// attachment name
	$filename = "consent_form.pdf";

	// encode data (puts attachment in proper format)
	$pdfdoc = $pdf->Output("", "S");
	$attachment = chunk_split(base64_encode($pdfdoc));
	// if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {

		
		//mail($to, $subject, $message, $headers);
		//$headers = 'From: '."\r\n".'X-Mailer: PHP/' . phpversion();
		$headers = "From: Inkognito <inkognito_tattoo@hotmail.com>\r\n";
		$headers .= "Reply-To: noreplyinkognito_tattoo@hotmail.com\r\n";
		$headers .= "Return-Path: noreplyinkognito_tattoo@hotmail.com\r\n";
		$headers .= "CC: noreplyinkognito_tattoo@hotmail.com\r\n";
		$headers .= "BCC: noreplyinkognito_tattoo@hotmail.com\r\n";
		
		// Add the content headers
		// $headers .= 'MIME-Version: 1.0' . "\r\n";
		// $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "MIME-Version: 1.0".$eol; 
		$headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"";

		$subject = "Consent form for " . $firstname ." " . $lastname ."'s tattoo";
		// $replymsg = "<html><body><img src=\"http://www.willyoxall.com/shape-it/images/email-new.jpg\" style=\"margin: auto;width:600px;height:738px;\" alt=\"Thank you for your request to join our mailing list.  We will be in touch with any key anouncments.\" /></body></html>";

		// no more headers after this, we start the body! //

		$body = "--".$separator.$eol;
		$body .= "Content-Transfer-Encoding: 7bit".$eol.$eol;





		// MESSAGE
		$body .= "Congrats ".$firstname." ".$lastname.$eol;
		$message = "<p>So, you’ve finally got the tattoo which you have always wanted. Getting a tattoo is painful, but not taking the correct aftercare precautions can ruin what you’ve waited so long for and all that pain you went through. If you want your tattoo to look exactly the same even years from now you should take a lot of care to look after it – remember you’re spending a lot of money and taking the time to take care of your investment is just common sense. This aftercare advice will be provided to you by any good artist but here are some basic tips you must remember if you have just got a tattoo done:</p>
			<p>- Immediately after the tattoo has been inked, it will be wrapped in cling film to collect the blood and fresh ink from the tattoo. Your artist will inform you for how long you will need to keep this on but generally it should be in place for at least two hours (but this is dependent on the size and the area on the body).<br/>			
			- A fresh tattoo is susceptible to infections and hence one must wash it several times a day with an antibacterial, soft and non-scented soap. Washing off the soap with cold water helps close the pores and heal the tattoo more quickly. This should be done for at least two to three weeks or until the tattoo is healed. Keeping the tattoo clean is the only way one can protect it from a potential infection. Also never touch a tattoo without washing your hands thoroughly as it too can be a source of contamination.<br/>
			- The tattoo should be adequately hydrated and this is achieved by using a good ointment or moisturiser, recommended by your artist. This ointment should be applied on the tattoo after washing it and only a thin layer should be applied, but you must wait for the tattoo to dry naturally; using a course towel or rag can pull the colour out of you tattoo.<br/>
			- Tight clothing should be avoided for a few weeks after getting a tattoo done. Tight clothes can increase the risk of ink loss and scabbing as they rub against the tattoo. Avoid sleeping on the side of your tattoo, as much as possible as it is likely to delay the healing process.<br/>
			- While the tattoo is fresh one must avoid going into water bodies such as sea, lakes or even pools. Excess exposure to sweat and sunlight should also be avoided for the first two weeks. Taking a long and hot shower is also likely to disrupt the healing process and hence must be avoided, and you should avoid submerging into water for a long period of time.<br/>
			- Remember that scabbing is a natural and effective way of healing and hence scabs should not be peeled off or scratched at. Picking them off can remove the colour and cause damage to the skin.</p>
			<p>After following the above advice for a few weeks you may think that the job of taking care of your tattoo is over. But once you get permanent ink on your skin there are certain precautions you will have to follow your entire life.</p>
			<p>- Once the healing process is complete the tattoo is going to brighten up. This means that the layers of skin are growing back and the tattoo is being accepted. To ensure that the colours do not fade, it is important to protect it from sunlight by applying sunscreen lotion each time you step out in the sun.<br/>
			- Keep your tattoos moisturised. Moisture helps the tattoo retain its colour and makes it less prone to fading over the years.</p>
			<p>If you follow the above advice your tattoos will take longer to fade, and although they may need touch ups, they will look great for years to come.</p><br/>
			<p>We look forward to seeing you again!</p>";
		// $message .= "<p>Please see the attachments for a copy of your consent form and <a href=\"https://www.cosmopolitan.com/uk/beauty-hair/a7369/tattoos-aftercare-95207/\">here</a> are some further aftercare points.</p>";
		$message .= "<p>Please see the attachments for a copy of your consent form.</p>
			<p>Please find our social pages below if you would like to follow us</p>
			<a href=\"https://www.facebook.com/INKognito-1260910470678521\">Inkognito - Facebook</a><br/>
			<a href=\"https://www.instagram.com/inkognitoyourtattoohero\">Inkognito - Instagram</a><br/>
			<a href=\"https://twitter.com/tattooinkognito\">Inkognito - Twitter</a><br/>";


		// message
		$body .= "--".$separator.$eol;
		$body .= "Content-Type: text/html; charset=\"iso-8859-1\"".$eol;
		$body .= "Content-Transfer-Encoding: 8bit".$eol.$eol;
		$body .= $message.$eol;

		// attachment
		$body .= "--".$separator.$eol;
		$body .= "Content-Type: application/octet-stream; name=\"".$filename."\"".$eol; 
		$body .= "Content-Transfer-Encoding: base64".$eol;
		$body .= "Content-Disposition: attachment".$eol.$eol;
		$body .= $attachment.$eol;
		$body .= "--".$separator."--";



		$mailSuccess = mail($clientemail, $subject, $body, $headers);
		$mailSuccess2 = mail('inkognito_tattoo@hotmail.com', $subject, $body, $headers);
	if($mailSuccess2){
		header( 'Location: consentformsuccessful.html' ) ; 
	} else {
		header( 'Location: consentformunsuccessful.html' ) ; 
	}
?>
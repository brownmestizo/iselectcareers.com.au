<?php

  // send mail to
 // $to = "info@iselectcareers.com.au";
  $to = "emily@rawpixel.com.au";
  
  //*** Uniqid Session ***//
  $strSid = md5(uniqid(time()));
  
  //form data
  $commenttype = $_POST["commenttype"];
  $contactmethod = $_POST["contactmethod"];
  $email = $_POST["emailaddress"];
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $phone = $_POST["phone"];
  $state = $_POST["state"];
  $fullname = $firstname." ".$lastname;
  $rto = $_POST['rto'];
  
  $studentno = $_POST["studentno"];
  if ($studentno == "")
  {
	  $studentno = "Unsure";
  }
  $address = $_POST["address"] . "<br />" . $_POST["towncity"] . ", " . $_POST["postcode"];
  $comment = $_POST["comment"];
  
  // subject
  $subject = "Contact form - iSelectCareers";
  
  // create message
  
  	$message  = '<html><body>';
	$message .=  "<p>This email has been sent using the iSelectCareers contact form. </p>";
	$message .= '<table border rules="all" style="border-color: #666; border-collapse: collapse;" cellpadding="10">';
	$message .= "<tr style='background: #eee;'><td><strong>Student name:</strong> </td><td>" . $fullname . "</td></tr>";
	$message .= "<tr><td><strong>Email:</strong> </td><td>" . $email . "</td></tr>";
	$message .= "<tr><td><strong>Mobile number:</strong> </td><td>" . $phone . "</td></tr>";
	$message .= "<tr><td><strong>Message:</strong> </td><td>" . $comment . "</td></tr>";
	$message .= "</table>";
	$message .= "</body></html>";
  	
	//Updated Headers
    $headers = "From: $fullname <$email> \r\n" . "Reply-To: " . $email . "\r\n" . "X-Mailer: PHP/" . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: multipart/mixed; boundary=\"".$strSid."\"\n\n";
	$headers .= "This is a multi-part message in MIME format.\n";	
	$headers .= "--".$strSid."\n";
	$headers .= "Content-type: text/html; charset=utf-8\n";
	$headers .= "Content-Transfer-Encoding: 7bit\n\n";
    $headers .= $message."\n\n";
				
	//*** Attachment ***//
	if($_FILES["formfileattachment"]["name"] != "")
	{
		$filename = $_FILES["formfileattachment"]["name"];
		$filecontent = chunk_split(base64_encode(file_get_contents($_FILES["formfileattachment"]["tmp_name"]))); 
		$headers .= "--".$strSid."\n";
		$headers .= "Content-Type: application/octet-stream; name=\"".$filename."\"\n"; 
		$headers .= "Content-Transfer-Encoding: base64\n";
		$headers .= "Content-Disposition: attachment; filename=\"".$filename."\"\n\n";
		$headers .= $filecontent."\n\n";
	}
	
    mail($to,$subject,null, $headers);
	
	//AUTO REPLY		
	//$from = 'From:' .$email;	
  	$messagetostudent  = '<html><body>';
	$messagetostudent .=  "<p>Thank you for your submission.</p>";
	$messagetostudent .=  "<p>This is an automatic email, please do not reply to this message.</p>";
	$messagetostudent .=  "<p>We will contact you very soon.</p>";	
	$messagetostudent .= "</body></html>";
		
    $headerstudent = "From: No Reply <noreply@iselectcareers.com.au> \r\n" . "X-Mailer: PHP/" . phpversion();
    $headerstudent .= "MIME-Version: 1.0\r\n";
	$headerstudent .= "Content-Type: multipart/mixed; boundary=\"".$strSid."\"\n\n";
	$headerstudent .= "This is a multi-part message in MIME format.\n";	
	$headerstudent .= "--".$strSid."\n";
	$headerstudent .= "Content-type: text/html; charset=utf-8\n";
	$headerstudent .= "Content-Transfer-Encoding: 7bit\n\n";
    $headerstudent .= $messagetostudent."\n\n";
				
	//*** Attachment ***//
	if($_FILES["formfileattachment"]["name"] != "")
	{
		$filename = $_FILES["formfileattachment"]["name"];
		$filecontent = chunk_split(base64_encode(file_get_contents($_FILES["formfileattachment"]["tmp_name"]))); 
		$headerstudent .= "--".$strSid."\n";
		$headerstudent .= "Content-Type: application/octet-stream; name=\"".$filename."\"\n"; 
		$headerstudent .= "Content-Transfer-Encoding: base64\n";
		$headerstudent .= "Content-Disposition: attachment; filename=\"".$filename."\"\n\n";
		$headerstudent .= $filecontent."\n\n";
	}
		
	$studentname = $email;
	$subjectstudent = 'Thank you for contacting us!';
		  
    mail($studentname,$subjectstudent,null, $headerstudent);
	
	//END OF AUTO REPLY				
	
    header("location: thankyou.html"); 
?>

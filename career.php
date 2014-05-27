<?php

  // send mail to
  $to = "info@iselectcareers.com.au, luella@aot.edu.au";
  
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
  $studyreason = $_POST["studyreason"];
  $deliverymode = $_POST["deliverymode"];
  $requireassistance = $_POST["requireassistance"];
  $formname = $_POST["formname"];
  $subject = $_POST["formname"];
  $courseinterest = $_POST["courseinterest"];
  
  $currentindustry = $_POST["currentindustry"];
  $desiredindustry = $_POST["desiredindustry"];
  $howhear = $_POST["howhear"];
  $jobdifficulty = $_POST["jobdifficulty"];
  $usingrecruitment = $_POST["usingrecruitment"];
  $assistance = $_POST["assistance"];
  $resume = $_POST["resume"];
  $havevisa = $_POST["havevisa"];
  $visatype = $_POST["visatype"];
  $howlongbeen = $_POST["howlongbeen"];
  $staylength = $_POST["staylength"];

  $fullname = $firstname." ".$lastname;
  
  // subject
  
  // create message
  
  	$message  = '<html><body>';
	$message .=  "<p>This email has been sent using the iSelectCareers contact form </p>";
	$message .= '<table border rules="all" style="border-color: #666; border-collapse: collapse;" cellpadding="10">';
	$message .= "<tr style='background: #eee;'><td><strong>Student name:</strong> </td><td>" . $fullname . "</td></tr>";
	$message .= "<tr><td><strong>Email:</strong> </td><td>" . $email . "</td></tr>";
	$message .= "<tr><td><strong>Mobile number:</strong> </td><td>" . $phone . "</td></tr>";
	$message .= "<tr><td><strong>State:</strong> </td><td>" . $state . "</td></tr>";
	$message .= "<tr><td><strong>What is your current industry/profession:</strong> </td><td>" . $currentindustry . "</td></tr>";
	$message .= "<tr><td><strong>What is your desired industry/profession:</strong> </td><td>" . $desiredindustry . "</td></tr>";
	$message .= "<tr><td><strong>How did you hear about us:</strong> </td><td>" . $howhear . "</td></tr>";
	$message .= "<tr><td><strong>Are you have difficulty getting a job:</strong> </td><td>" . $jobdifficulty . "</td></tr>";
	$message .= "<tr><td><strong>Have you or are you using job recruitment companies to assist in finding you a job:</strong> </td><td>" . $usingrecruitment . "</td></tr>";
	$message .= "<tr><td><strong>What assistance has  been provided, and are your expectations being met:</strong> </td><td>" . $assistance . "</td></tr>";
	$message .= "<tr><td><strong>Do you have a target resume for each position  you are applying for?:</strong> </td><td>" . $resume . "</td></tr>";
	$message .= "<tr><td><strong>Do you have Australian work permit visa:</strong> </td><td>" . $havevisa . "</td></tr>";
	$message .= "<tr><td><strong>What type of visa did you entered Australia with:</strong> </td><td>" . $visatype . "</td></tr>";
	$message .= "<tr><td><strong>How long have you been in Australia:</strong> </td><td>" . $howlongbeen . "</td></tr>";
	$message .= "<tr><td><strong>Estimated length of stay in Australia:</strong> </td><td>" . $staylength . "</td></tr>";
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
	$messagetostudent .=  "<p>Thank you! Your email has been received</p>";	
	$messagetostudent .=  "<p>We will contact you shortly.</p>";	
	$messagetostudent .=  "<p>This is an automatic email, please do not reply to this message.</p>";
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
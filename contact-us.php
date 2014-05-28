<?php 
    /* iselectcareers.com.au */
    /* May 27, 2014 */
    /* brownmestizo@gmail.com */

    error_reporting(E_ERROR | E_PARSE);
    //ini_set('display_errors', 1);
    require 'libs/form/Zebra_Form.php';
    require 'libs/phpmailer/PHPMailerAutoload.php';
    require 'model/iselect_modelForm.php';

    // instantiate two objects
    $form = new Zebra_Form('form');
    $submitResumeForm = new iselectForm();
    $form->show_all_error_messages(true);
    $form->clientside_validation(true);
    $form->clientside_validation(array(
        'close_tips'                =>  false,      //  don't show a "close" button on tips with error messages
        'on_ready'                  =>  false,      //  no function to be executed when the form is ready
        'disable_upload_validation' =>  true,       //  using a custom plugin for managing file uploads
        'scroll_to_error'           =>  true,      //  don't scroll the browser window to the error message
        'tips_position'             =>  'right',    //  position tips with error messages to the right of the controls
        'validate_on_the_fly'       =>  true,       //  don't validate controls on the fly
        'validate_all'              =>  false,      //  show error messages one by one upon trying to submit an invalid form
    ));

    // First Name
    $form->add('label', 'label_firstName', 'firstName', 'First Name');
    $obj = $form->add('text', 'firstName');
    $obj->set_rule(array('required' => array('error', 'First Name is required.')));

    // Last Name
    $form->add('label', 'label_lastName', 'lastName', 'Last Name');
    $obj = $form->add('text', 'lastName');
    $obj->set_rule(array('required' => array('error', 'Last Name is required.')));            

    //***************************************************************
    //***************************************************************

    // Email Address
    $form->add('note', 'note_emailAddress', 'emailAddress', 'Your email address will not be published.');
    $form->add('label', 'label_emailAddress', 'emailAddress', 'Email address');
    $obj = $form->add('text', 'emailAddress');
    $obj->set_rule(array(
        'required'  =>  array('error', 'Email is required!'),
        'email'     =>  array('error', 'Email address seems to be invalid!'),
    ));

    //***************************************************************
    //***************************************************************

    // Contact Number
    $form->add('label', 'label_contactNumber', 'contactNumber', 'Contact Number');
    $obj = $form->add('text', 'contactNumber','', array('data-prefix' => '(+61)'));
    $obj->set_rule(array(
        'required'  => array('error', 'Contact number is required.'),
        'length'    => array(8, 10, 'error', 'Must contain between 8 and 10 digits!'),
        'digits'    => array('', 'error', 'Should only include numbers and no special characters.')
    ));
    $form->add('note', 'note_contactNumber', 'contactNumber', 'Accepts only numbers and no special characters.');

    // State
    $form->add('label', 'label_state', 'state', 'State');
    $obj = $form->add('select', 'state', '', '');
    $obj->add_options($submitResumeForm->state);
    $obj->set_rule(array(
        'required' => array('error', 'State is required.')
    ));

    // Message
    $form->add('label', 'label_message', 'message', 'Message');
    $obj = $form->add('textarea', 'message');
    $obj->set_rule(array(
        'length'    => array(50, 0, 'error', 'Minimum length is 50 characters!', true),
    ));

    // Submit button
    $form->add('submit', 'btnsubmit', 'Submit');

    // Validate the form
    if ($form->validate()) {
        
          $to = "emily@rawpixel.com.au, brownmestizo@gmail.com";
          
          //*** Uniqid Session ***//
          $strSid = md5(uniqid(time()));
          
            $message  = '<html><body>';
            $message .=  "<p>This email has been sent using the iSelectCareers contact form. </p>";
            $message .= '<table class="results"><thead><tr><td colspan="2">Submitted values</td></tr></thead>';
                foreach ($_POST as $key => $value) {
                    if (strpos($key, 'name_') !== 0 && strpos($key, 'timer_') !== 0 && strpos($key, 'response_') !== 0)
                        $message .= '<tr><th>' . $key . '</th><td>' . (is_array($value) ? '<pre>' . print_r($value, true) . '</pre>' : $value) . '</td></tr>';
                }
            $message .= '</table>';
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
            
            $form->render('thankyou.html');         
    } else
        $form->render('templates/contactUs.php');

    ?>        

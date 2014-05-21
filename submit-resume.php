<?php 
/* iselectcareers.com.au */
/* May 16, 2014 */
/* brownmestizo@gmail.com */

error_reporting(E_ERROR | E_PARSE);
//ini_set('display_errors', 1);
include_once ('libs/form/Zebra_Form.php');
include_once ('libs/phpmailer/PHPMailerAutoload.php');
include_once ('model/iselect_modelForm.php');

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
?>

<html>
    <head>
        <title>Submit your resume to iSelect Careers</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link href="css/reset.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="libs/form/public/css/zebra_form.css">

        <link href='http://fonts.googleapis.com/css?family=Fauna+One' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
        <script src="js/lib/jquery-1.9.0.min.js" type="text/javascript"></script>
        <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
        <script src="js/jquery.index.js" type="text/javascript"></script>
    </head>    

    <body>

        <?php 
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

            // Resume
            $form->add('label', 'label_fileResume', 'fileResume', 'Upload Resume');
            $obj = $form->add('file', 'fileResume');
            $obj->set_rule(array(
                'required'  =>  array('error', 'PDFs are the best formats for your resumes.'),
                'upload'    =>  array('tmp', ZEBRA_FORM_UPLOAD_RANDOM_NAMES, 'error', 'Could not upload file!<br>Check that the "tmp" folder exists inside the "examples" folder and that it is writable'),
                'filetype'  =>  array('pdf', 'error', 'File must be a PDF document.'),
                'filesize'  =>  array(102400, 'error', 'File size must not exceed 100Kb!'),
            ));

            // attach a note
            $form->add('note', 'note_file', 'file', 'File must have the .pdf extension and no more than 100Kb.');

            // Cover Letter
            $form->add('label', 'label_coverLetter', 'coverLetter', 'Cover Letter');
            $obj = $form->add('textarea', 'coverLetter');
            $obj->set_rule(array(
                'required'  => array('error', 'Cover Letter is required.'),
                'length'    => array(500, 0, 'error', 'Minimum length is 500 characters!', true),
            ));

            // Submit button
            $form->add('submit', 'btnsubmit', 'Submit');

            // Validate the form
            if ($form->validate()) {
                /*
                $mail = new PHPMailer;

                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'user@example.com';                 // SMTP username
                $mail->Password = 'secret';                           // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

                $mail->From = 'from@example.com';
                $mail->FromName = 'Mailer';
                $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
                $mail->addAddress('ellen@example.com');               // Name is optional
                $mail->addReplyTo('info@example.com', 'Information');

                $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
                $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                $mail->isHTML(true);                                  // Set email format to HTML

                $mail->Subject = 'Resume Submission';
                $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                if(!$mail->send()) {
                    echo 'Message could not be sent.';
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                    echo 'Message has been sent';
                }
                */
            } else
                $form->render('templates/submitResume.php');

        ?>

    </body>

</html>
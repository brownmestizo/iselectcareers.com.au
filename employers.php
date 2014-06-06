<?php
    /* iselectcareers.com.au */
    /* May 16, 2014 */
    /* brownmestizo@gmail.com */

    //error_reporting(E_ERROR | E_PARSE);
    ini_set('display_errors', 1);
    require 'libs/form/Zebra_Form.php';
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
	
	// Company
    $form->add('label', 'label_company', 'company', 'Company');
    $obj = $form->add('text', 'company');
    $obj->set_rule(array('required' => array('error', 'Company is required.')));
	
	// Position
    $form->add('label', 'label_position', 'position', 'Position title');
    $obj = $form->add('text', 'position');
    $obj->set_rule(array('required' => array('error', 'Position is required.')));

	// Salary
    $form->add('label', 'label_salary', 'salary', 'Salary details');
    $obj = $form->add('text', 'salary');
    $obj->set_rule(array('required' => array('error', 'Salary is required.')));


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


    // Full time or Part time
    $form->add('label', 'label_fullpart', 'requireAssistanceJobSearch', 'Full time or Part time?');
    $obj = $form->add('select', 'requireAssistanceJobSearch', '', '');
    $obj->add_options($submitResumeForm->yesNo);
    $obj->set_rule(array(
        'required' => array('error', 'State is required.')
    ));  

    // Job Spec upload
    $form->add('label', 'label_fileResume', 'fileResume', 'Upload Job Spec File');
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
        'length'    => array(1, 0, 'error', 'Minimum length is 500 characters!', true),
    ));

    // Submit button
    $form->add('submit', 'btnsubmit', 'Submit');

    // Validate the form
    if ($form->validate()) $submitResumeForm->sendFormToEmail($_POST, 'submitResume', $form->file_upload['fileResume']);
    else $form->render('templates/employers.php');

    ?>

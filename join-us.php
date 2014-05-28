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

    // Mobile Number
    $form->add('label', 'label_mobileNumber', 'mobileNumber', 'Mobile Number');
    $obj = $form->add('text', 'mobileNumber','', array('data-prefix' => '(+61)'));
    $obj->set_rule(array(
        'required'  => array('error', 'Contact number is required.'),
        'length'    => array(8, 10, 'error', 'Must contain between 8 and 10 digits!'),
        'digits'    => array('', 'error', 'Should only include numbers and no special characters.')
    ));
    $form->add('note', 'note_mobileNumber', 'mobileNumber', 'Accepts only numbers and no special characters.');

    // State
    $form->add('label', 'label_state', 'state', 'State');
    $obj = $form->add('select', 'state', '', '');
    $obj->add_options($submitResumeForm->state);
    $obj->set_rule(array(
        'required' => array('error', 'State is required.')
    ));

    // Do you require assistance with your job searching?
    $form->add('label', 'label_requireAssistanceJobSearch', 'requireAssistanceJobSearch', 'Do you require assistance with your job searching?');
    $obj = $form->add('select', 'requireAssistanceJobSearch', '', '');
    $obj->add_options($submitResumeForm->yesNo);
    $obj->set_rule(array(
        'required' => array('error', 'State is required.')
    ));    

    // Your reason for wanting to undertake additional study
    $form->add('label', 'label_reasonUndertakeStudy', 'reasonUndertakeStudy', 'Your reason for wanting to undertake additional study');
    $obj = $form->add('textarea', 'reasonUndertakeStudy');
    $obj->set_rule(array(
        'required'  => array('error', 'Your reason to undertake study is needed.'),        
        'length'    => array(50, 0, 'error', 'Minimum length is 50 characters!', true),
    ));

    // The type of job you would like to obtain after completing your studies
    $form->add('label', 'label_typeOfJob', 'typeOfJob', 'The type of job you would like to obtain after completing your studies');
    $obj = $form->add('textarea', 'typeOfJob');
    $obj->set_rule(array(
        'required'  => array('error', 'The type of job you like to obtain after your studies is needed.'),        
        'length'    => array(50, 0, 'error', 'Minimum length is 50 characters!', true),
    ));    

    // Course/s you are interested in 
    $form->add('label', 'label_coursesInterestedIn', 'coursesInterestedIn', 'Course/s you are interested in ');
    $obj = $form->add('textarea', 'coursesInterestedIn');
    $obj->set_rule(array(
        'required'  => array('error', 'Your list of interested courses is needed.'),        
        'length'    => array(50, 0, 'error', 'Minimum length is 50 characters!', true),
    ));        

    // Preferred mode of delivery
    $form->add('label', 'label_delivery', 'delivery', 'Preferred mode of delivery');
    $obj = $form->add('select', 'delivery', '', '');
    $obj->add_options($submitResumeForm->delivery);
    $obj->set_rule(array(
        'required' => array('error', 'Preferred mode of delivery is required.')
    ));

    // Submit button
    $form->add('submit', 'btnsubmit', 'Submit');

    // Validate the form
    if ($form->validate()) {
    } else
        $form->render('templates/joinUs.php');

    ?>        

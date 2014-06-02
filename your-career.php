<?php
    /* iselectcareers.com.au */
    /* May 27, 2014 */
    /* brownmestizo@gmail.com */

    error_reporting(E_ERROR | E_PARSE);
    //ini_set('display_errors', 1);
    require 'libs/form/Zebra_Form.php';
    require 'model/iselect_modelForm.php';

    // instantiate two objects
    $form = new Zebra_Form('form');
    $submitResumeForm = new iselectForm();
    $tenQuestions = new yourCareerFormQuestions();

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

    // Mobile Number
    $form->add('label', 'label_contactNumber', 'contactNumber', 'Mobile Number');
    $obj = $form->add('text', 'contactNumber','', array('data-prefix' => '(+61)'));
    $obj->set_rule(array(
        'required'  => array('error', 'Contact number is required.'),
        'length'    => array(8, 10, 'error', 'Must contain between 8 and 10 digits!'),
        'digits'    => array('', 'error', 'Should only include numbers and no special characters.')
    ));
    $form->add('note', 'note_contactNumber', 'contactNumber', 'Accepts only numbers and no special characters.');

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
        'required' => array('error', 'Do you require assistance with your job searching?')
    ));

    // Self Assesssment Questions

    $i = 1;
    while ($i<4) {
        $form->add('label', 'label_question'.$i, 'question'.$i, $tenQuestions->questions[$i]);
        $obj = $form->add('text', 'question'.$i);
        $obj->set_rule(array('required' => array('error', $tenQuestions->questions[$i].' is required.')));
        $i++;
    }

    $form->add('label', 'label_question4', 'question4', $tenQuestions->questions[4]);
    $obj = $form->add('radios', 'question4', $submitResumeForm->yesNo);
    $obj->set_rule(array(
        'required' => array('error', $tenQuestions->questions[4].' is required.')
    ));

    $form->add('label', 'label_question5', 'question5', $tenQuestions->questions[5]);
    $obj = $form->add('radios', 'question5', $submitResumeForm->yesNo);
    $obj->set_rule(array(
        'required' => array('error', $tenQuestions->questions[5].' is required.')
    ));


        $form->add('label', 'label_question6', 'question6', $tenQuestions->questions[6]);
        $obj = $form->add('textarea', 'question6');
        $obj->set_rule(array('required' => array('error', $tenQuestions->questions[6].' is required.')));
        $obj->set_rule(array(
            'dependencies'   =>  array(array(
               'question5' => '1',
            ), 'mycallback, 1'),
        ));


        $form->add('label', 'label_question7', 'question7', $tenQuestions->questions[7]);
        $obj = $form->add('radios', 'question7', $submitResumeForm->yesNo);
        $obj->set_rule(array(
            'required' => array('error', $tenQuestions->questions[7].' is required.'),
            'dependencies'   =>  array(array(
               'question5' => '2',
            ), 'mycallback, 2'),
        ));

    $form->add('label', 'label_australianWorkPermitVisa', 'australianWorkPermitVisa', 'Do you have Australian work permit visa?');
    $obj = $form->add('radios', 'australianWorkPermitVisa', $submitResumeForm->yesNo);
    $obj->set_rule(array(
        'required' => array('error', 'Do you have Australian work visa?')
    ));

        // What type of visa did you enter Australia with?
        $form->add('label', 'label_typeOfVisa', 'typeOfVisa', 'What type of visa did you enter Australia with?');
        $obj = $form->add('text', 'typeOfVisa');
        $obj->set_rule(array('required' => array('error', 'What type of visa did you enter Australia with?')));
        $obj->set_rule(array(
            'dependencies'   =>  array(array(
               'australianWorkPermitVisa' => '1',
            ), 'mycallback, 3'),
        ));        

        // How long have you been in Australia?
        $form->add('label', 'label_lengthOfBeingInAus', 'lengthOfBeingInAus', 'How long have you been in Australia?');
        $obj = $form->add('text', 'lengthOfBeingInAus');
        $obj->set_rule(array('required' => array('error', 'How long have you been in Australia?')));
        $obj->set_rule(array(
            'dependencies'   =>  array(array(
               'australianWorkPermitVisa' => '1',
            ), 'mycallback, 3'),
        ));        

        // Estimated length of stay in Australia?
        $form->add('label', 'label_lengthOfStayinAus', 'lengthOfStayinAus', 'Estimated length of stay in Australia?');
        $obj = $form->add('text', 'lengthOfStayinAus');
        $obj->set_rule(array('required' => array('error', 'Estimated length of stay in Australia?')));
        $obj->set_rule(array(
            'dependencies'   =>  array(array(
               'australianWorkPermitVisa' => '1',
            ), 'mycallback, 3'),
        ));        


    // Submit button
    $form->add('submit', 'btnsubmit', 'Submit');

    // Validate the form
    if ($form->validate()) $submitResumeForm->sendFormToEmail($_POST, 'yourCareer');
    else $form->render('templates/yourCareer.php');

    ?>

<html>
    <head>
        <title>Your Career with iSelect Careers</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link href="css/reset.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="libs/form/public/css/zebra_form.css">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>

        <link href='http://fonts.googleapis.com/css?family=Fauna+One' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
        <script src="js/lib/jquery-1.9.0.min.js" type="text/javascript"></script>
        <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
        <script src="js/jquery.index.js" type="text/javascript"></script>
        <script src="libs/form/public/javascript/zebra_form.js" type="text/javascript"></script>
        <script src="js/jquery.form.js" type="text/javascript"></script>
    </head>

    <body>

        <div id="menu">
            <a href="index.html"><img src="images/iselect-logo.png" width="186" height="112" alt=""/></a>
                <ul>
                    <li class="one"><a href="index.html">Our Expertise</a></li>
                    <li class="two"><a href="join-us.php">Join Us </a></li>
                    <li class="three"><a href="our-training.php">Our Training</a></li>
                    <li class="four"><a href="your-career.php">Your Career</a></li>
                    <li class="two"><a href="contact-us.php">Contact Us</a></li>
                </ul>
        </div>

        <div class="content_left">
          <p class="button_purple five"><a href="http://avli.com.au/ist">Apply now</a></p>
            <p class="button_green one"><a href="submit-resume.php">Submit resume</a></p>
            <p class="button_green two"><a href="job-alerts.html">Job alerts</a></p>
            <p class="button_green four"><a href="job-board.html">Job board</a></p>
            <p><img src="images/search.png" align="left" /></p>
        </div>


        <div class="content_wrap contact">
            <div class="content_middle">
                <h1>Your Career</h1>
                <h2>Unlock your career potential and land the job you've been searching for!</h2>
                <h3><strong>Which of these common career challenges are you facing right now?</strong></h3>
                <ul>
                  <li>Are you using the scattergun approach and getting only a few responses  for a job interview? </li>
                  <li>Are you experiencing countless rejections or no responses to your online  job applications? </li>
                  <li>Do you lack the required qualifications? </li>
                  <li>Is your resume and cover letters letting you down? </li>
                  <li>Do you lack the time and resources to understand how the local job  market operates? </li>
                </ul>
                <h3>How we help?</h3>
                <p>We give you access to proven strategies by working in partnership with  our Career Coaches to assist you by putting you on top of the competition to  achieve your desired career goals. Everyone has different needs and time  constraint so we are very flexible in our approach and can provide you with  full solutions or targeted career plan for your specific requirements.</p>
                <p>As our strategies are very personalised we have to limit the  numbers of people that the Career Coaches work with. </p>

                <h3>Free online career self-assessment</h3>

                <?php
                    echo (isset($zf_error) ? $zf_error : (isset($error) ? $error : ''));
                ?>

                    <div class="row">
                        <div class="cell"><?php echo $label_firstName . $firstName?></div>
                        <div class="cell"><?php echo $label_lastName . $lastName?></div>
                    </div>

                    <div class="row even">
                        <div class="cell"><?php echo $label_emailAddress . $emailAddress . $note_emailAddress; ?></div>
                    </div>

                    <div class="row">
                        <div class="cell"><?php echo $label_contactNumber . $contactNumber . $note_contactNumber; ?></div>
                    </div>

                    <div class="row even">
                        <div class="cell"><?php echo $label_state . $state; ?></div>
                    </div>

                    <div class="row even">
                        <div class="cell"><?php echo $label_requireAssistanceJobSearch . $requireAssistanceJobSearch; ?></div>
                    </div>                    

                    <h3>Self-assessment questions</h3>

                    <div class="row">
                        <div class="cell"><?php echo $label_question1 . $question1; ?></div>
                    </div>

                    <div class="row even">
                        <div class="cell"><?php echo $label_question2 . $question2; ?></div>
                    </div>

                    <div class="row">
                        <div class="cell"><?php echo $label_question3 . $question3; ?></div>
                    </div>

                    <div class="row even">
                        <div class="cell">
                            <div class="cell"><?php echo $label_question4; ?></div>

                            <div class="cell"><?php echo $question4_1; ?></div>
                            <div class="cell"><?php echo $label_question4_1; ?></div>

                            <div class="cell"><?php echo $question4_2; ?></div>
                            <div class="cell"><?php echo $label_question4_2; ?></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell">
                            <div class="cell"><?php echo $label_question5; ?></div>
                            <div class="clear"></div>

                            <div class="cell"><?php echo $question5_1; ?></div>
                            <div class="cell"><?php echo $label_question5_1; ?></div>

                            <div class="cell"><?php echo $question5_2; ?></div>
                            <div class="cell"><?php echo $label_question5_2; ?></div>
                        </div>

                    </div>

                    <div class="row even optional optional1">
                        <div class="cell"><?php echo $label_question6 . $question6; ?></div>
                    </div>

                    <div class="row even optional optional2">
                        <div class="cell"><?php echo $label_question7; ?></div>

                        <div class="cell"><?php echo $question7_1; ?></div>
                        <div class="cell"><?php echo $label_question7_1; ?></div>

                        <div class="cell"><?php echo $question7_2; ?></div>
                        <div class="cell"><?php echo $label_question7_2; ?></div>
                    </div>

                    <h3>International Career Searchers only</h3>

                    <div class="row">
                        <div class="cell"><?php echo $label_australianWorkPermitVisa; ?></div>
                        <div class="clear"></div>

                        <div class="cell"><?php echo $australianWorkPermitVisa_1; ?></div>
                        <div class="cell"><?php echo $label_australianWorkPermitVisa_1; ?></div>

                        <div class="cell"><?php echo $australianWorkPermitVisa_2; ?></div>
                        <div class="cell"><?php echo $label_australianWorkPermitVisa_2; ?></div>                        
                    </div>

                    <div class="row even optional optional3">
                        <div class="cell"><?php echo $label_typeOfVisa . $typeOfVisa; ?></div>
                        <div class="clear"></div>
                        <div class="cell"><?php echo $label_lengthOfBeingInAus . $lengthOfBeingInAus; ?></div>
                        <div class="clear"></div>
                        <div class="cell"><?php echo $label_lengthOfStayinAus . $lengthOfStayinAus; ?></div>
                    </div>


                    <!-- the submit button goes in the last row; also, notice the "last" class which
                    removes the bottom border which is otherwise present for any row -->
                    <div class="row last"><?php echo $btnsubmit?></div>
            </div>


            <div class="content_right">
              <p>iSelectCareers Will Help You Find Your Dream Job
            </div>
        </div>


        <div class="clear"></div>


        <div class="footer">
            <p align="center">Copyright 2014 iSelectCareers</p>
        </div>

    </body>
</html>
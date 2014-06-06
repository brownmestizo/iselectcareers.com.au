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
    <div id="bodywrap">

        <div id="menu">
            <a href="index.html"><img src="images/iselect-logo.png"  alt="iSelectCareers"/></a>
                <ul>
    <li class="one"><a href="our-expertise.html">Our Expertise</a></li>
    <li class="two"><a href="join-us.php">Our Assistance</a></li>
    <li class="three"><a href="our-training.php">Our Training</a></li>
    <li class="four"><a href="your-career.php">Your Career</a></li>
    <li class="five"><a href="contact-us.php">Contact Us</a></li>
                </ul>
        </div>

        <div class="content_left">
 	<p class="button_green but1"><a href="job-board.html">Job board</a></p>
    <p class="button_green but2"><a href="submit-resume.php">Submit resume</a></p>
    <p class="button_green but_highlight"><a href="http://avli.com.au/ist">Apply now</a></p>
    <p class="button_green but2"><a href="employers.php">Employers</a></p>
    <p class="button_green but3"><a href="financial-assistance.html">Financial assistance</a></p>
    <p class="button_green but1"><a href="job-alerts.html">Job alerts</a></p>
            <p><img src="images/search.png" align="left" /></p>
        </div>


        <div class="content_wrap career">
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
                <p>We  are a leading education and employment organisation dedicated to bringing out  the best in people. We believe the way to a better life is through  self-improvement and learning. Our goal is to help you achieve yours.</p>
                <p>Our  Career Choaches will be with you every step of the way. </p>
                <p>They'll  identify the right course for you and help you find the best career  opportunities possible. </p>
                <p>They  will do everything from helping create an impressive CV to working with you on  successful interview techniques. Then our Career Chasers will chase the jobs  that will allow you to shine in the area you're passionate about, set yourself  apart from the competition and build a successful career.</p>
                <p>With  have years of experience in the education sector and our extensive knowledge  and contacts in the job market. We have many companies that train their staff  with us, that also come to us to advertise their</p>
                <p>jobs  through our student database, we are the link between students, education  providers and employers. </p>
              <p>Companies  know that students enrolled in our courses are going to be focused and  proactive in their employment. As our strategies are very personalised we have  to limit the numbers of people that the Career Coaches work with. </p>
              <h2>Free online career self-assessment</h2>

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

                    <div class="row ">
                        <div class="cell"><?php echo $label_requireAssistanceJobSearch . $requireAssistanceJobSearch; ?></div>
                    </div>                    

                    <h3>Self-assessment questions</h3>

                    <div class="row even">
                        <div class="cell"><?php echo $label_question1 . $question1; ?></div>
                    </div>

                    <div class="row ">
                        <div class="cell"><?php echo $label_question2 . $question2; ?></div>
                    </div>

                    <div class="row even">
                        <div class="cell"><?php echo $label_question3 . $question3; ?></div>
                    </div>

                    <div class="row">
                        <div class="cell">
                            <div class="cell"><?php echo $label_question4; ?></div>

                            <div class="cell"><?php echo $question4_1; ?></div>
                            <div class="cell"><?php echo $label_question4_1; ?></div>

                            <div class="cell"><?php echo $question4_2; ?></div>
                            <div class="cell"><?php echo $label_question4_2; ?></div>
                        </div>
                    </div>

                    <div class="row even">
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
        </div>
</div>

        <div class="clear"></div>

</div>
        <div class="footer">
            <p align="center">Copyright 2014 iSelectCareers</p>
        </div>

    </body>
</html>
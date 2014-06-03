<html>
    <head>
        <title>Join us - iSelect Careers</title>
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

        <div id="menu">
            <a href="index.html"><img src="images/iselect-logo.png" width="186" height="112" alt=""/></a>
                <ul>
                    <li class="one"><a href="our-expertise.html">Our Expertise</a></li>
                    <li class="two"><a href="join-us.php">Join Us </a></li>
                    <li class="three"><a href="our-training.php">Our Training</a></li>
                    <li class="four"><a href="your-career.php">Your Career</a></li>
                    <li class="two"><a href="contact-us.php">Contact Us</a></li>
                </ul>
        </div>

        <div class="content_left">
  <p class="button_purple but_highlight"><a href="http://avli.com.au/ist">Apply now</a></p>
  <p class="button_green but1"><a href="submit-resume.php">Submit resume</a></p>
  <p class="button_green but3"><a href="job-alerts.html">Job alerts</a></p>
  <p class="button_green but2"><a href="job-board.html">Job board</a></p>
            <p><img src="images/search.png" align="left" /></p>
        </div>


        <div class="content_wrap join">
            <div class="content_middle">
                <h1>Join us</h1>
                <h2>How we help?</h2>
                <p>We give you access to proven strategies by working in partnership with our Career Coaches to assist you by putting you on top of the competition to achieve your desired career goals. Everyone has different needs and time constraint so we are very flexible in our approach and can provide you with full solutions or targeted career plan for your specific requirements.</p>
                <p>As our strategies are very personalised we have to limit the numbers of people that the Career Coaches work with.  </p>
                <p>Please complete the following form:</p>

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
                        <div class="cell"><?php echo $label_mobileNumber . $mobileNumber . $note_mobileNumber; ?></div>
                    </div>

                    <div class="row even">    
                        <div class="cell"><?php echo $label_state . $state; ?></div>
                    </div>

                    <div class="row">    
                        <div class="cell"><?php echo $label_requireAssistanceJobSearch . $requireAssistanceJobSearch; ?></div>
                    </div>

                    <div class="row even">    
                        <div class="cell"><?php echo $label_reasonUndertakeStudy . $reasonUndertakeStudy; ?></div>
                    </div>

                    <div class="row">    
                        <div class="cell"><?php echo $label_typeOfJob . $typeOfJob; ?></div>
                    </div>

                    <div class="row even">    
                        <div class="cell"><?php echo $label_coursesInterestedIn . $coursesInterestedIn; ?></div>
                    </div>

                    <div class="row">    
                        <div class="cell"><?php echo $label_delivery . $delivery; ?></div>
                    </div>                    

                    <!-- the submit button goes in the last row; also, notice the "last" class which
                    removes the bottom border which is otherwise present for any row -->
                    <div class="row last"><?php echo $btnsubmit?></div>
            </div>
        </div>


        <div class="clear"></div>


        <div class="footer">
            <p align="center">Copyright 2014 iSelectCareers</p>
        </div>

    </body>
</html>
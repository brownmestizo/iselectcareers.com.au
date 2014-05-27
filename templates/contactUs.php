<html>
    <head>
        <title>iSelect Careers</title>
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
                    <li class="one"><a href="index.html">Our Expertise</a></li>
                    <li class="two"><a href="join-us.html">Join Us </a></li>
                    <li class="three"><a href="our-training.php">Our Training</a></li>
                    <li class="four"><a href="your-career.html">Your Career</a></li>
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
                <h1>iSelectCareers</h1>
         		<h2>Contact Us</h2>

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

                    <div class="row">    
                        <div class="cell"><?php echo $label_message . $message; ?></div>
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
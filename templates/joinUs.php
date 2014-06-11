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
<div id="bodywrap">
  <div id="menu"> <a href="index.html"><img src="images/iselect-logo.png"  alt="iSelectCareers"/></a>
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
    <p class="button_green but_highlight"><a href="http://avli.com.au/isc">Apply now</a></p>
    <p class="button_green but2"><a href="employers.php">Employers</a></p>
    <p class="button_green but3"><a href="financial-assistance.html">Financial assistance</a></p>
    <p class="button_green but1"><a href="job-alerts.html">Job alerts</a></p>
  </div>
  <div class="content_wrap join">
    <div class="content_middle">
      <h1>Our assistance</h1>
      <h2>How we help?</h2>
      <p>We  give you access to proven strategies by working in partnership with our Career  Coaches to assist you by putting you on top of the competition to achieve your  desired career goals.      </p>
      <p>Our  iSelect Career Coaches offer  guidance and suggestions on moving forward  with your career and employment.  This is  a free service to assist individuals to update resumes, cover letters,  interview techniques and up skilling Australians.      </p>
      <p>We do  this by gaining an understanding of where your skills lie, delivering the  education to fill skill-gaps, and by providing career guidance and job  placement support.      </p>
      <p>The  current job market is competitive and many employers ( even within lower level  jobs available) are requesting qualifications as a pre-requisite, so an areas  we focus on is funded qualifications with no money outlay, so you can add a  qualification to your resume instantly.       </p>
      <p>If  you're looking to take the next step in your career or to find employment,  furthering your education utilising our  career guidance and job placement support is a great opportunity.      </p>
      <p>When  it comes to gainign qualifications, updating resumes and  job placement, your iSelect Career Coach is here is to get you success!</p>
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
</div>
<div class="footer">
  <p align="center">Copyright 2014 iSelectCareers</p>
</div>

</body>
</html>
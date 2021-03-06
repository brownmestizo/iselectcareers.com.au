<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>iSelect Careers</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Slide Down Box Menu with jQuery and CSS3" />
<meta name="keywords" content="jquery, css3, sliding, box, menu, cube, navigation, portfolio, thumbnails"/>
<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
<link href='http://fonts.googleapis.com/css?family=Fauna+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <script src="js/lib/jquery-1.9.0.min.js" type="text/javascript"></script>
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
	<script src="js/jquery.index.js" type="text/javascript"></script>
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
    <p class="button_green but_highlight"><a href="http://avli.com.au/isc">Apply now</a></p>
    <p class="button_green but2"><a href="employers.php">Employers</a></p>
    <p class="button_green but3"><a href="financial-assistance.html">Financial assistance</a></p>
    <p class="button_green but1"><a href="job-alerts.html">Job alerts</a></p>
  <p><img src="images/search.png" align="left" /></p>
</div>
<div class="content_wrap thanks">
<div class="content_middle">
  <?php echo (isset($zf_error) ? $zf_error : (isset($error) ? $error : '')); ?>
       <h1>iSelectCareers</h1>
    <p>&nbsp;</p>
    <h3>Thank you for contacting us. </h3>
    <p>You will receive a confirmation of receipt via email.</p>
</div>
</div>
</div>
<div class="clear"></div>
<div class="footer">
  <p align="center">Copyright 2014 iSelectCareers</p></div>
</body>
</html>
<body>

    <div id="menu">
        <a href="index.html"><img src="images/iselect-logo.png" width="186" height="112" alt=""/></a>
            <ul>
                <li class="one"><a href="index.html">Our Expertise</a></li>
                <li class="two"><a href="join-us.html">Join Us </a></li>
                <li class="three"><a href="our-training.html">Our Training</a></li>
                <li class="four"><a href="your-career.html">Your Career</a></li>
                <li class="two"><a href="contact-us.html">Contact Us</a></li>
            </ul>
    </div>

    <div class="content_left">
        <p class="button_green one"><a href="submit-resume.html">Submit resume</a></p>
        <p class="button_green two">Job alerts</p>
        <p class="button_green four">Job board</p>
      <p><img src="images/search.png" align="left" /></p>
    </div>


    <div class="content_wrap resume">
        <div class="content_middle">

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



    <script type="text/javascript"> 
    (function(d,t) { 
    var script = d.createElement(t); script.id = 'la_x2s6df8d'; script.async = true; 
    script.src = '//trainer.aot.edu.au/scripts/track.js'; 
    var image = d.createElement('img'); script.async = true; 
    image.src = '//trainer.aot.edu.au/scripts/pix.gif'; 
    image.style.position = 'absolute'; 
    script.onload = script.onreadystatechange = function() { 
    var rs = this.readyState; if (rs && (rs != 'complete') && (rs != 'loaded')) return; 
    LiveAgentTracker.createButton('b12d72f7', this); 
    }; 
    var placeholder = document.getElementById('laPlaceholder'); 
    placeholder.parentNode.insertBefore(script, placeholder); 
    placeholder.parentNode.insertBefore(image, placeholder); 
    placeholder.parentNode.removeChild(placeholder); 
    })(document, 'script'); 
    </script>

</body>

<!DOCTYPE html>
<html>
<head>
	<title>Cornell Eastern Music Ensemble</title>
 <link rel="stylesheet" type="text/css" href="styles/main.css" />
	<!-- <link rel="stylesheet" type="text/css" href="styles/mobile.css" media="only screen and (max-width: 1000px)"/> -->
     <link rel="stylesheet" type="text/css" href="styles/formembers.css" media="only screen and (min-width: 999px)"/>
     <link rel="stylesheet" type="text/css" href="styles/formembersmobile.css" media="only screen and (max-width: 1000px)"/>

    <link rel="stylesheet" type="text/css" href="styles/secondnavbar.css" />
    <link rel="stylesheet" type="text/css" href="styles/formembers.css" />

</head>
<body>
   <?php
include 'header.php';
?>
<div id="banner">
<div id="message">
<div id="messagehead">For Prospective Members</div>
<p id="messagecontent">Cornell Eastern Music Ensemble is always looking for new members to make our ensemble more diverse, versatile, and complete. At the beginning of every school year, we hold an audition to find our potential match. Intesrested? <a href="#applicationform">Click here to sign up</a></p>
</div>
    </div>

<div class="content">
    <div class="divwrapper">
        <div class="secondnavbar">
            <ul class="navlist">
                <li><a href="#auditioninfo">AUDITION INFO</a></li>
                <li><a href="#applicationform">APPLY NOW</a></li>
            </ul>
         </div>
    </div>
	<div class="divwrapper">
    	<div class="subpagecontent">
            <div id="auditioninfo">
            <h3>Audition Information</h3>
            <p>Auditions will be held for those interested in joining CEME. We welcome most levels of musicianship, although we do prefer prospective members to have basic proficiency in their instrument of choice. Please fill out the application form below, and we will get back to you shortly. Members of CEME are expected to commit to a 2-3 hour rehersal every Sunday, with additional dress rehearsals as needed to prepare for performances. For more information, please  <a href="contact.php">contact us</a> by email.
            
            </p>
            </div>
        	<div id="applicationform">
            <h3>Application Form</h3>
            
         <div id="form1">
  <form name="signup" action="formembers.php"  method="POST" >
    First Name<br><input type="text" name="firstname" required><br>
    Last Name<br><input type="text" name="lastname" required><br>
    Email<br><input type="text" name="email" required><br>
    Where are you from?<br><input type="text" name="place" required><br>
    Graduation Year<br><input type="text" name="year" required><br>
    Major/Area of Study<br><input type="text" name="major" required><br>
    List any instrument you play!<br><textarea id="instrument" name="instrument"> </textarea><br>
    How did you hear about CEME?<br><textarea id="hear" name="hear"> </textarea><br>
    Questions or comments?<br><textarea id="question" name="question"> </textarea><br>
    
   <input type="submit" value="Submit" />
  </form>
  </div>
  <?php include 'appemail.php';
  ?>
              
            </div>
          	
        
        </div>
   </div>
        
         
        
</div>


<?php
include 'footer.php';
?>
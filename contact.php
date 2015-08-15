<!DOCTYPE html>
<html>
<head>
	<title>Cornell Eastern Music Ensemble</title>
     <link rel="stylesheet" type="text/css" href="styles/main.css" media="only screen and (min-width: 999px)"/>
	<link rel="stylesheet" type="text/css" href="styles/mobile.css" media="only screen and (max-width: 1000px)"/>
     <link rel="stylesheet" type="text/css" href="styles/contact.css" media="only screen and (min-width: 999px)"/>
	<link rel="stylesheet" type="text/css" href="styles/contactmobile.css" media="only screen and (max-width: 1000px)"/>
    <link rel="stylesheet" type="text/css" href="styles/secondnavbar.css" />
	
</head>
<body>
 <?php
include 'header.php';
?>
<div id="banner">
<div id="message">
<div id="messagehead">Contact Us</div>
<p id="messagecontent">Please feel free to contact us. We promise to respond to any of your inquiries. For urgent matters, please email us directly using our email address listed below.</p>
</div>
    </div>
<div class="content">
    <div class="divwrapper">
        <div class="secondnavbar">
            <ul class="navlist">
                <li><a href="#contactinfo">CONTACT INFO</a></li>
                <li><a href="#generalform">GENERAL INQUIRY</a></li>
            </ul>
         </div>
    </div>
	<div class="divwrapper">
    	<div class="subpagecontent">
            <div id="contactinfo">
            <h3>Contact Information</h3>
            <p>Send us any questions or comments you may have at contact.ceme1@gmail.com or simply fill out and submit the general inquiry form below. Please be sure to provide your name and a valid email adress, so that we can contact you back in a timely manner.</p>
            </div>
        	<div id="generalform">
            <h3>General Inquiry Form</h3>
              <div id="form2">
  <form name="signup" action="contact.php"  method="POST" >
    Name<br><input type="text" name="name" maxlength="30" required><br>
    Email<br><input type="email" name="email" maxlength="30" required><br>
    Subject<br><input type="text" id="subject" name="subject" maxlength="100" required><br>
    Message<br><textarea id="messages" name="message" maxlength="3000"> </textarea><br>
   <input type="submit" value="Submit" />
  </form>
  </div>
  
  <?php
  
  if (isset($_POST['name'])){
  $name = strip_tags($_POST['name']);
  
  $email = strip_tags($_POST['email']);
  $subject = strip_tags($_POST['subject']);
  $message = strip_tags($_POST['message']) . "\n" . "From: " . $name ;
  $to = 'yw428@cornell.edu';
  $headers = "From: " . strip_tags($_POST['email']) . "\n";
  
  echo mail('yitingwang0117@hotmail.com','Testing','hhh','From: yitingwang0117@hotmail.com');
  
  echo "<p>Thank you for contacting us. We will respond to your message shortly.<p>"; 
  }

?>
            </div>
          	
        
        </div>
   </div>
        
         
        
</div>


    <?php
include 'footer.php';
?>
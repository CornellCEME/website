<?php
  
  if (isset($_POST['name'])){
  $name = strip_tags($_POST['name']);
  
  $email = strip_tags($_POST['email']);
  $subject = strip_tags($_POST['subject']);
  $message = strip_tags($_POST['message']) . "\r\n" . "From: " . $name ;
  $to = 'yw428@cornell.edu';
  $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
  
  mail($to,$subject,$message,$headers);
  
  echo "<p>Thank you for contacting us. We will respond to your message shortly.<p>"; 
  }


?>
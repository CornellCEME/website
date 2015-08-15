<?php
  
  if (isset($_POST['firstname'])){
  $firstname = strip_tags($_POST['firstname']);
  $lastname = strip_tags($_POST['lastname']);
  $email = strip_tags($_POST['email']);
  $place = strip_tags($_POST['place']);
  $year = strip_tags($_POST['year']);
  $major = strip_tags($_POST['major']);
  $instrument = strip_tags($_POST['instrument']);
  $hear = strip_tags($_POST['hear']);
  $question = strip_tags($_POST['question']);
  
  $subject = "Application from" . $firstname ." " . $lastname ;
  $message = 
  "Name: ". $firstname ." " . $lastname  ."\r\n" 
  ."Email: " .$email ."\r\n"
  ."From: " .$place ."\r\n"
  ."Year: " .$year ."\r\n"
  ."Major: " .$major ."\r\n"
  ."Instrument: " .$instrument ."\r\n"
  ."Where did you hear about us: " .$hear ."\r\n"
  ."Questions or comments: " .$question;
  
  $to = 'contact.ceme1@gmail.com';
  $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
  
  mail($to,$subject,$message,$headers);
  
  echo "<p>Thank you for submitting your application. You will hear back from us shortly.<p>"; 
  }


?>
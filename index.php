<!DOCTYPE html>
<html>
<head>
	<title>Cornell Eastern Music Ensemble</title>
  	<link rel="stylesheet" type="text/css" href="styles/main2.css" media="only screen and (min-width: 50px)"/>
    <link rel="stylesheet" type="text/css" href="styles/indexx.css" media="only screen and (min-width: 50px)"/>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script src="bxslider/jquery.bxslider.min.js"></script>
		<link href="bxslider/jquery.bxslider.css" rel="stylesheet" />

		<script type="text/javascript">
			$(document).ready(function(){
		  	$('.bxslider').bxSlider();
			});
		</script>

</head>
<body>

	<?php
		include 'header.php';
	?>

	<div id="banner">
		<ul class="bxslider">
	    <li><img src="images/bannerpic1.png" alt="img"/></li>
	    <li><img src="images/bannerpic2.png" alt="img"/></li>
	    <li><img src="images/bannerpic3.2.png" alt="img"/></li>
		</ul>
	</div>
	<div id="message">
		<div id="messagehead"; style="">CORNELL EASTERN MUSIC ENSEMBLE</div>
	</div>

	<div class="content">
    <div class="subpagecontent">
	    <h2 id="upcoming">Upcoming</h2>
			<img src="images/Talent Wanted!.jpg" alt="quartercard" id="image"/>
			<p>Applications for the Fall 2018 semester are open. If you love eastern music, play an instrument, and look forward to collaborating with other music lovers, join Cornell Eastern Music Ensemble (CEME)!! Instrument not listed? Email us at contact.ceme1@gmail.com and we might be able to find a spot for you on the stage.</p>
			<h2 id="previous">Previous Performances</h2>
			<h3>Spring 2018 Concert</h3>
			<p>Thank you to everyone who came to our concert! Please check out the videos and pictures in the Media Gallery or on the CEME Facebook. Also congratulations to all the graduating seniors. Thank you for being a part of CEME and good luck to all your future endeavors!</p>
			<img src="images/Spring2018 funny.jpg" alt="img" id="image"/>
		</div>
	</div>
	<?php
		include 'footer.php';
	?>

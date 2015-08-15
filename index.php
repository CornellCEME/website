<!DOCTYPE html>
<html>
<head>
	<title>Cornell Eastern Music Ensemble</title>
    <link rel="stylesheet" type="text/css" href="styles/main.css" />
	<!-- <link rel="stylesheet" type="text/css" href="styles/mobile.css" media="only screen and (max-width: 1000px)"/> -->
     <link rel="stylesheet" type="text/css" href="styles/index.css" media="only screen and (min-width: 999px)"/>
	<link rel="stylesheet" type="text/css" href="styles/indexmobile.css" media="only screen and (max-width: 1000px)"/>
    
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
include 'wall_database.php';

$is_valid_post = true;
$num = 0;


if (isset($_REQUEST['header'])){
	
//from W3Schools
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 1048576)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("images/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "images/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "images/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }
  
  $header = strip_tags($_REQUEST['header']);
  $content = strip_tags($_REQUEST['content']);
  $imgname = $_FILES["file"]["name"];
  $post_fields = array();
  $post_fields['header'] = $header;
  $post_fields['content'] = $content;
  $post_fields['imgname'] = $imgname;
  $success_flag = saveCurrentPost($post_fields);
  }
  
?>
<div id="banner">
<ul class="bxslider">

    <li><img src="images/IMG_4057.jpg" alt="img" /></li>
    <li><img src="images/IMG_4049.jpg" alt="img" /></li>
    <li><img src="images/IMG_4064.jpg" alt="img" /></li>
</ul>
</div>
<div id="message">
<div id="messagehead">CORNELL EASTERN MUSIC ENSEMBLE</div>
</div>
	<div class="content">
    <div class="subpagecontent">
    <div id="news">
    
    	<h2>News & Announcements</h2>
    <?php

//Fetching all posts from the database
$posts_array = getAllPosts();
?>

   
    <?php 
	 
    // Looping through all the posts in posts_array
	   	$arrayreversed = array_reverse($posts_array);
    $counter = 1;
	$postcount = count($arrayreversed);
	
    foreach(array_reverse($posts_array) as $post){
      $header = $post['header'];
	  $content = $post['content'];
	  $imgname = $post['imgname'];
	  $postcount --;
    
      echo '
			<div class="newscontent" id ="'.$postcount.'">
			<div class="newsimagewrapper">
			<img class="newsimage" src="images/'.$imgname.'" alt="images">
			</div>
			<div class="contentwrapper">
			<h3><span class="header">'.$header.'</span></h3>
 			<p>'.$content.'</p>
			</div>
			</div>';
    }
    
	?>
    
    </div>
      
    <div id="events">
    	<h2>Events</h2>
            <iframe src="https://www.google.com/calendar/embed?title=Cornell%20Eastern%20Music%20Ensemble&amp;showPrint=0&amp;height=600&amp;wkst=1&amp;bgcolor=%2399ffff&amp;src=contact.ceme1%40gmail.com&amp;color=%232952A3&amp;ctz=America%2FNew_York" id="googlecalendar"></iframe>
    </div>
     </div>
     </div>
 <?php
include 'footer.php';
?>
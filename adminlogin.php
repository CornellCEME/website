<!DOCTYPE html>
<html>
<head>
	<title>Cornell Eastern Music Ensemble</title>
    <link rel="stylesheet" type="text/css" href="styles/main.css" />
    <link rel="stylesheet" type="text/css" href="styles/adminlogin.css" />
</head>
<body>
  
   <?php
include 'header.php';
?>
<div id="banner">
</div>
	<div class="content">
    <div id="login">
 <form id="loginform" action="adminlogin.php" method="post">
<label>Username :</label>
<input type="text" name="username"/><br />
<label>Password :</label>
<input type="password" name="password"/><br/>
 <input type="submit" value="Submit "/><br/>
</form>
</div>


   <?php
	if (isset($_POST['username']) && isset($_POST['password']))
	{
  $username = strip_tags($_POST['username']);
  $password = strip_tags($_POST['password']);
  if ($username == "cemeforever" && $password =="CEMEFOREVER")
	{
	echo
		
		'
		<div id="createcontent">
		 <h3>Create Content</h3>
		<form id="createform" action="index.php"  method="post" enctype="multipart/form-data">
<label>Header</label><br>
<input type="text" name="header" id="header"/><br>
Image<br>
<input type="file" name="file" id="file"><br>
 Content<br><textarea id="newcontent" name="content" maxlength="3000"> </textarea>
<input type="submit" value="Submit "/>
</form>
   </div>';
	}
		
	else
	
	{
echo '<div id="createcontent">
	<p>Your username or password is incorrect. Please try again.</p>
	</div>';
	}
	}
	?>

     </div>
 <?php
include 'footer.php';
?>

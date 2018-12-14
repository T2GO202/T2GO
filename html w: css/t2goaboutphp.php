<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="t2go.css">
<script src="formT2go.js"></script>
<title>T2GO - ABOUT US</title>
<link rel="icon" href="https://img6.androidappsapk.co/300/e/4/b/com.DennisaurCo.BobaNow.png" type="image/gif" sizes="16x16">
<style>
.borderexample
{
margin: auto;
/*border-style:solid;*/
/*border-color: black;*/
width: 500px;
height: 90px;
font-size: 12px;
}

.parallax {
    /* The image used */
    background-image: url("https://s3.amazonaws.com/spoonflower/public/design_thumbnails/0441/1403/rrbobafabricwhite_shop_preview.png");

    /* Set a specific height */
    min-height: 210px; 
    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</head>
<body>
<ul>
<li><a class="active" href="t2goindex.html"><b>HOME</b></a></li>
<li><a href="t2gomenu.html"><b>MENU</b></a></li>
<li><a href="t2goabout.html"><b>ABOUT US</b></a></li>
</ul>
<div class="row">
  <div class="column left" style="text-align: center">
  <h1>ABOUT US</h1><br>
  <p class="borderexample">T2Go is a boba shop that opened in October 2018, located in Richmond, VA.<br>
We are so excited to share our flavors and freshly brewed teas with<br>
boba enthusiasts, or those who are adventurous and want to  try new things!
</p>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h3>CONTACT</h3>
    <p>T2GO Management<br>
    t2gomanagement@yahoo.com</p>
    <br>
 <?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2 style="font-size:11px">PLEASE ENTER YOUR INFORMATION AND TYPE YOUR MESSAGE.</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <p>Name:</p> <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  <p>E-mail:</p> <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <p>Website:</p> <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  <p>Message:</p> <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
?>
  <p>&copy; 2018 T2GO</p>
  </div>

   <div class="column right">
   <br>
   <br>
   <img src="https://imgur.com/n829NeI.png" alt="Boba Shop 1" style="width:300px;height:200px;border:0;"><br>
   <br>
   <br>
   <br>
   <img src="https://i.imgur.com/82hLEFF.png" alt="Boba Shop 2" style="width:300px;height:200px;border:0;">
   </div>
   </div>

<div class="parallax"></div>

<div style="height:500px;background-color:#F9F9F9;font-size:36px">

</div>

</body>
</html>

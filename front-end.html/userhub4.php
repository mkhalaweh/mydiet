<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Feed</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Syncopate" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<link rel="stylesheet" href="style.css">
 

</head>

<body>

<header>
  <div class="container">
    <div class="nav-left">
    
     <img class="logo" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/2181605/lemon.png" alt="logo">
    </div>
  <center>
  <div class="nav-right">
    <nav>
      <ul>
        <div id="navitems">
          <li class="other"><a style="font-size:14px" href="userhub.php" id="other">Home</a></li>
          <li class="other"><a style="font-size:14px" href="userhub2.php" id="other">Inbox</a></li>
          <li class="other"><a style="font-size:14px" href="userhub3.php" id="other">Status</a></li>
          <li class="other"><a style="font-size:14px" href="userhub4.php" id="other">Reminders</a></li>
        </div>
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
         <div id="logout">
           <?php
           echo
            '<form action="../back-end.php/logout.php" method="POST">  
             <button id="logoutbtn" type="submit" name="submit">Logout</button>
             </form>'
           ?>
           
        </div>
      </ul>
  </nav>
  </div>
 </div>
</center>
    
</header>
<!-- Status Sytem -->
<?php
   include'../back-end.php/db2.php';
   $usrname = $_SESSION['u_usrname'];
   $sql = "SELECT * FROM meals2 WHERE name = '$usrname'";
   $result = mysqli_query($conn, $sql);
   $info = mysqli_fetch_assoc($result);
   //$info['reminder']
   $var1 = $info['reminder'];
   $var2 = time();
   $var3 = round(($var1 - $var2)/86400);
    if ($var1 < $var2){
      echo '<br><br><br><br>';
      echo '<div style="background-color: #0b3545; padding-right:0px; margin: 71px;  border-radius: 6px; width: 700px">
      <div class="row">
      <div class="column">
      <h1 style="margin-top: -40px;" id="hb1-h1">
      <br>Update</h1>';
    //welcome tab that shows a message for the user welcoming him to the website
      echo '<p style="color: #ffffff">
      <br>Your Meal plan has expired, Update your body stats by pressing the button below, so that the dietitian could update you with a new meal plan
      </p>
      <a href="userhub6.php" style="text-decoration: none"><button id="loginbtn">Update</button></a>
      </div>
      <img id="lemonimg" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/2181605/lemon.png" alt="logo">
      </div>
      </div>';
      } else{
      echo '<br><br><br><br>';
      echo '<div style="background-color: #0b3545; padding-right:0px; margin: 71px;  border-radius: 6px; width: 700px">
      <div class="row">
      <div class="column">
      <h1 style="margin-top: -40px;" id="hb1-h1">
      <br>Update</h1>';
    //welcome tab that shows a message for the user welcoming him to the website
      echo '<p style="color: #ffffff">
      <br>Your Meal plan has not expired yet, there are ';
      echo $var3;
      echo ' days left for your meal plan to expire
      </p>
      </div>
      <img id="lemonimg" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/2181605/lemon.png" alt="logo">
      </div>
      </div>';
  }

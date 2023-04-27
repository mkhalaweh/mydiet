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

  <!-- Navbar -->

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
          <li class="other"><a style="font-size:14px" href="#b2-h1" id="other">Accounts</a></li>
          <li class="other"><a style="font-size:14px" href="#b3-h1" id="other">Meal Plans</a></li>
          <li class="other"><a style="font-size:14px" href="#b4-h1" id="other">Message</a></li>
          <li class="other"><a style="font-size:14px" href="#b5-h1" id="other">Permissions</a></li>
          <li class="other"><a style="font-size:14px" href="#b6-h1" id="other">Notifications</a></li>
        </div>
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
         <div id="logout">
           <?php
           echo
            '<form action="../back-end.php/logout.php" method="POST">  
             <button id="signup" type="submit" name="submit">Logout</button>
             </form>'
           ?>
           
        </div>
      </ul>
  </nav>
  </div>
 </div>
</center>
    
</header>
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
          <li class="other"><a style="font-size:14px" href="#b2-h1" id="other">Receive</a></li>
          <li class="other"><a style="font-size:14px" href="#b3-h1" id="other">Track</a></li>
          <li class="other"><a style="font-size:14px" href="#b4-h1" id="other">Report</a></li>
          <li class="other"><a style="font-size:14px" href="#b5-h1" id="other">Revise</a></li>
          <li class="other"><a style="font-size:14px" href="#b6-h1" id="other">Overcome</a></li>
      </div>
          
         <div id="login">
           <?php
           if (isset($_SESSION['u_usrname'])){   //first of all checking if there is an open username session
           if ($_SESSION['u_usrname'] == "admin"){ //checking if the username in this session is admin
             header("Location: adminhub.php"); //if it is admin then it redirects the admin to the adminhub
           }
           elseif ($_SESSION['u_usrname'] == "dietitian"){ //checking if the username in this session is dietitian
             header("Location: dietitianhub.php"); //if it is dietitian then it redirects the dietitian to the dietitian hub
           }
           else {
             header("Location: userhub.php"); //checks if the the username is not admin nor dietitian however there is an open session, so its a regular user so it redirects the user to the user hub
           }
           }else{ //this is the else that belongs to the if there is a username session, so technically there is no open session to it echos the login form in the navbar
            echo
            '<form action="../back-end.php/login.php" method="post">
            &nbsp; &nbsp;
             <p class=credentials_text style="font-size: 14px; padding-top: 7px">Username/Email:</p>&nbsp; &nbsp;<input name="usrname" type="text" class="credentials"/>
             &nbsp; &nbsp;
             <p class=credentials_text style="font-size: 14px; padding-top: 7px">Password:</p>&nbsp; &nbsp;<input name="pswrd" type="password" class="credentials"/>
             &nbsp;
             <input id="loginbtn" name="submit" type="submit" value="Log in">
             </form>';
           }
          
?>  
        </div>
      </ul>
  </nav>
  </div>
 </div>
</center>
</div>
</header>
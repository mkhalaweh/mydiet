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
  
<!-- Email System -->
  <body>
  <br><br><br><br><br><br>
  <center>
  <div class="rowupdate">
  <div class="columnmsg">
  	<div class="box2">
  		<h1 class=credentials_text>Send a Message to the Dietitian</h1>
  		<br>
  	<form action="../back-end.php/message.php" method="POST">

    <p class="credentials_text2">Subject: &nbsp; </p><input name="sbjct" type="text" class="credentials3">
    <br>
    <p class="credentials_text2">Message: &nbsp; </p><br><textarea name="msg" type="number" id="msgcred"></textarea>
    <br><br>
    <?php
    if(isset($_SESSION["u_usrname"])){
    $val = $_SESSION["u_first"];
    $val2 = $_SESSION["u_last"];
    $val3 = $_SESSION["u_usrname"];
    }
    else
    $val = "";
    // maybe do some validation on $val here
    ?>
    <input name="sender" type="hidden" value="<?php echo $val. " " .$val2 ?>" />
    <input name="senderu" type="hidden" value="<?php echo $val3 ?>" />
    
    <input id="loginbtn" name="send" type="submit" value="Send Message">

    </form>
    </div>
  </div>
    </div>
    
    </center>
  
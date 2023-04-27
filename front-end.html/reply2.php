
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
          <li class="other"><a style="font-size:14px" href="dietitianhub.php" id="other">Plan Maker</a></li>
          <li class="other"><a style="font-size:14px" href="dietitianhub3.php" id="other">Inbox</a></li>
          <li class="other"><a style="font-size:14px" href="dietitianhub3.php" id="other">Status</a></li>
          <li class="other"><a style="font-size:14px" href="dietitianhub4.php" id="other">Reminders</a></li>
          <li class="other"><a style="font-size:14px" href="dietitianhub5.php" id="other">Progress</a></li>
        </div>
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
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

<!-- replying system -->
 <body>
  <br><br><br><br><br><br>
  <center>
  <div class="rowupdate">
  <div class="columnmsg">
  	<div class="box2">
  		<h1 class=credentials_text>Send a Message to a User</h1>
  		<br><br<br><br><br>
  	<form action="../back-end.php/replyback.php" method="POST">
      
    <p class="credentials_text2">Customer: &nbsp; </p><input name="reciever" type="text" class="credentials3">
    <br>
    <p class="credentials_text2">Reply: &nbsp; </p><br><textarea name="replyd" type="number" id="msgcred"></textarea>
    <br><br>
    <input id="loginbtn" name="reply" type="submit" value="Send Message">
    </form>
    </div>
  </div>
    </div>
    
    </center>
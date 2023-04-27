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
          <li class="other"><a style="font-size:14px" href="" id="other">Inbox</a></li>
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
  
<!-- inbox -->
  <head>
  <link rel="stylesheet" href="style2.css">
  </head>
  
   <table class=tbl align="center">
    <?php
   include'../back-end.php/db2.php';
   $usrname = $_SESSION['u_usrname'];
   $sql = "SELECT reply, reciever FROM infod WHERE reciever = '$usrname' ORDER BY id DESC";
   $result = mysqli_query($conn, $sql);
     ?>
   
     <br>
     <br>
     <br>
     <br>
     <tr>
     <th class="tblcell2">From</th>
     <th class="tblcell2">Reply</th>
     </tr>
   <?php
   include"../back-end.php/db2.php";
   while($infod = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>"."Dietitian"."</td>";
    echo "<td>".$infod['reply']."</td>";
    echo "</tr>";
   }
   ?>
   <tr>
    <th> <a href="userhub7.php" style="text-decoration: none"><button id="loginbtn">Send a Message</button></a> </th>
   </tr>
     
    </table>
   
  
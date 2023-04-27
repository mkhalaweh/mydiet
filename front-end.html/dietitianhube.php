

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
          <li class="other"><a style="font-size:14px" href="dietitianhub2.php" id="other">Inbox</a></li>
          <li class="other"><a style="font-size:14px" href="dietitianhub3.php" id="other">Status</a></li>
          <li class="other"><a style="font-size:14px" href="dietitianhub4.php" id="other">Reminders</a></li>
          <li class="other"><a style="font-size:14px" href="dietitianhub5.php" id="other">Users</a></li>
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
  
<!-- Users -->
<link rel="stylesheet" href="style2.css">
<br><br><br><br>
<center>
<table class=tbl>
    <?php
   $usrname = $_GET['editu'];
   $meal = $_GET['editm'];
   $weekday = $_GET['editwd'];
   include'../back-end.php/db2.php';
   $sql = "SELECT * FROM meals2 WHERE name = '$usrname' AND mealname = '$meal'";
   $result = mysqli_query($conn, $sql);
    //outputing the meal plan that the dietitian gave to the customer
   include"../back-end.php/db2.php";
   while($meals2 = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<th>".$meals2[$_GET['editwd']]."</th>";
    echo "</tr>";
   }
   ?>
 </table>
 <br><br><br>
</center>
<div>
  <center>
    <img class="arrow" src="images/arrow.png" alt="arrow" />
  </center>
  <br><br>
  </div>
   <center>
  <table class="tbl">
  <form action="../back-end.php/change.php" method="POST">
  <th class="tblcell"><input type="text" name="newmeal" class="tblcellfitb"></th>
  <input type="hidden" name="nameuser" value=<?php echo $_GET['editu'] ?>>
  <input type="hidden" name="changemeal" value=<?php echo $_GET['editm'] ?>>
  <input type="hidden" name="day" value=<?php echo $_GET['editwd'] ?>>
  <th><input type="submit" name="submite" id="loginbtn" value="Change"></th>
  </table>
</center>


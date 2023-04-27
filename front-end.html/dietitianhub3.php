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
  
<!-- inbox -->
  <head>
   <link rel="stylesheet" href="style2.css">
  </head>
  <br><br><br><br>
  <div>
   <table class=tbl align="center">
    <?php
   include'../back-end.php/db2.php';
   $sql = "SELECT weekday, meal, status, sender, senderu FROM statusinfo";
   $result = mysqli_query($conn, $sql);
     ?>
   
     <tr>
     <th class="tblcell2">User</th>
     <th class="tblcell2">Weekday</th>
     <th class="tblcell2">Meal</th>
     <th class="tblcell2">Status</th>
     <th class="tblcell2">Actions</th>
     </tr>
     
   <?php
    //outputing the meal plan that the dietitian gave to the customer
   include"../back-end.php/db2.php";
   while($info = mysqli_fetch_assoc($result)){
    mysqli_query($conn, $sql);
    echo "<tr>";
    echo "<td>".$info['sender']."</td>";
    echo "<td>".$info['weekday']."</td>";
    echo "<td>".$info['meal']."</td>";
    echo "<td>".$info['status']."</td>"; ?>
    <th><a href="dietitianhube.php?editu=<?php echo $info['senderu'] ?>&editwd=<?php echo $info['weekday'] ?>&editm=<?php echo $info['meal'] ?>" style="text-decoration: none"><button id="logoutbtn">Edit</button></a></th>
    <?php
    echo "</tr>";
   }
   ?>
    </table>
  </div>
<br><br><br>

  
   
  
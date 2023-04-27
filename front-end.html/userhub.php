

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
          <li class="other"><a style="font-size:14px" href="" id="other">Home</a></li>
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
  
 <!--Meal Plan Previewer-->
  <head>
   <link rel="stylesheet" href="style2.css">
  </head>
  <body>
  <center>
    <br><br>
    <div style="background-color: #0b3545; padding-right:0px; margin: 71px; border-radius: 6px; width: 700px">
    <div class="row">
  <div class="column">
    <h1 style="margin-top: -40px;" id="hb1-h1">
    Welcome,</h1> 
    <?php
    //welcome tab that shows a message for the user welcoming him to the website
    include '../back-end.php/db.php';
    $fname = $_SESSION['u_first'];
    $lname = $_SESSION['u_last'];
    echo "<p style = 'color:white;'>$fname $lname</p>";
    ?>
    <p style="color: #ffffff">
     below is your most recent meal plan
    </p>
    </div>
    <img id="lemonimg" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/2181605/lemon.png" alt="logo">
    </div>
    </div>
    
  <table class=tbl>
    <?php
   include'../back-end.php/db2.php';
   $usrname = $_SESSION['u_usrname'];
   $sql = "SELECT * FROM meals2 WHERE name = '$usrname'";
   $result = mysqli_query($conn, $sql);
     ?>
    <!-- outputing the first row with the titles -->
   <tr>
    <th class="tblcell2">Week Days/Meals</th> 
    <th class="tblcell2">Sunday</th>
    <th class="tblcell2">Monday</th>
    <th class="tblcell2">Tuesday</th>
    <th class="tblcell2">Wednesday</th>
    <th class="tblcell2">Thursday</th>
    <th class="tblcell2">Friday</th>
    <th class="tblcell2">Saturday</th>
    <th class="tblcell2">Comment</th>
   </tr>
     
   <?php
    //outputing the meal plan that the dietitian gave to the customer
   include"../back-end.php/db2.php";
   while($meals2 = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<th>".$meals2['mealname']."</th>";
    echo "<td>".$meals2['sunday']."</td>";
    echo "<td>".$meals2['monday']."</td>";
    echo "<td>".$meals2['tuesday']."</td>";
    echo "<td>".$meals2['wednesday']."</td>";
    echo "<td>".$meals2['thursday']."</td>";
    echo "<td>".$meals2['friday']."</td>";
    echo "<td>".$meals2['saturday']."</td>";
    echo "<td>".$meals2['cmnt']."</td>";
    echo "</tr>";
   }
   ?>
  
    
    


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

<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valuetosearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `Accounts` WHERE CONCAT(`user_id`, `user_first`, `user_last`, `user_email`, `user_usrname`) LIKE '%".$valueToSearch."%'";
    $result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `Accounts`";
    $result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "EasyDiet");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
}

<link rel="stylesheet" href="style2.css">
<?php
   include'../back-end.php/db.php';
     ?>
     <br><br><br>
     <table class=tbl align="center">
    <tr><td colspan="8" class="tblcell2"><form action="dietitianhub5.php" method="POST">
     <input name="valuetosearch" class="credentials" type="text">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
     <input id="loginbtn" name="search" type="submit" value="Filter"></td></tr>
     <tr>
     <th class="tblcell2">ID</th>
     <th class="tblcell2">First Name</th>
     <th class="tblcell2">Last Name</th>
     <th class="tblcell2">Email</th>
     <th class="tblcell2">Username</th>
     </tr>
     
   <?php
    //outputing the meal plan that the dietitian gave to the customer
   include"../back-end.php/db2.php";
   while($info = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<br>";
    echo "<td>".$info['user_id']."</td>";
    echo "<td>".$info['user_first']."</td>";
    echo "<td>".$info['user_last']."</td>";
    echo "<td>".$info['user_email']."</td>";
    echo "<td>".$info['user_usrname']."</td>";}
    echo "</tr>";

   
   ?>
   
     
    </table>
  


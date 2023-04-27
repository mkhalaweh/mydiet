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
          <li class="other"><a style="font-size:14px" href="" id="other">Plan Maker</a></li>
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
  
<!-- Meal Plan maker -->
  
  <body>
    <br><br><br><br>
  <center>  
  <table class=tbl>
    <form action="../back-end.php/table.php" method="POST">
      <input name="time1" type="hidden" value="Breakfast" class="times">
      <input name="time2" type="hidden" value="Snack1" class="times">
      <input name="time3" type="hidden" value="Lunch" class="times">
      <input name="time4" type="hidden" value="Snack2" class="times">
      <input name="time5" type="hidden" value="Dinner" class="times">
      <input name="time6" type="hidden" value="Snack3" class="times">
      
   <tr>
    <th class="tblcell2">Week Days/Meals</th> 
    <th class="tblcell2">Sunday</th>
    <th class="tblcell2">Monday</th>
    <th class="tblcell2">Tuesday</th>
    <th class="tblcell2">Wednesday</th>
    <th class="tblcell2">Thursday</th>
    <th class="tblcell2">Friday</th>
    <th class="tblcell2">Saturday</th> 
   </tr>
      
   <tr>
    <th class="tblcell2">Breakfast</th>
    <td class="tblcell"><input name="sunbr" type="text" class="tblcellfitb"></td>
    <td class="tblcell"><input name="monbr" type="text" class="tblcellfitb"></td> 
    <td class="tblcell"><input name="tuebr" type="text" class="tblcellfitb"></td>
    <td class="tblcell"><input name="wedbr" type="text" class="tblcellfitb"></td>
    <td class="tblcell"><input name="thubr" type="text" class="tblcellfitb"></td>
    <td class="tblcell"><input name="fribr" type="text" class="tblcellfitb"></td>
    <td class="tblcell"><input name="satbr" type="text" class="tblcellfitb"></td> 
    </tr> 
    
    <tr>
    <th class="tblcell2">Snack</th>
    <td class="tblcell"><input name="sunsn1" type="text" class="tblcellfitb"></td>
    <td class="tblcell"><input name="monsn1" type="text" class="tblcellfitb"></td> 
    <td class="tblcell"><input name="tuesn1" type="text" class="tblcellfitb"></td>
    <td class="tblcell"><input name="wedsn1" type="text" class="tblcellfitb"></td>
    <td class="tblcell"><input name="thusn1" type="text" class="tblcellfitb"></td>
    <td class="tblcell"><input name="frisn1" type="text" class="tblcellfitb"></td>
    <td class="tblcell"><input name="satsn1" type="text" class="tblcellfitb"></td> 
    </tr>
    
    <tr>
    <th class="tblcell2">Lunch</th>
    <td class="tblcell"><input name="sunlu" type="text" class="tblcellfitb"></td>
    <td class="tblcell"><input name="monlu" type="text" class="tblcellfitb"></td> 
    <td class="tblcell"><input name="tuelu" type="text" class="tblcellfitb"></td>
    <td class="tblcell"><input name="wedlu" type="text" class="tblcellfitb"></td>
    <td class="tblcell"><input name="thulu" type="text" class="tblcellfitb"></td>
    <td class="tblcell"><input name="frilu" type="text" class="tblcellfitb"></td>
    <td class="tblcell"><input name="satlu" type="text" class="tblcellfitb"></td> 
    </tr>
    
    <tr>
    <th class="tblcell2">Snack</th>
    <td class="tblcell"><input name="sunsn2" type="text" class="tblcellfitb"></td>
    <td class="tblcell"><input name="monsn2" type="text" class="tblcellfitb"></td> 
    <td class="tblcell"><input name="tuesn2" type="text" class="tblcellfitb"></td>
    <td class="tblcell"><input name="wedsn2" type="text" class="tblcellfitb"></td>
    <td class="tblcell"><input name="thusn2" type="text" class="tblcellfitb"></td>
    <td class="tblcell"><input name="frisn2" type="text" class="tblcellfitb"></td>
    <td class="tblcell"><input name="satsn2" type="text" class="tblcellfitb"></td>
    </tr>  
      
    <tr>
    <th class="tblcell2">Dinner</th>
    <td class="tblcell"><input name="sundi" type="text" class="tblcellfitb"></td>
    <td class="tblcell"><input name="mondi" type="text" class="tblcellfitb"></td> 
    <td class="tblcell"><input name="tuedi" type="text" class="tblcellfitb"></td>
    <td class="tblcell"><input name="weddi" type="text" class="tblcellfitb"></td>
    <td class="tblcell"><input name="thudi" type="text" class="tblcellfitb"></td>
    <td class="tblcell"><input name="fridi" type="text" class="tblcellfitb"></td>
    <td class="tblcell"><input name="satdi" type="text" class="tblcellfitb"></td> 
    </tr>
    
    <tr>
    <th class="tblcell2">Snack</th>
    <td class="tblcell"><input name="sunsn3" type="text" class="tblcellfitb"></td>
    <td class="tblcell"><input name="monsn3" type="text" class="tblcellfitb"></td> 
    <td class="tblcell"><input name="tuesn3" type="text" class="tblcellfitb"></td>
    <td class="tblcell"><input name="wedsn3" type="text" class="tblcellfitb"></td>
    <td class="tblcell"><input name="thusn3" type="text" class="tblcellfitb"></td>
    <td class="tblcell"><input name="frisn3" type="text" class="tblcellfitb"></td>
    <td class="tblcell"><input name="satsn3" type="text" class="tblcellfitb"></td> 
   </tr>
     
      
     <tr>
     <th colspan="8" class="tblcell2">Comments:</th>
    </tr> 
     
    <tr>
      <td colspan="8" class="tblcell"><textarea name="comments" type="text" class="tblcellfitb2"></textarea></td>
    </tr>
      
      <tr>
      <td colspan="8">
        <center>
          <br>
          <p class="credentials_text">This Meal plan belongs to the Username:</p>
          &nbsp;
          <input name="user" class="credentials" type="text">
          &nbsp; &nbsp;
          <?php
          $date = time() + 604800;
          ?>
          <input type="hidden" value = <?php echo $date ?> name="reminder">
          <input id="loginbtn" name="share" type="submit" value="Share">
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        </center>
        </td>
      </tr>
  </table>
    </form>
    </center>
  </body>
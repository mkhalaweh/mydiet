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
          <li class="other"><a style="font-size:14px" href="" id="other">Status</a></li>
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
  
<!-- Status Sytem -->
 <head>
      <link rel="stylesheet" href="style2.css">
 </head>
 <br><br><br><br><br><br>
 <center>
 <table class=tbl>
    <?php
   include'../back-end.php/db2.php';
   $usrname = $_SESSION['u_usrname'];
   $sql = "SELECT * FROM meals2 WHERE name = '$usrname'";
   $result = mysqli_query($conn, $sql);
     ?>
    <!-- outputing the first row with the titles -->
  <form action="../back-end.php/test.php" method="POST">
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
     
   <?php
    //outputing the meal plan that the dietitian gave to the customer
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
    echo "</tr>";
   }
   ?>
   <tr>
    <th colspan="8">
      <input id="logoutbtn" name="stat" type="submit" value="Submit">
    </th>
  </tr>
 </table>

 <br><br><br>
  <div class="custom-select">
  <select name="weekday">
  <option value="sunday">Sunday</option>
  <option value="monday">Monday</option>
  <option value="tuesday">Tuesday</option>
  <option value="wednesday">Wednesday</option>
  <option value="thursday">Thursday</option>
  <option value="friday">Friday</option>
  <option value="saturday">Saturday</option>
  </select>
  </div>
  <br><br><br><br><br>
  <div class="custom-select">
  <select name="meal">
  <option value="Breakfast">Breakfast</option>
  <option value="Snack1">Snack1</option>
  <option value="Lunch">Lunch</option>
  <option value="Snack2">Snack2</option>
  <option value="Dinner">Dinner</option>
  <option value="Snack3">Snack3</option>
  </select>
  </div>
  <br><br><br><br><br>
  <div class="custom-select">
  <select name="status">
  <option value="Like">Like</option>
  <option value="Dislike">Dislike</option>
  </select>
  </div>
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
  <br><br><br>
  </form>
  
  <script>
  var x, i, j, selElmnt, a, b, c;
  /*look for any elements with the class "custom-select":*/
  x = document.getElementsByClassName("custom-select");
  for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 0; j < selElmnt.length; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>
</center>
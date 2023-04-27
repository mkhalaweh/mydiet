<?php

if (isset($_POST['submite'])) {
  include 'db.php';
  
  $weekday = mysqli_real_escape_string($conn, $_POST['day']);
  $meal = mysqli_real_escape_string($conn, $_POST['changemeal']);
  $username = mysqli_real_escape_string($conn, $_POST['nameuser']);
  $newmeal = mysqli_real_escape_string($conn, $_POST['newmeal']);

$sql = "DELETE FROM statusinfo WHERE weekday='$weekday' AND meal='$meal' AND senderu='$username'";

mysqli_query($conn, $sql);


$sql = "UPDATE meals2 SET $weekday='$newmeal' WHERE name='$username' AND mealname='$meal'";

mysqli_query($conn, $sql);

header("Location: ../front-end.html/dietitianhub3.php");

} else {

header("Location: ../front-end.html/dietitianhub3.php");	

}
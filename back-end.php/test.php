<?php

if (isset($_POST['stat'])){
  include_once 'db.php';
  
$weekday = mysqli_real_escape_string($conn, $_POST['weekday']);
$meal = mysqli_real_escape_string($conn, $_POST['meal']);
$status = mysqli_real_escape_string($conn, $_POST['status']);
$sender = mysqli_real_escape_string($conn, $_POST['sender']);
$senderu = mysqli_real_escape_string($conn, $_POST['senderu']);

$sql = "INSERT INTO statusinfo (weekday, meal, status, sender, senderu) VALUES ('$weekday', '$meal', '$status', '$sender', '$senderu');";
mysqli_query($conn, $sql);
  
header("Location: ../front-end.html/userhub3.php");
  
}
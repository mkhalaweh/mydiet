<?php

if (isset($_POST['update'])) {
  include_once 'db.php';
  
$fatamnt = mysqli_real_escape_string($conn, $_POST['fatamnt']);
$wateramnt = mysqli_real_escape_string($conn, $_POST['wateramnt']);
$musclemass = mysqli_real_escape_string($conn, $_POST['musclemass']);
$bonemass = mysqli_real_escape_string($conn, $_POST['bonemass']);
$bmi = mysqli_real_escape_string($conn, $_POST['bmi']);
$height = mysqli_real_escape_string($conn, $_POST['height']);
$weight = mysqli_real_escape_string($conn, $_POST['weight']);
$sender = mysqli_real_escape_string($conn, $_POST['sender']);
$senderu = mysqli_real_escape_string($conn, $_POST['senderu']);
  
$sql = "INSERT INTO stat (famnt, wamnt, musclem, bonem, bmi, height, weight, sender, senderu) VALUES ('$fatamnt', '$wateramnt', '$musclemass', '$bonemass', '$bmi', '$height', '$weight', '$sender', '$senderu');";

mysqli_query($conn, $sql);
  
header("Location: ../front-end.html/userhub6.php");
  
}
<?php

if (isset($_POST['send'])) {
  include_once 'db.php';
  
$subject = mysqli_real_escape_string($conn, $_POST['sbjct']);
$message = mysqli_real_escape_string($conn, $_POST['msg']);
$sender = mysqli_real_escape_string($conn, $_POST['sender']);
$senderu = mysqli_real_escape_string($conn, $_POST['senderu']);
  
$sql = "INSERT INTO info (subject, message, sender, senderu) VALUES ('$subject', '$message', '$sender', '$senderu');";
mysqli_query($conn, $sql);
  
header("Location: ../front-end.html/userhub7.php");
  
}
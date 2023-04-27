<?php

if (isset($_POST['reply'])) {
  include_once 'db.php';
  
$reciever = mysqli_real_escape_string($conn, $_POST['reciever']);
$replyd = mysqli_real_escape_string($conn, $_POST['replyd']);

$sql = "INSERT INTO infod (reciever, reply) VALUES ('$reciever', '$replyd');";
mysqli_query($conn, $sql);
  
header("Location: ../front-end.html/reply.php");
  
}

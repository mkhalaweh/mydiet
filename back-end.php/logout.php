<?php
session_start();
if (isset($_SESSION['submit']))
session_start();
session_unset();
session_destroy();
  header("Location:../front-end.html/home.php");
  exit();
?>
<?php
session_start();

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "EasyDiet";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    
?>
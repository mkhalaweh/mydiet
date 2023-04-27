<?php

if (isset($_POST['submit'])) {
  include_once 'db.php';
  
    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $usrname = mysqli_real_escape_string($conn, $_POST['usrname']);
    $pswrd = mysqli_real_escape_string($conn, $_POST['pswrd']);
    $confirm = mysqli_real_escape_string($conn, $_POST['cnfrmpswrd']);
      
    //checking errors and empty fields
      
    if (empty($first) || empty($last) || empty($email) || empty($usrname) || empty($pswrd)){
      
    header("Location: ../front-end.html/home.php?signup=empty&first=$first&last=$last&email=$email&usrname=$usrname&#bookmark");
    exit();
      
    } elseif($pswrd != $confirm) {
      
      header("Location: ../front-end.html/home.php?signup=nomatch&first=$first&last=$last&email=$email&usrname=$usrname&#bookmark");
      exit();
      
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      
      header("Location: ../front-end.html/home.php?signup=email&first=$first&last=$last&usrname=$usrname&#bookmark");
      exit();
        
            } else {
      
      //check if input is matching standards
        if ((!preg_match("/^[a-zA-Z]*$/", $first)) || (!preg_match("/^[a-zA-Z]*$/", $last))){
        header("Location: ../front-end.html/home.php?signup=invalid&email=$email&usrname=$usrname&#bookmark");
        exit();  
          
        } else{
          $sql = "SELECT * FROM Accounts WHERE user_usrname = '$usrname'";
          $result = mysqli_query($conn, $sql);
          $checkresult = mysqli_num_rows($result);
          
          if($checkresult > 0){
          header("Location: ../front-end.html/home.php?signup=userexists&first=$first&last=$last&email=$email&#bookmark");
          exit();
           
          } else {
          $sql = "SELECT * FROM Accounts WHERE user_email = '$email'"; 
          $result = mysqli_query($conn, $sql);
          $checkresult = mysqli_num_rows($result);
          
          if ($checkresult > 0){
          header("Location: ../front-end.html/home.php?signup=emailtaken&first=$first&last=$last&usrname=$usrname&#bookmark");
          exit(); 
          
          } else {
            //hashing pswrd
            $hashPswrd = password_hash($pswrd, PASSWORD_DEFAULT);
            //insert user into database
            $sql = "INSERT INTO Accounts (user_first, user_last, user_email, user_usrname, user_pswrd) VALUES ('$first', '$last', '$email', '$usrname', '$hashPswrd');"; 
            mysqli_query($conn, $sql);
            header("Location: ../front-end.html/home.php?signup=success&#bookmark");
            exit();  
            
          }
        }
      
    }
   }    
      
}else {
  header("Location: ../front-end.html/home.php");
  exit();
}
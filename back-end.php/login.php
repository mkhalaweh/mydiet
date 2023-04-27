<?php
session_start();

if (isset($_POST['submit'])){
  include 'db.php';

  $usrname = mysqli_real_escape_string ($conn, $_POST['usrname']);
  $pswrd = mysqli_real_escape_string ($conn, $_POST['pswrd']);
    
    //error handling
    
    if (empty($usrname) || empty($pswrd)){
     header("Location: ../front-end.html/home.php?login=empty");
     exit();
      
    } else {
      $sql = "SELECT * FROM Accounts WHERE user_usrname = '$usrname' OR user_email = '$usrname'";
      $result = mysqli_query($conn, $sql);
      $checkresult = mysqli_num_rows($result);
      
      if ($checkresult < 1){
      header("Location: ../front-end.html/home.php?login=error3");
      exit();
      }else {
      if ($row = mysqli_fetch_assoc($result));
      }
      //verifying password
      $hashedPswrdCheck = password_verify($pswrd, $row['user_pswrd']);
      if ($hashedPswrdCheck == false){
        header("Location: ../front-end.html/home.php?login=error1");
     exit();
      
      }elseif ($hashedPswrdCheck == true){
        
    //user entering the website
    //this is here so that we can use the credentials to verify stuff when the user enters the website
      $_SESSION['u_id'] = $row['user_id'];  
      $_SESSION['u_first'] = $row['user_first'];
      $_SESSION['u_last'] = $row['user_last'];
      $_SESSION['u_usrname'] = $row['user_usrname'];
        
      header("Location: ../front-end.html/home.php?login=success");
      exit();
    
      }    
    } 
}else {
      header("Location: ../front-end.html/home.php?login=error2");
        exit();
      
    }
?>
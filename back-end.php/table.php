<?php

if (isset($_POST['share'])) {
  include_once 'db.php';
  
  $user = mysqli_real_escape_string($conn, $_POST['user']);
  $time1 = mysqli_real_escape_string($conn, $_POST['time1']);
  $time2 = mysqli_real_escape_string($conn, $_POST['time2']);
  $time3 = mysqli_real_escape_string($conn, $_POST['time3']);
  $time4 = mysqli_real_escape_string($conn, $_POST['time4']);
  $time5 = mysqli_real_escape_string($conn, $_POST['time5']);
  $time6 = mysqli_real_escape_string($conn, $_POST['time6']);
  $sunbr = mysqli_real_escape_string($conn, $_POST['sunbr']);
  $monbr = mysqli_real_escape_string($conn, $_POST['monbr']);
  $tuebr = mysqli_real_escape_string($conn, $_POST['tuebr']);
  $wedbr = mysqli_real_escape_string($conn, $_POST['wedbr']);
  $thubr = mysqli_real_escape_string($conn, $_POST['thubr']);
  $fribr = mysqli_real_escape_string($conn, $_POST['fribr']);
  $satbr = mysqli_real_escape_string($conn, $_POST['satbr']);
  $sunsn1 = mysqli_real_escape_string($conn, $_POST['sunsn1']);
  $monsn1 = mysqli_real_escape_string($conn, $_POST['monsn1']);
  $tuesn1 = mysqli_real_escape_string($conn, $_POST['tuesn1']);
  $wedsn1 = mysqli_real_escape_string($conn, $_POST['wedsn1']);
  $thusn1 = mysqli_real_escape_string($conn, $_POST['thusn1']);
  $frisn1 = mysqli_real_escape_string($conn, $_POST['frisn1']);
  $satsn1 = mysqli_real_escape_string($conn, $_POST['satsn1']);
  $sunlu = mysqli_real_escape_string($conn, $_POST['sunlu']);
  $monlu = mysqli_real_escape_string($conn, $_POST['monlu']);
  $tuelu = mysqli_real_escape_string($conn, $_POST['tuelu']);
  $wedlu = mysqli_real_escape_string($conn, $_POST['wedlu']);
  $thulu = mysqli_real_escape_string($conn, $_POST['thulu']);
  $frilu = mysqli_real_escape_string($conn, $_POST['frilu']);
  $satlu = mysqli_real_escape_string($conn, $_POST['satlu']);
  $sunsn2 = mysqli_real_escape_string($conn, $_POST['sunsn2']);
  $monsn2 = mysqli_real_escape_string($conn, $_POST['monsn2']);
  $tuesn2 = mysqli_real_escape_string($conn, $_POST['tuesn2']);
  $wedsn2 = mysqli_real_escape_string($conn, $_POST['wedsn2']);
  $thusn2 = mysqli_real_escape_string($conn, $_POST['thusn2']);
  $frisn2 = mysqli_real_escape_string($conn, $_POST['frisn2']);
  $satsn2 = mysqli_real_escape_string($conn, $_POST['satsn2']);
  $sundi = mysqli_real_escape_string($conn, $_POST['sundi']);
  $mondi = mysqli_real_escape_string($conn, $_POST['mondi']);
  $tuedi = mysqli_real_escape_string($conn, $_POST['tuedi']);
  $weddi = mysqli_real_escape_string($conn, $_POST['weddi']);
  $thudi = mysqli_real_escape_string($conn, $_POST['thudi']);
  $fridi = mysqli_real_escape_string($conn, $_POST['fridi']);
  $satdi = mysqli_real_escape_string($conn, $_POST['satdi']);
  $sunsn3 = mysqli_real_escape_string($conn, $_POST['sunsn3']);
  $monsn3 = mysqli_real_escape_string($conn, $_POST['monsn3']);
  $tuesn3 = mysqli_real_escape_string($conn, $_POST['tuesn3']);
  $wedsn3 = mysqli_real_escape_string($conn, $_POST['wedsn3']);
  $thusn3 = mysqli_real_escape_string($conn, $_POST['thusn3']);
  $frisn3 = mysqli_real_escape_string($conn, $_POST['frisn3']);
  $satsn3 = mysqli_real_escape_string($conn, $_POST['satsn3']);
  $reminder = mysqli_real_escape_string($conn, $_POST['reminder']);
  $comments = mysqli_real_escape_string($conn, $_POST['comments']);
  
$sql = "INSERT INTO meals2 (name, mealname, sunday, monday, tuesday, wednesday, thursday, friday, saturday, reminder, cmnt) VALUES ('$user', '$time1', '$sunbr', '$monbr', '$tuebr', '$wedbr', '$thubr', '$fribr', '$satbr', '$reminder', '$comments');";

mysqli_query($conn, $sql);
  
$sql = "INSERT INTO meals2 (name, mealname, sunday, monday, tuesday, wednesday, thursday, friday, saturday) VALUES ('$user', '$time2', '$sunsn1', '$monsn1', '$tuesn1', '$wedsn1', '$thusn1', '$frisn1', '$satsn1');";
  
mysqli_query($conn, $sql);

$sql = "INSERT INTO meals2 (name, mealname, sunday, monday, tuesday, wednesday, thursday, friday, saturday) VALUES ('$user', '$time3', '$sunlu', '$monlu', '$tuelu', '$wedlu', '$thulu', '$frilu', '$satlu');";

mysqli_query($conn, $sql);
  
$sql = "INSERT INTO meals2 (name, mealname, sunday, monday, tuesday, wednesday, thursday, friday, saturday) VALUES ('$user', '$time4', '$sunsn2', '$monsn2', '$tuesn2', '$wedsn2', '$thusn2', '$frisn2', '$satsn2');";
  
mysqli_query($conn, $sql);
  
$sql = "INSERT INTO meals2 (name, mealname, sunday, monday, tuesday, wednesday, thursday, friday, saturday) VALUES ('$user', '$time5', '$sundi', '$mondi', '$tuedi', '$weddi', '$thudi', '$fridi', '$satdi');";
  
mysqli_query($conn, $sql);
  
$sql = "INSERT INTO meals2 (name, mealname, sunday, monday, tuesday, wednesday, thursday, friday, saturday) VALUES ('$user', '$time6', '$sunsn3', '$monsn3', '$tuesn3', '$wedsn3', '$thusn3', '$frisn3', '$satsn3');";  
  
mysqli_query($conn, $sql);
}

header("Location: ../front-end.html/dietitianhub.php");
?>
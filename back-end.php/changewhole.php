<?php

if (isset($_POST['submitwhole'])) {
  include 'db.php';
  
  $user = mysqli_real_escape_string($conn, $_POST['usrname']);
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

$sql = "DELETE FROM stat WHERE senderu='$user'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET sunday='$sunbr' WHERE name='$user' AND mealname='Breakfast'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET sunday='$sunsn1' WHERE name='$user' AND mealname='Snack1'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET sunday='$sunlu' WHERE name='$user' AND mealname='Lunch'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET sunday='$sunsn2' WHERE name='$user' AND mealname='Snack2'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET sunday='$sundi' WHERE name='$user' AND mealname='Dinner'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET sunday='$sunsn3' WHERE name='$user' AND mealname='Snack3'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET monday='$monbr' WHERE name='$user' AND mealname='Breakfast'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET monday='$monsn1' WHERE name='$user' AND mealname='Snack1'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET monday='$monlu' WHERE name='$user' AND mealname='Lunch'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET monday='$monsn2' WHERE name='$user' AND mealname='Snack2'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET monday='$mondi' WHERE name='$user' AND mealname='Dinner'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET monday='$monsn3' WHERE name='$user' AND mealname='Snack3'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET tuesday='$tuebr' WHERE name='$user' AND mealname='Breakfast'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET tuesday='$tuesn1' WHERE name='$user' AND mealname='Snack1'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET tuesday='$tuelu' WHERE name='$user' AND mealname='Lunch'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET tuesday='$tuesn2' WHERE name='$user' AND mealname='Snack2'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET tuesday='$tuedi' WHERE name='$user' AND mealname='Dinner'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET tuesday='$tuesn3' WHERE name='$user' AND mealname='Snack3'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET wednesday='$wedbr' WHERE name='$user' AND mealname='Breakfast'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET wednesday='$wedsn1' WHERE name='$user' AND mealname='Snack1'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET wednesday='$wedlu' WHERE name='$user' AND mealname='Lunch'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET wednesday='$wedsn2' WHERE name='$user' AND mealname='Snack2'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET wednesday='$weddi' WHERE name='$user' AND mealname='Dinner'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET wednesday='$wedsn3' WHERE name='$user' AND mealname='Snack3'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET thursday='$thubr' WHERE name='$user' AND mealname='Breakfast'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET thursday='$thusn1' WHERE name='$user' AND mealname='Snack1'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET thursday='$thulu' WHERE name='$user' AND mealname='Lunch'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET thursday='$thusn2' WHERE name='$user' AND mealname='Snack2'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET thursday='$thudi' WHERE name='$user' AND mealname='Dinner'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET thursday='$thusn3' WHERE name='$user' AND mealname='Snack3'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET friday='$fribr' WHERE name='$user' AND mealname='Breakfast'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET friday='$frisn1' WHERE name='$user' AND mealname='Snack1'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET friday='$frilu' WHERE name='$user' AND mealname='Lunch'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET friday='$frisn2' WHERE name='$user' AND mealname='Snack2'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET friday='$fridi' WHERE name='$user' AND mealname='Dinner'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET friday='$frisn3' WHERE name='$user' AND mealname='Snack3'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET saturday='$satbr' WHERE name='$user' AND mealname='Breakfast'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET saturday='$satsn1' WHERE name='$user' AND mealname='Snack1'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET saturday='$satlu' WHERE name='$user' AND mealname='Lunch'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET saturday='$satsn2' WHERE name='$user' AND mealname='Snack2'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET saturday='$satdi' WHERE name='$user' AND mealname='Dinner'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET saturday='$satsn3' WHERE name='$user' AND mealname='Snack3'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET reminder='$reminder' WHERE name='$user' AND mealname='Breakfast'";

mysqli_query($conn, $sql);

$sql = "UPDATE meals2 SET cmnt='$comments' WHERE name='$user'";

mysqli_query($conn, $sql);

header("Location: ../front-end.html/dietitianhub4.php");

} else {

header("Location: ../front-end.html/dietitianhub4.php");	

}
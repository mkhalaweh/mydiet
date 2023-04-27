<?php include_once "header.php"; ?>

<!-- block 1 -->
  
  <img style="width: 100%" class="img-header" src="images/header.jpg " alt="header BG">

  <img class="img-h-p" src="images/header.jpg" alt="header BG">


  
  
  

  
  
  
<!-- block 2 -->

<center>
<div class="row">
  <div class="column">
    <p class="inforecieve"> <h1 style="padding-top: 80px; margin-top: -40px; color: #ed925b;" id="b2-h1">Receive</h1> This Platform will allow you to Investigate and explore the diet provided by the dietitian to understand it and get a better feeling of it as a base for your food intaking activity, in addition helping you keep another copy of the diet provided by the dietitian.</p>
  </div>
   &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
  <img class="icon1" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/2181605/inbox.png" alt="receive icon">
</div>
  </center>
  
  <!-- block 3 -->
  <center>
<div class="row2">
  <div class="column2">
    <p class="infotrack"><h1 style="padding-top: 70px; margin-top: -40px;" id=b3-h1>Ease</h1>Our website is equipped with features that will ease your process towards a healthy lifestyle, we guarantee:</div> <br> <br> <div class="column2a"><p class="infotracksignup">A Reduction in body weight &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;Practicing a Healthy Food intake
 <br><br><br><br>
  &emsp;
  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/2181605/slim-down.png" width="200px">
  &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/2181605/shopping-list.png" width="200px"></p>
</p>
  </center>
  
  

</body>

</html>

<!-- block 4 -->

<div class="image">

      <img class="fit" src="images/fitnessbg.jpg" alt="fitness" />
      <h1 id=b4-h1 style="padding-top: 80px; margin-top: -40px;">Report</h1>
      <p id=b4-p1> Report your feedback on certain meals from the diet in terms of taste, in which having an unwanted meal will make the dietitian propose another meal with the same nutritional benefits</p>
      <img id=b4-img1 src="images/smiley.png" alt="smileicon" />
      <p id=b4-p2> Report your progress and changes faced to the dietitian so the dietitian could check how responsible are you in following your diet and if you are taking the right path in your road to becoming a healthy person</p>
      <img id=b4-img2 src="images/exchange.png" alt="updateicon" />
</div>


<!-- block 5 -->
<center>
<div class="row3">
  <div class="column3">
    <p class="inforevise"><h1 style="padding-top: 80px; margin-top: -40px;" id=b5-h1>Revise</h1>when the diet's time period has surpassed, the dietitian will be revising the results and changes faced that you reported and will be comparing them to the diet provided, so that there is a possibility that the dietitian would update you with another diet that produces a different pattern of changes</p> <img id=reviseimage src=images/revise.jpg alt="cycle" width="700px">
</center>
</div>


<!-- block 6 -->
<center>
	<div class="image">

      <img class="fit" src="images/weightwall.jpg" alt="fitness" />
      <h1 style="padding-top: 70px; margin-top: -40px;" id=b6-h1>Overcome</h1>
      <p id=b6-p1> Following this procedure and being patient with the method we ensure you the best results, we ensure that you will be experiencing a body shape and changes that you never imagined were possible, you will achieve the weight you want, you will achieve the amount of protein you want, etc. but remember that change does not come overnight, you will have to strive for your goals, and you have to be patient</p>
      <img id=b6-img1 src="images/weight-loss.png" alt="weightlossicon" />
</div>


<!-- block 7 -->

<center>
<div class="row2">
  <div class="column2">
  	<br><br><br>
  	<div class="box">
  		<h1 class=credentials_text id="bookmark">Sign Up</h1>
  		<br>
  	<form action="../back-end.php/signup.php" method="post">
      <p class="credentials_text2">First Name:</p><br>
      <?php
      if (isset($_GET['first'])) {
        $first = $_GET['first'];
        echo '<input name="first" type="text" class="credentials2" value="'.$first.'"/>';
      }
      else{
        echo '<input name="first" type="text" class="credentials2"/>';
      }
      ?>
      <br><br>
			<p class="credentials_text2">Last Name:</p><br>
      <?php
      if (isset($_GET['last'])) {
        $last = $_GET['last'];
        echo '<input name="last" type="text" class="credentials2" value="'.$last.'"/>';
      }
      else{
        echo '<input name="last" type="text" class="credentials2"/>';
      }
      ?>
      <br><br>
      <p class="credentials_text2">Email:</p><br>
      <?php
      if (isset($_GET['email'])) {
        $email = $_GET['email'];
        echo '<input name="email" type="text" class="credentials2" value="'.$email.'"/>';
      }
      else{
        echo '<input name="email" type="text" class="credentials2"/>';
      }
      ?>
      <br><br>
			<p class="credentials_text2">Username:</p><br>
      <?php
      if (isset($_GET['usrname'])) {
        $usrname = $_GET['usrname'];
        echo '<input name="usrname" type="text" class="credentials2" value="'.$usrname.'"/>';
      }
      else{
        echo '<input name="usrname" type="text" class="credentials2"/>';
      }
      ?>
      <br><br>
				<p class="credentials_text2">Password:</p><br><input name="pswrd" type="password" class="credentials2"/><br><br>
				<p class="credentials_text2">Confirm Password:</p><br><input name="cnfrmpswrd" type="password" class="credentials2"/><br><br>
				<br>
				<input class="button" name="submit" type="submit" value="Sign up">
				<br><br><br>
			</form>
      
      <?php
      
      if (!isset($_GET['signup'])) {
        exit();
      }
      else{
        $checkMessage = $_GET['signup'];
        if($checkMessage == "empty"){
          echo "<p style='color:red'> You did not fill in all fields</p>";
          exit();
        }
      elseif($checkMessage == "nomatch"){
          echo "<p style='color:red'> Password is not matching with its confirmation</p>";
          exit();
      }
      elseif($checkMessage == "email"){
          echo "<p style='color:red'> Your Email cannot be verified</p>";
          exit();
      }
        elseif($checkMessage == "invalid"){
          echo "<p style='color:red'> You cannot use numeric values and signs in your first and last name</p>";
          exit();
      }
        
        elseif($checkMessage == "userexists"){
          echo "<p style='color:red'> User already Exists</p>";
          exit();
      }
        
        elseif($checkMessage == "emailtaken"){
          echo "<p style='color:red'> Email is already taken</p>";
          exit();
      }
        
        elseif($checkMessage == "success"){
          echo "<p style='color:green'> Signup successful</p>";
          exit();
        }
        
      }
        ?>
		</div>
	</div>
</div>


<!-- footer -->


<!DOCTYPE html>
<head>
    <link rel='stylesheet' type ='text/css' href='../styles/front.css'>
</head>
<body>
 <div id="banner">

  GAUSSCHAIN 
  
 </div>
 <?php if(!array_key_exists('email',$_COOKIE)) {?>
  <!-- not needed, it's effing registration-->
<?php } 

 else { ?>
 <!-- ibid -->
<?php } ?>
<ul id="contents">
      <li class="top"> <a href='..'> Home </a> </li>
      <li class="top"> <a href='problems.php'>Chains</a>  </li>  
      <li class="top"> Rankings </li>
      <li class="top"> <a href='forum.php'>Forum</a> </li>
</ul>
<!--
<form name="register" action="register.php" method="post" accept-charset="utf-8">
        <p>Your email<input type="email" class="emailfield" name="email"></p>
        <p>Password<input type="password" class="passwordfield" name="password"></p>
        <p>Password (type again)<input type="password" name="rpassword"></p>
        <input type='submit' name='Submit' value='Create account'>
</form>
-->
<p style='text-align: center;'> Registration is closed at the moment.</p>
<footer>
      <br><br>
      <p style="float: right">&copy; Copyright 2013 <span style="color: #FF7400;"> Gauss Chain </span></p>
      <p style="float: left;">Founded by <span style="color: #FF7400;"> Brevin Wankine </span> </p>
</footer>
</body>
</html>
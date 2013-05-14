<!DOCTYPE html>
<head>
    <link rel='stylesheet' type ='text/css' href='../styles/front.css'>
</head>
<body>
 <div id="banner">

  GAUSSCHAIN 
  
 </div>
 <?php if(!array_key_exists('email',$_COOKIE)) {?> 
  <aside id="login">
        <form action="../pages/login.php" method="get" accept-charset="UTF-8">
          <p><b>Email</b> <br> <input type="email" class="emailfield" name="email" size="30" maxlength="30" placeholder="Enter your email address"> <br>
          <b>Password</b> <br> <input type="password" class="passwordfield" name="password" size="30" maxlength="30" placeholder="Enter your password"> </p>
          <p><input type="submit" name="submit" value="Login"></p> 
        </form>  
  </aside>
  <aside id="register">
          <p><a href='registration.php'>REGISTER</a></p>
  </aside>
<?php } 

 else { ?>
  <aside id='login'>
    <p><?php echo 'Welcome to GC, '.$_COOKIE['email']; ?> <p>
    <form name='logout' method='get' action='logout.php'><input type='submit' value='LOGOUT'></form>
  </aside>
<?php } ?>
<ul id="contents">
      <li class="top"> <span> Home </span> </li>
      <li class="top"> <a href='../pages/problems.php'>Chains</a>  </li>  <li class="top"> Rankings </li>
      <li class="top"> <a style="color: #FF7400;">Forum</a> </li>
</ul>
<form style='text-align: center;' name='create_thread' action='create_thread.php' method='post' accept-charset='utf-8'>
	<span>Name</span>
	<input type='text' name='title' style='text-indent: left;'>
	<br><br>
	<textarea name='comment' rows='15' cols='50'></textarea>
	<br>
	<input type='Submit' name='Submit' value='Create Thread'>
</form>
<footer>
      <br><br>
      <p style="float: right">&copy; Copyright 2013 <span style="color: #FF7400;"> Gauss Chain </span></p>
      <p style="float: left;">Founded by <span style="color: #FF7400;"> Brevin Wankine </span> </p>
</footer>
</body>
</html>
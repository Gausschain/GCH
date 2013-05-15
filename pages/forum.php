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
          <p><b>Name</b> <br> <input type="text" class="emailfield" name="email" size="30" maxlength="30" placeholder="Enter your email address"> <br>
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
      <li class="top"> <a href='..'> Home </a> </li>
      <li class="top"> <a href='../pages/problems.php'>Chains</a>  </li>  
      <li class="top"> Rankings </li>
      <li class="top"> <a style="color: #FF7400" href="forum.php">Forum</a> </li>
</ul>
<section class='forum'>
  <?php 
    require 'database.php';
    $query='SELECT DISTINCT username,thread,time FROM forum WHERE TRUE';
    $results=pg_query($dbconn,$query);
    $n=pg_num_rows($results);
    for($i=0;$i<$n;$i++) {
      $out=pg_fetch_array($results,$i);
      echo "<p style='font-size: 115%;'><a style='color: #FF7400;' href='./thread.php?thread=".$out['thread']."'>".$out['thread']."</a><br><span style='font-size: 80%;'>by ".$out['username']." at ".$out['time']."</span></p>";
    }
  ?>
  <a style="float: right;" href="threadcreation.php">Create</a>
</section>
<footer>
      <br><br>
      <p style="float: right">&copy; Copyright 2013 <span style="color: #FF7400;"> Gauss Chain </span></p>
      <p style="float: left;">Founded by <span style="color: #FF7400;"> Brevin Wankine </span> </p>
</footer>



</body>
</html>
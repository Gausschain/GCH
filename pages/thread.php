<?php 
  require '../pages/database.php';
    $thread=$_GET['thread'];
    $query="SELECT * FROM forum WHERE thread='$thread'";
    $result=pg_query($dbconn,$query);//$db->query($query);
    if(!pg_fetch_array($result)) {
      echo "The page you requested does not exist, dumbass.";
      exit();
    }
?>
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
      <li class="top"> <a style="color: #FF7400"; href="forum.php">Forum</a> </li>
</ul>
<?php echo "<h2 style='text-align: center;'>".$_GET['thread']."</h2>";?>
<section id='responses'> 
  <?php
        $i=pg_num_rows($result);
        for($j=0;$j<$i;$j+=1) {
          $out=pg_fetch_array($result,$j); //$db->query($query);
  ?>
          <?php echo '&nbsp;'.$out[3]; ?> <br>
            <p> <?php echo $out[2]; ?></p></td>
            
          <br>
      <?php               } ?>
      <br>
</section>
<?php $path='../pages/post_in_thread.php?thread='.$thread;?>
<?php if(array_key_exists('email',$_COOKIE)) {?>
<form style="text-align: center" name='talk' action="<?php echo $path;?>" method='post' accept-charset='utf-8'>
        <textarea name='comment' rows="5" cols="50"></textarea>
        <input name='Submit' type='submit' value='Submit'>
</form>
<?php } ?>
<footer>
      <br><br>
      <p style="float: right">&copy; Copyright 2013 <span style="color: #FF7400;"> Gauss Chain </span></p>
      <p style="float: left;">Founded by <span style="color: #FF7400;"> Brevin Wankine </span> </p>
</footer>


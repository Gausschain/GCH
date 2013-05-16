<?php 
      require '../database.php';
      $query="SELECT * FROM problems order by ID";
      $result=pg_query($dbconn,$query);
      $currproblem=$_GET['problem'];
    ?>
<!DOCTYPE html>
<html>
<head>
    <?php if($_COOKIE['theme']=='dark') {?>
      <link rel='stylesheet' type ='text/css' href='../../styles/front.css' title='dark'>
    <?php } 
    else {?>
      <link rel='stylesheet' type ='text/css' href='../../styles/light.css' title='light'>
    <?php } ?>
    <script type="text/x-mathjax-config">
        MathJax.Hub.Config({
        tex2jax: {
          inlineMath: [['$','$'], ['\\(','\\)']],
          processEscapes: true
        }
      });
    </script>
    <script type="text/javascript"
        src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
    </script>
</head>
<body>
 <div id="banner">

  GAUSSCHAIN 
  
 </div>
 <?php if(!array_key_exists('email',$_COOKIE)) {?> 
  <aside id="login">
        <form action="../login.php" method="get" accept-charset="UTF-8">
          <p><b>Name</b> <br> <input type="text" class="emailfield" name="email" size="30" maxlength="30" placeholder="Enter your name"> <br>
          <b>Password</b> <br> <input type="password" class="passwordfield" name="password" size="30" maxlength="30" placeholder="Enter your password"> </p>
          <p><input type="submit" name="submit" value="Login"></p> 
        </form> 
        <?php if($_COOKIE['theme']=='dark') {?>
    <form name='style' action='../changestyle.php' method='post'>
      On <input type="radio" name="theme" value="light" id="light">
      Off <input type="radio" name="theme" value="dark" id="dark" checked='checked'>
           <input type="submit" value="Change">
    </form> 
    <?php }
     else {?>
      <form name='style' action='../changestyle.php' method='post'>
      On <input type="radio" name="theme" value="light" id="light" checked='checked'>
      Off <input type="radio" name="theme" value="dark" id="dark">
           <input type="submit" value="Change">
    </form> 
    <?php } ?> 
  </aside>
  <aside id="register">
          <p><a href='/../registration.php'>REGISTER</a></p>
  </aside>
<?php } 

 else { ?>
  <aside id='login'>
    <p><?php echo 'Welcome to GC, '.$_COOKIE['email']; ?> <p>
    <form name='logout' method='get' action='../logout.php'><input type='submit' value='LOGOUT'></form>
  </aside>
<?php } ?>
<ul id="contents">
      <li class="top"> <a href='../'> Home </a> </li>
      <li class="top"> <a id='crucial';>Chains</a>  </li>  
      <li class="top"> Rankings </li>
      <li class="top"> <a href='../forum.php'>Forum</a> </li>
</ul>
<!--
<section class='problem_description'>
  <p>
      Legend has it that a young Carl Gauss was so annoyingly precocious that Mr. Mathieson (his teacher)
        tasked him with adding up the first 100 numbers just to shut him up for a while.  
      To Mr. Mathieson's frustration, Gauss yelled out the answer a moment later. 
  </p>
</section>
<section class='problem_description'>
  <p>
      What is $1+2+...+100$?
  </p>
</section> -->
<h2 style="text-align: center; font-family: Monospace;">Pascal's Triangle</h2>
<h3 style="text-align: center; font-family: Monospace; font-size: 130%;">Problem <?php echo $currproblem; ?></h3>
<?php 
require '../database.php';
$statement="SELECT problem FROM problems_text where id=$currproblem";
$r=pg_query($dbconn,$statement);
$bg=pg_fetch_array($r);
$bg=$bg[0];
echo $bg;
?>
<div id='answer'>
    <br>
    <br>
    <?php
      require "../database.php";
      $email=$_COOKIE['email'];
      $query="SELECT * FROM accounts WHERE username='$email'";
      $outcome=pg_query($dbconn,$query);
      $outcome=pg_fetch_array($outcome);
      $solved=$outcome['chain1'];
    ?>
    <?php if($solved[$currproblem-1]=='0') { ?>
      <form name="solution" action="../grade.php" method="get" accept-charset="utf-8">
        <input type='text' name='solution'>
        <input type='submit' name='Submit' value=<?php echo $currproblem;?>>
      </form> 
    <?php } ?>
</div>
<footer>
      <br><br>
      <p style="float: right">&copy; Copyright 2013 <span style="color: #FF7400;"> Gauss Chain </span></p>
      <p style="float: left;">Founded by <span style="color: #FF7400;"> Brevin Wankine </span> </p>
</footer>
</body>
</html>
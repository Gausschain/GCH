<!DOCTYPE html>
<head>
    <link rel='stylesheet' type ='text/css' href='../../styles/front.css'>
    <script type="text/x-mathjax-config">
        MathJax.Hub.Config({
        tex2jax: {
          inlineMath: [['$','$'], ['\\(','\\)']],
          processEscapes: true
        }
      });
    </script>
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
<section class='problem_description'>
    <p>
      Legend has it that a young Carl Gauss was so annoyingly precocious that Mr. Mathieson (his teacher)
        tasked him with adding up the first 100 numbers just to shut him up for a while.  
      To Mr. Mathieson's frustration, Gauss yelled out the answer a moment later. 
    </p>
  </section>
<section class="problem_description">
    <p>
      What is $1+2+...+100$?
    </p>
</section>
<footer>
      <br><br>
      <p style="float: right">&copy; Copyright 2013 <span style="color: #FF7400;"> Gauss Chain </span></p>
      <p style="float: left;">Founded by <span style="color: #FF7400;"> Brevin Wankine </span> </p>
</footer>
</body>
</html>
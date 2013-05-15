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
          <p><b>Name</b> <br> <input type="text" class="emailfield" name="email" size="30" maxlength="30" placeholder="Enter your name"> <br>
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
      <li class="top"> <span><a style="color: #FF7400;" href="."> Home </a></span> </li>
      <li class="top"> <a href='../pages/problems.php'>Chains</a>  </li>  <li class="top"> Rankings </li>
      <li class="top"> <a href='forum.php'>Forum</a> </li>
</ul>
<section> 
          <!--List containing the "FAQ" -->
          <ul>
            <li><h2 class="question">If I do a Gauss Chain, what will I get?</h2></li>
            <!--<p><img src="images/Gauss_11.jpg" alt="Gauss pic" width=100 height=100></p>-->
            <p> If you don't become as good at math as Gauss, we guarantee your money back.
              Ok, to be fair, you probably won't become Gauss. But, who cares? Gauss is dead, and you're not. Now stop bitching, 
              and start solving problems.
            </p> 
            <li><h2 class="question">Why can't I write a computer program to solve a problem?</h2></li>
            <p> You can. But we think you'll find that, for many problems, the restriction that your solution be found by hand pushes you toward an elegant method that exploits a 
            fundamental pattern. </p>
            
            <p> With technology outlawed you won't need to consider thorny questions of computational complexity, proper syntax, or whether to instantiate long integers after all.  
            We hope this will hasten your journey to the fringes of your creative ability and to the 
            beautiful ideas that make mathematics worthwhile. </p>
            <li><h2 class="question">What happens if I do use technology? </h2></li>
            <p>An excruciatingly painful death will befall you, I'm afraid.</p>
            <li><h2 class="question"> How mathematically mature do I need to be?</h2></li>
            <p>Yes.</p>
            <li><h2 class="question">Why "Chain"?</h2></li>
            <p>The problems within any chain get progressively more challenging.  If you start with the first problem and work your way down, you will gradually accumulate the domain-specific knowledge and general
             problem solving ability required to complete the chain.</p>
            <li><h2 class="question">Why Gauss? Bruh, why not that Euler guy?</h2></li>
            <p><a href="http://www.projecteuler.net">Euler was taken :( </a></p>
            
          </ul>
        </section>
<footer>
      <br><br>
      <p style="float: right">&copy; Copyright 2013 <span style="color: #FF7400;"> Gauss Chain </span></p>
      <p style="float: left;">Founded by <span style="color: #FF7400;"> Brevin Wankine </span> </p>
</footer>
</body>
</html>
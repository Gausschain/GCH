<?php 
    require 'email.php';
    if(array_key_exists('email',$_COOKIE)) {
        require 'database.php';
        $email=$_COOKIE['email'];
        //$_COOKIE['num_solved']=pg_fetch_array(pg_query($dbconn,"SELECT num_solved FROM accounts where email='$email'"))[0];
    }
?> 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Gauss Chain</title>
        <link rel="stylesheet" href="../styles/default.css">
        <style>     
            img {
                float: left; 
                margin-right:5%;
            }
        </style> 
    </head>
    <body>
        <header>
            <h1 style="font-family: monospace">G-A-U-S-S-C-H-A-I-N-S</h1> <!-- bbf-->
        </header>
        <aside>
            <?php if(!array_key_exists('email',$_COOKIE)) {?>
               <div class="loginlogout">
                   <form id='login' action="./login.php" method="get" accept-charset="UTF-8">
                        <h4 style="text-align: center;">Sign In</h4>
                        <p><b>Email</b> <br> <input type="email" class="emailfield" name="email" placeholder="Enter your email address"> <br>
                        <b>Password</b> <br> <input type="password" class="passwordfield" name="password" placeholder="Enter your password"> </p>
                        <p><input type="submit" name="submit" value="Login"></p>
                        <p><a href="./registration.php">First time user? Click here to register!</a></p>
                    </form>
               </div>
            <?php } 

            else { ?>
               <div class="loginlogout">
                    <p><?php echo $_COOKIE['email']?> <form name='logout' method='get' action='logout.php'><input type='submit' value='LOGOUT'></form> </p>
               </div>
               <div id="otherlinks">
                        <p>You have solved <?php echo $_COOKIE['num_solved']?> problems so far! <br>
                        <a href="problems.php">Here are the current problems.</a> <br>
                        <a href="forum.php">Discussion thread</a> </p>
                    
                </div>
            <?php } ?>
            <br>
        </aside>
        <!-- 
        <aside class='left_side_bar'>
            <p>Hey man, pass the potato salad.</p>
            <p>Hey man, pass the potato salad.</p>
            <p>Hey man, pass the potato salad.</p>
            <p>Hey man, pass the potato salad.</p>
            <p>Hey man, pass the potato salad.</p>
            <p>Hey man, pass the potato salad.</p>
            <p>Hey man, pass the potato salad.</p>
        </aside>
        -->
        <section> 
            <!--List containing the "FAQ" -->
            <ul>
                <li><h2 class="question">If I do a Gauss Chain, what will I get?</h2>
                    <p><img src="../images/Gauss_11.jpg" alt="Gauss pic" width=100 height=100></p>
                </li>
                <!--<p><img src="images/Gauss_11.jpg" alt="Gauss pic" width=100 height=100></p>-->
                <p> Basically, Gauss. Seriously. If you don't become as good at math as that guy, we guarantee your money back (not that we'd take any).
                    Ok, to be fair, you probably won't become Gauss. But, who cares? Gauss is dead, and you're not. Now stop moping about, 
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
            <p style="float: right">&copy; Copyright 2013 Gauss Chains</p>
            <p style="float: left">Founded by Brevin Wankine</p>
        </footer>
    </body>
</html>
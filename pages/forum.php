<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" href="../styles/default.css">	
	</head>
	<body>
		<header>
			<h1>Discussion</h1>
		</header>
		<aside>
        	<div class="loginlogout">
        		<?php if(!array_key_exists('email',$_COOKIE)) {?>
        	
        				<form id='login' action="login.php" method="get" accept-charset="UTF-8">
							<p>Enter your email address to login</p>
							<p>email: <input type="text" name="email" placeholder="Enter your email address"> <br>
							pass: <input type="password" name="password" placeholder="Enter your password"> </p>
							<p><input type="submit" name="submit" value="Login"></p>
							<p><a href="http://localhost/GC/pages/registration.html">First time user? Click here to register!</a></p>
						</form>
        				<!--<p id="loginref"><a href="pages/login.html">Click here to login</a></p> -->
       	 	
       			<?php } 
       			else { ?>
        	
        				<p><?php echo $_COOKIE['email']?> <form name='logout' method='get' action='logout.php'><input type='submit' value='LOGOUT'></form> </p>
       		
       			<?php } ?>
       		</div>
       		<?php if(array_key_exists('email',$_COOKIE)) {?>
       			<div id="otherlinks">
       					<p>You have solved <?php echo $_COOKIE['num_solved']?> problems so far! <br>
        				<a href="problems.php">Here are the current problems.</a> <br>
        				<a href="forum.php">Discussion thread</a> </p>
        			
       			</div>
       		<?php } ?>
       	</aside>
		<section class='discussion'>
			<?php
				require 'database.php';
				$query="SELECT * FROM posts";
				$result=pg_query($dbconn,$query);//$db->query($query);
				$i=pg_num_rows($result);
				for($j=0;$j<$i;$j+=1) {
					$out=pg_fetch_array($result,$j); //$db->query($query);
			?>
					<table>
						<tr>
							<td><p><?php echo $out[0]; ?></p></td>
							<td><p><?php echo $out[1]; ?></p></td>
						</tr>
					</table>
					<br>
			<?php 							} ?>
		</section>
			<br>
			<form style="text-align: center" name='talk' action='post_in_forum.php' method='post' accept-charset='utf-8'>
				<textarea name='comment' rows="5" cols="50"></textarea>
				<input name='Submit' type='submit' value='Submit'>
			</form>
	</body>
</html>
<?php
	//require 'database.php';
	$email=$_GET['email'];
	$pass=$_GET['password'];
	$name1='email';
	$name2='pass';
	$name3='num_solved';
	$dbconn = pg_connect("host=ec2-54-235-155-182.compute-1.amazonaws.com port=5432 dbname=dclj9rk36fm9o8 user=ujskwnhqnlkrmx password=vp2Rdxwj-U58-BIVWUUhRkP6_8 sslmode=require options='--client_encoding=UTF8'") or die('Could not connect: ' . pg_last_error());
	$query="SELECT num_solved FROM accounts
			WHERE email='$email' AND password='$pass'";
	$ns=pg_query($dbconn,$query);//$db->query($query);
	$numsolved=$ns->fetch();
	if(!$numsolved) {
		echo "<p style='font-size: 24px'>You made a mistake, goofer!</p>";
		exit();
	}
	setcookie($name1,$email,0,'http://localhost/GC/');
	setcookie($name2,$pass,0,'http://localhost/GC/');
	setcookie($name3,$numsolved[0],0,'http://localhost/GC/');
	$_GLOBALS['currproblem']=1;
	header('Location: ..');
	exit(); 
?>
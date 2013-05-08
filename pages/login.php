<?php
	require 'database.php';
	$email=$_GET['email'];
	$pass=$_GET['password'];
	$name1='email';
	$name2='pass';
	$name3='num_solved';
	$query="SELECT num_solved FROM accounts
			WHERE email='$email' AND password='$pass'";
	$ns=$db->query($query);
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
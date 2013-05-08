<?php 
	$dsn='mysql:host=localhost;dbname=gausschains';
	$username='kevinranks';
	$password='godofwar74';
	
	$db=new PDO($dsn,$username,$password);
	$email=$_POST['email'];
	$pass=$_POST['password'];
	if($pass!=$_POST['rpassword']) {
		echo "<p style='font-size: 24px'>You made a mistake, goofer!</p>";
	}
	
	$query="SELECT email FROM accounts";
	$arr=$db->query($query);
	foreach($arr as $e) {
		if($e[0]==$email) {
			echo "THAT NAME IS TAKEN!";
			exit();
		}
	}
	
	$exec="INSERT INTO accounts (email,password,num_solved)
		   VALUES ('$email','$pass',0)";
	$accs=$db->exec($exec);
	$name1='email';
	$name2='pass';
	$name3='num_solved';
	setcookie($name1,$email,0,'http://localhost/GC/');
	setcookie($name2,$pass,0,'http://localhost/GC/');
	setcookie($name3,0,0,'http://localhost/GC/');
	mail($email,'GaussChains','Thank you for registering for Gauss Chains');
	header('Location: ..');
	end();
?>
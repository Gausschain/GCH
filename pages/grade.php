<?php
	require 'database.php';
	$solution=$_GET['solution'];
	$problem_number=$_GET['Submit'];
    $query="SELECT * FROM problems
			WHERE ID='$problem_number'";
	$problems=pg_query($dbconn,$query);
	$ourproblem=pg_fetch_array($problems);
	$real_solution=$ourproblem['solution'];
	if($real_solution==$solution) {
		echo "<p>What's good?</p>";
		$email=$_COOKIE['email'];
		$query="SELECT chain1 FROM accounts WHERE 
				email='$email'";
		$chain1=pg_query($query);
		$chain1=pg_fetch_array($chain1);
		$chain1=$chain1[0];
		$chain1[$problem_number-1]=1;
		$command="UPDATE accounts
				SET num_solved=num_solved+1,chain1=$chain1
				WHERE email='$email'";
		pg_query($dbconn,$command);//$db->exec($command);
		
		/* $query="SELECT num_solved from accounts
				WHERE email='$email'";
		$ns=$db->query($query);
		$ns=$ns->fetch();
		$ns=$ns[0];
		$ns+=1;
		setcookie("num_solved",$ns,0,"http://localhost/GC"); */
		
		$command="UPDATE problems
				  SET num_solutions=num_solutions+1
				  WHERE ID=$problem_number";
		pg_query($dbconn,$command);//$db->exec($command);
	}
	else {
		echo "<p>Ouch?</p>";	
	}
	echo"<br>";
	echo "<p><a href='./'>home</a></p>";
	exit();
?>
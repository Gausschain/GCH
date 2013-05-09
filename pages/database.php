<?php
			/*$dsn='mysql:host=localhost;dbname=gausschains';
			$username='kevinranks';
			$password='';
	
			$db=new PDO($dsn,$username,$password); */
			
			# This function reads your DATABASE_URL configuration automatically set by Heroku
	# the return value is a string that will work with pg_connect
	function pg_connection_string() {
  		return "dbname=dclj9rk36fm9o8 host=ec2-54-235-155-182.compute-1.amazonaws.com port=5432 user=ujskwnhqnlkrmx password=vp2Rdxwj-U58-BIVWUUhRkP6_8 sslmode=require";
	}
 
	# Establish db connection
	$db = pg_connect(pg_connection_string());
	if (!$db) {
   		echo "Database connection error."
   		exit;
	}
 
	//$result = pg_query($db, "SELECT statement goes here");
?>
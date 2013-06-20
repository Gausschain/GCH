<?php 
	$dbconn = pg_connect("host=ec2-54-235-155-182.compute-1.amazonaws.com port=5432 dbname=dclj9rk36fm9o8 user=ujskwnhqnlkrmx password=vp2Rdxwj-U58-BIVWUUhRkP6_8 sslmode=require options='--client_encoding=UTF8'") or die('Could not connect: ' . pg_last_error());
	function INSERT($values,$table,$db) {
    	$statement="INSERT INTO $table VALUES (";
		foreach($values as $value) {
			$statement.="'".$value."',";
		}
		$statement=substr($statement,0,strlen($statement)-1).')';
        echo $statement;
		pg_query($db,$statement);
	}
?>

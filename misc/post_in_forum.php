<?php 
	require 'database.php';
	$email=$_COOKIE['email'];
	$submission=$_POST['comment'];
	$new_submission="";
    $command="INSERT INTO posts (username,comment)
			  VALUES ('$email','$submission')";
	pg_query($dbconn,$command);//$db->exec($command);
	header("Location: forum.php");
?>
<?php 
	require 'database.php';
	$email=$_COOKIE['email'];
	$submission=$_POST['comment'];
	$new_submission="";
    $command="INSERT INTO posts (user,comment)
			  VALUES ('$email','$submission')";
	$db->exec($command);
	header("Location: forum.php");
?>
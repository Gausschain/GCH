<?php 
	require 'database.php';
	$comment=$_POST['comment'];
	$email=$_COOKIE['email'];
	$thread=$_GET['thread'];

	$query="SELECT * from forum WHERE thread='$thread'";
	$res=pg_query($dbconn,$query);
	$id=pg_num_rows($res);
	$query="INSERT INTO forum VALUES
			('$id','$thread','$comment','$email')";
	pg_query($dbconn,$query);

	header("Location: ./thread.php?thread=".$thread);
	exit();
?>
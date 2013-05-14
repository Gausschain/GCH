<?php 
require 'database.php';
$comment=$_POST['comment'];
$email=$_COOKIE['email'];
$thread=$_POST['title'];

$query="INSERT INTO forum VALUES
			('0','$thread','$comment','$email')";
	pg_query($dbconn,$query);
	header('Location: ./thread.php?thread='.$thread);
	exit();
?>
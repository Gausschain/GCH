<?php 
require '../database.php';
//&#39;
$text='';
$statement="INSERT INTO problems_text VALUES (1894273401873274234,'$text')";
pg_query($dbconn,$statement);	
echo $text;	
?>
<?php 
	$expire = strtotime('-1 year');
	setcookie('email','',$expire);
	setcookie('pass','',$expire);
	header('Location: ..');
 ?>
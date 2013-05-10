<!DOCTYPE HTML>
<html>
	<head>	
		<link rel="stylesheet" href="../styles/problems.css">
	</head>
	<body>
		<header>
			<h1>&nbsp; &nbsp; &nbsp; &nbsp;Primary Repository of Problems</h1>
		</header>
		<?php
			require 'database.php';
			$query="SELECT * FROM problems";
			$result=pg_query($dbconn,$query);
		?>
		 <?php if(array_key_exists('email',$_COOKIE)) {?>
        	<aside>
        		<p><?php echo $_COOKIE['email']?> <form name='logout' method='get' action='logout.php'><input type='submit' value='LOGOUT'></form> </p>
       		</aside>
       	<?php } ?>
		<table>
			<tr>
				<th>Problem ID</th>
				<th>Problem Title</th>
				<th>Problem Description</th>
				<th>Number of solutions</th> <!-- embed php here -->
			</tr>
			<?php $rows=pg_num_rows($result); ?>
			<?php for($count=1;$count<=$rows;$count+=1) { ?>
				<?php $name='./problems/'.$count.'.php'; $problem=pg_fetch_array($result,$count-1);?>
				<tr>
					<td><?php echo '<a href="'.$name.'">'.$count.'</a>'?></td>
					<td><?php echo $problem[1];?></td>	
					<td><?php echo $problem[2];?></td>	
					<td><?php echo $problem[3];?></td>	
				</tr>
			<?php } ?>
		</table>
		
	</body>
</html>
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
			$problems=$db->query($query);
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
			<?php $count=0; ?>
			<?php foreach($problems as $problem) { $count++;?>
				<?php $name='http://localhost/GC/pages/problems/'.$count.'.php'; ?>
				<tr>
					<td><?php echo '<a href="'.$name.'">'.$count.'</a>'?></td>
					<td><?php echo $problem['Name']?></td>	
					<td><?php echo $problem['Description']?></td>	
					<td><?php echo $problem['num_solutions']?></td>	
				</tr>
			<?php } ?>
		</table>
		
	</body>
</html>
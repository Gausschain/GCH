<!DOCTYPE html>
<html>
	<head>
		<?php $currproblem=4;?>
		<title>Pascal's Triangle</title>
		<script type="text/x-mathjax-config">
  			MathJax.Hub.Config({
				tex2jax: {
	  			inlineMath: [['$','$'], ['\\(','\\)']],
	  			processEscapes: true
				}
			});
		</script>
	
		<script type="text/javascript"
  			src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
		</script>
		<link rel="stylesheet" href="problem.css">
	</head>
<body style="background-color: black">
	<header id='joog'>
		<p><?php echo "$currproblem"; ?></p>
		<p style="font-family: Monospace; color: #FF6600; font-size: 40px;text-align: center;"> G-A-U-S-S-C-H-A-I-N<br> 
			<span style="font-family: Monospace; font-size: 24px; color: green;text-align: center;"><i>Pascal's Triangle</i> </span> </p>
	</header>
	<header>
		<h2 style="font-family: Monospace; color: white;text-align: center;">Problem <?php echo $currproblem ?> </h2>
	</header>
	<section class='problem_description'>
		<p>
			Partitioning a group of identical objects into several distinct buckets is equivalent to lining up the objects and placing dividers in the gaps between them.	
		</p>
	</section>
	<section class="problem_description">
		<p>
			How many solutions $(a_1,a_2,a_3,a_4)$ are there to the equation $a_1+a_2+a_3+a_4=102$ if all $a$'s are integers greater than or equal to 1?	
		</p>
	</section>
	<section>
		<br>
		<br>
		<?php
			require "../database.php";
			$email=$_COOKIE['email'];
			$query="SELECT chain1 FROM accounts WHERE email='$email'";
			$outcome=$db->query($query);
			$outcome=$outcome->fetch();
			$solved=$outcome['chain1'];
		?>
		<?php if($solved[$currproblem-1]=='0') { ?>
			<form name="solution" action="http://localhost/GC/pages/grade.php?currproblem=1" method="get" accept-charset="utf-8">
				<input type='text' name='solution'>
				<input type='submit' name='Submit' value='<?php echo $currproblem; ?>'>
			</form>	
		<?php } ?>
	</section>
</body>
</html>
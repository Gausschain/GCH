<!DOCTYPE html>
<html>
	<head>
		<?php $currproblem=7;?>
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
			Considering each entry in Pascal's Triangle as the number of ways to block walk from the top to that entry gives rise to many interesting identities.  To walk to $\dbinom{4}{3}$ we must first take a path to $\dbinom{3}{2}$ or $\dbinom{3}{3}.$  Once at either of these entries there is only one way to move down to our destination.  Since the set of paths to $\dbinom{3}{2}$ and the set of paths to $\dbinom{3}{3}$ are disjoint, we get that $\dbinom{4}{3}=\dbinom{3}{2}+\dbinom{3}{3}.$  This simple fact gives rise to the algorithm for writing down Pascal's triangle one row at a time. 
			<p>
				There are several other ways to split up cases that yield neat identities.  For example, once you make your last right turn, there is just one way to get down to your destination. 
			</p>
		</p>
	</section>
	<section class="problem_description">
		<p>
			Beginning at the top of Pascal's triangle, how many paths can you take that pass through <strong> Row 5 :: Entry 2 </strong> and <strong> Row 14 :: Entry 6 </strong> and terminate at <strong> Row 22 :: Entry 9?</strong> 
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
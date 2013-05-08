<!DOCTYPE html>
<html>
	<head>
		<?php $currproblem=3;?>
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
			<p>
				Define nPk to be the number of $k$-element lists with no repeated terms you can form from an $n$-element set.  <br>There are $n$ options for the first entry in a list,  $n-1$ options for the second and so on.  So we have:
			</p>
			<p align="center">
				nPk $=(n)(n-1)(n-2)...(n-k+1)=\dfrac{n!}{(n-k)!}$
			</p>
			<p>
				Define $\dbinom{n}{k}$ to be the number of $k$-element subsets of an $n$-element set.  
				The order of the elements in a set is irrelevant: <br>$\left\{ {1,2,3} \right\}$ = $\left\{ {2,1,3} \right\}.$  
				Permuting the elements of any such subset generates several $k$-element lists with no repeated terms. <br>
			</p>
			<br>
		</p>
	</section>
	<section class="problem_description">
		<p>
			What is $\dbinom{12}{5}?$
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
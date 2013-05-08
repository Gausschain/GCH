<!DOCTYPE html>
<html>
	<head>
		<?php $currproblem=6;?>
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
		<p style="font-family: Monospace; color: #FF6600; font-size: 35px;text-align: center;"> G-A-U-S-S-C-H-A-I-N:<br> 
			<span style="font-family: Monospace; font-size: 24px; color: green;text-align: center;"><i>Pascal's Triangle</i> </span> </p>
	</header>
	<header>
		<h2 style="font-family: Monospace; color: white;text-align: center;">Problem <?php echo $currproblem ?> </h2>
	</header>
	<section class='problem_description'>
		<p>
			Each $k$-element subset of an $n$-element set is associated naturally with an $(n-k)$- element subset comprising those elements not included in the $k$-element subset. 
		</p>
	</section>
	<section class="problem_description">
		<p>
			Define $X=\dbinom{85}{1}+2\dbinom{85}{2}+3\dbinom{85}{3}+...+ 85\dbinom{85}{85}$ and let $p_{1}^{a_{1}}p_{2}^{a_{2}}p_{3}^{a_{3}}...p_{n}^{a_{n}}$ be a prime factorization of $X.$
			<br><br>
			What is $(p_{1})(a_{1})(p_{2})(a_{2})...(p_{n})(a_{n})?$
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
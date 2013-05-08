<!DOCTYPE html>
<html>
	<head>
		<?php $currproblem=14;?>
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
			If we use the distributive property to completely expand $(a+b)^n,$ we get a giant sum of terms that look like $a^{k}b^{n-k}.$  Each term is formed by choosing either $a$ or $b$ from each of the $n$ factors and then multiplying them all together. Consolidating terms with the same value of $k$, $$(a+b)^n=(x_{n})a^{n}b^{0}+(x_{n-1})a^{n-1}b^{1}+(x_{n-2})a^{n-2}b^{2}+...+(x_0)a^{0}b^{n}.$$
			<p>
				What is $x_{k},$ the coefficient of $a^{k}b^{n-k}?$  Out of the $n$ factors in the product $(a+b)^{n},$ we must choose k of them from which to pull an $a$ and then pull a $b$ from each of the others.  Therefore $x_{k}=\dbinom{n}{k}.$
			</p>
		</p>
	</section>
	<section class="problem_description">
		<p>
			<p>
				Let $p_{1}^{a_{1}}p_{2}^{a_{2}}p_{3}^{a_{3}}...p_{n}^{a_{n}}$ be a prime factorization of the sum $$\dbinom{513}{0}+\dbinom{513}{2}+\dbinom{513}{4}+...+\dbinom{513}{512}.$$
			</p>
			<p>
				What is $(p_{1})(a_{1})(p_{2})(a_{2})...(p_{n})(a_{n})?$
			</p>
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
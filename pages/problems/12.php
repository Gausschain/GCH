<!DOCTYPE html>
<html>
	<head>
		<?php $currproblem=12;?>
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
			Many interesting results in enumerative combinatorics (advanced counting) can be found by counting the same thing in two different ways.
			<p>
				Suppose you are coordinating a race with $n$ runners.  But instead of creating a logical system for distributing the medals based on performance in the race, you have decided to distribute them randomly.  Of the $m$ medals you have, $15$ are gold and the rest are silver.  You can decide first which $m$ runners will be medalists and then among those choose a $15$-element subset to receive the gold medals.  Alternately, you can pick your gold medalists first and then distribute the $m-15$ silver medals amongst the remaining $n-15$ runners. 
			</p>
			<p>
				The equivalence of the two distribution methods yields the following identity, where 15 may be replaced by anything number less than m:
				$$\dbinom{n}{m}\dbinom{m}{15}=\dbinom{n}{15}\dbinom{n-15}{m-15}. $$
			</p>
		</p>
	</section>
	<section class="problem_description">
		<p>
			Let $X=\dbinom{485}{0}\dbinom{485}{137}+\dbinom{485}{1}\dbinom{484}{136}+\dbinom{485}{2}\dbinom{483}{135}+...+\dbinom{485}{137}\dbinom{348}{0}.$
			<p>
				If $p_{1}^{a_{1}}p_{2}^{a_{2}}p_{3}^{a_{3}}...p_{n}^{a_{n}}$ is a prime factorization of $\dfrac{X}{\dbinom{485}{137}},$ what is $(p_{1})(a_{1})(p_{2})(a_{2})...(p_{n})(a_{n})?$
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
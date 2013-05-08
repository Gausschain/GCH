<!DOCTYPE html>
<html>
	<head>
		<?php $currproblem=15;?>
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
			The multiplication of integer polynomials has a nice combinatorial interpretation.  Note that $$(1+x)(1+x+x^2)=(1)(1)+(1)(x)+(1)(x^2)+(x)(1)+(x)(x)+(x)(x^2).$$  The coefficient of $x^2$ in the product may be interpreted as the numbers of ways to choose a number from a box with $\left\{ {0,1} \right\}$ in it and a number from a box with $\left\{ {0,1,2} \right\}$ in it such that their sum is equal to $2.$  This works because $(x^a)(x^b)=x^{a+b},$ so the various exponents in each factor correspond to the numbers in a box. 
		</p>
	</section>
	<section class="problem_description">
		<p>
			<p>
				60 kids have decided to join funds to purchase a \$75 ice cream machine.  10 generous kids offer to pay either \$6 or \$7.  The other 50 only have a \$1 bill each and would just as soon not pony it up.  Let X be the number of ways the kids can raise the \$75. 
			</p>
			<p>
				If $X=\dbinom{n}{k}$ where $n-k=35$, what is $nk?$
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
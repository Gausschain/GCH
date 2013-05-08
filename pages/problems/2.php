<!DOCTYPE html>
<html>
	<head>
		<?php $currproblem=2;?>
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
			Pascal's triangle is created as follows:
			<p>
				<ul>
					<li>The topmost entry and the entries along the sides of the triangle are 1. </li>
					<li>Each row has one more entry than the last. </li>
					<li>An entry is found by adding up the two numbers to its left and to its right in the row above. </li>
				</ul>
			</p>
			<p>The first six rows of Pascal's triangle are drawn below:</p>
			<div id="pascal">
				1<br>

				1 &nbsp; &nbsp; 1 <br>

				1 &nbsp; &nbsp; 2 &nbsp; &nbsp; 1 <br>

				1 &nbsp; &nbsp; 3 &nbsp; &nbsp; 3 &nbsp; &nbsp; 1 <br>

				1 &nbsp; &nbsp; 4 &nbsp; &nbsp; 6 &nbsp; &nbsp; 4 &nbsp; &nbsp; 1 <br>

				1 &nbsp; &nbsp; 5 &nbsp; &nbsp; 10 &nbsp; &nbsp; 10 &nbsp; &nbsp; 5 &nbsp; &nbsp; 1
			</div>
			For reasons that will soon be clear, we refer to the top row as Row 0 and the leftmost entry of each row as Entry 0.  
			For example, the 6 is called Row 4 :: Entry 2. 
		</p>
	</section>
	<section class="problem_description">
		<p>
			Let $X$ be the sum of the entries in Row 157. <br><br> 
		    Let $X=p_{1}^{a_{1}}p_{2}^{a_{2}}p_{3}^{a_{3}}...p_{n}^{a_{n}}$ be a prime factorization of $X.$ <br><br>
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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Striped Tables - Example 2</title>

<style type="text/css">

table {
	margin: 1em auto 2em 3em;
	border-collapse:collapse;
	border-spacing:0;
	border: 1px solid silver;
	font:70%/1 verdana, sans-serif;
	}
td {
	padding: 0.3em 1.5em;
	}
.odd td {
	background: white;
	}
.even td {
	background: #f0f0ff;
	}

</style>
<script type='text/javascript'>
	window.onload=alert("joog");
	function init() {
          stripe_table();
    }
    function stripe_table() {
    	var table=document.getElementsByTagName("table")[0];
    	var rows=table.getElementsByTagName("tr");
    	for(var i=0;i<rows.length;i++) {
        	rows[i].className+=(i%2==0 ? "even" : "odd");
    	}
    }
      
</script>

</head>
<body>

<h1>Auto-striped table using Javascript</h1>

<h4>Auto-striped table (onload)</h4>

<table id="table1">
	<tr>
		<td>1</td><td>Jan Kovář</td><td>Brno</td>
	</tr>
	<tr>
		<td>2</td><td>John Smith</td><td>New York</td>
	</tr>
	<tr>
		<td>3</td><td>Hans Schmied</td><td>Hamburg</td>
	</tr>
	<tr>
		<td>4</td><td>Kovács János</td><td>Budapest</td>
	</tr>
	<tr>
		<td>5</td><td>Janusz Kowalski</td><td>Krakow</td>
	</tr>
	<tr>
		<td>6</td><td>Jano Kováč</td><td>Bratislava</td>
	</tr>
	<tr>
		<td>7</td><td>Jean Forgeron</td><td>Lyon</td>
	</tr>
	<tr>
		<td>8</td><td>Juan Herrador</td><td>Valladolid</td>
	</tr>
</table>

<h4>Auto-stripe following table on <a href="#" onclick="stripeTableById('table2');return false">click</a></h4>

<table id="table2">
	<tr>
		<td>1</td><td>Jan Kovář</td><td>Brno</td>
	</tr>
	<tr>
		<td>2</td><td>John Smith</td><td>New York</td>
	</tr>
	<tr>
		<td>3</td><td>Hans Schmied</td><td>Hamburg</td>
	</tr>
	<tr>
		<td>4</td><td>Kovács János</td><td>Budapest</td>
	</tr>
	<tr>
		<td>5</td><td>Janusz Kowalski</td><td>Krakow</td>
	</tr>
	<tr>
		<td>6</td><td>Jano Kováč</td><td>Bratislava</td>
	</tr>
	<tr>
		<td>7</td><td>Jean Forgeron</td><td>Lyon</td>
	</tr>
	<tr>
		<td>8</td><td>Juan Herrador</td><td>Valladolid</td>
	</tr>
</table>


<hr />
<p>This example belongs to an Wellstyled.com article.
Please read <a href="/css-striped-tables.html">the article</a> before using this example.
Do not link this example from other web sites.</p>

</body>
</html>
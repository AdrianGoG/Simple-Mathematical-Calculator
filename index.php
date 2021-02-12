<!DOCTYPE html>
<html>
<head>
	<title>Mathematical Calculator</title>
	<meta charset="utf-8">
	<meta name="description" content="Simple Mathematical App">
	<meta name="author" content="App by AdrianGoG">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<h1>Simple Mathematical Calculator</h1><br>

	<form id="assembly">
		<h3>Assembly Operation "+"</h3>
	<input type="text"  placeholder="Value1" autocomplete="off" name="valx" required> 
	<br><br>
	<input type="text" placeholder="Value2" autocomplete="off" name="valy" required>
	<br><br>
	<input type="submit" name="send" value="Calculate!"><br><br>
	<hr>
	<?php 

	if (!empty($_REQUEST)) {

	require_once('engine.php');
	function_assembly();

	}

	?>
</form>



<form id="substraction">
		<h3>Subtraction Operation "-"</h3>
	<input type="text"  placeholder="Value1" autocomplete="off" name="sub1" required> 
	<br><br>
	<input type="text" placeholder="Value2" autocomplete="off" name="sub2" required>
	<br><br>
	<input type="submit" name="goo" value="Calculate!"><br><br>
	<hr>
	<?php 

	if (!empty($_REQUEST)) {

	require_once('engine.php');
	function_subtraction();

	}

	?>
</form>


<form id="multiplication">
		<h3>Multiplication  Operation "*"</h3>
	<input type="text"  placeholder="Value1" autocomplete="off" name="mult1" required> 
	<br><br>
	<input type="text" placeholder="Value2" autocomplete="off" name="mult2" required>
	<br><br>
	<input type="submit" name="gogo" value="Calculate!"><br><br>
	<hr>
	<?php 

	if (!empty($_REQUEST)) {

	require_once('engine.php');
	function_multiplication();

	}

	?>
</form>



<form id="division">
		<h3>Multiplication Division "/"</h3>
	<input type="text"  placeholder="Value1" autocomplete="off" name="div1" required> 
	<br><br>
	<input type="text" placeholder="Value2" autocomplete="off" name="div2" required>
	<br><br>
	<input type="submit" name="goend" value="Calculate!"><br><br>
	<hr>
	<?php 

	if (!empty($_REQUEST)) {

	require_once('engine.php');
	function_division();

	}

	?>
</form>



</body>
</html>
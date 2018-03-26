<!DOCTYPE html>
<html>
<head>
	<title>calculator</title>
</head>
<body>
	<h1>CALCULATOR</h1>
	<form action="cal.php" method="GET">
		<input type="text" name="num1" placeholder="number1">
		<input type="text" name="num2" placeholder="number2">
		<select name="operator">
			<option>none</option>
			<option>add</option>
			<option>subtract</option>
			<option>multiply</option>
			<option>divide</option>
			<option>modulas</option>
			
		</select>
		<br>
		<button type="submit" name="submit">calculate</button>
		
	</form>
	<h1>The answer is:</h1>
	<?php
	if (isset($_GET['submit'])) {
		$result1 = $_GET['num1'];
		$result2 = $_GET['num2'];
		$operator = $_GET['operator'];

		switch ($operator) {
			case 'none':
				echo "select something";
				break;
				case 'add':
				echo $result1 + $result2;
				break;
			case 'subtract':
				echo $result1 - $result2;
				break;
			case 'multiply':
				echo $result1 * $result2;
				break;
			case 'divide':
				echo $result1 / $result2;
				break;
				case 'modulas':
				echo $result1 % $result2;
				break;
			
			
			
			default:
				# code...
				break;
		}
	}


	?>

</body>
</html>
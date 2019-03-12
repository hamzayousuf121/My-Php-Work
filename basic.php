<html>
<head>

</head>
<body>
<form action="basic.php"method="post">
	<label>Type number:</label>
	<input type="text"name="num1" placeholder="Number 1">
	<label>Type number:</label>
	<input type="text"name="num2" placeholder="Number 2">
	<select name="operator">
	<option>none </option>
	<option>add </option>
	<option>subtract </option>
	<option>multiply</option>
	<option>divide</option>
	<option>modules</option>
	<option>average</option>
	</select>
	<br>
	<input type="submit" name="submit"value="calculate" calculate >
	</form>
	<p>The answer is:
<?php
	if(isset ($_POST['submit'])){
		$result1= $_POST['num1'];
		$result2= $_POST['num2'];
		$operator= $_POST['operator'];
		switch ($operator){
			case "none":
			echo "please select a method";
			break;
			case "add":
			echo $result1 + $result2;
			break; 
			case "subtract":
			echo $result1 - $result2;
			break; 
			case "multiply":
			echo $result1 * $result2;
			break; 
			case "divide":
			echo $result1 / $result2;
			break; 
			case "modules":
			echo $result1 % $result2;
			break; 
			case "average":
			echo (($result1 + $result2)/2);
			break; 
		} 
	}
		?>	
		</body>	
		
		</html>
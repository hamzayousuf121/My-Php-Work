<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
	<style>  
 h1{
	color:purple;
	background-color:yellow;
}
body{
	
    text-transform: capatalize;
    font-family: monospace;
    color: red;
    background-color:crimson;
    color: white;
    font-size: 20px;

}
form{
	border:1px solid white;

}
.side{
	position:relative;
	left:20px;
	bottom:10px;
}
</style>
</head>
<body>
    <form action="#"method="post">
    <label>first number</label>
    <input type="text"name="first_num" placeholder="Type number">
    <label>Second number</label>
    <input type="text"name="second_num" placeholder="Type number"><br>
	<button type="submit" name="calc" value="submit">Calculate All Sum</button>
	</form>
	
	
	<div class="side">
	<?php
	function calculation ($first_num, $second_num)
	{
		$result_add =$first_num + $second_num;
		$result_sub =$first_num - $second_num;
		$result_multiply =$first_num * $second_num;
		$result_divide =$first_num / $second_num;
		$result_modules=$first_num % $second_num;
		$result_average=$first_num + $second_num /2;
		echo '<h1>adding answer is '.$result_add.'</h1>';
		echo '<h1>subtract answer is '.$result_sub.'</h1>';
		echo '<h1>multiply answer is '.$result_multiply.'</h1>';
		echo '<h1>divide answer is '.$result_divide.'</h1>';
		echo '<h1>modules answer is '.$result_modules.'</h1>';
		echo '<h1>average answer is '.$result_average.'</h1>';
		
}
   If(isset($_POST['calc'])) 
   {
	$first_num_inp = $_POST['first_num']; 
	$second_num_inp = $_POST['second_num'];
	calculation($first_num_inp, $second_num_inp);
}
?>
</div>	
</body>
</html>

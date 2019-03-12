<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>  
	<style>
	input{
		
		width:300px;
		height:30px;
		margin: 10px;
		position: relative;
		left: 415px;
		top: 25px;		
	}
	</style>
</head>

<body>
	<form action="loop.php"method="post">
    
    
    <input type="text" name="square1width"placeholder="Square size in px_eg"><br>
	
    <input type="text" name="square2width"placeholder="Square size in px_eg"><br>
    
	<input type="number"name="quantity"placeholder="square quantity"><br>

    
    <input type="text"name="background"placeholder="Background color"> <br>
    
    <input type="text" name="border1color"placeholder="Border color 1"><br>
    
    <input type="text" name="border2color"placeholder="Border color 2"><br>  

	<input type="submit" name="submit" value="Create Square"><br>

	
</body>
</html>
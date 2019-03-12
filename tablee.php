<html>
<head>
</head>
<body>
<center>
<form action="#" method="post">
<input type="text" placeholder="Enter Table number" name="table_num"><br><br>
<input type="text" placeholder="Enter Table range" name="table_range"><br><br>
<input type="submit" name="submit">
</form>
</center>
</body>
</html>
<?php
 if(isset($_POST['submit']))
{
	$_tablenum = $_POST['table_num'];
	$_tablerange = $_POST['table_range'];
    $file = fopen("Print.txt","w+");
	$table_print ="";
	for($i=1; $i<=$_tablerange;$i++)
	{	
	$table_print .=$_tablenum ." x " .$i. " = ".$_tablenum*$i.":" ."  \n";
	}
	fwrite($file,$table_print);
	fclose($file);
	}
	?>
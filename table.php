<?php

If(isset($_POST['submit']))
{
	$_tablenum = $_POST['table_num'];
	$_tablerange = $_POST['table_range'];
	
	for($i=1; $i<$_tablerange;$i++)
	{
		echo $_tablenum." X " .$i. " = "  .$_tablenum*$i. "<br>";
};	
};
?>
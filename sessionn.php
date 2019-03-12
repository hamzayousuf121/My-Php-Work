<html>
<head>
</head>

<body>
<center style="padding:30px 0 0 150px" >
<style>


.wrapper , .container
{
	min-height:300px;
	min-weight:300px;
	padding:25px;
	float:left;
	border 1px solid yellow;
	backgrou
	
</style>
<?php
     session_start();
	 
	 if(isset($_SESSION['count']))
    $_SESSION['count'];
    $_SESSION['count']--;
	
	{
	echo "<div class='container' style='transform:rotate(".$_SESSION['count']."deg)'>";

    }

?>


<div class="wrapper" style="background-color:red;">
<div class="wrapper" style="background-color:green;">
<div class="wrapper" style="background-color:yellow">
<div class="wrapper" style="background-color:purple;">
<div class="wrapper" style="background-color:orange;" ><img src="assets/images/programming.jpg"width="250px" height="300px">
</div>
</div>
</div>
</div>
</div>
</div>


<?php "</div>";
?>
</center>
</body>
</html>


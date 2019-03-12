<?php

	 if(isset($_POST['submit']))
	 {
	 $square1width=$_POST['square1width'];
	 $square2width=$_POST['square2width'];
	 $border1color=$_POST['border1color'];
	 $border2color=$_POST['border2color'];
	 $background=$_POST['background'];
	 
	 echo "<body style='background:".$background."'></body>";
	 echo "<div style='margin-top:80px;'><div style='margin: 0 auto;width:".$square1width.";height:".$square1width.";border:5px solid ".$border1color."'>
			<div style='transform: rotate(-10deg);position:absolute;
			margin:90px 0px 0px 90px;;height:".$square2width."; width:".$square2width.";
			border:5px solid ".$border2color."'>
	       <img src=assets/images/2.jpg width='300px' height='300px'></div></div></div>";
	 }
	 ?> 
		
		
		
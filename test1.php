<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
	center
	{
		position:relative;
		    right: -270px;
			top: 60px;
	}
	.div1, .div2
       min-width: 100px;
       min-height: 100px;
        padding:25px;
        float: left;

    }
	

    </style>
</head>
<body>

	<?php
	session_start();
	   $start= '';
	if(isset($_SESSION['count']))
	{
		$a = $_SESSION['count']++;
	echo $start .='<div class="div2" style= "transform: rotate(".$a."deg)">';
	}
	    ?>
		<center>
		
		
    <div class="div1">
     <div class="div1">
      <div class="div1">
       <div class="div1">
           <div class="div1"><img src="assets/images/color.jpg" width="200px"height="200px">
		</div>
		</div>
                </div>

</div>
</div>
    
    </div>
   
	<?php echo "</div>" ?>
	</center>
	

</body>
</html>
<?php
	

   If(isset($_POST['submit'])) 
   {
	$first_num_inp = $_POST['first_num']; 
	$second_num_inp = $_POST['second_num'];
	$third_num_inp = $_POST['third_num'];
	$forth_num_inp = $_POST['forth_num'];
	$fifth_num_inp = $_POST['fifth_num'];
	$six_num_inp = $_POST['six_num'];
	$seven_num_inp = $_POST['seven_num'];
	$eight_num_inp = $_POST['eight_num'];
	$nine_num_inp = $_POST['nine_num'];
	$ten_num_inp = $_POST['ten_num'];
	$eleven_num_inp = $_POST['eleven_num'];
	$twelve_num_inp = $_POST['twelve_num'];
	$total_num_inp= $seven_num_inp + $eight_num_inp + $nine_num_inp + $ten_num_inp + $eleven_num_inp + $twelve_num_inp;
	$marks_obtained_inp=$first_num_inp+$second_num_inp+$third_num_inp+$forth_num_inp+$fifth_num_inp+$six_num_inp;
	$percentage=$total_num_inp / $marks_obtained_inp *100;
	echo $percentage;
   
   }
   ?>
   <?php
	if(isset($_POST['submit']))
	{
		$square1width_inp=$POST['square1width'];
		$square1height_inp=$POST['square1height'];
		$border1color_inp=$POST['border1color'];
		$square2width_inp=$POST['square2width'];
		$square2height_inp=$POST['square2height'];
		$border2color_inp=$POST['border2color'];
		$color_inp=$POST['color'];
		echo '<style=width:"$squar1ewidth_inp";height:"$square1height_inp" ;border-color:"$border1color_inp";>'		
		echo '<style=width:"$squar2ewidth_inp";height:"$square2height_inp" ;border-color:"$border2color_inp";>'	
		echo '<style=body:"background-color:$color_inp";>'
	}
	?>
<?php
	function Result ($first_num, $second_num ,$third_num, $forth_num, $fifth_num, $six_num ,$seven_num, $eight_num, $nine_num, $ten_num, $twelve_num, $twelve_num)
	{	$result_Marks=$seven_num + $eight_num + $nine_num + $ten_num + $eleven_num + $twelve_num;
		$result_add =$first_num + $second_num - $third_num + $forth_num + $fifth_num + $six_num;
		$result_sub =$first_num - $second_num -$third_num - $forth_num - $fifth_num - $six_num;
		$result_multiply =$first_num * $second_num * $third_num * $forth_num * $fifth_num * $six_num;
		$result_divide =$first_num / $second_num / $third_num / $forth_num / $fifth_num / $six_num;
		$result_percentage=$result_add / $result_Marks * 100;
		echo '<h1>adding answer is '.$result_add.'</h1>';
		echo '<h1>subtract answer is '.$result_sub.'</h1>';
		echo '<h1>multiply answer is '.$result_multiply.'</h1>';
		echo '<h1>divide answer is '.$result_divide.'</h1>';
		echo '<h1>percentage is'.$result_percentage. '</h1>';
		
}
   If(isset($_POST ['submit'])) 
   {
	$first_num_inp = $_POST['first_num']; 
	$second_num_inp = $_POST['second_num'];
	$sthird_num_inp = $_POST['third_num'];
	$forth_num_inp = $_POST['forth_num'];
	$fifth_num_inp = $_POST['fifth_num'];
	$six_num_inp = $_POST['six_num'];
	$seven_numinp = $_POST['seven_num'];
	$eight_num_inp = $_POST['eight_num'];
	$nine_num_inp = $_POST['nine_num'];
	$ten_num_inp = $_POST['ten_num'];
	$eleven_num_inp = $_POST['eleven_num'];
	$twelve_num_inp = $_POST['twelve_num'];
	
	result($first_num_inp, $second_num_inp, $sthird_num_inp,$forth_num_inp ,$fifth_num_inp, $six_num_inp ,$seven_numinp ,$eight_num_inp,$nine_num_inp ,$ten_num_inp ,$eleven_num_inp,$twelve_num_inp );
   }
   
	if($percentage > 85)
	{
		echo "A1 Grade";
	}
	
	else if($percentage > 75)
	{
		echo "A Grade";
	}
	else if($percentage > 65)
	{
		echo "B Grade" ;
	}
	else if($percentage > 55)
	{
		echo "C Grade";
	}
	else if($percentage > 45)
	{
		echo "D Grade";
	}
	else if($percentage > 35)
	{
		echo "E Grade";
   ?>
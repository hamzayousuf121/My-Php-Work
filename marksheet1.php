<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marksheet</title>
	<link rel="stylesheet" type="text/css" href="marksheet.css">
	
	
</head>
<body>
        <p>SERIAL NO</p>
        <P><B>0149587</B></P>
       <h1 id="Board"> BOARD of secoundry education</h1>
    <div ><h1 class="main-content">Karachi</h1> </div>
       <div CLASS="para">STATEMENT OF MARKS
       <p><h3>S.S.C EXAMINATION</h3></p>
       <p><h3>(FOR SUCCUSSFULL CANDIDAITE ONLY)</h3></P></div></div>
       <Div class="left-side"><P>EXAMINATION</P>
	   <b>ANNUAL 2013</b>
        <P >ROLL NUMBER</P>
       <b>327452</b>
       <P>GROUP</P>
       <b>SCIENCE</b>
       <P>NAME</P>
       <b>MUHAMMAD HAMZA</b>
       <P>FATHER NAME</P>
       <b>MUHAMMAD YOUSUF</b>
       <p>SCHOOL/PRIVATE</p>
       <b>QURANIC EDUCATION CENTRE </br>
       <b style="position:relative;top:0px;left:0px;" >MAJOR ABDUL REHMAN ROAD,USMANABAD</b>
	   <div class="header">Marksheet</div>

	   <form action="marksheet1.php" method="post">
				<table class="table">
				<tr>
				<th class="sbj">Subject</th>
				<th>Maximum Marks </th>
				<th>Qualitying Marks</th>
				<th>Marks Secured Total</th>
				
				</tr>
				<tr>
				<td>English</td> 
				<td><input type="text"name="seven_num" placeholder="marks"></td>
				<td>35</td>
				<td><input type="text"name="first_num" placeholder="Number"></td>
			
				</tr>
				<tr>
				<td>Urdu</td>
				<td><input type="text"name="eight_num" placeholder="marks"></td>
				<td>35</td>
				<td><input type="text"name="second_num" placeholder="Number"></td>
				
				</tr>
				<tr>
				<td>science</td>
				<td><input type="text"name="nine_num" placeholder="marks"></td>
				<td>35</td>
				<td><input type="text"name="third_num" placeholder="Number"></td>
				
				</tr>
				<tr>
				<td>Computer</td>
				<td><input type="text"name="ten_num" placeholder="marks"></td>
				<td>35</td>
			   <td><input type="text"name="forth_num" placeholder="Number"></td>
				
				</tr>
				<tr>
				<td>Islamiat</td>
				<td><input type="text"name="eleven_num" placeholder="marks"></td>
				<td>35</td>
				<td><input type="text"name="fifth_num" placeholder="Number"></td>

				</tr>
				<tr>
				<td>Pak Study</td>
				<td><input type="text"name="twelve_num" placeholder="marks"></td>
				<td>35</td>
				<td><input type="text"name="six_num" placeholder="Number"></td>
				</tr>
				
				<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				</tr>
				<tr>
				<th><input type="submit" value="result" name="submit">
				<th>	
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
	$marks_obtained_inp= $first_num_inp + $second_num_inp + $third_num_inp + $forth_num_inp + $fifth_num_inp + $six_num_inp;
	$percentage=$marks_obtained_inp/$total_num_inp*100;
    echo $percentage." %". " ";}
	
	If($percentage > 85)
	{
		echo "A1 Grade";
	}
	
	else if($percentage > 75)
	{
		echo "A Grade";
	}
	else if($percentage < 69)
	{
		echo "B Grade" ;
	}
	else if($percentage < 59)
	{
		echo "C Grade";
	}
	else if($percentage < 49)
	{
		echo "D Grade";
	}
	else if($percentage < 39)
	{
		echo "E Grade";
	}
	else if($percentage <33)
	{
		echo "fail";
	}
   ?>
   </th>
			</table>
	   </form>
	   
        
    </div>
   
</body>

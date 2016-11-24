<head>
<?php

include 'menu.html';
?>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8"  >
 </meta>
<style>

input[value='Full Result'] {
	margin-left: 25%;
	margin-bottom: 10px;
	
	
	 float: left;
    width: 10em;
	height: 2em;
	text-align: center;
	 
    color: white;
    background-color: blue;
  font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	
	padding: 6px;
    
	
}

input[value='Full Result']:hover {
    background-color: skyblue;
}
input[value=Next] {
	margin-left: 70%;
	margin-top: -51px;
	 float: left;
    width: 5em;
	height: 2em;
	text-align: center;
	 
    color: white;
    background-color: red;
  font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	
	padding: 6px;
    border: 2px solid black;
	
}

input[value=Next]:hover {
    background-color: skyblue;
}


input[value=Previous] {
	
	
    width: 5em;
	height: 2em;
	text-align: center;
    
    color: white;
    background-color: red;
  font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	
	padding: 6px;
    border: 2px solid black;
	
}

input[value=Previous]:hover {
    background-color: skyblue;
}




body	 { 



	width: 100%;
	height: 100%;
	font-family: 'Exo', sans-serif;
	font-size: 20px;
	font-weight: 400;
	padding: 6px;
	

background-image: url(logo1.jpg);
	
	

  
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
	table-align: center;
	
	
}




 
</style>

</head>
<body>



<br><br><br><br><br>
<table style="background-color:#FFFFE0;" width="100%" border="20" cellpadding="1" cellspacing="1" height="">


<tr style="background-color:#BDB76B;color:#ffffff;">
<th>CODE</th>
<th>SUBJECT</th>
<th>MARKS</th>
</tr>




</body>
<?php

session_start();


include 'password.php';

	
$semesterm=$_SESSION['semsesterm1'];
$semestern=$_SESSION['semstern1'];
$semesters=$_SESSION['semesters1'];
$sem12=$_SESSION['sem1'];

	
	
	
	$semester12=$_SESSION['semester2'];
	$_SESSION['sem1']=$sem12;

	
	
	
$_SESSION['semester2']=$semester12;
	


	$_SESSION['semsesterm1']=$semesterm;
	$_SESSION['semstern1']=$semestern;
	$_SESSION['semesters1']=$semesters;
	
	
	

$text2=$_SESSION['text3'];

$check=$text2[0].$text2[1].$text2[2];

if($check<0)
{	echo 'Your class result is over';
die();
}

$l=strlen($check);
$text1=$check.$text2[3].$text2[4].$text2[5].$text2[6].$text2[7].$text2[8].$text2[9].$text2[10];

$text=$check.$text2[3].$text2[4].$text2[5].$text2[6].$text2[7].$text2[8].$text2[9].$text2[10].$text2[11];

for($x=3;$x>$l;$x--)
{
	$text1='0'.$text1;
	$text='0'.$text;
}
$_SESSION['textt']=$text1;
 

$_SESSION['text3']=$text;
	
	$dataa=$_SESSION['year'];

$_SESSION['year']=$dataa;

$select_db = mysql_select_db($dataa) or header("Location: error.html");
$query1 = "SELECT * FROM $semesterm where ENROLLMENTNO = '$text';"; 
$query2 = "SELECT * FROM $semestern where ENROLLMENTNO = '$text';";
$query3 = "SELECT * FROM $semesters ;";
$count=0;





 
$fetch1=mysql_query($query1) or header("Location: error.html");
$fetch2=mysql_query($query2) or header("Location: error.html");
$fetch3=mysql_query($query3) or header("Location: error.html");
$fetch4=mysql_query($query3) or header("Location: error.html");
$fetch5=mysql_query($query1) or header("Location: error.html");
$fetch6=mysql_query($query3) or header("Location: error.html");

if($text=='02913503612@')
{
	echo 'HI, BESTIE'.'<br>';
}
while($row5=mysql_fetch_assoc($fetch4))
$count++;

if($sem12==7||$sem12==8)
	{
if($count==13||$count==18)
$count=9;
else if($count==11)
$count=7;
else if($count==12||$count==10||$count==16)
$count=6;
else if($count==15)
$count=8;
else
$count=10;


	
	}

$count1=0;
while($row1=mysql_fetch_assoc($fetch5))
	$count1++;
if($count1==0)
{include 'previous.php';
echo ' Roll Number Does  Not exist <br>';}



while($row1=mysql_fetch_assoc($fetch1))
{
	$row2=mysql_fetch_assoc($fetch2);

	echo 'NAME : ';
	echo "<b>".$row2['NAME']."</b>"."<br>";
	echo 'ENROLLMENTNO : ';
	echo "<b>".$text1."</b>"."<br>";
	
	
$count1=1;	
	for($x=1;$x<=$count;$x++)
	{
		$row3=mysql_fetch_assoc($fetch3);
		if($sem12<7)
		{
		echo "<tr>";
	echo "<td>".$row3['CODE']."</td>";
	echo "<td>".$row3['SUBJECT']."</td>";	}
	else
		{
			$ttt='S'.$count1;
			while($row4=mysql_fetch_assoc($fetch6))
			{
			  if($row1[$ttt]==$row4['SNO'])
			  {
				  $count1++;
				  echo "<tr>";
		
	echo "<td>".$row3['CODE']."</td>";
		echo "<td>".$row3['SUBJECT']."</td>";
		break;
				  
			  }
			}
			
			
		}	
	
	$z='M'.$x;
    echo "<td>".$row1[$z]."</td>";
	echo "</tr>";
	
	
}

echo 'PERCENTAGE WIHOUT CREDIT : ';
	echo "<b>".$row1['PERCENTAGEWC']."</b>"."<br>";
	echo 'PERCENTAGE WIH CREDIT : ';
	echo "<b>".$row1['PERCENTAGEC']."</b>"."<br><br><br><br>";

}


	




?>
<form action="fullresult.php">
<input type="submit" value="Full Result">
</form>
</table>
<br><br>


<form action='previous.php'>
<input type='submit' value='Previous'></input>
</form>
<form action='next.php'>
<input type='submit' value='Next'></input>
</form>
</html>








 
   
  
<head>
<?php

include 'menu.html';
?>
<script type="text/javascript">
if(screen.width<800 )
	window.location="mobprevious.php";
	</script>
<style>

input[value=Next] {
	margin-left: 610px;
	margin-top: -51px;
	 float: left;
    width: 11.8em;
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
	
	
    width: 11.8em;
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

text-align: left;
margin-left: 255px;
	
	font-family: 'Exo', sans-serif;
	font-size: 20px;
	font-weight: 400;
	padding: 6px;
	

 background-color: #F8F8FF;
	

  
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
	table-align: center;
}




 
</style>

</head>

<?php

session_start();


include 'password.php';
	
$semesterm=$_SESSION['semsesterm1'];
$semestern=$_SESSION['semstern1'];
$semesters=$_SESSION['semesters1'];



	$_SESSION['semsesterm1']=$semesterm;
	$_SESSION['semstern1']=$semestern;
	$_SESSION['semesters1']=$semesters;
	$sem=$_SESSION['sem1'];
	$_SESSION['sem1']=$sem;
	
	
	

$text2=$_SESSION['text3'];

$check=$text2[0].$text2[1].$text2[2];
$check--;
if($check<0)
{	echo 'PLEASE LOGIN AGAIN TO SEE MORE RESULT';
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
 

$_SESSION['text3']=$text;
	
	$dataa=$_SESSION['year'];

$_SESSION['year']=$dataa;

$select_db = mysql_select_db($dataa) or header("Location: error.html");
$query1 = "SELECT * FROM $semesterm where ENROLLMENTNO = '$text';"; 
$query2 = "SELECT * FROM $semestern where ENROLLMENTNO = '$text';";
$query3 = "SELECT * FROM $semesters ;";
$count=0;





 
$fetch1=mysql_query($query1) or die('sorry no further database');
$fetch2=mysql_query($query2) or die('sorry no database');
$fetch3=mysql_query($query3) or die('sorry no database');
$fetch4=mysql_query($query3) or die('sorry no database');
$fetch5=mysql_query($query1) or die('sorry no further database');
$fetch6=mysql_query($query3) or die('sorry no database');

if($text=='02913503612@')
{
	echo 'HI, BESTIE'.'<br>';
}
while($row5=mysql_fetch_assoc($fetch4))
$count++;
if($sem==7||$sem==8)
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
die();}

?>
<body>


<br><br><br><br><br>
<table style="background-color:#FFFFE0;" width="800" border="20" cellpadding="1" cellspacing="1" height="400">


<tr style="background-color:#BDB76B;color:#ffffff;">
<th>CODE</th>
<th>SUBJECT</th>
<th>MARKS</th>
</tr>




</body>
<?php

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
		if($sem<7)
		{
		echo "<tr>";
	echo "<td>".$row3['CODE']."</td>";
	echo "<td>".$row3['SUBJECT']."</td>";	
	}
	
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
</table>
<br><br>

<form action='previous.php'>
<input type='submit' value='Previous'></input>
</form>
<form action='next.php'>
<input type='submit' value='Next'></input>
</form>
</html>








 
   
  
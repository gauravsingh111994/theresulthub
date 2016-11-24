<head>

<?php

include 'menu.html';
?>
<script type="text/javascript">
if(screen.width<800 )
	window.location="mobresult.php";
	</script>
<style>

input[value='Full Result'] {
	margin-left: 300px;
	margin-bottom: 10px;
	
	
	 float: left;
    width: 11.8em;
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
<body>





<br><br><br><br><br>
<table style="background-color:#FFFFE0;" width="800" border="20" cellpadding="1" cellspacing="1" height="600" >




<tr style="background-color:#BDB76B;color:#ffffff;">
<th>CODE</th>
<th>SUBJECT</th>
<th>MARKS</th>
</tr>




</body>
<?php

if(!$_POST['text2'])
{header("Location: enroll.php");
die();}
else if(!$_POST['text'])
{header("Location: sem.php");

die();}

session_start();


include 'password.php';

$fllag=0;


	$sem=$_POST['text2'];
	$text1=$_POST['text'];
	if($text1[6].$text1[7].$text1[8]=='017'||$text1[6].$text1[7].$text1[8]=='024')
	{
	if($sem==8)
	{
	$sem=$sem-2;
	$_POST['text2']=$_POST['text2']-2;
	
	}}
	
	if($sem==0)
	$sem=1;
	
		$_SESSION['textt']=$text1;
		
	$_SESSION['sem1']=$sem;
	$_SESSION['semm']=$_POST['text2'];
	
	
	$year1=$text1[9].$text1[10];
	$year=16-$year1;   
	$year=($year*2)-1;//change 2 to 1
	
	$semester=$text1[6].$text1[7].$text1[8];

	
	

$text=$text1.'@';
$_SESSION['text3']=$text;

	
	if($year==$sem)
	$dataa=$text[9].$text[10];

else if($year<$sem)
{$dataa=$text[9].$text[10];
$dataa-=1;
$fllag=2;}







else if($year>$sem)
{$dataa=$text[9].$text[10];
$dataa+=1;

$fllag=1;}


if($semester=='072')
$semester='027';
else if($semester=='073')
$semester='028';
else if($semester=='074')
$semester='036';
else if($semester=='077')
$semester='031';
else if($semester=='078')
$semester='049';
$_SESSION['semester2']=$semester;
$_SESSION['FLAG']=$fllag;


$semesterm=$semester.$sem.'marks';
	
	$semestern=$semester.$sem.'name';
	$semesters=$semester.$sem.'sub';
	$_SESSION['semsesterm1']=$semesterm;
	$_SESSION['semstern1']=$semestern;
	$_SESSION['semesters1']=$semesters;
	

$_SESSION['year']=$dataa;


$select_db = mysql_select_db($dataa) or header("Location: error.html");
$query1 = "SELECT DISTINCT * FROM $semesterm where ENROLLMENTNO = '$text';";
$query2 = "SELECT DISTINCT * FROM $semestern where ENROLLMENTNO = '$text';";
$query3 = "SELECT * FROM $semesters ;";
$count=0;






 
$fetch1=mysql_query($query1) or header("Location: error.html");
$fetch2=mysql_query($query2) or header("Location: error.html");
$fetch3=mysql_query($query3) or header("Location: error.html");
$fetch4=mysql_query($query3) or header("Location: error.html");
$fetch5=mysql_query($query3) or header("Location: error.html");

if($text=='02913503612@'||$text=='03015604913@')
{
	echo 'HI, BESTIE'.'<br>';
}
while($row5=mysql_fetch_assoc($fetch4))
$count++;



while($row1=mysql_fetch_assoc($fetch1))
{
	$row2=mysql_fetch_assoc($fetch2);

	$tt=$row2['NAME'];
echo "<font size=18 color=blue>$tt</font>";
echo "<br>";
	
	echo 'ENROLLMENTNO : ';
	echo "<b>".$text1."</b>"."<br>";
	
	if($sem==7||$sem==8)
	{
if($count==13||$count==18)  //change here
$count=9;

else 
$count=10;


	
	}
$count1=1;
	for($x=1;$x<=$count;$x++)
	{
		$row3=mysql_fetch_assoc($fetch3);
		if($sem<7)
		{
		echo "<tr>";
		
	echo "<td>".$row3['CODE']."</td>";
		echo "<td>".$row3['SUBJECT']."</td>";	}
		
		else
		{
			$ttt='S'.$count1;
			while($row4=mysql_fetch_assoc($fetch5))
			{
			
			  if($row1[$ttt]==$row4['SNO'])
			  {
			
				  $count1++;
				  echo "<tr>";
		
	echo "<td>".$row4['CODE']."</td>";
		echo "<td>".$row4['SUBJECT']."</td>";
		break;
				  
			  }
			}
			
			
		}
	
	$z='M'.$x;
    echo "<td>".$row1[$z]."</td>";
	echo "</tr>";
	
	
}

echo 'PERCENTAGE WITHOUT CREDIT : ';
	echo "<b><u>".$row1['PERCENTAGEWC']."</u></b>"."<br>";
	echo 'PERCENTAGE WITH CREDIT : ';
	echo "<b><u>".$row1['PERCENTAGEC']."</u></b>"."<br><br><br><br>";

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








 
   
  
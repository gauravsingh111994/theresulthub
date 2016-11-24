<head>
<?php
include 'menu.html';

?>

<script type="text/javascript">
if(screen.width<800 )
	window.location="mobfullresult.php";
	</script>
<style>





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

</body>

<?php
session_start();
include 'password.php';
$semesterm=$_SESSION['semsesterm1'];
$semestern=$_SESSION['semstern1'];
$semesters=$_SESSION['semesters1'];
$sem=$_SESSION['sem1'];

	$dataa= $_SESSION['year'];
	
	$fllag=$_SESSION['FLAG'];
	$_SESSION['FLAG']=$fllag;
	$semester=$_SESSION['semester2'];
	
	
	
	
	$text1=$_SESSION['textt'];
	
	$text=$text1.'@';
	
	
	



	
	


$awc=0;
$ac=0;
$select_db = mysql_select_db($dataa) or header("Location: error.html");
$query2 = "SELECT * FROM $semestern where ENROLLMENTNO = '$text';";

$query3 = "SELECT * FROM $semesters ;";
$count=0;


$fetch2=mysql_query($query2) or header("Location: error.html");
$fetch3=mysql_query($query3) or header("Location: error.html");
$fetch4=mysql_query($query3) or header("Location: error.html");

if($text=='02913503612@'||$text=='03015604913@')
{
	echo 'HI, BESTIE'.'<br>';
}
while($row5=mysql_fetch_assoc($fetch4))
$count++;
$row2=mysql_fetch_assoc($fetch2);





$tt=$row2['NAME'];
echo "<font size=18 color=blue>$tt</font>";
echo "<br>";
$cc=0;

for($s=$sem;$s>=1;$s--)
{
$flag=0;
$ccount=0;

$semesterm=$semester.$s.'marks';

$query1 = "SELECT DISTINCT * FROM $semesterm where ENROLLMENTNO = '$text';";


$fetch3=mysql_query($query1);




	
	
	
	
$fetch1=mysql_query($query1);

while($row1=mysql_fetch_assoc($fetch1))
$ccount++;
if($ccount==0)
{
if($fllag==1)
{
	$dataa=$dataa-1;
	$select_db = mysql_select_db($dataa);
	$dataa=$dataa+1;
	$query1 = "SELECT DISTINCT * FROM $semesterm where ENROLLMENTNO = '$text';";


$fetch3=mysql_query($query1);
$fetch1=mysql_query($query1);

while($row1=mysql_fetch_assoc($fetch1))
$ccount++;

if($ccount==0)
	break;
}
	
	else
	break;}

$row1=mysql_fetch_assoc($fetch3);



	$awc+=$row1['PERCENTAGEWC'];
	$ac+=$row1['PERCENTAGEC'];
	
	
	


}


	$awc=$awc/($sem-$s);
	$ac=$ac/($sem-$s);
	
	

echo "<br>";
echo "<font size=5>YOUR AGGREGATE PERCENTAGE WITHOUT CREDIT : </font>";
echo "<font size=5><b><u>$awc</u></b></font>";
echo "<br>";
echo "<font size=5>YOUR AGGREGATE PERCENTAGE WITH CREDIT : </font>";
echo "<font size=5><b><u>$ac</u></b></font>";
echo "<br><br><br>";
$select_db = mysql_select_db($dataa);
for($s=$sem;$s>=1;$s--)
{
	$semesterm=$semester.$s.'marks';
	$semesters=$semester.$s.'sub';
$query1 = "SELECT * FROM $semesterm where ENROLLMENTNO = '$text';";
$query3 = "SELECT * FROM $semesters ;";
$fetch3=mysql_query($query3);

$count=0;
$fetch1=mysql_query($query1) or header("Location: error.html");
$fetch5=mysql_query($query3) or header("Location: error.html");
$fetch6=mysql_query($query3) or header("Location: error.html");

$fetch10=mysql_query($query1);

while($row10=mysql_fetch_assoc($fetch10))
{
$count++;
}
if($count==0)
{
	
	if($fllag==1)
	{$dataa=$dataa-1;
$select_db = mysql_select_db($dataa);
$query1 = "SELECT * FROM $semesterm where ENROLLMENTNO = '$text';";
$query3 = "SELECT * FROM $semesters ;";
$fetch3=mysql_query($query3);

$count=0;
$fetch1=mysql_query($query1) or header("Location: error.html");
$fetch5=mysql_query($query3) or header("Location: error.html");
$fetch6=mysql_query($query3) or header("Location: error.html");

$fetch10=mysql_query($query1);

while($row10=mysql_fetch_assoc($fetch10))
{
$count++;
}
if($count==0)
	die();

}

else
die();}
$count=0;
while($row4=mysql_fetch_assoc($fetch6))
{
$count++;
}
echo "<font size=5><b><u>$s semester result</u></b></font>";
echo "<br><br><br>";
if($s==7||$s==8)
	{
if($count==13||$count==18)
$count=9;

else
$count=10;


	
	}

?>
<table style="background-color:#FFFFE0;" width="800" border="20" cellpadding="1" cellspacing="1" height="400" >


<tr style="background-color:#BDB76B;color:#ffffff;">
<th>CODE</th>
<th>SUBJECT</th>
<th>MARKS</th>
</tr>

<?php
$count1=1;
$row1=mysql_fetch_assoc($fetch1);$x=1;
	for($y=1;$y<=$count;$y++)
	{
	$row3=mysql_fetch_assoc($fetch3);
		if($s<7)
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
	$x++;
    echo "<td>".$row1[$z]."</td>";
	echo "</tr>";
	
	
}




	echo 'PERCENTAGE WITHOUT CREDIT : ';
	echo "<b><u>".$row1['PERCENTAGEWC']."</u></b>"."<br>";
	echo 'PERCENTAGE WITH CREDIT : ';
	echo "<b><u>".$row1['PERCENTAGEC']."</u></b>"."<br><br><br>";




?>
</table>
<br><br><br><br>
<?php
}
?>



</html>








 
   
  
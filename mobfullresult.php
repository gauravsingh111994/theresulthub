<head>
<?php

include 'menu.html';
?>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8"  >
 </meta>
<style>




body	 { 

text-align: left;

	
	font-family: 'Exo', sans-serif;
	
	font-weight: 400;
	padding: 6px;
	

background-image: url(logo1.jpg);
	background-size: cover;
	

  
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
	$semester=$_SESSION['semester2'];
	
	
	
	
	$text1=$_SESSION['textt'];
	
	$text=$text1.'@';
	
	
	



	
	


$awc=0;
$ac=0;
$select_db = mysql_select_db($dataa) or die('no such database');
$query2 = "SELECT * FROM $semestern where ENROLLMENTNO = '$text';";

$query3 = "SELECT * FROM $semesters ;";
$count=0;


$fetch2=mysql_query($query2) or die('sorry no database1');
$fetch3=mysql_query($query3) or die('sorry no database2');
$fetch4=mysql_query($query3) or die('sorry no database3');

if($text=='02913503612@'||$text=='03015604913@')
{
	echo 'HI, BESTIE'.'<br>';
}
while($row5=mysql_fetch_assoc($fetch4))
$count++;
$row2=mysql_fetch_assoc($fetch2);





$tt=$row2['NAME'];
echo "<font size=16 color=blue>$tt</font>";
echo "<br>";
$cc=0;

for($s=$sem;$s>=1;$s--)
{
$semesterm=$semester.$s.'marks';

$ccount=0;
$query1 = "SELECT DISTINCT * FROM $semesterm where ENROLLMENTNO = '$text';" ;


$fetch1=mysql_query($query1);

$fetch111=mysql_query($query1);


while($row1=mysql_fetch_assoc($fetch1))
$ccount++;

if($ccount==0)
{
	if($fllag==1)
	{
		$dataa=$dataa-1;
		$select_db = mysql_select_db($dataa) or die('no such database');
		$dataa=$dataa+1;
		$ccount=0;
$query1 = "SELECT DISTINCT * FROM $semesterm where ENROLLMENTNO = '$text';" ;


$fetch1=mysql_query($query1);

$fetch111=mysql_query($query1);


while($row1=mysql_fetch_assoc($fetch1))
$ccount++;

if($ccount==0)
	break;

		
		
	}
	else
break;
}
$row1=mysql_fetch_assoc($fetch111);

	$awc+=$row1['PERCENTAGEWC'];
	$ac+=$row1['PERCENTAGEC'];
	
	



}


	$awc=$awc/($sem-$s);
	$ac=$ac/($sem-$s);
	
	

echo "<br>";
echo "<font size=3>YOUR AGGREGATE PERCENTAGE WITHOUT CREDIT : </font>";
$t=round($awc,2);
echo "<font size=3><b><u>$t</u></b></font>";
echo "<br>";
echo "<font size=3>YOUR AGGREGATE PERCENTAGE WITH CREDIT : </font>";
$t=round($ac,2);
echo "<font size=3><b><u>$t</u></b></font>";
echo "<br><br><br>";
$select_db = mysql_select_db($dataa) or die('no such database');
for($s=$sem;$s>=1;$s--)
{
	$semesterm=$semester.$s.'marks';
	$semesters=$semester.$s.'sub';
$query1 = "SELECT * FROM $semesterm where ENROLLMENTNO = '$text';" or die();
$query3 = "SELECT * FROM $semesters ;";
$fetch3=mysql_query($query3);
$count1=0;
$fetch1=mysql_query($query1);
$fetch5=mysql_query($query3) or die('sorry no database');
$fetch6=mysql_query($query3) or die('sorry no database');

$fetch10=mysql_query($query1) ;
while($row10=mysql_fetch_assoc($fetch10))
{
$count1++;
}
if($count1==0)
{	
if($fllag==1)
{
	$dataa=$dataa-1;
	$select_db = mysql_select_db($dataa) or die('no such database');
	$query1 = "SELECT * FROM $semesterm where ENROLLMENTNO = '$text';" or die();
$query3 = "SELECT * FROM $semesters ;";
$fetch3=mysql_query($query3);
$count1=0;
$fetch1=mysql_query($query1);
$fetch5=mysql_query($query3) or die('sorry no database');
$fetch6=mysql_query($query3) or die('sorry no database');

$fetch10=mysql_query($query1) ;
while($row10=mysql_fetch_assoc($fetch10))
{
$count1++;
}
	
if($count1==0)
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

<table style="background-color:#FFFFE0;" width="100%" border="20" cellpadding="1" cellspacing="1" height="" >


<tr style="background-color:#BDB76B;color:#ffffff;">
<th>CODE</th>
<th>SUBJECT</th>
<th>MARKS</th>
</tr>

<?php

$row1=mysql_fetch_assoc($fetch1);$x=1;$count1=1;
	for($y=1;$y<=$count;$y++)
	{
	
	$row3=mysql_fetch_assoc($fetch3);
	if($s!=7)
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




	echo 'PERCENTAGE WIHOUT CREDIT : ';
	$t=round($row1['PERCENTAGEWC'],2);
	echo "<b><u>".$t."</u></b>"."<br>";
	echo 'PERCENTAGE WIH CREDIT : ';
	$t=round($row1['PERCENTAGEC'],2);
	echo "<b><u>".$t."</u></b>"."<br><br><br>";




?>
</table>
<br><br><br><br>
<?php
}
?>



</html>








 
   
  
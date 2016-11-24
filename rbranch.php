<head>
<?php

include 'menu.html';
?>
<script type="text/javascript">
if(screen.width<800 )
	window.location="mobrbranch.php";
	</script>

<style>





body	 { 
position: absolute;
	
	width: auto;
	height: auto;
	margin-left: 300px;
	
	background-image: url(logo1.jpg);
	background-size: cover;
	
	
  
}
h2 {
	font-family: Abril Fatface;
	font-size: 50px;
	font-weight: 200;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
input[type=Submit] {
		

 float: left;
 margin-left:10px;
    width: 15em;
	height: 3em;
	text-align: center;
    
    color: white;
    background-color: blue;
  font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	
	padding: 6px;
    border: 2px solid black;
  

 
}



input[type=Submit]:hover {
  background: skyblue;
}

</style>
</head>

<body>

<br><br><br>

<h2><u>Ranklist Without Credit</u></h2>

<form action="rbranchcredit.php" method='POST'>
<input type='submit' value='Click here for ranklist with credit'></input></form>
<br><br><br>

<table style="background-color:#FFFFE0;" width="800" border="1" cellpadding="1" cellspacing="1" align= "center">


<tr style="background-color:#BDB76B;color:#ffffff;">
<th>RANK</th>
<th>NAME</th>
<th>PERCENT WITHOUT CREDIT</th>
<th>PERCENT WITH CREDIT</th>
</tr></body>


<?php
session_start();

include 'password.php';

$year1=$_POST['year'];
$sem1=$_POST['sem'];

$branch1=$_POST['branch'];

$_SESSION['year']=$year1;
$_SESSION['sem']=$sem1;
$_SESSION['branch']=$branch1;

$branchn=$branch1.$sem1.'name';
$branchm=$branch1.$sem1.'marks';
$_SESSION['year2']=$year1;
	$_SESSION['branchn2']=$branchn;
	$_SESSION['branchm2']=$branchm;


$select_db = mysql_select_db($year1) or header("Location: error.html");
$query1 = "SELECT DISTINCT * FROM $branchn, $branchm where $branchn.ENROLLMENTNO=$branchm.ENROLLMENTNO ORDER BY PERCENTAGEWC DESC;";
$count=1;
$fetch1=mysql_query($query1) or header("Location: error.html");

while($row1=mysql_fetch_assoc($fetch1))
{
	echo "<tr>";
	echo "<td>".$count."</td>";
	$count++;
	$enroll=$row1['ENROLLMENTNO'];
	$coll=$enroll[3].$enroll[4].$enroll[5];
	echo "<td>".$row1['NAME']."($coll)"."</td>";
	echo "<td>".$row1['PERCENTAGEWC']."</td>";
	echo "<td>".$row1['PERCENTAGEC']."</td>";
	echo "</tr>";
}


?>
</table>






<head>
<?php

include 'menu.html';
?>
<script type="text/javascript">
if(screen.width<800 )
	window.location="mobrbranchcredit.php";
	</script>


<style>



body	 { 
position: absolute;
margin-left: 300px;
	
	width: auto;
	height: auto;
	
	background-image: url(logo1.jpg);
	background-size: cover;
	
	z-index: 0;
  
}
table, th, td {
  
    border-collapse: collapse;
}

</style>
</head>

<body>




<br><br><br><br>
<h2><u>Ranklist With Credit</u></h2>
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
$dataa=$_SESSION['year'];
$branch=$_SESSION['branch'];

$select_db = mysql_select_db($dataa) or header("Location: error.html");
$query1 = "SELECT DISTINCT * FROM $branch ORDER BY PERCENTAGEC DESC;";
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






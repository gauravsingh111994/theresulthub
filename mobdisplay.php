<head>
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
	font-size: 12px;
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



<?php
include "menu1.html";

?>

<br><br><br><br><br>
<table style="background-color:#FFFFE0;" width="100%" cellpadding="1" cellspacing="1" height="" >




<tr style="background-color:#BDB76B;color:#ffffff;">

<th>SUBJECT</th>
<th>MARKS</th>
<th>PERCENTILE</th>
</tr>




</body>
<?php


session_start();


include 'password.php';
	$id=$_SESSION['id'];
	mysql_select_db("amcat");
	$query="SELECT *from marks where id='$id'";
	$run=mysql_query($query);$count=0;
	while($row=mysql_fetch_assoc($run))
	{
		
		echo "<font size=18 color=blue>".$row['name']."</font>";
echo "<br>";
	
	echo 'BRANCH : ';
	echo "<b>".$row['branch']."</b>"."<br>";
	echo 'Date of Birth : ';
	echo "<b>".$row['dob']."</b>"."<br>";
	echo 'Total Marks : ';
	echo "<b>".$row['tmarks']."</b>"."<br>";
	echo 'Percentile : ';
	echo "<b>".$row['perc']."</b>"."<br>";
	echo 'Average Percentile : ';
	echo "<b>".$row['tperc']."</b>"."<br><br><br>";
		
		$smarks[$count]=$row['english'];
		$sperc[$count]=$row['englishp'];
		$subject[$count]="ENGLISH";$count++;
		$smarks[$count]=$row['quant'];
		$sperc[$count]=$row['quantp'];
		$subject[$count]="Quantitative Ability";$count++;
		$smarks[$count]=$row['logical'];
		$sperc[$count]=$row['logicalp'];
		$subject[$count]="Logical Ability";$count++;
		if($row['compprog']!=0)
		{
			$smarks[$count]=$row['compprog'];
			$sperc[$count]=$row['compprogp'];
			$subject[$count]="COMPUTER PROGRAMMING";$count++;
		}
		
		if($row['compscience']!=0)
		{
			$smarks[$count]=$row['compscience'];
				$sperc[$count]=$row['compsciencep'];
			$subject[$count]="COMPUTER SCIENCE";$count++;
			
		}
		if($row['electronics']!=0)
		{
			$smarks[$count]=$row['electronics'];
				$sperc[$count]=$row['electronicsp'];
			$subject[$count]="ELECTRONICS";$count++;
			
		}
		if($row['mechanical']!=0)
		{
			$smarks[$count]=$row['mechanical'];
				$sperc[$count]=$row['mechanicalp'];
			$subject[$count]="MECHANICAL";$count++;
			
		}
		if($row['automotive']!=0)
		{
			$smarks[$count]=$row['automotive'];
				$sperc[$count]=$row['automotivep'];
			$subject[$count]="AUTOMOTIVE";$count++;
			
		}
		if($row['production']!=0)
		{
			$smarks[$count]=$row['production'];
				$sperc[$count]=$row['productionp'];
			$subject[$count]="PRODUCTION";$count++;
			
		}
		if($row['electrical']!=0)
		{
			$smarks[$count]=$row['electrical'];
				$sperc[$count]=$row['elctricalp'];
			$subject[$count]="ELECTRICAL";$count++;
			
		}
		if($row['instrumentation']!=0)
		{
			$smarks[$count]=$row['instrumentation'];
				$sperc[$count]=$row['instrumentationp'];
			$subject[$count]="INSTRUMENTATION";$count++;
			
		}
		if($row['chemistry']!=0)
		{
			$smarks[$count]=$row['chemistry'];
				$sperc[$count]=$row['chemistryp'];
			$subject[$count]="CHEMISTRY";$count++;
			
		}
		if($row['industrial']!=0)
		{
			$smarks[$count]=$row['industrial'];
				$sperc[$count]=$row['industrialp'];
			$subject[$count]="INDUSTRIAL";$count++;
			
		}
		for($i=0;$i<=4;$i++)
		{
		echo "<td>".$subject[$i]."</td>";
		echo "<td>".$smarks[$i]."</td>";
		echo "<td>".$sperc[$i]."</td>";
		echo "</tr>";
		}
		
		
	}
	
	
	
	
	
	
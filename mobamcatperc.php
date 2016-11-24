<head>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8"  >
 </meta>
<style>







body	 { 
position: absolute;

width: 100%;
height: 100%;
	
	width: auto;
	height: auto;
	
	
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
    width: 20em;
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
<?php
session_start();

include "menu1.html";?>

<h2><u>Amcat Result Ranklist</u></h2><br>
<h3 style="font-size:20px;margin-top:-30px;">(Based on percentile)</h3>
<h3 style="font-size:16px;">* Use your browser default search ("Find on this page"-CTRL+F) for searching your name.</h3><br>
<h3 style="font-size:16px;margin-top:-30px;">* Go to 'BRANCH-WISE' tab to view  branch wise ranklist.</h3><br>
<h3 style="font-size:16px;margin-top:-30px;">* Avg Percentile is (Sum of all percentile/5.0).</h3><br>
<form action="mobamcat.php" method='POST'>
<input type='submit' value='Click here for ranklist based on marks'></input></form>

<br><br>

<table style="background-color:#FFFFE0;" width="100%" border="1" cellpadding="1" cellspacing="1" >


<tr style="background-color:#BDB76B;color:#ffffff;">
<th>RANK</th>
<th>NAME</th>
<th>Total Marks</th>
<th>Percentile</th>
<th>Avg. Percentile</th>

</tr></body>


<?php


include 'password.php';

mysql_select_db("amcat");
$query="SELECT *from marks ORDER BY tperc DESC";
$run=mysql_query($query) or die("not executed");
$count=1;

while($row=mysql_fetch_assoc($run))
{
	
	
$branch=$row['branch'];
if($branch=="Computer Science & Engineering")
	$branch="CSE";
ELSE if($branch=="Electronics and Communication Engineering")
	$branch="ECE";
ELSE if($branch=="Mechanical and Automation")
	$branch="MAE";
ELSE if($branch=="Electronics and Electrical Engineering")
	$branch="EEE";
ELSE if($branch=="Information Technology")
	$branch="IT";
$sum=0;$per=0;
$id=$row['id'];
echo "<tr>";
echo "<td>".$count."</td>";$count++;
	echo "<td ><a href='display.php?id=$id'>".$row['name']." ($branch)</a></td>";
	echo "<td>".$row['tmarks']."</td>";
	echo "<td>".$row['perc']."</td>";
	echo "<td>".$row['tperc']."</td>";

	echo "</tr>";
}


?>
</table>
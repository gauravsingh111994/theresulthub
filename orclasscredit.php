<head>
<?php

include 'menu.html';
?>
<script type="text/javascript">
if(screen.width<800 )
	window.location="mobrclass.php";
	</script>


<style>




body	 { 
position: absolute;

margin-left: 300px;
	
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

<h2><u>Ranklist With Credit</u></h2>


<br>

<table style="background-color:#FFFFE0;" width="800" border="1" cellpadding="1" cellspacing="1" >


<tr style="background-color:#BDB76B;color:#ffffff;">
<th>RANK</th>
<th>NAME</th>
<th>PERCENT WITHOUT CREDIT</th>
<th>PERCENT WITH CREDIT</th>
</tr></body>


<?php
session_start();

include 'password.php';

$year1=$_SESSION['year'];

$college1=$_SESSION['college'];
$_SESSION['year']=$year1;

$_SESSION['college']=$college1;


$branch1=$_SESSION['branch'];





	$_SESSION['branch']=$branch1;
	
		// FOR SECOND SHIFTS
	$flag=0;
	if($college1==148)
	{$college2=964;
	$flag=1;}
else if($college1==964)
{$college2=148;
$flag=1;
}
else if($college1==150)
{$college2=963;
$flag=1;}
else if($college1==963)
{$college2=150;
$flag=1;}

else if($college1==133)
{$college2=965;
$flag=1;}
else if($college1==965)
{$college2=133;
$flag=1;}
else if($college1==132)
{$college2=768;
$flag=1;}
else if($college1==768)
{	$college2=132;
$flag=1;}
else if($college1==115)
{$college2=512;

$flag=1;}
else if($college1==512)
{$college2=115;
$flag=1;}
else if($college1==156)
{$college2=962;
$flag=1;}
else if($college1==962)
{$college2=156;
$flag=1;

}
else if($college1==147)
{$college2=611;
$flag=1;

}
else if($college1==611)
{$college2=147;
$flag=1;

}
else if($college1==155)
{$college2=506;
$flag=1;

}
else if($college1==170)
{$college2=213;
$flag=1;

}
else if($college1==213)
{$college2=170;
$flag=1;

}
else if($college1==125)
{$college2=217;
$flag=1;

}
else if($college1==217)
{$college2=125;
$flag=1;

}
else if($college1==215)
{$college2=242;
$flag=1;

}
else if($college1==242)
{$college2=215;
$flag=1;

}
else if($college1==141)
{$college2=245;
$flag=1;

}
else if($college1==245)
{$college2=141;
$flag=1;

}
else if($college1==244)
{$college2=903;
$flag=1;

}
else if($college1==903)
{$college2=244;
$flag=1;

}
else if($college1==612)
{$college2=505;
$flag=1;

}
else if($college1==505)
{$college2=612;
$flag=1;

}
else if($college1==142)
{$college2=214;
$flag=1;

}
else if($college1==214)
{$college2=142;
$flag=1;

}
else if($college1==137)
{$college2=211;
$flag=1;

}
else if($college1==211)
{$college2=137;
$flag=1;

}
else if($college1==159)
{$college2=803;
$flag=1;

}
else if($college1==803)
{$college2=159;
$flag=1;

}
else if($college1==901)
{$college2=514;
$flag=1;

}
else if($college1==514)
{$college2=901;
$flag=1;

}
else if($college1==124)
{$college2=900;
$flag=1;

}
else if($college1==900)
{$college2=124;
$flag=1;

}
else if($college1==206)
{$college2=240;
$flag=1;

}
else if($college1==240)
{$college2=206;
$flag=1;

}
else if($college1==134)
{$college2=210;
$flag=1;

}
else if($college1==210)
{$college2=134;
$flag=1;

}
else if($college1==140)
{$college2=504;
$flag=1;

}
else if($college1==504)
{$college2=140;
$flag=1;

}
else if($college1==193)
{$college2=515;
$flag=1;

}
else if($college1==515)
{$college2=193;
$flag=1;

}
else if($college1==149)
{$college2=212;
$flag=1;

}
else if($college1==212)
{$college2=149;
$flag=1;

}

$select_db = mysql_select_db($year1) or header("Location: error.html");
if($flag==0)
$query1 = "SELECT DISTINCT * FROM $branch1 where $branch1.ENROLLMENTNO LIKE '___$college1%'  ORDER BY PERCENTAGEC DESC";
else
	$query1 = "SELECT DISTINCT * FROM $branch1 where ($branch1.ENROLLMENTNO LIKE '___$college1%' OR $branch1.ENROLLMENTNO LIKE '___$college2%')   ORDER BY PERCENTAGEC DESC";

$count=1;
$fetch1=mysql_query($query1) or die("Location: error.html");

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






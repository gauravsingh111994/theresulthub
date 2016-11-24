<!DOCTYPE html>
<html>
<?php

include 'menu.html';
?>
<head>
<script type="text/javascript">
if(screen.width<800 )
	window.location="moboverallr1.php";
	</script>

  <meta charset="UTF-8">

  <title>The ResultHub</title>
  <style>

 * {
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
::-webkit-input-placeholder { 
    color:    #4682B4;
}


form{
    border-style: solid;
	margin-top: 200px;
	
    border-color: white;
	margin-left: 400px;
	width: 460px;
	height:500px;
}

body {
  font: 16px Helvetica;
 background-color: #3B3738;
}

h1{
	margin-left: 120px;
}
h2{
	margin-left: 165px;
	font size: 5;
	
	
}


input[name=year] {
	


margin-left: 180px;
  background: #bdc3c7;
  border: none;
  height: 20px;
 
  width: 20px;
  border-radius: 5px;
  text-align: center;
  font-size: 14px;
  color: #7f8c8d;
}
input[name=sem] {
	

margin-top: 20px;
margin-left: 100px;
  background: #bdc3c7;
  border: none;
  width: 250px;
  height: 30px;
  margin-bottom: 15px;
  border-radius: 5px;
  text-align: center;
  font-size: 12px;
  color: #7f8c8d;
}
input[name=branch] {
	margin-left: 100px;
		
 width: 250px;
  background: #bdc3c7;
  border: none;
  height: 30px;
  margin-bottom: 5px;
  border-radius: 5px;
  text-align: center;
  font-size: 14px;
  color: #7f8c8d;
}

input[name=year]:focus {
  outline: none;
}
input[name=sem]:focus {
  outline: none;
}
input[name=branch]:focus {
  outline: none;
}
input[value=Submit] {
		
	margin-left: 110px;
	font-size: 20px;
  width: 200px;
  height: 35px;
  border: none;
  background: #3498db;
  color: #ecf0f1;
  font-weight: 100;
  margin-bottom: 15px;
  border-radius: 5px;
  transition: all ease-in-out .2s;
  border-bottom: 3px solid #2980b9;
}

input[value=Submit]:focus {
  outline: none;
}

input[value=Submit]:hover {
  background: #2980b9;
}





</style>
</head>



<body>







  
  
  <form action='orbranch.php' method='POST'>
   <h2><u>RANKLIST</u></h2>
	
   <input type='text'  placeholder="Branch Code" name='branch'>
     <br><br>
   <a href= "help.php" ><span style="color:white;margin-left: 100px;">Click here for help with branch code.</span></a>
  <h1><font size=4><b><u>YOUR STARTING YEAR</u></b></font></h1>

    <input  type='radio' name='year' value='11' >2011
	<br>
	<input  type='radio' name='year' value='12'>2012
<br>
	<input  type='radio' name='year' value='13'>2013
	<br>
	<input  type='radio' name='year' value='14'>2014
<br>
<input  type='radio' name='year' value='15'>2015
	<br><br>
   <input type='submit' value='Submit'>
	
	</form>
	


</body>



</html>
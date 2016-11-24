<!DOCTYPE html>
<html>

<head>

<?php

include 'menu.html';
?>


  <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8"  >
 </meta>
  <title>The ResultHub</title>
  <style>

 * {
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

form{
position: absolute;
    border-style: solid;
	margin-top: 100px;
	
    border-color: white;
	
	width: 100%;
	
}
::-webkit-input-placeholder { 
    color:    #4682B4;
}

body {
width: 100%;
height: 100%;
  font: 16px Helvetica;
 background-color: #3B3738;
}

h1{
	margin-left: 20%;
}
h2{
	margin-left: 30%;
	font size: 5;
	
	
}


input[name=year] {
	


margin-left: 40%;
  background: #bdc3c7;
  border: none;
  height: 20px;
 
  width: 20px;
  border-radius: 5px;
  text-align: center;
  font-size: 14px;
  color: #7f8c8d;
}
select {
	

margin-top: 20px;
margin-left: 10%;

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
	
	margin-left: 10%;	
 width: 250px;
  background: #bdc3c7;
  border: none;
  height: 30px;
  margin-bottom: 5px;
  border-radius: 5px;

  font-size: 14px;
  color: #7f8c8d;
}

input[name=year]:focus {
  outline: none;
}
select:focus {
  outline: none;
}
input[name=branch]:focus {
  outline: none;
}
input[value=Submit] {
		
	margin-left:20%;
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








  
  
  <form action='rbranch.php' method='POST'>
   <h2><u>RANKLIST</u></h2>
<select name='sem' >
<option value=''>--Select Semester--</option>
<option value='1'><span style="text-align:center">1</span></option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option></select>
	<br>
   <input type='text'  placeholder=' Branch Code' name='branch'>
    <br><br>
   <a href= "help.php" ><span style="color:white;margin-left: 10%;">Click here for help with branch code.</span></a>
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
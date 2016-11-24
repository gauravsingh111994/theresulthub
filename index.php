<!DOCTYPE html>
<html>
<?php

include 'menu.html';
?>
<head>
<script type="text/javascript">
if(screen.width<800 )
	window.location="mob.php";
</script>

 
  <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8"  >
 </meta>

  <title>The ResultHub</title>
  <style>

 * {
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
::-webkit-input-placeholder { 
    color:    #4682B4;
}


body {
  font: 16px Helvetica;

 
  background-color:#3B3738;
}

h2 {
	
	position: absolute;
    left: 11%;
    top: 255px;
	color: #fff;
	font-family: Abril Fatface;
	font-size: 60px;
	font-weight: 200;
}
h3 {
	
	position: absolute;
    left: 18%;
    top: 255px;
	color: red !important;
	background: black;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	font-family: Abril Fatface;
	font-size: 50px;
	font-weight: 200;
}
h1{
	 text-align: center;
	 
	 
}

h4{
	
 text-align: center;
	
}

section {
  width: 350px;
  background: #ecf0f1;
  padding: 0 30px 30px 30px;
  margin-top: 175px;
  margin-left: 500px;
  text-align: left;
  border-radius: 5px;
 
}

span {
  display: block;
  position: relative;
  margin: 0 auto;
 
  height: 80px;
  width: 80px;
  background: url('ipulogo1.jpg') center center no-repeat, #f39c12;
  border-radius: 50%;
  box-shadow: 1px 1px 2px rgba(0,0,0,.3);
}

input[name=text] {
  width: 100%;
  background: #bdc3c7;
  border: none;
  height: 30px;
  margin-bottom: 15px;
  border-radius: 5px;
  text-align: center;
  font-size: 14px;
  color: #7f8c8d;
}
input[name=text2] {
 
  background: #bdc3c7;
  border: none;
  margin-left: 110px;
  margin-top: -100px;
 
  border-radius: 5px;
  text-align: left;
  font-size: 14px;
  color: #7f8c8d;
}

input[name=text]:focus {
  outline: none;
}
input[name=text2]:focus {
  outline: none;
}
input[value=Submit] {
  width: 100%;
  height: 30px;
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


<h2>The</h2><h3>ResultHub</h3>

<section>



  <span></span>
  <h1><u>LOGIN</u></h1>
  <form action='result.php' method='POST'>
    <input placeholder='Enter your Enrollment No.' type='text' name='text'>
	<h4><b><u>PRESENT SEMESTER</u></b></h4>
	
    <input  type='radio' name='text2' value='1' >2ND
	<br>
	<input  type='radio' name='text2' value='3'>4TH
<br>
	<input  type='radio' name='text2' value='5'>6TH
	<br>
	<input  type='radio' name='text2' value='7'>8TH
	<br><br>
    <input type='submit' value='Submit'>
    
  
 </form>

</section>

</body>



</html>
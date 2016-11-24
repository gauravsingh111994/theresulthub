<?php
$dbhost = 'localhost';
$dbuser = 'gauravsingh1994';
$pass = 'Gaurav1994';
$connect = mysql_connect($dbhost,$dbuser,$pass) or header("Location: error.html");
?>
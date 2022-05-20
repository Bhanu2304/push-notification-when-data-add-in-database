<?php

$host = "localhost"; 
$user = "root"; 
$password = ""; 
$dbfull_name = "db_dialdesk"; 

$con = mysqli_connect($host, $user, $password,$dbfull_name);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
?>

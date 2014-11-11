<?php


		$username = "";
		$password = "";
		$hostname = "localhost"; 
		$dbname = "NMCS";

 
//mysqli_	
$con=mysqli_connect($hostname,$username,$password,$dbname);

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
  ?>
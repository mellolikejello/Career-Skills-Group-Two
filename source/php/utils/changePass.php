<?php
 include '../dbconnect.php';
$Currentpass = $_POST['password'];
 $NewPass =$_POST['newpassword'];
$result3 = mysqli_query($con,"SELECT * FROM `admin` WHERE `id` = '1' ");

while($row3 = mysqli_fetch_array($result3))
{
	$password = $row3['pass'];
	
	if($Currentpass != $password){
		header( 'Location: ../editPass.php?err=1' ) ;
	}
 }
 
$sql = "DELETE FROM `admin` WHERE `id` = 1";

if (mysqli_query($con, $sql)) {

	$ins = "INSERT INTO `admin`(`id`, `pass`) VALUES ('1', '$NewPass')";
	
	if (mysqli_query($con, $ins)) {
	
			header( 'Location: ../adminLogin.php?err=3' ) ;
	} 

}
?>
<?php
 include 'dbconnect.php';
 
session_start();
$seshp = $_SESSION["pass"];
$result3 = mysqli_query($con,"SELECT * FROM `admin` WHERE `id` = '1' ");
while($row3 = mysqli_fetch_array($result3))
{
$password = $row3['pass'];

	if($seshp != $password){
	header( 'Location: adminLogin.php?err=1' ) ;
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit Pass</title>
<link rel="stylesheet" type="text/css" href="../style/admin/Login.css">
</head>

<body>
<div id="topR">
<button><a href="../admin.php">Admin Home</a></button>


</div>
<div id="con">
<?php

if($_GET['err'] == 1){
echo '<h2 class="err">Incorrect current  Password</h2>';

}
?>

<p> Change your Password</p>
<form action="utils/changePass.php" method="post">
<table>
<tr><td>Current Password </td><td><input type="password" name="password"></td></tr>
<tr><td>New Password </td><td><input type="password" name="newpassword"></td></tr>
<tr><td></td><td><input type="submit" id="submit"></td></tr>
</table>
</form>
</div>
</body>

</html>
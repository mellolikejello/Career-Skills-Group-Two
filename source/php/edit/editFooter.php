<?php
 include '../dbconnect.php';
 
session_start();
$seshp = $_SESSION["pass"];
$result3 = mysqli_query($con,"SELECT * FROM `admin` WHERE `id` = '1' ");
while($row3 = mysqli_fetch_array($result3))
{
$password = $row3['pass'];

	if($seshp != $password){
	header( 'Location: ../adminLogin.php?err=1' ) ;
	}
}
?>

<?php 


$result = mysqli_query($con,"SELECT * FROM `Footer` WHERE `index` = '1' ");

while($row = mysqli_fetch_array($result))
{
	$yourdesc = $row['desc'];
	$yourpic = $row['pic'];
	$email = $row['email'];
	$phone = $row['phone'];
	
	$facebook = $row['facebook'];
	$twitter = $row['twitter'];
	$tumblr = $row['tumblr'];
	$pinterest = $row['pintrest'];
	$dribble = $row['dribble'];
	$github = $row['github'];
	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../../style/admin/editFooter.css">
<title>Edit Footer</title>
<script>
function replace (){
var text = document.getElementById("aboutme").value;
var str = text;
str = str.replace(/'/g, '&#39;');
document.getElementById("aboutme").value = str;

var text2 = document.getElementById("email").value;
var str2 = text2;
str2 = str2.replace(/@/g, '&#64;');
document.getElementById("email").value = str2;
}
</script>
</head>

<body>
<form action="update/updateFooter.php" method="post" enctype="multipart/form-data"></br>

<button><a href="../../admin.php">Admin Home</a></button>

<div id="con" >
<h1>Edit Footer</h1>
	<div id ="about">
		<label>About Me</label></p><textarea rows="20" cols="60" id="aboutme" name="aboutme"><?php echo $yourdesc; ?></textarea>
		</br>
	<table>
		<tr>
		<td><label>Your Picture (250 x 250)</label></td><td><input  type="file" name="yourpic" ></td>
		</tr>
		<tr>
		<td><label>Your Email</label> </td><td><input class="input"type="text" name="email" id="email" value="<?php echo $email; ?>" /></td>
		</tr>
		<tr>
		<td><label>Your Phone Number</label></td><td> <input class="input"type="text" name="phone" id="phone" value="<?php echo $phone; ?>"/>	</td>
		</tr>
	</table>
	</div>
	<div id="icons">
		<h2> Social Media Links </h2>
		<h3> Leave blank if you do not want it to appear</h3>
		<h3> *inlcude http://</h3>
		<table>
			<tr>
		<td><label>Facebook Link</label> </td><td><input type="text" name="icon1" value="<?php echo $facebook; ?>"/></td>
			</tr>
			<tr>
		<td><label>Twitter Link</label></td><td> <input type="text" name="icon2" value="<?php echo $twitter; ?>"/></td>
			</tr>
			<tr>
		<td><label>Tumblr Link</label> </td><td><input type="text" name="icon3" value="<?php echo $tumblr; ?>"/></td>
			</tr>
			<tr>
		<td><label>Pinterest Link</label> </td><td><input type="text" name="icon4" value="<?php echo $pinterest; ?>"/></td>
			</tr>
			<tr>
		<td><label>Dribble Link</label></td><td> <input type="text" name="icon5" value="<?php echo $dribble; ?>"/></td>
			</tr>
			<tr>
		<td><label>Github Link</label> </td><td><input type="text" name="icon6" value="<?php echo $github; ?>"/></td>
			</tr>
			
		</table>
	</div>


<!-- HIDDEN INPUTS FOR PICTURE VALUES IF NONE IS UPLODED -->
 <input type="hidden" name="yourpicBlank" value="<?php echo $yourpic; ?>">
 
<input type="submit" onclick="replace()" id="submit" value="Submit" />
</form>

<?php } ?>
</div>
</body>

</html>
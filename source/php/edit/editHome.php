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


$result = mysqli_query($con,"SELECT * FROM `Main` WHERE `index` = '1' ");

while($row = mysqli_fetch_array($result))
{
	$name = $row['name'];
	$skill1 = $row['skill1'];
	$skill2 = $row['skill2'];
	$skill3 = $row['skill3'];
	$background = $row['backphoto'];
	$resume = $row['resume'];
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../../style/admin/editHome.css">
<title>Edit Home</title> 
</head>

<body>
<button><a href="../../admin.php">Admin Home</a></button>
<div id="con">
<h1>Edit Home </h1>
<form action="update/updateHome.php" method="post" enctype="multipart/form-data"></br>


<table>
<tr>
	
		<td><label>Your Name</label> </td><td><input class="input" type="text" name="yourname" id="yourname" value="<?php echo $name; ?>"/></td>
</tr>
<tr>
		<td><label>Skill 1</label></td> </td><td><input class="input" type="text" name="firstskill" id="firstskill" value="<?php echo $skill1; ?>"/></td>
</tr>
		
<tr>
		<td><label>Skill 2</label></td><td> <input class="input" type="text" name="secondskill" id="secondskill" value="<?php echo $skill2; ?>"/></td>
</tr>
<tr>
		<td><label>Skill 3</label> </td><td><input class="input" type="text" name="thirdskill" id="thirdskill" value="<?php echo $skill3; ?>" /></td>
</tr>
<tr>
		<td><label>Background Photo (scalable image)</label> </td><td><input  size="60" class="file" type="file" name="background" /></td>
</tr>
<tr>
		<td><label>Resume PDF</label></td><td><input size="60" class="file"type="file" name="resume"></td>
</tr>

		
<tr>
		<td><input type="hidden" name="backgroundBlank" value="<?php echo $background; ?>">
		<input type="hidden" name="resumeBlank" value="<?php echo $resume; ?>"></td>

		<td><input type="submit" id="submit" value="Submit" ></td>
</tr>
</form>

<?php } ?>
</div>
</body>

</html>
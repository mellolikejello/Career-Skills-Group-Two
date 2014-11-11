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

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../../style/admin/editProj.css">
<meta charset="UTF-8">
<title>Title of the document</title>
<script>
function replace (){
var text = document.getElementById("mainDesc").value;
var str = text;
str = str.replace(/'/g, '&#39;');
document.getElementById("mainDesc").value = str;

var text2 = document.getElementById("stage1Desc").value;
var str2= text;
str2 = str.replace(/'/g, '&#39;');
document.getElementById("stage1Desc").value = str2;

var text3 = document.getElementById("stage2Desc").value;
var str3 = text;
str3 = str.replace(/'/g, '&#39;');
document.getElementById("stage2Desc").value = str3;

}

</script>
</head>


<body>
<button><a href="../../admin.php">Admin Home</a></button>
<div id="con">
<h1>Add a Project</h1>
<form action="insertProject.php" method="post" enctype="multipart/form-data">
<div id="info">
<table>
<tr><td><label>Filename</label></td><td> <input  class="input" type="text" name="file" /></td> </tr>
<tr><td><label>Order Displayed on Home</label></td><td> <input  class="num" type="number" name="order"  /></td> </tr>
<tr><td><label>Title</label> </td><td><input  class="input" type="text" name="title" id="title" /></td> </tr>
<tr><td><label>Subtitle</label> </td><td><input class="input" type="text" name="subtitle" id="subtitle"/></td> </tr>
<tr><td valign="top"><label>Main Description</label></td><td><textarea  rows="20" cols="60" id="mainDesc" name="mainDesc"></textarea></td> </tr>
<tr><td><label>Main Image (1280 x 800)</label> </td><td><input type="file" name="mainImage"></td> </tr>

<tr><td><label>Developed or Designed?</label> </td><td>
<select class="input"  name="dev" >
 <option value="Developed">Developed</option>
  <option value="Designed">Designed</option>
  <option value="Designed and Developed">Both</option>
</select></td> </tr>

<tr><td><label>Devices it was made for</label></td><td><input class="input"  type="text" name="devices" id="devices" /></td> </tr>
<tr><td><label> Length of Project?</label></td><td> <input class="num" type="number" name="length" id="length"  /></td> </tr>
<tr><td><p>Stage 1</p></td><td></td> </tr>
<tr><td><label>Weeks to Complete</label></td><td> <input class="num" type="number" name="Stage1_Weeks"  /></td> </tr>
<tr><td valign="top"><label>Description</label></td><td><textarea rows="20" cols="60" id="Stage1Desc" name="Stage1Desc" ></textarea></td> </tr>

<tr><td><p>Stage 2</p></td> </tr>
<tr><td><label>Weeks to Complete</label> </td><td><input class="num" type="number" name="Stage2_Weeks"></td> </tr>
<tr><td valign="top"><label>Description</label></td><td><textarea rows="20" cols="60" id="Stage2Desc" name="Stage2Desc"></textarea></td> </tr>
</table>
</div>


<div id="uploads">
<h2>Upload Images</h2>
<h3>Leave blank to keep current Image</h3>
<table>

<tr><td><label>Banner<label></td><td> <input type="file" name="s1"></td> </tr>

<tr><td><p>Tile Images</p></td><td></td> </tr>
<tr><td><label>Tile1 (190 x 180)</label></td><td> <input type="file" name="t1"> </td> </tr>
<tr><td><label>Tile2 (260 x 180)</label></td><td> <input type="file" name="t2"></td> </tr>
<tr><td><label>Tile3 (190 x 180)</label></td><td> <input type="file" name="t3"></td> </tr>
<tr><td><label>Tile4 (260 x 180)</label> </td><td><input type="file" name="t4"></td> </tr>
<tr><td><label>Tile5 (260 x 180)</label></td><td> <input type="file" name="t5"></td> </tr>
<tr><td><label>Tile6 (190 x 180)</label></td><td> <input type="file" name="t6"></td> </tr>
<tr><td><label>Tile7 (260 x 180)</label></td><td> <input type="file" name="t7"></td> </tr>
<tr><td><label>Tile8 (190 x 180)</label> </td><td><input type="file" name="t8"></td> </tr>
<tr><td><label>Default Tile (scalable image)</label> </td><td><input type="file" name="tile"></td> </tr>
<tr><td><p></p></td><td></td> </tr>
<tr><td><label>Video</label> </td><td><input type="file" name="video"> </td> </tr>
</table>
</div>

<input onclick="replace()" type="submit" id="submit" value="Submit" />
</body>

</html>
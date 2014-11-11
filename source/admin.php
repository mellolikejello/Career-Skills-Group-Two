<?php
 include 'php/dbconnect.php';
 
session_start();
$seshp = $_SESSION["pass"];
$result3 = mysqli_query($con,"SELECT * FROM `admin` WHERE `id` = '1' ");
while($row3 = mysqli_fetch_array($result3))
{
$password = $row3['pass'];

	if($seshp != $password){
	header( 'Location: php/adminLogin.php?err=1' ) ;
	}
}





ini_set("mbstring.internal_encoding","UTF-8");
ini_set("mbstring.func_overload",7);
	
	

 
 
 
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style/admin/admin.css">
</head>
<body>
<div id="topR">
<button><a href="php/utils/endSession.php">Logout</a></button>
<button><a href="php/editPass.php">Change Password</a></button>

</div>
<div id="con">
<h1>Admin</h1>
<?php

if($_GET['err'] == 1){
echo '<h2 class="good">Footer updated</h2>';

}
if($_GET['err'] == 2){
echo '<h2 class="good">Homepage updated</h2>';

}
if($_GET['err'] == 3){
echo '<h2 class="good">Project Updated</h2>';

}
?>
<div id="Links">
<button><a href="php/edit/editHome.php">Edit the Main </a></button>
<button><a href="php/edit/editFooter.php">Edit the Footer</a></button>
<button><a href="php/proj/addProject.php">Add a Project</a></button>
<button><a href="index.php">View Homepage</a></button>
</div>
<?php

$result = mysqli_query($con,"SELECT * FROM `Projects` ORDER BY `Order` ASC");

echo '<table>';
echo '<tr><th></th><th>Project Title </th><th> Order </th><th> </th></tr>';
while($res = mysqli_fetch_array($result)){
$index = $res['index'];
$title = $res['Title'];
$filename = $res['filename'];
$order = $res['Order'];

echo '<tr>';
echo '<td>';
echo '<form name="singleform" method="POST" action="php/edit/editProject.php">';
echo '<input type="hidden" name="index" value="' .$index. '">';
echo '<input class="pagelink" type="submit" name="Submit" value="Edit" />';
echo '</form>';
echo '</td>';
echo '<td class="midd">'.$title. '</td>';
echo '<td class="ord">'.$order. '</td>';
echo '<td>';
echo '<form name="deleteform" method="POST" action="php/proj/deleteProject.php">';
echo '<input type="hidden" name="index" value="' .$index. '">';
echo '<input type="hidden" name="file" value="' .$filename. '">';
echo '<input class="pagelink" type="submit" name="Submit" value="Delete" />';
echo '</form>';
echo '</td>';
echo '</tr>';



}
echo '</table>';


?>
</div>
</body>
</html>
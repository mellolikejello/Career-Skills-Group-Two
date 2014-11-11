<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="../style/admin/Login.css">
</head>
<div id="con">
<body>
<?php
if($_GET['err'] == 1){
echo '<h2 class="err">Incorrect Password</h2>';

}
if($_GET['err'] == 2){
echo '<h2 class="good" >Logout Successful</h2>';

}
if($_GET['err'] == 3){
echo '<h2 class="good" >Password Successfully Changed</h2>';

}
?>

<p> Enter Admin Password  </p>

<form action="sessionStart.php" method="post">
<table>
<tr><td>Password </td><td><input type="password" name="password"></td></tr>
<tr><td></td><td><input id="submit"; type="submit"></td></tr>
</table>
</form>
</div>
</body>

</html>
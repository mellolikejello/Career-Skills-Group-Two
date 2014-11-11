<?php

ini_set("mbstring.internal_encoding","UTF-8");
ini_set("mbstring.func_overload",7);
	
	
 include '../../dbconnect.php';
//footer.php
$aboutme = $_POST['aboutme'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$facebook = $_POST['icon1'];
$twitter = $_POST['icon2'];
$tumblr = $_POST['icon3'];
$pinterest = $_POST['icon4'];
$dribble =$_POST['icon5'];
$github = $_POST['icon6'];

$yourpic = ($_FILES['yourpic']['name']); 
$yourpicBlank = $_POST['yourpicBlank'];
//Resume


$tarDir =  "../../../Images/footer/";
$tarDirU =  "Images/footer/";

if($yourpic != ""){
		$yourpic = $tarDir . basename($_FILES['yourpic']['name']);

		if(move_uploaded_file($_FILES['yourpic']['tmp_name'], $yourpic)) { 
				$yourpic = $tarDirU . basename($_FILES['yourpic']['name']);
			} 
}
if($yourpic == ""){

	$yourpic = $yourpicBlank;
			
}

$sql = "DELETE FROM `Footer` WHERE `index` = 1";

if (mysqli_query($con, $sql)) {
    
	$sql2 = "INSERT INTO `Footer`(`index`, `desc`, `pic`, `email`, `phone`, `facebook`, `twitter`, `tumblr`, `pintrest`, `dribble`, `github`) VALUES (1,'$aboutme','$yourpic','$email','$phone','$facebook','$twitter','$tumblr','$pinterest','$dribble','$github')";
	
			if (mysqli_query($con, $sql2)) {
			
			} else {
				echo "Error inserting record: " . mysqli_error($con);
			
			}
	
	
	
} else {
    echo "Error deleting record: " . mysqli_error($con);
	
}
	mysqli_close($con);		
	
	header( 'Location:../../../admin.php?err=1' ) ;
			

?>
<?php

ini_set("mbstring.internal_encoding","UTF-8");
ini_set("mbstring.func_overload",7);
	
	
 include '../../dbconnect.php';
//footer.php
$name = $_POST['yourname'];
$skill1= $_POST['firstskill'];
$skill2= $_POST['secondskill'];
$skill3= $_POST['thirdskill'];


$background = ($_FILES['background']['name']); 
$backgroundBlank = $_POST['backgroundBlank'];
//Resume
$resume = ($_FILES['resume']['name']); 
$resumeBlank = $_POST['resumeBlank'];

$tarDir =  "../../../Images/home/";
$tarDirU =  "Images/home/";
$resumeDir = "../../../";




if($background != ""){
			$background = $tarDir . basename($_FILES['background']['name']);
			if(move_uploaded_file($_FILES['background']['tmp_name'], $background)) { 
					$background = $tarDirU . basename($_FILES['background']['name']);
						} 
}
if($background == ""){
	
		$background = $backgroundBlank;
}		
if($resume != ""){
		$resume =  $resumeDir . basename($_FILES['background']['name']);
		if(move_uploaded_file($_FILES['resume']['tmp_name'], $resume)) { 
				$resume = ($_FILES['resume']['name']); 
			} 
}
if($resume == ""){
	
		$resume = $resumeBlank;
}
$sql = "DELETE FROM `Main` WHERE `index` = 1";

if (mysqli_query($con, $sql)) {
    
	$sql2 = "INSERT INTO `Main`(`index`, `name`, `skill1`, `skill2`, `skill3`, `backphoto`, `resume`) VALUES (1,'$name','$skill1','$skill2','$skill3','$background','$resume')";
	
			if (mysqli_query($con, $sql2)) {
			
			} else {
				echo "Error inserting record: " . mysqli_error($con);
			
			}
	
	
	
} else {
    echo "Error deleting record: " . mysqli_error($con);
	
}
	mysqli_close($con);		
	
	header( 'Location:../../../admin.php?err=2' ) ;
			

?>
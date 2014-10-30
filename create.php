<?php
error_reporting(-1);
//index.php
$name = $_POST["yourname"];

$skill1 = $_POST["firstskill"];
$skill2 = $_POST["secondskill"];
$skill3 = $_POST["thirdskill"];

$backgroundPhoto = ($_FILES['background']['name']); 


//footer.php
$aboutme = $_POST['aboutme'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$yourpic = ($_FILES['yourpic']['name']); 

//Resume
$resume = ($_FILES['resume']['name']); 

$tarDir =  "Images/home/";
$tarfootDir = "Images/footer/";
$projDir = "projects/Images/footer/";

$backgroundPhoto = $tarDir . basename($_FILES['background']['name']);
$yourpic = $tarfootDir . basename($_FILES['yourpic']['name']);
$your2 =  $projDir . basename($_FILES['yourpic']['name']);



	if(move_uploaded_file($_FILES['background']['tmp_name'], $backgroundPhoto)) { 
			} 
	

	if(move_uploaded_file($_FILES['yourpic']['tmp_name'], $yourpic)) { 
			} 
	
	if(move_uploaded_file($_FILES['resume']['tmp_name'], $resume)) { 
			} 
			if(!copy($yourpic, $your2)){
				echo 'no';
			}

include 'setuptemps.php';
			
	$myfile = fopen("index.php", "w") or die("Unable to open file!");
	fwrite($myfile, $mainHTML);
	
	$myFooter = fopen("footer.php", "w") or die("Unable to open file!");
	fwrite($myFooter, $footer);
	
	$myResume = fopen("resume.html", "w") or die("Unable to open file!");
	fwrite($myResume, $resume);


?>
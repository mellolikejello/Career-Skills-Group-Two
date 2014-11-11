<?php
ini_set("mbstring.internal_encoding","UTF-8");
ini_set("mbstring.func_overload",7);
	
	
 include '../../dbconnect.php';
 
        $filename = $_POST['file'];
		if(!file_exists('../../../Images/'.$filename.'')){
			mkdir('../../../Images/'.$filename.'', 0755, true);
		}
		
		
		$id = $_POST['index'];
		$title = $_POST['title'];
		$subtitle = $_POST['subtitle'];
		$mainDesc = $_POST['mainDesc'];
		$Stage_1_weeks =  $_POST['Stage1_Weeks'];
		$Stage_1_Desc= $_POST['Stage1Desc'];
		$Stage_2_weeks =  $_POST['Stage2_Weeks'];
		$Stage_2_Desc= $_POST['Stage2Desc'];
		$devordes = $_POST['dev'];
		$device = $_POST['devices'];
		$length = $_POST['length'];
		$tarDir= "../../../Images/". $filename."/";
		$tarDirU= "Images/". $filename."/";
		
		
		$main = ($_FILES['mainImage']['name']);
		$s1 = ($_FILES['s1']['name']); 
		$s2 = ($_FILES['s2']['name']); 
		$s3 = ($_FILES['s3']['name']); 
		$s4 = ($_FILES['s4']['name']); 
		$s5 = ($_FILES['s5']['name']); 
		$s6 = ($_FILES['s6']['name']); 
		
		$t1 = ($_FILES['t1']['name']); 
		$t2 = ($_FILES['t2']['name']); 
		$t3 = ($_FILES['t3']['name']); 
		$t4 = ($_FILES['t4']['name']); 
		$t5 = ($_FILES['t5']['name']); 
		$t6 = ($_FILES['t6']['name']); 
		$t7 = ($_FILES['t7']['name']); 
		$t8 = ($_FILES['t8']['name']); 
		$tile = ($_FILES['tile']['name']); 
		$video= ($_FILES['video']['name']); 
		
		$mainB = $_POST['mainImgB'];
		$s1B = $_POST['s1B']; 
		$s2B = $_POST['s2B']; 
		$s3B= $_POST['s3B']; 
		$s4B = $_POST['s4B']; 
		$s5B = $_POST['s5B']; 
		$s6B= $_POST['s6B']; 
		$t1B = $_POST['t1B']; 
		$t2B = $_POST['t2B']; 
		$t3B = $_POST['t3B'];
		$t4B = $_POST['t4B'];
		$t5B = $_POST['t5B'];
		$t6B = $_POST['t6B'];
		$t7B = $_POST['t7B'];
		$t8B = $_POST['t8B']; 
		$videoB= $_POST['videoB'];
		$tileB = $_POST['tileB'];
		
		$order = $_POST['order'];
        // path and name of the file
		
		
		include '../../utils/upload.php';
		
$sql2 = "DELETE FROM `Projects` WHERE `index` = '$id' ";

if (mysqli_query($con, $sql2)) {
		
		$sql = "INSERT INTO `Projects`(`index`, `Order` ,`filename`, `Title`, `Subtitle`, `main_desc`, `mainImg`, `devordes`, `devices`, `length`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `stage_1_weeks`, `stage_1_desc`, `t1`, `t2`, `t3`, `t4`, `t5`, `t6`, `t7`, `t8`, `stage_2_weeks`, `stage_2_desc`, `video`, `defTile`) VALUES ('$id', '$order',
		'$filename',
		'$title',
		'$subtitle',
		'$mainDesc',
		'$main',
		'$devordes',
		'$device',
		'$length',
		'$s1',
		'$s2',
		'$s3',
		'$s4',
		'$s5',
		'$s6',
		'$Stage_1_weeks',
		'$Stage_1_Desc',
		'$t1',
		'$t2',
		'$t3',
		'$t4',
		'$t5',
		'$t6',
		'$t7',
		'$t8',
		'$Stage_2_weeks',
		'$Stage_2_Desc',
		'$video',
		'$tile')";
	
			if (mysqli_query($con, $sql)) {
			
			} else {
				echo "Error inserting record: " . mysqli_error($con);
			
			}
	}	else {
    echo "Error deleting record: " . mysqli_error($con);
	
}
	


	
header( 'Location: ../../../admin.php?err=3' ) ;
    ?>
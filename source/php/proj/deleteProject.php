<?php
 include '../dbconnect.php';
$id =$_POST['index'];
$filename =$_POST['file'];
$sql2 = "DELETE FROM `Projects` WHERE `index` = '$id' ";

if (mysqli_query($con, $sql2)) {
		
		$files = glob('../../Images/' . $filename . '/*'); // get all file names
			foreach($files as $file){ // iterate files
			if(is_file($file))
					unlink($file); // delete file
					
		rmdir('../../Images/' . $filename . '');
}
	
	}	else {
    echo "Error deleting record: " . mysqli_error($con);
	
}
header( 'Location: ../../admin.php' ) ;
?>
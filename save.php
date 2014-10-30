<?php
		
        $filename = $_POST['file'];
		if(!file_exists('projects/Images/'.$filename.'')){
			mkdir('projects/Images/'.$filename.'', 0755, true);
		}
		
		
		$align = $_POST['align'];
		$title = $_POST['title'];
		$subtitle = $_POST['subtitle'];
		$mainDesc = $_POST['mainDesc'];
		$Stage_1_weeks =  $_POST['Stage1_Weeks'];
		$Stage_1_Desc= $_POST['Stage1Desc'];
		$Stage_2_weeks =  $_POST['Stage2_Weeks'];
		$Stage_2_Desc= $_POST['Stage2Desc'];
		
		$tarDirU= "projects/Images/". $filename."/";
		$tarDir= "Images/". $filename."/";
		
		$tarDir2= "Images/home/";
		
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
		
		$video= ($_FILES['video']['name']); 
		
		
		
		$fillin= "../Images/placeholder.jpg";
        // path and name of the file
		
		
		include 'upload.php';
		
		
		$myfile = fopen("projects/".$filename.".php", "w") or die("Unable to open file!");
		include 'template.php';
fwrite($myfile, $txt);
		
fclose($myfile);
$mainR = <<<MAIN
<div class="project">
            <img class="float-right" src="$main" alt="alt text">
            <div class="project-info_L">
                <h3>$title</h3>
				<h4>$subtitle</h2>
                <p>$mainDesc</p>
				<a href="projects/$filename.php"><button class="pagelink">See more of this</button></a>
            </div>
        </div>
		
MAIN;

$mainL = <<<MAIN
<div class="project">
            <img class="float-left" src="$main" alt="alt text">
            <div class="project-info_R">
                <h3>$title</h3>
				<h4>$subtitle</h2>
                <p>$mainDesc</p>
				<a href="projects/$filename.php"><button class="pagelink">See more of this</button></a>
            </div>
        </div>
		
MAIN;
$filename ='index.php';
$lines = file($filename);
$num_lines = count($lines);

if($align == 'right'){
	if ($num_lines > 15) {
		array_splice($lines, $num_lines - 6, 0, array($mainR));
		file_put_contents($filename, implode('', $lines));
	} else {
		file_put_contents($filename, PHP_EOL . $content, FILE_APPEND);
	}

}
if($align == 'left'){
	if ($num_lines > 15) {
		array_splice($lines, $num_lines - 6, 0, array($mainL));
		file_put_contents($filename, implode('', $lines));
	} else {
		file_put_contents($filename, PHP_EOL . $content, FILE_APPEND);
	}

}

	
header( 'Location: index.php' ) ;
    ?>
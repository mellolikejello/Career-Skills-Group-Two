<?php
		
        $filename = $_POST['file'];
		$align = $_POST['align'];
		$title = $_POST['title'];
		$subtitle = $_POST['subtitle'];
		$mainDesc = $_POST['mainDesc'];
		$Stage_1_weeks =  $_POST['Stage1_Weeks'];
		$Stage_1_Desc= $_POST['Stage1Desc'];
		$Stage_2_weeks =  $_POST['Stage2_Weeks'];
		$Stage_2_Desc= $_POST['Stage2Desc'];
		
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
		$t8= ($_FILES['t8']['name']); 
		
		$video= ($_FILES['video']['name']); 
		
		
		$fillin= "placeholder.jpg";
        // path and name of the file
		if ($main == ""){
			$main= $fillin;
		}
		if ($s1 == ""){
			$s1 = $fillin;
		}
		if ($s2 == ""){
			$s2 = $fillin;
		}
		if ($s3 == ""){
			$s3 = $fillin;
		}
		if ($s4 == ""){
			$s4 = $fillin;
		}
		if ($s5 == ""){
			$s5 = $fillin;
		}
		if ($s6 == ""){
			$s6 = $fillin;
		}
		
		if ($t1 == ""){
			$t1= $fillin;
		}
		if ($t2 == ""){
			$t2 = $fillin;
		}
		if ($t3 == ""){
			$t3 = $fillin;
		}
		if ($t4 == ""){
			$t4 = $fillin;
		}
		if ($t5 == ""){
			$t5 = $fillin;
		}
		if ($t6 == ""){
			$t6 = $fillin;
		}
		if ($t7 == ""){
			$t7 = $fillin;
		}
		if ($t8 == ""){
			$t8 = $fillin;
		}
		if ($video == ""){
			$video= $fillin;
		}
		
		
		$myfile = fopen("".$filename.".html", "w") or die("Unable to open file!");
		include 'template.php';
fwrite($myfile, $txt);
		
fclose($myfile);
$mainR = <<<MAIN
<div class="project">
            <img class="float-right" src="Images/$main" alt="alt text">
            <div class="project-info_L">
                <h3>$title</h3>
				<h4>$subtitle</h2>
                <p>$mainDesc</p>
				<a href="$filename.html"><button class="pagelink">See more of this</button></a>
            </div>
        </div>
		
MAIN;

$mainL = <<<MAIN
<div class="project">
            <img class="float-left" src="Images/$main" alt="alt text">
            <div class="project-info_R">
                <h3>$title</h3>
				<h4>$subtitle</h2>
                <p>$mainDesc</p>
				<a href="$filename.html"><button class="pagelink">See more of this</button></a>
            </div>
        </div>
		
MAIN;
$filename ='index.html';
$lines = file($filename);
$num_lines = count($lines);

if($align == 'right'){
	if ($num_lines > 15) {
		array_splice($lines, $num_lines - 16, 0, array($mainR));
		file_put_contents($filename, implode('', $lines));
	} else {
		file_put_contents($filename, PHP_EOL . $content, FILE_APPEND);
	}

}
if($align == 'left'){
	if ($num_lines > 15) {
		array_splice($lines, $num_lines - 16, 0, array($mainL));
		file_put_contents($filename, implode('', $lines));
	} else {
		file_put_contents($filename, PHP_EOL . $content, FILE_APPEND);
	}

}

	
header( 'Location: index.html' ) ;
    ?>
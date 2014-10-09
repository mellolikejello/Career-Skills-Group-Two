<?php
        $filename = $_POST['file'];
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
		

        // path and name of the file
		if ($main == ""){
			$main= "No Image";
		}
		if ($s1 == ""){
			$s1 = "No Image";
		}
		if ($s2 == ""){
			$s2 = "No Image";
		}
		if ($s3 == ""){
			$s3 = "No Image";
		}
		if ($s4 == ""){
			$s4 = "No Image";
		}
		if ($s5 == ""){
			$s5 = "No Image";
		}
		if ($s6 == ""){
			$s6 = "No Image";
		}
		
		if ($t1 == ""){
			$t1= "No Image";
		}
		if ($t2 == ""){
			$t2 = "No Image";
		}
		if ($t3 == ""){
			$t3 = "No Image";
		}
		if ($t4 == ""){
			$t4 = "No Image";
		}
		if ($t5 == ""){
			$t5 = "No Image";
		}
		if ($t6 == ""){
			$t6 = "No Image";
		}
		if ($t7 == ""){
			$t7 = "No Image";
		}
		if ($t8 == ""){
			$t8 = "No Image";
		}
		if ($video == ""){
			$video= "No Video";
		}
		
		
		$myfile = fopen("".$filename.".html", "w") or die("Unable to open file!");
		$txt = <<<END
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>$title</title>
		<link href="style/slider.css" rel="stylesheet" type="text/css">
		<script src="js/slider.js"></script>
	</head>
	<body>
		<h1>$title</h1>
		<h2>$Subtitle</h2>
		 <div class="slide_container">
        <div class="slider_wrapper">
            <ul id="image_slider">
                <li><img src="Images/$s1"></li>
                <li><img src="Images/$s2"></li>
               <li><img src="Images/$s3"></li>
			   <li><img src="Images/$s4"></li>
			   <li><img src="Images/$s5"></li>
			   <li><img src="Images/$s6"></li>
            </ul>
            <span class="nvgt" id="prev"></span>
            <span class="nvgt" id="next"></span>        
        </div>
        <ul id="pager">
        </ul>
    </div>
	<div id="Stage1">
		<h2>Stage 1</h2>
		<h3>$Stage_1_Weeks</h3>
		<p class="Desc">$Stage_1_Desc</p>
	</div>
	<div id="titles">
	</div>
	<div id="Stage2">
		<h2>Stage 2</h2>
		<h3>$Stage_2_Weeks</h3>
		<p class="Desc">$Stage_2_Desc</p>
	</div>
	</body>
</html>
END;
fwrite($myfile, $txt);
		
fclose($myfile);
$main = <<<MAIN
<div class="project">
            <img class="float-left" src="http://allaboutuarts.ca/wp-content/uploads/2012/07/placeholder.jpg" alt="alt text">
            <div class="project-info float-right">
                <h3>Project Title</h3>
                <p>Project Description</p>
            </div>
        </div>
MAIN;
$filename ='index.html';
$lines = file($filename);
$num_lines = count($lines);

if ($num_lines > 17) {
    array_splice($lines, $num_lines - 17, 0, array($main));
    file_put_contents($filename, implode('', $lines));
} else {
    file_put_contents($filename, PHP_EOL . $content, FILE_APPEND);
}




	

    ?>
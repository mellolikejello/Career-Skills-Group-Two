<?php

include 'php/dbconnect.php';

$result = mysqli_query($con,"SELECT * FROM `Main` WHERE `index` = '1' ");

while($row = mysqli_fetch_array($result))
{
	$name = $row['name'];
	$skill1 = $row['skill1'];
	$skill2 = $row['skill2'];
	$skill3 = $row['skill3'];
	$background = $row['backphoto'];
	

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title><?php echo $name; ?></title>
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <link href="style/slider.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,100|Raleway' rel='stylesheet' type='text/css'>
    <script src="js/script.js"></script>
    <script src="js/slider.js"></script>
    <!-- HTML5 Shiv for Browser Compatibility -->
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<style>
	#welcome-view{ background: #000000 url('<?php echo $background; ?>') ; background-size: auto 175%;}
	</style>
</head>
<body>

	<div id="con">
    <div id="welcome-view">
        <h2 id="welcome-header">
            <a href="resume.pdf" target="_about">Resume</a>
			<a href="#contact">Contact</a>
            <a href="#work">Work</a>
			</h2>
        <h1 id="welcome-text">Hey, I'm <?php echo $name; ?></h1>
		<h3 id="skill-text"><?php echo $skill1."-".$skill2."-".$skill3; ?></h3>
    </div>
	<div id="content" name="work">
       
	   		<?php	
			
			$result2 = mysqli_query($con,"SELECT * FROM `Projects` ORDER BY `Order` ASC");
			
			while($res = mysqli_fetch_array($result2)){
				$index= $res['index'];
				$filename = $res['filename'];
				$title = $res['Title'];
				$subtitle = $res['Subtitle'];
				$main_desc = $res['main_desc'];
				$main_img = $res['mainImg'];
				$order = $res['Order'];
				
			if($order % 2 ){
				echo '<div class="project">';
				echo '<img class="float-left" src="' . $main_img . '" alt="alt text">';
				echo '<div class="project-info_R">';
				echo '<h3>' . $title . '</h3>';
				echo '<h4>' . $subtitle . '</h2>';
				echo '<p>' . $main_desc . '</p>';
				echo '<form name="singleform" method="POST" action="project.php">';
				echo '<input type="hidden" name="index" value="' .$index. '">';
				echo '<input class="pagelink" type="submit" name="Submit" value="See more of this" />';
				echo '</form>';
				echo '</div>';
				echo '</div>';
			}
			else{
					echo '<div class="project">';
					echo '<img class="float-right" src="' . $main_img . '" alt="alt text">';
					echo '<div class="project-info_L">';
					echo '<h3>' . $title . '</h3>';
					echo '<h4>' . $subtitle . '</h2>';
					echo '<p>' . $main_desc . '</p>';
					echo '<form name="singleform" method="POST" action="project.php">';
					echo '<input type="hidden" name="index" value="' .$index. '">';
					echo '<input class="pagelink" type="submit" name="Submit" value="See more of this" />';
					echo '</form>';
					echo '</div>';
					echo '</div>';
			
			}
		
		}
		?>

<?php } ?>
																		      									
 </div>
<?php include 'footer.php'; ?>
</div>
</body>
</html>

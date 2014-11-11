<?php
ini_set("mbstring.internal_encoding","UTF-8");
ini_set("mbstring.func_overload",7);
	
	
 include 'php/dbconnect.php';
 
 $id = $_POST['index'];
 
 $result2 = mysqli_query($con,"SELECT * FROM `Main` WHERE `index` = '1' ");

while($row = mysqli_fetch_array($result2)){
	$name = $row['name'];
	


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Project</title>
	<link href="style/slider.css" rel="stylesheet" type="text/css">
	 <link href="style/style.css" rel="stylesheet" type="text/css">
    <link href="style/project.css" rel="stylesheet" type="text/css">
    
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,100' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<script src="js/script.js"></script>
    <script src="js/slider.js"></script>
    <!-- HTML5 Shiv for Browser Compatibility -->
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<title><?php echo $name; ?></title>
</head>
<body>
<div id="container">
	<div id="con">
		<h2 id="welcome-header">
        <a href="resume.pdf" target="_about">Resume</a>
		<a href="#contact">Contact</a>
        <a id="home-link" href="index.php"><?php echo $name ?></a>
    </h2>
		
		<?php
}
		$result = mysqli_query($con," SELECT * FROM `Projects` WHERE `index` = '$id'");

		while($res = mysqli_fetch_array($result)){
		$index = $res['index'];
		$filename = $res['filename'];
		$title = $res['Title'];
		$subtitle = $res['Subtitle'];
		$mainDesc = $res['main_desc'];
		$devordes = $res['devordes'];
		$devices = $res['devices'];
		$length = $res['length'];
		$stage1w= $res['stage_1_weeks'];
		$stage1d = $res['stage_1_desc'];
		$stage2w = $res['stage_2_weeks'];
		$stage2d = $res['stage_2_desc'];

		$mainImg = $res['mainImg'];
		$s1 = $res['s1'];
		$s2 = $res['s2'];
		$s3 = $res['s3'];
		$s4 = $res ['s4'];
		$s5 = $res['s5'];
		$s6 = $res['s6'];
		$t1 = $res['t1'];
		$t2 = $res['t2'];
		$t3 = $res['t3'];
		$t4 = $res['t4'];
		$t5= $res['t5'];
		$t6 = $res['t6'];
		$t7 = $res['t7'];
		$t8 = $res['t8'];
		$video = $res['video'];
		$tile = $res['defTile'];
		
	
?>
  <div id="content">
	<div id="title">
	
		<h1><?php echo $title; ?></h1>
		<h2><?php echo $subtitle; ?></h2>
		<div id="dev">
			<h3><?php echo $devordes . " for: " . $devices; ?></h3>
			<h4> Timeline: <?php if($length == 1 ){echo $length . " week"; }if($length > 1){echo $length . " weeks";}?>
			</h4>
		</div>
	</div>
	<?php 
	echo ' <img id="slide-view" src="'.$s1.'">';
	
	
	?>	
        <div class="stage">
		<h1><?php if($stage1w != 0){ echo 'Stage 1'; }?></h1>
		<h2>  <?php if($stage1w != 0){echo "Week" . $stage21w; }?></h2>
		<p><?php if($stage1d != ""){echo $stage1d; }?></p>
</div>

<?php
include 'php/utils/tiles.php';
?>
<div class="stage">
		<h1><?php if($stage2w != 0){ echo 'Stage 2'; }?></h1>
		<h2>  <?php if($stage2w != 0){echo "Week" . $stage2w; }?></h2>
		<p><?php if($stage2d != ""){echo $stage2d; }?></p>
</div>
<?php
if($video != ""){
echo '<div id="video">';
echo '<video  controls>';
echo '<source src="' . $video . '" type="video/mp4">';
echo '<source src="' . $video . '" type="video/ogg">';
echo 'Your browser does not support the video.';
echo '</video>';
echo '</div>';
}

?>
	
  


<?php include 'footer.php' ?>

 </div>  
</body>
<?php } ?>
</html>
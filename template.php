<?php
$txt = <<<END
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Your Name</title>
    <link href="style/project.css" rel="stylesheet" type="text/css">
    <link href="style/slider.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,100' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<script src="js/script.js"></script>
    <script src="js/slider.js"></script>
    <!-- HTML5 Shiv for Browser Compatibility -->
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<div id="container">
	<div id="con">
		<div id="header">
			<h1>Your Name</h1>
			<a href="">Resume</a>
			<a href="index.html">Home</a>
		</div>
	<div id="title">
		<h1>$title</h1>
		<h2>$subtitle</h2>
		<div id="dev">
			<h3>Devices it was made for</h3>
			<h4> timeline: # weeks</h4>
		</div>
	</div>
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
	<div class="stage">
		<h1>Project Stage</h1>
		<h2>Week $Stage_1_weeks</h2>
		<p>$Stage_1_Desc</p>
</div>
<div id="gallery">

	<div id="row1"> 
		<div class="small">
			<img src="Images/$t1"</>
		</div>
		<div class="big">
			<img src="Images/$t2"</>
		</div>
		<div class="small">
			<img src="Images/$t3"</>
		</div>
	<div class="big">
			<img src="Images/$t4"</>
		</div>
	</div>
	<div id="row2"> 
		<div class="big">
			<img src="Images/$t5"</>
		</div>
		<div class="small">
			<img src="Images/$t6"</>
		</div>
		<div class="big">
			<img src="Images/$t7"</>
		</div>
		<div class="small">
			<img src="Images/$t8"</>
		</div>
		
	
	</div>
	


</div>
<div class="stage">
		<h1>Project Stage</h1>
		<h2> Week $Stage_2_weeks</h2>
		<p>$Stage_2_Desc</p>
</div>
<div id="video">
	<video  controls>
	  <source src="video/$video" type="video/mp4">
	  <source src="video/$video" type="video/ogg">
	  Your browser does not support the video tag.
	</video>
	
</div>		
  
  </div> 
</div>
<footer>
<div id="foot">
	<img src="Images/me.jpg" alt="alt text">
        <div id="about">
            <h3>Oh Hello</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis dignissim ligula, eu accumsan tortor. Donec tempus libero eget mi facilisis dictum. Vivamus dictum laoreet erat, in efficitur sem tempus at. Vestibulum tristique ex convallis justo dictum efficitur. Curabitur scelerisque gravida porttitor. Nulla facilisi. Nullam suscipit rutrum scelerisque. Duis gravida ante vitae lacinia gravida.</p>
            <p>[icons]</p>
        </div>
        <div id="contact">
            <h3>Contact Me</h3>
            <p>email@mail.com</p>
            <p>(555)555-5555</p>
        </div>
	</div>
</footer>

   
</body>
</html>


END;
?>
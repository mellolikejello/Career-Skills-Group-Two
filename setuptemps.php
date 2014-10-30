<?php
$mainHTML = <<<END

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Your Name</title>
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <link href="style/slider.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,100|Raleway' rel='stylesheet' type='text/css'>
    <script src="js/script.js"></script>
    <script src="js/slider.js"></script>
    <!-- HTML5 Shiv for Browser Compatibility -->
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<style>
	#welcome-view{background-color:#000; background: url('$backgroundPhoto') no-repeat; background-size: 100%;}
	</style>
</head>
<body>
	<div id="con">
    <div id="welcome-view">
        <h2 id="welcome-header">
            <a href="resume.html">Resume</a>
			<a href="#contact">Contact</a>
            <a href="#work">Work</a>
			
        </h2>
        <h1 id="welcome-text">Hey, I'm $name</h1>
		<h3 id="skill-text">$skill1 - $skill2 - $skill3</h3>
    </div>
	<div id="content" name="work">
       


																		      									
    </div>
<?php include 'footer.php'; ?>
</div>
</body>
</html>

END;

$footer = <<<END


 <footer>

<div id="foot">
	<img src="$yourpic" alt="alt text">
        <div id="about">
            <h3>Oh Hello</h3>
            <p>$aboutme</p>
            <p>[icons]</p>
        </div>
        <div id="contact">
            <h3>Contact Me</h3>
            <p>$email</p>
            <p>$phone</p>
        </div>
	</div>
</footer>


END;


$resume = <<<END
<!DOCTYPE html>
<html>
<head>
	 <link href="style/resume.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="welcome-view">
        <h2 id="welcome-header">
            <a href="index.php">Home</a>
			</h2>
</div>
    <object data="$resume" type="application/pdf">
        <embed src="$resume" type="application/pdf" />
    </object>
</body>
</html>

END;
?>

















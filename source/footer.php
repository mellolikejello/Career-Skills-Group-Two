<?php 
include 'php/dbconnect.php';

$result = mysqli_query($con,"SELECT * FROM `Footer` WHERE `index` = '1' ");

while($row = mysqli_fetch_array($result))
{
	$yourdesc = $row['desc'];
	$yourpic = $row['pic'];
	$email = $row['email'];
	$phone = $row['phone'];
	
	$facebook = $row['facebook'];
	$twitter = $row['twitter'];
	$github = $row['github'];
	$pinterest = $row['pintrest'];
	$tumblr = $row['tumblr'];
	$dribble = $row['dribble'];
	
	
?>

 <footer>

<div id="foot" name="contact">
<div id="self-portrait">
	<img id="self-img" src="<?php echo $yourpic; ?>" alt="alt text">
  </div>
        <div id="about">
            <h3>Oh hello,</h3>
            <p><?php echo $yourdesc; ?></p>
            <p id="icons">
				
				<?php
				if($dribble != ""){
                    echo '<a href="' . $dribble . '"><img src="Images/icons/dribbble.png" alt="dribbble"></a>';
				}
				if($facebook != ""){
                    echo '<a href="' . $facebook. '"><img src="Images/icons/facebook.png" alt="facebook"></a>';
				}
				if($github != ""){
                    echo '<a href="' . $github . '"><img src="Images/icons/github.png" alt="github"></a>';
				}
				if($pinterest != ""){
                    echo '<a href="' . $pintrest . '"><img src="Images/icons/pinterest.png" alt="pinterest"></a>';
				}
				if($tumblr != ""){
                    echo '<a href="' . $tumblr . '"><img src="Images/icons/tumblr.png" alt="tumblr"></a>';
				}
				if($twitter != ""){
                    echo '<a href="' . $twitter. '"><img src="Images/icons/twitter.png" alt="twitter"></a>';
				}
				?>
                </p>
        </div>
        <div id="contact">
            <h3>Contact Me</h3>
            <p><?php echo $email; ?></p>
            <p><?php echo $phone; ?></p>
        </div>
	</div>
</footer>

<?php } ?>
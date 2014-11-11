<?php
 include '../dbconnect.php';
 
session_start();
$seshp = $_SESSION["pass"];
$result3 = mysqli_query($con,"SELECT * FROM `admin` WHERE `id` = '1' ");
while($row3 = mysqli_fetch_array($result3))
{
$password = $row3['pass'];

	if($seshp != $password){
	header( 'Location: ../adminLogin.php?err=1' ) ;
	}
}
?>
<?php
ini_set("mbstring.internal_encoding","UTF-8");
ini_set("mbstring.func_overload",7);
	
	

 
 $id = $_POST['index'];
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

$order = $res['Order'];

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Edit Project</title>
    <link rel="stylesheet" type="text/css" href="../../style/admin/editProj.css">
    <script>
        function replace() {
            var text = document.getElementById("mainDesc").value;
            var str = text;
            str = str.replace(/'/g, '&#39;');
            document.getElementById("mainDesc").value = str;

            var text2 = document.getElementById("stage1Desc").value;
            var str2 = text;
            str2 = str.replace(/'/g, '&#39;');
            document.getElementById("stage1Desc").value = str2;

            var text3 = document.getElementById("stage2Desc").value;
            var str3 = text;
            str3 = str.replace(/'/g, '&#39;');
            document.getElementById("stage2Desc").value = str3;

        }
    </script>
</head>

<body>
    <button><a href="../../admin.php">Admin Home</a>
    </button>
    <div id="con">
        <h1><?php echo "Edit ". $title ; ?></h1>
        <form action="update/updateProject.php" method="POST" enctype="multipart/form-data">
            <div id="info">
                <table>
                    <tr>
                        <td>
                            <label>Order Displayed on Home</label>
                        </td>
                        <td>
                            <input class="num" type="number" name="order" value="<?php echo $order; ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Title</label>
                        </td>
                        <td>
                            <input class="input" type="text" name="title" id="title" value="<?php echo $title; ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Subtitle</label>
                        </td>
                        <td>
                            <input class="input" type="text" name="subtitle" id="subtitle" value="<?php echo $subtitle; ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label>Main Description</label>
                        </td>
                        <td>
                            <textarea rows="20" cols="60" id="mainDesc" name="mainDesc">
                                <?php echo $mainDesc; ?>
                            </textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Main Image</label>
                        </td>
                        <td>
                            <input type="file" name="mainImage">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Developed or Designed?</label>
                        </td>
                        <td>
                            <select class="input" name="dev">
                                <option selected="selected" value="<?php echo $devordes; ?>">
                                    <?php echo $devordes; ?>
                                </option>
                                <option value="Developed">Developed</option>
                                <option value="Designed">Designed</option>
                                <option value="Designed and Developed">Both</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Devices it was made for</label>
                        </td>
                        <td>
                            <input class="input" type="text" name="devices" id="devices" value="<?php echo $devices; ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label> Length of Project?</label>
                        </td>
                        <td>
                            <input class="num" type="number" name="length" id="length" value="<?php echo $length; ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Stage 1</p>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <label>Weeks to Complete</label>
                        </td>
                        <td>
                            <input class="num" type="number" name="Stage1_Weeks" value="<?php echo $stage1w; ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label>Description</label>
                        </td>
                        <td>
                            <textarea rows="20" cols="60" id="Stage1Desc" name="Stage1Desc">
                                <?php echo $stage1d; ?>
                            </textarea>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <p>Stage 2</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Weeks to Complete</label>
                        </td>
                        <td>
                            <input class="num" type="number" name="Stage2_Weeks" value="<?php echo $stage1w; ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label>Description</label>
                        </td>
                        <td>
                            <textarea rows="20" cols="60" id="Stage2Desc" name="Stage2Desc">
                                <?php echo $stage2d; ?>
                            </textarea>
                        </td>
                    </tr>
                </table>
            </div>


            <div id="uploads">
                <h2>Upload Images</h2>
                <h3>Leave blank to keep current Image</h3>
                <table>
                    <tr>
                        <td>
                           
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <label>Banner</label>
                        </td>
                        <td>
                            <input type="file" name="s1">
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <p>Tile Images</p>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <label>Tile1</label>
                        </td>
                        <td>
                            <input type="file" name="t1"> </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Tile2</label>
                        </td>
                        <td>
                            <input type="file" name="t2">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Tile3</label>
                        </td>
                        <td>
                            <input type="file" name="t3">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Tile4</label>
                        </td>
                        <td>
                            <input type="file" name="t4">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Tile5</label>
                        </td>
                        <td>
                            <input type="file" name="t5">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Tile6</label>
                        </td>
                        <td>
                            <input type="file" name="t6">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Tile7</label>
                        </td>
                        <td>
                            <input type="file" name="t7">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Tile8</label>
                        </td>
                        <td>
                            <input type="file" name="t8">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Default Tile</label>
                        </td>
                        <td>
                            <input type="file" name="tile">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p></p>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <label>Video</label>
                        </td>
                        <td>
                            <input type="file" name="video"> </td>
                    </tr>
                </table>
            </div>
			<input type="hidden" name="mainImgB" value="<?php echo $mainImg; ?>">
            <input type="hidden" name="s1B" value="<?php echo $s1; ?>">
            <input type="hidden" name="s2B" value="<?php echo $s2; ?>">
            <input type="hidden" name="s3B" value="<?php echo $s3; ?>">
            <input type="hidden" name="s4B" value="<?php echo $s4; ?>">
            <input type="hidden" name="s5B" value="<?php echo $s5; ?>">
            <input type="hidden" name="s6B" value="<?php echo $s6; ?>">
            <input type="hidden" name="t1B" value="<?php echo $t1; ?>">
            <input type="hidden" name="t2B" value="<?php echo $t2; ?>">
            <input type="hidden" name="t3B" value="<?php echo $t3; ?>">
            <input type="hidden" name="t4B" value="<?php echo $t4; ?>">
            <input type="hidden" name="t5B" value="<?php echo $t5; ?>">
            <input type="hidden" name="t6B" value="<?php echo $t6; ?>">
            <input type="hidden" name="t7B" value="<?php echo $t7; ?>">
            <input type="hidden" name="t8B" value="<?php echo $t8; ?>">
            <input type="hidden" name="videoB" value="<?php echo $video; ?>">
            <input type="hidden" name="tileB" value="<?php echo $tile; ?>">
            <input type="hidden" name="index" value="<?php echo $index; ?>">
            <input type="hidden" name="file" value="<?php echo $filename; ?>">
            <input onclick="replace()" type="submit" id="submit" value="Submit" />
    </div>
</body>
<?php } ?>

</html>
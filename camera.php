<?php
require "header.php";
require 'config/database.php';
$user_id = $_SESSION['userId'];
//$username = $_SESSION['username'];
//$email = $_SESSION['email'];
$sql = "SELECT * FROM `images` ORDER BY image_id DESC";
$stmt = $conn->prepare($sql);
$stmt1 = $conn->prepare($sql);
// $stmt->bindParam(":userId", $user_id);
$stmt->execute();
$stmt1->execute();
$count = $stmt->rowCount();
if ($count > 0) {
    $result = $stmt->fetchAll(PDO::FETCH_COLUMN, 1);
    $image_id = $stmt1->fetchAll(PDO::FETCH_COLUMN, 0);
    $total = count($result);
    // $username = $result['image_src'];
}
else
{
    $total = 0;
}
?>
<!DOCTYPE html>
<HTML>
<head>
    <title>Webcam</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
    <!-- Stream video via Webcam -->
    <div class = "video-wrap" style="align-self: center; float: left;"></div>
        <video id="video" playsinline autoplay></video>
    </div>

    <!-- Webcam Video Snapshot -->
    <canvas id="canvas" width="640" height="400" style="float: right;"></canvas>
​
    <!-- Trigger canvas web API -->
    <div class="textbox">
        <button id="snap" class="btn2" onclick="capture_img()">Capture</button>
        <form action="includes/save_image.inc.php" method="post">
            <button id="upload" type="submit" class="btn2" name="upload" style="float;center:" onclick="upload_img()">Upload</button>
        </form>
        <input type="file" class="btn2" name="submit" value="Choose from gallery" id="fileToUpload" onclick="load_image()">
    </div>
    <div>
        <img class="imgsrc" src="stickers/frame1.png" style="width:640px; height:400px;">
        <img class="imgsrc" src="stickers/frame2.png" style="width:640px; height:400px;">
        <img class="imgsrc" src="stickers/frame3.png" style="width:640px; height:400px;">
        <img class="imgsrc" src="stickers/frame4.png" style="width:640px; height:400px;">
        <img class="imgsrc" src="stickers/frame5.png" style="width:640px; height:400px;">
    </div>
    <div class="gallery">
			<h2>Thumbnail</h2>
			<?php
            $i = 0;
			while ($i < $total)
			{ ?>
				<img style ="float:center; margin: auto; margin-top: 20px; border-radius: 10px;" src="<?php echo $result[$i]; ?>">
                <form action='includes/delete.inc.php' method="post">
                <input type="hidden" name="img_id" value="<?php echo $image_id[$i];?>">
                <button type="submit" name="delete_image" style="btn">Delete</button>
                </form>
            <?php 
            $i++;
            } 
            ?>
		</div>
<script type="text/javascript" async src="js/photo.js"></script>
<br>
</body>
<?php require "footer.php"; ?>
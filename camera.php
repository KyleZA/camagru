<?php
require "header.php";
require 'config/database.php';
$user_id = $_SESSION['userId'];
//$username = $_SESSION['username'];
//$email = $_SESSION['email'];
$sql = "SELECT * FROM `images` ORDER BY image_id DESC";
$stmt = $conn->prepare($sql);
// $stmt->bindParam(":userId", $user_id);
$stmt->execute();
$count = $stmt->rowCount();
if ($count > 0) {
    $result = $stmt->fetchAll(PDO::FETCH_COLUMN, 1);
    // $username = $result['image_src'];
}
$total = count($result);
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
				<!-- <form>
				<textarea rows="4" cols="50" name="comment" form="usrform">
				<button id="comment" type="submit" name="comments">Comment here</button> 
				</form> -->
			<?php $i++;} ?>
		</div>
<!-- <script>
    'use strict';
    const video = document.getElementById('video');
    const canvas = document.getElementById('canvas');
    const snap = document.getElementById('snap');
    const errorMsgElement = document.getElementById('span#ErrorMsg');
    const constraints = 
    {
        audio: false,
        video:
        {
            width: 640, height: 400
        }
    };
// Access webcam
    async function init ()
    {
        try{
            const stream = await navigator.mediaDevices.getUserMedia(constraints);
            handleSuccess(stream);
        }
        catch(e)
        {
            errorMsgElement.innerHTML = `navigator.getUserMedia.error:${e.toString()}`;
        }
    }
//Success
    function handleSuccess(stream)
    {
        window.stream = stream
        video.srcObject = stream;
    }
// Load init
    init()
// Draw image
    var context = canvas.getContext('2d');
    snap.addEventListener("click", function()
    {
        context.drawImage(video, 0, 0, 640, 400);
    });
</script> -->
<script type="text/javascript" async src="js/photo.js"></script>
<br>
</body>
<?php require "footer.php"; ?>
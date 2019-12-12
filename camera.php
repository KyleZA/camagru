<?php
require "header.php"; 
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
        <button id="snap" class="btn2">Capture</button>
    </div>
    <div>
        <img class="imgsrc" src="stickers/frame1.png" style="width:640px; height:400px;">
        <img class="imgsrc" src="stickers/frame2.png" style="width:640px; height:400px;">
        <img class="imgsrc" src="stickers/frame3.png" style="width:640px; height:400px;">
        <img class="imgsrc" src="stickers/frame4.png" style="width:640px; height:400px;">
        <img class="imgsrc" src="stickers/frame5.png" style="width:640px; height:400px;">
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
<script type="text/javascript" src="./js/photo.js"></script>
<br>
</body>
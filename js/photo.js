(function() {
    var canvas = document.getElementById('canvas');
    var context = canvas.getContext('2d');
    var video = document.getElementById('video');
    var img;
    var videoflag = 0;
    if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
        navigator.mediaDevices.getUserMedia({
            video: true 
        }).then(function(stream) {
            video.srcObject = stream;
            video.play();
        });
    }
    function chooseimg(){
        var choose = document.querySelectorAll(".imgsrc");
    
        choose.forEach(function(element){
            element.addEventListener("click",function(){
            img = element;
            if (img && videoflag === 1){
                if (img.src === "http://localhost:8080/Camagru/stickers/frame1.png"){
                    context.drawImage(img, 75, 25, 250, 250);
                }
                else if (img.src === "http://localhost:8080/Camagru/stickers/frame2.png"){
                    context.drawImage(img, 60, 100, 100, 100);
                }
                else if (img.src === "http://localhost:8080/Camagru/stickers/frame3.png"){
                    context.drawImage(img, 250, 125, 100, 100);
                }
                else if (img.src === "http://localhost:8080/Camagru/stickers/frame4.png"){
                    context.drawImage(img, 0, 0, 400, 300);
                }
                else if (img.src === "http://localhost:8080/Camagru/stickers/frame5.png"){
                    context.drawImage(img, 65, 114, 250, 250);
               }
               context.drawImage(img, 75, 25, 250, 250);
                // var dataURL = canvas.toDataURL('image/png');
                // document.getElementById("imgsrc").value = dataURL;
            }
        });
    });}
    chooseimg();
    document.getElementById("snap").addEventListener("click", function() {
        context.drawImage(video, 0, 0, 640, 400);
        videoflag = 1;
    });  
})();


function load_image() {
    // canvas
    var fileinput = document.getElementById('fileToUpload'); // input file
    var img = new Image();
    var canvas = document.getElementById('canvas');
    var context = canvas.getContext('2d');

    fileinput.onchange = function (evt) {
      var files = evt.target.files; // FileList object
      var file = files[0];
      if (file.type.match('image.*')) {
        var reader = new FileReader();
        // Read in the image file as a data URL.
        reader.readAsDataURL(file);
        reader.onload = function (evt) {
          if (evt.target.readyState == FileReader.DONE) {
            img.src = evt.target.result;
            context.clearRect(0, 0, 640, 400);
            img.onload = () => context.drawImage(img, 0, 0, 640, 400);
          }
        }

        function chooseimg(){
            var choose = document.querySelectorAll(".imgsrc");
        
            choose.forEach(function(element){
                element.addEventListener("click",function(){
                var imge = element;
                if (imge){
                    if (imge.src === "http://localhost:8080/Camagru/stickers/frame1.png"){
                        context.drawImage(imge, 75, 25, 250, 250);
                    }
                    else if (imge.src === "http://localhost:8080/Camagru/stickers/frame2.png"){
                        context.drawImage(imge, 60, 100, 100, 100);
                    }
                    else if (imge.src === "http://localhost:8080/Camagru/stickers/frame3.png"){
                        context.drawImage(imge, 250, 125, 100, 100);
                    }
                    else if (imge.src === "http://localhost:8080/Camagru/stickers/frame4.png"){
                        context.drawImage(imge, 0, 0, 400, 300);
                    }
                    else if (imge.src === "http://localhost:8080/Camagru/stickers/frame5.png"){
                        context.drawImage(imge, 65, 114, 250, 250);
                   }
                   context.drawImage(imge, 75, 25, 250, 250);
                    // var dataURL = canvas.toDataURL('image/png');
                    // document.getElementById("imgsrc").value = dataURL;
                }
            });
        });}
        chooseimg();

      } else {
        alert("No Image Found");
      }
    }
}  

function upload_img()
{
    var upl_butt = document.getElementById("upload");
    var canvas = document.getElementById("canvas");

    upl_butt.value = canvas.toDataURL();
}

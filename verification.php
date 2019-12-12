<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Camguru</title>
        <link rel="stylesheet" href="style.css">
        </head>
    <body>
    <div class="row">
        <div class="col-sm-12">
            <div class="well">
    <div class="login-box">
        <h2>Verification code</h2>
        <form action="includes/signup.inc.php" method="post">
        <div class="textbox">
            <img src="img/cameralogo.png" style="float: left; width: 20px; height: 20px;">
            <input type="text" name="uid" placeholder="Verification Code" value="">
        </div>
        </form>
        <form method="get" action="signup.php">
        <input class="btn" type="submit" name="Confirm" value="Confirm">
        </form>
    </div>
    </body>
</html>
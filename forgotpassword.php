<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Forgot password</title>
        <link rel="stylesheet" href="style.css">
        </head>
    <body>
    <div class="row">
        <div class="col-sm-12">
            <div class="well">
    <div class="login-box">
        <h2>Forgot Password</h2>
        <form action="includes/forgottenpassword.inc.php" method="post">
        <div class="textbox">
            <img src="img/Emaillogo.png" style="float: left; width: 20px; height: 20px;">
            <input type="text" name="mail" placeholder="E-mail" value="">
        </div>
        <input class="btn" type="submit" name="forgot_password_submit" value="Submit">
    </div>
    </form>
    </body>
</html>
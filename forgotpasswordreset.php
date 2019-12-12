<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Reset password</title>
        <link rel="stylesheet" href="style.css">
        </head>
    <body>
    <div class="row">
        <div class="col-sm-12">
            <div class="well">
    <div class="login-box">
    <form action="includes/forgottenpassword.inc.php" method="post">
        <h2>Enter new password</h2>
        <div class="textbox">
            <img src="img/password.png" style="float: left; width: 20px; height: 20px;">
            <input type="password" name="pwd" placeholder="Password">
        </div>
        <div class="textbox">
            <img src="img/password.png" style="float: left; width: 20px; height: 20px;">
            <input type="password" name="pwd-repeat" placeholder="Confirm password">
        </div>
        <input type="hidden" name="code" value="<?php echo $_GET['code']; ?>">
        <input class="btn" type="submit" name="reset-submit" value="Submit">
    </div>
    </form>
    </body>
</html>
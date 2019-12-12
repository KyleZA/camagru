<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Update Account</title>
        <link rel="stylesheet" href="style.css">
        </head>
    <body>
    <div class="row">
        <div class="col-sm-12">
            <div class="well">
    <div class="login-box">
        <h2>Update information</h2>
        <form action="includes/update.inc.php" method="post">
        <div class="textbox">
            <img src="img/user.png" style="float: left; width: 20px; height: 20px;">
            <input type="text" name="username" placeholder="Enter new username" value="">
        </div>
        <div class="textbox">
            <img src="img/Emaillogo.png" style="float: left; width: 20px; height: 20px;">
            <input type="email" name="email" placeholder="Enter new email" value="">
        </div>
        <div class="textbox">
            <img src="img/password.png" style="float: left; width: 20px; height: 20px;">
            <input type="password" name="password" placeholder="Enter new password">
        </div>
        <div class="textbox">
            <img src="img/password.png" style="float: left; width: 20px; height: 20px;">
            <input type="password" name="passwordrepeat" placeholder="Confirm new password">
        </div>
        <input class="btn" type="submit" name="update-submit" value="Update">
    </div>
    </body>
</html>
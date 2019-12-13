<?php 
require "header.php"; 

include "config/database.php";
include "config/setup.php";
?>
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
        <h2>Login</h2>
        <?php
        if(isset ($_GET['error'])){
            if ($_GET['error'] == 'emptyfields')
            echo "<p>Please enter empty fields</p>";
        }
        ?>
        <form action="includes/login.inc.php" method="post">
        <div class="textbox">
            <img src="img/user.png" style="float: left; width: 20px; height: 20px;">
            <input type="text" name="mailuid" placeholder="Username/email" value="">
        </div>
        <div class="textbox">
            <img src="img/password.png" style="float: left; width: 20px; height: 20px;">
            <input type="password" name="pwd" placeholder="Password">
        </div>
        <input class="btn" type="submit" name="login-submit" value="Sign In">
        </form>
        <form method="get" action="signup.php">
        <input class="btn" type="submit" name="Signup-submit" value="Sign Up">
        </form>
        <form method="get" action="gallery.php">
        <input class="btn" type="submit" name="guest" value="Guest">
        </form>
        <form method="post" action="forgotpassword.php">
        <input class="btn" type="submit" name="forgot_password" value="Forgot Password?">
    </div>
    </body>
</html>
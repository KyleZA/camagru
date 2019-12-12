<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Signup</title>
        <link rel="stylesheet" href="style.css">
        </head>
    <body>
    <div class="row">
        <div class="col-sm-12">
            <div class="well">
    <div class="login-box">
        <?php
        if(isset ($_GET['error'])){
            if ($_GET['error'] == 'emptyfields')
            echo "<p>Please enter empty fields</p>";
            else if ($_GET['error'] == 'invalidmailuid')
            echo "<p>Please enter a valid email address</p>";
            else if ($_GET['error'] == 'pwdshort')
            echo "<p>Password needs to be atleast 8 characters long</p>";
            else if ($_GET['error'] == 'pwdnocap')
            echo "<p>Password needs atleast one uppercase letter</p>";
            else if ($_GET['error'] == 'pwdnolow')
            echo "<p>Password needs atleast one lowercase letter</p>";
            else if ($_GET['error'] == 'pwdnospchar')
            echo "<p>Password needs a special character</p>";
            else if ($_GET['error'] == 'pwdnodigit')
            echo "<p>Password needs a numerical character</p>";
            else if ($_GET['error'] == 'passwordcheck')
            echo "<p>Passwords do not match</p>";
        }
        ?>
        <h2>Sign Up</h2>
        <form action="includes/signup.inc.php" method="post">
        <div class="textbox">
            <img src="img/user.png" style="float: left; width: 20px; height: 20px;">
            <input type="text" name="uid" placeholder="Username" value="">
        </div>
        <div class="textbox">
            <img src="img/Emaillogo.png" style="float: left; width: 20px; height: 20px;">
            <input type="text" name="mail" placeholder="E-mail" value="">
        </div>
        <div class="textbox">
            <img src="img/password.png" style="float: left; width: 20px; height: 20px;">
            <input type="password" name="pwd" placeholder="Password">
        </div>
        <div class="textbox">
            <img src="img/password.png" style="float: left; width: 20px; height: 20px;">
            <input type="password" name="pwd-repeat" placeholder="Re-enter Password">
        </div>
        <input class="btn" type="submit" name="signup-submit" value="Submit">
        </form>
    </div>
    </body>
</html>
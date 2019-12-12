<?php
	session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Camagru</title>
	<link rel="stylesheet" media="all" href="style.css">

</head>
<header>
	<?php
	if (isset($_SESSION['userId'])) {?>
		<div class="topnav">
  			<a href="accountupdate.php">Account Settings</a>
  			<a href="gallery.php">Gallery</a>
			<a href="camera.php">Editor</a>
				<div class="topnav-right">
				<!-- <form action = "accountupdate.php" method="post">
				<button id="update-butt" type="submit" name="update">Change Account Details</button>
				</form> -->
				<form action="includes/login.inc.php" method="post">
				<button id="logout-butt" type="submit" name="logout-submit">Logout</button>
				</form>
			</div>
	</div>
	 <?php
	}
	if (isset($_GET['guest'])) { ?>
		<div class="topnav">
		<p style="font-family: Arial, Helvetica, sans-serif; text-align:center; font-size: 40px; color: red;">You are logged in as a Guest</p>
		<button onclick="location.href = 'index.php';" id="myButton" class="float-right submit-button" >Login</button>
		<button onclick="location.href = 'signup.php';" id="myButton" class="float-right submit-button" >Signup</button>
		</div>
		<?php
		if (isset($_GET['error'])) {
			if ($_GET['error'] == "emptyfields") {
				echo '<p>Fill in all fields</p>';
			} else if ($_GET['error'] == "nouser") {
				echo '<p>Please sign-up to sign-in</p>';
			} else if ($_GET['error'] == "wrongpwd") {
				echo '<p>Incorrect password</p>';
			} else if ($_GET['error'] == "nouser") {
				echo '<p>Please sign-up to sign-in</p>';
			}
		}
		echo '</div>'; 
	}
	?>
</header>
</html>
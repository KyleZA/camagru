<?php session_start();
  if (isset($_GET['update']));
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<?php
	$username = $_SESSION['username'];
	$user_id = $_SESSION['userId'];
	$email = $_SESSION['email'];
	?>
	<section class="update-user-info">
		<div id="pp"></div>
		<?php
		if (isset($_GET['error'])) {
			if ($_GET['error'] == "emptyfields") {
				echo '<p class="err">Fill in all fields</p>';
			} else if ($_GET['error'] == "invalidmailuid") {
				echo '<p class="err">Invalid username & password</p>';
			} else if ($_GET['error'] == "invalidmail") {
				echo '<p class="err">Invalid email</p>';
			} else if ($_GET['error'] == "invaliduid") {
				echo '<p class="err">Invalid username</p>';
			} else if ($_GET['error'] == "wrongpwd") {
				echo '<p class="err">Incorrect password</p>';
			} else if ($_GET['error'] == "mailtaken") {
				echo '<p class="err">Email already registered</p>';
			}
		}
		?>
		<form action="includes/updatelogin.inc.php" method="post">
            <div class="textbox">
            <img src="img/Emaillogo.png" style="float: left; width: 20px; height: 20px;">
            <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
            </div>
            <div class="textbox">
            <img src="img/password.png" style="float: left; width: 20px; height: 20px;">
            <input type="password" name="password" placeholder="Enter password" value="">
			</div>
			<form action="accountupdatedetails.php" method="post">
			<button type="submit" name="update-info" class="btn">Update info</button>
			</form>
			<form action="gallery.php">
			<button id="info" onclick="change_field()" class="btn">close</button>
			</form>
			<input type="checkbox" name="emailcomment" value="Bo" checked> I Would like to recieve email notifications for comments
	</section>

</body>
</html>
<?php require "footer.php"; ?>
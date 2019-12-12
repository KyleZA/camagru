<?php
if (isset($_POST['update-info'])) {
	require '../config/database.php';
	$mailuid = htmlspecialchars($_POST['email']);
	$password = htmlspecialchars($_POST['password']);
	if (empty($mailuid) || empty($password)) {
		header("Location: ../accountupdate.php?error=emptyfields");
		exit();
	} else {
		try {
			$sql = "SELECT * FROM `users` WHERE `username`= :mailuid OR `email` = :mailuid";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(":mailuid", $mailuid);
			$stmt->execute();
			$result = $stmt->fetch(PDO::FETCH_ASSOC);
			$passCheck = password_verify($password, $result['password']);
			if (!$result)
			{
				header("Location: ../accountupdate.php?error=WrongMail");
				exit();
			}
			if ($passCheck == false) {
				header("Location: ../accountupdate.php?error=WrongPassword" . $mailuid);
				exit();
			} else if ($passCheck == true) {
				session_start();
				$_SESSION['userId'] = $result['user_id'];
				$_SESSION['username'] = $result['username'];
				$_SESSION['pp_src'] = $result['pp_src'];
				$_SESSION['verify'] = $result['verified'];
				$_SESSION['email'] = $result['email'];
				header("Location: ../accountupdatedetails.php");
				exit();
			} else {
				header("Location: ../accountupdate.php?error=wrongpwd");
				exit();
			}
		} catch (PDOException $e) {
			die("Connection failed: " . $e->getMessage());
		}
	}
}
?>
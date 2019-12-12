<?php
session_start();
require '../config/database.php';
if (isset($_POST['update-submit'])) {
    $Usernamen = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $pwd_repeat = htmlspecialchars($_POST['passwordrepeat']);
    $emailad = htmlspecialchars($_POST['email']);
    $user_id = $_SESSION['userId'];
    echo $Usernamen;
    echo $password;
    echo $pwd_repeat;
    echo $emailad;
    echo $user_id;
    if (empty($emailad) || empty($Usernamen) || empty($password) || empty($pwd_repeat)) {
        header("Location: ../accountupdatedetails.php?error=emptyfields");
        exit();
    }
    if ((strlen($password) < 8)) {
        header("Location: ../accountupdatedetails.php?error=PasswordShort");
        exit();
    } else if (!preg_match('/[A-Z]/', $password)) {
        header("Location: ../accountupdatedetails.php?error=NoCaps");
        exit();
    } else if (!preg_match('/[a-z]/', $password)) {
        header("Location: ../accountupdatedetails.php?error=AddLowerCase");
        exit();
    } else if (!preg_match('/[0-9]/', $password)) {
        header("Location: ../accountupdatedetails.php?error=AddDigitsToPassword");
        exit();
    } else if (strstr($password, ' ')) {
        header("Location: ../accountupdatedetails.php?error=NoSpacesAllowed");
        exit();
    } else if ($password !== $pwd_repeat) {
        header("Location: ../accountupdatedetails.php?error=PasswordsDontMatch");
        exit();
    } else {
        try {
            $email = htmlspecialchars($_POST['email']);
            $sql = "SELECT * FROM `users` WHERE email = :mail";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":mail", $email);
            $stmt->execute();
            $count = $stmt->rowCount();
            if ($count > 0) {
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                $user_id = $result['user_id'];
            }
			echo $user_id;
                $sql = "UPDATE `users` SET `password` = ? WHERE `user_id` = ?";
                $hashed =  password_hash($password, PASSWORD_DEFAULT);
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(1, $hashed);
                $stmt->bindParam(2, $user_id);
                $stmt->execute();
                echo $user_id;
                $sql = "UPDATE `users` SET `email` = ? WHERE `user_id` = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(1, $emailad);
                $stmt->bindParam(2, $user_id);
                $stmt->execute();
                echo $user_id;
                $sql = "UPDATE `users` SET `username` = ? WHERE `user_id` = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(1, $Usernamen);
                $stmt->bindParam(2, $user_id);
                $stmt->execute();
                echo "<script> window.close(); </script>";
                header("Location: ../gallery.php?success=InfoUpdated");
                exit();
            } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
} else {
    header("Location: ../profile.php");
    exit();
}
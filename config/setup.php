<?php
try {
	$conn = new PDO("mysql:host=localhost", "root", "Francis1974");
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // sql to create database
	$sql = "CREATE DATABASE IF NOT EXISTS logindatabase;";
	$conn->exec($sql);
	$conn = null;
	// create users table
	include 'database.php';
	$sql = "CREATE TABLE IF NOT EXISTS `users` (
		`user_id` INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
		`username` TINYTEXT NOT NULL,
		`email` TINYTEXT NOT NULL,
		`password` TINYTEXT NOT NULL,
		`pp_src` TINYTEXT,
		`verified` BIT DEFAULT 0 NOT NULL,
		`verification_code` varchar(264) NOT NULL
		);";
	$conn->exec($sql);
}
catch(PDOException $e) {
    	echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>
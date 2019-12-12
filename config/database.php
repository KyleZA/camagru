<?php

$dbname = "logindatabase";
$username = "root";
$password = "Francis1974";

try {
    $conn = new PDO('mysql:host=localhost;port=8080;dbname=logindatabase', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>
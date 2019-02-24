<?php

$username = htmlspecialchars($_POST["username"]);
$password = htmlspecialchars($_POST["password"]);

require('dbConnect.php');
$db = get_db();

$stmt = $db->prepare('INSERT INTO users(username, userpass) VALUES (:username, :userpass)');
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
$stmt->bindValue(':userpass', $password, PDO::PARAM_STR);
$stmt->execute();

$new_page = "login.php";
header("Location: $new_page");
die();
?>

<?php
session_start();
require('dbConnect.php');
$db = get_db();

$username = $_POST["Username"];
$password = $_POST["Password"];


$query = "SELECT userid FROM users WHERE username = '$username' AND userpass = '$password'";
$stmt = $db->prepare($query);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($results as $result)
{
    $userid = $result['userid'];
    $_SESSION['userid'] = $userid;
}

$new_page = "dash.php";
header("Location: $new_page");
die();
?>

<?php
session_start();
$userid = $_SESSION['userid'];

$entrydate = htmlspecialchars($_POST["entryDate"]);
$weight = htmlspecialchars($_POST["weight"]);
$workout = htmlspecialchars($_POST["workout"]);
$calIntake = htmlspecialchars($_POST["caloricIntake"]);
$calBurned = htmlspecialchars($_POST["caloriesBurned"]);

require('dbConnect.php');
$db = get_db();

$stmt = $db->prepare('INSERT INTO entries(userid, entrydate, weight, workouttype, caloricintake, caloriesburned) VALUES (:userid, :entrydate, :weight, :workouttype, :caloricintake, :caloriesburned)');
$stmt->bindValue(':userid', $userid, PDO::PARAM_INT);
$stmt->bindValue(':entrydate', $entrydate, PDO::PARAM_STR);
$stmt->bindValue(':weight', $weight, PDO::PARAM_INT);
$stmt->bindValue(':workouttype', $workout, PDO::PARAM_STR);
$stmt->bindValue(':caloricintake', $calIntake, PDO::PARAM_INT);
$stmt->bindValue(':caloriesburned', $calBurned, PDO::PARAM_INT);
$stmt->execute();

$new_page = "dash.php";
header("Location: $new_page");
die();
?>

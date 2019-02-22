<?php
session_start();
require('dbConnect.php');
$db = get_db();

$username = $_POST["Username"];
$password = $_POST["Password"];

$query = 'SELECT userid FROM users WHERE username = $username AND userpass = $password';
$stmt = $db->prepare($query);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

$_SESSION["userid"] = $results['userid'];
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h1>User Id = <?php echo $_SESSION["userid"]; ?></h1>
    </body>
</html>
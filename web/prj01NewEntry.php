<?php
//start session to store credentials
session_start();
try
{
  $dbUrl = getenv('DATABASE_URL');
  $dbOpts = parse_url($dbUrl);
  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');
  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
// Session - User Id
$userid = $_SESSION["userId"];

?>
<!DOCTYPE html>
<html>
    <head>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="prj01.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script>
        <script src="prj01.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <h1><?php echo $userid ?></h1>
            <form action="prj01Insert.php" method="post">
                <input type="text" name="Entry Date"><br><br>
                <input type="text" name="Weight"><br><br>
                <input type="text" name="Workout"><br><br>
                <input type="text" name="caloricIntake"><br><br>
                <input type="text" name="caloriesBurned"><br><br>
                <input type="submit" value="submit">
            </form>
        </div>
    </body>
</html>
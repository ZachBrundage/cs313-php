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

// User Verification
$userName = $_POST["Username"];
$password = $_POST["Password"];
$select = $db->query('SELECT userid 
                      FROM users 
                      WHERE username =\'' . $userName . '\'
                      AND userpass =\'' . $password . '\'');
$marker = $select->fetch(PDO::FETCH_ASSOC);
$userid = $marker['userid'];

// Session - User Id
$_SESSION["userId"] = $userid;

// Insert New Row
$db->query('INSERT INTO Entries(entrydate, weight, workouttype, caloricintake, caloriesburned)
            VALUES (' . $_POST["Entry Date"] . ',' . $_POST["Weight"] . ',' .  
                        $_POST["Workout"] . ',' . $_POST["caloricIntake"] . ',' . 
                        $_POST["caloriesBurned"] . ');');
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
        <a href="prj01Dash.php">Back to Dash</a>
    </body>
</html>
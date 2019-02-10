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

$userid = $_SESSION["userId"];
$date = $_POST['search'];
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
        <h1>Search Results</h1>
        <div class="container">
            <table class="table">
                <tr>
                    <th> Entry #</th>
                    <th> Entry Date</th>
                    <th> Weight</th>
                    <th> Workout Type</th>
                    <th> Caloric Intake</th>
                    <th> Calories Burned</th>
                </tr>
            <?php
                foreach ($db->query('SELECT * FROM entries WHERE userid =\'' . $userid . '\' AND entrydate =\'' . $date . '\'') as $row)
            {
                echo "<tr>";
                     echo "<td>" . $row['entryid'] . "</td>";
                     echo "<td>" . $row['entrydate'] . "</td>";
                     echo "<td>" . $row['weight'] . "</td>";
                     echo "<td>" . $row['workouttype'] . "</td>";
                     echo "<td>" . $row['caloricintake'] . "</td>";
                     echo "<td>" . $row['caloriesburned'] . "</td>";
                echo "</tr>";
            }
            ?>
            </table>
        </div>
    </body>
</html>
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

// Session Vars
$userName = $_POST["Username"];
$password = $_POST["Password"];
$select = $db->query('SELECT userid 
                      FROM users 
                      WHERE username =\'' . $userName . '\'
                      AND userpass =\'' . $password . '\'');
$marker = $select->fetch(PDO::FETCH_ASSOC);
$userid = $marker['userid'];
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
        <h1><?php echo $userName . '\'s '?>Dashboard</h1>
        <div class="container-fluid">
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
                foreach ($db->query('SELECT * FROM entries WHERE userid =\'' . $userid . '\'') as $row)
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
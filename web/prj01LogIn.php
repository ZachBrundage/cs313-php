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
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/web/css/bootstrap.css">
        <link rel="stylesheet" href="prj01.css">
        <script type="text/javascript" src="prj01.js"></script>
    </head>
    <body>
        <div class="container">
            <form action="prj01Dash.php" method="post">
                <h1>Sign In</h1>
                <input type="text" value="Username"><br><br>
                <input type="password" value="Password"><br><br>
                <input type="submit" value="Sign In">
                <button id="newUser">Create New User</button>
            </form>
        </div>
    </body>
</html>
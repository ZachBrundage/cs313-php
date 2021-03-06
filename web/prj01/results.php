<?php
session_start();
$userid = $_SESSION['userid'];

$date = htmlspecialchars($_POST["search"]);

require('dbConnect.php');
$db = get_db();
$query = "SELECT entrydate, weight, workouttype, caloricintake, caloriesburned FROM entries WHERE userid = '$userid' AND entrydate = '$date'";
$stmt = $db->prepare($query);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
    <head>
         <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container-results">
            <div class="header-login">
                <h1 class="headerText"> Search Results </h1>
            </div>
            <table>
                <tr>
                    <th> Entry Date</th>
                    <th> Weight</th>
                    <th> Workout Type</th>
                    <th> Caloric Intake</th>
                    <th> Calories Burned</th>
                </tr>
                <?php
                foreach ($results as $result)
                {
                    $entryDate = $result['entrydate'];
                    $weight = $result['weight'];
                    $workout = $result['workouttype'];
                    $caloricIntake = $result['caloricintake'];
                    $caloriesBurned = $result['caloriesburned'];

                    echo "<tr>";
                    echo "<td>$entryDate</td>";
                    echo "<td>$weight</td>";
                    echo "<td>$workout</td>";
                    echo "<td>$caloricIntake</td>";
                    echo "<td>$caloriesBurned</td>";
                    echo "</tr>";
                }
                ?>
            </table><br>
            <a href="dash.php"><button class="button-dash">Back To Dash</button></a>
        </div>
    </body>
</html>
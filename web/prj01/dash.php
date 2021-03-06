<?php
session_start();
$userid = $_SESSION['userid'];

require('dbConnect.php');
$db = get_db();
$query = "SELECT entrydate, weight, workouttype, caloricintake, caloriesburned FROM entries WHERE userid = '$userid'";
$stmt = $db->prepare($query);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-dash">
            <div class="header-login">
                <h1 class="headerText"> Dashboard </h1>
            </div>
            <p class="p-login">Your Entries</p>
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
                </table><br><br>
            <p class="p-login">Search Records By Date</p>
            <form action="results.php" method="post">
                <input type="text" name="search" class="input-dash" value="YYYY-MM-DD"><br><br>
                <input type="submit" value="Search" class="button-dash">
            </form>
            <p class="p-login">Or</p>
            <a href="newEntry.php" ><button class="button-dash">Create New Entry</button></a>
        </div>
    </body>
</html>
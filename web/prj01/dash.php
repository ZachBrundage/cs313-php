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
    </head>
    <body>
        <h1> Dashboard </h1>
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
        </table>
        <form action="results.php" method="post">
            <input type="text" name="search">
            <input type="submit" value="Search">
        </form>
        <a href="newEntry.php"><button>Create New Entry</button></a>
    </body>
</html>
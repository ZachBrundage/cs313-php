<?php
    session_start();
    $OMAM = $_POST['OMAM'];
    $brandNew = $_POST['brandNew'];
    $MICRO = $_POST['micro'];
    $modBase = $_POST['modBase'];
    $silPlanet = $_POST['silPlanet'];
    $DGD = $_POST['DGD'];
    $mooseBlood = $_POST['mooseBlood'];
    $ADTR = $_POST['ADTR'];
    $wonderYears = $_POST['wonderYears'];
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>OMAM: <?php echo $OMAM; ?></h1>
        <h1>Brand New: <?php echo $brandNew; ?></h1>
        <h1>Microwave: <?php echo $MICRO; ?></h1>
        <h1>Modern Baseball: <?php echo $modBase; ?></h1>
        <h1>Silent Planet: <?php echo $silPlanet; ?></h1>
        <h1>DGD: <?php echo $DGD; ?></h1>
        <h1>Moose Blood: <?php echo $mooseBlood; ?></h1>
        <h1>ADTR: <?php echo $ADTR; ?></h1>
        <h1>Wonder Years: <?php echo $wonderYears; ?></h1>
    </body>
</html>
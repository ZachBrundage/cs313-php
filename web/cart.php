<?php
    session_start();
    $OMAM = $_POST['OMAM'];
    $_SESSEION["OMAM"] = $OMAM;
    $_SESSEION["brandNew"] = $_POST['brandNew'];
    $_SESSEION["micro"] = $_POST['micro'];
    $_SESSEION["modBase"] = $_POST['modBase'];
    $_SESSEION["silPlanet"] = $_POST['silPlanet'];
    $_SESSEION["DGD"] = $_POST['DGD'];
    $_SESSEION["mooseBlood"] = $_POST['mooseBlood'];
    $_SESSEION["ADTR"] = $_POST['ADTR'];
    $_SESSEION["wonderYears"] = $_POST['wonderYears'];
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        
        <?php print_r($_SESSION); ?>
        
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
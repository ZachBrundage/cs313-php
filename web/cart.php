<?php
    session_start();
    $OMAM = $_POST['choice'];
    $MICRO = $_POST['choice01'];
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>Selected: <?php echo $OMAM . ", " . $MICRO; ?></h1>
    </body>
</html>
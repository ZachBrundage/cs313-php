<?php
    session_start();
    $brandNew = $_POST['choice'];
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>Selected: <?php echo $brandNew; ?></h1>
    </body>
</html>
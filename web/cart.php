<?php
    session_start();
    $brandNew = $_POST['brandNew'];
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php echo "selected: " . $brandNew; ?>
    </body>
</html>
<?php
    $majors = array("CS"=>"Computer Science", "WDD"=>"Web Design and Development",
                    "CIT"=>"Computer Information Technology", "CE"=>"Computer Engineering");
    echo "PHP File";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>03 Teach</title>
</head>
<body>
<form action="displayUser.php" method="post">
    <input type="text" name="Name" placeholder="Name"> <br>
    <input type="text" name="Email" placeholder="Email"> <br>
    <label>Major</label> <br>
    <?php
        foreach ($majors as $key=>$value) {
            ?>
            <input type="radio" name="Major" value="<?php echo $key ?>"> <?php echo $value ?> <br>
            <?php
        }
    ?>
    <label>Continents Visited</label> <br>
    <input type="checkbox" name="Continents[]" value="NA"> North America <br>
    <input type="checkbox" name="Continents[]" value="SA"> South America <br>
    <input type="checkbox" name="Continents[]" value="EU"> Europe <br>
    <input type="checkbox" name="Continents[]" value="AS"> Asia <br>
    <input type="checkbox" name="Continents[]" value="AF"> Africa <br>
    <input type="checkbox" name="Continents[]" value="AU"> Australia <br>
    <input type="checkbox" name="Continents[]" value="AN"> Antarctica <br>
    <textarea rows="4" cols="50" name="Comments">Comments</textarea> <br>
    <button type="submit">Submit</button>
</form>
</body>
</html>
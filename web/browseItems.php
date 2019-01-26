<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Zach's Homepage</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="assignment02.css">
    </head>
    <body>
        <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="homepage.php">Zach's Homepage</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="homepage.php">Home</a></li>
                <li><a href="individualAssignmentIndex.html">Individual Assignments</a></li>
                <li><a href="teamActivityIndex.html">Group Assignments</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
        </nav><br><br>
        <div class="container-fluid">
            <h1>Radiant Records</h1>
            <form method="post" action="cart.php">
            <div class="row">
                <div class="col-sm-4">
                    <img src="images/omam.jpg" class="img-responsive">
                    <p>Of Mice and Men - Of Mice and Men</p>
                    <button type="submit" class="btn" name="omam" value="Of Mice and Men">Add to Cart</button>
                </div>
                <div class="col-sm-4">
                    <img src="images/brandNew.jpg">
                    <p>Brand New - The Devil And God Are Raging Inside Me</p>
                    <button class="btn" type="submit" name="brandNew" value="The Devil and God are Raging Inside Me">Add to Cart</button>
                </div>
                <div class="col-sm-4">
                    <img src="images/microwave.jpg">
                    <p>Microwave - Much Love</p>
                    <button class="btn" type="submit">Add to Cart</button>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <img src="images/modernBaseball.jpg">
                    <p> Modern Baseball - You're Gonna Miss It All</p>
                    <button class="btn" type="submit">Add to Cart</button>
                </div>
                <div class="col-sm-4">
                    <img src="images/silentPlanet.jpg">
                    <p> Silent Planet - When The End Began</p>
                    <button class="btn" type="submit">Add to Cart</button>
                </div>
                <div class="col-sm-4">
                    <img src="images/dgd.jpg">
                    <p>Dance Gavin Dance - Mothership</p>
                    <button class="btn" type="submit">Add to Cart</button>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <img src="images/mooseBlood.jpg">
                    <p>Moose Blood - I Don't Think I Can Do This Anymore</p>
                    <button class="btn" type="submit">Add to Cart</button>
                </div>
                <div class="col-sm-4">
                    <img src="images/adtr.jpg">
                    <p> A Day To Remember - Homesick</p>
                    <button class="btn" type="submit">Add to Cart</button>
                </div>
                <div class="col-sm-4">
                    <img src="images/wonderYears.jpg">
                    <p>The Wonder Years - No Closer To Heaven</p>
                    <button class="btn" type="submit">Add to Cart</button>
                </div>
            </div>
            </form>
        </div>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <title>Zach's Homepage</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="homepage.css">
    </head>
    <body>
        <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="homepage.html">Zach's Homepage</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="homepage.php">Home</a></li>
                <li><a href="individualAssignmentIndex.html">Individual Assignments</a></li>
                <li><a href="teamActivityIndex.html">Group Assignments</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
        </nav><br><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div>
                        <?php
                            echo "Today is " . date("m/d/Y") . "<br>";
                            echo "The time in Rexburg is " . date("h:i:sa") . "<br>";
                        ?>
                    </div>
                    <img src="Zach.jpg" class="img-circle">
                </div>
                <div class="col-lg-6">
                    <p class="lead">Hey, my name is Zach Brundage and I am a Senior with BYU-Idaho, majoring in Software Engineering.  I am 21 years old and I was just married in November to my wife Miranda in the Gilbert Arizona Temple.  Aside from living in Rexburg for my first two years of schooling, I have lived in Arizona my whole life.  Me and my wife currently live in Chandler, about 15 minutes away from the Gilbert Temple. <br><br>I currently work full-time as a Project Engineer for a general contracting company called Wilshire Pacific Builders.  We specialize in renovating affordable housing apartment complexes across the Unites States.  One of my favorite parts of this work is the fact that we improve the living situation of the people in affordable housing at no cost to them.  My post-graduation plans are undecided.  I am unsure if I want to continue down my current career path in construction management or switch over to something more suited to my degree.  Either way the next step is to finish up school and graduate this upcoming Spring semester.</p>
                </div>
            </div>
        </div>
    </body>
</html>
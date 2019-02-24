<!DOCTYPE html>
<html>
    <head>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-login">
            <div class="header-login">
                <h1 class="headerText">Log In</h1>
            </div>
            <form action="verifyLogin.php" method="post">
                <input type="text" value="Username" name="Username" class="input-login"><br><br>
                <input type="text" value="Password" name="Password" class="input-login"><br><br><br>
                <input type="submit" value="Submit" class="button-login"><br><br><br><br><br><br><br><br>
            </form>
            <p class="p-login">Don't Have An Account?</p>
            <a href="newUser.php"><button class="button-login">Create New User</button></a>
        </div>
    </body>
</html>
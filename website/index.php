<!DOCTYPE html>
<html lang="en">
<head>
    <link REL=StyleSheet HREF="../css/stylesheet.css" TYPE="text/css" MEDIA=screen>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M133 - Everone</title>
</head>
<body>
    <div class="div-logo">
        <img class="logo" src="../images/everone-logo.png" alt="Everone Logo">
    </div>
    <div class="forms">
        <form id="form-id" action="register.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" required name="username" id="username" class="form-control" id="username">
            </div>
            <div class="form-group">
                <label for="email">E-Mail:</label>
                <input type="email" pattern="[a-zA-Z0-9!#$%&amp;'*+\/=?^_`{|}~.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)+.[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*" required name="email" id="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" required name="password" id="password" class="form-control" id="password">
            </div> 
            <div class="form-group">
                <label for="password">Repeat Password:</label>
                <input type="password" required name="password2" id="password2" class="form-control" id="password2">
            </div>
            <div class="buttons">
                <!--<button type="submit" value="Submit" class="btn btn-primary sign-in">Sign-In</button>-->
                <button type="submit" value="Submit" class="btn btn-primary register">Register</button>
            </div>
            <label class="sitelink">Already have an account? <a href="login.php">Log in</a></label>
        </form>
        <div class="scrollable"></div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom">
        <a class="navbar-brand" href="#">Everone</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item text-light">
                info@everone.me</br>
                +41 79 666 70 70
            </li>
            </ul>
            <span class="navbar-text">
                <a class="imprint" href="../html/imprint.html">Imprint</a>
            </span>
        </div>
    </nav>
    <center>
      // Logo
    <img src="/images/everone-logo.png"/>
    </center>
    <a href="./php/register.php">register</a>
    <a href="./php/login.php">login</a>
    
    </body>
</html>

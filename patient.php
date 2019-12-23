<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">

    <title>Patient Dashboard</title>
    <link rel="icon" href="logo.png">
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle = "collapse" data-target = "#navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img id="logo" src="logo.png" alt="Website Logo" width="40" height="40"></a>
        </div>

        <div class="collapse navbar-collapse navbar-right" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="signIn.php">Sign in</a></li>
                <li><a href="admin.php">Admin</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <h1>Welcome to the Dashboard!</h1>
    <br>
    <a type="button" class = "btn btn-success btn-lg button">Surgery Schedule</a><br><br>
    <a type="button" class = "btn btn-success btn-lg button">Treatment History</a><br><br>
    <a type="button" class = "btn btn-success btn-lg button">Checkup Timetable with Doctor</a><br><br>
    <a type="button" class = "btn btn-success btn-lg button">Account Information</a><br><br>
    <hr>

    <h2>List of current medicines</h2>
    <br>
    <div>
        <ul class="col-md-2"  id="patientList">
            <br>
            <a href="">Medicine 1</a>
            <hr>
            <a href="">Medicine 2</a>
            <hr>
            <a href="">Medicine 3</a>
            <hr>
            <a href="">Medicine 4</a>
        </ul>
    </div>
</div>







    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

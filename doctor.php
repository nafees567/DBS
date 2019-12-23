<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">

    <title>Doctor Dashboard</title>
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
                <a class="navbar-brand" href="index.html">Hospital</a>
            </div>

            <div class="collapse navbar-collapse navbar-right" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><a href="signIn.html">Sign in</a></li>
                    <li><a href="admin.html">Admin</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1>Welcome to the Dashboard!</h1>
        <br>
        <a type="button" class = "btn btn-success btn-lg button">Patients Schedule</a>
        <a type="button" class = "btn btn-success btn-lg button">Meeting Schedule</a>
        <a type="button" class = "btn btn-success btn-lg button">Work Schedule</a>

        <h2>List of patients</h2>
        <br>
        <div>
            <ul class="col-md-2">
                <br>
                <a href="">Patient1 Name</a>
                <hr>
                <a href="">Patient2 Name</a>
                <hr>
                <a href="">Patient3 Name</a>
                <hr>
                <a href="">Patient4 Name</a>
            </ul>
        </div>
    </div>







    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
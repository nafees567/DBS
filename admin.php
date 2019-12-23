<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">

    <link rel="icon" href="logo.png">

    <title>Admin Dashboard</title>
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
                <li><a href="signIn.php">Sign in</a></li>
                <li class="active"><a href="admin.php">Admin</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <h1>Admin Dashboard</h1><br>
    <a href="signUp.php" class="btn btn-success btn-lg">Add New Staff Member</a>
    <br><br>
    <a href="schedule.php" class="btn btn-success btn-lg">View Staff Schedule</a>
    <br><br>
    <a href="pharmacy.php" class="btn btn-success btn-lg">View Stock</a>
    <br><br>
    <a href="accountant.php" class="btn btn-success btn-lg">Generate Challans</a>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

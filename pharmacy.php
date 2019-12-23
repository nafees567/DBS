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

    <title>Pharmacy</title>
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
                <li class="active"><a href="signIn.html">Sign in</a></li>
                <li><a href="admin.html">Admin</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>

    <div class="container">
        <h1>Stock Information Page</h1><br>
        <div class="row"></div>
        <div class="col-lg-6">
            <h2 id="stockAvailable">Available Stock</h2>
            <div class="list">
                <p class="lead"> Medicine1 </p>
                <hr>
                <p class="lead"> Medicine2 </p>
                <hr>
                <p class="lead"> Medicine3 </p>
                <hr>
                <p class="lead">Medicine4 </p>
                <hr>
                <p class="lead">Medicine5  </p>
                <hr>
                <p class="lead">Medicine6 </p>
            </div>
        </div>
        <div class="col-lg-6">
            <h2>Add to unavailable Stock</h2>
            <form class="list" method="post" action="pharmacy.php">
                <div class="form-group">
                    <label for="inputMedicineName">Medicine Name</label>
                    <input type="text" class="form-control" id="inputMedicineName" placeholder="Name" name = "medName">
                </div>
                <div class="form-group">
                    <label for="inputMedicineAmount">Stock required</label>
                    <input type="text" class="form-control" id="inputMedicineAmount" placeholder="Amount required" name = "amount">
                </div>
                <button type="submit" class="btn btn-primary">Add to List</button>
            </form>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <br><br>
                <button class="btn btn-success bottom btn-lg">Print Stock list</button>
            </div>
        </div>
        <div class="col-lg-6">
            <br><br>
            <button class="btn btn-success btn-lg bottom">Print Required Stock List</button>
        </div>
    </div>

    <?php
    include("connection.php");
    $medName;
    $amount;

    if(isset($_POST['medName'])){
      $medName = $_POST['medName'];
    }
    if(isset($_POST['amount'])){
      $amount = $_POST['amount'];
    }

    $mysql = $conn->prepare();
    $mysql->bind_param();
    $mysql->execute();

    $conn->close();
     ?>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

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

    <title>Laboratory</title>
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
                <li><a href="index.html">Home</a></li>
                <li class="active"><a href="signIn.html">Sign in</a></li>
                <li><a href="admin.html">Admin</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <h1>Laboratory</h1><br>
    <div class="row"></div>
    <div class="col-lg-6">
        <h2>Patient Test Details</h2>
        <form class="list"  method="post" action="laboratory.php">
            <div class="form-group">
                <label for="patientPatientNameTest">Patient Name</label>
                <input type="text" class="form-control" id="patientPatientNameTest" placeholder="patient name" name="patientName">
            </div>
            <div class="form-group">
                <label for="inputRecommendedTest">Recommeded Test</label>
                <input type="text" class="form-control" id="inputRecommendedTest" placeholder="Test" name="recTest">
            </div>
            <div class="form-group">
                <label for="inputTestDate">Tests Date</label>
                <input type="text" class="form-control" id="inputTestDate" placeholder="date of performing tests" name="date">
            </div>
            <div class="form-group">
                <label for="inputTestResult">Test Result</label>
                <input type="text" class="form-control" id="inputTestResult" placeholder="result of tests in order as recommended tests list" name="result">
            </div>
            <button type="submit" class="btn btn-info" name = "but">Add to List</button>
        </form>
    </div>
    <div class="row"></div>
    <div class="row">
        <div class="col-lg-6">
            <br><br>
            <button class="btn btn-success bottom btn-lg">Print test Records</button>
        </div>
    </div>
</div>

<?php
include("connection.php");
$name;
$recTest;
$testDate;
$result;

if(isset($_POST['patientName'])){
  $name = $_POST['patientName'];
}
if(isset($_POST['recTest'])){
  $recTest = $_POST['recTest'];
}
if(isset($_POST['date'])){
  $testDate = $_POST['date'];
}
if(isset($_POST['result'])){
  $result = $_POST['result'];
}

if(array_key_exists('but',$_POST)){
  $query = $conn->prepare("INSERT INTO `surgery`.`laboratory` VALUES(?,?,?,?)");
  $query->bind_param("ssss",$name,$recTest,$testDate,$result);
  $query->execute();
}
$conn->close();
 ?>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

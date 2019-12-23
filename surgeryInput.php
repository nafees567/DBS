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

    <title>Surgeon Dashboard</title>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle = "collapse" data-target = "#navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
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
                <li><a href="admin.php">Admin</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container" id="signInForm">
  <div class="page-header">
    <h1>Welcome to the Dashboard</h1>
  </div>
    <h2>Surgery Input page</h2>
    <form class="col-lg-4" method="post" action="surgeryInput.php">
        <div class="form-group">
            <label for="inputFirstName">Patient ID</label>
            <input type="text" class="form-control" id="inputFirstName" placeholder="Patient ID" name = "patID">
        </div>
        <div class="form-group">
            <label for="inputFirstName">Surgery Type</label>
            <input type="text" class="form-control" id="inputFirstName" placeholder="Surgery Type" name = "surgeryType">
        </div>

        <div class="form-group">
            <label for="inputMeeting">Surgery ID</label>
            <input type="text" class="form-control" id="inputMeeting" placeholder="Surgery ID" name = "surgeryID">
        </div>
        <div class="form-group">
            <label for="inputMeeting">Surgery Time</label>
            <input type="text" class="form-control" id="inputMeeting" placeholder="Surgery Time" name = "surgeryTime">
        </div>
        <div class="form-group">


        <hr>
        <br>
        <button type="submit" class="btn btn-success btn-lg bottom">Register</button>

    </form>
    <div class="row">

    </div>
    <a type ="button" class="btn btn-success btn-lg bottom" href="patientsList.php">View Pending Patients</a>
    <a type ="button" class="btn btn-success btn-lg bottom" href="surgerySchedule.php">Schedule</a>
    <a type ="button" class="btn btn-success btn-lg bottom" href="previousRecords.php">Pervious Surgeries</a>
    <a type ="button" class="btn btn-success btn-lg bottom" href="Surgery Tools.php">Surgery Tools</a>


</div>


<?php

include("connection.php");
$patID;
$surgeryType;
$surgeryID;
$surgeryTime;
$status = "pending";

if(isset($_POST['patID'])){
  $patID = $_POST['patID'];
}
if(isset($_POST['surgeryType'])){
  $surgeryType = $_POST['surgeryType'];
}
if(isset($_POST['surgeryID'])){
  $surgeryID = $_POST['surgeryID'];
}
if(isset($_POST['surgeryTime'])){
  $surgeryTime = $_POST['surgeryTime'];
}


//CREATING TABLE

if(isset($patID)){
  $mysqlpat = $conn->prepare("INSERT INTO `surgery`.`surgeryInput` VALUES (?,?,?,?,?);");
  $mysqlpat->bind_param("isiss",$patID,$surgeryType,$surgeryID,$surgeryTime,$status);
  $mysqlpat->execute();

}
  $conn->close();
 ?>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

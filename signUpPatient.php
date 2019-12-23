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

    <title>Patient Sign Up</title>
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
                <li><a href="index.html">Home</a></li>
                <li><a href="signIn.html">Sign in</a></li>
                <li><a href="admin.html">Admin</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container" id="signInForm">
    <h1>Patient Account Creation page</h1>
    <form class="col-lg-4" method="post" action="signUpPatient.php">
        <div class="form-group">
            <label for="inputFirstName">Patient ID</label>
            <input type="text" class="form-control" id="inputFirstName" placeholder="Patient ID" name = "patID">
        </div>
        <div class="form-group">
            <label for="inputLastName">Full Name</label>
            <input type="text" class="form-control" id="inputLastName" placeholder="Last Name" name = "name">
        </div>
        <div class="form-group">
            <label for="InputEmail1">Email address</label>
            <input type="text" class="form-control" id="InputEmail1" placeholder="Enter email" name = "email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="InputPassword1">Password</label>
            <input type="password" class="form-control" id="InputPassword1" placeholder="Password" name = "pwd">
        </div>
        <div class="form-group">
            <label for="inputPhone">Mobile Number</label>
            <input type="text" class="form-control" id="inputPhone" placeholder="Phone Number" name = "phone">
        </div>
        <div class="form-group">
            <label for="inputMeeting">Meeting ID</label>
            <input type="text" class="form-control" id="inputMeeting" placeholder="Meeting ID" name = "meetingID">
        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
<!--            <input type="text" class="form-control" id="inputAddress" placeholder="Residential Address">-->
            <textarea class="form-control" cols="30" rows="3" id="inputAddress" placeholder="Address" name = "address"></textarea>
        </div>
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label>
                <input type="radio" name="options" id="femaleRadioButton" autocomplete="off" value = "Female"> Female
            </label>
            <label>
                <input type="radio" name="options" id="maleRadioButton" autocomplete="off" value = "Male"> Male
            </label>
        </div>

        <hr>
        <br>
        <button type="submit" class="btn btn-success btn-lg bottom">Sign Up</button>
    </form>
</div>

<?php

include("connection.php");
$patID;
$name;
$email;
$password;
$phone;
$gender;
$address;
$meetingID;

if(isset($_POST['patID'])){
  $patID = $_POST['patID'];
}
if(isset($_POST['name'])){
  $name = $_POST['name'];
}
if(isset($_POST['email'])){
  $email = $_POST['email'];
}
if(isset($_POST['pwd'])){
  $password = $_POST['pwd'];
}
if(isset($_POST['phone'])){
  $phone = $_POST['phone'];
}
if(isset($_POST['options'])){
  $gender = $_POST['options'];
}
if(isset($_POST['address'])){
  $address = $_POST['address'];
}
if(isset($_POST['meetingID'])){
  $meetingID = $_POST['meetingID'];
}

//CREATING TABLE

if(isset($patID)){
  $mysqlpat = $conn->prepare("INSERT INTO `surgery`.`patient` VALUES (?,?,?,?,?,?,?,?);");
  $mysqlpat->bind_param("issssssi",$patID,$name,$phone,$email,$password,$address,$gender,$meetingID);
  $mysqlpat->execute();

}
  $conn->close();
 ?>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

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

    <title>Sign In</title>
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

<div class="container" id="signInForm">
    <form class="col-lg-5" method="post" action="signIn.php">
        <div class="form-group">
            <label for="InputEmail1">Email address</label>
            <input type="email" class="form-control" id="InputEmail1" placeholder="Enter email" name = "email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="InputPassword1">Password</label>
            <input type="password" class="form-control" id="InputPassword1" placeholder="Password" name = "pwd">
        </div>

        <button type="submit" class="btn btn-primary" name = "sb">Submit</button>
        <button type="submit" class="btn btn-primary" name = "s11">Patient</button>
        <p>Don't have an account? <a href="signUp.php" id="signUp">Sign up</a></p>
    </form>
</div>

<?php
include("connection.php");

$eID;
$password;
//isset($_POST['email']
if(isset($_POST['pwd'])){
  $password = $_POST['pwd'];
}
if(!empty($_POST['email'])){
  $eID = $_POST['email'];
}

if(isset($_POST['email']) && isset($_POST['pwd'])){

  $sql = "SELECT `memEmail`,`memPwd`,`memPost` from `surgery`.`member` where `memPwd`= '$password' and `memEmail`= '$eID';";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_row($result);
  if(array_key_exists('sb',$_POST)){
    if($row[0]==$eID && $row[1] == $password){

      if($row[2]=="Doctor"){
        header("Location: doctor.php");
      }
      else if($row[2]=="Surgeon"){
        header("Location: surgeryInput.php");
      }
      else if($row[2]=="Lab Technician"){
        header("Location: laboratory.php");
      }
      else if($row[2]=="Accountant"){
        header("Location: accountant.php");
      }
      else if($row[2]=="Pharmacist"){
        header("Location: pharmacy.php");
      }else{
          echo "Unable to sign In! Please try again.";
      }
    }else{
      echo "Unable to sign In! Please try again.";
    }
}



}

if(array_key_exists('s11',$_POST)){
  header("Location: signInPatient.php");
}
$conn->close();
 ?>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

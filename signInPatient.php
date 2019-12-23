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

    <title>Sign In Patient</title>
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
    <form class="col-lg-5" method="post" action="signInPatient.php">
        <div class="form-group">
            <label for="InputEmail1">Email address</label>
            <input type="email" class="form-control" id="InputEmail1" placeholder="Enter email" name = "email2">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="InputPassword1">Password</label>
            <input type="password" class="form-control" id="InputPassword1" placeholder="Password" name = "pwd2">
        </div>

        <button type="submit" class="btn btn-primary" name = "sb2">Submit</button>

        <button type="submit" class="btn btn-primary" name = "bl">Member</button>

        <p>Don't have an account? <a href="signUp.php" id="signUp">Sign up</a></p>
    </form>
</div>

<?php
include("connection.php");

$eID;
$password;
//isset($_POST['email']
if(isset($_POST['pwd2'])){
  $password = $_POST['pwd2'];
}
if(!empty($_POST['email2'])){
  $eID = $_POST['email2'];
}

if(isset($_POST['email2']) && isset($_POST['pwd2'])){

  $sql2 = "SELECT `patEmail`,`patPwd` from `surgery`.`patient` where `patPwd`= '$password' and `patEmail`= '$eID';";
  $result2 = mysqli_query($conn,$sql2);
  $row2 = mysqli_fetch_row($result2);

  if(array_key_exists('sb2',$_POST)){
    if($row2[0]==$eID && $row2[1] == $password){
      header("Location: patient.php");


    }else{
      echo "Unable to sign In! Please try again.";
    }
}else{
  echo "Unable to sign In! Please try again.";
}




}
if(array_key_exists('b1',$_POST)){
  header("Location: signIn.php");
}
$conn->close();
 ?>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

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

    <title>Staff Sign Up</title>
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
    <h1>Staff Account Creation page</h1>
    <form class="col-lg-4" action = "signUp.php" method = "post">
        <div class="form-group">
            <label for="inputFirstName">Member ID</label>
            <input type="text" class="form-control" id="inputFirstName" name = "memID" placeholder="Member ID">
        </div>
        <div class="form-group">
            <label for="inputLastName">Name</label>
            <input type="text" class="form-control" id="inputLastName" name = "name" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="InputEmail1">Email address</label>
            <input type="text" class="form-control" id="InputEmail1" name = "email" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="InputPassword1">Password</label>
            <input type="password" class="form-control" id="InputPassword1" name = "password" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="inputPhone">Mobile Number</label>
            <input type="text" class="form-control" id="inputPhone" name="phone" placeholder="Phone Number">
        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
<!--            <input type="text" class="form-control" id="inputAddress" placeholder="Residential Address">-->
            <textarea class="form-control" cols="30" rows="3" id="inputAddress" name = "address" placeholder="Address"></textarea>
        </div>
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label>
                <input type="radio" name="goptions" id="femaleRadioButton" autocomplete="off" value = "Female"> Female
            </label>
            <label>
                <input type="radio" name="goptions" id="maleRadioButton" autocomplete="off" value = "Male"> Male
            </label>
        </div>

        <hr>
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label for="availablePostsRadio" id="postLabel">Select Post: </label>
            <div id="availablePostsRadio">
                <label>
                    <input type="radio" name="options" id="doctorRadio" autocomplete="off" value = "Doctor"> Doctor
                </label><br>

                <label>
                    <input type="radio" name="options" id="surgeonRadio" autocomplete="off" value = "Surgeon"> Surgeon
                </label><br>

                <label>
                    <input type="radio" name="options" id="nurseRadio" autocomplete="off" value = "Nurse"> Nurse
                </label><br>

                <label>
                    <input type="radio" name="options" id="labTechicianRadio" autocomplete="off" value = "Lab Technician"> Lab Technician
                </label><br>

                <label>
                    <input type="radio" name="options" id="pharmacistRadio" autocomplete="off" value = "Pharmacist"> Pharmacist
                </label><br>

                <label>
                    <input type="radio" name="options" id="accountantRadio" autocomplete="off" value = "Accountant"> Accountant
                </label>
            </div>
        </div>
        <br><br>
        <button type="submit" class="btn btn-success btn-lg bottom" name = "btn">Sign Up</button>
    </form>
</div>

<?php
include("connection.php");
$memID;
$name;
$email;
$password;
$phone;
$gender;
$address;
$post;

if(isset($_POST['memID'])){
  $memID = $_POST['memID'];
}
if(isset($_POST['name'])){
  $name = $_POST['name'];
}
if(isset($_POST['email'])){
  $email = $_POST['email'];
}
if(isset($_POST['password'])){
  $password = $_POST['password'];
}
if(isset($_POST['phone'])){
  $phone = $_POST['phone'];
}
if(isset($_POST['goptions'])){
  $gender = $_POST['goptions'];
}
if(isset($_POST['address'])){
  $address = $_POST['address'];
}
if(isset($_POST['options'])){
  $post = $_POST['options'];
}
//caching the Dom

//CREATING TABLE

if(isset($memID)){
  $mysql = $conn->prepare("INSERT INTO `surgery`.`member` VALUES (?,?,?,?,?,?,?,?);");
  $mysql->bind_param("isssssss",$memID,$name,$phone,$email,$password,$address,$gender,$post);
  $mysql->execute();
}
  $conn->close();
//mysqli_query($conn,$mysql);

//$no = '123';
//$mysql->execute();



  //  if($conn->query($s) === TRUE){
//    echo "Query successful";
  //  }else {
  //    echo "query not sf";
//     }
//,mem_Phone,mem_Email,mem_Address,mem_Gender,mem_Post "Bilal","012312","vsdasadv","fdadbf dfbdf","male","doc"

 ?>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

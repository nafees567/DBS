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

    <title>Surgery Sign Up</title>
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



<?php
//<th><h3>&nbsp; &nbsp; Surgery Status</h3></th>
include("connection.php");
echo "<hr>";
echo "<table>
<tr>
<th><h3>&nbsp; &nbsp; ID &nbsp; &nbsp; &nbsp;</h3></th>
<th><h3>Patient</h3></th>

</tr>";
$sql = "SELECT patID,patName from `surgery`.`patient` where patID not in (Select patID from `surgery`.`patient` join `surgery`.`surgeryInput` on `patient`.patID = `surgeryInput`.patientID) ";
$query = mysqli_query($conn,$sql) or die(mysqli_error($conn));
while($row = mysqli_fetch_array($query,MYSQLI_NUM)){
  echo "<tr>
  <td><h3>&nbsp; &nbsp; $row[0]</h3></td>
  <td><h3> $row[1]</h3></td>

  </tr>";
}
  //<td><h3>&nbsp; &nbsp; $row[2]</h3></td>
echo "</table>";

/*
echo "<table>
<tr>
  <td>Patient ID</td>
  <td>Patient Name</td>
</tr>";
while($result=mysqli_fetch_array($query)){
  echo "<tr>
    <td>'.$result["patID"].'</td>
    <td>'.$result["patName"].'</td>
  </tr>
  </table>
  ";
*/

$conn->close();


 ?>




<br>
<br>
<a type ="button" class="btn btn-success btn-lg bottom" href="surgeryInput.php">Back To Surgery Input</a>










    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

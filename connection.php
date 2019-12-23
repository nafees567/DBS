<?php
$servername = "localhost";
$username = "surgery";
$password = "rootroot";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully\n";

// SIGN UP Patient

//------------------------------------------------
// sign up staff

//------------------------------------------------
 ?>

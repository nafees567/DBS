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

    <title>Tools</title>
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



  <?php
  include("connection.php");
  $tool;
  $quantity;
  $availability = "available";

  if(isset($_POST['name'])){
  $tool = $_POST['name'];
  }
  if(isset($_POST['q'])){
  $quantity = $_POST['q'];
  }
  if(isset($_POST['q'])){
    if($quantity == 0){
      $availability = "unavailable";
    }
  }

  if(isset($tool)){
  $mysql = $conn->prepare("INSERT INTO `surgery`.`tools` VALUES (?,?,?);");
  $mysql->bind_param("ssi",$tool,$availability,$quantity);
  $mysql->execute();
  $mysql->close();
  }


echo "<div class=\"container\">
    <h1>Tools</h1><br>
    <div class=\"row\"></div>
    <div class=\"col-lg-6\">

        <div class=\"row\"></div>
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <br><br>
                <button type = \"submit\" class=\"btn btn-success bottom btn-lg\" name =\"buttona\">View Tools</button>
                <a type =\"button\" class=\"btn btn-success btn-lg bottom\" href=\"surgeryInput.php\">Back to Dashboard</a>
            </div>
        </div>
        <div class=\"list\">
        <h3 class=\"lead\"><b>&nbsp; &nbsp; Tool &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Availability &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
         Quantity </b></h3><hr>";


    $sql = "SELECT `toolName`,`toolAv`,`quantity` from `surgery`.`tools`";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result,MYSQLI_NUM)){
    echo "<p class=\"lead\"> &nbsp; &nbsp; $row[0] &nbsp; &nbsp; &nbsp; $row[1] &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $row[2] </p>
    <hr>";

    }


echo "        </div>
  </div>";
  $conn->close();
   ?>


    <div class="col-lg-5 col-lg-offset-1">
        <br>
        <h2>Add Tools</h2>
        <form class="list" method="post" action="tools.php">
            <div class="form-group">
                <label for="inputStaffName">Tool Name</label>
                <input type="text" class="form-control" id="inputStaffName" placeholder="Tool name" name = "name">
            </div>
            <div class="form-group">
                <label for="inputStaffName">Quantity</label>
                <input type="number" class="form-control" id="inputStaffName" placeholder="Quantity" name = "q">
            </div>

                        <br><br>
                        <button type="submit" class="btn btn-primary">Add Tool</button>
                    </form>
                </div>









    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

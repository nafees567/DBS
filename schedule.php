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

    <title>Schedule</title>
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
  $ID;
  $shift;

  if(isset($_POST['id'])){
  $ID = $_POST['id'];
  }
  if(isset($_POST['options'])){
  $shift = $_POST['options'];
  }
  if(isset($ID)){
  $mysql = $conn->prepare("INSERT INTO `surgery`.`schedule` VALUES (?,?);");
  $mysql->bind_param("is",$ID,$shift);
  $mysql->execute();
  $mysql->close();
  }


echo "<div class=\"container\">
    <h1>Schedule</h1><br>
    <div class=\"row\"></div>
    <div class=\"col-lg-6\">
        <h2>Shift</h2>
        <h3>Staff</h3>
        <div class=\"row\"></div>
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <br><br>
                <button type = \"submit\" class=\"btn btn-success bottom btn-lg\" name =\"buttona\">View Schedule</button>
            </div>
        </div>
        <div class=\"list\">
        <h3 class=\"lead\"><b>ID &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Name &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
         Post &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Shift</b></h3><hr>";


    $sql = "SELECT `memID`,`memName`,`memPost`,`shift` from `surgery`.`schedule`join`surgery`.`member` on `schedule`.ID = `member`.memID where `shift` = 'day' or `shift` = 'night' ";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result,MYSQLI_NUM)){
    echo "<p class=\"lead\"> $row[0] &nbsp; &nbsp; &nbsp; $row[1] &nbsp; &nbsp; &nbsp; $row[2] &nbsp; &nbsp; &nbsp; $row[3] </p>
    <hr>";

    }


echo "        </div>
  </div>";
  $conn->close();
   ?>


    <div class="col-lg-5 col-lg-offset-1">
        <br>
        <h2>Add to Shifts</h2>
        <form class="list" method="post" action="schedule.php">
            <div class="form-group">
                <label for="inputStaffName">Staff ID</label>
                <input type="text" class="form-control" id="inputStaffName" placeholder="ID" name = "id">
            </div>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label for="availablePostsRadio" id="postLabel">Select Shift </label>
                <div id="availablePostsRadio">
                    <label>
                        <input type="radio" name="options" id="doctorRadio" autocomplete="off" value = "Day"> Day
                    </label><br>

                    <label>
                        <input type="radio" name="options" id="surgeonRadio" autocomplete="off" value = "Night"> Night
                    </label><br>


                </div>
            </div>

                        <br><br>
                        <button type="submit" class="btn btn-primary">Add to Shift</button>
                    </form>
                </div>









    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

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
        <h1>Welcome to the Dashboard!</h1>
        <br>
        <form class="asd" action="surgerySchedule.php" method="post">
          <button type="submit" class="btn btn-success btn-lg bottom" name = "b">Surgery Completed</button>
        </form>
<a type ="button" class="btn btn-success btn-lg bottom" href="surgeryInput.php">Input Patients</a>


        <?php

        include("connection.php");

        //patientID,surgeryType,surgeryID,surgeryTime
        $sql = "SELECT * from `surgery`.`surgeryinput` where `status` = 'pending';";
        $query = mysqli_query($conn,$sql) or die(mysqli_error($conn));


        echo " <br>
                <div class=\"container\">
                  <h2>Schedule</h2>
                  <br>
                    <div class=\"row\"></div>
                    <div class=\"col-lg-6\">


                        <div class=\"list\">
                          <br>";

                          echo "<h4><u>ID</u> &nbsp; &nbsp; <u>Surgery Type</u> &nbsp; &nbsp; <u>Surdgery ID</u> &nbsp; &nbsp; <u>Surgery Time</u></h4>";
                    while($row = mysqli_fetch_array($query,MYSQLI_NUM)){

                      echo "<p class=\"lead\"> $row[0] &nbsp; &nbsp; &nbsp; $row[1] &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $row[2] &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $row[3]</p>";
                      echo "<hr>";
                    }


                    echo "</div>

                        <br>


                    </div>
            </div>";
            if(isset($_POST['b'])){
              $result = mysqli_query($conn,"SELECT * from `surgery`.`surgeryinput` where `status` = 'pending' limit 1;");

              $row = mysqli_fetch_row($result);
              $subquery = $row[2];

              $updatesql = $conn->prepare("UPDATE `surgery`.`surgeryinput` SET `status`='done' where `surgeryID` = (?) ");
              $updatesql->bind_param("s",$subquery);
              //$updateQuery = mysqli_query($conn,$updatesql) or die(mysqli_error($conn));
              //$updateQuery->bind_param("s",);
              $updatesql->execute();

              echo "q successful";
            }else{
              echo " q not successful";
            }

        $conn->close();
        /*    <br>
            <div class="container">
              <h2>Schedule</h2>
              <br>
                <div class="row"></div>
                <div class="col-lg-6">


                    <div class="list">
                      <br>
                        <p class="lead"> Doctor1 </p>
                        <hr>
                        <p class="lead"> Doctor2 </p>
                        <hr>
                        <p class="lead"> Doctor3 </p>
                    </div>

                    <br>


                </div>
        </div>
    */

         ?>








    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

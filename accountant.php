<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">

    <title>Accountant</title>
</head>
<body>
  <?php
  include("connection.php");

  //form1
  $patientName;
  $patientsDoc;
  $daysAdmitted;
  $feeAmount;
  $arrears;
  $dueDate;

  if(isset($_POST['patname'])){
  $patientName = $_POST['patname'];
  }
  if(isset($_POST['doc'])){
  $patientsDoc = $_POST['doc'];
  }
  if(isset($_POST['days'])){
  $daysAdmitted = $_POST['days'];
  }
  if(isset($_POST['amount'])){
  $feeAmount = $_POST['amount'];
  }
  if(isset($_POST['arrears'])){
  $arrears = $_POST['arrears'];
  }
  if(isset($_POST['duedate'])){
  $dueDate = $_POST['duedate'];
  }

  //form2
  $docName;
  $salMonth;
  $workingDays;
  $grossSalary;
  $deductions;
  $netSalary;

  if(isset($_POST['dname'])){
  $docName =  $_POST['dname'];
  }
  if(isset($_POST['month'])){
  $salMonth =  $_POST['month'];
  }
  if(isset($_POST['workingDays'])){
  $workingDays =  $_POST['workingDays'];
  }
  if(isset($_POST['grossSalary'])){
  $grossSalary =  $_POST['grossSalary'];
  }
  if(isset($_POST['deductions'])){
  $deductions =  $_POST['deductions'];
  }
  if(isset($_POST['netSalary'])){
  $netSalary =  $_POST['netSalary'];
  }

  if(array_key_exists('b1',$_POST)){
    $mysql = $conn->prepare("INSERT INTO `surgery`.`fees` VALUES(?,?,?,?,?,?)");
    $mysql->bind_param("ssidds",$patientName,$patientsDoc,$daysAdmitted,$feeAmount,$arrears,$dueDate);
    $mysql->execute();
    $conn->close();
  }
  else if(array_key_exists('b2',$_POST)){
    $mysql = $conn->prepare("INSERT INTO `surgery`.`salary` VALUES(?,?,?,?,?,?)");
    $mysql->bind_param("ssiddd",$docName,$salMonth,$workingDays,$grossSalary,$deductions,$netSalary);
    $mysql->execute();
    $conn->close();
  }

   ?>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle = "collapse" data-target = "#navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Hospital</a>
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

        <h1>Generate Challan Forms</h1><br>
        <div class="row"></div>
        <div class="col-md-5 col-xs-12">
            <form method="post" action="accountant.php">
                <div class="form-group">
                    <label for="inputPatientNameC">Name of Patient: </label>
                    <input type="text" class="form-control" id="inputPatientNameC" placeholder="patient name" name = "patname">
                </div>
                <div class="form-group">
                    <label for="inputPatientDocNameC">Patient's Doctor Name</label>
                    <input type="text" class="form-control" id="inputPatientDocNameC" placeholder="name of doctor who attended the patient" name = "doc">
                </div>
                <div class="form-group">
                    <label for="inputDaysC">No. of days admitted</label>
                    <input type="text" class="form-control" id="inputDaysC" placeholder="enter number of days patient remained in the hospital" name = "days">
                </div>
                <div class="form-group">
                    <label for="inputPayableAmountC">Payable Amount</label>
                    <input type="text" class="form-control" id="inputPayableAmountC" placeholder="amount to be paid" name = "amount">
                </div>
                <div class="form-group">
                    <label for="inputArrearC">Arrear</label>
                    <input type="text" class="form-control" id="inputArrearC" placeholder="enter any outstanding charges" name = "arrears">
                </div>
                <div class="form-group">
                    <label for="inputDueDateC">Due date</label>
                    <input type="text" class="form-control" id="inputDueDateC" placeholder="due date of payment" name = "duedate">
<!--                    <textarea class="form-control" cols="30" rows="3" id="inputAddress" placeholder="Address"></textarea>-->
                </div>
                <br>
                <button type="submit" class="btn btn-success bottom" name = "b1">Generate Slip</button>
            </form>
        </div>
        <div class="col-md-5 col-md-offset-1 col-xs-12">
            <br><br>
            <div class="list">
                <p class="lead"> Name of patient: </p>
                <p class="lead" id="patientName"><?php if(isset($_POST['patname'])){echo $patientName;} ?></p>
                <br>
                <p class="lead"> Patient's doctor name: </p>
                <p class="lead" id="patientDoctor"><?php if(isset($_POST['doc'])){echo $patientsDoc;} ?></p>
                <br>
                <p class="lead"> No of days: </p>
                <p class="lead" id="noOfDays"><?php if(isset($_POST['days'])){echo $daysAdmitted;} ?></p>
                <br>
                <p class="lead">Payable amount: </p>
                <p class="lead" id="payableAmount"><?php if(isset($_POST['amount'])){echo $feeAmount;} ?></p>
                <br>
                <p class="lead">Arrear:  </p>
                <p class="lead" id="arrear"><?php if(isset($_POST['arrears'])){echo $arrears;} ?></p>
                <br>
                <p class="lead">Due date: </p>
                <p class="lead" id="dueDate"><?php if(isset($_POST['duedate'])){echo $dueDate;} ?></p>
                <br>
                <small class="notification"> This amount can be paid in any bank within the due due. After due date, tihs challan would be invalid.</small><br>
            </div>
        </div>
        <div class="row"></div>
        <hr>
        <div class="row">
            <div class="col-md-5 col-xs-12">
                <form method="post" action="accountant.php">
                    <div class="form-group">
                        <label for="inputDocNameC">Doctor's Name: </label>
                        <input type="text" class="form-control" id="inputDocNameC" placeholder="doctor name" name = "dname">
                    </div>
                    <div class="form-group">
                        <label for="inputSalMonthC">Salary Month</label>
                        <input type="text" class="form-control" id="inputSalMonthC" placeholder="Salary Month" name = "month">
                    </div>
                    <div class="form-group">
                        <label for="inputAttendedDaysC">No. of days attended/No. of working days</label>
                        <input type="text" class="form-control" id="inputAttendedDaysC" placeholder="enter number of days patient remained in the hospital" name = "workingDays">
                    </div>
                    <div class="form-group">
                        <label for="inputGrossSalC">Gross Salary (in Rs.)</label>
                        <input type="text" class="form-control" id="inputGrossSalC" placeholder="gross salary (salary prior to any deductions)" name = "grossSalary">
                    </div>
                    <div class="form-group">
                        <label for="inputDeductionsC">Deductions (in Rs.)</label>
                        <input type="text" class="form-control" id="inputDeductionsC" placeholder="deductions" name = "deductions">
                    </div>
                    <div class="form-group">
                        <label for="inputNetSalC">Net Salary (in Rs.)</label>
                        <input type="text" class="form-control" id="inputNetSalC" placeholder="net salary (salary received or salary after deductions)" name="netSalary">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success bottom" name = "b2">Generate Slip</button>
                </form>
            </div>
            <div class="col-md-5 col-md-offset-1 col-xs-12">
                <br>
                <div class="list">
                    <p class="lead"> Staff name: </p>
                    <p class="lead" id="staffName"><?php if(isset($_POST['dname'])){echo $docName;} ?></p>
                    <br>
                    <p class="lead">Salary Month: </p>
                    <p class="lead" id="salaryMonth"><?php if(isset($_POST['month'])){echo $salMonth;} ?></p>
                    <br>
                    <p class="lead">No. of working days: </p>
                    <p class="lead" id="daysAttended"><?php if(isset($_POST['workingDays'])){echo $workingDays;} ?></p>
                    <br>
                    <p class="lead">Gross Salary (in Rs.): </p>
                    <p class="lead" id="salary"><?php if(isset($_POST['grossSalary'])){echo $grossSalary;} ?></p>
                    <br>
                    <p class="lead">Deductions (in Rs.): </p>
                    <p class="lead" id="deductions"><?php if(isset($_POST['deductions'])){echo $deductions;} ?></p>
                    <br>
                    <p class="lead">Net Salary (in Rs.): </p>
                    <p class="lead" id="netSalary"><?php if(isset($_POST['netSalary'])){echo $netSalary;} ?></p>
                    <br>
                    <small class="notification"> Monthly Salary Slip</small><br>
                    <small class="notification"> Generated by Account Branch</small><br>
                </div>
            </div>
        </div>
    </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

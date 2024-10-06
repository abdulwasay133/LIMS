<?php
session_start();
if($_SESSION['user']){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="asset/css/bootstrap.min.css">
	<link rel="stylesheet" href="asset/icons/bootstrap-icons.min.css">
	<link rel="stylesheet" href="asset/style.css">
	<link rel="stylesheet" href="asset/fontawesome.min.css">
	<script src="asset/js/bootstrap.bundle.min.js"></script>
	<script src="asset/js/jquery.min.js"></script>
    <title>Lab Report</title>
</head>
<body class="p-0 m-0">
<nav class="navbar navbar-expand-lg navbar-light bg-light topnavbar"style='position:reletive;top:0'>
        <div class="container">
            <a href="http://localhost/labreport/" class="navbar-brand"><b>LIMS</b></a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="http://localhost/labreport/" class="nav-item nav-link">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Patients</a>
                        <div class="dropdown-menu">
                            <a href="patient/addpatient.php" class="dropdown-item">Add Patient</a>
                            <a href="patient/" class="dropdown-item">Show All Patients</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Reports</a>
                        <div class="dropdown-menu">
                            <a href="report/" class="dropdown-item">New Report</a>
                            <a href="previous/" class="dropdown-item">Previous Reports</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Payment Ledgers</a>
                        <div class="dropdown-menu">
                            <a href="payments/doctorpay.php" class="dropdown-item">Doctor Ledgers</a>
                            <a href="payments/doctorpayment.php" class="dropdown-item">Doctors Data</a>
                            <a href="payments/paymentsummary.php" class="dropdown-item">Payment Summary</a>
                            <a href="payments/sales.php" class="dropdown-item">Sales Graph</a>
                            <a href="payments/overview.php" class="dropdown-item">Accounts</a>
                        </div>
                    </div>
                    <a href="expense/" class="nav-item nav-link" tabindex="-1">Expense</a>
                </div>
                <div class="navbar-nav ms-auto">
                    <a href="logout.php" class="nav-item nav-link">Logout</a>
                </div>
            </div>
        </div>
    </nav>


<div class="container">
	<div class="row mt-5">
	<div class="col-md-3 col-sm-4">
	<div class="wrimagecard wrimagecard-topimage">
          <a href="categories/">
          <div class="wrimagecard-topimage_header text-center" style="background-color:rgba(187, 120, 36, 0.1) ">
            <img src="images/category.png" alt="" class="w-25">
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>Categories </h4>
          </div>
        </a>
      </div>
      </div>
	<div class="col-md-3 col-sm-4">
	<div class="wrimagecard wrimagecard-topimage">
          <a href="test/">
          <div class="wrimagecard-topimage_header text-center" style="background-color:rgba(187, 120, 36, 0.1) ">
            <img src="images/test.png" alt="" class="w-25">
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>Test Management</h4>
          </div>
        </a>
      </div>
      </div>
    <div class="col-md-3 col-sm-4">
      <div class="wrimagecard wrimagecard-topimage">
          <a href="doctor/">
          <div class="wrimagecard-topimage_header text-center" style="background-color: rgba(22, 160, 133, 0.1)">
          <img src="images/doctor.png" alt="" class="w-25">
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>Doctor Management</h4>
          </div>
        </a>
      </div>
</div>
<div class="col-md-3 col-sm-4">
      <div class="wrimagecard wrimagecard-topimage">
          <a href="report/">
          <div class="wrimagecard-topimage_header text-center" style="background-color:  rgba(213, 15, 37, 0.1)">
          <img src="images/report.png" alt="" class="w-25">
          </div>
          <div class="wrimagecard-topimage_title" >
            <h4>Create Report</h4>
          </div>
          
        </a>
      </div>
	</div>

	<div class="col-md-3 col-sm-4">
      <div class="wrimagecard wrimagecard-topimage">
          <a href="previous/">
          <div class="wrimagecard-topimage_header text-center" style="background-color:  rgba(250, 188, 9, 0.1)">
          <img src="images/data.png" alt="" class="w-25">
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>Previous Records</h4>
          </div>
         
        </a>
      </div>
	</div>
	<div class="col-md-3 col-sm-4">
      <div class="wrimagecard wrimagecard-topimage">
          <a href="backup/">
            <div class="wrimagecard-topimage_header text-center" style="background-color: rgba(121, 90, 71, 0.1)">
            <img src="images/backup.png" alt="" class="w-25"> 
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>Backup Data</h4>
          </div>
          
        </a>
      </div>
	</div>
	<div class="col-md-3 col-sm-4">
      <div class="wrimagecard wrimagecard-topimage">
          <a href="company/">
         <div class="wrimagecard-topimage_header text-center" style="background-color: rgba(130, 93, 9, 0.1)">
         <img src="images/settings.png" alt="" class="w-25">
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>Company Setting</h4>
          </div>
        </a>
      </div>
	</div>
    <!-- <div class="col-md-3 col-sm-4">
      <div class="wrimagecard wrimagecard-topimage">
          <a href="#">
          <div class="wrimagecard-topimage_header text-center" style="background-color: rgba(22, 160, 133, 0.1)">
          <img src="images/information.png" alt="" class="w-25">
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>Software Information</h4>
          </div>
        </a>
      </div>
</div> -->
<div class="col-md-3 col-sm-4">
      <div class="wrimagecard wrimagecard-topimage">
          <a href="patient/addpatient.php">
          <div class="wrimagecard-topimage_header text-center" style="background-color:  rgba(51, 105, 232, 0.1)">
          <img src="images/patient.png" alt="" class="w-25">
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>Add Patients</h4>
          </div>
          
        </a>
      </div>
	</div>
</div>
</div>
</body>
<?php
 }else{
  header("Location: login.php");
}
?>

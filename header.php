<?php
$root = "../";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
	<link rel="stylesheet" href="../asset/icons/bootstrap-icons.min.css">
	<link rel="stylesheet" href="../asset/style.css">
	<link rel="stylesheet" href="../asset/fontawesome.min.css">
	<link rel="stylesheet" href="../asset/datatables/datatables.min.css">
	<script src="../asset/js/bootstrap.bundle.min.js"></script>
	<script src="../asset/js/jquery.min.js"></script>
	<script src="../asset/qrcode.min.js"></script>
	<script src="../asset/apexcharts.js"></script>
	<script src="../asset/datatables/datatables.min.js"></script>
	<script src="../asset/datatables/pdfmake.min.js"></script>
	<script src="../asset/datatables/vfs_fonts.js"></script>
    <title>Lab Report</title>
</head>
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
                            <a href="<?php echo $root; ?>patient/addpatient.php" class="dropdown-item">Add Patient</a>
                            <a href="<?php echo $root; ?>patient/" class="dropdown-item">Show All Patients</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Reports</a>
                        <div class="dropdown-menu">
                            <a href="<?php echo $root; ?>report/" class="dropdown-item">New Report</a>
                            <a href="<?php echo $root; ?>previous/" class="dropdown-item">Previous Reports</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Payment Ledgers</a>
                        <div class="dropdown-menu">
                            <a href="<?php echo $root; ?>payments/doctorpay.php" class="dropdown-item">Doctor Ledgers</a>
                            <a href="<?php echo $root; ?>payments/doctorpayment.php" class="dropdown-item">Doctors Data</a>
                            <a href="<?php echo $root; ?>payments/paymentsummary.php" class="dropdown-item">Payment Summary</a>
                            <a href="<?php echo $root; ?>payments/sales.php" class="dropdown-item">Sales Graph</a>
                            <a href="<?php echo $root; ?>payments/overview.php" class="dropdown-item">Accounts</a>
                        </div>
                    </div>
                    <a href="<?php echo $root; ?>expense/" class="nav-item nav-link" tabindex="-1">Expense</a>
                </div>
                <div class="navbar-nav ms-auto">
                    <a href="<?php echo $root; ?>/logout.php" class="nav-item nav-link">Logout</a>
                </div>
            </div>
        </div>
    </nav>
    <script>

    </script>
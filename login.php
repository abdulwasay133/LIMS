
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
    <title>LIMS Lab Report</title>
</head>
<body style="background:url('images/background.jpg');background-repeat: no-repeat;background-size: cover;">
<div class="container">
	<div class="row mt-5">
	<!-- Section: Design Block -->
<section class="">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" >
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
   

        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-3 px-md-5">
              <form action="checkuser.php" method="POST">
                <div class="text-center">
                <img src="images/user.png" alt="" class="w-25">
       <h3 class="mb-4"><b>Login Here</b></h3>
       </div>

                <!-- Email input -->
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" id="username" name="user" class="form-control" />
                  <label class="form-label" >Username</label>
                </div>

                <!-- Password input -->
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="password" id="password" name="pass" class="form-control" />
                  <label class="form-label" >Password</label>
                </div>


                <!-- Submit button -->
                <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">
                  Sign up
                </button>

                <!-- Register buttons -->
           
              </form>
            </div>
          </div>
        </div>

<!-- 
        <div class="col-lg-6 mb-5 mb-lg-0 text-light p-2">
          <div class="mb-5">
          <h1 class=" display-3 fw-bold p-0 m-0">
          <span class="text-primary p-0 m-0">L I M S</span><br /></h1>
            <h4 class="p-0 m-0">Laboratory Information Management System</h4>
          </div>
          <p class="text-light">
            LIMS Can Manage your Reports.Ptients previous Records Doctor management report summry Powerd By AW Soft Solutions
          </p>
        </div> -->
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
</div>
</div>
</body>

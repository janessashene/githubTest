<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DMS | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

</head>

<!-- Styles-->
</head>
<body style="background:#D4D4D4;">

  <nav class="navbar navbar-default navbar navbar-expand navbar-white navbar-light bg-dark">
  
    <ul class="navbar-nav">
      
      <!-- Brand Logo -->
   
      <img src="images/dit.png" class="img-circle elevation-2"  style = "float: left; width:9%; height: auto; padding: auto px;" > <span> <span>
       <h5 ><b> Department of Information Technology<br> Document Management System</b></h5>
    <!-- Brand Logo -->
     
    </ul>
  </nav>

  <br><br><br><br>

<div class="header" style = "width: 35%; margin: 50px auto 0px; color: white ;background: #333333;text-align: center;border: 1px solid #B0C4DE;border-radius: 10px 10px 0px 0px;padding: 20px;">
    <h2>Login</h2>
  </div>
   
  <form method="post" action="login_c.php" style = "width: 35%;margin: 0px auto;padding: 20px;border: 1px solid #B0C4DE;background: white;border-radius: 0px 0px 10px 10px;text-align: center;">

    <div class="form-group row">

      <label for="inputEmail3" class="col-sm-3 col-form-label">Username</label>
      <div class="col-sm-7 input-group mb-3">
        <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                  </div>
        <input type="text" name="username" class="form-control" placeholder="Enter Username" autocomplete="off" required>
      </div>
    </div>

     <div class="form-group row">
      <label for="inputEmail3" class="col-sm-3 col-form-label">Password</label>
      <div class="col-sm-7 input-group mb-3">
        <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                  </div>
        <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
      </div>
    </div>

     <button type="submit" name="login_user" class="btn btn-secondary">LOGIN</button>
    
    
  </form>


<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>

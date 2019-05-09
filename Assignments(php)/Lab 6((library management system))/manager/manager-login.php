<?php

session_start();

if(isset($_SESSION['id_admin'])) {
  header("Location: manager-page.php");
  exit();
}?>
<!DOCTYPE html>
<html>
<?php include('../bootstrap.php') ?>

<body class="hold-transition login-page">
<div class="login-box " style="width: 30%; margin-left: 30px">
 
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Manager Login</p>

    <form action="checklogin.php" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" placeholder="Username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
      <?php 
//If User Failed To log in then show error message.
if(isset($_SESSION['loginError'])) {
  ?>
  <div>
    <p class="text-center">Invalid Email/Password! Try Again!</p>
  </div>
<?php
 unset($_SESSION['loginError']); }
?>

    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


<!-- jQuery 3 -->
<?php include('../script.php'); ?> 
</body>
</html>

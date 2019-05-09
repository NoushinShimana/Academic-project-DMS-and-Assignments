<?php

//To Handle Session Variables on This Page
session_start();


//Including Database Connection From db.php file to avoid rewriting in all files
require_once("db.php");
?>
<!DOCTYPE html>
<html>
<?php include('bootstrap.php') ?>

<body>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left: 0px;">

    <section class="content-header">
      <div class="container">
        <div class="row  margin-top-50 margin-bottom-20">
          <h1 class="text-center ">Student<hr></h1>
          <div class="col-md-6 latest-job ">
            <div class="small-box bg-yellow padding-5">
              <div class="inner">
                <h3 class="text-center">student Login</h3>
              </div>
              <a href="login-student.php" class="small-box-footer">
                Register <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-md-6 latest-job ">
            <div class="small-box bg-red padding-5">
              <div class="inner">
                <h3 class="text-center">student Registration</h3>
              </div>
              <a href="register-student.php" class="small-box-footer">
                Register <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>



  <!-- /.control-sidebar -->
  

</div>
<?php include('script.php'); ?> 

</body>
</html>

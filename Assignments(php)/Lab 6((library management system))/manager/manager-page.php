<?php

session_start();

if(empty($_SESSION['id_admin'])) {
  header("Location: manager-login.php");
  exit();
}

require_once("../db.php");
?>
<!DOCTYPE html>
<html>
<?php include('../bootstrap.php') ?>

<body >


  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left: 0px;">

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="box box-solid">
              <div class="box-header with-border">
                <h3 class="box-title">Manager-page </h3>
              </div>
              <div class="box-body no-padding">
                <ul class="nav nav-pills nav-stacked">
                  <li class="active"><a href="manager-page.php"><i class="fa fa-dashboard"></i> manager (Dashboard)</a></li>
                  <li><a href="add.php"><i class="fa fa-briefcase"></i> add new book</a></li>
                  <li><a href="delete.php"><i class="fa fa-arrow-circle-o-right"></i> delete book</a></li>
                  <li><a href="update.php"><i class="fa fa-address-card-o"></i> update stock</a></li>
                  <li><a href="search.php"><i class="fa fa-arrow-circle-o-right"></i> search book</a></li>
                  <li><a href="update-password.php"><i class="fa fa-arrow-circle-o-right"></i> update password</a></li>
                </ul>
              </div>
            </div>
          </div>
        
        </div>
      </div>
    </section>

  

 <!-- /.content-wrapper -->

</div>

<!-- jQuery 3 -->
<?php include('../script.php'); ?> 
</body>
</html>

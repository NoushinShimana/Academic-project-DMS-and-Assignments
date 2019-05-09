<?php

//To Handle Session Variables on This Page
session_start();

//If user Not logged in then redirect them back to homepage. 
if(empty($_SESSION['id_admin'])) {
  header("Location: manager-page.php");
  exit();
}

require_once("../db.php");
?>
<!DOCTYPE html>
<html>

<?php include('../bootstrap.php') ?>

<body class="hold-transition skin-green sidebar-mini">


  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left: 0px;">

    <section  class="content-header">
     

          <div class="col-md-9 bg-white padding-2">
            <h2><i>add books</i></h2>
            <div class="row">
              <form method="post" action="c-add.php>
  First name:<br>
  <input type="text" name="id" >
  <br>
  Last name:<br>
  <input type="text" name="name">
  <br>
  Writer Name:<br>
  <input type="text" name="writer">
  <br>
  Ctagory:<br>
  <input type="text" name="category">
  <br>
  Quantity:<br>
  <input type="text" name="quantity">
  <br>
  <br>
  <button type="button">ADD</button>

</form>
            </div>
            
          </div>
       
    </section>



</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<?php include('../script.php'); ?> 

</body>
</html>

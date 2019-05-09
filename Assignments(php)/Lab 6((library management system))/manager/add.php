<?php

//To Handle Session Variables on This Page
session_start();

//If user Not logged in then redirect them back to homepage. 
if(empty($_SESSION['id_admin'])) {
 
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

   

  


          <div class="col-md-9 bg-white padding-2">
            <h2><i>add books</i></h2>
            <div class="row">
                 <form method="post" action="c-add.php">
                <div class="col-md-12 latest-job ">
                  <div class="form-group">
                    <input class="form-control input-lg" type="text" id="id" name="id" placeholder="bookId">
                  </div>
                  <div class="form-group">
                    <input class="form-control input-lg" id="name" name="name" placeholder="name">
                  </div>





  <div class="form-group">
                   <input class="form-control input-lg" id="writer" name="writer" placeholder="writer name">
                 
                  </div>
                  
                  <div class="form-group">
                    <input type="text" class="form-control  input-lg" id="category" name="category" placeholder="category" required="">
                  </div>
                  <div class="form-group">
                <input type="text" class="form-control  input-lg" id="quantity"  name="quantity" placeholder="quantity" required="">
                  </div>
                  
                  <div class="form-group">
                    <button type="submit" class="btn btn-flat btn-success">Add</button>
                  </div>
                </div>
             
            
                   </form>
          </div>
        </div>
       



     </div>
  



</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<?php include('../script.php'); ?> 

</body>
</html>

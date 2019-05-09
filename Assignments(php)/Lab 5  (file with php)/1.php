<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<?php
$nameErr = $subjectErr = $markErr = "";
$name = $subject = $mark = "";
?>
<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action=2.php>  

  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Subject: <input type="text" name="subject">
  <span class="error">*<?php echo $subjectErr;?></span>
  <br><br>
   Mark: <input type="text" name="mark">
  <span class="error">* <?php echo $markErr;?></span>
  <br><br>


  <input type="submit" name="submit" value="Submit">  

  </form>




</body>
</html>
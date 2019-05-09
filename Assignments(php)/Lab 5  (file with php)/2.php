<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  


<?php
// define variables and set to empty values
$nameErr = $subjectErr = $markErr = "";
$name = $subject = $mark = "";





if ($_SERVER["REQUEST_METHOD"] == "POST") {


  

  if (empty($_POST["name"])) {
    $nameErr = "name is required";
  }
  else
  {
     $name = test_input($_POST["name"]);
  }

  
 
if (!preg_match("/[a-zA-Z ]/",$name)) {
  $nameErr = "Only letters and white space allowed"; 
}
else{
   $name = test_input($_POST["name"]);
}
  if (empty($_POST["name"])) {
    $nameErr = "name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
    
  if (strlen(($_POST["name"])) < 2 || strlen(($_POST["name"])) > 15 ) {
    $nameErr = " name Must be 2-15 charachter long";
  } else {
    $name = test_input($_POST["name"]);
  }

if(preg_match('`[0-9]`',$name))
{
    $nameErr = "Numbers are not allowed";
  } else {
    $name = test_input($_POST["name"]);
  }


  if (empty($_POST["subject"])) {
    $subjectErr = "subject is required";
  } else {
    $subject = test_input($_POST["subject"]);
  }


  if (empty($_POST["mark"])) {
    $markErr = "mark is required";
  } else {
    $mark = test_input($_POST["mark"]);
  }


   if (!is_numeric(($_POST["mark"]))) {
    $markErr = "Mark must Be integer value";
  } else {
    $mark= test_input($_POST["mark"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>


<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $subject;
echo "<br>";
echo $mark;

?>
<?php
$myfile = fopen("newfile.txt", "a+") or die("Unable to open file!");
$text="$name ";
fwrite($myfile, $text);
$text="$subject ";
fwrite($myfile, $text);
$text="$mark ";
fwrite($myfile, $text);

fwrite($myfile, " ; \n");
fclose($myfile);
?>


</body>
</html>
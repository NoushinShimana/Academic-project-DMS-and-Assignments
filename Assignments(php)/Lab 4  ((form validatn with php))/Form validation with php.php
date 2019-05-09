<html>
   
   <head>
      <style>
         .error {color: #FF0000;}
		 
      </style>
	  <link type="text/css" rel="stylesheet" href="style.css"/>
   </head>
   
   <body>
        <div id="main">
      <?php
         // define variables and set to empty values
         $nameErr = $emailErr = $genderErr = $passwordErr = $courseEnrolledErr = "";
         $name = $email = $gender = $address = $dob = $password = $courseEnrolled = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
               $nameErr = "Name is required";
            }else {
               if(strlen($_POST["name"])>6&&strlen($_POST["name"])<=15)
			   {
				   $name = test_input($_POST["name"]);
			   }
			   else
			   {
				    $nameErr = "must be must be 6-15 characters long";   
			   }
			   
            }
			
			if (empty($_POST["email"])) {
               $emailErr = "Email is required";
            }else {
               $email = test_input($_POST["email"]);
               
               // check if e-mail address is well-formed
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format"; 
               }
            }
			
			
			
            
            

         if (empty($_POST["password"])) {
    $passwordErr = "password is required";
  }

  $pass=$_POST["password"];

  if( 
       
            ctype_alnum($pass) 
        && preg_match('`[A-Z]`',$pass)
        && preg_match('`[a-z]`',$pass) 
        && preg_match('`[0-9]`',$pass) 
        )
               {
                    $password = test_input($_POST["password"]);
               }
			   else
			   {
				   $passwordErr = "Password must contain an uppercase, a lowercase, a number, a special character.";
			   }
            }
            
            if (!empty($_POST["courseEnrolled"])){
               $courseEnrolled = test_input($_POST["courseEnrolled"]);
			   if(is_int($courseEnrolled) == TRUE)
               {
                $courseEnrolledErr ="Number of Course Enrolled must be an Integer value.";
               }
            }
           
            
            if (empty($_POST["gender"])) {
               $genderErr = "Gender is required";
            }else {
               $gender = test_input($_POST["gender"]);
            }
         
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      ?>
      
      <h2>PHP Form Validation</h2>
     
      <p><span class = "error">* required field.</span></p>
     
      <form method = "post" action = "<?php 
         echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         <table>
            <tr>
               <td>Name:</td>
               <td><input type = "text" name = "name">
                  <span class = "error">* <?php echo $nameErr;?></span>
               </td>
            </tr>
			<tr>
               <td>Password:</td>
               <td><input type = "password" name = "password">
                  <span class = "error">* <?php echo $passwordErr;?></span>
               </td>
            </tr>
           
            <tr>
               <td>E-mail: </td>
               <td><input type = "email" name = "email">
                  <span class = "error">* <?php echo $emailErr;?></span>
               </td>
            </tr>
           
            <tr>
               <td>Address:</td>
               <td> <input type = "text" name = "address">
                  
               </td>
            </tr>
            
            <tr>
               <td>Date of Birth:</td>
               <td> <input type = "date" name = "dob">
                  
               </td>
            </tr>
            
            <tr>
               <td>Gender:</td>
               <td>
                  <input type = "radio" name = "gender" value = "female">Female
                  <input type = "radio" name = "gender" value = "male">Male
                  <span class = "error">* <?php echo $genderErr;?></span>
               </td>
            </tr>
			<tr>
               <td>Number of Course Enrolled:</td>
               <td> <input type = "text" name = "courseEnrolled">
                  <span class = "error"><?php echo $courseEnrolledErr;?></span>
               </td>
            </tr>
				
            <td>
               <input type = "submit" name = "Register" value = "Submit"> 
            </td>
				
         </table>
			
      </form>
      
      <?php
         echo "<h2>Your given values are as:</h2>";
         echo $name;
         echo "<br>";
         
         echo $email;
         echo "<br>";
         
         echo $dob;
		 echo "<br>";
         
        
         
         echo $gender;
      ?>
	  <div>
   
   </body>
</html>
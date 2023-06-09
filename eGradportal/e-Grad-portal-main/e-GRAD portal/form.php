<?php 
include("connection.php"); 

   if(isset($_POST['register']))
   {
      $fname =  $_POST['fname'];
      $lname =  $_POST['lname'];
      $cid =  $_POST['cid'];
      $password =  $_POST['password'];
      $cpassword =  $_POST['cpassword'];
      $branch =  $_POST['branch'];
      $gender =  $_POST['gender'];
      $age =  $_POST['age'];
      $email =  $_POST['email'];
      $phone =  $_POST['phone'];
      $address =  $_POST['address'];
      $poscode =  $_POST['poscode'];
      $ts =  $_POST['ts'];
      $resume =  $_POST['resume'];
      
      
      $insertquery ="insert into  signup (fname, lname, cid, password, cpassword, branch, gender, age, email, phone, address, poscode,ts, resume)
                values('$fname','$lname','$cid','$password','$cpassword','$branch','$gender',
                        '$age',' $email','$phone','$address','$poscode','$ts','$resume');";

          
         if(mysqli_query($conn,$insertquery)){
               header("Location: http://localhost/eGradportal/e-Grad-portal-main/e-GRAD%20portal/index.php");
            }
            else{
               echo 'Error: '.mysqli_error($conn);
            }
   }
    

      ?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Registration Form</title>
   <link rel="stylesheet" href="styles.css">
   <style>
         body{
            background-image: url('https://media.istockphoto.com/id/1407662169/photo/young-buisness-woman-online-working-females-hands-typing-on-laptop-computer-and-using-digital.jpg?s=170667a&w=0&k=20&c=3IWwA66__R1C_JjdcMS7n5tcjlJO9arg0qxJHhMFYhU=');
            /* background-color:#E8A0BF; */
            background-repeat: no-repeat;
            background-size:1500px 1300px;
            
            opacity: 0.8;
         }
   </style>
   
</head>

<body>

   <div class="wrapper">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" onSubmit="return validate()">
      <div class="title">
         Registration Form
      </div>
      <div class="form">
         <span id="fname-error" style="color:rgb(248,0,0);"class="form-error"></span>
         <div class="inputfield">
            <label>First Name</label><br>
            <input type="text" class="input" name="fname" id="fname">
         </div>
         <span id="lname-error" style="color:rgb(248,0,0);"class="form-error"></span>
         <div class="inputfield">
            <label>Last Name</label>
            <input type="text" class="input" name="lname" id="lname">
         </div>
         <span id="collegeid-error" style="color:rgb(248,0,0);"class="form-error"></span>
         <div class="inputfield">
            <label>College ID</label>
            <input type="digit" class="input" name="cid" id="cid">
         </div>
         <span id="password-error" style="color:rgb(248,0,0);"class="form-error"></span>
         <div class="inputfield">
            <label>Password</label>
            <input type="password" class="input" name="password" id="password" >
         </div>
         <span id="cpassword-error" style="color:rgb(248,0,0);"class="form-error"></span>
         <div class="inputfield">
            <label>Confirm Password</label>
            <input type="password" class="input" name="cpassword" id="cpassword">
         </div>



         <div class="inputfield">
            <label>Branch</label>
            <div class="custom_select">
               <select name="branch">
                  <option value="">Select</option>
                  <option value="cse">CSE</option>
                  <option value="ece">ECE</option>
                  <option value="cst">CST</option>
                  <option value="cen">CEN</option>
                  <option value="eie">EIE</option>
                  <option value="eee">EEE</option>

               </select>
            </div>
         </div>

         <div class="inputfield">
            <label >Gender</label>
            <div class="checkbox-container">

               <label for="male">Male</label>
               <input type="radio" name="gender" value="male">


               <label for="female" class="label-space">Female</label>
               <input type="radio" name="gender" value="female" class="input-space">


               <label for="others">Others</label>
               <input type="radio" name="gender" value="others">
            </div>
         </div>



         <div class="inputfield">
            <label>Age</label>
            <input type="number" class="input" name="age">
         </div>


         <div class="inputfield">
            <label>Email Address</label>
            <input type="text" class="input" name="email">
         </div>
         <div class="inputfield">
            <label>Phone Number</label>
            <input type="text" class="input" name="phone">
         </div>
         <div class="inputfield">
            <label>Address</label>
            <textarea class="textarea" name="address"></textarea>
         </div>
         <div class="inputfield">
            <label>Postal Code</label>
            <input type="text" class="input" name="poscode">
         </div>

         <div class="inputfield">
            <label>Technical Skills</label>
            <input type="checkbox" value="c" class="input" name="ts[]">C
            <input type="checkbox" value="java" class="input" name="ts[]">Java
            <input type="checkbox" value="python" class="input" name="ts[]">Python
            <input type="checkbox" value="jsp" class="input" name="ts[]">Jsp
         </div>

         <div class="inputfield">
            <label>Resume </label>
            <input type="file" id="file" class="input" name="resume">
         </div>

         <div class="inputfield terms">
            <label class="check">
               <input type="checkbox">
               <span class="checkmark"></span>
            </label>
            <p>Agreed to terms and conditions</p>
         </div>
         <div class="inputfield">
            <input type="submit" value="Submit" class="btn" name="register">
         </div>

         <div class="inputfield">
            <input type="Reset" value="Reset" class="btn-i">
         </div>

         <div class="login-link" >
               Have an account? <a style="text-decoration:none" href="login.php">Login now</a>
         </div>

      </div>
   </form>
   </div>

   <script type="text/javaScript" src="./validation.js"></script>

</body>

</html>





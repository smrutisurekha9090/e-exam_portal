<?php
include('connection.php');
session_start();

if(isset($_POST['login'])){

   // echo 'LOGIN IS SET!!!';

   // $email = $_POST["email"];
   $cid = $_POST["cid"];
   $password = $_POST["password"];
 

   
   $query = "SELECT * FROM signup WHERE cid = '$cid' AND password = '$password'";
   $result = mysqli_query($conn,$query);
   $details = mysqli_fetch_all($result,MYSQLI_ASSOC);
   
   foreach($details as $detail){
      if($detail['cid'] === $cid && $detail['password'] === $password){
         $_SESSION["login_sess"]="1";
         $_SESSION["userloginId"] = $detail["cid"];
         header("Location: index.php");
      }
      else{
         
         // echo 'Invalid credentials';
         echo "<script>alert('Invalid credentials')</script>";
      }
   }

}
?>

<!DOCTYPE html>
<!-- Created By smruti -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login Form Design </title>
      <link rel="stylesheet" href="logi.css">
      <style>
         body{
            /* background-image: url(https://media.istockphoto.com/id/868533104/photo/paper-cubes-with-the-letter-me-too-depth-of-field.jpg?s=612x612&w=0&k=20&c=d2iIvwAEm-dqlU_btybPjlLyh4NVBkknfgFIgMpFeYs=); */
            background-image: linear-gradient(rgba(15, 8, 8, 0.75),
            rgba(38, 38, 38, 0.75)), url(https://media.istockphoto.com/id/868533104/photo/paper-cubes-with-the-letter-me-too-depth-of-field.jpg?s=612x612&w=0&k=20&c=d2iIvwAEm-dqlU_btybPjlLyh4NVBkknfgFIgMpFeYs=);
            /* background-color:#E8A0BF; */
            background-repeat: no-repeat;
            background-size:1500px 1000px;
            opacity: 0.9;
         }
      </style>
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Login Form
         </div>
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <div class="field">
               <input type="cid" id="cid" name="cid" >
               <label>cid</label>
            </div>
            <div class="field">
               <input type="password" id="password" name="password" >
               <label>Password</label>
            </div>
            <div class="content">
               <div class="checkbox">
                  <input type="checkbox" id="remember-me">
                  <label for="remember-me">Remember me</label>
               </div>
               <div class="pass-link">
                  <a href="#">Forgot password?</a>
               </div>
            </div>
            <div class="field">
               <input type="submit" value="Login" name="login">
            </div>
            <div class="signup-link">
               Not a member? <a href="form.php">Signup now</a>
            </div>
         </form>
      </div>
   </body>
</html>












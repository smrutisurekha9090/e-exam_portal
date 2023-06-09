<?php  

include("../connection.php"); 

session_start();

if(!isset($_SESSION["login_sess"]))
{
    header('location: ../login.php');
}
else {
    
    $cid=$_SESSION["userloginId"];
    $findresult = mysqli_query($conn,"SELECT * FROM signup WHERE cid = '$cid' ");

    while($res = $findresult->fetch_assoc())
{   
      $fname=  $res['fname'];
      $lname=  $res['lname'];
      $cid=  $res['cid'];
      $branch=  $res['branch'];
      $gender=  $res['gender'];
      $age=  $res['age'];
      $email=  $res['email'];
      $phone=  $res['phone'];
      $address=  $res['address'];
      $poscode=  $res['poscode'];
      $ts=  $res['ts'];
    //   $image= $res['image'];
}

}
?> 



<!DOCTYPE html>
<html>
<head>
    <title> My Account - Smruti Surekha</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="syle.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            
        </div>
        <div class="col-sm-7">
    <div class="login_form">
    <img src="../mylogo.png" alt="smruti " class="logo img-fluid"> <br> 
     
            <div class="row">
            <div class="col"></div>
            <div class="col-6"> 
             <?php if(isset($_GET['profile_updated'])) 
      { ?>
    <div class="successmsg">Profile saved ..</div>
      <?php } ?>
        <?php if(isset($_GET['password_updated'])) 
      { ?>
    <div class="successmsg">Password has been changed...</div>
      <?php } ?>
            <center>

            <?php if($image==NULL)
                {
                 echo '<img src="https://technosmarter.com/assets/icon/user.png">';
                }else{ 
                  echo '<img src="images/'.$image.'" style="height:100px;width:auto;border-radius:60%;">';}?> 

  <p> Welcome! <span style="color:#33CC00"><?php echo $cid; ?></span> </p>
  </center>
           </div>
            <div class="col"><p><a href="../quiz/logout.php"><span style="color:red;">Logout</span> </a></p>
         </div>
          </div>

          <table class="table">
          <tr>
              <th>First Name </th>
              <td><?php echo $fname; ?></td>
          </tr>
          <tr>
              <th>Last Name </th>
              <td><?php echo $lname; ?></td>
          </tr>
          <tr>
              <th>College Id </th>
              <td><?php echo $cid; ?></td>
          </tr>
           <tr>
              <th>Email </th>
              <td><?php echo $email; ?></td>
          </tr>
          <tr>
              <th>Branch </th>
              <td><?php echo $branch; ?></td>
          </tr>
          <tr>
              <th>Gender </th>
              <td><?php echo $gender; ?></td>
          </tr>
          <tr>
              <th>Age </th>
              <td><?php echo  $age; ?></td>
          </tr>
          <tr>
              <th>Phone Number</th>
              <td><?php echo $phone; ?></td>
          </tr>
          <tr>
              <th>Address</th>
              <td><?php echo $address; ?></td>
          </tr>
          <tr>
              <th>Postal Code</th>
              <td><?php echo $poscode; ?></td>
          </tr>
          <tr>
              <th>Technical Skill</th>
              <td><?php echo $ts; ?></td>
          </tr>

          </table><br><br>
          
           <div class="row">
            <div class="col-sm-2">
            </div>
             <div class="col-sm-4">
                <a href="#"><button type="button" class="btn btn-primary">Edit Profile</button></a>
            </div>
            <div class="col-sm-6">
         <a href="#"><button type="button" class="btn btn-warning">Change Password</button></a>
            </div>
           </div>
        </div>
        <div class="col-sm-3">
        </div>
    </div>
</div> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
</html>
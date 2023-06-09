<?php  

include("../connection.php"); 
session_start();

// if(!isset($_SESSION['userloginId']))
// {
//         header('location: ../e-exam/day1.php');
// }

$cid=$_SESSION["userloginId"];
$findresult = mysqli_query($conn, "SELECT * FROM signup WHERE cid = '$cid'");
if($res = $findresult->fetch_assoc())
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
      $image= $res['image'];
      $oldcid=  $res['cid'];
}
?> 


<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="syle.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6">
           
     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype='multipart/form-data'>
  <div class="login_form">

<img src="../lloggo.png" alt="smruti" class="logo img-fluid"> <br> 
<?php 
if(isset($_POST['update_profile'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];  
$cid=$_POST['cid']; 
$folder='images/';
$file = $_FILES['image']['tmp_name'];  
$file_name = $_FILES['image']['name']; 

//string converted into array - explode()
$file_name_array = explode(".", $file_name); 
$extension = end($file_name_array);
$new_image_name ='profile_'.rand() . '.' . $extension;
if ($_FILES["image"]["size"] >1000000) {
   $error[] = 'Sorry, your image is too large. Upload less than 1 MB in size .';
 
}
if($file != "")
{
if($extension!= "jpg" && $extension!= "png" && $extension!= "jpeg"
&& $extension!= "gif" && $extension!= "PNG" && $extension!= "JPG" && $extension!= "GIF" && $extension!= "JPEG") {
    
   $error[] = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed';   
}
}

$sql="SELECT * from signup where cid='$cid'";
    $res=mysqli_query($conn,$sql);
    if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);

    if($oldcid!=$cid){
    if($cid==$row['cid'])
     {
           $error[] ='College Id alredy Exists. Create Unique Id';
          } 
   }
}



if(!isset($error)){ 
    if($file!= "")
        {
            $stmt = mysqli_query($conn,"SELECT image FROM  signup WHERE email='$email'");
            $row = mysqli_fetch_array($stmt); 
            $deleteimage=$row['image'];
            unlink($folder.$deleteimage);
            move_uploaded_file($file, $folder . $new_image_name);   
            mysqli_query($conn,"UPDATE signup SET image='$new_image_name' WHERE email='$email'");
        }
           $result = mysqli_query($conn,"UPDATE signup SET fname='$fname',lname='$lname',cid='$cid' WHERE email='$email'");
           if($result)
           {
            header("location: account.php?profile_updated=1");
           }
           else 
           {
            $error[]='Something went wrong';
           }

    }


}

if(isset($error)){ 
foreach($error as $error){ 
  echo '<p class="errmsg">'.$error.'</p>'; 
    }
}


?> 

<form method="post" enctype='multipart/form-data' action="">
          <div class="row">
            <div class="col"></div>
           <div class="col-6"> 
            <center>
            <?php if($image==NULL)
                {
                 echo '<img src="https://technosmarter.com/assets/icon/user.png">';
                } else { echo '<img src="images/'.$image.'" style="height:80px;width:auto;border-radius:50%;">';}?> 
                <div class="form-group">

                <label>Change Image &#8595;</label>
                <input class="form-control" type="file" name="image" style="width:100%;" >
            </div>

  </center>
           </div>
            <div class="col"><p><a href="../quiz/logout.php"><span style="color:red;">Logout</span> </a></p>
         </div>
          </div>

          <div class="form-group">
          <div class="row"> 
            <div class="col-3">
                <label>First Name</label>
            </div>
             <div class="col">
                <input type="text" name="fname" value="<?php echo $fname;?>" class="form-control">
            </div>
          </div>
      </div>
      <div class="form-group">
 <div class="row"> 
            <div class="col-3">
                <label>Last Name</label>
            </div>
             <div class="col">
                <input type="text" name="lname" value="<?php echo $lname;?>" class="form-control">
            </div>
          </div>
      </div>
      <div class="form-group">
 <div class="row"> 
            <div class="col-3">
                <label>College Id</label>
            </div>
             <div class="col">
                <input type="text" name="collegeid" value="<?php echo $cid;?>" class="form-control">
            </div>
          </div>
      </div>
           <div class="row">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
<button  class="btn btn-success" name="update_profile">Save Profile</button>
            </div>
           </div>
       </form>
        </div>
        <div class="col-sm-3">
        </div>
    </div>
</div> 
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</html>

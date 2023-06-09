<?php

session_start();

// if(!isset($_SESSION['userloginId'])){
// header('location: ../login.php');
// }
$con =mysqli_connect('localhost' ,'root');

mysqli_select_db($con ,'quizdbase');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="quiz.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
<div class="timer"> <i class="fa fa-clock-o"></i>
  <span  id="countdown"> </span>
</div>
    <!-- <p  style="margin" id="cutdown">10:00</p> -->
    <div class="container">

    <h1 class="text-center"> E-exam Quizmania </h1>

    <h4 style="color:green;" class="text-center">Welcome <?php echo $_SESSION['userloginId']; ?> </h4> <br>

<div class="col-lg-8 m-auto d-block">
        
    <div class="card">
        <h3 class="text-center  card-header">welcome <?php echo $_SESSION['userloginId']; ?>, you have to select only one out of 4.Best of luck:) </h3>
    </div>
    <br>
    <form action="check.php" method="post">

    <?php

    for($i=1 ; $i< 6; $i++){

    $q ="select * from questions where qid= $i";
    $query =mysqli_query($con,$q);

    while($rows = mysqli_fetch_array($query)) {
    ?>

    <div class="card">
        <h4 class="card-header"> <?php echo $rows['question'] ?> </h4>
            <?php
                 $q ="select * from answers where ans_id= $i";
                 $query =mysqli_query($con,$q);
             
                 while($rows = mysqli_fetch_array($query)) {
                 ?>

                 <div class="card-body">
                    <input type="radio" name="quizcheck[<?php echo $rows['ans_id'];?>]" value="<?php echo $rows['aid'] ;?>"> 
                    <?php echo  $rows['answer'];?>
                 </div>
        
    <?php
    }
    }
    }
    ?>

    <input type="submit" name="submit" value="submit" class="btn btn-success m-auto d-block">


    </form>
    </div>
</div>
        <br><br>

        <div class="m-auto d-block">
        <a href="logout.php" class="btn btn-primary ">LOGOUT </a>
        </div>
        <br>
        <div>
            <h5 class="text-center"> @2023 samTech </h5>
        </div><br><br>

       

    </div>
    <!-- <a href="logout.php" class="btn btn-primary ">LOGOUT </a> -->



    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<?php
session_start();
//if(!isset($_SESSION['userloginId'])){
//header('location: ../login.php');
//}
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>

    <style type="text/css">
        .animateuse{
            animation: leelaanimate 0.5s infinite;
        }
    @keyframes leelaanimate {
        0% {color:red},
        10%{color:yellow},
        20%{color:blue},
        40%{color:green},
        50%{color:pink},
        60%{color:orange},
        80%{color:black},
        100%{color:brown}
    }
    </style>

</head>
<body>

<div class="container text-center">
    <br><br>
    <h1 class="text-center text-success  text-uppercase  animateuse"> E-examination Quiz </h1>
    <br><br><br><br>

    <table class="table text-center table-bordered table-hover">
        <tr>
            <th colspan="2" class="bg-dark"> <h1 class="text-white">Results </h1></th>
        </tr>
        <tr>
            <td>
                Questions Attempted
            </td>

        <?php
            $result=0;
            if(isset($_POST['submit'])){
            if(!empty($_POST['quizcheck'])){

            $count = count($_POST['quizcheck']);
            ?>

        <td>
        <?php
        echo "Out of 5 , you have selected  ". $count . " options."; ?>
        </td>

        <?php
            
             $selected =$_POST['quizcheck'];
            //  print_r($selected);
     
             $q= " select * from questions ";
             $query= mysqli_query($con, $q);
             $i = 1;
             while($rows =mysqli_fetch_array($query)) {
                 $checked = $rows['ans_id'] == $selected[$i];
     
                 if($checked)
                 {
                    $result++;
                 }else{

                 }
                $i++;
             }
             ?>

        <tr>
            <td>
                Your total score 
            </td>
            <td colspan="2">


            <?php
                echo " Your total score is ". $result.".";
            }
            else{
                echo"<b>please Select Atleast One Option .</b>";
            }
        }
        ?>
          </td>
        </tr>

        <?php
        $name= $_SESSION['userloginId'];
        $finalresult ="insert into user(username,totalques ,answerscorrect) values ('$name','5','$result')";
        $queryresult =mysqli_query($con, $finalresult);

    ?>
    </table>
    <a href="logout.php" class="btn btn-success">LOGOUT </a>
    </div>
    
</body>
</html>








<?php
if(isset($_POST['submit'])){
    $file_name =$_FILES['my-file']['name'];
    $file_tmp_name= $_FILES['my-file']['tmp_name'];
    if(move_uploaded_file($file_tmp_name,"../e-repo/uploads/" . $file_name)){
        echo "File uploaded successfully.";
    }else{
        echo "Error... plz try again";
    }
}
?>


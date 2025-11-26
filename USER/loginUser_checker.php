<?php
include_once("../admin/dbname.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $enroll = $_POST["enroll"];
    $Password = $_POST["password"];
    
    $sql_check="SELECT * FROM `Student_register` WHERE `enroll`='$enroll'";
    $sql_run =mysqli_query($conn,$sql_check);
    $sql_runs_check= mysqli_num_rows($sql_run);
if($sql_runs_check==1){

    $sql ="SELECT * FROM `student_register` WHERE `enroll`='$enroll'  AND `password`='$Password'";
    $sql_chec= mysqli_query($conn,$sql);
    $sql_res= mysqli_num_rows($sql_chec);
    if($sql_res){
        header("Location: exam_section.php");
    }
    else{
        header("Location: loginUser.php?msg=invalid Password:");
    }
}
else{
    header("Location: loginUser.php?msg=You have no account?");
}

}



?>
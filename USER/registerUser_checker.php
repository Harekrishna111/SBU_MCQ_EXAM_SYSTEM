<?php
include_once("../admin/dbname.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
$St_name=$_POST["username"];
$st_Enroll=$_POST["enroll"];
$st_course=$_POST["course"];
$St_semester=$_POST["semester"];
$St_section=$_POST["section"];
$St_Gender=$_POST["gender"];
$St_password=md5($_POST["password"]);

$sql_check ="SELECT * FROM `student_register` WHERE `enroll`='$st_Enroll'";
$sql_res=mysqli_query($conn,$sql_check);
$sql_fin = mysqli_num_rows($sql_res);
if($sql_fin==0){
 $sql ="INSERT INTO `student_register`(`Sno`, `name`, `enroll`, `course`, `Semester`, `section`, `Gender`, `password`, `status`) VALUES
 (NULL,'$St_name','$st_Enroll','$st_course','$St_semester','$St_section','$St_Gender','$St_password','1')";
 $sql_res=mysqli_query($conn,$sql);
 if($sql_res){
     header("Location: loginUser.php");
    
     
   
}
else{
 header("Location: registerUser.php?msg=Already have an account?");
}

}
}

?>
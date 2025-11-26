<?php
include_once("dbname.php");
$TeacherName =$_POST["Teacher_nam"];
$ClassName =$_POST["classname"];
$Subject =$_POST["subject"];
$Section =$_POST["section"];
$Semster =$_POST["semesters"];
$Exam_date =$_POST["Dates"];
     

$sql_ru_checker = "SELECT * FROM `class_create` WHERE `Subject`='$Subject'";
$sql_run=mysqli_query($conn,$sql_ru_checker);
$sql_run = mysqli_num_rows($sql_run);
if($sql_run==0){

    $sql ="INSERT INTO `class_create`(`Sno`,`teachers_nam`, `Course`, `Subject`, `Section`, `Semester`, `Exam Date`, `status`) VALUES
 (NULL,'$TeacherName','$ClassName','$Subject','$Section','$Semster','$Exam_date','1')";


$sql_checker = mysqli_query($conn,$sql);
if($sql_checker){
    header("Location: create_class.php");
    
}
else{
    echo 'insert error';
}

}
else{
    header("Location: create_class.php?msg= Already uploaded for this subject");
}

?>
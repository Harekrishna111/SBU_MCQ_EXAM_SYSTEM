<?php
include_once("dbname.php");
$ClassName =$_POST["classname"];
$Subject =$_POST["subject"];
$Section =$_POST["section"];
$Semster =$_POST["semesters"];
$Exam_date =$_POST["Dates"];
     


$sql ="INSERT INTO `class_create`(`Sno`, `Course`, `Subject`, `Section`, `Semester`, `Exam Date`, `status`) VALUES
 (NULL,'$ClassName','$Subject','$Section','$Semster','$Exam_date','1')";


$sql_checker = mysqli_query($conn,$sql);
if($sql_checker){
 header(' ');

}
else{
 echo 'insert error';
}


?>
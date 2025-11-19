<?php
include_once("dbname.php");
$ClassName =$_POST["classname"];
$Subject =$_POST["subject"];
$Section =$_POST["section"];
$Semster =$_POST["semesters"];
$Teacher_name =$_POST["teacher"];

$sql ="INSERT INTO `create_class`(`Sno`, `class_name`, `subject`, `section`,`semester`, `teachers_name`, `status`) 
VALUES (NULL,'$ClassName','$Subject','$Section','$Semster','$Teacher_name','1')";
$sql_checker = mysqli_query($conn,$sql);
if($sql_checker){
echo 'insert sucessfully';
}
else{
 echo 'insert error';
}


?>
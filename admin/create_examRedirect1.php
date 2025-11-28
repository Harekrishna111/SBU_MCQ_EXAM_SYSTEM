<?php
include_once("dbname.php");
$sno = $_GET["start"];

$sql = "UPDATE `class_create` SET `status`='0' WHERE `Sno` = $sno";
$run = mysqli_query($conn,$sql);
if($run){
    header("Location: Exam_Start.php");
}


?>
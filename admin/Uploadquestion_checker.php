<?php
include_once("dbname.php");
$classs= $_POST["sss"];
$Question = $_POST["Question"];
$opt_1 = $_POST["opt_1"];
$opt_2 = $_POST["opt_2"];
$opt_3 = $_POST["opt_3"];
$opt_4= $_POST["opt_4"];
$correct_op= $_POST["Correct_op"];

$sql="INSERT INTO `upload_question`(`Sno`, `class_no`, `Question`, `optionA`, `optionB`, `optionC`, `optionD`, `correct_ans`, `status`) VALUES
 (NULL,'$classs','$Question','$opt_1','$opt_2','$opt_3 ','$opt_4','$correct_op','1')";
$res = mysqli_query($conn,$sql);
if($res){


    // echo 'insert sucessfully';
    header("Location: Uploadquestion.php?classes=". $classs." && msg=Sucessfully Uploaded✅");
     
}
else{
    echo 'insert not sucessfully';
    // header("Location: Uploadquestion.php?msg= Uploaded Faild!!❌");
}
?>
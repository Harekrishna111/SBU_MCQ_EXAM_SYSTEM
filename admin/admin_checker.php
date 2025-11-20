<?php
include_once("dbname.php");
$ADmin =$_POST["names"];
$password =md5($_POST["passwords"]);

$sql_checker="SELECT * FROM `adacc` WHERE `FullName`='$ADmin'";
$sql_run=mysqli_query($conn,$sql_checker);
$sql_veri =mysqli_num_rows($sql_run);
if($sql_veri==1){
$sql="SELECT * FROM `adacc` WHERE `FullName`='$ADmin' AND `password`='$password'";
 $sql_count =mysqli_query($conn,$sql);
 $sql_res =mysqli_num_rows($sql_count);

if($sql_res){
    header("Location: create_class.php");
}

else{
echo 'password invalid';
}






}
else{
    echo 'user does not exist';
}


?>
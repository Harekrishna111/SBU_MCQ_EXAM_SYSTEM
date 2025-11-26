<?php
include_once("dbname.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
$fullname= $_POST["fullname"];
$Eamil= $_POST["email"];
$N_password=  md5($_POST["password"]);
$NC_password= md5($_POST["confirm"]);


$sql_checker="SELECT * FROM `adacc` WHERE `email`='$Eamil'";
$sql_checkrun = mysqli_query($conn,$sql_checker);
$sql_res = mysqli_num_rows($sql_checkrun);
if($sql_res==0){    
    
    if($N_password==$NC_password){
        $sql_checker="INSERT INTO `adacc`(`Sno`, `FullName`, `email`, `password`, `C_password`, `status`) 
VALUES (NULL,'$fullname','$Eamil','$N_password','$NC_password','1')";
$sql_run= mysqli_query($conn,$sql_checker);
if($sql_checker){
    echo 'insert sucessfully';
    header("Location: admin_login.php");
}


}






else{
    // password error
    header("Location: account_create.php?error=Password does't match!");
    
}

}
else{
    //email error
    header("Location: account_create.php?error= Already have an account");
    
}
}

?>
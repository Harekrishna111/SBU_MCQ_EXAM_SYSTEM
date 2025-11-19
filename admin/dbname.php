<?php
$servername="Localhost";
$username="root";
$password="";
$dbname="examsystem";

$conn =mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
    echo 'DATABase faild';
}




?>
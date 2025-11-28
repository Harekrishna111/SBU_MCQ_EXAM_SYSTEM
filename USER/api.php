<?php
include_once("../admin/dbname.php");

$sql = "SELECT * FROM `student_register`";
$runner = mysqli_query($conn, $sql);

$students = [];

while ($row = mysqli_fetch_assoc($runner)) {
    $students[] = $row;
}

echo json_encode($students);
?>

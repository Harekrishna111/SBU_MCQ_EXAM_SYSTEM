<?php
session_start();
include_once("../admin/dbname.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $enroll = $_POST["enroll"];
    $Password = md5($_POST["password"]);

    // Check enroll exists
    $sql_check = "SELECT * FROM student_register WHERE enroll='$enroll'";
    $sql_run = mysqli_query($conn, $sql_check);

    if (mysqli_num_rows($sql_run) == 1) {

        // Check password
        $sql = "SELECT * FROM student_register WHERE enroll='$enroll' AND password='$Password'";
        $sql_chec = mysqli_query($conn, $sql);

        if (mysqli_num_rows($sql_chec) == 1) {

            // Fetch name
            $row = mysqli_fetch_assoc($sql_chec);
            $Student_name = $row["name"];

            // Set Sessions
            $_SESSION["studentName"] = $Student_name;
            $_SESSION["userEnroll"] = $row["enroll"];
            $_SESSION["userSection"] = $row["section"];

            // Redirect
            header("Location: exam_section.php");
            exit;
        } 
        else {
            header("Location: loginUser.php?msg=Invalid Password");
            exit;
        }

    } else {
        header("Location: loginUser.php?msg=You have no account");
        exit;
    }
}
?>

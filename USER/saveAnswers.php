<?php
include_once("../admin/dbname.php");

$data = json_decode(file_get_contents("php://input"), true);


$class_no = $data["class_no"];
$answers = $data["answers"];
$enroll= $data["student_id"];

foreach ($answers as $a) {

    $qId = $a["question_id"];
    $selected = $a["selected"];
    $correct = $a["correct"];
    

    $sql = "INSERT INTO submit (id,student_id, class_no, question_id, selected_answer, correct_answer)
            VALUES (NULL,'$enroll', '$class_no', '$qId', '$selected', '$correct')";

    mysqli_query($conn, $sql);
}

echo json_encode(["status" => "success"]);
?>

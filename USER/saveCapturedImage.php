<?php
$data = json_decode(file_get_contents("php://input"), true);

$student = $data["student_id"];
$class = $data["class_id"];
$image = $data["image"];

$image = str_replace("data:image/png;base64,", "", $image);
$image = base64_decode($image);

$filename = "captures/".$student."_".time().".png";
file_put_contents($filename, $image);

echo json_encode(["status" => "saved", "file" => $filename]);
?>



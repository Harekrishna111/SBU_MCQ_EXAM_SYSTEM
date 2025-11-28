<?php
include_once("../admin/dbname.php");

// Fetch unique student results (group by student + class)
$sql = "
    SELECT 
        student_id,
        class_no,
        SUM(CASE WHEN selected_answer = correct_answer THEN 1 ELSE 0 END) AS marks,
        COUNT(question_id) AS total_questions,
        submit_time
    FROM submit
    GROUP BY student_id, class_no
    ORDER BY student_id ASC
";

$result = mysqli_query($conn, $sql);

// Fetch class details for subject, section
$classData = [];
$classQuery = mysqli_query($conn, "SELECT * FROM class_create");
while ($c = mysqli_fetch_assoc($classQuery)) {
    $classData[$c["Sno"]] = $c; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>All Student Results</title>

  <style>
    body {
      font-family: "Poppins", sans-serif;
      background: linear-gradient(135deg, #74ABE2, #5563DE);
      margin: 0;
      padding: 0;
      min-height: 100vh;
    }
    .navbar {
      color: white;
      padding: 2px 40px;
      font-size: 14px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: #1565c0;
    }
    h2{
      color: white;
    }
    .main_con{

      display: flex;
      justify-content: center;
      align-items: flex-start;
    }
      
    .container {
      background: #fff;
      margin-top: 40px;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
      width: 90%;
      max-width: 900px;
    }

    h3 {
      text-align: center;
      color: #004aad;
      margin-bottom: 25px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      font-size: 15px;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 10px;
      text-align: center;
    }

    th {
      background-color: #004aad;
      color: white;
    }

    tr:nth-child(even) { background-color: #f2f2f2; }
    tr:hover { background-color: #e6f0ff; }

    .status-pass {
      color: green;
      font-weight: bold;
    }
    .status-fail {
      color: red;
      font-weight: bold;
    }

    .link {
      text-align: center;
      margin-top: 20px;
    }
    .link a {
      color: #004aad;
      text-decoration: none;
      font-weight: 600;
    }
  </style>
</head>

<body>
  <div class="navbar">
      <h2>MCQ Exam System</h2>
      <span id="username"></span>
  </div>
  <div class="main_con">

    <div class="container">
      <h3>All Students Result Record</h3>

    <table>
        <thead>
            <tr>
                <th>Enrollment no.</th>
                
                <th>Course</th>
                <th>Subject</th>
                <th>Section</th>
                <th>Marks</th>
                <th>Status</th>
                <th>Submit Time</th>
            </tr>
        </thead>
        
        <tbody>
          <?php
        while ($row = mysqli_fetch_assoc($result)) {

            $classId = $row["class_no"];
            $class = $classData[$classId];

            $marks = $row["marks"];
            $total = $row["total_questions"];

            $status = ($marks >= ($total / 2)) ? "Pass" : "Fail";
            $statusClass = ($status == "Pass") ? "status-pass" : "status-fail";

            echo "<tr>
                <td>{$row["student_id"]}</td>
               
                <td>{$class["Course"]}</td>
                <td>{$class["Subject"]}</td>
                <td>{$class["Section"]}</td>
                <td>{$marks} / {$total}</td>
                <td class='{$statusClass}'>$status</td>
                <td>{$row["submit_time"]}</td>
                </tr>";
              }
              ?>
        </tbody>
      </table>
      
      <div class="link">
        🔙 <a href="Exam_start.php">Back to Teacher Dashboard</a>
      </div>
    </div>
    
  </div>
</body>
</html>

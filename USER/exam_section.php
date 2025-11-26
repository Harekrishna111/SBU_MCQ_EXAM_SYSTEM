<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>MCQ Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #f2f4f8;
            /* display: flex; */
            height: 100vh;
        }

        .sidebar {
            width: 250px;
            background: #2d3e50;
            padding: 20px;
            color: #fff;
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
        

        .sidebar h3 {
            margin-top: 0;
            margin-bottom: 15px;
            font-size: 20px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            background: #3e5268;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s;
        }
       a{
        text-decoration:none;
        }

        .sidebar ul li:hover {
            background: #4a6686;
        }


        .main-content {
            flex: 1;
            padding: 25px;
        }

        .user-box {
            background: #fff;
            padding: 18px;
            border-radius: 10px;
            font-size: 18px;
            width: 260px;
            margin-left: auto;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        /* Exams Section */
        .exam-section {
            margin-top: 30px;
        }

        .exam-section h2 {
            margin-bottom: 10px;
        }

        .exam-list {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .exam-box {
            background: #fff;
            width: 260px;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
            transition: 0.3s;
        }

        .exam-box:hover {
            transform: translateY(-5px);
        }

        .exam-title {
            font-weight: 600;
            font-size: 18px;
            margin-bottom: 5px;
        }

      button {
      width: 30%;
      margin-top: 20px;
      padding: 8px;
      border: none;
      border-radius: 8px;
      background-color: #717deeff;
      color: #fff;
      font-size: 7px;
      transition: 0.3s;
      cursor: pointer;
    }
    .ah{
        text-decoration:none;
        font-size:12px;
        color: white;
    }



    button:hover {
      background-color: #3542b5;
    }

        .exam-info {
            font-size: 14px;
            color: #555;
            line-height: 1.5;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <h2>MCQ Exam System</h2>
        <span id="username"></span>
    </div>

    <div style="display: flex;">

        <div class="sidebar">
            <h3>Subjects</h3>
            <ul>
                <li>Theory of computation</li>
                <li>Data Mining</li>
                <li>Computer Graphics</li>
                <li>IT & Web Design</li>
                <li>English</li>

            </ul>
        </div>


        <div class="main-content">

            <div class="user-box">
                Welcome, <b>John Doe</b>
            </div>

            <div class="exam-section">
                <h2>Current Exams</h2>
                <div class="exam-list">

                    <?php
include_once("../admin/dbname.php");

$sql = "SELECT * FROM `class_create`";
$result = mysqli_query($conn, $sql);

// if(!$result){
//     die("Query Failed: " . mysqli_error($conn));
// }

while($rows = mysqli_fetch_assoc($result)){
            
               echo '<div class="exam-box">
                        <div class="exam-title">'.$rows['Subject'].'</div>
                        <div class="exam-info">
                            <p>📅 Date: '.$rows['Exam Date'].'</p>
                            <spam>👨‍🏫 Teacher: '.ucwords($_SESSION["username"]).' </spam><br>
                             <button><a class ="ah" href="examPage.php?classes='.$rows['Sno'].'">Exam Start</a></button>
                        </div>
                    </div>';

                }

                ?>

                 </div>
            </div>

        </div>
    </div>

</body>

</html>
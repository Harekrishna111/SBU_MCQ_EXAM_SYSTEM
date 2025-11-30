<?php
include_once("dbname.php");


?>
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
         header {
            background-color: #004aad;
            color: white;
            /* padding: 15px 10px; */

            width: 100%;
            display: flex;
            position:fixed;
            z-index: 100;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
          }
          
          header h1 {
            font-size: 24px;
            letter-spacing: 1px;
          }
          
          nav a {
            color: white;
            padding: 15px 10px;
            text-decoration: none;
            margin: 0 15px;
            font-family: sans-serif;
            transition: 0.3s;
            /* margin-right:70px; */
        }

        nav a:hover {
            color: #ffd700;
        }

        .BTS {
            margin-right: -6px;
            width: 64px;
            
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

        a {
            text-decoration: none;
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
        .exam-boxse{
            width: 290px;
            padding: 15px;
            background: #fff;
             border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
            transition: 0.3s;
            
        }
          .exam-boxse:hover {
            transform: translateY(-5px);
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
            width: 290px;
            padding: 15px;
            /* display:flex; */
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
            transition: 0.3s;
        }

        .exam-box:hover {
            transform: translateY(-5px);
        }

        .exam-title{
            font-weight: 600;
            font-size: 18px;
            text-align: end;
            display: flex;
            justify-content:space-between;
            margin-bottom: 5px;
        }

        button{
            width: 30%;
            padding: 8px;
            border: none;
            border-radius: 8px;
            background-color: #23c038ff;
            color: #fff;
            font-size: 7px;
            transition: 0.3s;
            cursor: pointer;
        }
         button , .BTS {
            width: 30%;
            padding: 8px;
            border: none;
             margin-right: -6px;
            width: 64px;
             border-radius: 8px;
            background-color: #c05723ff;
            color: #fff;
            font-size: 7px;
            transition: 0.3s;
            cursor: pointer;
        }
        .BTS{
            background-color: red !important;
        }
      

        .ah {
            text-decoration: none;
            font-size: 12px;
            color: white;
        }
        .spam{
     color: #055d1bff;
        }



        button:hover {
            background-color: #3542b5;
        }

        .exam-info {
            font-size: 14px;
            color: #555;
            /* display:flex; */
            line-height: 2.1;
        }
        .exam-boxs{
            margin-bottom:30px;
        }
    </style>
</head>

<body>
        <header>
        <h1>College MCQ Exam</h1>
        <nav>
            <a href="create_class.php">Create Class</a>
            <a href="Exam_Start.php">Exam Start</a>
            <a href="result.php">Result</a>
            <a href="Logout.php"><button style="margin-Right:20px; font-size:13px" class="BTS">Logout</button></a>
            <!-- <a href="#">Contact</a> -->
            <!-- <a href="#">Contact</a> -->
             </nav>
</header> <br><br><br>

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
                Welcome,
                <?php echo ucwords($_SESSION["username"]);?></b>
            </div>

            <div class="exam-section">
                <h2>Current Exams</h2>
                <h4 Style="background-color:lightBlue; padding:4px";>BCA</h4>
                <div class="exam-list">

                    <?php
      include_once("dbname.php");
      $sql= "SELECT * FROM `class_create`";
      $result =mysqli_query($conn,$sql);
      while($rows = mysqli_fetch_assoc($result)){


    if(ucwords($rows["Course"]) == "BCA" || strtolower($rows["Course"]) == "bca"){
         if ($rows["status"] == 1) {
                $btn = "<button><a class='ah' href='create_examRedirect1.php?start=".$rows["Sno"]."'>Started...</a></button>";
            } else {
                $btn = "<button><a class='ah' href='create_examRedirect.php?start=".$rows["Sno"]."'>Start Exam </a></button>";
            }
        echo "<div class='exam-box'>
        <div class='exam-title'>
        
        <spam>Sem: ".$rows["Semester"]." </spam><br>
        <spam>Sec: ".$rows["Section"]." </spam><br>
        </div>
        <div class='exam-info'>
        <spam>👨‍🏫<b>Subject</b>: ".$rows["Subject"]." </spam><br>
        <spam>👨‍🏫<b>Preoid</b>: ".$rows["peroid"]."  </spam><br>
        <p>📅".$rows["Exam Date"]." </p>
        </div>
        ".$btn."
        </div>";
    }

  
}
?>


                </div>
            </div>


             <div class="exam-section">
                
                <h4 Style="background-color:lightBlue; padding:4px";>B.TECH</h4>
                
                    <?php
      include_once("dbname.php");
      $sql= "SELECT * FROM `class_create`";
      $result =mysqli_query($conn,$sql);
      while($rows = mysqli_fetch_assoc($result)){


    if(ucwords($rows["Course"]) == "B.TECH" || strtolower($rows["Course"]) == "b.tech"){
         if ($rows["status"] == 1) {
                $btn1 = "<button><a class='ah' href='create_examRedirect1.php?start=".$rows["Sno"]."'>Started...</a></button>";
            } else {
                $btn1 = "<button><a class='ah' href='create_examRedirect.php?start=".$rows["Sno"]."'>Start Exam </a></button>";
            }

        echo "<div class='exam-boxse'>
        <div class='exam-title'>
            <span>Sem: ".$rows["Semester"]."</span><br>
            <span>👨‍🏫".$rows["Section"]." </span><br>
        </div>
        <div class='exam-info'>
            <span>👨‍🏫<b>Subject</b> ".$rows["Subject"]."</span><br>
            <span>👨‍🏫<b>Preoid</b> ".$rows["peroid"]."</span><br>
            <p>📅 ".$rows["Exam Date"]."</p>
        </div>
        ".$btn1."
    </div>
</div>";
}
    }
?>

        </div>
    </div>

</body>

</html>
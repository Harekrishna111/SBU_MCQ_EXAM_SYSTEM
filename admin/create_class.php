<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Class & View All Classes</title>
  <style>
    body {
      font-family: "Poppins", sans-serif;
      background: linear-gradient(135deg, #74ABE2, #5563DE);
      margin: 0;
      padding: 0;
      height: 100vh;
      color: #333;
    }

    /* Left Section */
    .left-section {
      flex: 1;
      background: #ffffff;
      margin: 40px 20px 40px 40px;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    h2 {
      text-align: center;
      color: #004aad;
      margin-bottom: 20px;
    }

    label {
      font-family: MATH;
      font-weight: 600;
      display: block;
      margin-top: 10px;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border-radius: 8px;
      border: 1px solid #ccc;
      outline: none;
      transition: 0.3s;
    }

    input:focus {
      border-color: #5563DE;
      box-shadow: 0 0 5px #5563DE;
    }

    button {
      width: 100%;
      margin-top: 20px;
      padding: 10px;
      border: none;
      border-radius: 8px;
      background-color: #5563DE;
      color: #fff;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s;
    }

    button:hover {
      background-color: #3542b5;
    }

    .message {
      text-align: center;
      margin-top: 10px;
      font-weight: bold;
    }

    /* Right Section */
    .right-section {
      flex: 1;
      background: #ffffff;
      margin: 40px 40px 40px 50px;
      padding: 30px;
      display: flex;
      border-radius: 15px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
      overflow-y: auto;
    }

    .class-container {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
      gap: 20px;
    }

    .class-card {
      background: linear-gradient(135deg, #e0e7ff, #c7d2fe);
      border-radius: 12px;
      padding: 15px;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
      transition: 0.3s;
    }

    .class-card:hover {
      transform: scale(1.05);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }

    .class-card h3 {
      color: #1e3a8a;
      margin-bottom: 8px;
    }

    .class-card p {
      margin: 5px 0;
      font-size: 14px;
    }

    .boxes {
      width: 300px;
      height: 300px;
      border: 2px solid rgb(72, 70, 70);
      border-radius: 10px;
    }

    .container {
      width: 260px;
      padding: 20px;
      background: #ffffff;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      font-family: Poppins, sans-serif;
    }

    .title {
      font-size: 20px;
      text-align: center;
      font-weight: bold;
      margin-bottom: 15px;
    }

    .data-box {
      width: 100%;
      padding: 10px;
      background: #f2f2f2;
      border-radius: 8px;
      border: 1px solid #ccc;
      font-size: 14px;
      margin-bottom: 10px;
    }

    .label {
      font-weight: bold;
    }
    .containers {
    max-width: 340px;
    /* display:flex; */
    padding: 25px;
    margin-left:20px;
    background: #ffffff;
    border-radius: 18px;
    box-shadow: 0 10px 35px rgba(0,0,0,0.20);
    animation: fadeIn 0.7s ease-in-out;
}

/* Title */
.title {
        font-size: 14px;
    text-align: center;
    font-weight: 740;
    margin-bottom: 25px;
    color: #1a237e;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-family: system-ui;

}

/* Data Boxes */
.data-box {
    width: 91%;
    padding: 14px;
    background: linear-gradient(135deg, #f7f9fc, #eef2f7);
    border-radius: 12px;
    border: 1px solid #d6d6d6;
    /* font-size: 15px; */
    margin-bottom: 14px;
    display: flex;
    align-items: center;
    /* gap: 10px; */
    transition: 0.3s;

}

/* Hover Effect */
.data-box:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.12);
}

/* Labels */
.label {
    font-weight: 700;
    min-width: 95px;
    color: #1b1b1b;
}
.grid-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
    gap: 25px;
    padding: 20px;
    width: 100%;
}


/* Icons */
.icon {
    font-size: 18px;
    color: #3949ab;
}

/* Fade in Animation */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}
  </style>
</head>

<body>
  <!-- Left Part: Create Class Form -->
  <div class="left-section">
    <h2 style="">Create New Class</h2>
    <form id="classForm" action="create_class_checker.php" method="post">
      <label for="classname">Course:</label>
      <input type="text" id="classname" name="classname" placeholder="e.g. Class 10A" required>

      <label for="subject">Subject:</label>
      <input type="text" id="subject" name="subject" placeholder="e.g. Mathematics" required>

      <label for="section">Section:</label>
      <input type="text" id="section" name="section" placeholder="e.g. A / B / C" required>

      <label for="teacher">Semester/years</label>
      <input type="text" id="semseter" name="semesters" placeholder="Enter  semseter" required>

      <label for="teacher">Exam Date</label>
      <input type="text" id="Exam" name="Dates" placeholder="Enter Examation date" required>

      <button type="submit">Create Class</button>
    </form>

    <div class="message" id="msg"></div>
  </div>

  <!-- Right Part: View All Classes -->
  <div class="right-section">
    <div class="grid-container">

  <?php
include_once("dbname.php");

$sql = "SELECT * FROM `class_create`";
$result = mysqli_query($conn, $sql);

if(!$result){
    die("Query Failed: " . mysqli_error($conn));
}

while($rows = mysqli_fetch_assoc($result)){
    echo "
    <div class='containers'>
        <div class='title'>Class Details</div>

        <div class='data-box'>
            <span class='icon'>📘</span>
            <span class='label'>Course:</span> ".$rows['Course']."
        </div>

        <div class='data-box'>
            <span class='icon'>📕</span>
            <span class='label'>Subject:</span> ".$rows['Subject']."
        </div>

        <div class='data-box'>
        <span class='icon'>🏫</span>
        <span class='label'>Section:</span> ".$rows['Section']."
        </div>
        
        <div class='data-box'>
        <span class='icon'>📃</span>
        <span class='label'>Semester:</span> ".$rows['Semester']."
        </div>
        <div class='data-box'>
        <span class='icon'>📅</span>
        <span class='label'>Date:</span> ".$rows['Exam Date']."
        </div>
        
       <button>Upload Question</button>
       
    </div>";
}
?>
</div>
</div>


</body>

</html>
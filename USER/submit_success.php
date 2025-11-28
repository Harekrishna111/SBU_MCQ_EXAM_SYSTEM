<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Exam Submitted</title>

<style>
    *{
        margin: 0;
        padding: 0;
    }
    body {
        background: #e3f2fd;
        font-family: "Poppins", sans-serif;
    }
    
      .navbar {
            color: white;
            padding: 20px 20px;
            font-size: 14px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #1565c0;
        }
        
    .box {
        width: 60%;
        margin: 100px auto;
        background: white;
        padding: 40px;
        text-align: center;
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.15);
    }
    .box h1 {
        color: #2e7d32;
    }
    .box p {
        font-size: 18px;
        margin-top: 15px;
    }
    .back-btn {
        margin-top: 25px;
        padding: 10px 25px;
        background: #1565c0;
        color: white;
        border-radius: 8px;
        text-decoration: none;
    }
</style>
</head>

<body>
  <div class="navbar">
        <h2>MCQ Exam System</h2>
        <span id="username"></span>
    </div>
<div class="box">
    <h1>✅ Successfully Submitted!</h1>
    <p>Your exam response has been recorded.</p>
    <p>You have completed your exam.</p>
<br><br>
    <a href="exam_section.php" class="back-btn">Go to Dashboard</a>
</div>

</body>
</html>

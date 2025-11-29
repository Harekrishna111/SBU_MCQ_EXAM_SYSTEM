<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin – Upload Question</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: #f1f1f1;
    }

    /* HEADER */
    header {
      background-color: #004aad;
      color: white;
      width: 98%;
      padding: 15px 20px;
      display: flex;
      position: fixed;
      top: 0;
      z-index: 1000;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
    }

    header h1 {
      font-size: 22px;
      margin: 0;
    }

    nav a {
      color: white;
      margin-left: 20px;
      text-decoration: none;
      font-size: 15px;
      font-weight: 500;
      transition: 0.3s;
    }

    nav a:hover {
      color: #ffd700;
    }

    /* MAIN CONTAINER */
    .container {
      background: #fff;
      width: 70%;
      margin: 120px auto;  /* space below header */
      padding: 25px;
      border-radius: 8px;
      box-shadow: 0 0 12px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 15px;
      font-size: 22px;
      font-weight: 700;
    }

    label {
      font-size: 14px;
      margin-top: 12px;
      display: block;
    }

    textarea, input, select {
      width: 100%;
      padding: 8px;
      border: 1px solid #bbb;
      border-radius: 5px;
      margin-top: 5px;
      font-size: 14px;
    }

    .row {
      display: flex;
      gap: 20px;
      margin-top: 10px;
    }

    .row .box {
      flex: 1;
    }

    button {
      width: 100%;
      padding: 12px;
      margin-top: 18px;
      border: none;
      background: #4a6cf7;
      color: white;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background: #3d5bdd;
    }

    .error-box {
      margin: 15px 0;
      padding: 12px 18px;
      font-size: 14px;
      color: #b00020;
      background: #ffe5e8;
      border-left: 4px solid #b00020;
      border-radius: 6px;
      font-weight: 500;
      display: none;
    }

    /* MOBILE RESPONSIVE */
    @media(max-width: 768px) {
      .container {
        width: 90%;
      }
      nav a {
        margin-left: 10px;
      }
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
  </nav>
</header>

<div class="container">
  <form action="Uploadquestion_checker.php" method="post">
    <h2>Upload Question</h2>

    <label>Question:</label>
    <textarea rows="3" name="Question" placeholder="Enter question..." required></textarea>

    <div class="row">
      <div class="box">
        <label>Option A:</label>
        <input type="text" name="opt_1" placeholder="Option A" required>
      </div>
      <div class="box">
        <label>Option B:</label>
        <input type="text" name="opt_2" placeholder="Option B" required>
      </div>
    </div>

    <div class="row">
      <div class="box">
        <label>Option C:</label>
        <input type="text" name="opt_3" placeholder="Option C" required>
      </div>
      <div class="box">
        <label>Option D:</label>
        <input type="text" name="opt_4" placeholder="Option D" required>
      </div>
    </div>

    <input type="hidden" name="sss" value="<?php echo $_GET['classes']; ?>">

    <label>Correct Answer:</label>
    <select name="Correct_op" required>
      <option value="">Choose Answer</option>
      <option>A</option>
      <option>B</option>
      <option>C</option>
      <option>D</option>
    </select>

    <button type="submit">Submit</button>
  </form>

  <div id="message" class="error-box"></div>
</div>

</body>
</html>

<script>
  // console.log(window.location.href.split("?")[1].split("?"[0])=="classes")
  if(window.location.href.split("?")[1].split("=")[0]=="classes"){
    
  }elseif(window.location.href.split("?")[1].split("=")[0]=="msg"){
    
  }
  </script>

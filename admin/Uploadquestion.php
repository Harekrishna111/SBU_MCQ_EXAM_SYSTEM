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
      background: #f8f6f6;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background: #fff;
      width: 50%;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 8px;
    }

    h2 {
      text-align: center;
      margin-bottom: 15px;
      font-size: 20px;
    
      font-weight: 600;
    }

    label {
      font-size: 14px;
      margin-top: 10px;
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
      gap: 24px;
      margin-top: 10px;
    }

    .row .box {
      flex: 1;
    }

    button {
      width: 100%;
      padding: 10px;
      margin-top: 15px;
      border: none;
      background: #4a6cf7;
      color: white;
      font-size: 15px;
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
    letter-spacing: 0.5px;
    font-weight: 500;
     display: none; 
     text-align: start;                  
    animation: fadeIn 0.5s ease-in-out;
}
  </style>
</head>
<body>

  <div class="container">
    
    <form action="Uploadquestion_checker.php"  method="post">
      <h2>Upload Question</h2>

      <label>Question:</label>
      <textarea rows="3" name="Question" placeholder="Enter question..." required></textarea>

      <div class="row">
        <div class="box">
          <label>Option A:</label>
          <input type="text"  name="opt_1" placeholder="Option A" required>
        </div>

        <div class="box">
          <label>Option B:</label>
          <input type="text"  name="opt_2" placeholder="Option B" required>
        </div>
      </div>

      <div class="row">
        <div class="box">
          <label>Option C:</label>
          <input type="text"  name="opt_3" placeholder="Option C" required>
        </div>

        <div class="box">
          <label>Option D:</label>
          <input type="text"  name="opt_4" placeholder="Option D" required>
        </div>
      </div>
<input type="hidden" name="sss" value="<?php echo $_GET['classes']; ?>">



      <label>Correct Answer:</label>
      <select name="Correct_op" required>
        <option value="" >Choose Answer</option>
        <option>A</option>
        <option>B</option>
        <option>C</option>
        <option>D</option>
      </select>

      <button type="submit">Submit</button>

    </form>
     <div id ="message" class="error-box"></div>

  </div>

</body>
</html>
<script>
  // console.log(window.location.href.split("?")[1].split("?"[0])=="classes")
  if(window.location.href.split("?")[1].split("=")[0]=="classes"){
    
  }elseif(window.location.href.split("?")[1].split("=")[0]=="msg"){
    
  }
  </script>

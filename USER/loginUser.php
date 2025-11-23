<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login | MCQ Exam System</title>
  <style>
    body {
      margin: 0;   
      font-family: "Poppins", sans-serif;
      background: linear-gradient(135deg, #f9f7f7, #a3cef1);
    }
    .navbar {
      background: #144272;
      color: white;
      padding: 15px 40px;
      font-size: 22px;
    }
    .container {
      background: white;
      width: 420px;
      margin: 80px auto;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      text-align: center;
    }
    input {
      width: 85%;
      padding: 12px;
      margin: 10px 0;
      border-radius: 8px;
      border: 1px solid #ccc;
    }
    button {
      background: #205295;
      color: white;
      border: none;
      font-size:16px;
      width: 300px;
      padding: 12px 25px;
      border-radius: 8px;
      cursor: pointer;
      margin-top: 10px;
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
    button:hover { background: #2c74b3; }
    a { color: #205295; text-decoration: none; }
  </style>
</head>
<body>
  <div class="navbar">MCQ Exam System</div>
<div class="container">
    <h2>Login</h2>

    <form action="loginUser_checker.php" method="post">
    <input type="text" id="username" placeholder="Enrollment no " name="enroll" required><br>
    <input type="password" id="password" placeholder="Password" name="password" required><br>
    <button>Login</button>
    <p>Don't have an account? <a href="registerUser.php">Register here</a></p>
    <div id ="message" class="error-box"></div>
  </form>
  </div>

</body>
<script>
   var n = window.location.href.split("=")[1];
  console.log(n)
  if(n!=undefined){
  n = decodeURIComponent(n);
  // alert(n);
  document.getElementById("message").innerHTML = n;
  document.getElementById("message").style.display = "block"; 
  }
</script>
</html>

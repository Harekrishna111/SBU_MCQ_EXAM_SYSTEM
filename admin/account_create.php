<?php
include_once("dbname.php");
if(isset($_SESSION["user"])){
  header("Location: create_class.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Create Account</title>
  <style>
    body {
      font-family: "Poppins", sans-serif;
      background: linear-gradient(135deg, #74ABE2, #5563DE);
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      min-height: 100vh;
    }

    .container {
      background: #fff;
      margin-top: 50px;
      padding: 35px;
      border-radius: 15px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
      width: 400px;
    }

    h2 {
      text-align: center;
      color: #004aad;
      margin-bottom: 25px;
    }

    label {
      display: block;
      font-weight: 600;
      margin-top: 10px;
      color: #333;
    }

    input, select {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      margin-bottom: 15px;
      border-radius: 8px;
      border: 1px solid #ccc;
      outline: none;
      transition: 0.3s;
    }

    input:focus, select:focus {
      border-color: #5563DE;
      box-shadow: 0 0 5px #5563DE;
    }

    button {
      width: 100%;
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
      color: green;
    }

    .link {
      text-align: end;
      margin-top: 20px;
      font-size:12px;
    }
    
    .link a {
      color: #661c1cff;
      text-decoration: none;
      font-weight: 600;
    }
    
    .link a:hover {
      text-decoration: underline;
      color: #004aad;

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
    <h2>Create Account  (For Teachers)</h2>
    <form id="accountForm" action="account_create_checker.php" method="Post">
      <label for="fullname">Full Name:</label>
      <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>

     <label for="password"> New Password:</label>
      <input type="password" id="password" name="password" placeholder="Enter password" required>

      <label for="confirm">Confirm Password:</label>
      <input type="password" id="confirm" name="confirm" placeholder="Confirm password" required>

      <button type="submit">Create Account</button>

    </form>

    <div id ="message" class="error-box"></div>

    <div class="link">
      🔙 <a href="admin_login.php"> Admin login</a>
    </div>
  </form>
</div>


</body>
</html>

<script>
  var n = window.location.href.split("=")[1];
  console.log(n)
  if(n!=undefined){
  n = decodeURIComponent(n);
  // alert(n);
  document.getElementById("message").innerHTML = n;
  document.getElementById("message").style.display = "block"; 
  }
  // document.getElementById("message").innerHTML="";
</script>
  

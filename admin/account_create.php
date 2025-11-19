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
      text-align: center;
      margin-top: 20px;
    }

    .link a {
      color: #004aad;
      text-decoration: none;
      font-weight: 600;
    }

    .link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Create Account</h2>
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

    <div class="message" id="msg"></div>

    <div class="link">
      🔙 <a href="admin_checker.php">Go to admin login</a>
    </div>
  </div>
  </form>


</body>
</html>

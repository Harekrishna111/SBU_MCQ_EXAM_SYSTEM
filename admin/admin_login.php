
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #74ABE2, #5563DE);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-box {
      background-color: white;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
      padding: 30px;
      width: 320px;
      text-align: center;
    }

    h2 {
      margin-bottom: 20px;
      color: #333;
    }

    label {
      display: block;
      text-align: left;
      margin-bottom: 5px;
      color: #444;
      font-weight: bold;
    }

    input[type="text"], input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 8px;
      outline: none;
      transition: 0.3s;
    }

    input[type="text"]:focus, input[type="password"]:focus {
      border-color: #5563DE;
      box-shadow: 0 0 5px #5563DE;
    }

    button {
      background-color: #5563DE;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 8px;
      cursor: pointer;
      width: 100%;
      font-size: 16px;
      transition: 0.3s;
    }

    button:hover {
      background-color: #3542b5;
    }

    a {
      display: inline-block;
      margin-top: 15px;
      text-decoration: none;
      color: #5563DE;
      font-weight: bold;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2>Admin Login</h2>
    <form action="admin_checker.php" method="post">
      <label for="name">Admin Name</label>
      <input type="text" id="name" name="names" placeholder="Enter your name" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="passwords" placeholder="Enter password" required>

      <button type="submit">submit</button>
    </form>

    <a href="account_create.php">Admin Account Page</a>
  </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Register | MCQ Exam System</title>
  <style>
    body {
        margin: 0;
        font-family: 'Poppins', sans-serif;
        background: #f0f2f5;
        /* display: flex; */
        justify-content: center;
        align-items: center;
            background: linear-gradient(135deg, #74ABE2, #5563DE);
        height: 100vh;
    }

    .container {
        background: #fff;
        width: 430px;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }

    h2 {
        text-align: center;
        /* margin-bottom: 20px; */
        color: #333;
    }

    input, select {
        width: 100%;
    padding: 10px;
    margin: 6px 0;
    border-radius: 8px;
    border: 1px solid #ccc;
    font-size: 13px;
    outline: none;
    transition: 0.3s;
}
    

    input:focus, select:focus {
        border-color: #4a90e2;
        box-shadow: 0 0 6px rgba(74, 144, 226, 0.4);
    }

    /* Gender box styling */
    .gender-box {
        margin: 10px 0;
        font-size: 15px;
    }

    .gender-title {
        margin-bottom: 8px;
        font-weight: 500;
        color: #333;
    }

    .gender-options {
        display: flex;
        justify-content: space-between;
        padding: 5px 0;
    }

    .gender-options label {
        display: flex;
        align-items: center;
        gap: 5px;
        font-weight: 400;
    }

    button {
        width: 100%;
        padding: 12px;
        background: #4a90e2;
        border: none;
        border-radius: 8px;
        color: white;
        font-size: 16px;
        cursor: pointer;
        margin-top: 10px;
    }
   .navbar {
      background: #205295;
      color: white;
      padding: 15px 40px;
      font-size: 22px;
    }
    button:hover {
        background: #357ABD;
    }

    p {
        margin-top: 15px;
        text-align: center;
    }

    a {
        color: #4a90e2;
        text-decoration: none;
        font-weight: 500;
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
  <nav>
    <div class="navbar">MCQ Exam System</div>

  </nav>

  <div style="display: flex;justify-content: center; margin-top: 20px;">


<div class="container">
    <h2>Register (for Student)</h2>

    <form action="registerUser_checker.php" method="post">

        <input type="text" name="username" placeholder="Enter Your Name" required>

        <input type="text" name="enroll" placeholder="Enter Enrollment No" required>

        <select name="course" required>
            <option value="" disabled selected>Choose Course</option>
            <option>BCA</option>
            <option>MCA</option>
            <option>B.Tech</option>
            <option>Diploma</option>
            <option>BBA</option>
            <option>LLB</option>
            <option>D-Pharma</option>
            <option>B-Pharma</option>
        </select>

        <select name="semester" required>
            <option value="" disabled selected>Choose Semester</option>
            <option>I</option>
            <option>II</option>
            <option>III</option>
            <option>IV</option>
            <option>V</option>
            <option>VI</option>
            <option>VII</option>
            <option>VIII</option>
        </select>

        <input type="text" name="section" placeholder="Class / Section" required>

        <!-- Gender Section -->
        <div class="gender-box">
            <div class="gender-title">Gender</div>
            <div class="gender-options">
                <label><input type="radio" name="gender" value="Male" required> Male</label>
                <label><input type="radio" name="gender" value="Female"> Female</label>
                <label><input type="radio" name="gender" value="Other"> Other</label>
            </div>
        </div>

        <input type="password" name="password" placeholder="Create Password" required>

        <button type="submit">Register</button>
       <div id ="message" class="error-box"></div>

        <p>Already registered? <a href="loginUser.php">Login here</a></p>

    </form>
</div>
</div>
<br><br><br><br><br>
</body>
<script>
var n= window.location.href.split("=")[1];
console.log(n);
if(n!=undefined){
      n = decodeURIComponent(n);
  
  document.getElementById("message").innerHTML = n;
  document.getElementById("message").style.display = "block"; 
}


</script>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Select Exam | MCQ Exam System</title>
  <style>
    body {
      margin: 0;
      font-family: "Poppins", sans-serif;
      background: linear-gradient(135deg, #e3f2fd, #f8fdff);
    }
  
    .container {
      background: white;
      width: 450px;
      margin: 100px auto;
      padding: 40px;
      border-radius: 15px;
      text-align: center;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }
    select {
      width: 80%;
      padding: 12px;
      border-radius: 8px;
      border: 1px solid #b0bec5;
      margin-bottom: 20px;
      font-size: 15px;
    }
    button {
      background-color: #1565c0;
      color: white;
      border: none;
      padding: 10px 25px;
      border-radius: 8px;
      cursor: pointer;
    }
    button:hover { background-color: #1e88e5; }
  </style>
</head>
<body>
  <div class="navbar">
    <h2>MCQ Exam System</h2>
    <span id="username"></span>
  </div>

  <div class="container">
    <h2>Select Course & Subject</h2>
    
    <select id="course" name="course">
      <option value="">-- Select Course --</option>
      <option value="BCA">BCA</option>
      <option value="MCA">MCA</option>
      <option value="BBA">BBA</option>
      <option value="MBA">MBA</option>
      <option value="LLB">LLB</option>
      <option value="DIPLOMA">DIPLOMA</option>
      <option value="BTECH">B.TECH</option>
    </select><br>
    <select id="course" name="semester">
      <option value="">-- Semester --</option>
      <option value="I">I</option>
      <option value="II">II</option>
      <option value="III">III</option>
      <option value="IV">IV</option>
      <option value="V">V</option>
      <option value="VI">VI</option>
     
    </select><br>

     <select name="section" required>
            <option value="" disabled selected>Choose Semester</option>
            <option>SECTION-A</option>
            <option>SECTION-B</option>
            <option>SECTION-C</option>
            <option>SECTION-D</option>
            <option>SECTION-E</option>
            <option>SECTION-F</option>
            <option>SECTION-G</option>
           
  </select>

    <button>Start Exam</button>
  </div>

  <!-- <script>
    const user = localStorage.getItem("loginUser");
    if (!user) window.location.href = "login.html";
    document.getElementById("username").innerText = "👋 " + user;

    const courseSubjects = {
      BCA: ["C Programming", "DBMS", "HTML & CSS", "Java", "Python"],
      MCA: ["Data Structures", "Operating System", "Web Technology", "Java Advanced", "Networking"],
      BBA: ["Principles of Management", "Marketing", "Accounting", "Economics"],
      MBA: ["Business Strategy", "Finance", "Marketing Research", "HR Management"],
      LLB: ["Constitutional Law", "Criminal Law", "Contract Law", "Family Law"],
      DIPLOMA: ["Basic Electrical", "Mechanical Drawing", "Workshop Technology"],
      BTECH: ["Computer Science", "Mechanical", "Civil", "Electronics", "Electrical"]
    };

    function loadSubjects() {
      const course = document.getElementById("course").value;
      const subjectSelect = document.getElementById("subject");
      subjectSelect.innerHTML = '<option value="">-- Select Subject --</option>';
      if (course && courseSubjects[course]) {
        courseSubjects[course].forEach(sub => {
          const opt = document.createElement("option");
          opt.value = sub;
          opt.textContent = sub;
          subjectSelect.appendChild(opt);
        });
      }
    } -->

</body>
</html>

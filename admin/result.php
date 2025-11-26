<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>All Student Results</title>
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
      margin-top: 40px;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
      width: 90%;
      max-width: 900px;
    }

    h2 {
      text-align: center;
      color: #004aad;
      margin-bottom: 25px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      font-size: 15px;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 10px;
      text-align: center;
    }

    th {
      background-color: #004aad;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    tr:hover {
      background-color: #e6f0ff;
    }

    .status-pass {
      color: green;
      font-weight: bold;
    }

    .status-fail {
      color: red;
      font-weight: bold;
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
    <h2>All Students Result Record</h2>

    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Student Name</th>
          <th>Class</th>
          <th>Section</th>
          <th>Subject</th>
          <th>Marks</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody id="resultTable"></tbody>
    </table>

    <div class="link">
      🔙 <a href="teacher_dashboard.html">Back to Teacher Dashboard</a>
    </div>
  </div>

  <script>
    // Dummy result data for display
    const results = [
      { roll: "101", name: "Riya Sharma", class: "Class 6", section: "A", subject: "Math", marks: 92, status: "Pass" },
      { roll: "102", name: "Amit Verma", class: "Class 6", section: "A", subject: "Science", marks: 78, status: "Pass" },
      { roll: "201", name: "Neha Singh", class: "Class 7", section: "B", subject: "Math", marks: 60, status: "Pass" },
      { roll: "202", name: "Rahul Yadav", class: "Class 7", section: "B", subject: "Science", marks: 45, status: "Fail" },
      { roll: "301", name: "Sneha Patil", class: "Class 8", section: "C", subject: "English", marks: 88, status: "Pass" },
      { roll: "302", name: "Karan Gupta", class: "Class 8", section: "C", subject: "Math", marks: 51, status: "Pass" },
      { roll: "303", name: "Anjali Rao", class: "Class 8", section: "C", subject: "Science", marks: 39, status: "Fail" }
    ];

    const table = document.getElementById("resultTable");

    results.forEach(r => {
      const row = `<tr>
        <td>${r.roll}</td>
        <td>${r.name}</td>
        <td>${r.class}</td>
        <td>${r.section}</td>
        <td>${r.subject}</td>
        <td>${r.marks}</td>
        <td class="${r.status === "Pass" ? "status-pass" : "status-fail"}">${r.status}</td>
      </tr>`;
      table.innerHTML += row;
    });
  </script>
</body>
</html>

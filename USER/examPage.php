<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Exam | MCQ Exam System</title>
  <style>
    body {
      margin: 0;
      font-family: "Poppins", sans-serif;
      background: linear-gradient(135deg, #f7faff, #e3f2fd);
    }
    .navbar {
      background-color: #205295;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 12px 40px;
      color: white;
    }
    .exam-container {
      background: white;
      width: 600px;
      margin: 70px auto;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }
    .options label {
      display: block;
      margin-bottom: 12px;
      background: #f1f2f6;
      padding: 10px 15px;
      border-radius: 8px;
      cursor: pointer;
    }
    .buttons {
      margin-top: 25px;
      display: flex;
      justify-content: space-between;
    }
    button {
      background-color: #205295;
      color: white;
      border: none;
      padding: 12px 25px;
      border-radius: 8px;
      cursor: pointer;
    }
    button:hover { background-color: #2c74b3; }
  </style>
</head>
<body>
  <div class="navbar">
    <h2>MCQ Exam System</h2>
  </div>

  <div class="exam-container">
    <p id="qNumber"></p>
    <h2 id="questionText"></h2>
    <div id="optionsList" class="options"></div>
    <div class="buttons">
      <button id="prevBtn" onclick="prevQuestion()">Previous</button>
      <button id="nextBtn" onclick="nextQuestion()">Next</button>
    </div>
  </div>

  <script>
    const bcaQuestions = [
      {question: "Full form of BCA?", options: ["Bachelor of Computer Applications", "Basic Computer Arts", "Binary Computer Analysis", "Business Code Access"], answer: "Bachelor of Computer Applications"},
      {question: "HTML stands for?", options: ["Hyper Text Markup Language", "High Text Machine Language", "Hyperlinks and Text Markup Language", "None"], answer: "Hyper Text Markup Language"},
      {question: "Which is a programming language?", options: ["HTML", "Python", "CSS", "Bootstrap"], answer: "Python"},
      {question: "CSS used for?", options: ["Structure", "Design", "Logic", "Database"], answer: "Design"},
      {question: "Which is database software?", options: ["MySQL", "Excel", "Word", "C++"], answer: "MySQL"},
      {question: "Which is IDE?", options: ["VS Code", "Paint", "PowerPoint", "Excel"], answer: "VS Code"},
      {question: "OOP stands for?", options: ["Object Oriented Programming", "Old Operating Process", "Online Output Program", "None"], answer: "Object Oriented Programming"},
      {question: "Which tag for image?", options: ["<img>", "<src>", "<image>", "<pic>"], answer: "<img>"},
      {question: "Which symbol is used for ID in CSS?", options: ["#", ".", "/", "@"], answer: "#"},
      {question: "Which language backend?", options: ["Python", "HTML", "CSS", "Bootstrap"], answer: "Python"}
    ];

    let currentQuestion = 0;
    let selectedAnswers = {};

    function loadQuestion() {
      const q = bcaQuestions[currentQuestion];
      document.getElementById("qNumber").textContent = `Question ${currentQuestion + 1} of ${bcaQuestions.length}`;
      document.getElementById("questionText").textContent = q.question;

      const optionsDiv = document.getElementById("optionsList");
      optionsDiv.innerHTML = "";
      q.options.forEach(opt => {
        const label = document.createElement("label");
        label.innerHTML = `<input type="radio" name="option" value="${opt}" ${selectedAnswers[currentQuestion] === opt ? "checked" : ""}> ${opt}`;
        optionsDiv.appendChild(label);
      });

      document.getElementById("prevBtn").style.display = currentQuestion === 0 ? "none" : "inline-block";
      document.getElementById("nextBtn").textContent = currentQuestion === bcaQuestions.length - 1 ? "Submit" : "Next";
    }

    function nextQuestion() {
      const selected = document.querySelector('input[name="option"]:checked');
      if (!selected) return alert("Please select an answer!");
      selectedAnswers[currentQuestion] = selected.value;
      if (currentQuestion < bcaQuestions.length - 1) {
        currentQuestion++;
        loadQuestion();
      } else {
        calculateResult();
      }
    }

    function prevQuestion() {
      if (currentQuestion > 0) {
        currentQuestion--;
        loadQuestion();
      }
    }

    function calculateResult() {
      let score = 0;
      bcaQuestions.forEach((q, i) => {
        if (selectedAnswers[i] === q.answer) score++;
      });
      localStorage.setItem("examScore", score);
      localStorage.setItem("totalQ", bcaQuestions.length);
      window.location.href = "result.html";
    }

    loadQuestion();
  </script>
</body>
</html>

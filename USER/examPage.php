<?php
include_once("../admin/dbname.php");

// Get class id from URL
$classId = $_GET['classes'];

// Fetch class info
$classSql = "SELECT * FROM class_create WHERE Sno='$classId'";
$classResult = mysqli_query($conn, $classSql);
$classData = mysqli_fetch_assoc($classResult);

// Fetch questions
$qSql = "SELECT * FROM upload_question WHERE class_no='$classId'";
$qResult = mysqli_query($conn, $qSql);

$questions = [];
while ($row = mysqli_fetch_assoc($qResult)) {
    $questions[] = $row;
}

// Convert to JSON for JS
$jsQuestions = json_encode($questions);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $classData['Subject']; ?> | Exam</title>

  <style>
    body {
      margin: 0;
      font-family: "Poppins", sans-serif;
      background: linear-gradient(135deg, #f7faff, #e3f2fd);
    }
    .navbar {
      background-color: #205295;
      color: white;
      padding: 12px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
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
  <h2><?php echo $classData['Course']; ?> - <?php echo $classData['Subject']; ?></h2>
  <p>Section: <?php echo $classData['Section']; ?> | Sem: <?php echo $classData['Semester']; ?></p>
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
  const questions = <?php echo $jsQuestions; ?>;

  let currentQuestion = 0;
  let selectedAnswers = {};

  function loadQuestion() {
    const q = questions[currentQuestion];

    document.getElementById("qNumber").textContent =
      `Question ${currentQuestion + 1} of ${questions.length}`;

    document.getElementById("questionText").textContent = q.Question;

    const optionsDiv = document.getElementById("optionsList");
    optionsDiv.innerHTML = "";

    const options = [q.optionA, q.optionB, q.optionC, q.optionD];

    options.forEach(opt => {
      const label = document.createElement("label");
      label.innerHTML = `
        <input type="radio" name="option" value="${opt}"
        ${selectedAnswers[currentQuestion] === opt ? "checked" : ""}>
        ${opt}
      `;
      optionsDiv.appendChild(label);
    });

    document.getElementById("prevBtn").style.display =
      currentQuestion === 0 ? "none" : "inline-block";

    document.getElementById("nextBtn").textContent =
      currentQuestion === questions.length - 1 ? "Submit" : "Next";
  }

  function nextQuestion() {
    const selected = document.querySelector('input[name="option"]:checked');
    if (!selected) return alert("Please select an answer!");

    selectedAnswers[currentQuestion] = selected.value;

    if (currentQuestion < questions.length - 1) {
      currentQuestion++;
      loadQuestion();
    } else {
      submitAnswersToServer();
    }
  }

  function prevQuestion() {
    if (currentQuestion > 0) {
      currentQuestion--;
      loadQuestion();
    }
  }

  function submitAnswersToServer() {
    let answersToSend = [];

    questions.forEach((q, i) => {
      answersToSend.push({
        question_id: q.Sno,
        selected: selectedAnswers[i] || "",
        correct: q.correct_ans
      });
    });

    const data = {
        student_id: 101,  
        class_no: <?php echo $classId; ?>,
        answers: answersToSend
    };

    fetch("saveAnswers.php", {
        method: "POST",
        body: JSON.stringify(data)
    })
    .then(res => res.json())
    .then(result => {
        if (result.status === "success") {
            alert("Answers Submitted Successfully!");
           window.location.href = "submit_success.php";

        }
    });
  }

  loadQuestion();
</script>

</body>
</html>

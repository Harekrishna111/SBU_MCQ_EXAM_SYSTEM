<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College MCQ Exam System</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Poppins", sans-serif;
            background: linear-gradient(135deg, #c2e9fb, #a1c4fd);
            color: #333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Navbar */
        header {
            background-color: #004aad;
            color: white;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
        }

        header h1 {
            font-size: 24px;
            letter-spacing: 1px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: 500;
            transition: 0.3s;
        }

        nav a:hover {
            color: #ffd700;
        }

        /* College Intro Section */
        .college-section {
            flex: 1;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            gap: 40px;
            padding: 60px 40px;
        }

        .college-section img {
            width: 45%;
            max-width: 500px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
        }

        .college-info {
            max-width: 500px;
        }

        .college-info h2 {
            color: #004aad;
            font-size: 30px;
            margin-bottom: 15px;
        }

        .college-info p {
            font-size: 17px;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        /* Activities Section */
        .activities {
            padding: 60px 40px;
            background-color: #f8f9ff;
            text-align: center;
        }

        .activities h2 {
            font-size: 28px;
            color: #004aad;
            margin-bottom: 30px;
        }

        .activity-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            justify-items: center;
        }

        .activity-card {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 300px;
            transition: transform 0.3s;
        }

        .activity-card:hover {
            transform: translateY(-5px);
        }

        .activity-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .activity-card h3 {
            margin: 15px 0 10px;
            color: #004aad;
        }

        .activity-card p {
            padding: 0 15px 20px;
            font-size: 15px;
            color: #555;
            line-height: 1.5;
        }

        /* Footer */
        footer {
            background-color: #004aad;
            color: white;
            text-align: center;
            padding: 10px 0;
            font-size: 14px;
            margin-top: auto;
        }

        @media (max-width: 768px) {
            .college-section {
                flex-direction: column;
                text-align: center;
            }

            .college-section img {
                width: 80%;
            }
        }

        .explore-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .explore-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <header>
        <h1>College MCQ Exam</h1>
        <nav>
            <a href="#">Home</a>
            <a href="#">Activities</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
            <a href="/sbuMCQ_exam/SBU_MCQ_EXAM_SYSTEM/user/registerUser.php">Student Login</a>
            <a href="/sbuMCQ_exam/SBU_MCQ_EXAM_SYSTEM/admin/account_create.php">Admin Login</a>
        </nav>
        
    </header>

    <!-- College Info + Image Section -->
    <section class="college-section">
        <img src="./photo/CampusBanner.jpg" alt="College Campus">

        <div class="college-info">
            <h2>Welcome to Our College MCQ Exam System</h2>
            <p>
                Our college is committed to academic excellence and innovation. Through the MCQ Exam System,
                we ensure fair evaluation, faster results, and a smarter testing environment for students.
                This modern approach enhances both learning and assessment quality.
            </p>
            <p>
                We also focus on extracurricular and technical activities to help students grow academically,
                socially, and professionally.
            </p>
            <a href="https://sbu.ac.in/" class="explore-btn">Explore the College</a>
        </div>
    </section>

    <!-- Activities Section -->
    <section class="activities">
        <h2>Campus Activities</h2>

        <div class="activity-grid">
            <div class="activity-card">
                <img src="../photo/activity.jpg" alt="Science Lab">
                <h3>Games & Activities</h3>
                <p>Our college promotes sports and e-games, encouraging teamwork, fitness, creativity, and enjoyment
                    through active student participation.</p>
            </div>

            <div class="activity-card">
                <img src="../photo/libr.jpg" alt="Library">
                <h3>Modern Library</h3>
                <p>The digital library offers access to thousands of academic journals, e-books, and study materials.
                </p>
            </div>

            <div class="activity-card">
                <img src="../photo/helth.webp" alt="Sports Event">
                <h3>Sports & Fitness</h3>
                <p>Students participate in sports and physical activities that promote teamwork, leadership, and health.
                </p>
            </div>

            <div class="activity-card">
                <img src="../photo/sami.jpeg" alt="Tech Fest">
                <h3>Tech Fests & Seminars</h3>
                <p>Our college hosts tech events and seminars to encourage innovation and technical knowledge.</p>
            </div>
        </div>
    </section>






    <!-- Footer -->
    <footer>
        © 2025 College MCQ Exam System | Designed by Suraj
    </footer>

</body>

</html>
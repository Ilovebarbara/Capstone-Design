<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Header</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            display: flex;
            flex-direction: column;
            background-color: #F3FFF2;
        }
        header {
            background-color:#6DA36C;
            color: white;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: relative;
            width: 100%;
        }
        header img {
            height: 80px;
            margin-right: 20px;
        }
        .main-content {
            flex: 1;
            display: flex;
            width: 100%;
        }
        .sidebar {
            background-color: #CEECD1; 
            width: 250px;
            padding: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li {
            margin-bottom: 15px; 
            display: flex; 
            align-items: center;
        }
        .sidebar ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            height: 40px;
            display: flex; 
            align-items: center; 
        }
        .sidebar ul li a:hover {
            background-color: #9FD1A4; 
            color: #090808;
            border-radius: 10px;
            padding: 5px;
        }
        .sidebar ul li img {
            height: 20px; 
            margin-right: 10px; 
        }
        .content-area {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .content-box {
            background-color: #C1EFC6; 
            width: 100%;
            height: 90%;
            margin-top: -5%;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            position: relative;
            padding: 20px;
        }
        .option-bar {
            position: absolute;
            top: 3%;
            left: 20px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
        }
        .option-bar label {
            margin-right: 10px;
        }
        .inner-content-box {
            background-color: #A8D8A0;
            width: 95%;
            height: 70%;
            border-radius: 15px;
            margin-top: 120px;
            padding: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .account {
            display: flex;
            align-items: center;
        }
        .account img {
            height: 50px;
            border-radius: 50%;
            margin-left: 10px;
        }
        .account label {
            margin-right: 10px;
            color: rgb(12, 9, 9);
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <img src="image/logo.png" alt="Logo">
        <div class="account">
            <label for="account">Joseph Genard Ting</label>
            <img src="image/Account.png" alt="Account Logo">
        </div>
    </header>
    <div class="main-content">
        <div class="sidebar">
            <ul>
                <li>
                    <a href="#">
                        <img src="image/Dashboard.png" alt="Dashboard Icon"> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="image/Class.png" alt="Class Icon"> Class
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="image/subject.png" alt="Subject Icon"> Subject
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="image/School Year.png" alt="School Year Icon"> School Year
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="image/Class Per Subject.png" alt="Class per Subject Icon"> Class per Subject
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="image/Student.png" alt="Student Icon"> Student
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="image/teacher.png" alt="Teacher Icon"> Teacher
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="image/Reports.png" alt="Reports Icon"> Reports
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="image/Log Out.png" alt="Logout Icon"> Logout
                    </a>
                </li>
            </ul>
        </div>
        <div class="content-area">
            <div class="content-box">
                <div class="option-bar">
                    <div>
                        <label for="quarter">Quarter:</label>
                        <select id="quarter" name="quarter">
                            <option value="1">1st Quarter</option>
                            <option value="2">2nd Quarter</option>
                            <option value="3">3rd Quarter</option>
                            <option value="4">4th Quarter</option>
                        </select>
                    </div>
                    <div>
                        <label for="class">Class:</label>
                        <select id="class" name="class">
                            <option value="class1">Class 1</option>
                            <option value="class2">Class 2</option>
                            <option value="class3">Class 3</option>
                        </select>
                    </div>
                    <div>
                        <label for="category">Category:</label>
                        <select id="category" name="category">
                            <option value="category1">Category 1</option>
                            <option value="category2">Category 2</option>
                            <option value="category3">Category 3</option>
                        </select>
                    </div>
                </div>
                <div class="inner-content-box">
                    <canvas id="myBarChart"></canvas> <!-- Bar chart canvas -->
                </div>
            </div>
        </div>
    </div>

    <!-- Include Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Bar chart configuration
        const ctx = document.getElementById('myBarChart').getContext('2d');
        const myBarChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Soft Skills', 'Hard Skills'],
                datasets: [{
                    label: 'Performance',
                    data: [85, 90], // Example data for each category
                    backgroundColor: ['#FF6384', '#36A2EB'],
                    borderColor: ['#FF6384', '#36A2EB'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>

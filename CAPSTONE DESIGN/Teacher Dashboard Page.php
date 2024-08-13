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
            padding: 20px;
            width: 100%;
            height: 95%;
            border-radius: 20px;
            text-align: left;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); 
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center; 
            justify-content: start;
        }
        .input-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px; 
            width: 100%;
            justify-content: center; 
        }
        .input-container label {
            font-weight: bold;
            margin-right: 10px;
        }
        .input-container select {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #6DA36C;
            width: 220px;
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

        .inner-content-box {
            background-color: #FFFFFF;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            height: auto; /* Adjusted height to fit content */
            width: 95%;
            overflow: auto; /* To handle overflow if the content is large */
        }

        .below-content-box {
            background-color: #FFFFFF;
            margin-top: 10px;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 50%;
            width: 65%;
            overflow: auto;
        }

        canvas {
            width: 100% !important;
            height: 300px; /* Set a fixed height for the canvas */
            max-height: 300px; /* Ensure it doesn't exceed a maximum height */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #6DA36C;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #student-buttons {
            margin-bottom: 20px;
        }

        #student-buttons button {
            background-color: #6DA36C;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin-right: 10px;
            cursor: pointer;
        }

        #student-buttons button:hover {
            background-color: #4D7A40;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                        <img src="image/Profile.png" alt="Profile Icon"> Profile
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="image/Class Record.png" alt="Class Record Icon"> Class Record
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="image/Class Master List.png" alt="Class Master List Icon"> Class Master List
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="image/Attendance.png" alt="Attendance Icon"> Attendance
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
                <div class="input-container">
                    <label for="class-input">Class:</label>
                    <select id="class-input" name="class">
                        <option value="class1">Class 1</option>
                        <option value="class2">Class 2</option>
                        <option value="class3">Class 3</option>
                        <option value="class4">Class 4</option>
                    </select>
                </div>
                <div class="inner-content-box">
                    <canvas id="bar-chart"></canvas>
                    <table>
                        <thead>
                            <tr>
                                <th>Rank</th>
                                <th>Student Name</th>
                                <th>Grade</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Student 1</td>
                                <td>90</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Student 2</td>
                                <td>88</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Student 3</td>
                                <td>85</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Student 4</td>
                                <td>80</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="below-content-box">
                    <h1>Tracking</h1>
                    <div id="student-buttons">
                        <button onclick="showChart('Student 1')">Student 1</button>
                        <button onclick="showChart('Student 2')">Student 2</button>
                        <button onclick="showChart('Student 3')">Student 3</button>
                        <button onclick="showChart('Student 4')">Student 4</button>
                    </div>
                    <canvas id="student-chart" style="display: none;"></canvas>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Bar chart
        const ctx = document.getElementById('bar-chart').getContext('2d');
        const barChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Student 1', 'Student 2', 'Student 3', 'Student 4'],
                datasets: [{
                    label: 'Grades',
                    data: [90, 88, 85, 80],
                    backgroundColor: '#6DA36C',
                    borderColor: '#4D7A40',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        
        const studentChartCanvas = document.getElementById('student-chart').getContext('2d');
        let studentChart;

        function showChart(studentName) {
            const data = {
                labels: ['Homework', 'Exams', 'Participation', 'Assignments'],
                datasets: [{
                    label: studentName + ' Tracking',
                    data: [30, 40, 20, 10], 
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0'],
                    borderColor: '#fff',
                    borderWidth: 1
                }]
            };

            if (studentChart) {
                studentChart.destroy();
            }

            studentChart = new Chart(studentChartCanvas, {
                type: 'pie',
                data: data,
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    let label = context.label || '';
                                    if (context.parsed !== null) {
                                        label += ': ' + context.parsed + '%';
                                    }
                                    return label;
                                }
                            }
                        }
                    }
                }
            });

            document.getElementById('student-chart').style.display = 'block';
        }
    </script>
</body>
</html>

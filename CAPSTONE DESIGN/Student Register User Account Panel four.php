<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Header</title>
    <style>
        html,
        body {
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
            background-color: #6DA36C;
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
            height: 96%;
            margin-top: 1%;
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
            height: auto;
            /* Adjusted to fit content */
            border-radius: 15px;
            margin-top: 120px;
            /* Space between chart and table */
            padding: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            /* Updated to column for vertical layout */
            align-items: center;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            /* Space between chart and table */
        }

        .data-table th,
        .data-table td {
            border: 1px solid #070606;
            padding: 8px;
            text-align: center;
            color: white;
            /* Set text color to white for better contrast */
        }

        .data-table th {
            background-color: #e9f0e9;
            color: rgb(9, 8, 8);
        }

        .data-table tr:nth-child(even) {
            background-color: #e8e2e2;
        }

        .range-0-50 {
            background-color: #FF6F6F;
            /* Red */
        }

        .range-51-74 {
            background-color: #FFB84C;
            /* Orange */
        }

        .range-75-79 {
            background-color: #FFEB3B;
            /* Yellow */
        }

        .range-80-89 {
            background-color: #9CCC65;
            /* Light Green */
        }

        .range-90-100 {
            background-color: #4CAF50;
            /* Green */
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
                    <canvas id="myBarChart"></canvas>
                  
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Range</th>
                                <th>English</th>
                                <th>Esp</th>
                                <th>AP</th>
                                <th>Filipino</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="range-0-50">0% - 50%</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="range-51-74">51% - 74%</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="range-75-79">75% - 79%</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="range-80-89">80% - 89%</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="range-90-100">90% - 100%</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
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
                labels: ['0% - 50%', '51% - 74%', '75% - 79%', '80% - 89%', '90% - 100%'],
                datasets: [{
                    label: 'English',
                    data: [10, 20, 30, 40, 50], // Example data for English
                    backgroundColor: '#FF6384',
                    borderColor: '#FF6384',
                    borderWidth: 1
                }, {
                    label: 'Esp',
                    data: [15, 25, 35, 45, 55], // Example data for Esp
                    backgroundColor: '#36A2EB',
                    borderColor: '#36A2EB',
                    borderWidth: 1
                }, {
                    label: 'AP',
                    data: [20, 30, 40, 50, 60], // Example data for AP
                    backgroundColor: '#FFCE56',
                    borderColor: '#FFCE56',
                    borderWidth: 1
                }, {
                    label: 'Filipino',
                    data: [25, 35, 45, 55, 65], // Example data for Filipino
                    backgroundColor: '#4BC0C0',
                    borderColor: '#4BC0C0',
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
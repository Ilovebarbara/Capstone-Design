<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #F3FFF2;
            display: flex;
            flex-direction: column;
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
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        header img {
            height: 80px;
            margin-right: 20px;
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

        .main-content {
            display: flex;
            flex: 1;
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
            padding: 5px;
        }

        .sidebar ul li a:hover {
            background-color: #9FD1A4;
            color: #090808;
            border-radius: 10px;
        }

        .sidebar ul li img {
            height: 20px;
            margin-right: 10px;
        }

        .content-area {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            overflow: auto; /* Ensures overflow content is scrollable */
        }

        .option-bar {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            width: 100%;
            max-width: 800px;
        }

        .option-bar div {
            display: flex;
            align-items: center;
            margin-right: 20px;
        }

        .option-bar label {
            font-weight: bold;
            margin-right: 10px;
            color: #333;
        }

        .option-bar select {
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #CEECD1;
            background-color: white;
        }

        .out-content-box {
            background-color: #C1EFC6;
            padding: 20px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 100%;
            margin-top: 20px;
            overflow: auto;
        }

        .content-box {
            background-color: #ececec;
            padding: 20px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .calendar-attendance-missing {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
        }

        .calendar,
        .attendance,
        .missing-assignments {
            flex: 1;
            min-width: 300px;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 10px;
            background-color: #f7f7f7;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .calendar {
    margin-right: 10px;
    max-width: 100%;
    display: flex;
    flex-direction: column;
    height: 100%;
}


        .missing-assignments {
            margin-left: 20px;
        }

        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            max-width: 800px;
            margin-bottom: 20px;
        }

        .calendar-header button {
            font-size: 14px;
            padding: 5px;
        }

        .calendar-header h2 {
            font-size: 18px;
            margin: 0;
        }

        .calendar-table {
            width: 100%;
            max-width: 800px;
            border-collapse: collapse;
            min-height: 400px;
        }

        .calendar-table th,
        .calendar-table td {
            border: 1px solid #c6d1c8;
            padding: 5px;
            
            text-align: center;
            font-size: 12px;
        }

        .calendar-table th {
            background-color: #414f43;
            color: white;
        }

        .calendar-table td {
            background-color: white;
            
        }

        .attendance h1 {
            margin-bottom: 10px;
        }

        .attendance-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 20px 0;
            width: 100%;
            max-width: 800px;
        }

        .attendance-bar div {
            flex: 1;
            padding: 10px;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            text-align: center;
        }

        .attendance-bar .present {
            background-color: lightblue;
        }

        .attendance-bar .absent {
            background-color: pink;
        }

        .attendance-bar .late {
            background-color: orange;
        }

        .attendance-bar label {
            display: block;
            margin-bottom: 5px;
        }

        .piechart {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            background-image: conic-gradient(
                pink 0% 20%,
                lightblue 20% 60%,
                orange 60% 100%
            );
            margin: 0 auto;
        }

        .missing-assignments {
            background-color: #f7f7f7;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .missing-assignments h1 {
            margin-bottom: 20px;
        }

        .missing-assignments-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .missing-assignments-list li {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .missing-assignments-list li:last-child {
            border-bottom: none;
        }

        @media (max-width: 768px) {
            .calendar-attendance-missing {
                flex-direction: column;
            }
        }

        .attendance-details {
            margin-top: 20px;
            text-align: left;
        }

        .details-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .details-table th,
        .details-table td {
            border: 1px solid #c6d1c8;
            padding: 10px;
            text-align: left;
        }

        .details-table th {
            background-color: #414f43;
            color: white;
        }

        .details-table td {
            background-color: white;
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
                        <img src="image/Profile.png" alt="Profile Icon"> Profile
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
            <div class="option-bar">
                <div>
                    <label for="quarter">Quarter:</label>
                    <select id="quarter">
                        <option value="Q1">2023-2024 Q1</option>
                        <option value="Q2">2023-2024 Q2</option>
                        <option value="Q3">2023-2024 Q3</option>
                        <option value="Q4">2023-2024 Q4</option>
                    </select>
                </div>
                <div>
                    <label for="subject">Subject:</label>
                    <select id="subject">
                        <option value="Math">Math</option>
                        <option value="Science">Science</option>
                        <option value="History">History</option>
                        <option value="English">English</option>
                    </select>
                </div>
            </div>

            <div class="out-content-box">
                <div class="content-box">
                    <div class="calendar-attendance-missing">
                        <div class="calendar">
                            <div class="calendar-header">
                                <button onclick="prevMonth()">Previous</button>
                                <h2 id="monthYear"></h2>
                                <button onclick="nextMonth()">Next</button>
                            </div>
                            <table class="calendar-table">
                                <thead>
                                    <tr>
                                        <th>Sunday</th>
                                        <th>Monday</th>
                                        <th>Tuesday</th>
                                        <th>Wednesday</th>
                                        <th>Thursday</th>
                                        <th>Friday</th>
                                        <th>Saturday</th>
                                    </tr>
                                </thead>
                                <tbody id="calendarBody">
                                    <!-- Days will be injected here by JavaScript -->
                                </tbody>
                            </table>
                        </div>
                        <div class="attendance">
                            <h1>Attendance</h1>
                            <p>Attendance Summary</p>
                            <div class="attendance-bar">
                                <div class="present">
                                    <label for="present">Present</label>
                                    <span>28</span>
                                </div>
                                <div class="absent">
                                    <label for="absent">Absent</label>
                                    <span>2</span>
                                </div>
                                <div class="late">
                                    <label for="late">Late</label>
                                    <span>0</span>
                                </div>
                            </div>
                            <div class="piechart"></div>
                            <h3>Your Attendance is Good</h3>
                            <div class="attendance-details">
                                <h3>Attendance Details</h3>
                                <table class="details-table">
                                    <thead>
                                        <tr>
                                            <th>Details</th>
                                            <th>Value</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Total Classes</td>
                                            <td>30</td>
                                        </tr>
                                        <tr>
                                            <td>Classes Attended</td>
                                            <td>28</td>
                                        </tr>
                                        <tr>
                                            <td>Classes Missed</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>Percentage Attendance</td>
                                            <td>93.3%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="missing-assignments">
                            <h1>Missing Assignments</h1>
                            <ul class="missing-assignments-list">
                                <li>Assignment 1 - Due: Aug 20</li>
                                <li>Assignment 2 - Due: Aug 25</li>
                                <li>Assignment 3 - Due: Aug 30</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let currentYear = 2024;
        let currentMonth = new Date().getMonth(); // Start with the current month

        function renderCalendar() {
            const monthNames = [
                "January", "February", "March", "April", "May", "June",
                "July", "August", "September", "October", "November", "December"
            ];

            const firstDay = new Date(currentYear, currentMonth, 1).getDay();
            const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();

            const calendarBody = document.getElementById('calendarBody');
            calendarBody.innerHTML = '';

            document.getElementById('monthYear').textContent =
                `${monthNames[currentMonth]} ${currentYear}`;

            let date = 1;
            for (let i = 0; i < 6; i++) {
                const row = document.createElement('tr');

                for (let j = 0; j < 7; j++) {
                    const cell = document.createElement('td');

                    if (i === 0 && j < firstDay) {
                        cell.textContent = '';
                    } else if (date > daysInMonth) {
                        break;
                    } else {
                        cell.textContent = date;
                        date++;
                    }
                    row.appendChild(cell);
                }

                calendarBody.appendChild(row);

                if (date > daysInMonth) {
                    break;
                }
            }
        }

        function prevMonth() {
            currentMonth--;
            if (currentMonth < 0) {
                currentMonth = 11;
                currentYear--;
            }
            renderCalendar();
        }

        function nextMonth() {
            currentMonth++;
            if (currentMonth > 11) {
                currentMonth = 0;
                currentYear++;
            }
            renderCalendar();
        }

        window.onload = renderCalendar;
    </script>
</body>

</html>

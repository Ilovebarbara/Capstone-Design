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
            flex-direction: column; 
            align-items: center;
            padding: 20px;
        }
        .dashboard-heading {
            font-size: 40px;
            font-weight: bold;
            margin-bottom: 20px; 
            text-align: center;
        }
        .content-box {
            background-color: #C1EFC6; 
            padding: 20px;
            width: 90%;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); 
            display: flex;
            flex-wrap: wrap;
            gap: 20px; 
        }
        .content-box button {
            background-color: #9FD1A4; 
            border: none;
            border-radius: 10px;
            padding: 20px;
            width: calc(50% - 20px); 
            box-sizing: border-box;
            text-align: center; 
            cursor: pointer; 
            transition: background-color 0.3s ease;
        }
        .content-box button:hover {
            background-color: #84cb8c; 
        }
        .content-box img {
            width: 50px; 
            height: 50px;
            display: block;
            margin: 0 auto; 
        }
        .content-box p {
            margin: 10px 0 0; 
            font-size: 16px;
        }
        .content-box .number {
            font-size: 24px; 
            font-weight: bold;
        }
        .content-box .label {
            font-size: 14px; 
            color: #555;
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
            <h1 class="dashboard-heading">Dashboard</h1>
            <div class="content-box">
                <button>
                    <img src="image/class.png" alt="Class Icon">
                    <p class="number">10</p>
                    <p class="label">Class</p>
                </button>
                <button>
                    <img src="image/School Year.png" alt="School Year Icon">
                    <p class="number">2</p>
                    <p class="label">School Year/Quarter</p>
                </button>
                <button>
                    <img src="image/Subject.png" alt="Subject Icon">
                    <p class="number">8</p>
                    <p class="label">Subjects</p>
                </button>
                <button>
                    <img src="image/Class Per Subject.png" alt="Class per Subject Icon">
                    <p class="number">15</p>
                    <p class="label">Class per Subject</p>
                </button>
                <button>
                    <img src="image/Student.png" alt="Student Icon">
                    <p class="number">70</p>
                    <p class="label">Student</p>
                </button>
                <button>
                    <img src="image/Teacher.png" alt="Teacher Icon">
                    <p class="number">20</p>
                    <p class="label">Teacher</p>
                </button>
            </div>
        </div>
    </div>
</body>
</html>

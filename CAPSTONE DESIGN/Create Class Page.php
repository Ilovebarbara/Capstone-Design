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
            width: 500%;
            height: auto; 
            border-radius: 20px;
            text-align: relative;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); 
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: flex-start; 
        }
        .inner-content-box {
            background-color: #CEECD1;
            padding: 20px;
            border-radius: 25px;
            width: 40%;
            height: auto; 
            position: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
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
        .inner-content-box .form-group {
            display: flex;
            flex-direction: row;
            align-items: center;
            width: 100%;
            margin-bottom: 20px;
        }
        .inner-content-box label {
            margin-right: 10px;
            font-weight: bold;
            color: #333;
            width: 100px; /* Adjust the width as needed */
            text-align: right;
        }
        .inner-content-box input {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 100%;
            max-width: 300px; 
        }
        .inner-content-box .button-group {
            display: flex;
            justify-content: center;
            width: 100%;
        }
        .inner-content-box button {
            padding: 10px;
            width: 30%;
            border-radius: 5px;
            border: 1px solid #6DA36C;
            background-color: #6DA36C;
            color: white;
            cursor: pointer;
            margin: 0 5px; 
        }
        .show-entries {
            margin-top: 20px;
            margin-bottom: 20px;
            width: 100%;
            display: flex;
            align-items: center; 
        }
        .show-entries label {
            margin-right: 10px;
            font-weight: bold;
        }
        .show-entries select {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .table_component {
            width: 100%;
        }
        .table_component table {
            border: 2px solid #070707;
            width: 100%;
            table-layout: auto;
            border-collapse: collapse;
            text-align: left;
        }
        .table_component caption {
            caption-side: top;
            text-align: left;
        }
        .table_component th, .table_component td {
            border: 2px solid #0a0a0a;
            padding: 10px;
        }
        .table_component th {
            background-color: #e1e5e9;
            color: #000000;
        }
        .table_component td {
            background-color: #ffffff;
            color: #000000;
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
                <div class="inner-content-box">
                    <div class="form-group">
                        <label for="school-year">School Year:</label>
                        <input type="text" id="school-year" name="school-year">
                    </div>
                    <div class="form-group">
                        <label for="quarter">Quarter:</label>
                        <input type="text" id="quarter" name="quarter">
                    </div>
                    <div class="button-group">
                        <button type="button">Reset</button>
                        <button type="button">Add</button>
                    </div>
                </div>
                <div class="show-entries">
                    <label for="show-entries">Show entries:</label>
                    <select id="show-entries">
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
                <div class="table_component">
                    <table>
                        <thead>
                            <tr>
                                <th>Header 1</th>
                                <th>Header 2</th>
                                <th>Header 3</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Science</td>
                                <td>
                                    <button class="action-button edit-button">Edit</button>
                                    <button class="action-button delete-button">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Mathematics</td>
                                <td>
                                    <button class="action-button edit-button">Edit</button>
                                    <button class="action-button delete-button">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>English</td>
                                <td>
                                    <button class="action-button edit-button">Edit</button>
                                    <button class="action-button delete-button">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Filipino</td>
                                <td>
                                    <button class="action-button edit-button">Edit</button>
                                    <button class="action-button delete-button">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

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
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .content-box {
            background-color: #C1EFC6; 
            padding: 20px;
            height: 500px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); 
            width: 100%;
            position: relative;
        }
        .class-option-bar {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }
        .class-option-bar select {
            padding: 10px;
            width: 200px;
            border-radius: 5px;
            border: 1px solid #ccc;
            cursor: pointer;
            background-color: white;
        }
        .class-option-bar label {
            margin-right: 10px;
            font-weight: bold;
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
        .student-list {
            text-align: left;
        }
        table.minimalistBlack {
  border: 3px solid #000000;
  width: 100%;
  background-color: #f7f5f5;
  text-align: left;
  border-collapse: collapse;
}
table.minimalistBlack td, table.minimalistBlack th {
  border: 1px solid #000000;
  padding: 5px 10px;
}
table.minimalistBlack tbody td {
  font-size: 13px;
}
table.minimalistBlack thead {
  background: #CFCFCF;
  background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
  background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
  background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
  border-bottom: 3px solid #000000;
}
table.minimalistBlack thead th {
  font-size: 15px;
  font-weight: bold;
  color: #000000;
  text-align: left;
}
table.minimalistBlack tfoot {
  font-size: 14px;
  font-weight: bold;
  color: #000000;
  border-top: 3px solid #000000;
}
table.minimalistBlack tfoot td {
  font-size: 14px;
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
                <div class="class-option-bar">
                    <label for="classSelect">Class:</label>
                    <select id="classSelect" name="classSelect">
                        <option value="class1">Class 1</option>
                        <option value="class2">Class 2</option>
                        <option value="class3">Class 3</option>
                    </select>
                </div>
                <div class="student-list">
                    <p>List of the Students</p>
                    <table class="minimalistBlack">
                        <thead>
                        <tr>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Class</th>
                        <th>Email</th>
                        </tr>
                        </thead>
                        <tfoot>
                        </tfoot>
                        <tbody>
                        <tr>
                        <td>cell1_1</td>
                        <td>cell2_1</td>
                        <td>cell3_1</td>
                        <td></td>
                        </tr>
                        <tr>
                        <td>cell1_2</td>
                        <td>cell2_2</td>
                        <td>cell3_2</td>
                        <td></td>
                        </tr>
                        <tr>
                            <td>cell1_1</td>
                            <td>cell2_1</td>
                            <td>cell3_1</td>
                            <td></td>
                            </tr>
                            <tr>
                            <td>cell1_2</td>
                            <td>cell2_2</td>
                            <td>cell3_2</td>
                            <td></td>
                            </tr>
                            <tr>
                                <td>cell1_1</td>
                                <td>cell2_1</td>
                                <td>cell3_1</td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>cell1_2</td>
                                <td>cell2_2</td>
                                <td>cell3_2</td>
                                <td></td>
                                </tr>
                                <tr>
                                    <td>cell1_1</td>
                                    <td>cell2_1</td>
                                    <td>cell3_1</td>
                                    <td></td>
                                    </tr>
                                    <tr>
                                    <td>cell1_2</td>
                                    <td>cell2_2</td>
                                    <td>cell3_2</td>
                                    <td></td>
                                    </tr>
                        </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

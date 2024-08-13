<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Header</title>
    <style>
       html,
body {
  background: #F3FFF2;
  height: 100%;
  margin: 0;
  font-family: Arial, sans-serif;
  display: flex;
  flex-direction: column;
}

header {
  background: #6DA36C;
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
  background: #CEECD1;
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
  background: #9FD1A4;
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
 
  padding: 20px;
  position: relative;
}

.class-option-bar {
  margin-bottom: 20px;
  align-self: flex-start;
  
}

.class-option-bar select,
.option-bar select {
  background: white;
  padding: 10px;
  width: 200px;
  border-radius: 5px;
  border: 1px solid #ccc;
  cursor: pointer;
}

.class-option-bar label {
  margin-right: 10px;
  font-weight: bold;
}

.content-box {
  background: #C1EFC6;
  padding: 20px;
  border-radius: 20px;
  text-align: center;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  width: 100%;
  height: 500px;
  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: center;
 
  align-items: center;
 
}

.control-row {
  display: flex;
  align-items: center;
  gap: 20px;
  
  margin-bottom: 20px;
  
}

.List {
  background: #FCFAFA;
  padding: 10px 20px;
  color: rgb(10, 8, 8);
  border: none;
  border-radius: 5px;
  cursor: pointer;
  width: 200px;
}

.Edit {
  background: #FCFAFA;
  padding: 10px 20px;
  margin-top: 20px;
  color: rgb(3, 2, 2);
  border-radius: 10px;
  cursor: pointer;
  width: 200px;
  align-self: flex-start;
  
}

.Edit:hover {
  background: #6DA36C;
}

.option-bar {
  display: flex;
  align-items: center;
}

.option-bar label {
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

table.minimalistBlack {
  background: #f8f8f8;
  border: 2px solid #000000;
  width: 100%;
  text-align: left;
  border-collapse: collapse;
}

table.minimalistBlack td,
table.minimalistBlack th {
  border: 2px solid #000000;
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
  border-top: 1px solid #000000;
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
            <div class="class-option-bar">
                <label for="classSelect">Class:</label>
                <select id="classSelect" name="classSelect">
                    <option value="class1">Class 1</option>
                    <option value="class2">Class 2</option>
                    <option value="class3">Class 3</option>
                </select>
            </div>
            <div class="content-box">
                <div class="control-row">
                    <div class="option-bar">
                        <label for="optionSelect1">Class</label>
                        <select id="optionSelect1" name="optionSelect1">
                            <option value="option1">7-Sol Mathematics</option>
                            <option value="option2">Option 2</option>
                            <option value="option3">Option 3</option>
                        </select>
                    </div>
                    <div class="option-bar">
                        <select id="optionSelect2" name="optionSelect2">
                            <option value="option1">Date 10-07-2024</option>
                            <option value="option2">Option 2</option>
                            <option value="option3">Option 3</option>
                        </select>
                    </div>
                </div>
                <table class="minimalistBlack">
                    <thead>
                        <tr>
                            <th>Student No.</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Attendance</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>cell1_1</td>
                            <td>cell2_1</td>
                            <td>cell3_1</td>
                            <td>Present</td>
                        </tr>
                        <tr>
                            <td>cell1_1</td>
                            <td>cell2_1</td>
                            <td>cell3_1</td>
                            <td>Present</td>
                        </tr>
                        <tr>
                            <td>cell1_1</td>
                            <td>cell2_1</td>
                            <td>cell3_1</td>
                            <td>Present</td>
                        </tr>
                        <tr>
                            <td>cell1_1</td>
                            <td>cell2_1</td>
                            <td>cell3_1</td>
                            <td>Present</td>
                        </tr>
                        <tr>
                            <td>cell1_1</td>
                            <td>cell2_1</td>
                            <td>cell3_1</td>
                            <td>Present</td>
                        </tr>
                        <tr>
                            <td>cell1_1</td>
                            <td>cell2_1</td>
                            <td>cell3_1</td>
                            <td>Present</td>
                        </tr>
                        <tr>
                            <td>cell1_1</td>
                            <td>cell2_1</td>
                            <td>cell3_1</td>
                            <td>Present</td>
                        </tr>
                        <tr>
                            <td>cell1_1</td>
                            <td>cell2_1</td>
                            <td>cell3_1</td>
                            <td>Present</td>
                        </tr>
                        <tr>
                            <td>cell1_1</td>
                            <td>cell2_1</td>
                            <td>cell3_1</td>
                            <td>Present</td>
                        </tr>
                        <tr>
                            <td>cell1_1</td>
                            <td>cell2_1</td>
                            <td>cell3_1</td>
                            <td>Present</td>
                        </tr>
                        <tr>
                            <td>cell1_1</td>
                            <td>cell2_1</td>
                            <td>cell3_1</td>
                            <td>Present</td>
                        </tr>
                        <tr>
                            <td>cell1_1</td>
                            <td>cell2_1</td>
                            <td>cell3_1</td>
                            <td>Present</td>
                        </tr>
                        <tr>
                            <td>cell1_1</td>
                            <td>cell2_1</td>
                            <td>cell3_1</td>
                            <td>Present</td>
                        </tr>
                    </tbody>
                </table>
                <button class="Edit">Edit</button>
            </div>
        </div>
    </div>
</body>
</html>

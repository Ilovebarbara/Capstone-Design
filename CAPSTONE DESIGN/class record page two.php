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
  justify-content: center;
  align-items: center;
  padding: 20px;
  position: relative;
}

.content-box {
  background: #C1EFC6;
  padding: 50px;
  height: 400px;
  border-radius: 20px;
  text-align: center;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  position: relative;
  width: 100%;
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

.form-group {
  position: absolute;
  top: 20px;
  right: 20px;
  display: flex;
  align-items: center;
}

.form-group label {
  margin-right: 10px;
  font-weight: bold;
}

.form-group select {
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  width: 200px;
}

table.minimalistBlack {
  border: 2px solid #000000;
  width: 100%;
  text-align: left;
  border-collapse: collapse;
  margin-top: 50px;
}

table.minimalistBlack td,
table.minimalistBlack th {
  background: #efefef;
  border: 2px solid #000000;
  padding: 1px 1px;
}

table.minimalistBlack tbody td {
  font-size: 13px;
}

table.minimalistBlack thead {
  background: #ebe9e9;
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

table.minimalistBlack thead th[colspan] {
  text-align: center;
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

.edit-score-btn {
  background: #a9aea9;
  border: none;
  color: rgb(6, 5, 5);
  padding: 10px 20px;
  font-size: 12px;
  width: 140PX;
  border-radius: 0;
  margin-top: 30px;
  cursor: pointer;
  margin-left: -550PX;
}

.edit-score-btn:hover {
  background: #90cfa2;
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
                <div class="form-group">
                    <label for="classSelect">Assessment</label>
                    <select id="classSelect" name="classSelect">
                        <option value="class1">Performance task</option>
                        <option value="class2">Class 2</option>
                        <option value="class3">Class 3</option>
                    </select>
                </div>
                <table class="minimalistBlack">
                    <thead>
                        <tr>
                            <th colspan="13">Performance Task</th>
                        </tr>
                    </thead>
                   
                    <tbody>
                        <tr>
                            <td colspan="3">Category</td>
                            <td>A1</td>
                            <td>A2</td>
                            <td>A3</td>
                            <td>A4</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Total</td>
                            <td>PS</td>
                            <td>WS</td>
                           
                        </tr>
                        <tr>
                            <td colspan="3">Highest Possible Score</td>
                            <td></td>
                            <td></td>
                            <td>cell6_1</td>
                            <td>cell7_1</td>
                            <td></td>
                            <td>cell8_1</td>
                            <td>cell9_1</td>
                            <td>cell10_1</td>
                            <td>cell11_1</td>
                            <td>cell12_1</td>
                            
                        </tr>
                        <tr>
                            <td>Student ID</td>
                            <td>Last Name</td>
                            <td>First Name</td>
                            <td>cell4_3</td>
                            <td>cell5_3</td>
                            <td>cell6_3</td>
                            <td>cell7_3</td>
                            <td></td>
                            <td>cell8_3</td>
                            <td>cell9_3</td>
                            <td>cell10_3</td>
                            <td>cell11_3</td>
                            <td>cell12_3</td>
                            
                        </tr>
                        <tr>
                            <td>cell1_4</td>
                            <td>cell2_4</td>
                            <td>cell3_4</td>
                            <td>cell4_4</td>
                            <td>cell5_4</td>
                            <td>cell6_4</td>
                            <td>cell7_4</td>
                            <td>cell10_1</td>
                            <td>cell8_4</td>
                            <td>cell9_4</td>
                            <td>cell10_4</td>
                            <td>cell11_4</td>
                            <td>cell12_4</td>
                          
                        </tr>

                        <tr>
                            <td>cell1_4</td>
                            <td>cell2_4</td>
                            <td>cell3_4</td>
                            <td>cell4_4</td>
                            <td>cell5_4</td>
                            <td>cell6_4</td>
                            <td>cell7_4</td>
                            <td>cell10_1</td>
                            <td>cell8_4</td>
                            <td>cell9_4</td>
                            <td>cell10_4</td>
                            <td>cell11_4</td>
                            <td>cell12_4</td>
                          
                        </tr>
                        <tr>
                            <td>cell1_4</td>
                            <td>cell2_4</td>
                            <td>cell3_4</td>
                            <td>cell4_4</td>
                            <td>cell5_4</td>
                            <td>cell6_4</td>
                            <td>cell7_4</td>
                            <td>cell10_1</td>
                            <td>cell8_4</td>
                            <td>cell9_4</td>
                            <td>cell10_4</td>
                            <td>cell11_4</td>
                            <td>cell12_4</td>
                          
                        </tr>
                        <tr>
                            <td>cell1_4</td>
                            <td>cell2_4</td>
                            <td>cell3_4</td>
                            <td>cell4_4</td>
                            <td>cell5_4</td>
                            <td>cell6_4</td>
                            <td>cell7_4</td>
                            <td>cell10_1</td>
                            <td>cell8_4</td>
                            <td>cell9_4</td>
                            <td>cell10_4</td>
                            <td>cell11_4</td>
                            <td>cell12_4</td>
                          
                        </tr>
                        <tr>
                            <td>cell1_4</td>
                            <td>cell2_4</td>
                            <td>cell3_4</td>
                            <td>cell4_4</td>
                            <td>cell5_4</td>
                            <td>cell6_4</td>
                            <td>cell7_4</td>
                            <td>cell10_1</td>
                            <td>cell8_4</td>
                            <td>cell9_4</td>
                            <td>cell10_4</td>
                            <td>cell11_4</td>
                            <td>cell12_4</td>
                          
                        </tr>
                        <tr>
                            <td>cell1_4</td>
                            <td>cell2_4</td>
                            <td>cell3_4</td>
                            <td>cell4_4</td>
                            <td>cell5_4</td>
                            <td>cell6_4</td>
                            <td>cell7_4</td>
                            <td>cell10_1</td>
                            <td>cell8_4</td>
                            <td>cell9_4</td>
                            <td>cell10_4</td>
                            <td>cell11_4</td>
                            <td>cell12_4</td>
                          
                        </tr>
                        <tr>
                            <td>cell1_4</td>
                            <td>cell2_4</td>
                            <td>cell3_4</td>
                            <td>cell4_4</td>
                            <td>cell5_4</td>
                            <td>cell6_4</td>
                            <td>cell7_4</td>
                            <td>cell10_1</td>
                            <td>cell8_4</td>
                            <td>cell9_4</td>
                            <td>cell10_4</td>
                            <td>cell11_4</td>
                            <td>cell12_4</td>
                          
                        </tr>
                        <tr>
                            <td>cell1_4</td>
                            <td>cell2_4</td>
                            <td>cell3_4</td>
                            <td>cell4_4</td>
                            <td>cell5_4</td>
                            <td>cell6_4</td>
                            <td>cell7_4</td>
                            <td>cell10_1</td>
                            <td>cell8_4</td>
                            <td>cell9_4</td>
                            <td>cell10_4</td>
                            <td>cell11_4</td>
                            <td>cell12_4</td>
                          
                        </tr>
                        <tr>
                            <td>cell1_4</td>
                            <td>cell2_4</td>
                            <td>cell3_4</td>
                            <td>cell4_4</td>
                            <td>cell5_4</td>
                            <td>cell6_4</td>
                            <td>cell7_4</td>
                            <td>cell10_1</td>
                            <td>cell8_4</td>
                            <td>cell9_4</td>
                            <td>cell10_4</td>
                            <td>cell11_4</td>
                            <td>cell12_4</td>
                          
                        </tr>
                        <tr>
                            <td>cell1_4</td>
                            <td>cell2_4</td>
                            <td>cell3_4</td>
                            <td>cell4_4</td>
                            <td>cell5_4</td>
                            <td>cell6_4</td>
                            <td>cell7_4</td>
                            <td>cell10_1</td>
                            <td>cell8_4</td>
                            <td>cell9_4</td>
                            <td>cell10_4</td>
                            <td>cell11_4</td>
                            <td>cell12_4</td>
                          
                        </tr>

                    </tbody>
                </table>
                
                <button class="edit-score-btn">Edit Score</button>
           </div>     
        </div>
    </div>
</body>
</html>

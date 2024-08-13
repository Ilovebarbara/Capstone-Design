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
.List:hover {
    background-color: #6DA36C;
    color: white;
    border-radius: 5px;
    padding: 10px;
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
.content-box {
    background-color: #C1EFC6;
    padding: 20px;
    border-radius: 20px;
    text-align: center;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    width: 100%;
    height: 500px;
    position: relative;
}
.control-row {
    display: flex;
    align-items: center;
    margin-top: 20px;
    gap: 20px;
}
.List {
    padding: 10px 20px;
    background-color: #FCFAFA;
    color: rgb(10, 8, 8);
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 200px;
}
.Save {
    padding: 10px 20px;
    margin-left: -550px;
    margin-top: 10px;
    background-color: #FCFAFA;
    color: rgb(3, 2, 2);
    border-radius: 10px;
    cursor: pointer;
    width: 200px;
}
.Save:hover {
    background-color: #6DA36C;
}
.option-bar select {
    padding: 10px;
    width: 200px;
    
    border-radius: 5px;
    border: 1px solid #ccc;
    cursor: pointer;
    background-color: white;
}
.table-container {
    margin-top: 20px;
    overflow-x: auto;
}
table {
    width: 100%;
    padding: 1px;
    border-collapse: collapse;
    margin-top: 20px;
}
table, th, td {
    border: 1px solid #0b0b0b;
    padding: 2px;
    background-color: #FCFAFA;
    text-align: left;
}
th {
    background-color: #a7aca7;
}
.attendance-checkbox {
    margin-right: 10px;
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
                <label for="classSelect">Class</label>
                <select id="classSelect" name="classSelect">
                    <option value="class1">Class 1</option>
                    <option value="class2">Class 2</option>
                    <option value="class3">Class 3</option>
                </select>
            </div>
            <div class="content-box">
                <div class="control-row">
                    <button class="List">List</button>

                    <div class="option-bar">
                        <label>class</label>
                        <select id="optionSelect" name="optionSelect">
                            <option value="option1">Option 1</option>
                            <option value="option2">Option 2</option>
                            <option value="option3">Option 3</option>
                        </select>
                    </div>
                    <div class="option-bar">
                        <select id="optionSelect" name="optionSelect">
                            <option value="option1">Option 1</option>
                            <option value="option2">Option 2</option>
                            <option value="option3">Option 3</option>
                        </select>
                    </div>
                </div>
                <div class="table-container">
                    <table>
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
                                <td>Row 1, Col 1</td>
                                <td>Row 1, Col 2</td>
                                <td>Row 1, Col 3</td>
                                <td>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="present"> Present
                                    </label>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="absent"> Absent
                                    </label>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="late"> Late
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>Row 1, Col 1</td>
                                <td>Row 1, Col 2</td>
                                <td>Row 1, Col 3</td>
                                <td>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="present"> Present
                                    </label>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="absent"> Absent
                                    </label>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="late"> Late
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>Row 1, Col 1</td>
                                <td>Row 1, Col 2</td>
                                <td>Row 1, Col 3</td>
                                <td>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="present"> Present
                                    </label>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="absent"> Absent
                                    </label>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="late"> Late
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>Row 1, Col 1</td>
                                <td>Row 1, Col 2</td>
                                <td>Row 1, Col 3</td>
                                <td>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="present"> Present
                                    </label>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="absent"> Absent
                                    </label>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="late"> Late
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>Row 1, Col 1</td>
                                <td>Row 1, Col 2</td>
                                <td>Row 1, Col 3</td>
                                <td>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="present"> Present
                                    </label>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="absent"> Absent
                                    </label>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="late"> Late
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>Row 1, Col 1</td>
                                <td>Row 1, Col 2</td>
                                <td>Row 1, Col 3</td>
                                <td>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="present"> Present
                                    </label>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="absent"> Absent
                                    </label>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="late"> Late
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>Row 1, Col 1</td>
                                <td>Row 1, Col 2</td>
                                <td>Row 1, Col 3</td>
                                <td>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="present"> Present
                                    </label>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="absent"> Absent
                                    </label>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="late"> Late
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>Row 1, Col 1</td>
                                <td>Row 1, Col 2</td>
                                <td>Row 1, Col 3</td>
                                <td>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="present"> Present
                                    </label>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="absent"> Absent
                                    </label>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="late"> Late
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>Row 1, Col 1</td>
                                <td>Row 1, Col 2</td>
                                <td>Row 1, Col 3</td>
                                <td>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="present"> Present
                                    </label>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="absent"> Absent
                                    </label>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="late"> Late
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>Row 1, Col 1</td>
                                <td>Row 1, Col 2</td>
                                <td>Row 1, Col 3</td>
                                <td>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="present"> Present
                                    </label>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="absent"> Absent
                                    </label>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="late"> Late
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>Row 1, Col 1</td>
                                <td>Row 1, Col 2</td>
                                <td>Row 1, Col 3</td>
                                <td>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="present"> Present
                                    </label>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="absent"> Absent
                                    </label>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="late"> Late
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>Row 1, Col 1</td>
                                <td>Row 1, Col 2</td>
                                <td>Row 1, Col 3</td>
                                <td>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="present"> Present
                                    </label>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="absent"> Absent
                                    </label>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="late"> Late
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>Row 1, Col 1</td>
                                <td>Row 1, Col 2</td>
                                <td>Row 1, Col 3</td>
                                <td>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="present"> Present
                                    </label>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="absent"> Absent
                                    </label>
                                    <label class="attendance-checkbox">
                                        <input type="checkbox" name="attendance1" value="late"> Late
                                    </label>
                                </td>
                            </tr>
                            <!-- Additional rows... -->
                        </tbody>
                    </table>
                    <button class="Save">Save</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

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
  align-items: flex-start;
  padding: 20px;
  position: relative;
}

.content-area select {
  background: white;
  position: absolute;
  top: 20px;
  right: 20px;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  width: 200px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.content-box {
  background: #C1EFC6;
  padding: 50px;
  width: 1500px;
  border-radius: 20px;
  text-align: center;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  margin-top: 60px;
}

.content-box h2 {
  margin-bottom: 20px;
}

.form-row {
  display: flex;
  justify-content: space-between;
  margin-bottom: 15px;
}

.form-row input {
  flex: 1;
  padding: 10px;
  height: 200px;
  width: 50px;
  border-radius: 5px;
  border: 1px solid #ccc;
  margin-right: 100px;
  margin-top: 50px;
}

.form-row input:last-child {
  margin-right: 0;
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
            <select id="classSelect" name="classSelect">
                <option value="class1">Class 1</option>
                <option value="class2">Class 2</option>
                <option value="class3">Class 3</option>
            </select>
            <div class="content-box">
                <div class="form-row">
                    <input type="text" id="textbox1" name="textbox1" placeholder="Grade 7">
                    <input type="text" id="textbox2" name="textbox2" placeholder="Grade 8">
                </div>
                <div class="form-row">
                    <input type="text" id="textbox3" name="textbox3" placeholder="Grade 9">
                    <input type="text" id="textbox4" name="textbox4" placeholder="Grade 10">
                </div>
            </div>
        </div>
    </div>
</body>
</html>

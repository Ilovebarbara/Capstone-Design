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

.List:hover {
  background: #6DA36C;
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
}

.control-row {
  display: flex;
  align-items: center;
  margin-top: 20px;
  gap: 20px;
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

.Save {
  background: #FCFAFA;
  padding: 10px 20px;
  margin-left: -550px;
  margin-top: 10px;
  color: rgb(3, 2, 2);
  border-radius: 10px;
  cursor: pointer;
  width: 200px;
}

.Save:hover {
  background: #6DA36C;
}

.option-bar select {
  background: white;
  padding: 10px;
  width: 200px;
  border-radius: 5px;
  border: 1px solid #ccc;
  cursor: pointer;
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

table,
th,
td {
  background: #FCFAFA;
  border: 1px solid #0b0b0b;
  padding: 2px;
  text-align: left;
}

th {
  background: #a7aca7;
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
               
                <form action="#">
                    <label for="subject">Subject:</label>
                    <input type="text" id="subject" name="subject" required>
                    <input type="submit" value="Submit">
                </form>
            </div>
            
        </div>
    </div>
</body>
</html>

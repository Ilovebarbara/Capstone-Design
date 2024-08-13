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
  padding: 40px;
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
  justify-content: center;
  align-items: center;
  padding: 30px;
}

.content-box {
  background: #C1EFC6;
  padding: 200px;
  width: 500px;
  border-radius: 20px;
  text-align: center;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
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

.option-bar {
  display: flex;
  align-items: center;
  margin-bottom: 20px;
}

.option-bar label {
  margin-right: 10px;
  font-weight: bold;
  color: #333;
}

.option-bar select {
  padding: 1px;
  font-size: 16px;
  margin-right: 100px;
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
                <label for="quarter">Quarter:</label>
                <select id="quarter" name="quarter">
                    <option value="Q1">Q1</option>
                    <option value="Q2">Q2</option>
                    <option value="Q3">Q3</option>
                    <option value="Q4">Q4</option>
                </select>
                <label for="subject">Subject:</label>
                <select id="subject" name="subject">
                    <option value="Math">Math</option>
                    <option value="Science">Science</option>
                    <option value="History">History</option>
                    <option value="English">English</option>
                </select>
            </div>
            <div class="content-box">
                <h2>Dashboard</h2>
                <p>This is the Dashboard area.</p>
            </div>
        </div>
    </div>
</body>
</html>

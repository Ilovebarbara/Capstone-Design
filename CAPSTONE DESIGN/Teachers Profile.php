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
            position: relative;
        }
        .content-area p {
            font-size: 40px;
            align-self: flex-start;
            margin-left: 20px;
        }
        .content-box {
            background-color: #C1EFC6;
            padding: 10%;
            width: 80%;
            height: 50%;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .form-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
        }
        .form-group {
            flex: 1;
            margin-right: 20px;
            text-align: left;
        }
        .form-group:last-child {
            margin-right: 0;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input {
            width: calc(-1% - -250px); 
            padding: 5px;
            border: 1px solid #090707;
            border-radius: 5px;
            box-sizing: border-box; 
        }
        .form-group.input-address {
            width: 0%; 
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
        .profile-settings {
            text-align: left;
            margin-top: 10%;
            font-size: 16px; 
            font-weight: normal; 
        }

        .change-password-container {
            text-align: left; 
            margin-top: 10px; 
        }

        .change-password {
            background-color: #66B165;
            color: rgb(13, 11, 11);
            padding: 10px 20px;
            width: 200px;
            border: none;
            border-radius: 0;
            cursor: pointer;
        }
        .change-password:hover {
            background-color: #579a58;
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
        <p>Profile</p>
        <div class="content-box">
            <form>
                <div class="form-row">
                    <div class="form-group">
                        <label for="username">Name</label>
                        <input type="text" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" id="phone" name="phone">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group input-address">
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address">
                    </div>
                </div>
            </form>
            <p class="profile-settings">Profile Settings</p>
            <div class="change-password-container">
                <button class="change-password">Change Password</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>

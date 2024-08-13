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
            padding: 50px; 
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); 
            position: relative; 
        }
        .content-box h2 {
            margin-bottom: 10px;
        }
        .profile-section {
            max-width: 800px; 
            margin: auto; 
            display: flex;
            flex-wrap: wrap; 
            justify-content: space-between; 
            padding: 20px; 
            background-color: #C1EFC6; 
            border-radius: 10px; 
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); 
        }
        .profile-section .half-row {
            width: 100%;
            display: flex;
            justify-content: space-between;
            background-color: #C1EFC6;
            margin-bottom: 20px;
        }
        .profile-section .half-row .input-group {
            width: calc(50% - 10px); 
            box-sizing: border-box; 
        }
        .profile-section label {
            margin-bottom: 10px;
            font-weight: bold;
            text-align: left;
            width: 100%; 
            display: block;
        }
        .profile-section input[type="text"],
        .profile-section input[type="email"] {
            padding: 10px;
            margin-bottom: 20px;
            width: 90%; 
            box-sizing: border-box; 
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }
        .profile-section input[type="text"][name="grade"] {
            width: 40%; 
            font-size: 12px;
        }
        .profile-section input[type="submit"] {
            background-color: #6DA36C;
            color: white;
            cursor: pointer;
            width: 100%; 
            padding: 10px; 
            border: none; 
            border-radius: 4px; 
            font-size: 16px; 
        }
        .profile-section input[type="submit"]:hover {
            background-color: #9FD1A4;
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
                        <img src="image/Log Out.png" alt="Logout Icon"> Logout
                    </a>
                </li>
            </ul>
        </div>
        <div class="content-area">
            <div class="content-box">
                <h2>Profile Account</h2>

                <div class="profile-section">
                    <div class="half-row">
                        <div class="input-group">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" placeholder="Your username..">
                        </div>
                        <div class="input-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Your email..">
                        </div>
                        <div class="input-group">
                            <label for="lname">Last Name</label>
                            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                        </div>
                    </div>
                    <div class="half-row">
                        <div class="input-group">
                            <label for="fname">First Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="Your first name..">
                        </div>
                        <div class="input-group">
                            <label for="grade">Grade</label>
                            <input type="text" id="grade" name="grade" placeholder="Your grade..">
                        </div>
                        <div class="input-group">
                            <label for="section">Section</label>
                            <input type="text" id="section" name="section" placeholder="Your section..">
                        </div>
                    </div>
                </div>
                <h2>Profile Settings</h2>
                <button type="button">Change Password</button>
            </div>
        </div>
    </div>
</body>
</html>


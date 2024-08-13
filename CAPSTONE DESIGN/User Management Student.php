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
            height: 90%;
            border-radius: 20px;
            text-align: left;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); 
            position: relative;
            width: 100%;
        }
        .content-box p {
            margin: 0;
        }
        .option-bar {
            margin-top: 10px;
            display: flex;
            align-items: center;
            width: 100%;
            justify-content: space-between;
        }
        .option-bar label {
            margin-right: 10px;
        }
        .option-bar select {
            margin-right: auto; 
        }
        .option-bar input[type="search"] {
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
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

        /* css of the table below*/

        table.customTable {
            width: 100%;
            background-color: #FFFFFF;
            border-collapse: collapse;
            border-width: 2px;
            border-color: #5e6064;
            border-style: solid;
            color: #000000;
            margin-top: 20px;
        }
        table.customTable td, table.customTable th {
            border-width: 2px;
            border-color: #555557;
            border-style: solid;
            padding: 5px;
        }
        table.customTable thead {
            background-color: #cacccf;
            padding: 10px;
        }

        /* button css*/

        button {
    border-radius: 0;
    background-color: gray;
    color: rgb(6, 6, 6);
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    width: 20%;
    margin-top: 20px; /* Move the button down */
}

button:hover {
    background-color: darkgray;
}

/* Style for the action buttons in the table */
.action-button {
    border: none;
    color: white;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
    margin: 2px;
    width: 55px;
}

.edit-button {
    background-color: #4CAF50; /* Green */
}

.edit-button:hover {
    background-color: #45a049;
}

.delete-button {
    background-color: #f44336; /* Red */
}

.delete-button:hover {
    background-color: #e53935;
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
                <p>List all student enrolled in Caniogan High School</p>
                <div class="option-bar">
                    <div>
                        <label for="show-entries">Show entries:</label>
                        <select id="show-entries">
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                    <div>
                        <label for="search">Search:</label>
                        <input type="search" id="search" placeholder="Search...">
                    </div>
                </div>
                <table class="customTable">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>T. ID</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Email</th>
                        <th>Class</th>
                         <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>01</td>
                          <td>202487</td>
                          <td>Johnson</td>
                          <td>Alex</td>
                          <td>alex.johnson@gmail.com</td>
                          <td>7-Sunflower</td>
                          <td><button class="action-button edit-button">Edit</button>
                            <button class="action-button delete-button">Delete</button></td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>202487</td>
                            <td>Johnson</td>
                            <td>Alex</td>
                            <td>alex.johnson@gmail.com</td>
                            <td>7-Sunflower</td>
                            <td><button class="action-button edit-button">Edit</button>
                                <button class="action-button delete-button">Delete</button></td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>202487</td>
                            <td>Johnson</td>
                            <td>Alex</td>
                            <td>alex.johnson@gmail.com</td>
                            <td>7-Sunflower</td>
                            <td><button class="action-button edit-button">Edit</button>
                                <button class="action-button delete-button">Delete</button></td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>202487</td>
                            <td>Johnson</td>
                            <td>Alex</td>
                            <td>alex.johnson@gmail.com</td>
                            <td>7-Sunflower</td>
                            <td><button class="action-button edit-button">Edit</button>
                                <button class="action-button delete-button">Delete</button></td>
                        </tr>
                      </tbody>
                  </table>
                  <button>Add new</button> 
              </div>
          </div>
      </div>
  </body>
  </html>
  
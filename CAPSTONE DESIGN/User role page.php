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
            display: flex;
            flex-direction: column;
            position: relative;
            background: url('image/background.jpg') center/cover no-repeat;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(214, 214, 214, 0.5); 
            z-index: 1;
        }
        header {
            background-color: rgba(117, 241, 107, 0.8); 
            color: rgb(6, 5, 5);
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            position: relative;
            width: 100%;
            z-index: 2;
            border-bottom: 5px solid yellow; /* Added yellow line at the bottom edge of the header */
        }
        header img {
            height: 100px;
            margin-right: 20px;
        }
        .centered-title {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            z-index: 2;
            position: relative;
            margin-top: 20px; /* Ensure the title is below the header */
        }
        .centered-title h1 {
            margin: 0;
            font-size: 3em; 
            color: rgb(2, 2, 2); 
        }
        .inner-content-box {
            background: #CBE6D2D4;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            text-align: center;
            width: 50%;
        }
        .button-row {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
        .button-row.single {
            justify-content: center;
        }
        .centered-title button, .button-row button {
            width: 150px; 
            height: 50px; 
            margin: 10px; 
            padding: 10px 20px;
            font-size: 1em;
            cursor: pointer;
            background-color: #84D88C; 
            border: none;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }
        .centered-title button:hover, .button-row button:hover {
            background-color: #71b98b; 
        }
    </style>
</head>
<body>
    <div class="overlay"></div>
    
    <div class="container">
  <svg viewBox="0 70 500 100" preserveAspectRatio="xMinYMin meet">
    <path d="M0,155 C100,90 400,270 600,50 L600,00 L0,0 Z" style="stroke: none; fill:#cadec8;"></path>
  </svg>
  <img src="image/logo.png" alt="Logo">
</div>
    <div class="centered-title">
        <h1>EduPerformance Tracker</h1>
        <div class="inner-content-box">
            <div class="button-row">
                <form action="Login Page of the Student.php" method="get">
                    <button name="role" value="student">Student</button>
                </form>
                <form action="Login Page of the Admin.php" method="get">
                    <button name="role" value="admin">ADMIN</button>
                </form>
            </div>
            <div class="button-row single">
                <form action="Login Page of the Teacher.php" method="get">
                    <button name="role" value="teacher">Teacher</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

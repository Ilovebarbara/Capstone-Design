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
        }
        header img {
            height: 100px;
            margin-right: 20px;
        }
        header h1 {
            margin: 0;
            margin-left: 200px;
            font-size: 3em; 
            color: rgb(2, 2, 2);
        }
        .centered-title {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            z-index: 2;
            position: relative;
            background-color: #D9EDDB; 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        }
        .centered-title h1 {
            margin: 0;
            font-size: 3em; 
            color: rgb(2, 2, 2); 
        }
        .content-box {
            background-color: #EBFBEF; 
            padding: 50px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); 
            z-index: 2;
            position: relative;
            margin-top: 30px;
            width: 30%; 
            margin: 20px auto; 
        }
        .content-box p {
            margin: 0;
            font-size: 2em; 
            margin-bottom: 20px;
            color: rgb(2, 2, 2);
        }
        .input-group {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            width: 100%;
            max-width: 400px;
            margin-bottom: 20px;
        }
        .input-group label {
            font-size: 1em;
            color: rgb(2, 2, 2);
            margin-bottom: 10px;
        }
        .input-group input {
            width: 100%;
            padding: 10px;
            height: 5px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 0;
        }
        .button-row {
            display: flex;
            justify-content: center;
            width: 100%;
            max-width: 400px;
        }
        .button-row button {
            flex: 1;
            padding: 10px 20px;
            font-size: 1em;
            height: 40px;
            cursor: pointer;
            background-color: #534e4e;
            border: 2px solid #000000; 
            border-radius: 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
            margin: 5px;
        }
        .button-row button:hover {
            background-color: #dfeae1; 
        }
        .back-button {
            width: 100px; 
        }
        .back-button {
            flex: 1;
            padding: 10px 20px;
            font-size: 1em;
            height: 30px;
            cursor: pointer;
            background-color: #cdc5c5;
            border: 2px solid #000000; 
            border-radius: 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
            margin: 5px;
        }
    </style>
</head>
<body>
    <div class="overlay"></div>
    <header>
        <img src="image/logo.png" alt="Logo">
        <h1>EduPerformance Tracker</h1>
    </header>
    
    <div class="content-box">
        <p>Reset Password</p>
        <div class="centered-title">
            <div class="input-group">
               
                <input type="password" id="password" name="password" placeholder="Enter Password">
            </div>
            <div class="input-group">
                
                <input type="password" id="repassword" name="repassword" placeholder="Confirm Password">
            </div>
            <div class="button-row">
                <button type="button">Submit</button>
            </div>
            <button type="button" class="back-button">Back</button>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Header</title>
    <style>
       html,
body {
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
  background: rgba(117, 241, 107, 0.8);
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
  background: #D9EDDB;
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  z-index: 2;
  position: relative;
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
  background: #EBFBEF;
  padding: 50px;
  border-radius: 10px;
  text-align: center;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  z-index: 2;
  position: relative;
  margin-top: 30px;
  height: 500px;
  width: 30%;
  margin: 20px auto;
}

.button-row {
  display: flex;
  justify-content: center;
  margin-top: 20px;
}

.content-box h1 {
  margin: 0;
  margin-top: 20px;
  margin-bottom: 20px;
  font-size: 2em;
  color: rgb(2, 2, 2);
}

.centered-title button,
.button-row button {
  background: #534e4e;
  width: 300px;
  height: 50px;
  margin: 10px;
  padding: 10px 20px;
  font-size: 1em;
  margin-top: 50px;
  cursor: pointer;
  border: 2px solid #000000;
  border-radius: 5px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  transition: background-color 0.3s ease;
}

.centered-title button:hover,
.button-row button:hover {
  background: #dfeae1;
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
    
        <div class="centered-title">
            
        </div>
    </div>

</body>
</html>

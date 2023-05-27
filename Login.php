<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
 body {
  background-color: #f1f1f1;
  font-family: Arial, sans-serif;
}

.container {
  width: 300px;
  margin: 0 auto;
  margin-top: 100px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  padding: 20px;
}

h2 {
  text-align: center;
  color: #333;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
  color: #555;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

input[type="submit"] {
  width: 100%;
  padding: 10px;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #45a049;
}

.error-message {
  color: #f44336;
  margin-top: 5px;
}
.container {
  background-image: url("ImageBf/asd.jpg");
  background-size: cover;
  background-position: center;
}
body {
    background-color: #F2DADF;;
    display: flex;
    align-content: center;
    justify-content: center;
    align-items: center;
    height: 100vh;
}


.button {
    display: inline-block;
    padding: 15px 25px;
    font-size: 24px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    outline: none;
    color: #fff;
    background-color: #4a9e86;
    border: none;
    border-radius: 15px;
    box-shadow: 0 9px #999;
}


.button:hover {background-color: #4a9e86}

.button:active {
     background-color: #4a9e86;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
<body>
  <div class="container">
    <form>
      <h2>Login</h2>
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
          <button class="button" onclick="clearInputs()">Login</button>
      <div class="form-group">
      </div>
    </form>
  </div>
  
</body>
</html>

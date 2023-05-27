
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  /* form container */
  .form-container {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: auto;
    max-width: 500px;
    padding: 20px;
    background-color: #f2f2f2;
    border-radius: 5px;
  }
 
  /* form elements */
  form {
    width: 100%;
  }
 
  label {
    font-weight: bold;
    display: block;
    margin-bottom: 10px;
  }
 
  input,
  textarea {
    width: 100%;
    padding: 10px;
    border-radius: 3px;
    border: 1px solid #ccc;
    box-sizing: border-box;
    margin-bottom: 20px;
  }
 
  textarea {
    height: 150px;
  }
 
  button[type="submit"],
  input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    margin-bottom: 10px;
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
 
  .button:hover {
    background-color: #4a9e86;
  }
 
  .button:active {
    background-color: #4a9e86;
    box-shadow: 0 5px #666;
    transform: translateY(4px);
  }
 
  @media screen and (max-width: 576px) {
    /* reduce form width on smaller screens*/
    .form-container {
      max-width: 350px;
    }
  }
 
  body {
    background-image: url("ImageBf/asd.jpg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }
</style>

<body>
<h2>Response Form</h2>
<form action="mail.php" method="post">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" required><br><br>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required><br><br>

  <label for="message">Message:</label>
  <input type="text" id="message" name="message" required><br><br>

  <input type="submit" value="send" name="send">
</form>
</body>
</html>
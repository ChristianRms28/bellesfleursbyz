<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belles Fleurs</title>
  <link rel="stylesheet" href="style.css">
  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>

  <link href="img/log.jpg" rel="icon">

</head>
<style>
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
 

</style>
<body>  

  <div class="navbar">
    <div class="inner-width">
      <a href="index.php" class="logo"><span>F</span>lowers</a>
      <div class="navbar-menu">
      <a href="index.php">Home</a>
      <a href="about.php">About</a>
      <a href="products.php">Products</a>
      <a href="upload.php">Upload</a>

        
      </div>
    </div>
  </div>
  <section id="home">
    <div class="content1">
      <div class="content">
        <p>Let’s turn your dream arrangement into a reality</p>
        <button> <a href='products.php'>buy now</a></button>
        <br><br>
<form action="mail.php" method="post">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" required><br><br>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required><br><br>

  <label for="message">Message:</label>
  <input type="text" id="message" name="message" required><br><br>

  <input type="submit" value="send" name="send">
      </div>
      <div class="social-container">
        <div class="social-icons">
          <li><a href="https://www.facebook.com/bellesfleursbyz"><i class="fa fa-facebook-f"></i></a></li>
          <li><a href="https://www.instagram.com/bellesfleursbyz/"><i class="fa fa-instagram"></i></a></li>
        </div>
      </div>
    </div>
    <div class="content2">
      <h1>Belles <span>Fleurs</span></h1>
    </div>
  </section>
</body>
</html>
<!-- <?php
// $host = 'localhost';
// $username = 'your_username';
// $password = 'your_password';
// $database = 'your_database';

// // Create a connection
// $conn = new mysqli($host, $username, $password, $database);

// // Check the connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // Perform a database query
// $sql = "SELECT * FROM your_table";
// $result = $conn->query($sql);

// // Process the query result
// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         // Access data from each row
//         $id = $row['id'];
//         $name = $row['name'];
//         // ... process the data
//     }
// } else {
//     echo "No results found.";
// }

// // Close the connection
// $conn->close();
?> -->

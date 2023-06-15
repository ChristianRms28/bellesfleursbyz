
<?php
// Assuming you have already established a database connection
include 'dbconnection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Validate the login credentials against the database
  // Example: Using MySQLi extension
  $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $query);
  
  if (mysqli_num_rows($result) == 1) {
    // Login successful
    echo "Login successful!";
  } else if (!$result){
    // Login failed
    echo "Invalid username or password.";
  }
}header("Location: admin.php");
?>

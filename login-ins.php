<?php
// Assuming your database credentials
$host = 'localhost';
$dbname = 'belles-fleurs';
$username = 'root';
$password = '';

// Attempt to establish a database connection
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Retrieve the submitted username and password from the form
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare and execute a query to check if the provided username and password exist in the database
    $stmt = $pdo->prepare("SELECT * FROM admin WHERE username = :username AND password = :password");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    // Check if a row was returned
    if ($stmt->rowCount() > 0) {
        // Authentication successful, redirect to a success page
        header("Location: admin.html");
        exit();
    } else {
        // Authentication failed, redirect back to the login page with an error message
        header("Location: index.php");
        exit();
    }
}
?>
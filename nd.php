<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belles Fleurs</title>
</head>
<body>
<?php
include "crudmain/config.php";
      $sql = "SELECT * FROM image";
      $result = mysqli_query($con, $sql);

      // Check if the query was successful
      if ($result) {
        // Loop through the rows and display the data
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['id'];
          $name = $row['Name'];
          $pPrice = $row['Price'];

echo '<div class="product">';
  echo "<img src='crudmain/$row[Image]'  width = '200px'  height = '200px'>";
     echo "<h3>$name</h3>";
    echo"<p>₱ $pPrice</p>";
   echo "</div>";
}
 mysqli_free_result($result);
      } else {
        // Handle the error if the query fails
        echo "Error: " . mysqli_error($con);
      }

      // Close the database connection
      mysqli_close($con);
?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
  <title>Belles Fleurs</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  margin: 0;
  padding: 0;
}

.container {
  width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-color: #fff;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
  color: #333;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  font-weight: bold;
  color: #555;
  margin-bottom: 5px;
}

input[type="text"],
textarea,
input[type="number"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.custom-label {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 20px;
  background-color: #4CAF50;
  color: #fff;
  cursor: pointer;
}

.custom-label span {
  margin-top: 10px;
}

.custom-label i {
  font-size: 40px;
}

input[type="file"] {
  display: none;
}

.custom-button {
  padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  border: none;
  cursor: pointer;
  width: 100%;
}

.custom-button:hover {
  background-color: #45a049;
}

</style>

<body>
  <div class="container">
    <h1>Product Upload Form</h1>
    <form action="products.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="description">Product Description:</label>
        <textarea id="description" name="description" required></textarea>
      </div>
      <div class="form-group">
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" required>
      </div>
      <div class="form-group">
        <label for="image" class="custom-label">
          <i class="fas fa-cloud-upload-alt"></i>
          <span>Select Product Image</span>
        </label>
        <input type="file" id="image" name="image" accept="image/*" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Upload" class="custom-button">
      </div>
      <form action="upload.php" method="POST" enctype="multipart/form-data">
  <input type="file" name="fileToUpload" id="fileToUpload">

</form>

    </form>
  </div>
  
  <?php
  if(isset($_FILES["fileToUpload"])) {
    $targetDirectory = "uploads/"; // specify the directory where you want to save the uploaded files
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;

    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow only specific file types
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    $fileExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    if (!in_array($fileExtension, $allowedExtensions)) {
        echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // If everything is ok, move the uploaded file to the specified directory
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "The file ". basename($_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
  }
  ?>
</body>
</html>

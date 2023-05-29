<!DOCTYPE html>
<html>
<head>
  <title>File Upload Form</title>
  <link rel="stylesheet">
  <script type = "text/javascript"></script>
</head>
<style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f1f1f1;
  padding: 20px;
}

h2 {
  text-align: center;
}

#upload-form {
  max-width: 400px;
  margin: 0 auto;
  background-color: #fff;
  padding: 30px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.file-upload {
  display: inline-block;
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.file-upload:hover {
  background-color: #45a049;
}

.upload-button {
  display: block;
  width: 100%;
  background-color: #333;
  color: #fff;
  border: none;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  border-radius: 5px;
  margin-top: 20px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.upload-button:hover {
  background-color: #555;
}

.upload-button:active {
  background-color: #222;
}

</style>
<body>
  <h2>Upload a File</h2>
  <form action="buy.html" method="post" enctype="multipart/form-data" id="upload-form">
    <label for="file-upload" class="file-upload">
      Choose a file
    </label>
    <input type="file" id="file-upload" name="file" accept=".pdf,.doc,.docx,.jpg,.png" />
    <input type="submit" value="Upload" class="upload-button" />
  </form>
  <script>
      const uploadInput = document.getElementById('upload-input');
const uploadedPhoto = document.getElementById('uploaded-photo');
uploadInput.addEventListener('change', function(event) {
  const file = event.target.files[0];
  const reader = new FileReader();

  reader.onload = function() {
    uploadedPhoto.src = reader.result;
  };

  reader.readAsDataURL(file);
});

  </script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belles Fleurs</title>
  <link rel="stylesheet" href="style.css">
  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    html, body {
  margin: 0;
  padding: 0;
  height: 100%;
}

body {
  background-color: #EFBBCC;
}
    h1 {
      text-align: center;
      color: #333;
    }

    .product-list {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .product {
      width: 300px;
      margin: 20px;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
    }

    .product img {
      width: 100%;
      height: auto;
      margin-bottom: 10px;
    }

    .product h3 {
      color: #333;
      margin-bottom: 10px;
    }

    .product p {
      color: #777;
      margin-bottom: 10px;
    }

    .product a {
      display: block;
      text-align: center;
      padding: 10px;
      background-color: #4CAF50;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }

    .product a:hover {
      background-color: #45a049;
    }
    
    .navbar-menu a {
      font-size: 13px;
      font-weight: 500;
      font-family: 'Oswald';
      color: #000000;
      text-transform: uppercase;
      letter-spacing: 2px;
      margin-left: 35px;
      display: inline-block;
    }
    .search-container {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 20px;
}

#search-input {
  padding: 10px;
  border: 2px solid #333;
  border-radius: 5px;
  outline: none;
  width: 300px;
  font-size: 16px;
}

#search-button {
  background-color: #333;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 10px 15px;
  margin-left: 5px;
  cursor: pointer;
  font-size: 16px;
  transition: background-color 0.3s ease;
}

#search-button:hover {
  background-color: #555;
}

  </style>
</head>
<body>
  <div class="navbar">
    <div class="navbar-menu">
    <a href="admin.php">Home</a>
      <a href="about2.php">About</a>
      <a href="products2.php">Products</a>
      <a href="crudmain/index.php">Upload</a>
    </div>
  </div>

  <div class="container">
    <br><br>
    <br><br>
    <h1>Featured Products</h1>
  <div class="container">

    <div class="product-list">
      <div class="product">
        <img src="ImageBf/b1.jpg" alt="Product 1">
        <h3>Basket Products</h3>
        <p>Like a rainbow bursting with vibrant hues, a basket of flowers brings joy that's simply too beautiful to refuse.</p>
        <a href="basket.html">View Products</a>
      </div>
      <div class="product">
        <img src="ImageBf/fr1.jpg" alt="Product 2">
        <h3>Frame Products</h3>
        <p>"In the frame of life's canvas, flowers bloom as delicate masterpieces, painting moments of beauty that forever last."</p>
        <a href="">View Products</a>
      </div>
      <div class="product">
        <img src="ImageBf/v1.jpg" alt="Product 3">
        <h3>Vase Products</h3>
        <p>"A vase of flowers, nature's sweet embrace, whispers tales of grace and fills every space with colors that inspire and hearts that admire."</p>
        <a href="#">View Products</a>
      </div>
      <div class="product">
        <img src="ImageBf/bq1.jpg" alt="Product 4">
        <h3>Bouquet Products</h3>
        <p>"A bouquet of flowers, a symphony of scents and hues, nature's gift bundled in delicate cues. Each bloom tells a story, a whisper of love, a reminder of beauty from earth above."</p>
        <a href="#">View Products</a>
      </div>
      <div class="product">
        <img src="ImageBf/circle.jpg" alt="Product 5">
        <h3>New Designs</h3>
        <p>"Like a tailored dream, customized flowers bloom, weaving desires and passions in a unique room. Each petal chosen with intention and care, creating a masterpiece beyond compare."</p>
     <a href="nd.php">View Products</a>
      </div>
      <!-- Add more product divs as needed -->
    </div>
  </div>

  <script>
    // JavaScript code here
    document.getElementById('search-form').addEventListener('submit', function(event) {
      event.preventDefault();
      var input = document.getElementById('search-input').value.toLowerCase();
      var products = document.querySelectorAll('.product');
      
      products.forEach(function(product) {
        var productName = product.querySelector('h3').innerText.toLowerCase();
        if (productName.includes(input)) {
          product.style.display = 'block';
        } else {
          product.style.display = 'none';
        }
      });
    });
  </script>
</body>
</html>

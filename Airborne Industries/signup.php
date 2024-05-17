<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>
    
  <div class="login">
      <div class="content">
          <h1>Sign Up</h1>
          <form action="includes/signuphandler.php" method="POST">
              <input type="text" name="email" placeholder="Email"><br>
              <input type="password" name="pass" placeholder="Password"><br>
              <input type="password" name="confpass" placeholder="Confirm Password"><br>
              <input type="submit"  value="Sign Up">
          </form>
          <p>Already have an account? <a href="login.php">Login</a></p>
          <p>Or</p>
          <div class="socials" id="facebook"><p>Sign Up with Facebook</p></div>
          <div class="socials" id="google"><p>Sign Up with Google</div>
      </div>
  </div>
</body>
</html>
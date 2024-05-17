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
          <h1>Login</h1>
          <form action="includes/loginhandler.php" method="POST">
              <input type="text" name="email" placeholder="Email"><br>
              <input type="password" name="password" placeholder="Password"><br>
              <a href="">Forgot password?</a><br>
              <input type="submit"  value="Login">
          </form>
          <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
          <p>Or</p>
          <div class="socials" id="facebook"><p>Login with Facebook</p></div>
          <div class="socials" id="google"><p>Login with Google</div>
      </div>
  </div>
</body>
</html>
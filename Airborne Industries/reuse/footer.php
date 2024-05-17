<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="footer">
        <div class="follow">
            <p>Follow Us</p>
            <a class="instagram"><i class="fa-brands fa-instagram" ></i></a>
        </div>
        <div class="form">
        <form action="includes/contacthandler.php" method="POST">
                <label>Want a custom product?</label><br>
              <input type="text" name="name" placeholder="Enter your name"><br>
              <input type="text" name="email" placeholder="Enter a valid email"><br>
              <textarea name="description" placeholder="Enter a description of the product"></textarea>
              <input type="submit" id="submit">
        </form>
        </div>
       
   </div>
</body>
</html>
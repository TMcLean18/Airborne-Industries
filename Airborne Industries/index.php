<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://kit.fontawesome.com/16234b4d97.js" crossorigin="anonymous"></script>
    <link rel="icon" type="images/png" href="images/internet.png">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" async></script>
    <title>Airborne Industries</title>
</head>
<body>
    <!-- Header (try and move logo to the middle)-->
    <?php
        include("reuse/header.php");
    ?>
     <div class = "navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="clothes.php">Clothes</a></li>
            <li><a href="accessories.php">Accessories</a></li>
        </ul>
    </div>
    <div class="imgnav">
        <div class="clothes">
            <img src="items/barbieHoodie (2).jpg">
        </div>
       
        <div class="accessories">
            <img src="items/jeanTote (1).jpg">
        </div>
        
    </div>
   <?php
        include("reuse/footer.php");
   ?>
    
</body>
</html>

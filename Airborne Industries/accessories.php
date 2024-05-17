<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script defer src="https://kit.fontawesome.com/16234b4d97.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
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
    <div class="products" onclick="linkPage('product/barbiehoodie.php')">
            <div class="product-container">
                <div class="pro">
                    <img src="items/jeanTote (1).jpg" alt="">
                    <div class=description>
                        <span>Airborne Industries</span>
                        <h5>Jean Tote Bag</h5>
                        <h4>R150</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
            </div>  
    </div>
</body>
</html>
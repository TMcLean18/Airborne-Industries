<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/16234b4d97.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" async></script>
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
    <div class="products">
        <h2>Recently Added</h2>
        <div class="product-container" >
            <div class="pro" onclick="linkPage('product/barbiehoodie.php')">
                <img src="items/barbieHoodie (1).jpg" alt="">
                <div class=description>
                    <span>Airborne Industries</span>
                    <h5>Barbie inspired hoodie</h5>
                    <h4>R375</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro" onclick="linkPage('product/bluesclues.php')">
                <img src="items/bluesClues.jpg" alt="">
                <div class=description>
                    <span>Airborne Industries</span>
                    <h5>Blues Clues Patchwork Jeans</h5>
                    <h4>R450.00</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro" onclick="linkPage('product/chevron.php')">
                <img src="items/chevron (2).jpg" alt="">
                <div class=description>
                    <span>Airborne Industries</span>
                    <h5>Chevron Patchwork Jeans</h5>
                    <h4>R450.00</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro" onclick="linkPage('product/fadeout.php')">
                <img src="items/FadeOutStarStruck (1).jpg" alt="">
                <div class=description>
                    <span>Airborne Industries</span>
                    <h5>Fade Out Star Struck Patchwork Jeans</h5>
                    <h4>R450.00</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro" onclick="linkPage('product/kwabantu.php')">
                <img src="items/kwaBantu.png" alt="">
                <div class=description>
                    <span>Airborne Industries</span>
                    <h5>Kwabantu Patchwork Jeans</h5>
                    <h4>R450.00</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro" onclick="linkPage('product/pastnpresent.php')">
                <img src="items/PAST&PRESENT (7).jpg" alt="">
                <div class=description>
                    <span>Airborne Industries</span>
                    <h5>Past & Present Patchwork Jeans</h5>
                    <h4>R450.00</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro" onclick="linkPage('product/redDiamond.php')">
                <img src="items/redDiamond (1).jpg" alt="">
                <div class=description>
                    <span>Airborne Industries</span>
                    <h5>Red Diamond Patchwork Jeans</h5>
                    <h4>R450.00</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            
        </div>
    </div>
</body>
</html>
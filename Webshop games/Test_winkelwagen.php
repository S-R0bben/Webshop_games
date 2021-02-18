<?php
session_start();
?>


<!DOCTYPE html>
<html>
    <head>
        <title>The Generics | Store</title>
        <meta name="description" content="This is the description">
        <link href="../webshop games/style.css" rel="stylesheet" type="text/css">
        <script src="store.js" async></script>
    </head>
    <body>
    <header id="main-nav">
        <ul class="main-nav">
            <a href="../webshop games/home.php"><img class="logo_small" src="../webshop games/Img/logo.png" alt="" srcset="">
                <li class="active"><a href="../webshop games/home.php"> Home </a></li>
                <li><a href="../webshop games/producten.php"> Producten </a></li>
                <li><a href="../webshop games/contact.php"> Contact </a></li>
                <li style="float: right;"><a href="../webshop games/checkout.php"><img style="width: 25px;" src="../webshop games/Img/shopping-cart.png"></a></li>
                <?php
                if (isset($_SESSION['naam'])) {

                    echo '<li style="float: right;">' . $_SESSION['naam'];

                    echo '<li style="float: right;"><a href="../webshop games/loguit.php"> Loguit </a></li>';

                    if ($_SESSION['Admin'] == 1) {

                        echo '<li><a class="Active" href="../webshop games/Beheren.php"> Beheren</a></li>';
                    }
                } else {
                    echo '<li style="float: right;"><a class="Active" href="../webshop games/login.php"> Login</a></li>';
                    echo '<li style="float: right;"><a href="../Webshop games/register.php">Registreer</a></li>';
                }

                ?>
        </ul>
    </header>
        <section class="container content-section">
            <h2 class="section-header">MUSIC</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Album 1</span>
                    <img class="shop-item-image" src="Images/Album 1.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$12.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">TOEVOEGEN AAN WINKELWAGEN</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Album 2</span>
                    <img class="shop-item-image" src="Images/Album 2.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$14.99</span>
                        <button class="btn btn-primary shop-item-button"type="button">TOEVOEGEN AAN WINKELWAGEN</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Album 3</span>
                    <img class="shop-item-image" src="./Img/Watch_Dogs_Legion.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$9.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">TOEVOEGEN AAN WINKELWAGEN</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Album 4</span>
                    <img class="shop-item-image" src="Images/Album 4.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$19.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">TOEVOEGEN AAN WINKELWAGEN</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">MERCH</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">T-Shirt</span>
                    <img class="shop-item-image" src="Images/Shirt.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$19.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">TOEVOEGEN AAN WINKELWAGEN</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Coffee Cup</span>
                    <img class="shop-item-image" src="Images/Cofee.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$6.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">TOEVOEGEN AAN WINKELWAGEN</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">WINKELWAGEN</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRIJS</span>
                <span class="cart-quantity cart-header cart-column">AANTAL</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Totaal</strong>
                <span class="cart-total-price">$0</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">AANKOOP</button>
        </section>
        <footer class="main-footer">
            <div class="container main-footer-container">
                <h3 class="band-name">The Generics</h3>
                <ul class="nav footer-nav">
                    <li>
                        <a href="https://www.youtube.com" target="_blank">
                            <img src="Images/YouTube Logo.png">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.spotify.com" target="_blank">
                            <img src="Images/Spotify Logo.png">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com" target="_blank">
                            <img src="Images/Facebook Logo.png">
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
    </body>
</html>
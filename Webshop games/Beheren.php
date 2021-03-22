<?php
session_start();
?>

<html>

<head>
    <title>BeNeLux Gaming</title>
    <link href="../webshop games/style.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300&display=swap" rel="stylesheet">
</head>


<body>
    <header id="main-nav">
        <ul class="main-nav">
            <a href="../webshop games/home.php"> <img class="logo_small" src="../webshop games/Img/Logo2.JPG" alt="" srcset="">
                <li class="active"><a href="../webshop games/home.php"> Home </a></li>
                <li><a href="../webshop games/producten.php"> Producten </a></li>
                <li><a href="../webshop games/contact.php"> Contact </a></li>
                <li style="float: right;"><a href="../webshop games/Test_winkelwagen.php"><img style="width: 25px;" src="../webshop games/Img/shopping-cart.png"></a></li>
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

    <div class="product_container">
        <div class="product" id="form">
            <p>Producten verwijderen:</p>
            <form action="../Webshop games/beheren_verwijderen.php" method="POST">


                Product id:<br>
                <input type="text" name="Prod_id"><br>


                <input type="submit" value="Submit">


            </form>
        </div>
        <div class="product" id="form">
            <p>Producten toevoegen:</p>
            <form action="../Webshop games/beheren_toevoegen.php" method="POST">


                Product id:<br>
                <input type="text" name="Prod_id"><br>

                Product naam:<br>
                <input type="text" name="Prod_naam"><br>

                Product prijs:<br>
                <input type="text" name="Prod_prijs"><br>

                Product omschrijving:<br>
                <input type="text" name="Prod_omschrijving"><br>

                Product image:<br>
                <input type="text" name="Prod_image"><br>


                <input type="submit" value="Submit">


            </form>
        </div>
    </div>

    <div class="product" id="form">
        <p>Producten wijzigen:</p>
        <form action="../Webshop games/beheren_wijzigen.php" method="POST">


            Product id:<br>
            <input type="text" name="Prod_id"><br>

            Product naam:<br>
            <input type="text" name="Prod_naam"><br>

            Product prijs:<br>
            <input type="text" name="Prod_prijs"><br>

            Product omschrijving:<br>
            <input type="text" name="Prod_omschrijving"><br>

            Product image:<br>
            <input type="text" name="Prod_image"><br>


            <input type="submit" value="Submit">


        </form>
    </div>

    <style>
        .product_container {
            display: flex;
            flex-flow: row wrap;

        }

        .product {
            border: 2px solid rgba(25, 25, 25, 0.4);
            margin: 20px;
            padding: 20px;
            max-width: 300px;

        }
    </style>


    <img class="logo" src="Img/logo_background_white.png" alt="" srcset="">

    <footer>
        <!-- Footer -->
        <div class="footer">
            <div class="footer_section">
                <h3>CONTACT INFORMATION</h3>
                <h4>ADRESS</h4><br>
                <img src="../webshop games/Img/sign.png" alt="" srcset="">
                <p>Schapenland 12, 1991 CV</p><br>
                <h4>PHONE</h4><br>
                <img src="../webshop games/Img/phone-call.png" alt="" srcset="">
                <p>06 - 21 10 49 61</p>
            </div>

            <div class="footer_section">
                <h3 style="color: white;">..</h3>
                <h4>EMAIL</h4><br>
                <img src="../webshop games/Img/email.png" alt="" srcset="">
                <p>stefan.robben@icloud.com</p><br>
                <img src="../webshop games/Img/email.png" alt="" srcset="">
                <p>levibohm01@gmail.com</p><br>
                <img src="../webshop games/Img/email.png" alt="" srcset="">
                <p>jorenoderooij@gmail.com</p><br>
                <h4>WORKING DAYS/HOURS</h4><br>
                <img src="../webshop games/Img/clock.png" alt="" srcset="">
                <p>Mo - Fri: 9:00 AM - 6:00 PM</p>
            </div>

            <div class="footer_section2">
                <h3>MENU</h3>
                <li class="active"><a href="../webshop games/home.php"> Home </a></li>
                <li><a href="../webshop games/producten.php"> Producten </a></li>
                <li><a href="../webshop games/contact.php"> Contact </a></li>
                <li><a href="../webshop games/login.php">Login</a></li>
                <li><a href="../webshop games/register.php">Registreer</a></li>
            </div>
        </div>

        <div class="footer_copyright">
            <p>©2020 | Stefan Robben | All rights reserved</p>
        </div>
    </footer>
</body>

</html>

<script>
    window.onscroll = function() {
        myFunction()
    };

    // Get the header
    var header = document.getElementById("main-nav");

    // Get the offset position of the navbar
    var sticky = header.offsetTop;

    // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
</script>
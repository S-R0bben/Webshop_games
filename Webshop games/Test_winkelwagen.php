<?php
session_start();
include 'Connectie.php';


include 'Connectie.php';
$totaal_prijs = 0;

if (isset($_SESSION['Winkelwagen'])) {
    echo '<div class="producten">';
    foreach ($_SESSION['Winkelwagen'] as $id) {

        $vraag = 'SELECT * FROM producten WHERE Prod_id= ' . $id;
        $resultaat = $conn->query($vraag);

        if ($resultaat->num_rows > 0) { {

                $rij = $resultaat->fetch_assoc();

                $id = $rij['Prod_id'];
                $naam = $rij['Prod_naam'];
                $prijs = $rij['Prod_prijs'];
                $omschrijving = $rij['Prod_omschrijving'];
                $image = $rij['Prod_image'];

                $totaal_prijs += $prijs;


                echo '<form class="card">';
                echo '<h3>' . $naam . '</h3>';
                echo '<img src="' . $image . '"width="250" height="190">';
                echo ' <p class="prijs">€ ' . $prijs . '</p>';
                echo ' <p class="omschrijving">' . $omschrijving . '</p>';
                echo '<input type="hidden" value=' . $id . '>';
                echo '</form>';
            }
        }
    }
    echo '</div>';
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Welvarende Heren</title>
    <link href="../webshop games/style.css" rel="stylesheet" type="text/css">
    <link href="../Webshop games/styles.css" rel="stylesheet" type="text/css">
    <script src="store.js" async></script>
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
                <?php echo '<h5> de totaal prijs is € ' . $totaal_prijs . '</h5>'; ?>
                <span class="cart-total-price">$0</span>

            </div>
            <button class="btn btn-primary btn-purchase" type="button">BESTELLEN</button>
        </section>

</body>

</html>
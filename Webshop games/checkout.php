<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../webshop games/style.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300&display=swap" rel="stylesheet">
    <title>Checkout</title>
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


    <?php


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


    if (count($_SESSION['Winkelwagen']) >= 0) {
        echo  '<li style="float: right;"> <a href="../webshop games/winkelwagen_legen.php"><button>Winkelwagen legen</button></a></h2>';
        echo '<h5> de totaal prijs is € ' . $totaal_prijs . '</h5>';
        echo '<li style="float: right;"><a href="../webshop games/Bestelling.php"><button>Bestelling plaatsen</button></a>';
    } else {
        echo '<h5> Je winkelwagen is leeg</h5>';
    }


    ?>

    <style>
        .producten {
            display: flex;
            flex-flow: row wrap;
            float: center;
            text-align: center;
            position: absolute;
            top: 40px;
        }

        .card {
            box-shadow: 4px 4px 8px 4px #f85b0027;
            font-family: arial;
            margin: 75px;
            padding: 10px;
            top: 25px;
            display: inline-block;
        }


        h1 {
            color: white;
            text-transform: uppercase;
            font-size: 70px;
            text-align: center;
            margin-top: 275px;
        }

        h2 {
            color: white;
            text-transform: uppercase;
            font-size: 200px;
            text-align: center;
            margin-top: -50px;
        }

        h5 {
            color: black;
            text-transform: uppercase;
            font-size: -20px;
            text-align: center;
            margin-top: 500px;

        }
    </style>
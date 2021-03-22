<html>
<link href="./style.css" rel="stylesheet" type="text/css">
</html>

<?php
include 'Connectie.php';


$vraag = 'SELECT * FROM producten';


$resultaat = $conn->query($vraag);


if ($resultaat->num_rows > 0) {
    echo '<div class="producten">';
    while($rij = $resultaat->fetch_assoc()) //Een rij ophalen
    {

        $id = $rij['Prod_id'];
        $naam = $rij['Prod_naam'];
        $prijs = $rij['Prod_prijs'];
        $omschrijving = $rij['Prod_omschrijving'];
        $image = $rij['Prod_image'];


        echo '<form class="card" method="POST" action="verwerk_winkelwagen.php">';
        echo '<h3>' . $naam . '</h3>';
        echo '<img src="' . $image . '"width="300" height="400">';
        echo ' <p class="prijs">€ ' . $prijs . '</p>';
        echo ' <p class="omschrijving">' . $omschrijving . '</p>';
        echo '<input type="hidden" name="Prod_id" value='.$id.'>';
        echo '<p> <button>Toevoegen aan winkelwagen</button></p>';
        echo '</form>';
    }

    echo '</div>';
}

?>

<style>

.producten {
        display: flex;
        flex-flow: row wrap;
        float: center;
        text-align: center;
    }
    .card {
    box-shadow: 4px 4px 8px 4px #f85b0027;
    font-family: arial;
    margin:75px;
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

.product_img{
    width: 100%;
    text-align: center;
}

.product img{
    padding: 10px;
    margin-top: 10px;
    margin-bottom: 10px;
    margin-left: auto;
    margin-right: auto;
    height: 35vh; 
}



</style>
    